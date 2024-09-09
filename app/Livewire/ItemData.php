<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class ItemData extends Component
{

    #[On('removeData')]
    public function removeVal($info) {
        $pro=Product::find($info);
        $pro->delete();
        return $this->redirect('/home', navigate:true);
    }

    public function render()
    {
        $items = Product::all();

        return view('livewire.item-data', compact('items'));
    }
}
