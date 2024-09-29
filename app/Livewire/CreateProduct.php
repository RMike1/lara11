<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateProduct extends Component
{

    use WithFileUploads;

    public $name="";
    public $price="";
    public $quantity="";
    public $image="";

    public function saveProduct(){


        $validated=$this->validate([
            'name'=>'required|max:20|min:3',
            'price'=>'required|max:20|min:3',
            'quantity'=>'required|max:20',
            'image'=>'image|max:1024|required',
        ]);

        if($this->image){
            $validated['image'] = $this->image->store('uploads','public');
        }

        Product::create($validated);
        $this->reset();
        session()->flash('success','created successfully!!');
    }
    public function saveProductGo(){


        $validated=$this->validate([
            'name'=>'required|max:20|min:3',
            'price'=>'required|max:20|min:3',
            'quantity'=>'required|max:20',
            'image'=>'required|image|max:1024',
        ]);

        if($this->image){
            $validated['image'] = $this->image->store('uploads','public');
        }

        Product::create($validated);
        $this->reset();
        return $this->redirect('/home', navigate:true);
        session()->flash('success','created successfully!!');
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
