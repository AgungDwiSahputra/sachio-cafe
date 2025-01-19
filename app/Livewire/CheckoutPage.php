<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Address;
use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Checkout")]
class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $street_address;
    public $city;
    public $state;
    public $zip_code;
    public $payment_method;

    public function mount(){
        $cart_items = CartManagement::getCartItemsFromCookie();
        if(count($cart_items) == 0){
            return redirect('/products');
        }
    }

    public function placeOrder(){
        $this->validate([
            "first_name"=> "required",
            "last_name"=> "required",
            "phone"=> "required",
            "email"=> "required",
            "street_address"=> "required",
            "city"=> "required",
            "state"=> "required",
            "zip_code"=> "required",
            "payment_method"=> "required",
        ]);

        $cart_items = CartManagement::getCartItemsFromCookie();
        $data = [
            "first_name"=> $this->first_name,
            "last_name"=> $this->last_name,
            "phone"=> $this->phone,
            "email"=> $this->email,
            "street_address"=> $this->street_address,
            "city"=> $this->city,
            "state"=> $this->state,
            "zip_code"=> $this->zip_code,
            "payment_method"=> $this->payment_method,
            "grand_total"=>CartManagement::calculateGrandTotal($cart_items) + rand(1, 999)
        ];

        return redirect()->route('payment', base64_encode(json_encode($data)));
        // return redirect('/payment?datas='.base64_encode(json_encode($data)));

    }

    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);

        $data = [
            "cart_items"=> $cart_items,
            "grand_total"=> $grand_total
        ];

        // LANJUTKAN PENGOLAHAN PAYMENT METHOD (Chapter 22 - 18:00)
        return view('livewire.checkout-page', $data);
    }
}
