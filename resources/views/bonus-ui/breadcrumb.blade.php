@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Breadcrumb</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Breadcrumb</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Basic Breadcrumb-->
    <div class="col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Default Breadcrumb</h2>
          <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb </code> class.</p>
        </div>
        <div class="card-body">
          <nav class="breadcrumb"><a class="breadcrumb-item" href="#!">Home</a><span class="breadcrumb-item active">Ui
              Kits</span></nav>
          <nav class="breadcrumb m-0"><a class="breadcrumb-item" href="#!">Home</a><a class="breadcrumb-item"
              href="#!">Ui Kits</a><span class="breadcrumb-item active">Alert</span></nav>
        </div>
      </div>
    </div>
    <!-- default breadcrumb ends-->
    <!-- Dividers Breadcrumbs-->
    <div class="col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Divider Breadcrumb</h2>
          <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb-icon</code> class.</p>
        </div>
        <div class="card-body">
          <nav class="breadcrumb breadcrumb-icon"><a class="breadcrumb-item" href="#!">Home</a><span
              class="breadcrumb-item active">Ui Kits</span></nav>
          <nav class="breadcrumb breadcrumb-icon m-0"><a class="breadcrumb-item" href="#!">Home</a><a
              class="breadcrumb-item" href="#!">Ui Kits</a><span class="breadcrumb-item active">Progress</span></nav>
        </div>
      </div>
    </div>
    <!-- Dividers Breadcrumbs ends-->
    <!-- Icons breadcrumb start-->
    <div class="col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>With Icons Breadcrumb</h2>
          <p class="f-m-light mt-1">You can set icons breadcrumb using <code>.breadcrumb </code>class.</p>
        </div>
        <div class="card-body">
          <ol class="breadcrumb bg-white p-l-0">
            <li class="breadcrumb-item"><a href="#!"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active">Bonus Ui</li>
          </ol>
          <ol class="breadcrumb bg-white m-b-0 p-b-0 p-l-0">
            <li class="breadcrumb-item"><a href="#!"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item">Bonus Ui</li>
            <li class="breadcrumb-item active">Breadcrumb</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Icons breadcrumb ends-->
    <!-- Nav breadcrumb start-->
    <div class="col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Variation of Breadcrumb</h2>
          <p class="f-m-light mt-1">You can set variations breadcrumb using <code>.breadcrumb </code>class through any
            icons sets.</p>
        </div>
        <div class="card-body breadcrumb-space">
          <nav class="breadcrumb breadcrumb-no-divider mb-0 gap-2"><a class="breadcrumb-item mb-1 mb-xl-0"
              href="#!">Home -></a><a class="breadcrumb-item ps-0 mb-1 mb-xl-0" href="#!">Tables -></a><a
              class="breadcrumb-item ps-0 mb-1 mb-xl-0" href="#!">Bootstrap Tables -></a><span
              class="breadcrumb-item active ps-0">Basic Tables</span></nav>
        </div>
      </div>
    </div>
    <!-- Nav breadcrumb ends-->
    <!-- colored navigation start-->
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Colored Breadcrumb</h2>
          <p class="f-m-light mt-1">You can set breadcrumb using <code>.breadcrumb </code> class and set background
            colors like <code>[.bg-*]</code> .</p>
        </div>
        <div class="card-body">
          <ol class="breadcrumb breadcrumb-colored m-b-30 bg-primary">
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Bonus Ui</a></li>
            <li class="breadcrumb-item active fw-bold">Breadcrumb</li>
          </ol>
          <ol class="breadcrumb breadcrumb-colored m-b-30 bg-warning">
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Icons</a></li>
            <li class="breadcrumb-item active fw-bold">Flag-icon</li>
          </ol>
          <ol class="breadcrumb breadcrumb-colored m-0 bg-secondary">
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Home</a></li>
            <li class="breadcrumb-item"><a class="fw-bold" href="#!">Gallery</a></li>
            <li class="breadcrumb-item active fw-bold">Gallery-grid</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- colored navigation ends-->
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection