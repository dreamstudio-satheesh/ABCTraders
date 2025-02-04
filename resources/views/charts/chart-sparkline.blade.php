@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Sparkline Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Sparkline Chart</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Mouse Speed Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="mouse-speed-chart-sparkline"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Simple Bar Charts</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="custom-line-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder line-chart-sparkline" id="line-chart-sparkline"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Simple Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="bar-chart-sparkline"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="pie-sparkline-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/sparkline/sparkline.js') }}"></script>
<script src="{{ asset('assets/js/chart/sparkline/sparkline-script.js') }}"></script>
@endsection