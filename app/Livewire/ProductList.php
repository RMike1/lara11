<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]     
class ProductList extends Component
{


    public function deleteProduct(Product $item){
        $item->delete();
    }

    public function render()
    {
        return view('livewire.product-list',[
            'items'=>Product::all()
        ]);
    }
}
