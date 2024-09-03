<?php

namespace App\Livewire;

use Livewire\Component;

class ItemList extends Component
{

    public $item;


    public function mount($item = null){

        // dd($this->item);

        $this->item=$item;
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
