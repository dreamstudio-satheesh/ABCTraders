<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Attribute;

class AttributeManager extends Component
{
    // Renamed from $attributes to avoid conflict with Livewire's reserved property.
    public $allAttributes;
    public $attributeId;
    public $name;
    public $slug;
    
    // To handle attribute values as a comma-separated string
    public $valuesString = '';
    // This will be our working array for attribute values
    public $values = [];

    protected $rules = [
        'name'  => 'required|string|max:255',
        'slug'  => 'required|string|max:255|unique:attributes,slug',
    ];

    public function mount()
    {
        $this->loadAttributes();
    }

    public function loadAttributes()
    {
        // Load attributes along with their related attribute values
        $this->allAttributes = Attribute::with('attributeValues')->get();
    }

    /**
     * Automatically update the working array when the values string changes.
     */
    public function updatedValuesString($value)
    {
        $this->values = array_filter(array_map('trim', explode(',', $value)));
    }

    public function createAttribute()
    {
        $this->validate();

        $attribute = Attribute::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        // Create attribute values if provided
        if (!empty($this->values)) {
            foreach ($this->values as $value) {
                $attribute->attributeValues()->create(['value' => $value]);
            }
        }

        $this->resetInput();
        session()->flash('message', 'Attribute created successfully.');
        $this->loadAttributes();
    }

    public function editAttribute($id)
    {
        $attribute = Attribute::with('attributeValues')->findOrFail($id);

        $this->attributeId  = $attribute->id;
        $this->name         = $attribute->name;
        $this->slug         = $attribute->slug;
        $this->values       = $attribute->attributeValues->pluck('value')->toArray();
        $this->valuesString = implode(', ', $this->values);
    }

    public function updateAttribute()
    {
        $attribute = Attribute::findOrFail($this->attributeId);

        // Adjust unique rule for update
        $this->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|string|max:255|unique:attributes,slug,' . $attribute->id,
        ]);

        $attribute->update([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        // For simplicity, delete old attribute values and create new ones.
        $attribute->attributeValues()->delete();
        if (!empty($this->values)) {
            foreach ($this->values as $value) {
                $attribute->attributeValues()->create(['value' => $value]);
            }
        }

        $this->resetInput();
        session()->flash('message', 'Attribute updated successfully.');
        $this->loadAttributes();
    }

    public function deleteAttribute($id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute->delete();
        session()->flash('message', 'Attribute deleted successfully.');
        $this->loadAttributes();
    }

    private function resetInput()
    {
        $this->reset(['attributeId', 'name', 'slug', 'valuesString', 'values']);
    }

    public function render()
    {
        return view('livewire.attribute-manager');
    }
}
