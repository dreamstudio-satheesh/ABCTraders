<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StockIntake;
use App\Models\Product;
use App\Models\Rack;
use App\Models\Shelf;
use Carbon\Carbon;

class StockIntakeManager extends Component
{
    // Properties for Stock Intake management
    public $allStockIntakes = [];
    public $stockIntakeId;
    public $product_id;
    public $quantity;
    public $rack_id;
    public $shelf_id;
    public $supplier;
    public $intake_date;

    // Properties for dropdown data
    public $allProducts = [];
    public $allRacks = [];
    public $allShelves = [];

    public function mount()
    {
        $this->loadStockIntakes();
        $this->allProducts = Product::all();
        $this->allRacks = Rack::all();
    }

    public function loadStockIntakes()
    {
        // Eager-load related models for display
        $this->allStockIntakes = StockIntake::with(['product', 'rack', 'shelf'])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    // When the rack_id is updated, load the shelves for that rack
    public function updatedRackId($value)
    {
        $this->allShelves = Shelf::where('rack_id', $value)->get();
        // Reset shelf selection
        $this->shelf_id = null;
    }

    public function createStockIntake()
    {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
            'rack_id'    => 'required|exists:racks,id',
            'shelf_id'   => 'required|exists:shelves,id',
            'supplier'   => 'nullable|string|max:255',
        ]);

        $this->intake_date = Carbon::now();

        StockIntake::create([
            'product_id'  => $this->product_id,
            'quantity'    => $this->quantity,
            'rack_id'     => $this->rack_id,
            'shelf_id'    => $this->shelf_id,
            'supplier'    => $this->supplier,
            'intake_date' => $this->intake_date,
        ]);

        session()->flash('message', 'Stock intake recorded successfully.');
        $this->resetInput();
        $this->loadStockIntakes();
    }

    public function editStockIntake($id)
    {
        $intake = StockIntake::findOrFail($id);
        $this->stockIntakeId = $intake->id;
        $this->product_id    = $intake->product_id;
        $this->quantity      = $intake->quantity;
        $this->rack_id       = $intake->rack_id;
        // Load shelves for the selected rack so the dropdown can be populated
        $this->allShelves    = Shelf::where('rack_id', $this->rack_id)->get();
        $this->shelf_id      = $intake->shelf_id;
        $this->supplier      = $intake->supplier;
        $this->intake_date   = $intake->intake_date;
    }

    public function updateStockIntake()
    {
        $intake = StockIntake::findOrFail($this->stockIntakeId);
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
            'rack_id'    => 'required|exists:racks,id',
            'shelf_id'   => 'required|exists:shelves,id',
            'supplier'   => 'nullable|string|max:255',
        ]);

        $intake->update([
            'product_id'  => $this->product_id,
            'quantity'    => $this->quantity,
            'rack_id'     => $this->rack_id,
            'shelf_id'    => $this->shelf_id,
            'supplier'    => $this->supplier,
            // If intake_date is not explicitly provided, use the current time
            'intake_date' => $this->intake_date ?? Carbon::now(),
        ]);

        session()->flash('message', 'Stock intake updated successfully.');
        $this->resetInput();
        $this->loadStockIntakes();
    }

    public function deleteStockIntake($id)
    {
        $intake = StockIntake::findOrFail($id);
        $intake->delete();
        session()->flash('message', 'Stock intake deleted successfully.');
        $this->loadStockIntakes();
    }

    public function resetInput()
    {
        $this->reset([
            'stockIntakeId',
            'product_id',
            'quantity',
            'rack_id',
            'shelf_id',
            'supplier',
            'intake_date'
        ]);
        $this->allShelves = [];
    }

    public function render()
    {
        return view('livewire.stock-intake-manager');
    }
}
