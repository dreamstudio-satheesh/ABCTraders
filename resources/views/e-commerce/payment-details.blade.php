@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Payment Details</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">ECommerce</li>
        <li class="breadcrumb-item f-w-500 active">Payment Details</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid credit-card">
  <div class="row">
    <!-- Individual column searching (text inputs) Starts-->
    <div class="col-xl-8 box-col-12">
      <div class="card">
        <div class="card-header py-4">
          <h2>Credit Card </h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-7 order-md-0 order-1">
              <form class="theme-form mega-form">
                <input class="form-control" type="number" placeholder="Card Number">
                <input class="form-control" type="text" placeholder="First Name">
                <input class="form-control" type="date">
                <input class="form-control" type="text" placeholder="Name on card">
                <select class="form-select" size="1">
                  <option>Select Type</option>
                  <option>Master</option>
                  <option>Visa</option>
                  <option>PayPal</option>
                  <option>COD</option>
                </select>
              </form>
            </div>
            <div class="col-md-5 text-center"><img class="img-fluid"
                src="{{ asset('assets/images/ecommerce/card.png') }}" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Individual column searching (text inputs) Ends-->
    <!-- Debit Card Starts-->
    <div class="col-xl-4 col-lg-6 box-col-6 debit-card">
      <div class="card">
        <div class="card-header py-4">
          <h2>Debit Card </h2>
        </div>
        <div class="card-body">
          <form class="theme-form g-3 row">
            <div class="col-sm-6 p-r-0">
              <input class="form-control" type="text" placeholder="Full name here">
            </div>
            <div class="col-sm-6">
              <input class="form-control" type="number" placeholder="Card Number">
            </div>
            <div class="col-6 p-r-0">
              <input class="form-control" type="number" placeholder="CVV Number">
            </div>
            <div class="col-6">
              <input class="form-control" type="number" placeholder="CVC">
            </div>
            <div class="col-12">
              <label class="col-form-label">Expiration Date</label>
            </div>
            <div class="col-xxl-6 p-r-0">
              <select class="form-select" size="1">
                <option>Select Month</option>
                <option>Jan</option>
                <option>Fab</option>
                <option>March</option>
                <option>April</option>
              </select>
            </div>
            <div class="col-xxl-6">
              <select class="form-select" size="1">
                <option>Select Year</option>
                <option>2024</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
              </select>
            </div>
            <div class="col-12">
              <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Debit Card Ends-->
    <!-- COD Starts-->
    <div class="col-xl-4 col-lg-6 box-col-6">
      <div class="card">
        <div class="card-header py-4">
          <h2>COD</h2>
        </div>
        <div class="card-body">
          <form class="theme-form row g-3">
            <div class="col-sm-6 p-r-0">
              <input class="form-control" type="text" placeholder="First Name">
            </div>
            <div class="col-sm-6">
              <input class="form-control" type="text" placeholder="Last Name">
            </div>
            <div class="col-6 p-r-0">
              <input class="form-control" type="number" placeholder="Pincode">
            </div>
            <div class="col-6">
              <input class="form-control" type="number" placeholder="Enter mobile number">
            </div>
            <div class="col-6 p-r-0">
              <input class="form-control" type="text" placeholder="State">
            </div>
            <div class="col-6">
              <input class="form-control" type="text" placeholder="City">
            </div>
            <div class="col-12">
              <textarea class="form-control" rows="3" placeholder="Address"></textarea>
            </div>
            <div class="col-12">
              <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- COD Ends-->
    <!-- EMI Starts-->
    <div class="col-xl-4 col-lg-6 box-col-6">
      <div class="card">
        <div class="card-header py-4">
          <h2>EMI</h2>
        </div>
        <div class="card-body">
          <form class="theme-form row g-3">
            <div class="col-sm-6 p-r-0">
              <input class="form-control" type="text" placeholder="First Name">
            </div>
            <div class="col-sm-6">
              <input class="form-control" type="text" placeholder="Last Name">
            </div>
            <div class="col-xxl-6 p-r-0">
              <input class="form-control" type="number" placeholder="Pincode">
            </div>
            <div class="col-xxl-6">
              <select class="form-select" size="1">
                <option>Bank Name</option>
                <option>SBI</option>
                <option>ICICI</option>
                <option>KOTAK</option>
                <option>BOB</option>
              </select>
            </div>
            <div class="col-12">
              <select class="form-select" size="1">
                <option>Select Card</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="col-12">
              <select class="form-select" size="1">
                <option>Select Duration</option>
                <option>2020-2021</option>
                <option>2021-2022</option>
                <option>2022-2024</option>
                <option>2024-2024</option>
              </select>
            </div>
            <div class="col-12">
              <ul class="payment-opt">
                <li><img src="{{ asset('assets/images/ecommerce/mastercard.png') }}" alt=""></li>
                <li><img src="{{ asset('assets/images/ecommerce/visa.png') }}" alt=""></li>
                <li><img src="{{ asset('assets/images/ecommerce/paypal.png') }}" alt=""></li>
              </ul>
            </div>
            <div class="col-12">
              <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- EMI Ends-->
    <!-- EMI Starts-->
    <div class="col-xl-4 col-lg-6 box-col-6">
      <div class="card">
        <div class="card-header py-4">
          <h2>Net Banking</h2>
        </div>
        <div class="card-body">
          <form class="theme-form row g-3">
            <div class="col-12">
              <input class="form-control" type="text" placeholder="AC Holder name">
            </div>
            <div class="col-12">
              <input class="form-control" type="text" placeholder="Account number">
            </div>
            <div class="col-xxl-6 p-r-0">
              <select class="form-select" size="1">
                <option>Select Bank</option>
                <option>SBI</option>
                <option>ICICI</option>
                <option>KOTAK</option>
                <option>BOB</option>
              </select>
            </div>
            <div class="col-xxl-6">
              <input class="form-control" type="text" placeholder="ICFC code">
            </div>
            <div class="col-12">
              <input class="form-control" type="number" placeholder="Enter mobile number">
            </div>
            <div class="col-12">
              <input class="form-control" type="text" placeholder="Other Details">
            </div>
            <div class="col-12">
              <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- EMI Ends-->
    <!-- Container-fluid Ends-->
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection