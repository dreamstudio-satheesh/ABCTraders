@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Alert</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">UI Kits</li>
        <li class="breadcrumb-item f-w-500 active">Alert</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Link color in dark theme</h2>
          <p class="f-m-light mt-2">Use the <code>.alert-link</code> utility class to quickly provide matching colored
            links within any alert.</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <p class="mb-1">Primary Alert</p>
              <div class="alert alert-primary dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">primary alert</a> with an example link.Check it
                  out.</p>
              </div>
              <p class="mb-1">Secondary Alert</p>
              <div class="alert alert-secondary dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">secondary alert</a> with an example link. Check
                  it out.</p>
              </div>
              <p class="mb-1">Success Alert</p>
              <div class="alert alert-success dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">success alert </a> with an example link. Check it
                  out.</p>
              </div>
              <p class="mb-1">Info Alert</p>
              <div class="alert alert-info dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">info alert </a> with an example link. Check it
                  out.</p>
              </div>
            </div>
            <div class="col-xl-6">
              <p class="mb-1">Warning Alert</p>
              <div class="alert alert-warning dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">warning alert </a> with an example link. Check it
                  out.</p>
              </div>
              <p class="mb-1">Danger Alert</p>
              <div class="alert alert-danger dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">danger alert </a> with an example link. Check it
                  out.</p>
              </div>
              <p class="mb-1">Light Alert</p>
              <div class="alert alert-light dark" role="alert">
                <p>This is a <a class="alert-link" href="#">light alert </a> with an example link. Check it out.</p>
              </div>
              <p class="mb-1">Dark Alert</p>
              <div class="alert alert-dark dark" role="alert">
                <p>This is a <a class="alert-link text-white" href="#">dark alert </a> with an example link. Check it
                  out.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Link color in light theme</h2>
          <p class="f-m-light mt-2">Use the <code>.alert-link</code> utility class to quickly provide matching colored
            links within any alert.</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <p class="mb-1">Primary Light Alert</p>
              <div class="alert alert-light-primary" role="alert">
                <p class="txt-primary">This is a <a class="alert-link txt-primary" href="#">primary alert</a> with an
                  example link.Check it out.</p>
              </div>
              <p class="mb-1">Secondary Light Alert</p>
              <div class="alert alert-light-secondary" role="alert">
                <p class="txt-secondary">This is a <a class="alert-link txt-secondary" href="#">secondary alert</a> with
                  an example link. Check it out.</p>
              </div>
              <p class="mb-1">Success Light Alert</p>
              <div class="alert alert-light-success" role="alert">
                <div class="txt-success">This is a <a class="alert-link txt-success" href="#">success alert </a> with an
                  example link. Check it out.</div>
              </div>
              <p class="mb-1">Info Light Alert</p>
              <div class="alert alert-light-info" role="alert">
                <div class="txt-info">This is a <a class="alert-link txt-info" href="#">info alert </a> with an example
                  link. Check it out.</div>
              </div>
            </div>
            <div class="col-xl-6">
              <p class="mb-1">Warning Light Alert</p>
              <div class="alert alert-light-warning" role="alert">
                <p class="txt-warning">This is a <a class="alert-link txt-warning" href="#">warning alert </a> with an
                  example link. Check it out.</p>
              </div>
              <p class="mb-1">Danger Light Alert</p>
              <div class="alert alert-light-danger" role="alert">
                <p class="txt-danger">This is a <a class="alert-link txt-danger" href="#">danger alert </a> with an
                  example link. Check it out.</p>
              </div>
              <p class="mb-1">White Light Alert</p>
              <div class="alert alert-light-light" role="alert">
                <p class="txt-dark">This is a <a class="alert-link txt-dark" href="#">light alert </a> with an example
                  link. Check it out.</p>
              </div>
              <p class="mb-1">Dark Light Alert</p>
              <div class="alert alert-light-dark" role="alert">
                <p class="txt-dark">This is a <a class="alert-link txt-dark" href="#">dark alert </a> with an example
                  link. Check it out.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Outline dark and light alerts</h2>
          <p class="f-m-light mt-2">Use the <code>.border-* </code>utility class to quickly provide matching border and
            border-width within any alert.</p>
        </div>
        <div class="card-body">
          <div class="alert txt-secondary border-secondary alert-dismissible fade show" role="alert"><i
              data-feather="clock"></i>
            <p>One of <strong>YouTube's</strong>most crucial ranking factors is Watch Time.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert txt-warning border-warning outline-2x alert-dismissible fade show alert-icons" role="alert">
            <i data-feather="thumbs-up"></i>
            <p><b> Well done! </b>You successfully read this important message.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Alerts with icons and text actions</h2>
          <p class="f-m-light mt-2">Use the <code>.dismiss-text</code> class to add dismiss text instead of icon</p>
        </div>
        <div class="card-body dark-txt">
          <div class="alert border-primary alert-dismissible fade show p-0" role="alert">
            <div class="alert-arrow bg-primary"><i class="icon-timer"></i></div>
            <p>Your time Over after <strong class="txt-dark">5</strong> minute</p>
            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span
                class="bg-primary px-3 py-1" aria-hidden="true">Check</span></button>
          </div>
          <div class="alert border-secondary alert-dismissible fade show p-0 mb-0" role="alert">
            <div class="alert-arrow bg-secondary"><i class="icon-heart"></i></div>
            <p>Oh snap! Change a few things up <strong class="txt-dark"> Notification check</strong></p>
            <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span
                class="bg-secondary text-white px-3 py-1" aria-hidden="true">Alert</span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Dismissing dark alert</h2>
          <p class="f-m-light mt-2">Use the <code>.alert-dismissible</code> utility class to quickly remove the alerts.
          </p>
        </div>
        <div class="card-body">
          <div class="alert alert-dark dark alert-dismissible fade show" role="alert"><i data-feather="heart"></i>
            <p>Check your update! You should check in on some of those fields below.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Dismissing light alert</h2>
          <p class="f-m-light mt-2">Use the <code>.alert-dismissible</code> utility class to quickly remove the alerts.
          </p>
        </div>
        <div class="card-body light-alert">
          <div class="alert alert-light-primary alert-dismissible fade show" role="alert"><i data-feather="bell"></i>
            <p>Hidden content You should check in on some of those fields below.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Live alert</h2>
          <p class="f-m-light mt-2">
            Click the button below to show an alert,then dismiss it with the built-in close button.</p>
        </div>
        <div class="card-body live-dark">
          <div id="liveAlertPlaceholder"></div>
          <button class="btn btn-danger" id="liveAlertBtn" type="button">Show live alert</button>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Left border alert</h2>
          <p class="f-m-light mt-2">
            Use the <code>.border-left-wrapper </code>to change border-left radius.</p>
        </div>
        <div class="card-body live-dark">
          <div class="alert alert-light-secondary light alert-dismissible fade show text-dark border-left-wrapper"
            role="alert"><i data-feather="help-circle"></i>
            <p>You can check in on some of those fields below.</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Additional content</h2>
          <p class="f-m-light mt-2">
            Use the <code>.alert </code> utility class to quickly provide additional content within any alerts.</p>
        </div>
        <div class="card-body dark-alert">
          <div class="alert alert-light-primary" role="alert">
            <h5 class="alert-heading pb-2 txt-primary">Please! Check your notifications</h5>
            <p>The duty of notification is imposed upon the head of the family, and also upon the medical practitioner
              who may be in attendance on the patient.</p>
            <hr>
            <p class="mb-0">The emergency notification system is free and is available in all 50 states.</p>
          </div>
          <div class="alert alert-light-secondary" role="alert">
            <h5 class="alert-heading pb-2 txt-secondary">Something went wrong! Please, chrome update.</h5>
            <p>The duty of notification is imposed upon the head of the family, and also upon the medical practitioner
              who may be in attendance on the patient.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
          </div>
          <div class="alert alert-light-warning" role="alert">
            <h5 class="alert-heading pb-2 txt-warning">Please! Hidden cameras were not installed.</h5>
            <p>Due to increasingly accessible technology, hidden cameras have grown in popularity among regular people
              in recent years.</p>
            <hr>
            <p class="mb-0">Consider moving clocks and plush animals from your area if you think they may be concealing
              cameras because they are both portable items.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/alert.js') }}"></script>
@endsection