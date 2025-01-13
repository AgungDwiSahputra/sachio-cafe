<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page | Sachio Cafe')]
class HomePage extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)->get();
        $products = Product::where(['is_active' => 1, 'on_sale' => 1, 'in_stock' => 1])->get();

        $data = [
            'categories'=> $categories,
            'products'=> $products,
        ];
        return view('livewire.home-page', $data);
    }
}
