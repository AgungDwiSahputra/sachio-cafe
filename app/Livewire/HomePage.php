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
        $categories = Category::all();
        $products = Product::with('category')->get();

        $data = [
            'categories'=> $categories,
            'products'=> $products,
        ];
        return view('livewire.home-page', $data);
    }
}
