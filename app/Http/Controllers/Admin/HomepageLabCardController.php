<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageLabCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomepageLabCardController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:180',
            ],

            'subtitle' => [
                'nullable',
                'string',
                'max:180',
            ],

            'button_url' => [
                'nullable',
                'string',
                'max:500',
            ],

            'image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],
        ]);

        $validated['image'] =
            'storage/' . $request
                ->file('image')
                ->store(
                    'homepage/lab',
                    'public'
                );

        $validated['sort_order'] =
            ((int) HomepageLabCard::max('sort_order')) + 1;

        $validated['is_active'] = true;

        HomepageLabCard::create($validated);

        return $this->success(
            'Laboratory card added successfully.'
        );
    }


    public function update(
        Request $request,
        HomepageLabCard $labCard
    ) {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:180',
            ],

            'subtitle' => [
                'nullable',
                'string',
                'max:180',
            ],

            'button_url' => [
                'nullable',
                'string',
                'max:500',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],
        ]);

        if ($request->hasFile('image')) {

            $this->deleteUploadedFile(
                $labCard->image
            );

            $validated['image'] =
                'storage/' . $request
                    ->file('image')
                    ->store(
                        'homepage/lab',
                        'public'
                    );
        }

        $labCard->update($validated);

        return $this->success(
            'Laboratory card updated successfully.'
        );
    }


    public function toggle(
        HomepageLabCard $labCard
    ) {
        $labCard->update([
            'is_active' =>
                !$labCard->is_active,
        ]);

        return $this->success(
            'Laboratory card visibility updated.'
        );
    }


    public function moveUp(
        HomepageLabCard $labCard
    ) {
        DB::transaction(function () use ($labCard) {

            $this->normalizeOrder();

            $labCard->refresh();

            $previous =
                HomepageLabCard::query()
                    ->where(
                        'sort_order',
                        '<',
                        $labCard->sort_order
                    )
                    ->orderByDesc('sort_order')
                    ->orderByDesc('id')
                    ->first();

            if (!$previous) {
                return;
            }

            $currentOrder =
                $labCard->sort_order;

            $labCard->update([
                'sort_order' =>
                    $previous->sort_order,
            ]);

            $previous->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return $this->success(
            'Laboratory card moved up.'
        );
    }


    public function moveDown(
        HomepageLabCard $labCard
    ) {
        DB::transaction(function () use ($labCard) {

            $this->normalizeOrder();

            $labCard->refresh();

            $next =
                HomepageLabCard::query()
                    ->where(
                        'sort_order',
                        '>',
                        $labCard->sort_order
                    )
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->first();

            if (!$next) {
                return;
            }

            $currentOrder =
                $labCard->sort_order;

            $labCard->update([
                'sort_order' =>
                    $next->sort_order,
            ]);

            $next->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return $this->success(
            'Laboratory card moved down.'
        );
    }


    public function destroy(
        HomepageLabCard $labCard
    ) {
        $this->deleteUploadedFile(
            $labCard->image
        );

        $labCard->delete();

        $this->normalizeOrder();

        return $this->success(
            'Laboratory card deleted successfully.'
        );
    }


    private function normalizeOrder(): void
    {
        HomepageLabCard::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->values()
            ->each(
                function (
                    HomepageLabCard $card,
                    int $index
                ) {
                    if (
                        $card->sort_order
                        !== $index
                    ) {
                        $card->update([
                            'sort_order' =>
                                $index,
                        ]);
                    }
                }
            );
    }


    private function deleteUploadedFile(
        ?string $path
    ): void {
        if (
            !$path ||
            !str_starts_with(
                $path,
                'storage/'
            )
        ) {
            return;
        }

        Storage::disk('public')->delete(
            substr(
                $path,
                strlen('storage/')
            )
        );
    }


    private function success(
        string $message
    ) {
        return redirect()
            ->route(
                'admin.homepage.edit'
            )
            ->with(
                'success',
                $message
            )
            ->with(
                'active_section',
                'lab'
            );
    }
}