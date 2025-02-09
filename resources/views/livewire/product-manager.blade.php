<div class="container-fluid">
    <!-- Product Create/Edit Section -->
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card title-line">
                <div class="card-header">
                    <h2 class="card-title">{{ $productId ? 'Edit Product' : 'Create Product' }}</h2>
                    <p class="f-m-light mt-1">Manage your products.</p>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form wire:submit.prevent="{{ $productId ? 'updateProduct' : 'createProduct' }}">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" id="name" class="form-control" wire:model="name" autofocus>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-4 mb-3">
                                <label for="barcode" class="form-label">Barcode</label>
                                <input type="text" id="barcode" class="form-control" wire:model="barcode">
                                @error('barcode')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Primary Category Dropdown -->
                            <div class="col-4 mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select id="category_id" class="form-select" wire:model.live="category_id">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($allPrimaryCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Subcategory Dropdown -->
                            <div class="col-4 mb-3">
                                <label for="subcategory_id" class="form-label">Subcategory</label>
                                <select id="subcategory_id" class="form-select" wire:model="subcategory_id">
                                    <option value="">-- Select Subcategory --</option>
                                    @if ($subCategories)
                                        @foreach ($subCategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('subcategory_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Product Attributes -->
                            <div class="col-4 mb-3">
                                <label for="productAttributes" class="form-label">Attributes (JSON or
                                    comma-separated)</label>
                                <input type="text" id="productAttributes" class="form-control"
                                    wire:model="productAttributes">
                                @error('productAttributes')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-4 mb-3">
                                <label for="supplier" class="form-label">Supplier</label>
                                <input type="text" id="supplier" class="form-control" wire:model="supplier">
                                @error('supplier')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary me-2">
                                    {{ $productId ? 'Update Product' : 'Create Product' }}
                                </button>
                                @if ($productId)
                                    <button type="button" class="btn btn-secondary"
                                        wire:click="resetInput">Cancel</button>
                                @endif
                            </div>

                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <!-- Products List Section -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card title-line">
                <div class="card-header">
                    <h2 class="card-title">Products List</h2>
                    <p class="f-m-light mt-1">Overview of available products.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 30%;">Name</th>
                                    <th style="width: 20%;">Barcode</th>
                                    <th style="width: 15%;">Category</th>
                                    <th style="width: 15%;">Subcategory</th>
                                    <th style="width: 15%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allProducts as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->barcode }}</td>
                                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                                        <td>{{ $product->subcategory->name ?? 'N/A' }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning me-1"
                                                wire:click="editProduct({{ $product->id }})">
                                                Edit
                                            </button>
                                            <button class="btn btn-sm btn-danger"
                                                wire:click="deleteProduct({{ $product->id }})"
                                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No products found.</td>
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
