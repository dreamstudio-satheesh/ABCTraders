@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Product Page</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">ECommerce</li>
                <li class="breadcrumb-item f-w-500 active">Product Page</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div>
        <div class="row product-page-main p-0">
            <div class="col-xxl-4 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-slider owl-carousel owl-theme" id="sync1">
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt=""></div>
                        </div>
                        <div class="owl-carousel owl-theme" id="sync2">
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/01.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/03.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/04.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/05.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/06.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/07.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('assets/images/ecommerce/08.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 box-col-6 order-xxl-0 order-1">
                <div class="card">
                    <div class="card-body">
                        <div class="product-page-details">
                            <h2>Women's Jackets</h2>
                        </div>
                        <div class="product-price">$26.00
                            <del>$350.00 </del>
                        </div>
                        <ul class="product-color">
                            <li class="bg-primary"></li>
                            <li class="bg-secondary"></li>
                            <li class="bg-success"></li>
                            <li class="bg-info"></li>
                            <li class="bg-warning"></li>
                        </ul>
                        <hr>
                        <p>Our t-shirts are made from high-quality, breathable materials and are ideal for layering
                            under your favourite coats and cardigans as well as for casual outings and workouts.</p>
                        <hr>
                        <div>
                            <table class="product-page-width">
                                <tbody>
                                    <tr>
                                        <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                                        <td>Pixelstrap</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Availability &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td class="txt-success f-w-500">In stock</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td>Quillite</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                        <td>Cotton</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <h6 class="product-title">Share it</h6>
                            </div>
                            <div class="col-md-8">
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li class="d-inline-block"><a href="https://www.facebook.com/"
                                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="d-inline-block"><a href="https://accounts.google.com/"
                                                target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="d-inline-block"><a href="https://twitter.com/" target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="d-inline-block"><a href="https://www.instagram.com/"
                                                target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li class="d-inline-block"><a href="https://rss.app/" target="_blank"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <form class="d-inline-block f-right"></form>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <h6 class="product-title">Rate Now</h6>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(250 review)</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="m-t-15 common-flex"><a class="btn btn-primary" href="{{ route('admin.cart') }}"
                                title="">
                                <i class="fa fa-shopping-basket me-1"></i>Add To Cart</a><a class="btn btn-success"
                                href="{{ route('admin.checkout') }}" title=""> <i
                                    class="fa fa-shopping-cart me-1"></i>Buy
                                Now</a><a class="btn btn-warning" href="{{ route('admin.list-wish') }}"> <i
                                    class="fa fa-heart me-1"></i>Add To WishList</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 box-col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- side-bar colleps block stat-->
                        <div class="filter-block">
                            <h4>Brand</h4>
                            <ul>
                                <li>Clothing</li>
                                <li>Bags</li>
                                <li>Footwear</li>
                                <li>Watches</li>
                                <li>Accessories</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="collection-filter-block">
                            <ul class="pro-services">
                                <li>
                                    <div class="d-flex"><i data-feather="truck"></i>
                                        <div class="flex-grow-1">
                                            <h5>Free Shipping </h5>
                                            <p>Free Shipping World Wide</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"><i data-feather="clock"></i>
                                        <div class="flex-grow-1">
                                            <h5>24 X 7 Service </h5>
                                            <p>Online Service For New Customer</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"><i data-feather="gift"></i>
                                        <div class="flex-grow-1">
                                            <h5>Festival Offer </h5>
                                            <p>New Online Special Festival</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex"><i data-feather="credit-card"></i>
                                        <div class="flex-grow-1">
                                            <h5>Online Payment </h5>
                                            <p>Contrary To Popular Belief. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here-->
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row product-page-main">
            <div class="col-sm-12">
                <ul class="nav nav-tabs border-tab nav-primary mb-0" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                            href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Febric</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                            href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Video</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                            href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Details</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand"
                            role="tab" aria-controls="top-brand" aria-selected="true">Brand</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <p class="mb-0 m-t-10">Fabric is a substance made of fibres that have been knitted, woven, or
                            otherwise joined to form a flexible, durable, and multipurpose substance used for clothing
                            and a variety of other purposes. Natural fibres, synthetic fibres, or a combination of both
                            can be used to make fabrics. </p>
                        <p class="mb-0 m-t-10">The cotton plant's seed bag is the source of cotton, a natural fibre. It
                            is a popular material for daily wear including t-shirts, shirts, dresses, and undergarments
                            since it is soft, breathable, and comfy.Make sure the video is well-produced and has
                            excellent graphics. To grab the audience's attention, use captivating pictures and original
                            angles.</p>
                    </div>
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                        <p class="mb-0 m-t-10">A product video's main objective is to illustrate the attributes and
                            functionality of the item. Demonstrate the product in use while emphasising how it satisfies
                            a need or an issue.Include client feedback or testimonials in the video, where appropriate.
                            Genuine customer endorsements may increase credibility and trust.</p>
                        <p class="mb-0 m-t-10">
                            You may use software for content production to generate blogs, movies, social media
                            postings, and other things. With the large range of content production software accessible,
                            a number of tools are available. There are certain programmes that let you record and edit
                            video. Others let you to plan out your pieces, do topical research, and come up with fresh
                            content ideas.</p>
                    </div>
                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                        <p class="mb-0 m-t-10">At the conclusion of the video, include a strong and obvious call to
                            action that instructs viewers on what actions to take next, such as visiting a website,
                            making a purchase, or signing up for a newsletter.</p>
                        <p class="mb-0 m-t-10">
                            It might be difficult to create new material. While attempting to express oneself
                            artistically, there are numerous factors to consider, including analytics and video quality.
                            Since content creation tools are intended to make the process of creating new material
                            easier, they may relieve some of the headache and lessen your workload.</p>
                    </div>
                    <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                        <p class="mb-0 m-t-10">Pick audio and background music that supports the message of the video.
                            Ensure that the audio is crystal clear and improves the viewing experience.</p>
                        <p class="mb-0 m-t-10">
                            For patients to comprehend and recognise these medications for optimal usage,
                            established/mature brands need a certain level of market familiarity, illness education, and
                            patient engagement with HCPs. During the pandemic, as these companies' income profiles
                            continue to worsen, so do the attention and funding they receive and the already patchy
                            brand recognition they have in the healthcare ecosystem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/ecommerce.js') }}"></script>
@endsection