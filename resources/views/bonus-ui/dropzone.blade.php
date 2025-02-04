@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/filepond-plugin-image-preview.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Dropzone</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Dropzone</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default file upload</h2>
          <p class="f-m-light mt-1">We use the create method to turn a<code> &lt;input type="file"&gt;</code> into a
            filepond drop area.<code>[https://pqina.nl/filepond/]</code></p>
        </div>
        <div class="card-body">
          <input class="no-preview" type="file">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Image preview </h2>
          <p class="f-m-light mt-1">We use the create method to turn a<code> &lt;input type="file"&gt;</code> into a
            filepond drop area.<code>[https://pqina.nl/filepond/]</code></p>
        </div>
        <div class="card-body">
          <input class="show-preview" type="file">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Single file upload</h2>
          <p class="f-m-light mt-1"></p>Use the <code>.dropzone </code> class through create upload
          files.<code>[https://www.dropzone.dev/].</code>
        </div>
        <div class="card-body">
          <form class="dropzone" id="singleFileUpload" action="/upload.php">
            <div class="dropzone-wrapper">
              <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone.
                  Selected files are <strong>not</strong> actually uploaded.)</span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Multi file upload</h2>
          <p class="f-m-light mt-1">Use the <code>.dropzone </code> class through create upload
            files.<code>[https://www.dropzone.dev/].</code></p>
        </div>
        <div class="card-body">
          <form class="dropzone dropzone-secondary" id="multiFileUpload" action="/upload.php">
            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
              <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone.
                Selected files are <strong>not</strong> actually uploaded.)</span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
<script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('assets/js/filepond/filepond-plugin-file-rename.js') }}"></script>
<script src="{{ asset('assets/js/filepond/filepond-plugin-image-transform.js') }}"></script>
<script src="{{ asset('assets/js/filepond/filepond.js') }}"></script>
<script src="{{ asset('assets/js/filepond/custom-filepond.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection