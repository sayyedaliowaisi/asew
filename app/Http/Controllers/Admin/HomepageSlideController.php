<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomepageSlideController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Store New Slide
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
                'homepage/slides',
                'public'
            );

        $nextOrder =
            ((int) HomepageSlide::max('sort_order'))
            + 1;

        HomepageSlide::create([
            'image' =>
                'storage/' . $path,

            'alt_text' =>
                $validated['alt_text'] ?? null,

            'sort_order' =>
                $nextOrder,

            'is_active' =>
                true,
        ]);

        return back()->with(
            'success',
            'New homepage slide added successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Update Slide
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        HomepageSlide $slide
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

            $oldImage = $slide->image;

            $path = $request
                ->file('image')
                ->store(
                    'homepage/slides',
                    'public'
                );

            $data['image'] =
                'storage/' . $path;

            $slide->update($data);

            $this->deleteImage($oldImage);

        } else {

            $slide->update($data);
        }

        return back()->with(
            'success',
            'Homepage slide updated successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Toggle
    |--------------------------------------------------------------------------
    */

    public function toggle(
        HomepageSlide $slide
    ) {
        $slide->update([
            'is_active' =>
                !$slide->is_active,
        ]);

        return back()->with(
            'success',
            $slide->is_active
                ? 'Slide enabled successfully.'
                : 'Slide disabled successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Move Up
    |--------------------------------------------------------------------------
    */

    public function moveUp(
        HomepageSlide $slide
    ) {
        $previous = HomepageSlide::query()
            ->where(function ($query) use ($slide) {

                $query
                    ->where(
                        'sort_order',
                        '<',
                        $slide->sort_order
                    )
                    ->orWhere(function ($query) use ($slide) {

                        $query
                            ->where(
                                'sort_order',
                                $slide->sort_order
                            )
                            ->where(
                                'id',
                                '<',
                                $slide->id
                            );
                    });
            })
            ->orderByDesc('sort_order')
            ->orderByDesc('id')
            ->first();

        if (!$previous) {
            return back();
        }

        $this->swapOrder(
            $slide,
            $previous
        );

        return back()->with(
            'success',
            'Slide moved up.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Move Down
    |--------------------------------------------------------------------------
    */

    public function moveDown(
        HomepageSlide $slide
    ) {
        $next = HomepageSlide::query()
            ->where(function ($query) use ($slide) {

                $query
                    ->where(
                        'sort_order',
                        '>',
                        $slide->sort_order
                    )
                    ->orWhere(function ($query) use ($slide) {

                        $query
                            ->where(
                                'sort_order',
                                $slide->sort_order
                            )
                            ->where(
                                'id',
                                '>',
                                $slide->id
                            );
                    });
            })
            ->orderBy('sort_order')
            ->orderBy('id')
            ->first();

        if (!$next) {
            return back();
        }

        $this->swapOrder(
            $slide,
            $next
        );

        return back()->with(
            'success',
            'Slide moved down.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Delete
    |--------------------------------------------------------------------------
    */

    public function destroy(
        HomepageSlide $slide
    ) {
        $image = $slide->image;

        $slide->delete();

        $this->deleteImage($image);

        $this->normalizeOrder();

        return back()->with(
            'success',
            'Homepage slide deleted successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Swap Order
    |--------------------------------------------------------------------------
    */

    private function swapOrder(
        HomepageSlide $first,
        HomepageSlide $second
    ): void {
        DB::transaction(function () use (
            $first,
            $second
        ) {
            $firstOrder =
                $first->sort_order;

            $secondOrder =
                $second->sort_order;

            /*
             * If old rows somehow have the same
             * sort_order, normalize first.
             */
            if ($firstOrder === $secondOrder) {

                $this->normalizeOrder();

                $first->refresh();
                $second->refresh();

                $firstOrder =
                    $first->sort_order;

                $secondOrder =
                    $second->sort_order;
            }

            $first->update([
                'sort_order' =>
                    $secondOrder,
            ]);

            $second->update([
                'sort_order' =>
                    $firstOrder,
            ]);
        });
    }


    /*
    |--------------------------------------------------------------------------
    | Normalize
    |--------------------------------------------------------------------------
    */

    private function normalizeOrder(): void
    {
        HomepageSlide::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->each(function (
                HomepageSlide $slide,
                int $index
            ) {
                $newOrder =
                    $index + 1;

                if (
                    $slide->sort_order
                    !== $newOrder
                ) {
                    $slide->update([
                        'sort_order' =>
                            $newOrder,
                    ]);
                }
            });
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Uploaded Image
    |--------------------------------------------------------------------------
    */

    private function deleteImage(
        ?string $image
    ): void {
        if (
            !$image ||
            !str_starts_with(
                $image,
                'storage/'
            )
        ) {
            return;
        }

        Storage::disk('public')->delete(
            Str::after(
                $image,
                'storage/'
            )
        );
    }
}