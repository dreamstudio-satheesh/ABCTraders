@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/emoji/uikit.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Morris Chart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Charts</li>
        <li class="breadcrumb-item f-w-500 active">Morris Chart</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="morris-line-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Updating Data</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="updating-data-morris-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Decimal Data</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder float-start" id="decimal-morris-chart"></div>
            <p class="float-end" id="choices"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Displaying X Labels Diagonally</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="x-Labels-Diagonally-morris-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bar Line Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="bar-line-chart-morris"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Displaying X Labels Diagonally(Bar Chart)</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="x-lable-morris-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Stacked Bars Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="stacked-bar-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Simple Bar Charts</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="morris-simple-bar-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Area Charts Behaving Like Line Charts</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="graph123"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 box-col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Donut Color Chart</h2>
        </div>
        <div class="card-body chart-block">
          <div class="flot-chart-container">
            <div class="flot-chart-placeholder" id="donut-color-chart-morris"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
<script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"></script>
<script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/morris-chart/morris-script.js') }}"></script>
@endsection