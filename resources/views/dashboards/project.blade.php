@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-css/style.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Project</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Dashboard</li>
        <li class="breadcrumb-item f-w-500 active">Project</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 col-sm-6">
      <div class="card welcome-card">
        <div class="card-body">
          <h4 class="f-light f-w-500 mb-1">Have you tried</h4>
          <h2 class="mb-3">Upgrade Your Plan</h2><a class="btn btn-primary btn-hover-effect"
            href="{{ url('admin.pricing') }}">Upgrade Plan</a>
        </div>
        <div class="welcome-image"> <img class="img-fluid" src="{{ asset('assets/images/dashboard-3/1.png') }}"
            alt="upgrade"></div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card project-widget widget-1 title-line">
        <div class="card-header card-no-border pb-0">
          <div class="header-top">
            <div>
              <h3 class="f-w-600">Active Projects</h3><span class="f-12 f-light f-w-500">Projects this month</span>
            </div>
            <div class="card-header-right-icon">
              <div class="dropdown icon-dropdown d-xxl-none1">
                <button class="btn dropdown-toggle" id="active-project" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="active-project"><a class="dropdown-item"
                    href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item"
                    href="#">Yesterday</a></div>
              </div>
            </div>
          </div>
          <div class="widget-middle-content">
            <div class="d-flex align-items-center">
              <h2>106</h2><span class="f-w-500 txt-warning f-12"> <i class="me-1"
                  data-feather="trending-up"></i><span>+50%</span></span>
            </div>
          </div>
        </div>
        <div class="card-body widget-bottom-content">
          <div class="progress-details">
            <ul>
              <li class="bg-secondary">
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#car-white') }}"></use>
                </svg>
              </li>
              <li class="bg-success">
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#game') }}"></use>
                </svg>
              </li>
              <li class="bg-primary">
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#home-white') }}"></use>
                </svg>
              </li>
            </ul>
            <h6 class="txt-success f-w-600">56%</h6>
          </div>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card project-widget widget-1 title-line">
        <div class="card-header card-no-border pb-0">
          <div class="header-top">
            <div>
              <h3 class="f-w-600">Projects Earnings</h3><span class="f-12 f-light f-w-500">From last Week</span>
            </div>
            <div class="card-header-right-icon d-xxl-none">
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="earning-project" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-project"><a class="dropdown-item"
                    href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item"
                    href="#">Yesterday</a></div>
              </div>
            </div>
          </div>
          <div class="widget-middle-content">
            <div class="d-flex align-items-center">
              <h2>$202</h2><span class="f-w-500 txt-warning f-12"> <i class="me-1"
                  data-feather="trending-up"></i><span>+60%</span></span>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="earning-chart-container tooltip-small">
            <div id="earnings-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card project-widget overflow-hidden widget-1 title-line">
        <div class="card-header card-no-border pb-0">
          <div class="header-top">
            <div>
              <h3 class="f-w-600">Total Clients</h3><span class="f-12 f-light f-w-500">Compare to last month</span>
            </div>
            <div class="card-header-right-icon">
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="client-project" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="client-project"><a class="dropdown-item"
                    href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item"
                    href="#">Yesterday</a></div>
              </div>
            </div>
          </div>
          <div class="widget-middle-content">
            <div class="d-flex align-items-center">
              <h2>930</h2><span class="f-w-500 txt-warning f-12"> <i class="me-1"
                  data-feather="trending-up"></i><span>+20%</span></span>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="client-chart-container tooltip-small">
            <div id="total-client"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6 box-col-6">
      <div class="card height-equal title-line">
        <div class="card-header card-no-border">
          <div class="header-top">
            <h2>Projects Overview</h2>
            <div class="card-header-right-icon right-xl-dropdown">
              <div class="dropdown">
                <button class="btn dropdown-toggle" id="overviewButton" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Monthly</button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton"><a class="dropdown-item"
                    href="#">Monthly</a><a class="dropdown-item" href="#">weekly</a><a class="dropdown-item"
                    href="#">yearly</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="project-overview-wrapper">
            <div id="project-overview"></div>
            <div class="project-back-bar">
              <div id="project-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 box-col-6">
      <div class="card height-equal title-line">
        <div class="card-header card-no-border">
          <div class="header-top">
            <h2>Calendar</h2>
            <div class="card-header-right-icon"><a class="link-with-icon" href="#!">Report
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-two-tone') }}"></use>
                </svg></a></div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="calendar-wrapper">
            <ul class="calendar-date-list custom-scrollbar">
              <li> <span class="f-12 f-light">Mon</span>
                <h4 class="f-w-500">14</h4>
              </li>
              <li> <span class="f-12 f-light">Tue</span>
                <h4 class="f-w-500">15</h4>
              </li>
              <li> <span class="f-12 f-light">Wed</span>
                <h4 class="f-w-500">16</h4>
              </li>
              <li> <span class="f-12 f-light">Thu</span>
                <h4 class="f-w-500">17</h4>
              </li>
              <li> <span class="f-12 f-light">Fri</span>
                <h4 class="f-w-500">18</h4>
              </li>
              <li class="today-date"> <span class="f-12 f-light">Sat</span>
                <h4 class="f-w-500">19</h4>
              </li>
              <li> <span class="f-12 f-light">Sun</span>
                <h4 class="f-w-500">20</h4>
              </li>
              <li> <span class="f-12 f-light">Mon</span>
                <h4 class="f-w-500">21</h4>
              </li>
              <li> <span class="f-12 f-light">Tue</span>
                <h4 class="f-w-500">22</h4>
              </li>
              <li> <span class="f-12 f-light">Wed</span>
                <h4 class="f-w-500">23</h4>
              </li>
              <li> <span class="f-12 f-light">Thu</span>
                <h4 class="f-w-500">24</h4>
              </li>
            </ul>
            <div class="table-responsive custom-scrollbar">
              <table class="table client-content">
                <tbody>
                  <tr>
                    <td> <img class="img-fluid" src="{{ asset('assets/images/dashboard-3/client/1.png') }}"
                        alt="client"></td>
                    <td>
                      <h4 class="mb-1">Meeting with Client</h4>
                      <ul class="client-sub-content">
                        <li class="d-flex">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#video') }}"></use>
                          </svg><span class="f-12 f-light f-w-500">Zoom Meeting</span>
                        </li>
                        <li class="d-flex">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#dashboard-clock') }}"></use>
                          </svg><span class="f-12 f-light f-w-500">09 am</span>
                        </li>
                        <li class="d-flex f-12 f-light f-w-500">Lead by <span class="txt-warning">Jaskion Raio</span>
                        </li>
                      </ul>
                    </td>
                    <td><a class="btn btn-light f-12 f-w-500" href="#!">View</a></td>
                  </tr>
                  <tr>
                    <td> <img class="img-fluid" src="{{ asset('assets/images/dashboard-3/client/2.png') }}"
                        alt="client"></td>
                    <td>
                      <h4 class="mb-1">Deal with New Client</h4>
                      <ul class="client-sub-content">
                        <li class="d-flex">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#video') }}"></use>
                          </svg><span class="f-12 f-light f-w-500">Zoom Meeting</span>
                        </li>
                        <li class="d-flex">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#dashboard-clock') }}"></use>
                          </svg><span class="f-12 f-light f-w-500">09 am</span>
                        </li>
                        <li class="d-flex f-12 f-light f-w-500">Lead by <span class="txt-warning">Ashkista Jain</span>
                        </li>
                      </ul>
                    </td>
                    <td> <a class="btn btn-light f-12 f-w-500" href="#!">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-7">
      <div class="card height-equal title-line">
        <div class="card-header card-no-border">
          <div class="header-top">
            <h2>Projects Status</h2>
            <div class="card-header-right-icon"><a class="link-with-icon" href="#!">View all
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-two-tone') }}"></use>
                </svg></a></div>
          </div>
        </div>
        <div class="card-body project-datatable p-0">
          <table class="table" id="project-status">
            <thead>
              <tr>
                <th> <span class="f-light f-w-600">Project</span></th>
                <th> <span class="f-light f-w-600">Team</span></th>
                <th> <span class="f-light f-w-600">Start Date</span></th>
                <th> <span class="f-light f-w-600">Due Date</span></th>
                <th> <span class="f-light f-w-600">Progress</span></th>
                <th> <span class="f-light f-w-600">Status</span></th>
                <th> <span class="f-light f-w-600">Action</span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="{{ route('admin.user-profile') }}">Development</a></td>
                <td>
                  <div class="customers">
                    <ul>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/1.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/2.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/3.png') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="light-card"><span class="f-w-500 f-light f-12">+3 </span></div>
                      </li>
                    </ul>
                  </div>
                </td>
                <td> <span class="f-light">12 Jan 2024</span></td>
                <td> <span class="f-light">15 Jan 2024 </span></td>
                <td>
                  <div class="d-flex">
                    <div class="progress progress-stripe-primary" style="height: 5px">
                      <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 70%"
                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="f-12 f-light">40%</span>
                  </div>
                </td>
                <td><span class="badge btn-lighten-primary">In Progress </span></td>
                <td>
                  <div class="dropdown icon-dropdown text-center">
                    <button class="btn dropdown-toggle" id="tableButton1" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tableButton1"><a class="dropdown-item"
                        href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td><a href="{{ route('admin.user-profile') }}">Web Landing </a></td>
                <td>
                  <div class="customers">
                    <ul>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/4.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/5.png') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="light-card"><span class="f-w-500 f-light f-12">+9</span></div>
                      </li>
                    </ul>
                  </div>
                </td>
                <td> <span class="f-light">5 Feb 2024</span></td>
                <td> <span class="f-light">25 Feb 2024 </span></td>
                <td>
                  <div class="d-flex">
                    <div class="progress progress-stripe-warning" style="height: 5px">
                      <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 25%"
                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="f-12 f-light">25%</span>
                  </div>
                </td>
                <td><span class="badge badge-light-warning">Pending</span></td>
                <td>
                  <div class="dropdown icon-dropdown text-center">
                    <button class="btn dropdown-toggle" id="tableButton2" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tableButton2"><a class="dropdown-item"
                        href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td><a href="{{ route('admin.user-profile') }}">Development </a></td>
                <td>
                  <div class="customers">
                    <ul>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/6.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/7.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/8.png') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="light-card"><span class="f-w-500 f-light f-12">+3</span></div>
                      </li>
                    </ul>
                  </div>
                </td>
                <td> <span class="f-light">12 Feb 2024</span></td>
                <td> <span class="f-light">1 Mar 2024 </span></td>
                <td>
                  <div class="d-flex">
                    <div class="progress progress-stripe-success" style="height: 5px">
                      <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 100%"
                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="f-12 f-light">100%</span>
                  </div>
                </td>
                <td><span class="badge badge-light-success">Done</span></td>
                <td>
                  <div class="dropdown icon-dropdown text-center">
                    <button class="btn dropdown-toggle" id="tableButton3" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tableButton3"><a class="dropdown-item"
                        href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td><a href="{{ route('admin.user-profile') }}">Marketing </a></td>
                <td>
                  <div class="customers">
                    <ul>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/9.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/10.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/11.png') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="light-card"><span class="f-w-500 f-light f-12">+4</span></div>
                      </li>
                    </ul>
                  </div>
                </td>
                <td> <span class="f-light">25 Feb 2024</span></td>
                <td> <span class="f-light">10 Mar 2024 </span></td>
                <td>
                  <div class="d-flex">
                    <div class="progress progress-stripe-warning" style="height: 5px">
                      <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 40%"
                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="f-12 f-light">40%</span>
                  </div>
                </td>
                <td><span class="badge badge-light-warning">Pending</span></td>
                <td>
                  <div class="dropdown icon-dropdown text-center">
                    <button class="btn dropdown-toggle" id="tableButton4" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tableButton4"><a class="dropdown-item"
                        href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xl-5">
      <div class="card height-equal title-line">
        <div class="row">
          <div class="col-xxl-6 col-xl-12 col-sm-6 box-col-12 col-xxl-100">
            <div class="card-header card-no-border">
              <h2>Chat Application</h2><span class="f-w-500">Live Chart</span>
            </div>
            <div class="card-body pt-0 chat-app-wrapper">
              <div class="project-details">
                <div class="d-flex gap-2"><img src="{{ asset('assets/images/dashboard-3/user/13.png') }}" alt="user">
                  <div>
                    <h4 class="f-w-500">Brooklyn Simmons</h4><span class="f-12 f-light f-w-500">Web Manager</span>
                  </div>
                </div>
                <p class="f-w-500 f-light">Bring your teams, work, and apps together from anywhere in one tool with
                  github. Customize Workflows.</p>
                <ul class="light-card budget-details">
                  <li>
                    <h3 class="f-w-600">21 Oct</h3><span class="f-12 f-w-500 f-light">Due Date</span>
                  </li>
                  <li>
                    <h3 class="f-w-600">$78,320</h3><span class="f-12 f-w-500 f-light">Budget</span>
                  </li>
                </ul>
                <div class="d-flex gap-sm-2 gap-1"><a class="btn btn-lighten-primary link-with-icon" href="#!">View
                    Project
                    <svg>
                      <use href="{{ asset('assets/svg/icon-sprite.svg#arrow-two-tone') }}"></use>
                    </svg></a>
                  <div class="customers">
                    <ul>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/1.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/2.png') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-30 rounded-circle"
                          src="{{ asset('assets/images/dashboard-3/user/3.png') }}" alt="user"></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 col-sm-6 box-col-none d-xxl-none2">
            <div class="project-banner card-body"><img class="img-fluid"
                src="{{ asset('assets/images/dashboard-3/banner.png') }}" alt="banner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-5 box-col-5">
      <div class="card title-line">
        <div class="card-header card-no-border">
          <h2>Recent Project Update</h2>
        </div>
        <div class="card-body pt-0">
          <div class="recent-update">
            <div class="swiper recent-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon primary">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#game-icon') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>Marketing </h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/avtar/4.jpg') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/12.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+2</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">45%</span>
                        </div>
                        <div class="progress progress-stripe-primary with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 45%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon success">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#pen-scale') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>NFT Design</h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/14.png') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/15.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+6</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">70%</span>
                        </div>
                        <div class="progress progress-stripe-success with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 70%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon secondary">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#programming') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>Development</h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+1</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">80%</span>
                        </div>
                        <div class="progress progress-stripe-secondary with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon warning">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#apple-ios') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>iOS App UI</h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/18.png') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/19.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+1</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">30%</span>
                        </div>
                        <div class="progress progress-stripe-warning with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 30%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon secondary">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#programming') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>Development</h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+1</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">80%</span>
                        </div>
                        <div class="progress progress-stripe-secondary with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon primary">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#game-icon') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>Marketing </h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/avtar/4.jpg') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/12.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+2</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">45%</span>
                        </div>
                        <div class="progress progress-stripe-primary with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 45%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="light-card-2 recent-project-wrapper">
                    <div class="recent-icon secondary">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#programming') }}"></use>
                      </svg>
                    </div>
                    <div class="recent-content">
                      <div class="d-flex">
                        <div>
                          <h6>Development</h6><span class="f-12 f-w-500 f-light">Design</span>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/16.png') }}" alt="user"></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle"
                                src="{{ asset('assets/images/dashboard-3/user/17.png') }}" alt="user"></li>
                            <li class="d-inline-block">
                              <div class="light-card"><span class="f-w-500 f-light f-12">+1</span></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="recent-progress">
                        <div class="d-flex justify-content-between align-items-center"><span
                            class="f-light f-w-500 f-12">Progress</span><span class="f-light f-w-500 f-12">80%</span>
                        </div>
                        <div class="progress progress-stripe-secondary with-light-background" style="height: 5px">
                          <div class="progress-bar-animated progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="arrow-group">
              <div class="prev">
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#swiper-prev-arrow') }}"></use>
                </svg>
              </div>
              <div class="next">
                <svg>
                  <use href="{{ asset('assets/svg/icon-sprite.svg#swiper-next-arrow') }}"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 box-col-4">
      <div class="card title-line earning-tread">
        <div class="card-header card-no-border">
          <div class="header-top">
            <div>
              <h2>Avg. Earnings</h2>
            </div>
            <div class="card-header-right-icon">
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="earning-avg" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-avg"><a class="dropdown-item"
                    href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item"
                    href="#">Yesterday</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="row gy-2">
            <div class="col-xxl-6 col-md-12 col-sm-6">
              <div class="earning-left-content">
                <h2>$342,091.56</h2>
                <div><span class="f-12 f-w-500 txt-warning"> <i class="me-1"
                      data-feather="trending-up"></i>+20%</span><span class="f-12 f-w-500 f-light ms-2">Than Last
                    Week</span></div>
              </div>
            </div>
            <div class="col-xxl-6 d-xxl-block d-xl-none col-md-12 col-sm-6">
              <ul class="earning-right-content">
                <li> <span class="f-12 f-w-500 f-light">10:45 PM</span><span
                    class="f-12 f-w-500 txt-success">+732.67</span></li>
                <li> <span class="f-12 f-w-500 f-light">03:20 AM</span><span
                    class="f-12 f-w-500 txt-danger">-108.09</span></li>
              </ul>
            </div>
          </div>
          <ul class="earning-buttons">
            <li>
              <button class="btn btn-light" type="button">1d</button>
            </li>
            <li>
              <button class="btn btn-light" type="button">10d</button>
            </li>
            <li>
              <button class="btn btn-light" type="button">1m</button>
            </li>
            <li>
              <button class="btn btn-light" type="button">6m</button>
            </li>
            <li>
              <button class="btn btn-light" type="button">1y</button>
            </li>
          </ul>
          <div class="avg-earning-chart-container">
            <div id="earning-average"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 box-col-3">
      <div class="card title-line">
        <div class="card-header card-no-border">
          <div class="header-top">
            <div>
              <h2>Daily Task</h2>
            </div>
            <div class="card-header-right-icon">
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="daily-task" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="daily-task"><a class="dropdown-item"
                    href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item"
                    href="#">Yesterday</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body notification daily-task pt-0">
          <ul>
            <li class="d-flex align-items-center">
              <div class="activity-dot-primary"></div>
              <div class="task-content ms-2">
                <div class="d-flex align-items-center">
                  <div>
                    <h6>iOS App UI/UX Meet..</h6><span class="f-light f-w-500 f-12">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock-2') }}"></use>
                      </svg><span>9:00 am</span></span>
                  </div><a class="btn btn-lighten-primary" href="{{ route('admin.to-do') }}">Remind Me</a>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="activity-dot-warning"></div>
              <div class="task-content ms-2">
                <div class="d-flex align-items-center">
                  <div>
                    <h6>Start Web developing..</h6><span class="f-light f-w-500 f-12">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock-2') }}"></use>
                      </svg><span>10:00 am</span></span>
                  </div><a class="btn btn-lighten-primary" href="{{ route('admin.to-do') }}">Remind Me</a>
                </div>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="activity-dot-success"></div>
              <div class="task-content ms-2">
                <div class="d-flex align-items-center">
                  <div>
                    <h6>IOS App ui</h6><span class="f-light f-w-500 f-12">
                      <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#clock-2') }}"></use>
                      </svg><span>10:00 am</span></span>
                  </div><a class="btn btn-lighten-primary" href="{{ route('admin.to-do') }}">Remind Me</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/simple-datatable.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
@endsection