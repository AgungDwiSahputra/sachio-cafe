<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Product')]
class ProductDetailPage extends Component
{
    public $slug;
    
    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();

        $data = [
            'product'=> $product,
        ];
        return view('livewire.product-detail-page', $data);
    }
}
