<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Rack;
use App\Models\Shelf;

class InventoryManager extends Component
{
    // Inventory item properties
    public $allInventory = [];
    public $inventoryId;
    public $product_id;
    public $rack_id;
    public $shelf_id;
    public $quantity;
    public $barcode; // For barcode scanning

    // Dropdown data collections
    public $allProducts = [];
    public $allRacks = [];
    public $allShelves = []; // Loaded when a rack is selected

    public function mount()
    {
        $this->loadInventory();
        $this->allProducts = Product::all();
        $this->allRacks = Rack::all();
    }

    public function loadInventory()
    {
        // Eager-load the related models for display purposes.
        $this->allInventory = Inventory::with(['product', 'rack', 'shelf'])->get();
    }

    // When the rack is selected, load the shelves for that rack.
    public function updatedRackId($value)
    {
        $this->allShelves = Shelf::where('rack_id', $value)->get();
        $this->shelf_id = null;
    }

    // When a barcode is entered/scanned, search for the product.
    public function updatedBarcode($value)
    {
        $product = Product::where('barcode', $value)->first();
        if ($product) {
            $this->product_id = $product->id;
            // Optionally, you might want to notify the user that the product was found.
        } else {
            // If no product is found, you might clear the product selection
            $this->product_id = null;
        }
    }

    public function createInventory()
    {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'rack_id'    => 'required|exists:racks,id',
            'shelf_id'   => 'required|exists:shelves,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        Inventory::create([
            'product_id' => $this->product_id,
            'rack_id'    => $this->rack_id,
            'shelf_id'   => $this->shelf_id,
            'quantity'   => $this->quantity,
        ]);

        session()->flash('message', 'Inventory item added successfully.');
        $this->resetInput();
        $this->loadInventory();
    }

    public function editInventory($id)
    {
        $inv = Inventory::findOrFail($id);
        $this->inventoryId = $inv->id;
        $this->product_id  = $inv->product_id;
        $this->rack_id     = $inv->rack_id;
        $this->shelf_id    = $inv->shelf_id;
        $this->quantity    = $inv->quantity;

        // Load shelves for the selected rack to populate the dropdown.
        $this->allShelves = Shelf::where('rack_id', $this->rack_id)->get();
    }

    public function updateInventory()
    {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'rack_id'    => 'required|exists:racks,id',
            'shelf_id'   => 'required|exists:shelves,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        $inv = Inventory::findOrFail($this->inventoryId);
        $inv->update([
            'product_id' => $this->product_id,
            'rack_id'    => $this->rack_id,
            'shelf_id'   => $this->shelf_id,
            'quantity'   => $this->quantity,
        ]);

        session()->flash('message', 'Inventory item updated successfully.');
        $this->resetInput();
        $this->loadInventory();
    }

    public function deleteInventory($id)
    {
        Inventory::findOrFail($id)->delete();
        session()->flash('message', 'Inventory item deleted successfully.');
        $this->loadInventory();
    }

    public function resetInput()
    {
        $this->reset(['inventoryId', 'product_id', 'rack_id', 'shelf_id', 'quantity', 'barcode']);
        $this->allShelves = [];
    }

    public function render()
    {
        return view('livewire.inventory-manager');
    }
}
