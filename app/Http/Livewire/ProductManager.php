<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductManager extends Component
{
    // Properties for managing products
    public $allProducts = [];
    public $productId;
    public $name;
    public $barcode;
    public $category_id;
    public $subcategory_id;
    public $productAttributes; // renamed from $attributes
    public $supplier;

    // Separate arrays for primary categories and subcategories
    public $allPrimaryCategories = [];
    public $subCategories = [];

    public function mount()
    {
        $this->loadProducts();

        // Load only primary categories (parent_id is null)
        $this->allPrimaryCategories = Category::whereNull('parent_id')->get();
    }

    public function loadProducts()
    {
        // Eager-load related category and subcategory if defined in your Product model
        $this->allProducts = Product::with(['category', 'subcategory'])->get();
    }

    public function updatedCategoryId($value)
    {
        if ($value !== null) {
            $this->subCategories = Category::where('parent_id', $value)->get();
        } else {
            $this->subCategories = collect();
        }
    }

    public function createProduct()
    {
        $this->validate([
            'name'              => 'required|string|max:255',
            'barcode'           => 'required|string|max:255|unique:products,barcode',
            'category_id'       => 'nullable|exists:categories,id',
            'subcategory_id'    => 'nullable|exists:categories,id',
            'productAttributes' => 'nullable',
            'supplier'          => 'nullable|string|max:255',
        ]);

        Product::create([
            'name'           => $this->name,
            'barcode'        => $this->barcode,
            'category_id'    => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'attributes'     => $this->productAttributes, // Saved in DB column "attributes"
            'supplier'       => $this->supplier,
        ]);

        session()->flash('message', 'Product created successfully.');
        $this->resetInput();
        $this->loadProducts();
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $this->productId         = $product->id;
        $this->name              = $product->name;
        $this->barcode           = $product->barcode;
        $this->category_id       = $product->category_id;
        $this->subcategory_id    = $product->subcategory_id;
        $this->productAttributes = $product->attributes;
        $this->supplier          = $product->supplier;
    }

    public function updateProduct()
    {
        $product = Product::findOrFail($this->productId);
        $this->validate([
            'name'              => 'required|string|max:255',
            'barcode'           => 'required|string|max:255|unique:products,barcode,' . $product->id,
            'category_id'       => 'nullable|exists:categories,id',
            'subcategory_id'    => 'nullable|exists:categories,id',
            'productAttributes' => 'nullable',
            'supplier'          => 'nullable|string|max:255',
        ]);

        $product->update([
            'name'           => $this->name,
            'barcode'        => $this->barcode,
            'category_id'    => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'attributes'     => $this->productAttributes,
            'supplier'       => $this->supplier,
        ]);

        session()->flash('message', 'Product updated successfully.');
        $this->resetInput();
        $this->loadProducts();
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        session()->flash('message', 'Product deleted successfully.');
        $this->loadProducts();
    }

    public function resetInput()
    {
        $this->reset(['productId', 'name', 'barcode', 'category_id', 'subcategory_id', 'productAttributes', 'supplier']);
    }

    public function render()
    {
        return view('livewire.product-manager');
    }
}
