@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Product</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">ECommerce</li>
        <li class="breadcrumb-item f-w-500 active">Product</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid product-wrapper">
  <div class="product-grid">
    <div class="feature-products">
      <div class="row">
        <div class="col-md-6 products-total">
          <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#"
              data-original-title="" title=""><i data-feather="grid"></i></a></div>
          <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#"
              data-original-title="" title=""><i data-feather="list"></i></a></div><span
            class="d-none-productlist filter-toggle">
            Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
          <div class="grid-options d-inline-block">
            <ul>
              <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span
                    class="line-grid line-grid-1 bg-primary"></span><span
                    class="line-grid line-grid-2 bg-primary"></span></a></li>
              <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span
                    class="line-grid line-grid-3 bg-primary"></span><span
                    class="line-grid line-grid-4 bg-primary"></span><span
                    class="line-grid line-grid-5 bg-primary"></span></a></li>
              <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span
                    class="line-grid line-grid-6 bg-primary"></span><span
                    class="line-grid line-grid-7 bg-primary"></span><span
                    class="line-grid line-grid-8 bg-primary"></span><span
                    class="line-grid line-grid-9 bg-primary"></span></a></li>
              <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span
                    class="line-grid line-grid-10 bg-primary"></span><span
                    class="line-grid line-grid-11 bg-primary"></span><span
                    class="line-grid line-grid-12 bg-primary"></span><span
                    class="line-grid line-grid-13 bg-primary"></span><span
                    class="line-grid line-grid-14 bg-primary"></span><span
                    class="line-grid line-grid-15 bg-primary"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 text-sm-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
          <div class="select2-drpdwn-product select-options d-inline-block">
            <select class="form-control btn-square" name="select">
              <option value="opt1">Featured</option>
              <option value="opt2">Lowest Prices</option>
              <option value="opt3">Highest Prices</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="product-sidebar">
            <div class="filter-section">
              <div class="card">
                <div class="card-header">
                  <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i
                        class="fa fa-chevron-down toggle-data"></i></span></h6>
                </div>
                <div class="left-filter">
                  <div class="card-body filter-cards-view animate-chk">
                    <div class="product-filter">
                      <h6 class="f-w-600">Category</h6>
                      <div class="checkbox-animated mt-0">
                        <label class="d-block" for="edo-ani5">
                          <input class="checkbox_animated" id="edo-ani5" type="checkbox" data-original-title=""
                            title="">Man Shirt
                        </label>
                        <label class="d-block" for="edo-ani6">
                          <input class="checkbox_animated" id="edo-ani6" type="checkbox" data-original-title=""
                            title="">Man Jeans
                        </label>
                        <label class="d-block" for="edo-ani7">
                          <input class="checkbox_animated" id="edo-ani7" type="checkbox" data-original-title=""
                            title="">Woman Top
                        </label>
                        <label class="d-block" for="edo-ani8">
                          <input class="checkbox_animated" id="edo-ani8" type="checkbox" data-original-title=""
                            title="">Woman Jeans
                        </label>
                        <label class="d-block" for="edo-ani9">
                          <input class="checkbox_animated" id="edo-ani9" type="checkbox" data-original-title=""
                            title="">Man T-shirt
                        </label>
                      </div>
                    </div>
                    <div class="product-filter">
                      <h6 class="f-w-600">Brand</h6>
                      <div class="checkbox-animated mt-0">
                        <label class="d-block" for="chk-ani">
                          <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title="">
                          Levi's
                        </label>
                        <label class="d-block" for="chk-ani1">
                          <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title=""
                            title="">Diesel
                        </label>
                        <label class="d-block" for="chk-ani2">
                          <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title=""
                            title="">Lee
                        </label>
                        <label class="d-block" for="chk-ani3">
                          <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title=""
                            title="">Hudson
                        </label>
                        <label class="d-block" for="chk-ani4">
                          <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title=""
                            title="">Denizen
                        </label>
                        <label class="d-block" for="chk-ani5">
                          <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title=""
                            title="">Spykar
                        </label>
                      </div>
                    </div>
                    <div class="product-filter slider-product">
                      <h6 class="f-w-600">Colors</h6>
                      <div class="color-selector">
                        <ul>
                          <li class="white"></li>
                          <li class="gray"></li>
                          <li class="black"></li>
                          <li class="orange"></li>
                          <li class="green"></li>
                          <li class="pink"></li>
                          <li class="yellow"></li>
                          <li class="blue"></li>
                          <li class="red"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-filter pb-0">
                      <h6 class="f-w-600">Price</h6>
                      <input id="u-range-03" type="text">
                      <h6 class="f-w-600">New Products</h6>
                    </div>
                    <div class="product-filter pb-0 new-products">
                      <div class="owl-carousel owl-theme" id="testimonial">
                        <div class="item">
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">Woman T-shirt</p>
                              <div class="product-price">$100.00</div>
                            </div>
                          </div>
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">Dream Beauty Fashion</p>
                              <div class="product-price">$150.00</div>
                            </div>
                          </div>
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">VOXATI</p>
                              <div class="product-price">$200.00</div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">Fancy Shirt</p>
                              <div class="product-price">$100.00</div>
                            </div>
                          </div>
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">Fancy Shirt</p>
                              <div class="product-price">$100.00</div>
                            </div>
                          </div>
                          <div class="product-box row">
                            <div class="product-img col-md-5"><img class="img-fluid img-100"
                                src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                            <div class="product-details col-md-7 text-start"><span><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning me-1"></i><i
                                  class="fa fa-star font-warning"></i></span>
                              <p class="mb-0">Fancy Shirt</p>
                              <div class="product-price">$100.00 </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-filter text-center"><img class="img-fluid banner-product"
                        src="{{ asset('assets/images/ecommerce/banner.jpg') }}" alt="" data-original-title="" title="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <form>
            <div class="form-group m-0">
              <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i
                class="fa fa-search"></i>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="product-wrapper-grid">
      <div class="row">
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0"> Our t-shirts are made from high-quality, breathable materials and are ideal
                              for layering under your favourite coats and cardigans as well as for casual outings and
                              workouts.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Woman T-shirt</h3>
                </a>
                <p>Women Full Sleeve Printed Sweatshirt</p>
                <div class="product-price">$26.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid"
                  src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our wide variety guarantees you'll discover the ideal t-shirt to reflect
                              your uniqueness, whether you like a loose fit or a thin, flattering cut.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion</h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">$30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter2" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">From chic dresses to trendy tops, we have the perfect outfit to express your
                              unique personality. Shop now and stay ahead in the world of fashion!</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price"> $25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid"
                  src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter3" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">We support fusing style with comfort and toughness. Each item in our
                              collection is made from high-quality materials to provide a perfect balance of elegance
                              and durability.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Cyclamen</h3>
                </a>
                <p>Stylish co-ord set 2 piece dress for women</p>
                <div class="product-price">$30.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter4" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">With our carefully picked collection of on-trend items, stay ahead of the
                              fashion curve. For you to receive the freshest fashion goods, our team of fashion
                              specialists closely monitors the most recent runway trends.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion</h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">
                  $30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter5" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Utilise our exquisite selection of accessories to finish off your outfit.
                              Our accessories range provides the ideal finishing touch to every ensemble, from
                              spectacular jewellery to chic purses.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter6" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Take advantage of a smooth purchasing experience on our easy-to-use website.
                              To discover exactly what you're searching for, explore our simple categories and sort by
                              style, colour, or size.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Woman T-shirt</h3>
                </a>
                <p>Women Full Sleeve Printed Sweatshirt</p>
                <div class="product-price">$26.00
                  <del>$350.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter7"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter7" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">With our extensive selection of fashionable clothing, embrace your
                              uniqueness and grab the attention. You may use our selection to express your true self via
                              fashion.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter8" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our trendy coats epitomise classic elegance with a contemporary edge. Every
                              item, from timeless trench coats to tough leather jackets, is carefully crafted to enhance
                              your style and leave a lasting impression.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter9" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our designer coats serve a variety of purposes and are more than just a
                              fashion statement. With our coats, you're covered in every season.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Cyclamen</h3>
                </a>
                <p>Stylish co-ord set 2 piece dress for women</p>
                <div class="product-price">$30.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter10" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">We put an emphasis on eco-friendly procedures to make sure that our coats
                              are not only fashionable but also considerate of the environment.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion </h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">$30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter11" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Enjoy the plush feel of our high-end materials. We only use the best fabrics
                              available, guaranteeing softness, comfort, and durability so you may wear your trendy
                              jacket with assurance year after year.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i
                    class="icofont icofont-love"></i></div><img class="img-fluid"
                  src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter12" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our t-shirts are made from high-quality, breathable materials and are ideal
                              for layering under your favourite coats and cardigans as well as for casual outings and
                              workouts.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion</h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">$30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter13" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our wide variety guarantees you'll discover the ideal t-shirt to reflect
                              your uniqueness, whether you like a loose fit or a thin, flattering cut.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-clip ribbon-warning">Hot</div><img class="img-fluid"
                  src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter14" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">From chic dresses to trendy tops, we have the perfect outfit to express your
                              unique personality. Shop now and stay ahead in the world of fashion!</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Cyclamen</h3>
                </a>
                <p>Stylish co-ord set 2 piece dress for women</p>
                <div class="product-price">$30.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter15"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter15" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">We support fusing style with comfort and toughness. Each item in our
                              collection is made from high-quality materials to provide a perfect balance of elegance
                              and durability.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion</h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">$30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter16" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter16" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">With our carefully picked collection of on-trend items, stay ahead of the
                              fashion curve. For you to receive the freshest fashion goods, our team of fashion
                              specialists closely monitors the most recent runway trends.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter17"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter17" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter17" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Utilise our exquisite selection of accessories to finish off your outfit.
                              Our accessories range provides the ideal finishing touch to every ensemble, from
                              spectacular jewellery to chic purses.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Woman T-shirt</h3>
                </a>
                <p>Women Full Sleeve Printed Sweatshirt</p>
                <div class="product-price">$26.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter18"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter18" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter18" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Take advantage of a smooth purchasing experience on our easy-to-use website.
                              To discover exactly what you're searching for, explore our simple categories and sort by
                              style, colour, or size.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter19"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter19" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter19" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">With our extensive selection of fashionable clothing, embrace your
                              uniqueness and grab the attention. You may use our selection to express your true self via
                              fashion.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$25.00
                  <del>$400.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter20"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter20" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter20" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our trendy coats epitomise classic elegance with a contemporary edge. Every
                              item, from timeless trench coats to tough leather jackets, is carefully crafted to enhance
                              your style and leave a lasting impression.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Cyclamen</h3>
                </a>
                <p>Stylish co-ord set 2 piece dress for women</p>
                <div class="product-price">$30.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter21"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter21" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter21" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Our designer coats serve a variety of purposes and are more than just a
                              fashion statement. With our coats, you're covered in every season.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>Dream Beauty Fashion</h3>
                </a>
                <p>Tops for Women Stylish</p>
                <div class="product-price">$30.00
                  <del>$360.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter22"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter22" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter22" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">We put an emphasis on eco-friendly procedures to make sure that our coats
                              are not only fashionable but also considerate of the environment.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$350.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg') }}"
                  alt="">
                <div class="product-hover">
                  <ul>
                    <li>
                      <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter23"><i
                          class="icon-eye"></i></button>
                    </li>
                    <li>
                      <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter23" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter23" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid"
                            src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                        <div class="product-details col-lg-6 text-start">
                          <h4>Woman T-shirt</h4>
                          <div class="product-price">$26.00
                            <del>$350.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Enjoy the plush feel of our high-end materials. We only use the best fabrics
                              available, guaranteeing softness, comfort, and durability so you may wear your trendy
                              jacket with assurance year after year.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-primary" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-primary" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary" href="{{ route('admin.cart') }}">Add to
                                Cart</a><a class="btn btn-primary" href="{{ route('admin.product-page') }}">View
                                Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details">
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="{{ route('admin.product-page') }}">
                  <h3>VOXATI</h3>
                </a>
                <p>Men's Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$350.00 </del>
                </div>
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
<script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/product-tab.js') }}"></script>
@endsection