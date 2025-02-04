@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Sample Page</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Pages</li>
        <li class="breadcrumb-item f-w-500 active">Sample Page</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Sample Card</h2>
          <p class="f-m-light mt-1">Here you can enter a sub-title for your card.</p>
        </div>
        <div class="card-body">
          <p><strong>Web Design Trends: </strong> Stay up-to-date with the latest trends in web design, such as the use
            of animations, micro-interactions, dark mode, and unique navigation techniques.Keep your website's
            navigation simple and intuitive, allowing users to find what they need easily without overwhelming them with
            options.</p>
          <p><strong>Design Tools: </strong> Information on popular design software like Adobe Photoshop, Sketch, Figma,
            or Adobe XD, along with tips and tricks for efficient workflow and collaboration.Compress and optimize
            images to improve website loading speed and overall performance, providing a better user experience.</p>
          <p><strong>Front-End Development: </strong> A basic understanding of HTML, CSS, and JavaScript can enhance
            your web design skills, enabling you to create interactive and dynamic elements.Ensure sufficient contrast
            between text and background colors to enhance readability and accessibility, especially for users with
            visual impairments.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
@endsection