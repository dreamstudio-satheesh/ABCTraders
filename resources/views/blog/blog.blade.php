@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Blog Details</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Blog</li>
        <li class="breadcrumb-item f-w-500 active">Blog Details</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 set-col-12 box-col-12">
      <div class="card">
        <div class="blog-box blog-shadow"><img class="img-fluid" src="{{ asset('assets/images/blog/blog.jpg') }}"
            alt="">
          <div class="blog-details">
            <p>22 July 2024</p>
            <h4>Experience lightning-fast load times and keep your visitors engaged.</h4>
            <ul class="blog-social">
              <li><i class="icofont icofont-user"></i>William G. Savard</li>
              <li><i class="icofont icofont-thumbs-up"></i>03 Hits</li>
              <li><i class="icofont icofont-ui-chat"></i>500 Comments</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 set-col-12 box-col-12">
      <div class="card">
        <div class="blog-box blog-list row">
          <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{ asset('assets/images/blog/blog-2.jpg') }}"
              alt=""></div>
          <div class="col-sm-7">
            <div class="blog-details">
              <div class="blog-date"><span>11</span> March 2024</div>
              <h6>Stay ahead of the competition with our data-driven insights and analytics.</h6>
              <div class="blog-bottom-content">
                <ul class="blog-social">
                  <li>by: Admin</li>
                  <li>0 Hits</li>
                </ul>
                <hr>
                <p class="mt-0">Discover the hidden gems of our enchanting visiting area, where nature's beauty meets
                  captivating history.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="blog-box blog-list row">
          <div class="col-sm-5"><img class="img-fluid sm-100-w" src="{{ asset('assets/images/blog/blog-3.jpg') }}"
              alt=""></div>
          <div class="col-sm-7">
            <div class="blog-details">
              <div class="blog-date"><span>05</span> January 2024</div>
              <h6>Mobile-ready and responsive - your website will shine on any device</h6>
              <div class="blog-bottom-content">
                <ul class="blog-social">
                  <li>by: Admin</li>
                  <li>02 Hits</li>
                </ul>
                <hr>
                <p class="mt-0">Embrace the charm and adventure that awaits you in our vibrant visiting area, a
                  destination like no other</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3 box-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li>2 May 2024</li>
              <li>by: Admin</li>
              <li>0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details"> Unraveling the Elegance of Modern Fashion Trends</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3 box-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li>9 March 2024</li>
              <li>by: Admin</li>
              <li>0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Navigating the Digital Frontier: Insights into the World of Tech</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3 box-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
            src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li>8 April 2024</li>
              <li>by: Admin</li>
              <li>0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Wanderlust Chronicles: Exploring the World, One Adventure at a Time</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3 box-col-6">
      <div class="card">
        <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog"
            src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="">
          <div class="blog-details-main">
            <ul class="blog-social">
              <li>5 July 2024</li>
              <li>by: Admin</li>
              <li>0 Hits</li>
            </ul>
            <hr>
            <h6 class="blog-bottom-details">Stronger Every Day: Empowering Your Body and Mind for Success</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
@endsection