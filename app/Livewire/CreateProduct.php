<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
// use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateProduct extends Component
{

    use WithFileUploads;

    // #[Validate]
    #[Rule('required|max:4')]
    public $name="";
    #[Rule('required|max:4')]
    public $price="";
    #[Rule('required|max:4')]
    public $quantity="";
    #[Rule('image|max:1024|required')]
    public $image="";

    // public function rules(){
    //     return[
    //             'name'=>'required|max:4',
    //             'price'=>'required|max:4',
    //             'quantity'=>'required|max:4',
    //             'image'=>'image|max:1024|required',
    //         ];

    // }
    public function saveProduct(){


        $validated=$this->validate();

        if($this->image){
            $validated['image'] = $this->image->store('uploads','public');
        }

        Product::create($validated);
        $this->reset();
        session()->flash('success','created successfully!!');
    }
    // public function saveProductGo(){


    //     $validated=$this->validate([
    //         'name'=>'required|max:4|min:3',
    //         'price'=>'required|max:4|min:3',
    //         'quantity'=>'required|max:4',
    //         'image'=>'required|image|max:1024',
    //     ]);

    //     if($this->image){
    //         $validated['image'] = $this->image->store('uploads','public');
    //     }

    //     Product::create($validated);
    //     $this->reset();
    //     return $this->redirect('/home', navigate:true);
    //     session()->flash('success','created successfully!!');
    // }

    public function render()
    {
        return view('livewire.create-product');
    }
}
