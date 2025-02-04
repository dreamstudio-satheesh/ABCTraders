@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Flot Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Flot Chart</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row all-chart">
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Real-Time Updates</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="real-time-update"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Multiple Real-Time Updates</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="multiple-real-timeupdate"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Error Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="error-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Adding Annotations Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="annotations-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="flot-basic-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Categories Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="flot-categories"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Toggling Series Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder float-start" id="toggling-series-flot"></div>
            <p class="float-end" id="choices"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Stacking Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="stacking-flot-chart"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default Pie Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="default-pie-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default Pie Chart (Interactive)</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="default-pie-flot-chart-hover"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default Pie Chart without Legend</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="default-pie-legend-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Custom Label Formatter</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="custom-label1pie"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Label Radius Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="label-radius-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Hidden Labels Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="hidden-label-radius-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Tilted Pie Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="title-pie-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Donut Hole Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="dount-hole-flot-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/excanvas.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/flot-script.js') }}"></script>
@endsection