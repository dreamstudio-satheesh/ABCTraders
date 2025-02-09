<div class="container-fluid">
    <!-- Inventory Add/Edit Section -->
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card title-line">
                <div class="card-header">
                    <h2 class="card-title">
                        {{ $inventoryId ? 'Edit Inventory Item' : 'Add Inventory Item' }}
                    </h2>
                    <p class="f-m-light mt-1">Use barcode scanning or select product manually.</p>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="{{ $inventoryId ? 'updateInventory' : 'createInventory' }}">
                        <div class="row">
                            <!-- Barcode Scanning Input -->
                            <div class="col-md-4 mb-3">
                                <label for="barcode" class="form-label">Barcode</label>
                                <input type="text" id="barcode" class="form-control" wire:model.live="barcode"
                                    placeholder="Scan barcode here" autofocus>
                                @error('barcode')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Product Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="product_id" class="form-label">Product</label>
                                <select id="product_id" class="form-select" wire:model="product_id">
                                    <option value="">-- Select Product --</option>
                                    @foreach ($allProducts as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name }} ({{ $product->barcode }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Rack Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="rack_id" class="form-label">Rack</label>
                                <select id="rack_id" class="form-select" wire:model="rack_id">
                                    <option value="">-- Select Rack --</option>
                                    @foreach ($allRacks as $rack)
                                        <option value="{{ $rack->id }}">{{ $rack->rack_name }}</option>
                                    @endforeach
                                </select>
                                @error('rack_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">

                            <!-- Shelf Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="shelf_id" class="form-label">Shelf</label>
                                <select id="shelf_id" class="form-select" wire:model="shelf_id">
                                    <option value="">-- Select Shelf --</option>
                                    @foreach ($allShelves as $shelf)
                                        <option value="{{ $shelf->id }}">Level {{ $shelf->shelf_level }} (Capacity:
                                            {{ $shelf->capacity }})</option>
                                    @endforeach
                                </select>
                                @error('shelf_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Quantity Input -->
                            <div class="col-md-4 mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" id="quantity" class="form-control" wire:model="quantity">
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                              <button type="submit" class="btn btn-primary me-2">
                                  {{ $inventoryId ? 'Update Inventory' : 'Add Inventory' }}
                              </button>
                              @if ($inventoryId)
                                  <button type="button" class="btn btn-secondary" wire:click="resetInput">Cancel</button>
                              @endif
                          </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Inventory Overview Section -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card title-line">
                <div class="card-header">
                    <h2 class="card-title">Inventory Overview</h2>
                    <p class="f-m-light mt-1">Current inventory by product and location.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 25%;">Product</th>
                                    <th style="width: 15%;">Rack</th>
                                    <th style="width: 15%;">Shelf</th>
                                    <th style="width: 10%;">Quantity</th>
                                    <th style="width: 15%;">Last Updated</th>
                                    <th style="width: 10%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allInventory as $inv)
                                    <tr>
                                        <td>{{ $inv->id }}</td>
                                        <td>{{ $inv->product->name }}</td>
                                        <td>{{ $inv->rack->rack_name }}</td>
                                        <td>Level {{ $inv->shelf->shelf_level }}</td>
                                        <td>{{ $inv->quantity }}</td>
                                        <td>{{ $inv->updated_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning me-1"
                                                wire:click="editInventory({{ $inv->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                wire:click="deleteInventory({{ $inv->id }})"
                                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No inventory items found.</td>
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
