<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{

    use WithFileUploads;

    public $name="";
    public $price="";
    public $quantity="";
    public $image="";
    public $itemId="";

    public Product $item;

    public function mount($item){
        $this->name=$item->name;
        $this->price=$item->price;
        $this->quantity=$item->quantity;
        $this->image=$item->image;
        $this->itemId=$item->id;
    }

    public function updateProduct(){
        $validated=$this->validate([
            'name'=>'required|max:20|min:3',
            'price'=>'required|max:20|min:3',
            'quantity'=>'required|max:20',
            'image'=>'image|max:1024',
        ]);

        if($this->image){
            $validated['image']=$this->image->store('uploads','public');
        }

        Product::find($this->itemId)->update($validated);
        session()->flash('success','item updated successfully!');

    }
    
    public function render()
    {
        // $data=$this->item;
        return view('livewire.edit-product',[
            // 'item'=>$data
        ]);
    }
}
