<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageManufacturingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomepageManufacturingImageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],

            'alt_text' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        $path = $request
            ->file('image')
            ->store(
                'homepage/manufacturing',
                'public'
            );

        $nextOrder =
            (
                HomepageManufacturingImage::query()
                    ->max('sort_order') ?? -1
            ) + 1;

        HomepageManufacturingImage::create([
            'image' =>
                'storage/' . $path,

            'alt_text' =>
                $validated['alt_text'] ?? null,

            'sort_order' =>
                $nextOrder,

            'is_active' =>
                true,
        ]);

        return $this->success(
            'Manufacturing image added successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        HomepageManufacturingImage $manufacturingImage
    ) {
        $validated = $request->validate([
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],

            'alt_text' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        $data = [
            'alt_text' =>
                $validated['alt_text'] ?? null,
        ];

        if ($request->hasFile('image')) {

            $oldImage =
                $manufacturingImage->image;

            $path = $request
                ->file('image')
                ->store(
                    'homepage/manufacturing',
                    'public'
                );

            $data['image'] =
                'storage/' . $path;

            $this->deleteUploadedFile(
                $oldImage
            );
        }

        $manufacturingImage->update(
            $data
        );

        return $this->success(
            'Manufacturing image updated successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ENABLE / DISABLE
    |--------------------------------------------------------------------------
    */

    public function toggle(
        HomepageManufacturingImage $manufacturingImage
    ) {
        $manufacturingImage->update([
            'is_active' =>
                !$manufacturingImage->is_active,
        ]);

        return $this->success(
            $manufacturingImage->is_active
                ? 'Manufacturing image enabled successfully.'
                : 'Manufacturing image disabled successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MOVE UP
    |--------------------------------------------------------------------------
    */

    public function moveUp(
        HomepageManufacturingImage $manufacturingImage
    ) {
        DB::transaction(function () use (
            $manufacturingImage
        ) {
            $this->normalizeOrder();

            $manufacturingImage->refresh();

            $previous =
                HomepageManufacturingImage::query()
                    ->where(
                        'sort_order',
                        '<',
                        $manufacturingImage->sort_order
                    )
                    ->orderByDesc('sort_order')
                    ->orderByDesc('id')
                    ->first();

            if (!$previous) {
                return;
            }

            $currentOrder =
                $manufacturingImage->sort_order;

            $manufacturingImage->update([
                'sort_order' =>
                    $previous->sort_order,
            ]);

            $previous->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return $this->success(
            'Manufacturing image moved up.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MOVE DOWN
    |--------------------------------------------------------------------------
    */

    public function moveDown(
        HomepageManufacturingImage $manufacturingImage
    ) {
        DB::transaction(function () use (
            $manufacturingImage
        ) {
            $this->normalizeOrder();

            $manufacturingImage->refresh();

            $next =
                HomepageManufacturingImage::query()
                    ->where(
                        'sort_order',
                        '>',
                        $manufacturingImage->sort_order
                    )
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->first();

            if (!$next) {
                return;
            }

            $currentOrder =
                $manufacturingImage->sort_order;

            $manufacturingImage->update([
                'sort_order' =>
                    $next->sort_order,
            ]);

            $next->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return $this->success(
            'Manufacturing image moved down.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy(
        HomepageManufacturingImage $manufacturingImage
    ) {
        $image =
            $manufacturingImage->image;

        $manufacturingImage->delete();

        $this->deleteUploadedFile(
            $image
        );

        $this->normalizeOrder();

        return $this->success(
            'Manufacturing image deleted successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | NORMALIZE ORDER
    |--------------------------------------------------------------------------
    */

    private function normalizeOrder(): void
    {
        HomepageManufacturingImage::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->each(
                function (
                    HomepageManufacturingImage $image,
                    int $index
                ) {
                    if (
                        $image->sort_order !== $index
                    ) {
                        $image->update([
                            'sort_order' =>
                                $index,
                        ]);
                    }
                }
            );
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE STORAGE FILE
    |--------------------------------------------------------------------------
    */

    private function deleteUploadedFile(
        ?string $file
    ): void {
        if (
            !$file ||
            !str_starts_with(
                $file,
                'storage/'
            )
        ) {
            return;
        }

        Storage::disk('public')->delete(
            Str::after(
                $file,
                'storage/'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SUCCESS
    |--------------------------------------------------------------------------
    */

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
                'manufacturing'
            );
    }
}