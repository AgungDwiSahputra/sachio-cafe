<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Mail\OrderPlaced;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PaymentPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $street_address;
    public $city;
    public $state;
    public $zip_code;
    public $shipping_method;
    public $payment_method;
    public $grand_total;

    // Parameter Order Dari Cart
    public $datas;

    public function mount($order){
        $order = base64_decode($order);
        $order = json_decode($order);
        $this->datas = $order;
    }

    public function confirmPayment(){
        $cart_items = CartManagement::getCartItemsFromCookie();

        $full_name = $this->first_name . ' ' . $this->last_name;

        $order = new Order();
        $order->user_id = 1;
        $order->grand_total = $this->grand_total;
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'paid';
        $order->status = 'new';
        $order->shipping_amount = 0;
        $order->shipping_method = $this->shipping_method;
        $order->notes = 'Order placed by ' . $full_name;
        $order->save();

        $address = new Address();
        $address->order_id = $order->id;
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->phone = $this->phone;
        $address->email = $this->email;
        $address->address = $this->street_address;
        $address->city = $this->city;
        $address->state = $this->state;
        $address->zip_code = $this->zip_code;
        $address->save();

        $order->items()->createMany($cart_items);
        CartManagement::clearCartItems();

        
        Mail::to($address->email)->send(new OrderPlaced($order));
        
        $data_payment = [
            'order' => $order,
            'address' => $address
        ];
        return redirect()->route('success', base64_encode(json_encode($data_payment)));
    }

    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();

        $this->first_name = $this->datas->first_name;
        $this->last_name = $this->datas->last_name;
        $this->phone = $this->datas->phone;
        $this->email = $this->datas->email;
        $this->street_address = $this->datas->street_address;
        $this->city = $this->datas->city;
        $this->state = $this->datas->state;
        $this->zip_code = $this->datas->zip_code;
        $this->shipping_method = $this->datas->shipping_method;
        $this->payment_method = $this->datas->payment_method;
        $this->grand_total = $this->datas->grand_total;
        
        return view('livewire.payment-page');
    }
}
