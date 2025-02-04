@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Input Mask</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Form Controls</li>
        <li class="breadcrumb-item f-w-500 active">Input Mask</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Input Mask</h2>
          <p class="f-m-light mt-1">
            Input mask used in form-validations,forms,card-details,and etc.</p>
        </div>
        <div class="card-body input-mask">
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                <h6 class="sub-title">Date Format</h6>
                <form class="row g-3">
                  <div class="col-12">
                    <label class="col-form-label" for="cleave-date1">Date</label>
                    <input class="form-control" id="cleave-date1" type="text" placeholder="DD-MM-YYYY">
                  </div>
                  <div class="col-12">
                    <label class="col-form-label" for="cleave-date2">Date format type</label>
                    <input class="form-control" id="cleave-date2" type="text" placeholder="MM-YYYY">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                <h6 class="sub-title">Time Format</h6>
                <form class="row g-3">
                  <div class="col-12">
                    <label class="col-form-label" for="cleave-time1">Time format type</label>
                    <input class="form-control" id="cleave-time1" type="text" placeholder="hh:mm:ss">
                  </div>
                  <div class="col-12">
                    <label class="col-form-label" for="cleave-time2">Hour/month type</label>
                    <input class="form-control" id="cleave-time2" type="text" placeholder="hh:mm">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12">
              <div class="card-wrapper border rounded-3 light-card checkbox-checked">
                <h6 class="sub-title">Default Input Mask</h6>
                <form class="row g-3">
                  <div class="col-xxl-4 col-sm-6">
                    <label class="col-form-label" for="cleave-number-format">Currency</label>
                    <input class="form-control" id="cleave-number-format" type="text" placeholder="Enter number">
                  </div>
                  <div class="col-xxl-4 col-sm-6">
                    <label class="col-form-label" for="cleave-type-prefix">Prefix</label>
                    <input class="form-control" id="cleave-type-prefix" type="text" placeholder="Prefix-xxxx-xxxx-xxxx">
                  </div>
                  <div class="col-xxl-4 col-sm-6">
                    <label class="col-form-label" for="cleave-type-delimiter">Delimiter</label>
                    <input class="form-control" id="cleave-type-delimiter" type="text" placeholder="xxx·xxx·xxx">
                  </div>
                  <div class="col-xxl-4 col-sm-6">
                    <label class="form-label" for="cleave-phone-number">Phone Number</label>
                    <input class="form-control" id="cleave-phone-number" type="text" placeholder="(xxx)xxx-xxxx">
                  </div>
                  <div class="col-xxl-4 col-sm-6">
                    <label class="form-label" for="cleave-card-number">Card Number</label>
                    <input class="form-control" id="cleave-card-number" type="text" placeholder="xxxx xxxx xxxx xxxx">
                  </div>
                  <div class="col-xxl-4 col-sm-6">
                    <label class="form-label" for="tailprefix">Tailprefix</label>
                    <input class="form-control" id="tailprefix" type="text" placeholder="0000.00€">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/cleave/cleave.min.js') }}"></script>
<script src="{{ asset('assets/js/cleave/custom-cleave.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection