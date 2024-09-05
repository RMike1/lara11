<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Item extends Component
{

    public $name="";
    public $quantity="";
    public $price="";

    public function check(){
        dd('hello');
    }
    
    public function saveProduct(){

        $item=new Product;
        $item->name=$this->name;
        $item->quantity=$this->quantity;
        $item->price=$this->price;
        $item->save();
        $this->reset();
        return $this->redirect('/home', navigate:true);
    }

    public function render()
    {
        return view('livewire.item');
    }
}
