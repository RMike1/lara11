<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;
// use Livewire\Attributes\Lazy;

#[Layout('components.layouts.app')]    
// #[Lazy()] 
class ProductList extends Component
{
    public function placeholder(){
        return view('livewire.placeholder');
    }

    public function deleteProduct(Product $item){
        $item->delete();
    }

    public function render()
    {
        // sleep(3);
        return view('livewire.product-list',[
            'items'=>Product::all()
        ]);
    }
}