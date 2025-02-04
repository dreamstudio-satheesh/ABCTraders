@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Creative Card</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Creative Card</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header border-l-primary">
          <h2>Border Left</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-l-* </code>for left border.</p>
        </div>
        <div class="card-body">
          <ul class="d-flex flex-column gap-1">
            <li>
              Us Technology offers web & mobile development solutions for all industry verticals.Include a short form
              using fields that'll help your business understand who's contacting them.</li>
            <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States- 33020</li>
            <li> <strong>Mail Us:</strong>contact@us@gmail.com</li>
            <li> <strong>Contact Number: </strong>(954) 357-7760</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header border-r-secondary">
          <h2>Border Right</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-r-* </code>for right border.</p>
        </div>
        <div class="card-body">
          <p>Us Technology offers web & mobile development solutions for all industry verticals.Include a short form
            using fields that'll help your business understand who's contacting them. </p>
          <form>
            <label class="form-label" for="exampleFormControlInput1">Email address</label>
            <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="youremail@gmail.com">
          </form>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header border-t-danger">
          <h2>Border Top</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-t-* </code>for top border.</p>
        </div>
        <div class="card-body">
          <p class="mb-0">Tabs have long been used to show alternative views of the same group of information tabs in
            software. Known as<em class="txt-danger">“module tabs”</em> , these are still used today in web sites. For
            instance, airline companies such as Ryanair, easyJet and AirMalta use module tabs to enable the user to
            switch between bookings for flights, hotels and car hire.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header border-b-info">
          <h2>Border Bottom</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-b-* </code>for bottom border.</p>
        </div>
        <div class="card-body">
          <p class="mb-0">A navigation bar is a particularly important feature because it allows visitors to quickly and
            easily find<em class="txt-danger"> important pages on your website</em> , like your blog, product pages,
            pricing, contact info, and documentation. This improves the chances of visitors browsing your site longer,
            which can boost your page views and reduce your bounce rate.</p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal">
        <div class="card-header border-l-primary border-3">
          <h2>Border Primary State</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-l-* </code>for left border and <code>.border-3 </code>is
            used to increase the width of the border.</p>
        </div>
        <div class="card-body">
          <div class="list-group"><a class="list-group-item list-group-item-action active" href="#!"><img
                class="rounded-circle img-fluid" src="{{ asset('assets/images/user/1.jpg') }}" alt="user">Teresa J.
              Mosteller</a><a class="list-group-item list-group-item-action" href="#!"><img
                class="rounded-circle img-fluid" src="{{ asset('assets/images/user/3.png') }}" alt="user">Gloria D.
              Acheson</a><a class="list-group-item list-group-item-action" href="#!"><img
                class="rounded-circle img-fluid" src="{{ asset('assets/images/user/5.jpg') }}" alt="user">Bryan A.
              Owens</a></div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal">
        <div class="card-header border-l-warning border-3">
          <h2>Border Warning State</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-l-* </code>for left border and <code>.border-3 </code>is
            used to increase the width of the border.</p>
        </div>
        <div class="card-body">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item txt-primary fw-bold">known for delivery of useful and usable solutions</li>
            <li class="list-group-item txt-danger fw-bold">Solve your problem with us</li>
            <li class="list-group-item txt-success fw-bold">Certified Professionals</li>
            <li class="list-group-item txt-warning fw-bold">Growth-Driven </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-12">
      <div class="card height-equal">
        <div class="card-header border-l-secondary border-2">
          <h2>Border Secondary State</h2>
          <p class="mt-1 f-m-light">Use the class of<code>.b-l-* </code>for left border and <code>.border-3 </code>is
            used to increase the width of the border.</p>
        </div>
        <div class="card-body scroll-demo">
          <ol class="list-group list-group-numbered scroll-rtl">
            <li class="list-group-item d-flex align-items-start flex-wrap">
              <div class="ms-2 me-auto">Stella Nowland</div><span
                class="badge bg-warning rounded-pill p-2">Freelance</span>
            </li>
            <li class="list-group-item d-flex align-items-start flex-wrap">
              <div class="ms-2 me-auto">Lola Stanford</div><span
                class="badge bg-danger text-white rounded-pill p-2">Issue</span>
            </li>
            <li class="list-group-item d-flex align-items-start flex-wrap">
              <div class="ms-2 me-auto">Caitlin Coungeau</div><span
                class="badge bg-primary text-white rounded-pill p-2">Social</span>
            </li>
            <li class="list-group-item d-flex align-items-start flex-wrap">
              <div class="ms-2 me-auto">Graciela McClaran</div><span
                class="badge bg-danger text-white rounded-pill p-2">Issue</span>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card card-absolute">
        <div class="card-header bg-secondary">
          <h5 class="txt-light">Absolute Card</h5>
        </div>
        <div class="card-body">
          <div class="d-flex list-behavior-1 align-items-center">
            <div class="flex-shrink-0"><img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}"
                alt="home"></div>
            <div class="flex-grow-1">
              <p class="mb-xl-0 mb-sm-4">We provide end to end digital solutions, right from designing your
                website/application development: Domain, Web Hosting, Email Hosting Registration, Search Engine
                Optimization and other Internet Marketing, Renewal of Services timely and effectively.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card card-absolute">
        <div class="card-header bg-success">
          <h5 class="txt-light">Absolute Card</h5>
        </div>
        <div class="card-body">
          <div class="d-flex list-behavior-1 align-items-center">
            <div class="flex-shrink-0"> <img class="tab-img img-fluid" src="{{ asset('assets/images/blog/blog.jpg') }}"
                alt="home"></div>
            <div class="flex-grow-1">
              <p class="mb-xl-0 mb-sm-4">When someone visits your homepage, your design should inspire them to stay.
                Therefore, your value proposition should be established on the homepage for visitors to select to stay
                on your website.Building trust, expressing value,to the next step all depend on a page's design.</p>
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
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection