<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class ManageProducts extends Component
{
    use WithFileUploads;

    public $name, $price, $category, $image;
    public $editId = null;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'image|max:2048'
        ]);

        $filename = time().'.'.$this->image->getClientOriginalExtension();
        $this->image->storeAs('public/products', $filename);

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'image' => $filename,
        ]);

        $this->reset();
    }

    public function edit($id)
    {
        $p = Product::find($id);
        $this->editId = $p->id;
        $this->name = $p->name;
        $this->price = $p->price;
        $this->category = $p->category;
    }

    public function update()
    {
        $p = Product::find($this->editId);
        $p->name = $this->name;
        $p->price = $this->price;
        $p->category = $this->category;

        if ($this->image) {
            $filename = time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('public/products', $filename);
            $p->image = $filename;
        }

        $p->save();
        $this->reset();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.manage-products', [
            'products' => Product::all()
        ]);
    }
}
