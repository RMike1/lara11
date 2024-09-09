<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ItemList extends Component
{

    public $item;
    public $count;


    public function mount($item = null, $count = 1)
    {

        $this->item = $item;
        $this->count = $count;
    }


    public Product $product;

    public function removeVal() {
        $this->dispatch('removeData', infoValue:$this->product->id);
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
