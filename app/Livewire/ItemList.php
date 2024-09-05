<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ItemList extends Component
{

    public $item;
    public $count;

    public  $removeItem;



    public function removeProduct(){

        dd('hello');
        $id->delete();
        return $this->redirect()->back();
        }

        public function mount($item = null,$count=1){

        $this->item=$item;
        $this->count=$count;
        // $this->removeItem=$removeItem;
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
