<?php

namespace App\Livewire\Order;

use App\Livewire\Traits\Searchable;
use App\Livewire\Traits\Sortable;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderTable extends Component
{
    use WithPagination, Searchable, Sortable;

    public function render()
    {
        $query = Order::query();
        $query =  $this->applySearch($query);
        $query =  $this->applySorting($query);

        return view('livewire.order.order-table', [
            'orders' => $query->paginate(10),
        ]);
    }
}
