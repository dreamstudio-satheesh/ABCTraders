@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Wishlist</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">ECommerce</li>
                <li class="breadcrumb-item f-w-500 active">Wishlist</li>
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
                    <h2>Wishlist</h2>
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
                                            <div class="text-muted me-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Womem shorts</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $240
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $212
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Men Solid Denim Jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $216
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $219
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Red Shirt</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $212
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $219
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $213
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $211
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Men Solid Denim Jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $234
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Men Solid Denim Jacket</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $278
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $245
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <div class="text-muted me-2">Price</div>: $289
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart</a>
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
                                            <h6><a href="#!">Women Short</a></h6>
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="price d-flex">
                                            <div class="text-muted me-2">Price</div>: $210
                                        </div>
                                        <div class="avaiabilty">
                                            <div class="txt-success f-w-600">In stock</div>
                                        </div><a class="btn btn-primary btn-xs" href="#!">Move to Cart </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection