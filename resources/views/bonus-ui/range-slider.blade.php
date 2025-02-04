@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Range Slider</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Range Slider</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default Range Slider</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <form class="theme-form form-label-align-right range-slider">
            <div class="form-group row">
              <div class="col-md-10">
                <input id="u-range-01" type="text">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Min Max Value</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-02" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Prefix</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-03" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Negative Value</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-04" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Steps Range Slider</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-05" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Custom Values</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-06" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Prettify Numbers</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-07" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Disabled</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-08" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Manipulating UI</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-09" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Core UI Text</h2>
          <p class="f-m-light mt-1">
            Use the <code>.range-slider </code> class. and yuri used Ion range
            slider.<code>[http://ionden.com/a/plugins/ion.rangeSlider]</code></p>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-10">
              <input id="u-range-10" type="text">
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
<script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
@endsection