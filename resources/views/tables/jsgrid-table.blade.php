@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>JS Grid Tables</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Tables</li>
        <li class="breadcrumb-item f-w-500 active">JS Grid Tables</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h2 class="mb-3">Basic Scenario</h2>
          <p class="f-m-light mt-1">Grid with filtering, editing, inserting, deleting, sorting and paging. Data provided
            by controller.</p>
        </div>
        <div class="card-body">
          <div class="basic_table custom-scrollbar" id="basicScenario"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h2 class="mb-3">Sorting Scenario</h2>
          <p class="f-m-light mt-1">Sorting can be done not only with column header interaction, but also with sort
            method.</p>
        </div>
        <div class="card-body">
          <div class="sort-panel mb-3">
            <label>Sorting Field:
              <select class="btn btn-primary dropdown-toggle btn-md pe-5" id="sortingField">
                <option>Id</option>
                <option>Product</option>
                <option>Order Id</option>
                <option>Price</option>
                <option>Quantity</option>
                <option>Shipped</option>
                <option>Total</option>
              </select>
            </label>
            <div class="d-inline">
              <button class="btn btn-md btn-secondary" id="sort" type="button">Sort</button>
            </div>
          </div>
          <div class="js-shorting" id="sorting-table"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h2 class="mb-3">Batch Delete</h2>
          <p class="f-m-light mt-1">Cell content of every column can be customized with itemTemplate, headerTemplate,
            filterTemplate and insertTemplate functions specified in field config. This example shows how to implement
            batch deleting with custom field for selecting items.</p>
        </div>
        <div class="card-body">
          <div id="batchDelete"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/griddata.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid.js') }}"></script>
@endsection