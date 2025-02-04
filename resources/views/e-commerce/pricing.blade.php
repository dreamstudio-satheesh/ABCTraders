@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Pricing</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">ECommerce</li>
        <li class="breadcrumb-item f-w-500 active">Pricing</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h2>Become Member</h2>
        </div>
        <div class="card-body row pricing-block">
          <div class="col-lg-3 col-md-6">
            <div class="pricingtable">
              <div class="pricingtable-header">
                <h3 class="title">Standard</h3>
              </div>
              <div class="price-value"><span class="currency">$</span><span class="amount">10</span><span
                  class="duration">/mo</span></div>
              <ul class="pricing-content">
                <li>50GB Disk Space</li>
                <li>50 Email Accounts</li>
                <li>Maintenance</li>
                <li>15 Subdomains</li>
              </ul>
              <div class="pricingtable-signup"><a class="btn btn-primary btn-lg"
                  href="{{ route('admin.sign-up') }}">Sign
                  Up</a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="pricingtable">
              <div class="pricingtable-header">
                <h3 class="title">Premium</h3>
              </div>
              <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span
                  class="duration">/mo</span></div>
              <ul class="pricing-content">
                <li>10% on all product</li>
                <li>50 Email Accounts</li>
                <li>Maintenance</li>
                <li>15 Subdomains</li>
              </ul>
              <div class="pricingtable-signup"><a class="btn btn-primary btn-lg"
                  href="{{ route('admin.sign-up') }}">Sign
                  Up</a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="pricingtable">
              <div class="pricingtable-header">
                <h3 class="title">Auther pack</h3>
              </div>
              <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span
                  class="duration">/mo</span></div>
              <ul class="pricing-content">
                <li>Upload 50 product</li>
                <li>50 Email Accounts</li>
                <li>Maintenance</li>
                <li>15 Subdomains</li>
              </ul>
              <div class="pricingtable-signup"><a class="btn btn-primary btn-lg"
                  href="{{ route('admin.sign-up') }}">Sign
                  Up</a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="pricingtable">
              <div class="pricingtable-header">
                <h3 class="title">Auther pack</h3>
              </div>
              <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span
                  class="duration">/mo</span></div>
              <ul class="pricing-content">
                <li>Upload 50 product</li>
                <li>50 Email Accounts</li>
                <li>Maintenance</li>
                <li>15 Subdomains</li>
              </ul>
              <div class="pricingtable-signup"><a class="btn btn-primary btn-lg"
                  href="{{ route('admin.sign-up') }}">Sign
                  Up</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2>Simple Pricing Card</h2>
        </div>
        <div class="card-body pricing-content">
          <div class="row g-sm-4 g-3">
            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
              <div class="card text-center pricing-simple">
                <div class="card-body">
                  <h3>Standard</h3>
                  <h1>$15</h1>
                  <h6 class="mb-0">our preferred plans</h6>
                </div><a class="btn btn-lg btn-primary btn-block" href="#!">Purchase</a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
              <div class="card text-center pricing-simple">
                <div class="card-body">
                  <h3>Business</h3>
                  <h1>$25</h1>
                  <h6 class="mb-0">ideal for expanding teams</h6>
                </div><a class="btn btn-lg btn-primary btn-block" href="#!">Purchase</a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
              <div class="card text-center pricing-simple">
                <div class="card-body">
                  <h3>Premium</h3>
                  <h1>$35</h1>
                  <h6 class="mb-0">the most popular of our plans</h6>
                </div><a class="btn btn-lg btn-primary btn-block" href="#!">Purchase</a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
              <div class="card text-center pricing-simple">
                <div class="card-body">
                  <h3>Extra</h3>
                  <h1>$45</h1>
                  <h6 class="mb-0">optimal for huge teams</h6>
                </div><a class="btn btn-lg btn-primary btn-block" href="#!">Purchase</a>
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
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
@endsection