@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Calender</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Apps</li>
        <li class="breadcrumb-item f-w-500 active">Calender</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid calendar-basic">
  <div class="card">
    <div class="card-body">
      <div class="row" id="wrap">
        <div class="col-xl-3 box-col-12">
          <div class="md-sidebar mb-3"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">calendar
              filter</a>
            <div class="md-sidebar-aside job-left-aside custom-scrollbar">
              <div id="external-events">
                <h2>Draggable Events</h2>
                <div id="external-events-list">
                  <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                    <div class="fc-event-main common-flex align-items-center"> <i
                        class="fa fa-birthday-cake"></i>Birthday Party</div>
                  </div>
                  <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                    <div class="fc-event-main common-flex align-items-center"> <i class="fa fa-user"></i>Meeting With
                      Team.</div>
                  </div>
                  <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                    <div class="fc-event-main common-flex align-items-center"> <i class="fa fa-plane"></i>Tour & Picnic
                    </div>
                  </div>
                  <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                    <div class="fc-event-main common-flex align-items-center"> <i class="fa fa-file-text"></i>Reporting
                      Schedule</div>
                  </div>
                  <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                    <div class="fc-event-main common-flex align-items-center"> <i class="fa fa-briefcase"></i>Lunch &
                      Break</div>
                  </div>
                </div>
                <p>
                  <input class="checkbox_animated" id="drop-remove" type="checkbox">
                  <label class="mb-0 pb-0" for="drop-remove">remove after drop</label>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 box-col-12">
          <div class="calendar-default" id="calendar-container">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/calendar/fullcalendar-custom.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
@endsection