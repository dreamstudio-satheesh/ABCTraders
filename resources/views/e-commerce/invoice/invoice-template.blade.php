@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Invoice-6</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">E-commerce</li>
                <li class="breadcrumb-item f-w-500 active">Invoice-6</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice">
                        <div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <div class="media-left"><img class="media-object img-60 for-light"
                                                    src="{{ asset('assets/images/other-images/logo-login.png') }}"
                                                    alt="logo"><img class="media-object img-60 for-dark"
                                                    src="{{ asset('assets/images/other-images/logo-login-dark.png') }}"
                                                    alt="logo"></div>
                                            <div class="flex-grow-1 m-l-20 text-right">
                                                <h4 class="media-heading">Yuri</h4>
                                                <p>hello@yuri.in<br><span>289-335-6503</span></p>
                                            </div>
                                        </div>
                                        <!-- End Info-->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-md-end text-xs-center">
                                            <h3>Invoice #<span class="counter">1069</span></h3>
                                            <p>Issued: May<span> 24, 2024</span><br> Payment Due: June <span>24,
                                                    2024</span></p>
                                        </div>
                                        <!-- End Title-->
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- End InvoiceTop-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div class="media-left"><img class="media-object rounded-circle img-60"
                                                src="{{ asset('assets/images/user/1.jpg') }}" alt=""></div>
                                        <div class="flex-grow-1 m-l-20">
                                            <h4 class="media-heading">Devil Deo</h4>
                                            <p>DevilDeo@gmail.com<br><span>555-555-5555</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-md-end" id="project">
                                        <h6>Project Description</h6>
                                        <p>You're Only As Good As Your Last Collection, Which Is An Enormous Pressure.
                                            Jeans Represent Democracy In Fashion.Fashion Is About Dressing According To
                                            What's Fashionable.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Invoice Mid-->
                            <div>
                                <div class="table-responsive invoice-table" id="table">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="item">
                                                    <h6 class="p-2 mb-0">Item Description</h6>
                                                </td>
                                                <td class="Hours">
                                                    <h6 class="p-2 mb-0">Hours</h6>
                                                </td>
                                                <td class="Rate">
                                                    <h6 class="p-2 mb-0">Rate</h6>
                                                </td>
                                                <td class="subtotal">
                                                    <h6 class="p-2 mb-0">Sub-total</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Red Shirt</label>
                                                    <p class="m-0">Wild West - Red Cotton Blend Regular Fit Men's
                                                        Formal Shirt.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">5</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$375.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Flower Dress</label>
                                                    <p class="m-0">Skyblue Flower Printed Sleevless Strappy Dress.
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">3</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$225.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Red Skirt</label>
                                                    <p class="m-0">R L F - Red Cotton Blend Women's A-Line Skirt.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">10</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$750.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Brown Dress</label>
                                                    <p class="m-0">Aask - Brown Polyester Blend Women's Fit & Flare
                                                        Dress.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">10</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$75</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext">$750.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="itemtext"></p>
                                                </td>
                                                <td>
                                                    <p class="m-0">HST</p>
                                                </td>
                                                <td>
                                                    <p class="m-0">13%</p>
                                                </td>
                                                <td>
                                                    <p class="m-0">$419.25</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="Rate">
                                                    <h6 class="mb-0 p-2">Total</h6>
                                                </td>
                                                <td class="payment">
                                                    <h6 class="mb-0 p-2">$3,644.25</h6>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table-->
                                <div class="row">
                                    <div class="col-md-8">
                                        <div>
                                            <p class="legal"><strong>Thank you for your business!</strong>  Payment is
                                                expected within 31 days; please process this invoice within that time.
                                                There will be a 5% interest charge per month on late invoices.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <form class="text-end">
                                            <input type="image"
                                                src="{{ asset('assets/images/other-images/paypal.png') }}" name="submit"
                                                alt="PayPal - The safer, easier way to pay online!">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End InvoiceBot-->
                        </div>
                        <div class="col-sm-12 text-center mt-3">
                            <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">Print</button>
                            <button class="btn btn-secondary" type="button">Cancel</button>
                        </div>
                        <!-- End Invoice-->
                        <!-- End Invoice Holder-->
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/print.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection