<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class MyOrdersDetailPage extends Component
{
    public $order_history;

    public function mount($order)
    {
        $order = base64_decode($order);
        $order = json_decode($order);
        $this->order_history = $order;
    }

    public function render()
    {
        $order = Order::with('address')->where('id', $this->order_history->id)->first();
        $order_items = OrderItem::with('product')->where('order_id', $this->order_history->id)->get();
        
        $data = [
            'order' => $order,
            'order_items'=> $order_items
        ];

        return view('livewire.my-orders-detail-page', $data);
    }
}
