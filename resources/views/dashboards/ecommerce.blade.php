@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-css/style.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>E-commerce</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Dashboard</li>
        <li class="breadcrumb-item f-w-500 active">E-commerce</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid dashboard2">
  <div class="row">
    <div class="col-xl-9 col-xl-80">
      <div class="row">
        <div class="col-xl-12">
          <div class="card title-line sales-details">
            <div class="card-header card-no-border sales-bg">
              <div class="header-top">
                <div>
                  <h2>Sales Overview </h2>
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
            <div class="card-body pt-0 custom-scrollbar">
              <div class="row row-cols-4 row-cols-xl-iii row-cols-md-iii">
                <div class="col">
                  <div class="sales-overview widget-1">
                    <div class="common-box">
                      <div class="rounded-circle2 warning">
                        <div class="sales-icon">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#sales') }}"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h3 class="f-w-600">24k USD</h3>
                        <div class="sale-content"><span class="f-w-500 f-light f-12">Total Sales</span>
                          <div class="d-flex align-items-center gap-1"><i class="stroke-warning"
                              data-feather="trending-up"></i><span class="txt-warning f-w-600 f-12">+34%</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="sales-overview widget-1">
                    <div class="common-box">
                      <div class="rounded-circle2 success">
                        <div class="sales-icon">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#customer') }}"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h3 class="f-w-600">9.453k </h3>
                        <div class="sale-content"><span class="f-w-500 f-light f-12">Customer</span>
                          <div class="d-flex align-items-center gap-1"><i class="stroke-success"
                              data-feather="trending-up"></i><span class="txt-success f-w-600 f-12">+27% </span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="sales-overview widget-1">
                    <div class="common-box">
                      <div class="rounded-circle2 primary">
                        <div class="sales-icon">
                          <svg class="fill-primary">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#orders') }}"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h3 class="f-w-600">1.786k </h3>
                        <div class="sale-content"><span class="f-w-500 f-light f-12">Orders</span>
                          <div class="d-flex align-items-center gap-1"><i class="stroke-primary"
                              data-feather="trending-up"></i><span class="txt-primary f-w-600 f-12">+45%</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col sales-transaction">
                  <div class="sales-overview widget-1">
                    <div class="common-box">
                      <div class="rounded-circle2 secondary">
                        <div class="sales-icon">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#transaction') }}"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h3 class="f-w-600">24k USD</h3>
                        <div class="sale-content"><span class="f-w-500 f-light f-12">Transaction</span>
                          <div class="d-flex align-items-center gap-1"><i class="stroke-secondary reverse-icon"
                              data-feather="trending-up"></i><span class="txt-secondary f-w-600 f-12">+27%</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 order-xl-iv col-xl-50 col-md-4 col-sm-6 order-sm-ii">
          <div class="card store-card">
            <div class="card-header card-no-border">
              <h3 class="f-w-600">We are working to boost lovely mood</h3><span class="f-light f-w-500 mt-2">Projects
                this month</span><a class="btn btn-primary btn-hover-effect" href="#!">Create a Store</a>
            </div>
            <div class="card-body pb-1 text-center">
              <div class="store-image"><img class="img-fluid" src="{{ asset('assets/images/dashboard-2/bg3.gif') }}"
                  alt="store"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-xl-100 order-xl-i col-md-8">
          <div class="card title-line revenue-header">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>Revenue vs Order</h2>
                <div class="card-header-right-icon square-legend">
                  <div>
                    <div class="legend-box">
                      <div class="bg-primary"></div><span class="f-light f-12 f-w-500">Revenue</span>
                    </div>
                    <div class="legend-box">
                      <div class="bg-success"></div><span class="f-light f-12 f-w-500">Order</span>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="overviewButton" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">Monthly</button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton"><a
                        class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">weekly</a><a
                        class="dropdown-item" href="#">yearly</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="revenue-order" id="revenue-order"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 order-xl-v col-xl-50 col-md-4 col-sm-6 order-sm-i">
          <div class="row">
            <div class="col-12">
              <div class="card widget-1">
                <div class="card-body common-space order-card">
                  <div> <span class="f-w-500 f-light">Today Orders</span>
                    <h2>120k Orders</h2>
                    <div class="order-content"><span class="f-light f-12 f-w-500">Last week </span>
                      <div><span class="txt-danger f-12 f-w-600"><i class="stroke-danger reverse-icon"
                            data-feather="trending-up"></i>-10%</span></div>
                    </div>
                  </div>
                  <div class="delivery-image"><img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/orders/1.png') }}" alt="order"></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card widget-1">
                <div class="card-body common-space order-card">
                  <div class="customer-month"><span class="f-w-500 f-light">Delivery Successful</span>
                    <h2>390k</h2>
                    <div class="order-content"><span class="f-light f-12 f-w-500">Last week </span>
                      <div><span class="txt-success f-12 f-w-600"><i class="stroke-success"
                            data-feather="trending-up"></i>-27%</span></div>
                    </div>
                  </div>
                  <div class="delivery-image"><img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/orders/2.png') }}" alt="order"></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card widget-1">
                <div class="card-body order-card">
                  <div class="customer-month"><span class="f-w-500 f-light">New Customers this month</span>
                    <h2>10,987</h2>
                    <div class="order-content"><span class="f-light f-12 f-w-500">Last week </span>
                      <div><span class="txt-success f-12 f-w-600"><i class="stroke-success reverse-icon"
                            data-feather="trending-up"></i>-10%</span></div>
                    </div>
                  </div>
                  <div class="customer-profile"><span class="f-w-500">Today's Heroes</span>
                    <ul class="d-inline-block">
                      <li class="d-inline-block">
                        <div class="profile-letter bg-warning"><span class="f-w-600 txt-white f-12">A</span></div>
                      </li>
                      <li class="d-inline-block"><img class="img-fluid rounded-circle"
                          src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user"></li>
                      <li class="d-inline-block"><img class="img-fluid rounded-circle"
                          src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="profile-letter bg-success"><span class="f-w-600 txt-white f-12">R</span></div>
                      </li>
                      <li class="d-inline-block"><img class="img-fluid rounded-circle"
                          src="{{ asset('assets/images/dashboard/user/6.jpg') }}" alt="user"></li>
                      <li class="d-inline-block">
                        <div class="light-card profile-letter"><span class="f-w-600 f-light f-12">+80</span></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-xl-100 order-xl-ii col-md-8">
          <div class="card height-equal title-line">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>Recent Orders</h2>
                <div class="card-header-right-icon recent-order-header">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="orderButtons" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">Generate Report</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="orderButtons"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body project-datatable p-0 order-tables custom-scrollbar">
              <table class="table" id="order-status">
                <thead>
                  <tr>
                    <th> <span class="f-light f-w-600">Order ID</span></th>
                    <th> <span class="f-light f-w-600">Customer</span></th>
                    <th> <span class="f-light f-w-600">Product</span></th>
                    <th> <span class="f-light f-w-600">Amount</span></th>
                    <th> <span class="f-light f-w-600">Vendor</span></th>
                    <th> <span class="f-light f-w-600">Status</span></th>
                    <th> <span class="f-light f-w-600">Rating</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <a class="f-w-500" href="#!">#0918765</a></td>
                    <td>
                      <div class="recent-profile"><img class="img-30 rounded-circle img-fluid"
                          src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user"><a
                          href="{{ route('admin.user-profile') }}"> <span class="f-light f-w-500">Alex Smith</span></a>
                      </div>
                    </td>
                    <td> <span class="f-light">Jacket</span></td>
                    <td> <span class="txt-success f-w-500">$109.00 </span></td>
                    <td> <span class="f-light">Shmetic Fashion</span></td>
                    <td><span class="badge badge-light-primary">In Progress </span></td>
                    <td><span class="f-light f-w-600">4.9 <span class="f-12 f-w-400">(34 votes)</span></span></td>
                  </tr>
                  <tr>
                    <td> <a class="f-w-500" href="#!">#109346</a></td>
                    <td>
                      <div class="recent-profile"><img class="img-30 rounded-circle img-fluid"
                          src="{{ asset('assets/images/dashboard-3/user/4.png') }}" alt="user"><a
                          href="{{ route('admin.user-profile') }}"><span class="f-light f-w-500">Jansh Brown</span></a>
                      </div>
                    </td>
                    <td> <span class="f-light">Clothes</span></td>
                    <td> <span class="txt-success f-w-500">$178.00 </span></td>
                    <td> <span class="f-light">iTech Factory</span></td>
                    <td><span class="badge badge-light-warning">Pending</span></td>
                    <td><span class="f-light f-w-600">5.0 <span class="f-12 f-w-400">(90 votes)</span></span></td>
                  </tr>
                  <tr>
                    <td> <a class="f-w-500" href="#!">#209813</a></td>
                    <td>
                      <div class="recent-profile"><img class="img-30 rounded-circle img-fluid"
                          src="{{ asset('assets/images/dashboard-3/user/7.png') }}" alt="user"><a
                          href="{{ route('admin.user-profile') }}"><span class="f-light f-w-500">Prezy Mark</span></a>
                      </div>
                    </td>
                    <td> <span class="f-light">Wallets & Bag</span></td>
                    <td> <span class="txt-success f-w-500">$210.00 </span></td>
                    <td> <span class="f-light">Micro Design</span></td>
                    <td><span class="badge badge-light-success">Paid</span></td>
                    <td><span class="f-light f-w-600">4.5 <span class="f-12 f-w-400">(43 votes)</span></span></td>
                  </tr>
                  <tr>
                    <td> <a class="f-w-500" href="#!">#306754</a></td>
                    <td>
                      <div class="recent-profile"><img class="img-30 rounded-circle img-fluid"
                          src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user"><a
                          href="{{ route('admin.user-profile') }}"><span class="f-light f-w-500">Vihan Hudda</span></a>
                      </div>
                    </td>
                    <td> <span class="f-light">Furniture</span></td>
                    <td> <span class="txt-success f-w-500">$330.00</span></td>
                    <td> <span class="f-light">Nesta Technology</span></td>
                    <td><span class="badge badge-light-warning">Pending</span></td>
                    <td><span class="f-light f-w-600">4.6<span class="f-12 f-w-400">(30 votes)</span></span></td>
                  </tr>
                  <tr>
                    <td> <a class="f-w-500" href="#!">#107654</a></td>
                    <td>
                      <div class="recent-profile"><img class="img-30 rounded-circle img-fluid"
                          src="{{ asset('assets/images/avtar/7.jpg') }}" alt="user"><a
                          href="{{ route('admin.user-profile') }}"><span class="f-light f-w-500">Biraj Shah</span></a>
                      </div>
                    </td>
                    <td> <span class="f-light">Kitchen Stole</span></td>
                    <td> <span class="txt-success f-w-500">$187.00</span></td>
                    <td> <span class="f-light">Syntcy solutions</span></td>
                    <td><span class="badge badge-light-primary">In Progress</span></td>
                    <td><span class="f-light f-w-600">4.3<span class="f-12 f-w-400">(87 votes)</span></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-xl-100 order-xl-iii col-md-6 col-sm-12">
          <div class="card height-equal title-line overflow-hidden">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>Stock Report<span class="f-12 f-w-500 f-light d-block">Total 4,998 Items in stock</span></h2>
                <div class="card-header-right-icon stock-report">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="CategoryButtons" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">Category</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="CategoryButtons"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="stockButtons" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">View Stock</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="stockButtons"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body project-datatable p-0 stock-table custom-scrollbar">
              <table class="table" id="stock-status">
                <thead>
                  <tr>
                    <th> <span class="f-light f-w-600">Item</span></th>
                    <th> <span class="f-light f-w-600">Id</span></th>
                    <th> <span class="f-light f-w-600">Amount</span></th>
                    <th> <span class="f-light f-w-600">Date </span></th>
                    <th> <span class="f-light f-w-600">Status</span></th>
                    <th> <span class="f-light f-w-600">QLT</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <span class="f-light f-w-500">Laptop</span></td>
                    <td><a class="f-w-500" href="#!">#109346 </a></td>
                    <td> <span class="txt-success f-w-500">$121.00</span></td>
                    <td> <span class="f-light f-w-500">Feb 21, 2024 </span></td>
                    <td><span class="badge badge-light-primary f-w-500">In Stock</span></td>
                    <td> <span class="f-light f-w-500">1 PCS</span></td>
                  </tr>
                  <tr>
                    <td> <span class="f-light f-w-500">Apple iPod</span></td>
                    <td><a class="f-w-500" href="#!">#905071</a></td>
                    <td> <span class="txt-success f-w-500">$230.00</span></td>
                    <td> <span class="f-light f-w-500">Feb 19, 2024 </span></td>
                    <td><span class="badge badge-light-success f-w-500">Low Stock</span></td>
                    <td> <span class="f-light f-w-500">90 PCS</span></td>
                  </tr>
                  <tr>
                    <td> <span class="f-light f-w-500">MacBook</span></td>
                    <td><a class="f-w-500" href="#!">#899306</a></td>
                    <td> <span class="txt-success f-w-500">$409.00</span></td>
                    <td> <span class="f-light f-w-500">Mar 13, 2024</span></td>
                    <td><span class="badge badge-light-warning f-w-500">Out of Stock</span></td>
                    <td> <span class="f-light f-w-500">123 PCS</span></td>
                  </tr>
                  <tr>
                    <td> <span class="f-light f-w-500">Speakers</span></td>
                    <td><a class="f-w-500" href="#!">#509346</a></td>
                    <td> <span class="txt-success f-w-500">$908.00</span></td>
                    <td> <span class="f-light f-w-500">Jan 11, 2024</span></td>
                    <td><span class="badge badge-light-primary f-w-500">In Stock</span></td>
                    <td> <span class="f-light f-w-500">230 PCS</span></td>
                  </tr>
                  <tr>
                    <td> <span class="f-light f-w-500">Dispatched </span></td>
                    <td><a class="f-w-500" href="#!">#109346 </a></td>
                    <td> <span class="txt-success f-w-500">$309.00</span></td>
                    <td> <span class="f-light f-w-500">Aug 18, 2024 </span></td>
                    <td><span class="badge badge-light-success f-w-500">Low Stock</span></td>
                    <td> <span class="f-light f-w-500">309 PCS</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-5 order-xl-vi col-xl-100 col-md-6 col-12">
          <div class="row">
            <div class="col-12 col-xl-50">
              <div class="card visitor-customer title-line">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h2>Weekly Visitors</h2>
                    <div class="card-header-right-icon square-legend">
                      <div>
                        <div class="legend-box">
                          <div class="bg-primary"></div><span class="f-light f-12 f-w-500">Male</span>
                        </div>
                        <div class="legend-box">
                          <div class="bg-success"></div><span class="f-light f-12 f-w-500">Female</span>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle" id="overviewButton1" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">Report</button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton1"><a
                            class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">weekly</a><a
                            class="dropdown-item" href="#">yearly</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-7 col-xl-100 col-md-7 col-sm-8">
                      <div class="weekly-visitor" id="weekly-visitor"></div>
                    </div>
                    <div class="col-xl-5 d-xl-none1 col-md-5 col-sm-4">
                      <div class="average-Visitors">
                        <div> <span class="f-12 f-light f-w-500">Average Male Visitors</span>
                          <div class="order-content">
                            <h3 class="f-w-600">3,908</h3>
                            <div> <span class="txt-success f-12 f-w-600"><i class="stroke-success"
                                  data-feather="trending-up"></i>-27%</span></div>
                          </div>
                        </div>
                        <div> <span class="f-12 f-light f-w-500">Average Female Visitors</span>
                          <div class="order-content">
                            <h3 class="f-w-600">1,204</h3>
                            <div> <span class="txt-danger f-12 f-w-600"><i class="stroke-danger"
                                  data-feather="trending-down"></i>-0.10%</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-50">
              <div class="card height-equal title-line">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h2>Customer Rate</h2>
                    <div class="card-header-right-icon customer-header"><a class="link-stroke-icon" href="#!">Live view
                        <svg>
                          <use href="{{ asset('assets/svg/icon-sprite.svg#eye-contact') }}"></use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="customer-rate">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="76.8"
                          aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar"></div>
                        </div><span class="f-light f-12 f-w-500">First time buying</span>
                        <h3 class="f-w-600">76.8%</h3>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="customer-rate">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="76.8"
                          aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress_1"></div>
                        </div><span class="f-light f-12 f-w-500">Returning</span>
                        <h3 class="f-w-600">25.4%</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xl-40">
      <div class="row">
        <div class="col-xl-12 col-sm-6">
          <div class="card title-line deal-card">
            <div class="card-body left-line deal-animation">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="row g-4">
                    <div class="col-xl-8 col-md-12">
                      <h2>Deal of the day</h2><span class="f-light f-12 f-w-500">Special Discount <span
                          class="txt-primary f-12 f-w-500 discount-offer">60% OFF</span></span>
                      <ul class="timer deal-timer" data-date="Dec 7, 2024 04:15:01">
                        <li>
                          <h6 class="f-20 f-w-600 txt-primary hours"></h6><span
                            class="f-12 f-w-500 f-light">Hours</span>
                        </li>
                        <li>
                          <h6 class="f-20 f-w-600 txt-primary minutes"></h6><span
                            class="f-12 f-w-500 f-light">Min</span>
                        </li>
                        <li>
                          <h6 class="f-20 f-w-600 txt-primary seconds"></h6><span
                            class="f-12 f-w-500 f-light">Sec</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xl-4 col-md-12">
                      <div class="deal-slider">
                        <div class="swiper deal-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide"> <img class="img-fluid"
                                src="{{ asset('assets/images/product/product-categories/phone.png') }}" alt="phone">
                            </div>
                            <div class="swiper-slide"> <img class="img-fluid"
                                src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}" alt="headphone">
                            </div>
                            <div class="swiper-slide"> <img class="img-fluid"
                                src="{{ asset('assets/images/dashboard-2/product/chair.png') }}" alt="chair"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-sm-6">
          <div class="card height-equal title-line earning-chart-option">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>$78,098<span class="txt-success f-12 f-w-600 ms-2"><i class="stroke-success"
                      data-feather="trending-up"></i>-29%</span><span class="f-12 f-w-500 f-light d-block">Expected
                    Earnings</span></h2>
                <div class="card-header-right-icon">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="ReportButtons" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">Report</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="ReportButtons"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="polar-area"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-6">
          <div class="card height-equal title-line">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>Activities<span class="f-12 f-w-500 f-light d-block">780,765 Sales</span></h2>
                <div class="card-header-right-icon detail-option">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="OrderDetailsButtons" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">Order Details</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="OrderDetailsButtons"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body pt-0 notification to-do-list activities-wrapper">
              <ul class="activity-details custom-scrollbar">
                <li class="d-flex align-items-center">
                  <div class="activity-dot-primary"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div> <span class="f-w-500 f-12 f-light">Optimize resource allocation for cost savings.</span></div>
                    <span class="badge ms-auto f-light">00:32 </span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-warning"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div>
                      <h6>Products Meetings</h6>
                    </div><span class="badge ms-auto f-light">12:34</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-success"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div>
                      <h6>New Order placed <a href="#!">#xl-9087</a></h6>
                    </div><span class="badge ms-auto f-light">13:59</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-secondary"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div> <span class="f-w-500 f-12 f-light">Enhance productivity with advanced features</span></div>
                    <span class="badge ms-auto f-light">17:34</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-primary"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div>
                      <h6>New Order placed <a href="#!">#xl-9090</a></h6>
                    </div><span class="badge ms-auto f-light">19:40</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-secondary"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div>
                      <h6>All Order delivered <a href="#!">#xl-7801</a></h6>
                    </div><span class="badge ms-auto f-light">22:05</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-success"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div> <span class="f-w-500 f-12 f-light">Increase sales and revenue with targeted marketing.</span>
                    </div><span class="badge ms-auto f-light">02:24</span>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="activity-dot-primary"></div>
                  <div class="d-flex w-100 align-items-center">
                    <div>
                      <h6>New Order placed <a href="#!">#xl-9088</a></h6>
                    </div><span class="badge ms-auto f-light">15:35</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-6">
          <div class="card height-equal title-line delivery-card">
            <div class="card-header card-no-border">
              <div class="header-top">
                <h2>Product Delivery<span class="f-12 f-w-500 f-light d-block">Total 10,987 Items Delivery</span></h2>
                <div class="card-header-right-icon">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" id="OrderDetailsButtons1" type="button"
                      data-bs-toggle="dropdown" aria-expanded="false">Order Details</button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="OrderDetailsButtons1"><a
                        class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body delivery-content pt-0">
              <ul class="order-list mb-0 custom-scrollbar">
                <li>
                  <div class="light-card"> <img class="img-fluid"
                      src="{{ asset('assets/images/dashboard/product/2.png') }}" alt="T-shirt"></div>
                  <div class="order-content">
                    <div> <a href="{{ route('admin.product-page') }}">
                        <h6 class="mb-1">Branded T-Shirts</h6>
                      </a><span> <span class="f-light f-w-500 f-12">To : Jaksion Raio</span></span></div>
                    <div class="text-end">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle mb-1" id="order-2" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-2"><a class="dropdown-item"
                            href="{{ route('admin.cart') }}">Add to cart</a><a class="dropdown-item" href="#">Cancel</a>
                        </div>
                      </div><span class="badge badge-light-primary f-12">Delivered</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="light-card"> <img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/product/helmet.png') }}" alt="Helmet"></div>
                  <div class="order-content">
                    <div> <a href="{{ route('admin.product-page') }}">
                        <h6 class="mb-1">Stillbirth Helmet</h6>
                      </a><span> <span class="f-light f-w-500 f-12">To : Jaksion Jawade</span></span></div>
                    <div class="text-end">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle mb-1" id="order-3" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-3"><a class="dropdown-item"
                            href="{{ route('admin.cart') }}">Add to cart</a><a class="dropdown-item" href="#">Cancel</a>
                        </div>
                      </div><span class="badge badge-light-success f-12">Shipping</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="light-card"> <img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/product/chair.png') }}" alt="wood chair"></div>
                  <div class="order-content">
                    <div> <a href="{{ route('admin.product-page') }}">
                        <h6 class="mb-1">Bentwood Chair</h6>
                      </a><span> <span class="f-light f-w-500 f-12">To : Trushita Rai</span></span></div>
                    <div class="text-end">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle mb-1" id="order-4" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-4"><a class="dropdown-item"
                            href="{{ route('admin.cart') }}">Add to cart</a><a class="dropdown-item" href="#">Cancel</a>
                        </div>
                      </div><span class="badge badge-light-primary f-12">Delivered</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="light-card"> <img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}" alt="Headphone"></div>
                  <div class="order-content">
                    <div> <a href="{{ route('admin.product-page') }}">
                        <h6 class="mb-1">Wireless Headphone</h6>
                      </a><span> <span class="f-light f-w-500 f-12">To : Jushkita Shrama</span></span></div>
                    <div class="text-end">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle mb-1" id="order-5" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-5"><a class="dropdown-item"
                            href="{{ route('admin.cart') }}">Add to cart</a><a class="dropdown-item" href="#">Cancel</a>
                        </div>
                      </div><span class="badge badge-light-warning f-12">Confirmed</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="light-card"> <img class="img-fluid"
                      src="{{ asset('assets/images/dashboard-2/product/tube.png') }}" alt="Makeup tube"></div>
                  <div class="order-content">
                    <div> <a href="{{ route('admin.product-page') }}">
                        <h6 class="mb-1">Makeup Tube</h6>
                      </a><span> <span class="f-light f-w-500 f-12">To : Sheezan Mahmed</span></span></div>
                    <div class="text-end">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle mb-1" id="order-6" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-6"><a class="dropdown-item"
                            href="{{ route('admin.cart') }}">Add to cart</a><a class="dropdown-item" href="#">Cancel</a>
                        </div>
                      </div><span class="badge badge-light-primary f-12">Delivered</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
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
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
<script src="{{ asset('assets/js/datatable/simple-datatable.js') }}"></script>
<script src="{{ asset('assets/js/timer.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dashboard_2.js') }}"></script>
@endsection