@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Cart</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">ECommerce</li>
        <li class="breadcrumb-item f-w-500 active">Cart</li>
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
          <h2>Cart</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="order-history table-responsive wishlist">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img class="img-fluid img-40" src="{{ asset('assets/images/product/1.png') }}" alt="#"></td>
                    <td>
                      <div class="product-name"><a href="#!">Long top</a></div>
                    </td>
                    <td>$21</td>
                    <td>
                      <fieldset class="qty-box">
                        <div class="input-group">
                          <input class="touchspin text-center" type="text" value="5">
                        </div>
                      </fieldset>
                    </td>
                    <td><i data-feather="x-circle"></i></td>
                    <td>$8686.6</td>
                  </tr>
                  <tr>
                    <td><img class="img-fluid img-40" src="{{ asset('assets/images/product/13.png') }}" alt="#"></td>
                    <td>
                      <div class="product-name"><a href="#!">Fancy watch</a></div>
                    </td>
                    <td>$50</td>
                    <td>
                      <fieldset class="qty-box">
                        <div class="input-group">
                          <input class="touchspin text-center" type="text" value="5">
                        </div>
                      </fieldset>
                    </td>
                    <td><i data-feather="x-circle"></i></td>
                    <td>$20682.4</td>
                  </tr>
                  <tr>
                    <td><img class="img-fluid img-40" src="{{ asset('assets/images/product/4.png') }}" alt="#"></td>
                    <td>
                      <div class="product-name"><a href="#!">Man shoes</a></div>
                    </td>
                    <td>$11</td>
                    <td>
                      <fieldset class="qty-box">
                        <div class="input-group">
                          <input class="touchspin text-center" type="text" value="5">
                        </div>
                      </fieldset>
                    </td>
                    <td><i data-feather="x-circle"></i></td>
                    <td>$4550.1</td>
                  </tr>
                  <tr>
                    <td colspan="4">
                      <div class="input-group">
                        <input class="form-control me-2" type="text" placeholder="Enter coupan code"><a
                          class="btn btn-primary" href="#!">Apply</a>
                      </div>
                    </td>
                    <td class="total-amount">
                      <h6 class="m-0 text-end"><span class="f-w-600 f-16">Total Price :</span></h6>
                    </td>
                    <td><span>$33919.1</span></td>
                  </tr>
                  <tr>
                    <td class="text-end" colspan="5"><a class="btn btn-warning cart-btn-transform"
                        href="{{ route('admin.products') }}">Continue Shopping</a></td>
                    <td><a class="btn btn-success cart-btn-transform" href="{{ route('admin.checkout') }}">Check Out</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>
@endsection