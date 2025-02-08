<div class="container-fluid">
    <!-- Rack Management Section -->
    <div class="row mb-4">
      <div class="col-sm-12">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">{{ $rackId ? 'Edit Rack' : 'Create Rack' }}</h2>
            <p class="f-m-light mt-1">Manage your racks.</p>
          </div>
          <div class="card-body">
            @if (session()->has('message'))
              <div class="alert alert-success" role="alert">
                {{ session('message') }}
              </div>
            @endif
            <form wire:submit.prevent="{{ $rackId ? 'updateRack' : 'createRack' }}">
              <div class="mb-3">
                <label for="rackName" class="form-label">Rack Name</label>
                <input type="text" id="rackName" class="form-control" wire:model="rackName">
                @error('rackName') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" id="location" class="form-control" wire:model="location">
                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label for="totalShelves" class="form-label">Total Shelves</label>
                <input type="number" id="totalShelves" class="form-control" wire:model="totalShelves">
                @error('totalShelves') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <!-- New input for Default Shelf Capacity -->
              <div class="mb-3">
                <label for="defaultShelfCapacity" class="form-label">Default Shelf Capacity</label>
                <input type="number" id="defaultShelfCapacity" class="form-control" wire:model="defaultShelfCapacity">
                @error('defaultShelfCapacity') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="d-flex">
                <button type="submit" class="btn btn-primary me-2">
                  {{ $rackId ? 'Update Rack' : 'Create Rack' }}
                </button>
                @if($rackId)
                  <button type="button" class="btn btn-secondary" wire:click="resetRackInput">Cancel</button>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Racks List Section -->
    <div class="row mb-4">
      <div class="col-sm-12">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">Racks List</h2>
            <p class="f-m-light mt-1">Overview of available racks.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered align-middle">
                <thead>
                  <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 20%;">Rack Name</th>
                    <th scope="col" style="width: 20%;">Location</th>
                    <th scope="col" style="width: 15%;">Total Shelves</th>
                    <th scope="col" style="width: 20%;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($allRacks as $rack)
                    <tr>
                      <td>{{ $rack->id }}</td>
                      <td>{{ $rack->rack_name }}</td>
                      <td>{{ $rack->location }}</td>
                      <td>{{ $rack->total_shelves }}</td>
                      <td>
                        <button class="btn btn-sm btn-info me-1" wire:click="selectRack({{ $rack->id }})">
                          Manage Shelves
                        </button>
                        <button class="btn btn-sm btn-warning me-1" wire:click="editRack({{ $rack->id }})">
                          Edit
                        </button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteRack({{ $rack->id }})"
                          onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                          Delete
                        </button>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="5" class="text-center">No racks found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Shelf Management Section (Visible when a rack is selected) -->
    @if($selectedRackId)
    <div class="row">
      <div class="col-sm-12">
        <div class="card title-line">
          <div class="card-header">
            <h2 class="card-title">Shelf Management for Rack: {{ $selectedRackName }}</h2>
            <p class="f-m-light mt-1">Manage shelves in this rack.</p>
          </div>
          <div class="card-body">
            @if (session()->has('error'))
              <div class="alert alert-danger" role="alert">
                {{ session('error') }}
              </div>
            @endif
            <form wire:submit.prevent="{{ $shelfId ? 'updateShelf' : 'createShelf' }}">
              <div class="mb-3">
                <label for="shelfLevel" class="form-label">Shelf Level</label>
                <input type="number" id="shelfLevel" class="form-control" wire:model="shelfLevel">
                @error('shelfLevel') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="number" id="capacity" class="form-control" wire:model="capacity">
                @error('capacity') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="d-flex">
                <button type="submit" class="btn btn-primary me-2">
                  {{ $shelfId ? 'Update Shelf' : 'Create Shelf' }}
                </button>
                @if($shelfId)
                  <button type="button" class="btn btn-secondary" wire:click="resetShelfInput">Cancel</button>
                @endif
              </div>
            </form>
            <hr>
            <div class="table-responsive">
              <table class="table table-bordered align-middle">
                <thead>
                  <tr>
                    <th scope="col" style="width: 10%;">ID</th>
                    <th scope="col" style="width: 30%;">Shelf Level</th>
                    <th scope="col" style="width: 30%;">Capacity</th>
                    <th scope="col" style="width: 30%;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($allShelves as $shelf)
                    <tr>
                      <td>{{ $shelf->id }}</td>
                      <td>{{ $shelf->shelf_level }}</td>
                      <td>{{ $shelf->capacity }}</td>
                      <td>
                        <button class="btn btn-sm btn-warning me-1" wire:click="editShelf({{ $shelf->id }})">
                          Edit
                        </button>
                        <button class="btn btn-sm btn-danger" wire:click="deleteShelf({{ $shelf->id }})"
                          onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                          Delete
                        </button>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="4" class="text-center">No shelves found for this rack.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
  