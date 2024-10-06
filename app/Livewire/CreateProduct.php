<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Component;
// use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateProduct extends Component
{

    use WithFileUploads;

    // #[Validate]
    #[Rule('required|max:50|min:2')]
    public $name = "";
    #[Rule('required|max:50|min:2')]
    public $price = "";
    #[Rule('required|max:50|min:2')]
    public $quantity = "";
    #[Rule('required|image|max:1024')]
    public $image = "";

    public function saveProduct()
    {

        $validated = $this->validate();

        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        $validated['user_id']=auth()->id();

        Product::create($validated);
        $this->reset();
        session()->flash('success', 'created successfully!!');
        return $this->redirect('/home', true);
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
