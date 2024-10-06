<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditProduct extends Component
{
    use WithFileUploads;

    public $name = "";
    public $price = "";
    public $quantity = "";
    public $image = null; 
    public $imagePrv = "";  
    public $itemId = "";

    public Product $item;

    public function mount(Product $item)
    {
        $this->name = $item->name;
        $this->price = $item->price;
        $this->quantity = $item->quantity;
        $this->itemId = $item->id;
        $this->imagePrv = $item->image;
    }

    public function updateProduct()
    {
        $validated = $this->validate([
            'name' => 'required|max:20|min:3',
            'price' => 'required|max:20|min:3',
            'quantity' => 'required|max:20',
            'image' => 'nullable|image|max:1024', 
        ]);
        $product = Product::find($this->itemId);

        $oldImage = $product->image;
        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');

            if ($oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        } else {
            $validated['image'] = $oldImage;
        }

        $validated['user_id']=Auth()->id();

        $product->update($validated);

        session()->flash('success', 'Item updated successfully!');
        return $this->redirect('/home', true);
    }

    public function render()
    {
        return view('livewire.edit-product');
    }
}
