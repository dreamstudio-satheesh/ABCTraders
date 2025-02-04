@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Recent Orders</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">ECommerce</li>
                <li class="breadcrumb-item f-w-500 active">Recent Orders</li>
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
                    <h2>New Orders</h2>
                </div>
                <div class="card-body">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!"> Women Shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $235
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Cyclamen </a></h6>
                                        </div>
                                        <div class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $200
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Men Solid Denim jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $255
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Blue shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $275
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">red shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $213
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Red shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $212
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $267
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $234
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Processing</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Shipped Orders</h2>
                </div>
                <div class="card-body">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $217
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $213
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Cyclamen</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $219
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Men Solid Denim jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $278
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Blue shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $299
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">red shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $202
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Red shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $206
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"> </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-success btn-xs" href="#!">Shipped</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Cancelled Orders</h2>
                </div>
                <div class="card-body">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $234
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $278
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-4.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Cyclamen</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $289
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-3.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Men Solid Denim jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-2.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Blue shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $256
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">red shirt </a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $234
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Red shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $266
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-6.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women Top</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $236
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="prooduct-details-box">
                                <div class="d-flex"><img class="align-self-center img-fluid img-60"
                                        src="{{ asset('assets/images/ecommerce/product-table-5.png') }}" alt="#">
                                    <div class="flex-grow-1 ms-3">
                                        <div class="product-name">
                                            <h6><a href="#!">Women shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-sm-2">Price</div>: $245
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-danger btn-xs" href="#!">Cancelled</a><i class="close"
                                            data-feather="x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2>Datatable Order History</h2>
                </div>
                <div class="card-body">
                    <div class="order-history table-responsive">
                        <table class="table table-bordernone display" id="basic-1">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Article number</th>
                                    <th scope="col">Units</th>
                                    <th scope="col">Price</th>
                                    <th scope="col"><i class="fa fa-angle-down"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/1.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Long Top</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle"></span>Processing</div>
                                        </div>
                                    </td>
                                    <td>M</td>
                                    <td>Lavander</td>
                                    <td>4215738</td>
                                    <td>1</td>
                                    <td>$21</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/13.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Fancy watch</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle"></span>Processing</div>
                                        </div>
                                    </td>
                                    <td>35mm</td>
                                    <td>Blue</td>
                                    <td>5476182</td>
                                    <td>1</td>
                                    <td>$10</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/4.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Man shoes</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle"></span>Processing</div>
                                        </div>
                                    </td>
                                    <td>8</td>
                                    <td>Black & white</td>
                                    <td>1756457</td>
                                    <td>1</td>
                                    <td>$18</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/10.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Ladies side bag</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle shipped-order"></span>Shipped</div>
                                        </div>
                                    </td>
                                    <td>22cm x 18cm</td>
                                    <td>Brown</td>
                                    <td>7451725</td>
                                    <td>1</td>
                                    <td>$13</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/12.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Ladies Slipper</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle shipped-order"></span>Shipped</div>
                                        </div>
                                    </td>
                                    <td>6</td>
                                    <td>Brown & white</td>
                                    <td>4127421</td>
                                    <td>1</td>
                                    <td>$6</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/3.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Fancy ladies Jacket</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle shipped-order"></span>Shipped</div>
                                        </div>
                                    </td>
                                    <td>Xl</td>
                                    <td>Light gray</td>
                                    <td>3581714</td>
                                    <td>1</td>
                                    <td>$24</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/2.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Ladies Handbag</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle shipped-order"></span>Shipped</div>
                                        </div>
                                    </td>
                                    <td>25cm x 20cm</td>
                                    <td>Black</td>
                                    <td>6748142</td>
                                    <td>1</td>
                                    <td>$14</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/15.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Iphone6 mobile</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle cancel-order"></span>Cancelled</div>
                                        </div>
                                    </td>
                                    <td>10cm x 15cm</td>
                                    <td>Black</td>
                                    <td>5748214</td>
                                    <td>1</td>
                                    <td>$25</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/14.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Watch</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle cancel-order"></span>Cancelled</div>
                                        </div>
                                    </td>
                                    <td>27mm</td>
                                    <td>Brown</td>
                                    <td>2471254</td>
                                    <td>1</td>
                                    <td>$12</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                                <tr>
                                    <td><img class="img-fluid img-30" src="{{ asset('assets/images/product/11.png') }}"
                                            alt="#"></td>
                                    <td>
                                        <div class="product-name"><a href="#!">Slipper</a>
                                            <div class="order-process"><span
                                                    class="order-process-circle cancel-order"></span>Cancelled</div>
                                        </div>
                                    </td>
                                    <td>6</td>
                                    <td>Blue</td>
                                    <td>8475112</td>
                                    <td>1</td>
                                    <td>$6</td>
                                    <td><i data-feather="more-vertical"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection