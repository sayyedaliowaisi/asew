<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageReasonController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:180'],
            'description' => ['required', 'string', 'max:1000'],
        ]);

        $nextOrder = ((int) HomepageReason::max('sort_order')) + 1;

        HomepageReason::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'sort_order' => $nextOrder,
            'is_active' => true,
        ]);

        return $this->back(
            'Reason added successfully.'
        );
    }

    public function update(
        Request $request,
        HomepageReason $reason
    ) {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:180'],
            'description' => ['required', 'string', 'max:1000'],
        ]);

        $reason->update($validated);

        return $this->back(
            'Reason updated successfully.'
        );
    }

    public function toggle(HomepageReason $reason)
    {
        $reason->update([
            'is_active' => !$reason->is_active,
        ]);

        return $this->back(
            $reason->is_active
                ? 'Reason enabled successfully.'
                : 'Reason disabled successfully.'
        );
    }

    public function moveUp(HomepageReason $reason)
    {
        $items = $this->orderedItems();

        $position = $items->search(
            fn ($item) => $item->id === $reason->id
        );

        if ($position !== false && $position > 0) {
            $this->swapOrder(
                $reason,
                $items[$position - 1]
            );
        }

        return $this->back(
            'Reason moved up.'
        );
    }

    public function moveDown(HomepageReason $reason)
    {
        $items = $this->orderedItems();

        $position = $items->search(
            fn ($item) => $item->id === $reason->id
        );

        if (
            $position !== false &&
            $position < $items->count() - 1
        ) {
            $this->swapOrder(
                $reason,
                $items[$position + 1]
            );
        }

        return $this->back(
            'Reason moved down.'
        );
    }

    public function destroy(HomepageReason $reason)
    {
        $reason->delete();

        $this->normalizeOrder();

        return $this->back(
            'Reason deleted successfully.'
        );
    }

    private function orderedItems()
    {
        return HomepageReason::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();
    }

    private function swapOrder(
        HomepageReason $first,
        HomepageReason $second
    ): void {
        DB::transaction(function () use ($first, $second) {
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
        $this->orderedItems()
            ->each(function (HomepageReason $reason, int $index) {
                $order = $index + 1;

                if ($reason->sort_order !== $order) {
                    $reason->update([
                        'sort_order' => $order,
                    ]);
                }
            });
    }

    private function back(string $message)
    {
        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', $message)
            ->with('active_section', 'why');
    }
}