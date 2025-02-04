@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>ChartJS Char</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">ChartJS Char</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart</h2>
        </div>
        <div class="card-body chart-block">
          <canvas id="myBarGraph"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Graph</h2>
        </div>
        <div class="card-body chart-block">
          <canvas id="myGraph"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Radar Graph</h2>
        </div>
        <div class="card-body chart-block">
          <canvas id="myRadarGraph"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <canvas id="myLineCharts"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Doughnut Chart</h2>
        </div>
        <div class="card-body chart-block chart-vertical-center">
          <canvas id="myDoughnutGraph"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Polar Chart</h2>
        </div>
        <div class="card-body chart-block chart-vertical-center">
          <canvas id="myPolarGraph"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartjs/chart.custom.js') }}"></script>
<script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
@endsection