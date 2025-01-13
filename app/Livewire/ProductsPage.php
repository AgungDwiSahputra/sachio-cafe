<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('All Product')]
class ProductsPage extends Component
{
    #[Url]
    public $selected_categories = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $price_range = 20000;

    #[Url]
    public $sort_product = 'latest';

    public function render()
    {
        $products = Product::where(['is_active' => 1, 'in_stock' => 1]);
        $categories = Category::where('is_active', 1)->get();

        if(!empty($this->selected_categories)){
            $products->whereIn('category_id', $this->selected_categories);
        }
        if(!empty($this->featured)){
            if($this->featured){
                $products->where('is_featured', 1);
            }
        }
        if(!empty($this->on_sale)){
            if($this->on_sale){
                $products->where('on_sale', 1);
            }
        }
        if(!empty($this->price_range)){
            if($this->price_range){
                $products->whereBetween('price', [0, $this->price_range]);
            }
        }
        if(!empty($this->sort_product)){
            if($this->sort_product && $this->sort_product == 'latest'){
                $products->orderBy('created_at', 'desc');
            }else{
                $products->orderBy('price', 'asc');
            }
        }

        $data = [
            'products'=> $products->paginate(6),
            'categories'=> $categories
        ];

        return view('livewire.products-page', $data);
    }
}
