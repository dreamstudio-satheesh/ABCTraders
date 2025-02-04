@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Sweet Alert</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Sweet Alert</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Basic example</h2>
          <p class="f-m-light mt-1">Print the basic message.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary sweet-1" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Click it!</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Title with a text under</h2>
          <p class="f-m-light mt-1">Print the title with text.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-secondary sweet-2" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Surprise!</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Info alert </h2>
          <p class="f-m-light mt-1">Print the informational message.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-info sweet-4" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Informational</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Warning alert </h2>
          <p class="f-m-light mt-1">Warning for imaginary files.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-warning sweet-5" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Warning</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Pikachu alert</h2>
          <p class="f-m-light mt-1">catch the pokeball.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-warning sweet-12" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-12']);">Pikachu</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Questions alert </h2>
          <p class="f-m-light mt-1">Print the questionary and give answers.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary sweet-11" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-11']);">Questions state</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Username alert</h2>
          <p class="f-m-light mt-1">Print the basic sweet-alert.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-secondary sweet-13" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-13']);">Username</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Success message</h2>
          <p class="f-m-light mt-1">Print the success message.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-success sweet-8" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Login successfully</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Danger alert </h2>
          <p class="f-m-light mt-1">Print the danger message.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-danger sweet-7" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-7']);">Danger mode</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Warning mode</h2>
          <p class="f-m-light mt-1">Print the warning message.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-warning sweet-6" type="button"
            onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-6']);">Alert mode</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Auto close timer</h2>
          <p class="f-m-light mt-1">A text message with an automatic timer.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-primary sweet-14" type="button"
            onclick="_gaq.push(['_trackEvent', 'sweet-14']);">Timer</button>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>AJAX request movie</h2>
          <p class="f-m-light mt-1">Give the movie name & return value.</p>
        </div>
        <div class="card-body btn-showcase">
          <button class="btn btn-secondary sweet-15" type="button"
            onclick="_gaq.push(['_trackEvent', 'sweet-15']);">Movie mode</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/sweet-alert/app.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection