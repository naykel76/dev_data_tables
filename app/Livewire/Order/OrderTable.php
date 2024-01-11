<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderTable extends Component
{
    use WithPagination;

    public function render()
    {
        $query = Order::query();

        return view('livewire.order.order-table', [
            'orders' => $query->paginate(10),
        ]);
    }
}
