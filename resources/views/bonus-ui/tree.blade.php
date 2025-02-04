@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tree.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Tree View</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Tree View</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic Tree</h2>
          <p class="f-m-light mt-1">
            Use the dynamic tree view with checkboxes.</p>
        </div>
        <div class="card-body">
          <div class="tree-container"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Disabled Tree</h2>
          <p class="f-m-light mt-1">
            Use the dynamic tree view with checkboxes.</p>
        </div>
        <div class="card-body">
          <div class="disabled-container"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/tree/jstree.min.js') }}"></script>
<script src="{{ asset('assets/js/tree/tree.min.js') }}"></script>
<script src="{{ asset('assets/js/tree/tree.js') }}"></script>
@endsection