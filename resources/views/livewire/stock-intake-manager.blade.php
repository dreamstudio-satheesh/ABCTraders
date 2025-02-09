<div class="container-fluid">
    <!-- Stock Intake Create/Edit Section -->
    <div class="row mb-4">
      <div class="col-sm-12">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">{{ $stockIntakeId ? 'Edit Stock Intake' : 'Record Stock Intake' }}</h2>
            <p class="f-m-light mt-1">Manage stock intake entries.</p>
          </div>
          <div class="card-body">
            @if(session()->has('message'))
              <div class="alert alert-success" role="alert">
                {{ session('message') }}
              </div>
            @endif
            <form wire:submit.prevent="{{ $stockIntakeId ? 'updateStockIntake' : 'createStockIntake' }}">
              <div class="mb-3">
                <label for="product_id" class="form-label">Product</label>
                <select id="product_id" class="form-select" wire:model="product_id">
                  <option value="">-- Select Product --</option>
                  @foreach($allProducts as $product)
                    <option value="{{ $product->id }}">
                      {{ $product->name }} ({{ $product->barcode }})
                    </option>
                  @endforeach
                </select>
                @error('product_id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" id="quantity" class="form-control" wire:model="quantity">
                @error('quantity')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="rack_id" class="form-label">Rack</label>
                <select id="rack_id" class="form-select" wire:model.live="rack_id">
                  <option value="">-- Select Rack --</option>
                  @foreach($allRacks as $rack)
                    <option value="{{ $rack->id }}">{{ $rack->rack_name }}</option>
                  @endforeach
                </select>
                @error('rack_id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="shelf_id" class="form-label">Shelf</label>
                <select id="shelf_id" class="form-select" wire:model="shelf_id">
                  <option value="">-- Select Shelf --</option>
                  @foreach($allShelves as $shelf)
                    <option value="{{ $shelf->id }}">
                      Level {{ $shelf->shelf_level }} (Capacity: {{ $shelf->capacity }})
                    </option>
                  @endforeach
                </select>
                @error('shelf_id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" id="supplier" class="form-control" wire:model="supplier">
                @error('supplier')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="d-flex">
                <button type="submit" class="btn btn-primary me-2">
                  {{ $stockIntakeId ? 'Update Stock Intake' : 'Record Stock Intake' }}
                </button>
                @if($stockIntakeId)
                  <button type="button" class="btn btn-secondary" wire:click="resetInput">
                    Cancel
                  </button>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Stock Intake List Section -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">Stock Intake List</h2>
            <p class="f-m-light mt-1">Overview of stock intake entries.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered align-middle">
                <thead>
                  <tr>
                    <th style="width: 5%;">ID</th>
                    <th style="width: 20%;">Product</th>
                    <th style="width: 10%;">Quantity</th>
                    <th style="width: 15%;">Rack</th>
                    <th style="width: 15%;">Shelf</th>
                    <th style="width: 15%;">Supplier</th>
                    <th style="width: 10%;">Intake Date</th>
                    <th style="width: 10%;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($allStockIntakes as $intake)
                    <tr>
                      <td>{{ $intake->id }}</td>
                      <td>{{ $intake->product->name }}</td>
                      <td>{{ $intake->quantity }}</td>
                      <td>{{ $intake->rack->rack_name }}</td>
                      <td>Level {{ $intake->shelf->shelf_level }}</td>
                      <td>{{ $intake->supplier }}</td>
                      <td>{{ $intake->intake_date }}</td>
                      <td>
                        <button class="btn btn-sm btn-warning me-1" wire:click="editStockIntake({{ $intake->id }})">
                          Edit
                        </button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteStockIntake({{ $intake->id }})"
                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                          Delete
                        </button>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="8" class="text-center">No stock intake records found.</td>
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
  