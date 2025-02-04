@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Draggable Card</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Draggable Card</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row ui-sortable" id="draggableMultiple">
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Basic Card</h2>
          <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
        </div>
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Logo Design</li>
            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>Web Designer </li>
            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>E-Commerce</li>
            <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>UX Designer</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Default Card</h2>
          <p class="mt-1 f-m-light">You can draggable cards anywhere.</p>
        </div>
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item active bg-warning-light" aria-current="true"><i
                class="icofont icofont-arrow-right"> </i>UI Kits</li>
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Wow Animations</li>
            <li class="list-group-item"> <i class="icofont icofont-arrow-right"> </i>Apex Charts</li>
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>Starter Kits</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card b-r-0 height-equal title-line">
        <div class="card-header">
          <h2>Flat Card</h2>
          <p class="f-m-light mt-1">You can draggable cards anywhere.</p>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT</li>
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>PRODUCT DETAILS </li>
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>CART </li>
            <li class="list-group-item"><i class="icofont icofont-arrow-right"> </i>CHECKOUT</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal">
        <div class="card-header bg-warning">
          <h2 class="text-white">Warning Color Header</h2>
        </div>
        <div class="card-body">
          <h5 class="pb-2"> Web Designer </h5>
          <p class="mb-0">By following instructions and adding your own unique twist and style, you may apply your
            imagination as a web designer. The majority of the tasks you'll be assigned will have a specific due date
            and work description, but the reason you were employed was because they need a specialist to inject some
            much-needed creativity.</p>
        </div>
        <div class="card-footer">
          <h6 class="mb-0 text-end">Yuri Theme</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal">
        <div class="card-header">
          <h2>Warning Color Body</h2>
        </div>
        <div class="card-body bg-warning">
          <h5 class="pb-2 txt-light">UX Designer </h5>
          <p class="mb-0">It is the responsibility of the UX designer to make a product or service useful, pleasurable,
            and accessible. The word "user experience" is used by various industries, although it is most frequently
            related to digital design for websites and mobile applications.There is no need for coding in user
            experience design.</p>
        </div>
        <div class="card-footer">
          <h6 class="mb-0 text-end">Yuri Theme</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card height-equal">
        <div class="card-header">
          <h2>Warning Color Footer</h2>
        </div>
        <div class="card-body">
          <h5 class="pb-2">Web Developer</h5>
          <p class="mb-0">A programmer who uses the client-server architecture to create World Wide Web applications is
            known as a web developer. The apps generally employ any general-purpose programming language on the server
            and HTML, CSS, and JavaScript on the client.</p>
        </div>
        <div class="card-footer bg-warning">
          <h6 class="mb-0 text-end txt-light">Yuri Theme</h6>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/dragable/sortable.js') }}"></script>
<script src="{{ asset('assets/js/dragable/sortable-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection