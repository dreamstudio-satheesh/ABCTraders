@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>General</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">Widgets</li>
                <li class="breadcrumb-item f-w-500 active">General</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid main-widget">
    <div class="row">
        <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="card project-widget widget-1 title-line">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div>
                            <h3 class="f-w-600">Active Projects</h3><span class="f-12 f-light f-w-500">Projects this
                                month</span>
                        </div>
                        <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown d-xxl-none1">
                                <button class="btn dropdown-toggle" id="active-project" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="active-project"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a>
                                </div>
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
        <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="card project-widget widget-1 title-line project-widget-1">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div>
                            <h3 class="f-w-600">Projects Earnings</h3><span class="f-12 f-light f-w-500">From last
                                Week</span>
                        </div>
                        <div class="card-header-right-icon d-xxl-none">
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="earning-project" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-project"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a>
                                </div>
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
                        <div id="earnings-chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="card project-widget overflow-hidden widget-1 title-line">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div>
                            <h3 class="f-w-600">Total Clients</h3><span class="f-12 f-light f-w-500">Compare to last
                                month</span>
                        </div>
                        <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="client-project" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="client-project"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
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
                        <div id="total-client1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-5 col-sm-4 order-md-v">
            <div class="card title-line widget-1 sales-pipeline pipeline-chart1">
                <div class="card-header card-no-border">
                    <h2>Sales Pipeline</h2><span class="f-w-500 f-12 f-light mt-0">Special Discount <span
                            class="txt-primary">60% OFF</span></span>
                </div>
                <div class="card-body pt-0">
                    <div class="pipeline-chart-container">
                        <div id="pipeline-chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-6 col-md-3 order-md-i">
            <div class="card title-line widget-1 revenue-wrapper">
                <div class="card-header card-no-border">
                    <h2>Revenue</h2><span class="f-w-500 f-12 f-light mt-0">Today Revenue <span class="txt-primary">30%
                            OFF</span></span>
                </div>
                <div class="card-body pt-0">
                    <div class="revenue-chart-container">
                        <div id="revenue-chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 box-col-6 col-md-9 order-md-ii">
            <div class="row tread-cards">
                <div class="col-xl-6 col-sm-6">
                    <div class="card widget-1">
                        <div class="card-body common-box">
                            <div class="widget-icon primary widget-round">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#crown') }}"> </use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-w-600">User Profile</h3><span class="f-w-500 f-light f-12">Consectetur
                                    adipiscing </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="card widget-1">
                        <div class="card-body common-box">
                            <div class="widget-icon success widget-round">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#flash') }}"> </use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-w-600">Latest Trends</h3><span class="f-w-500 f-light f-12">Minim
                                    veniam</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="card widget-1">
                        <div class="card-body common-box">
                            <div class="widget-icon warning widget-round">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#blend-2') }}"> </use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-w-600">New Arrivals</h3><span class="f-w-500 f-light f-12">Excepteur
                                    sint</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="card widget-1">
                        <div class="card-body common-box">
                            <div class="widget-icon secondary widget-round">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#color-filter') }}"> </use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-w-600">Best Referrals</h3><span class="f-w-500 f-light f-12">Quis nostrud
                                    exercitation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 order-xl-vi col-xl-100 col-md-7 col-sm-8 order-md-vi">
            <div class="row">
                <div class="col-12">
                    <div class="card visitor-customer title-line widget-visitor">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h2>Weekly Visitors</h2>
                                <div class="card-header-right-icon square-legend">
                                    <div>
                                        <div class="legend-box">
                                            <div class="bg-primary"></div><span class="f-light f-12 f-w-500">Male</span>
                                        </div>
                                        <div class="legend-box">
                                            <div class="bg-success"></div><span
                                                class="f-light f-12 f-w-500">Female</span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="overviewButton2" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Report</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton2">
                                            <a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                                href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body visitor-wrapper">
                            <div class="row">
                                <div class="col-xl-7 col-sm-7">
                                    <div class="weekly-visitor" id="weekly-visitor1"></div>
                                </div>
                                <div class="col-xl-5 d-xl-none1 col-sm-5">
                                    <div class="average-Visitors">
                                        <div> <span class="f-12 f-light f-w-500">Average Male Visitors</span>
                                            <div class="order-content">
                                                <div> <span class="txt-success f-12 f-w-600"><i class="stroke-success"
                                                            data-feather="trending-up"></i>-27%</span></div>
                                            </div>
                                        </div>
                                        <div> <span class="f-12 f-light f-w-500">Average Female Visitors</span>
                                            <div class="order-content">
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
            </div>
        </div>
        <div class="col-md-6 order-md-iii">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <div>
                            <h2>Earning Reports<span class="d-block f-w-500 f-light f-12">Weekly Earning
                                    Overview</span></h2>
                        </div>
                        <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="earning-avg" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-avg"><a
                                        class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                        href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="report-chart-container">
                        <div id="earning-chart1"></div>
                    </div>
                    <ul class="report-list">
                        <li>
                            <div class="light-card report-icon">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#status-up') }}"></use>
                                </svg>
                            </div>
                            <div> <span class="f-12 f-w-500 f-light">Profit</span>
                                <h4 class="mt-1 f-w-600">$98.50<span class="badge badge-light-primary ms-1"><i
                                            class="me-1" data-feather="trending-up"></i>13.5%</span></h4>
                            </div>
                        </li>
                        <li>
                            <div class="light-card report-icon">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#expense') }}"></use>
                                </svg>
                            </div>
                            <div> <span class="f-12 f-w-500 f-light">Expense</span>
                                <h4 class="mt-1 f-w-600">$109.90<span class="badge badge-light-warning ms-1"><i
                                            class="me-1" data-feather="trending-down"></i>1.05%</span></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-6 box-col-6 order-md-vii">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h2>Projects Overview</h2>
                        <div class="card-header-right-icon right-xl-dropdown">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" id="overviewButton3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Monthly</button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton3"><a
                                        class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                        href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="project-overview-wrapper">
                        <div id="project-overview1"></div>
                        <div class="project-back-bar">
                            <div id="project-bar1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 order-md-viii">
            <div class="card title-line widget-acitivity">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h2>Activities<span class="f-12 f-w-500 f-light d-block">780,765 Sales</span></h2>
                        <div class="card-header-right-icon detail-option">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" id="OrderDetailsButtons" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Order Details</button>
                                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="OrderDetailsButtons">
                                    <a class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 notification to-do-list activities-wrapper">
                    <ul class="activity-details custom-scrollbar">
                        <li class="d-flex align-items-center">
                            <div class="activity-dot-primary"></div>
                            <div class="d-flex w-100 align-items-center">
                                <div> <span class="f-w-500 f-12 f-light">Optimize resource allocation for cost
                                        savings.</span></div><span class="badge ms-auto f-light">00:32 </span>
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
                                <div> <span class="f-w-500 f-12 f-light">Enhance productivity with advanced
                                        features</span></div><span class="badge ms-auto f-light">17:34</span>
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
                                <div> <span class="f-w-500 f-12 f-light">Increase sales and revenue with targeted
                                        marketing.</span></div><span class="badge ms-auto f-light">02:24</span>
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
        <div class="col-xl-4 col-md-6 order-md-ix">
            <div class="card title-line delivery-card-1">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h2>Product Delivery<span class="f-12 f-w-500 f-light d-block">Total 10,987 Items
                                Delivery</span></h2>
                        <div class="card-header-right-icon">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" id="OrderDetailsButtons1" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Order Details</button>
                                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="OrderDetailsButtons1">
                                    <a class="dropdown-item" href="#">Web designer</a><a class="dropdown-item"
                                        href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
                                </div>
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
                                <div>
                                    <h6 class="mb-1">Branded T-Shirts</h6><span> <span class="f-light f-w-500 f-12">To :
                                            Jaksion Raio</span></span>
                                </div>
                                <div class="text-end">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle mb-1" id="order-2" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-2"><a
                                                class="dropdown-item" href="{{ route('admin.cart') }}">Add to cart</a><a
                                                class="dropdown-item" href="#">Cancel</a></div>
                                    </div><span class="badge badge-light-primary f-12">Delivered</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="light-card"> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/product/helmet.png') }}" alt="Helmet">
                            </div>
                            <div class="order-content">
                                <div>
                                    <h6 class="mb-1">Stillbirth Helmet</h6><span> <span class="f-light f-w-500 f-12">To
                                            : Jaksion Jawade</span></span>
                                </div>
                                <div class="text-end">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle mb-1" id="order-03" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-03"><a
                                                class="dropdown-item" href="{{ route('admin.cart') }}">Add to cart</a><a
                                                class="dropdown-item" href="#">Cancel</a></div>
                                    </div><span class="badge badge-light-success f-12">Shipping</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="light-card"> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/product/chair.png') }}" alt="wood chair">
                            </div>
                            <div class="order-content">
                                <div>
                                    <h6 class="mb-1">Bentwood Chair</h6><span> <span class="f-light f-w-500 f-12">To
                                            : Trushita Rai</span></span>
                                </div>
                                <div class="text-end">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle mb-1" id="order-04" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-04"><a
                                                class="dropdown-item" href="{{ route('admin.cart') }}">Add to cart</a><a
                                                class="dropdown-item" href="#">Cancel</a></div>
                                    </div><span class="badge badge-light-primary f-12">Delivered</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="light-card"> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}"
                                    alt="Headphone"></div>
                            <div class="order-content">
                                <div>
                                    <h6 class="mb-1">Wireless Headphone</h6><span> <span class="f-light f-w-500 f-12">To
                                            : Jushkita Shrama</span></span>
                                </div>
                                <div class="text-end">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle mb-1" id="order-05" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-05"><a
                                                class="dropdown-item" href="{{ route('admin.cart') }}">Add to cart</a><a
                                                class="dropdown-item" href="#">Cancel</a></div>
                                    </div><span class="badge badge-light-warning f-12">Confirmed</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="light-card"> <img class="img-fluid"
                                    src="{{ asset('assets/images/dashboard-2/product/tube.png') }}" alt="Makeup tube">
                            </div>
                            <div class="order-content">
                                <div>
                                    <h6 class="mb-1">Makeup Tube </h6><span> <span class="f-light f-w-500 f-12">To :
                                            Sheezan Mahmed</span></span>
                                </div>
                                <div class="text-end">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle mb-1" id="order-06" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-06"><a
                                                class="dropdown-item" href="{{ route('admin.cart') }}">Add to cart</a><a
                                                class="dropdown-item" href="#">Cancel</a></div>
                                    </div><span class="badge badge-light-primary f-12">Delivered</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 order-md-iv">
            <div class="card title-line">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h2>Total Profit<span class="f-light f-12 d-block f-w-500">Special Discount <span
                                    class="txt-primary">60% OFF</span></span></h2>
                        <div class="card-header-right-icon">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" id="overviewButton4" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Weekly</button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton4"><a
                                        class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                        href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="profit-data">
                        <h2>$15,087<span class="f-light f-w-500 f-12">(Another <span class="txt-primary me-1">$35,098
                                </span>to Goal) </span></h2>
                    </div>
                    <div class="profit-chart-container">
                        <div id="profit_chart1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
<script src="{{ asset('assets/js/general-widget.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection