<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessPage extends Component
{
    public $datas;

    public function mount($payment){
        $payment = base64_decode($payment);
        $payment = json_decode($payment, true);
        if(!isset($payment['order'])){
            return redirect()->route('home');
        }
        $this->datas = $payment;
    }
    public function render()
    {
        return view('livewire.success-page');
    }
}
