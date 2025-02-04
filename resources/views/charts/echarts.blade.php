@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/echart.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Echarts</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Echarts</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic Area Chart </h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="area-echart"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Area Pie Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="echart-pie"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Polar Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="echart-polar"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer-large" id="echart-bar"> </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Chart 2</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer-large" id="echart-bar2"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Boxplot Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer boxplot-cotainer" id="echart-boxplot"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Lines Clip Chart</h2>
        </div>
        <div class="card-body clip-chart-wrapper">
          <div class="apache-cotainer" id="lines-clip"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Visual Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="line-visual"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Angle Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="texture-bar-by-clipPath"> </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Gauge Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="echart-gauge"> </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Visual Chart 2</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="line-visulH"> </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pictorial Repeat Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="dynamic-data"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 xl-100 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Radar Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-cotainer" id="echart-radar"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 xl-100 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Polar Line Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-container polar-line" id="main0"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pie Rich Text Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-container" id="echart-pierich"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pictorial Single Chart</h2>
        </div>
        <div class="card-body">
          <div class="apache-container" id="dotted"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card note p-20 d-inline-block w-100"> Echarts for more options please refer <a
          href="https://echarts.apache.org/examples/en/index.html" target="_blank">echart Official site </a>And <a
          href="https://github.com/apache/echarts" target="_blank">githup link</a></div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/esl.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/config.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/facePrint.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/testHelper.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/pie-chart/custom-transition-texture.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/data/symbols.js') }}"></script>
<script src="{{ asset('assets/js/chart/echart/custom.js') }}"></script>
@endsection