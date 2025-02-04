@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Chartist Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Chartist Chart</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Advanced SMIL Animations</h2>
        </div>
        <div class="card-body">
          <div class="ct-6 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>SVG Path Animation</h2>
        </div>
        <div class="card-body">
          <div class="ct-7 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Animating a Donut with Svg.animate</h2>
        </div>
        <div class="card-body">
          <div class="ct-8 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bi-polar Line Chart with Area only</h2>
        </div>
        <div class="card-body">
          <div class="ct-5 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Chart with Area</h2>
        </div>
        <div class="card-body">
          <div class="ct-4 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bi-polar Bar Chart</h2>
        </div>
        <div class="card-body">
          <div class="ct-9 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Stacked Bar Chart</h2>
        </div>
        <div class="card-body">
          <div class="ct-10 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Horizontal Bar Chart</h2>
        </div>
        <div class="card-body">
          <div class="ct-11 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Extreme Responsive Configuration</h2>
        </div>
        <div class="card-body">
          <div class="ct-12 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Simple Line Chart</h2>
        </div>
        <div class="card-body">
          <div class="ct-1 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Holes in Data</h2>
        </div>
        <div class="card-body">
          <div class="ct-2 flot-chart-container"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Filled Holes in Data</h2>
        </div>
        <div class="card-body">
          <div class="ct-3 flot-chart-container"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartist/chartist-custom.js') }}"></script>
@endsection