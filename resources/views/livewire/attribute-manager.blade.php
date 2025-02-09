<div class="container-fluid">
    <div class="row">
      <!-- Create/Edit Attribute Card -->
      <div class="col-md-4 mb-3">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">{{ $attributeId ? 'Edit Attribute' : 'Create Attribute' }}</h2>
            <p class="f-m-light mt-1">Manage your product attributes and their values.</p>
          </div>
          <div class="card-body">
            @if (session()->has('message'))
              <div class="alert alert-success" role="alert">
                {{ session('message') }}
              </div>
            @endif
            <form wire:submit.prevent="{{ $attributeId ? 'updateAttribute' : 'createAttribute' }}">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" wire:model="name">
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" class="form-control" wire:model="slug">
                @error('slug')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="values" class="form-label">Attribute Values (comma-separated)</label>
                <input type="text" id="values" class="form-control" wire:model="valuesString">
              </div>
              <div class="d-flex">
                <button type="submit" class="btn btn-primary me-2">
                  {{ $attributeId ? 'Update' : 'Create' }} Attribute
                </button>
                @if($attributeId)
                  <button type="button" class="btn btn-secondary" wire:click="resetInput">Cancel</button>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
  
      <!-- Attributes List Card -->
      <div class="col-md-8">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">Attributes List</h2>
            <p class="f-m-light mt-1">Overview of available attributes and their values.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered align-middle">
                <thead>
                  <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 20%;">Name</th>
                    <th scope="col" style="width: 45%;">Values</th>
                    <th scope="col" style="width: 30%;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($allAttributes as $attribute)
                    <tr>
                      <td>{{ $attribute->id }}</td>
                      <td>{{ $attribute->name }}</td>
                      <td>
                        @foreach($attribute->attributeValues as $value)
                          {{ $value->value }}@if(!$loop->last), @endif
                        @endforeach
                      </td>
                      <td>
                        <button class="btn btn-sm btn-warning me-1" wire:click="editAttribute({{ $attribute->id }})">
                          Edit
                        </button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteAttribute({{ $attribute->id }})"
                          onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                          Delete
                        </button>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="5" class="text-center">No attributes found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  