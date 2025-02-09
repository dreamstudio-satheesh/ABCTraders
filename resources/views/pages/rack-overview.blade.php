@extends('layouts.partials.simple.master')

@section('css')
    <!-- Custom CSS for Warehouse UI -->
    <style>
        .warehouse-section {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .rack-card {
            margin-bottom: 20px;
        }
        html {
            scroll-padding-top: 70px;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Warehouse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#warehouseNavbar" aria-controls="warehouseNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="warehouseNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#rackOverview">Rack Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rackDetails">Rack Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#spaceAllocation">Space Allocation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visualRepresentation">Visual Representation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Rack Overview Section -->
    <section id="rackOverview" class="warehouse-section">
        <h2>Rack Overview</h2>
        <div class="row">
            <!-- Example Rack Cards -->
            <div class="col-md-3">
                <div class="card rack-card">
                    <div class="card-body">
                        <h5 class="card-title">Rack A</h5>
                        <p class="card-text">Occupied: 10 / 20</p>
                        <a href="#rackDetails" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rack-card">
                    <div class="card-body">
                        <h5 class="card-title">Rack B</h5>
                        <p class="card-text">Occupied: 5 / 15</p>
                        <a href="#rackDetails" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Add more rack cards as needed -->
        </div>
    </section>

    <!-- Rack Details Section -->
    <section id="rackDetails" class="warehouse-section">
        <h2>Rack Details - Rack A</h2>
        <p>Detailed view of garments stored in Rack A.</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Garment</th>
                    <th>Quantity</th>
                    <th>Location (Shelf)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>T-Shirt</td>
                    <td>50</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td>Jeans</td>
                    <td>30</td>
                    <td>A2</td>
                </tr>
                <!-- Additional rows can be added -->
            </tbody>
        </table>
    </section>

    <!-- Space Allocation Interface -->
    <section id="spaceAllocation" class="warehouse-section">
        <h2>Space Allocation Interface</h2>
        <form>
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter product name">
            </div>
            <div class="mb-3">
                <label for="rackSelect" class="form-label">Select Rack</label>
                <select class="form-select" id="rackSelect">
                    <option selected>Choose...</option>
                    <option value="A">Rack A</option>
                    <option value="B">Rack B</option>
                    <!-- Additional racks -->
                </select>
            </div>
            <div class="mb-3">
                <label for="shelfSelect" class="form-label">Select Shelf</label>
                <select class="form-select" id="shelfSelect">
                    <option selected>Choose...</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <!-- Additional shelves -->
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Enter quantity">
            </div>
            <button type="submit" class="btn btn-success">Allocate Space</button>
        </form>
    </section>

    <!-- Visual Representation Section -->
    <section id="visualRepresentation" class="warehouse-section">
        <h2>Visual Representation</h2>
        <div class="row">
            <!-- Example grid view of the warehouse layout -->
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h6>Rack A</h6>
                        <p>Shelf A1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h6>Rack A</h6>
                        <p>Shelf A2</p>
                    </div>
                </div>
            </div>
            <!-- Add more cards to represent additional shelves/racks -->
        </div>
    </section>
</div>
@endsection

@section('scripts')
 
   
@endsection
