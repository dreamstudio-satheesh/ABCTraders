@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Google Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Google Chart</li>
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
          <h2>Area Chart <span>1</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="area-chart1"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Area Chart <span>2</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="area-chart2"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Column Chart <span>1 </span></h2>
        </div>
        <div class="card-body chart-block">
          <div class="chart-overflow" id="column-chart1"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Column Chart <span>2</span></h2>
        </div>
        <div class="card-body chart-block">
          <div class="chart-overflow" id="column-chart2"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Gantt Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="chart-overflow" id="gantt_chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="chart-overflow" id="line-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Combo Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="chart-overflow" id="combo-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart 2</h2>
        </div>
        <div class="card-body chart-block">
          <div id="bar-chart2"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Word Tree</h2>
        </div>
        <div class="card-body chart-block">
          <div class="word-tree" id="wordtree_basic"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart <span>1</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="pie-chart1"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart <span>2</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="pie-chart3"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart <span>3</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="pie-chart4"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 box-col-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Chart <span>4</span></h2>
        </div>
        <div class="card-body p-0 chart-block">
          <div class="chart-overflow" id="pie-chart2"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/google/google-chart-loader.js') }}"></script>
<script src="{{ asset('assets/js/chart/google/google-chart.js') }}"></script>
@endsection