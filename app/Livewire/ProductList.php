<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;
// use Livewire\Attributes\Lazy;

#[Layout('components.layouts.app')]    
// #[Lazy()] 
class ProductList extends Component
{

    #[Rule('required|min:1|max:50')]
    public $quantity="";
    public $editId="";

    public function mount(Product $product){
        $this->quantity=$product->quantity;
    }


    public function increamentQty($item){
        $this->quantity=Product::find($item)->quantity;
        $this->editId=$item;
        // dd($test);
        $this->validate();
        Product::find($item)->update([
            'quantity'=>++$this->quantity
        ]);
        $this->editId="";

    }
    public function decreamentQty($item){
        $this->quantity=Product::find($item)->quantity;
        $this->editId=$item;
        // dd($test);
        $this->validate();
        Product::find($item)->update([
            'quantity'=>--$this->quantity
        ]);
        $this->editId="";

    }

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
            'items'=>Auth()->user()->products
        ]);
    }
}