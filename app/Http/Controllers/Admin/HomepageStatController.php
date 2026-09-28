<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageStatController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'value' => [
                'required',
                'string',
                'max:50',
            ],

            'label' => [
                'required',
                'string',
                'max:120',
            ],
        ]);

        $nextOrder =
            ((int) HomepageStat::max('sort_order')) + 1;

        HomepageStat::create([
            'value' => $validated['value'],
            'label' => $validated['label'],
            'sort_order' => $nextOrder,
            'is_active' => true,
        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Statistic added successfully.')
            ->with('active_section', 'stats');
    }


    public function update(
        Request $request,
        HomepageStat $stat
    ) {
        $validated = $request->validate([
            'value' => [
                'required',
                'string',
                'max:50',
            ],

            'label' => [
                'required',
                'string',
                'max:120',
            ],
        ]);

        $stat->update([
            'value' => $validated['value'],
            'label' => $validated['label'],
        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Statistic updated successfully.')
            ->with('active_section', 'stats');
    }


    public function toggle(HomepageStat $stat)
    {
        $stat->update([
            'is_active' => !$stat->is_active,
        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with(
                'success',
                $stat->is_active
                    ? 'Statistic enabled successfully.'
                    : 'Statistic disabled successfully.'
            )
            ->with('active_section', 'stats');
    }


    public function moveUp(HomepageStat $stat)
    {
        $items = HomepageStat::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        $position = $items->search(
            fn ($item) => $item->id === $stat->id
        );

        if ($position !== false && $position > 0) {
            $this->swapOrder(
                $stat,
                $items[$position - 1]
            );
        }

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Statistic moved up.')
            ->with('active_section', 'stats');
    }


    public function moveDown(HomepageStat $stat)
    {
        $items = HomepageStat::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        $position = $items->search(
            fn ($item) => $item->id === $stat->id
        );

        if (
            $position !== false &&
            $position < $items->count() - 1
        ) {
            $this->swapOrder(
                $stat,
                $items[$position + 1]
            );
        }

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Statistic moved down.')
            ->with('active_section', 'stats');
    }


    public function destroy(HomepageStat $stat)
    {
        $stat->delete();

        $this->normalizeOrder();

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Statistic deleted successfully.')
            ->with('active_section', 'stats');
    }


    private function swapOrder(
        HomepageStat $first,
        HomepageStat $second
    ): void {
        DB::transaction(function () use ($first, $second) {

            /*
             * Normalize first so every item has a
             * predictable unique ordering position.
             */
            $this->normalizeOrder();

            $first->refresh();
            $second->refresh();

            $firstOrder = $first->sort_order;
            $secondOrder = $second->sort_order;

            $first->update([
                'sort_order' => $secondOrder,
            ]);

            $second->update([
                'sort_order' => $firstOrder,
            ]);
        });
    }


    private function normalizeOrder(): void
    {
        HomepageStat::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->each(function (
                HomepageStat $stat,
                int $index
            ) {
                $order = $index + 1;

                if ($stat->sort_order !== $order) {
                    $stat->update([
                        'sort_order' => $order,
                    ]);
                }
            });
    }
}