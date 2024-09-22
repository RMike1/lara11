<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Item extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $quantity;
    
    #[Rule('required')]
    public $price;

    #[Rule('required|image|max:1024|min:10')]
    public $image;

    public function saveProduct()
    {
        $validated=$this->validate();


        if($this->image){
            $validated['image']=$this->image->store('uploads','public');
        }

        Product::create($validated);
        $this->reset();
        return $this->redirect('/home', navigate: true);
    }

    public function render()
    {
        return view('livewire.item');
    }
}
