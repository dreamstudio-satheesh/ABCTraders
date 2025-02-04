@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Apex Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Apex Chart</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic Area Chart </h2>
        </div>
        <div class="card-body">
          <div id="basic-apex"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Area Spaline Chart </h2>
        </div>
        <div class="card-body">
          <div id="area-spaline"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart</h2>
        </div>
        <div class="card-body">
          <div id="basic-bar"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Column Chart </h2>
        </div>
        <div class="card-body">
          <div id="column-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>
            3d Bubble Chart </h2>
        </div>
        <div class="card-body">
          <div id="chart-bubble"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Stepline Chart </h2>
        </div>
        <div class="card-body">
          <div id="stepline"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-12 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Column Chart</h2>
        </div>
        <div class="card-body">
          <div id="annotationchart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart </h2>
        </div>
        <div class="card-body apex-chart">
          <div id="piechart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Donut Chart</h2>
        </div>
        <div class="card-body apex-chart">
          <div id="donutchart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Mixed Chart</h2>
        </div>
        <div class="card-body">
          <div id="mixedchart"> </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Candlestick Chart </h2>
        </div>
        <div class="card-body">
          <div id="candlestick"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Radar Chart </h2>
        </div>
        <div class="card-body">
          <div id="radarchart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Radial Bar Chart</h2>
        </div>
        <div class="card-body">
          <div id="circlechart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/chart-custom.js') }}"></script>
@endsection