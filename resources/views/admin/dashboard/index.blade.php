@extends('layouts.partials.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-css/style.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Default</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li class="breadcrumb-item f-w-500">Dashboard</li>
                <li class="breadcrumb-item f-w-500 active">Default</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid default-dashboard">
    <div class="row size-column">
        <div class="col-xl-9 col-xl-100 box-col-12">
            <div class="row">
                <div class="col-xl-6 box-col-6">
                    <div class="card title-line upgrade-card overflow-hidden">
                        <div class="row align-items-end">
                            <div class="col-sm-8 col-11">
                                <div class="card-header">
                                    <h2>Hi, Welcome back <span class="txt-primary"> Wade! </span></h2>
                                    <p class="mt-2 f-light">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                                        do amet sint. </p><a class="btn btn-primary btn-hover-effect btn-sm f-w-500"
                                        href="{{ route('admin.pricing') }}">Upgrade Plan
                                        <svg class="svg-sprite">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#logout') }}"> </use>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="cartoon-image"> <img class="img-fluid"
                                src="{{ asset('assets/images/dashboard/welcome.png') }}" alt="vector"></div><img
                            class="img-fluid pattern-image" src="{{ asset('assets/images/dashboard/bg-1.png') }}"
                            alt="vector pattern">
                    </div>
                </div>
                <div class="col-xl-6 box-col-6">
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
                                        <h3 class="f-w-600">User Profile</h3><span
                                            class="f-w-500 f-light f-12">Consectetur adipiscing </span>
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
                                        <h3 class="f-w-600">New Arrivals</h3><span
                                            class="f-w-500 f-light f-12">Excepteur sint</span>
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
                                        <h3 class="f-w-600">Best Referrals</h3><span class="f-w-500 f-light f-12">Quis
                                            nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row small-charts">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card title-line widget-1">
                                <div class="card-header card-no-border">
                                    <h2>Revenue</h2><span class="f-w-500 f-12 f-light mt-0">Today Revenue <span
                                            class="txt-primary">30% OFF</span></span>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="revenue-chart-container">
                                        <div id="revenue-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card title-line widget-1 sales-pipeline">
                                <div class="card-header card-no-border">
                                    <h2>Sales Pipeline</h2><span class="f-w-500 f-12 f-light mt-0">Special Discount
                                        <span class="txt-primary">60% OFF</span></span>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="pipeline-chart-container">
                                        <div id="pipeline-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 rate-column">
                            <div class="card title-line widget-1">
                                <div class="card-header card-no-border">
                                    <h2>Satisfaction Rate</h2>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="light-card satisfaction-box common-box">
                                        <div class="widget-icon primary widget-round">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#like-shape') }}"></use>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2>89,786(82%)</h2><span class="f-light f-w-500 f-12">Vote by
                                                Consumer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 revenue-column col-xxl-100 box-col-12">
                            <div class="card title-line widget-1">
                                <div class="card-header card-no-border">
                                    <h2>Revenue by Industry</h2>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="revenue-slider-wrapper">
                                        <div class="swiper revenue-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="light-card satisfaction-box progrees-widget">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="social-content"><i
                                                                    class="txt-primary fa fa-facebook-square me-1"></i><span
                                                                    class="f-w-500 f-light">Facebook</span></span><span
                                                                class="f-12 f-w-500 f-light">45%</span>
                                                        </div>
                                                        <div class="progress progress-stripe-primary with-light-background mt-2"
                                                            style="height: 5px">
                                                            <div class="progress-bar-animated progress-bar-striped"
                                                                role="progressbar" style="width: 45%" aria-valuenow="10"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="light-card satisfaction-box progrees-widget">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="social-content"><i
                                                                    class="txt-secondary fa fa-instagram me-1"></i><span
                                                                    class="f-w-500 f-light">Instagram</span></span><span
                                                                class="f-12 f-w-500 f-light">70%</span>
                                                        </div>
                                                        <div class="progress progress-stripe-secondary with-light-background mt-2"
                                                            style="height: 5px">
                                                            <div class="progress-bar-animated progress-bar-striped"
                                                                role="progressbar" style="width: 70%" aria-valuenow="10"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="light-card satisfaction-box progrees-widget">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="social-content"><i
                                                                    class="txt-success fa fa-twitter me-1"></i><span
                                                                    class="f-w-500 f-light">Twitter </span></span><span
                                                                class="f-12 f-w-500 f-light">30%</span>
                                                        </div>
                                                        <div class="progress progress-stripe-success with-light-background mt-2"
                                                            style="height: 5px">
                                                            <div class="progress-bar-animated progress-bar-striped"
                                                                role="progressbar" style="width: 30%" aria-valuenow="10"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
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
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card height-equal title-line">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h2>Total Profit<span class="f-light f-12 d-block f-w-500">Special Discount <span
                                            class="txt-primary">60% OFF</span></span></h2>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="overviewButton" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Weekly</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton">
                                            <a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                                href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="profit-data">
                                <h2>$15,087<span class="f-light f-w-500 f-12">(Another <span
                                            class="txt-primary me-1">$35,098 </span>to Goal) </span></h2>
                            </div>
                            <div class="profit-chart-container">
                                <div id="profit_chart"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-avg"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="report-chart-container">
                                <div id="earning-chart"> </div>
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
                <div class="col-md-6 order-md-i">
                    <div class="card title-line">
                        <div class="card-header card-no-border transaction-header">
                            <div class="header-top">
                                <h2>Upcoming Transaction<span class="f-light f-12 d-block f-w-500">Special Discount
                                        <span class="txt-primary">60% OFF</span></span></h2>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="overviewButton1" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Weekly</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="overviewButton1">
                                            <a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                                href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 transaction-list">
                            <ul>
                                <li class="transaction-title"> <span class="f-w-500 f-light f-12">Today</span></li>
                                <li>
                                    <div class="transaction-content">
                                        <div class="transaction-icon bg-light-primary">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#bill') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="transaction-right-content">
                                            <div> <a href="{{ route('admin.list-wish') }}">
                                                    <h6>Water Bill</h6>
                                                </a><span class="f-light f-w-400">Unsuccessfully</span></div><span
                                                class="txt-danger f-w-500">-$120</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="transaction-title"> <span class="f-w-500 f-light f-12">Tomorrow</span></li>
                                <li>
                                    <div class="transaction-content">
                                        <div class="transaction-icon bg-light-success">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#payment') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="transaction-right-content">
                                            <div> <a href="{{ route('admin.list-wish') }}">
                                                    <h6>Income : Salary Oct</h6>
                                                </a><span class="f-light f-w-400">Successfully</span></div><span
                                                class="f-w-500">+$1200</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="transaction-content">
                                        <div class="transaction-icon bg-light-warning">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#invoice') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="transaction-right-content">
                                            <div> <a href="{{ route('admin.list-wish') }}">
                                                    <h6>Electric Bill</h6>
                                                </a><span class="f-light f-w-400">Successfully</span></div><span
                                                class="f-w-500 txt-danger">-$191</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="transaction-content">
                                        <div class="transaction-icon bg-light-secondary">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#transfer') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="transaction-right-content pb-0">
                                            <div> <a href="{{ route('admin.list-wish') }}">
                                                    <h6>Income : Jane transfers</h6>
                                                </a><span class="f-light f-w-400">Successfully</span></div><span
                                                class="f-w-500">+$540</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-md-iii">
                    <div class="card title-line overflow-hidden member-wrapper">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h2>Members Statistics<span class="f-12 f-w-500 f-light d-block">Over 10k
                                        members</span></h2>
                                <div class="card-header-right-icon"><a class="link-with-icon" href="#!">+ Add
                                        New Member</a></div>
                            </div>
                        </div>
                        <div class="ard-body member-datatable p-0">
                            <table class="table" id="member-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th> <span class="f-light f-w-600">Authors</span></th>
                                        <th> <span class="f-light f-w-600">Company</span></th>
                                        <th> <span class="f-light f-w-600">Progress</span></th>
                                        <th> <span class="f-light f-w-600">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkbox-2" type="checkbox"
                                                        value="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2"> <img
                                                    src="{{ asset('assets/images/dashboard/user/2.jpg') }}" alt="user">
                                                <div><a href="{{ route('admin.user-profile') }}">
                                                        <h6 class="f-w-500">Jerome Bell</h6>
                                                    </a><span class="f-light f-12 f-w-500">UX designer</span></div>
                                            </div>
                                        </td>
                                        <td> <a href="{{ route('admin.user-profile') }}">
                                                <h6 class="f-w-500">Louis</h6>
                                            </a><span class="f-light f-12 f-w-500">UX designer</span></td>
                                        <td> <span class="f-w-500 f-12 f-light">70%</span>
                                            <div class="progress progress-stripe-primary mt-2" style="height: 5px">
                                                <div class="progress-bar-animated progress-bar-striped"
                                                    role="progressbar" style="width: 70%" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex action-buttons"><a class="light-card" href="#!">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#edit-2') }}">
                                                        </use>
                                                    </svg></a><a class="light-card" href="#!">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash-fill') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkbox-3" type="checkbox"
                                                        value="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2"> <img
                                                    src="{{ asset('assets/images/dashboard/user/4.jpg') }}" alt="user">
                                                <div> <a href="{{ route('admin.user-profile') }}">
                                                        <h6 class="f-w-500">Ralph Edwa</h6>
                                                    </a><span class="f-light f-12 f-w-500">Web, Laravel</span></div>
                                            </div>
                                        </td>
                                        <td> <a href="{{ route('admin.user-profile') }}">
                                                <h6 class="f-w-500">IBM</h6>
                                            </a><span class="f-light f-12 f-w-500">Development</span></td>
                                        <td> <span class="f-w-500 f-12 f-light">50%</span>
                                            <div class="progress progress-stripe-success mt-2" style="height: 5px">
                                                <div class="progress-bar-animated progress-bar-striped"
                                                    role="progressbar" style="width: 50%" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex action-buttons"><a class="light-card" href="#!">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#edit-2') }}">
                                                        </use>
                                                    </svg></a><a class="light-card" href="#!">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash-fill') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkbox-4" type="checkbox"
                                                        value="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2"> <img
                                                    src="{{ asset('assets/images/dashboard/user/5.jpg') }}" alt="user">
                                                <div> <a href="{{ route('admin.user-profile') }}">
                                                        <h6 class="f-w-500">Esther Kit</h6>
                                                    </a><span class="f-light f-12 f-w-500">Laravel</span></div>
                                            </div>
                                        </td>
                                        <td> <a href="{{ route('admin.user-profile') }}">
                                                <h6 class="f-w-500">Johnson</h6>
                                            </a><span class="f-light f-12 f-w-500">Unity Game</span></td>
                                        <td> <span class="f-w-500 f-12 f-light">83%</span>
                                            <div class="progress progress-stripe-secondary mt-2" style="height: 5px">
                                                <div class="progress-bar-animated progress-bar-striped"
                                                    role="progressbar" style="width: 83%" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex action-buttons"><a class="light-card" href="#!">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#edit-2') }}">
                                                        </use>
                                                    </svg></a><a class="light-card" href="#!">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash-fill') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkbox-5" type="checkbox"
                                                        value="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2"> <img
                                                    src="{{ asset('assets/images/dashboard/user/1.png') }}" alt="user">
                                                <div> <a href="{{ route('admin.user-profile') }}">
                                                        <h6 class="f-w-500">Leslie Jolly</h6>
                                                    </a><span class="f-light f-12 f-w-500">Designer</span></div>
                                            </div>
                                        </td>
                                        <td> <a href="{{ route('admin.user-profile') }}">
                                                <h6 class="f-w-500">Card</h6>
                                            </a><span class="f-light f-12 f-w-500">Marketing </span></td>
                                        <td> <span class="f-w-500 f-12 f-light">79%</span>
                                            <div class="progress progress-stripe-warning mt-2" style="height: 5px">
                                                <div class="progress-bar-animated progress-bar-striped"
                                                    role="progressbar" style="width: 79%" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex action-buttons"><a class="light-card" href="#!">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#edit-2') }}">
                                                        </use>
                                                    </svg></a><a class="light-card" href="#!">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#trash-fill') }}">
                                                        </use>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 order-md-ii">
                    <div class="card title-line">
                        <div class="card-header card-no-border report-option">
                            <div class="header-top">
                                <h2>Top Referrals Pages<span class="f-light f-12 d-block f-w-500">Up to $100 per
                                        referral</span></h2>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="referralButton" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Generate Report</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="referralButton">
                                            <a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item"
                                                href="#">weekly</a><a class="dropdown-item" href="#">yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="referral-content">
                                <div class="referral-left-details">
                                    <div class="d-flex gap-1">
                                        <h2>129,900</h2><span class="badge badge-light-warning"> <i class="me-1"
                                                data-feather="trending-up"></i>4.5%</span>
                                    </div><span class="f-light f-12 f-w-500">vs. previous month</span>
                                </div>
                                <div class="referral-image"> <img src="{{ asset('assets/images/dashboard/1.png') }}"
                                        alt="vector"></div>
                            </div>
                            <div class="progress-stacked referral-progress">
                                <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                    <div class="progress-bar bg-primary"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <div class="progress-bar bg-success"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                    <div class="progress-bar bg-warning"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                    <div class="progress-bar bg-secondary"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <div class="progress-bar bg-info"></div>
                                </div>
                            </div>
                            <ul class="referral-list">
                                <li>
                                    <div class="activity-dot-primary"></div><a class="f-light f-w-500"
                                        href="{{ route('admin.search') }}">www.google.com</a><span
                                        class="f-12 f-w-500">35.89%</span>
                                </li>
                                <li>
                                    <div class="activity-dot-success"></div><a class="f-light f-w-500"
                                        href="{{ route('admin.search') }}">www.youtube.com</a><span
                                        class="f-12 f-w-500">19.12%</span>
                                </li>
                                <li>
                                    <div class="activity-dot-warning"></div><a class="f-light f-w-500"
                                        href="{{ route('admin.search') }}">www.media.com</a><span
                                        class="f-12 f-w-500">14.75%</span>
                                </li>
                                <li>
                                    <div class="activity-dot-secondary"></div><a class="f-light f-w-500"
                                        href="{{ route('admin.search') }}">www.pixelstrap.com</a><span
                                        class="f-12 f-w-500">19.76%</span>
                                </li>
                                <li>
                                    <div class="activity-dot-secondary"></div><a class="f-light f-w-500"
                                        href="{{ route('admin.search') }}">www.facebook.com</a><span
                                        class="f-12 f-w-500">18.98%</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xl-100">
            <div class="card">
                <div class="row">
                    <div class="col-xl-12 col-xl-40 col-sm-6 order-xl-ii discount-report">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <div>
                                    <h2>Total Transactions<span class="d-block f-w-500 f-light f-12">Special Discount
                                            <span class="txt-primary">60% OFF</span></span></h2>
                                </div>
                                <div class="card-header-right-icon">
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="earning-avg1" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earning-avg1"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body transaction-report">
                            <div class="total-transaction-wrapper">
                                <div id="total-transaction-chart"></div>
                            </div>
                            <div class="report-content">
                                <h5>Report</h5>
                                <ul>
                                    <li> <span class="f-12 f-light f-w-500">This Week</span>
                                        <h6>+78.32 %</h6>
                                        <div class="progress progress-stripe-primary with-light-background"
                                            style="height: 5px">
                                            <div class="progress-bar-animated progress-bar-striped" role="progressbar"
                                                style="width: 70%" aria-valuenow="10" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li> <span class="f-12 f-light f-w-500">This Week</span>
                                        <h6>-34.52 %</h6>
                                        <div class="progress progress-stripe-success with-light-background"
                                            style="height: 5px">
                                            <div class="progress-bar-animated progress-bar-striped" role="progressbar"
                                                style="width: 70%" aria-valuenow="10" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="report-button">
                                <div>
                                    <h5 class="f-w-600">+95.62 % <span class="f-light f-12 f-w-500">Performance</span>
                                    </h5>
                                </div><a class="btn btn-primary f-w-500 f-12" href="#!">New report
                                    <svg class="svg-sprite">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#logout') }}"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xl-30 col-sm-6 order-xl-ii customer-order">
                        <div class="card-header card-no-border">
                            <div class="header-top order-lists">
                                <div>
                                    <h2>Recent Orders<span class="d-block f-w-500 f-light f-12">80 Orders in a
                                            December</span></h2>
                                </div>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="recent-button" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">All Orders</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recent-button">
                                            <a class="dropdown-item" href="#">Pending</a><a class="dropdown-item"
                                                href="#">Success</a><a class="dropdown-item" href="#">Deliver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body transaction-list recent-orders">
                            <ul class="order-list mb-0">
                                <li>
                                    <div class="light-card"> <img
                                            src="{{ asset('assets/images/dashboard/product/1.png') }}" alt="TV"></div>
                                    <div class="order-content">
                                        <div><a href="{{ route('admin.order-history') }}">
                                                <h6 class="mb-1"> Apple PC</h6>
                                            </a><span> <span class="badge badge-light-primary">#10988</span><span
                                                    class="f-light f-w-500 f-12 ms-2">3 Item</span></span></div>
                                        <div class="text-end">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="order-1" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-1">
                                                    <a class="dropdown-item" href="{{ route('admin.cart') }}">Add to
                                                        cart</a><a class="dropdown-item" href="#">Cancel</a>
                                                </div>
                                            </div><span class="f-light f-w-500 f-12">$5,098</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="light-card"> <img
                                            src="{{ asset('assets/images/dashboard/product/2.png') }}" alt="T-shirt">
                                    </div>
                                    <div class="order-content">
                                        <div> <a href="{{ route('admin.order-history') }}">
                                                <h6 class="mb-1">T-Shirts</h6>
                                            </a><span> <span class="badge badge-light-primary">#10980</span><span
                                                    class="f-light f-w-500 f-12 ms-2">2 Item</span></span></div>
                                        <div class="text-end">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="order-2" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-2">
                                                    <a class="dropdown-item" href="{{ route('admin.cart') }}">Add to
                                                        cart</a><a class="dropdown-item" href="#">Cancel</a>
                                                </div>
                                            </div><span class="f-light f-w-500 f-12">$6,010</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="light-card"> <img
                                            src="{{ asset('assets/images/dashboard/product/3.png') }}"
                                            alt="Macbook air M2"></div>
                                    <div class="order-content">
                                        <div> <a href="{{ route('admin.order-history') }}">
                                                <h6 class="mb-1">Macbook</h6>
                                            </a><span> <span class="badge badge-light-primary">#101098</span><span
                                                    class="f-light f-w-500 f-12 ms-2">5 Item</span></span></div>
                                        <div class="text-end">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="order-3" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-3">
                                                    <a class="dropdown-item" href="{{ route('admin.cart') }}">Add to
                                                        cart</a><a class="dropdown-item" href="#">Cancel</a>
                                                </div>
                                            </div><span class="f-light f-w-500 f-12">$12,000</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="light-card"> <img
                                            src="{{ asset('assets/images/dashboard/product/4.png') }}" alt="Shoes">
                                    </div>
                                    <div class="order-content">
                                        <div> <a href="{{ route('admin.order-history') }}">
                                                <h6 class="mb-1">Shoes</h6>
                                            </a><span> <span class="badge badge-light-primary">#101098</span><span
                                                    class="f-light f-w-500 f-12 ms-2">3 Item</span></span></div>
                                        <div class="text-end">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="order-4" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-4">
                                                    <a class="dropdown-item" href="{{ route('admin.cart') }}">Add to
                                                        cart</a><a class="dropdown-item" href="#">Cancel</a>
                                                </div>
                                            </div><span class="f-light f-w-500 f-12">$2,000</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="light-card"> <img
                                            src="{{ asset('assets/images/dashboard/product/5.png') }}" alt="watch">
                                    </div>
                                    <div class="order-content">
                                        <div> <a href="{{ route('admin.order-history') }}">
                                                <h6 class="mb-1">Wall Watch</h6>
                                            </a><span> <span class="badge badge-light-primary">#101098</span><span
                                                    class="f-light f-w-500 f-12 ms-2">1 Item</span></span></div>
                                        <div class="text-end">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="order-5" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg>
                                                        <use
                                                            href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="order-5">
                                                    <a class="dropdown-item" href="{{ route('admin.cart') }}">Add to
                                                        cart</a><a class="dropdown-item" href="#">Cancel</a>
                                                </div>
                                            </div><span class="f-light f-w-500 f-12">$2,000</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-xl-100 order-xl-i">
                        <div class="offer-banner">
                            <div class="offer-content">
                                <h2>20% Off Themes</h2>
                                <p class="f-w-500 f-12">Get all the latest wordpress theme and plugin coupon in this
                                    board.</p>
                            </div><img class="img-fluid" src="{{ asset('assets/images/dashboard/banner.png') }}"
                                alt="vector">
                        </div>
                    </div>
                    <div class="col-12 col-xl-30 order-xl-ii todo-wrapper">
                        <div class="card-header card-no-border order-lists">
                            <div class="header-top">
                                <h2>To do List<span class="f-light f-12 d-block f-w-500">80 Orders in a December</span>
                                </h2>
                                <div class="card-header-right-icon"><a class="link-with-icon" href="#">+
                                        Create</a></div>
                            </div>
                        </div>
                        <div class="card-body notification to-do-list">
                            <ul class="custom-scrollbar">
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-primary"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-1" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Products</h6><span class="f-w-500 f-12 f-light">Today 2:00pm
                                                Clock</span>
                                        </div><span class="badge badge-light-primary ms-auto">In Progress</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-warning"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-2" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Web developing..</h6><span class="f-w-500 f-12 f-light">Due in 4
                                                Days</span>
                                        </div><span class="badge badge-light-warning ms-auto">Pending</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-success"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-3" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>UI/UX Design</h6><span class="f-w-500 f-12 f-light">Due in 3
                                                Days</span>
                                        </div><span class="badge badge-light-success ms-auto">Completed</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-primary"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-4" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Client Meeting ..</h6><span class="f-w-500 f-12 f-light">Today 1:00pm
                                                Clock</span>
                                        </div><span class="badge badge-light-primary ms-auto">In Progress</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-success"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-5" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Wed layout</h6><span class="f-w-500 f-12 f-light">Due in 10 Days</span>
                                        </div><span class="badge badge-light-success ms-auto">Completed</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-warning"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-6" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Web developing..</h6><span class="f-w-500 f-12 f-light">Due in 4
                                                Days</span>
                                        </div><span class="badge badge-light-warning ms-auto">Pending</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="activity-dot-success"></div>
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="checkbox-checked">
                                            <div class="form-check">
                                                <input class="form-check-input" id="list-7" type="checkbox" value="">
                                            </div>
                                        </div>
                                        <div>
                                            <h6>UI/UX Design</h6><span class="f-w-500 f-12 f-light">Due in 3
                                                Days</span>
                                        </div><span class="badge badge-light-success ms-auto">Completed</span>
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
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/simple-datatable.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
    <script>
        const datatable = new simpleDatatables.DataTable("#member-table", {
        paging: false,
        tabIndex: 1,
        });
    </script>
    <script>
        new WOW().init();
    </script>
@endsection