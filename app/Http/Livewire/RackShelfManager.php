<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rack;
use App\Models\Shelf;

class RackShelfManager extends Component
{
    // Properties for Rack management
    public $allRacks = [];
    public $rackId;
    public $rackName;
    public $location;
    public $totalShelves;
    // New property for default shelf capacity
    public $defaultShelfCapacity;

    // Properties for selecting a Rack for Shelf management
    public $selectedRackId;
    public $selectedRackName;

    // Properties for Shelf management
    public $allShelves = [];
    public $shelfId;
    public $shelfLevel;
    public $capacity;

    public function mount()
    {
        $this->loadRacks();
    }

    // Load all racks (with shelves if needed)
    public function loadRacks()
    {
        $this->allRacks = Rack::with('shelves')->get();
    }

    // ====================
    // Rack Management Methods
    // ====================

    public function createRack()
    {
        $this->validate([
            'rackName'            => 'required|string|max:255|unique:racks,rack_name',
            'location'            => 'required|string|max:255',
            'totalShelves'        => 'required|integer|min:1',
            'defaultShelfCapacity'=> 'required|integer|min:1',
        ]);

        // Create the rack
        $rack = Rack::create([
            'rack_name'     => $this->rackName,
            'location'      => $this->location,
            'total_shelves' => $this->totalShelves,
        ]);

        // Automatically create shelves from 1 to totalShelves
        for ($i = 1; $i <= $this->totalShelves; $i++) {
            Shelf::create([
                'rack_id'     => $rack->id,
                'shelf_level' => $i,
                'capacity'    => $this->defaultShelfCapacity,
            ]);
        }

        session()->flash('message', 'Rack created successfully with default shelves.');
        $this->resetRackInput();
        $this->loadRacks();
    }

    public function editRack($id)
    {
        $rack = Rack::findOrFail($id);
        $this->rackId       = $rack->id;
        $this->rackName     = $rack->rack_name;
        $this->location     = $rack->location;
        $this->totalShelves = $rack->total_shelves;
        // Note: Default shelf capacity is only used during creation.
    }

    public function updateRack()
    {
        $rack = Rack::findOrFail($this->rackId);
        $this->validate([
            'rackName'     => 'required|string|max:255|unique:racks,rack_name,'.$rack->id,
            'location'     => 'required|string|max:255',
            'totalShelves' => 'required|integer|min:1',
            // No default shelf capacity here as we assume it only applies during creation.
        ]);

        $rack->update([
            'rack_name'     => $this->rackName,
            'location'      => $this->location,
            'total_shelves' => $this->totalShelves,
        ]);

        session()->flash('message', 'Rack updated successfully.');
        $this->resetRackInput();
        $this->loadRacks();
    }

    public function deleteRack($id)
    {
        $rack = Rack::findOrFail($id);
        $rack->delete();
        session()->flash('message', 'Rack deleted successfully.');
        if ($this->selectedRackId == $id) {
            $this->selectedRackId = null;
            $this->allShelves = [];
        }
        $this->loadRacks();
    }

    public function resetRackInput()
    {
        $this->reset(['rackId', 'rackName', 'location', 'totalShelves', 'defaultShelfCapacity']);
    }

    // Select a rack for managing its shelves
    public function selectRack($id)
    {
        $rack = Rack::findOrFail($id);
        $this->selectedRackId   = $rack->id;
        $this->selectedRackName = $rack->rack_name;
        $this->loadShelves();
    }

    // ====================
    // Shelf Management Methods
    // ====================

    public function loadShelves()
    {
        if ($this->selectedRackId) {
            $this->allShelves = Shelf::where('rack_id', $this->selectedRackId)->get();
        }
    }

    public function createShelf()
    {
        $this->validate([
            'shelfLevel' => 'required|integer|min:1',
            'capacity'   => 'required|integer|min:1',
        ]);

        // Check for duplicate shelf level in the same rack
        if (Shelf::where('rack_id', $this->selectedRackId)
                 ->where('shelf_level', $this->shelfLevel)
                 ->exists()) {
            session()->flash('error', 'Shelf level already exists in this rack.');
            return;
        }

        Shelf::create([
            'rack_id'     => $this->selectedRackId,
            'shelf_level' => $this->shelfLevel,
            'capacity'    => $this->capacity,
        ]);

        session()->flash('message', 'Shelf created successfully.');
        $this->resetShelfInput();
        $this->loadShelves();
    }

    public function editShelf($id)
    {
        $shelf = Shelf::findOrFail($id);
        $this->shelfId    = $shelf->id;
        $this->shelfLevel = $shelf->shelf_level;
        $this->capacity   = $shelf->capacity;
    }

    public function updateShelf()
    {
        $shelf = Shelf::findOrFail($this->shelfId);
        $this->validate([
            'shelfLevel' => 'required|integer|min:1',
            'capacity'   => 'required|integer|min:1',
        ]);

        // Ensure the new shelf level is unique within the rack
        if (Shelf::where('rack_id', $this->selectedRackId)
                 ->where('shelf_level', $this->shelfLevel)
                 ->where('id', '!=', $this->shelfId)
                 ->exists()) {
            session()->flash('error', 'Shelf level already exists in this rack.');
            return;
        }

        $shelf->update([
            'shelf_level' => $this->shelfLevel,
            'capacity'    => $this->capacity,
        ]);

        session()->flash('message', 'Shelf updated successfully.');
        $this->resetShelfInput();
        $this->loadShelves();
    }

    public function deleteShelf($id)
    {
        $shelf = Shelf::findOrFail($id);
        $shelf->delete();
        session()->flash('message', 'Shelf deleted successfully.');
        $this->loadShelves();
    }

    public function resetShelfInput()
    {
        $this->reset(['shelfId', 'shelfLevel', 'capacity']);
    }

    public function render()
    {
        return view('livewire.rack-shelf-manager');
    }
}
