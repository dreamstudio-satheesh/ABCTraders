@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Add Post</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Blog</li>
        <li class="breadcrumb-item f-w-500 active">Add Post</li>
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
          <h2>Post Edit</h2>
        </div>
        <div class="card-body add-post main-post">
          <form class="row needs-validation" novalidate="">
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="validationCustom01">Title:</label>
                <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="mb-3">
                <label>Type:</label>
                <div class="m-checkbox-inline">
                  <label for="edo-ani">
                    <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">Text
                  </label>
                  <label for="edo-ani1">
                    <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">Image
                  </label>
                  <label for="edo-ani2">
                    <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">Audio
                  </label>
                  <label for="edo-ani3">
                    <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani">Video
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <div class="col-form-label">Category:
                  <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                    <option value="AL">Lifestyle</option>
                    <option value="WY">Travel</option>
                    <option value="FD">Food</option>
                    <option value="BY">Beauty</option>
                  </select>
                </div>
              </div>
              <div class="email-wrapper">
                <div class="theme-form">
                  <div class="mb-3">
                    <label class="w-100">Content:</label>
                    <div class="toolbar-box">
                      <div id="toolbar8"><span class="ql-formats">
                          <select class="ql-size">
                            <option value="small">Small</option>
                            <option selected="">Normal</option>
                            <option value="large">Large</option>
                            <option value="huge">Huge</option>
                          </select></span><span class="ql-formats">
                          <button class="ql-bold">Bold</button>
                          <button class="ql-italic">Italic</button>
                          <button class="ql-underline">Underline</button>
                          <button class="ql-strike">Strike</button>
                          <button class="ql-script" value="sub"></button>
                          <button class="ql-script" value="super"></button></span><span class="ql-formats">
                          <button class="ql-header" value="1"></button>
                          <button class="ql-header" value="2"></button></span><span class="ql-formats">
                          <button class="ql-list" value="ordered">List</button>
                          <button class="ql-list" value="bullet">Bullet</button>
                          <button class="ql-indent" value="-1"></button>
                          <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                          <button class="ql-link">Link</button>
                          <button class="ql-image">Image</button>
                          <button class="ql-video">Video</button>
                          <select class="ql-color"></select>
                          <select class="ql-background"></select></span>
                        <!-- Add more options here--><span class="ql-formats">
                          <button class="ql-blockquote">Blockquote</button>
                          <button class="ql-code-block"></button></span><span class="ql-formats">
                          <button class="ql-align" value=""></button>
                          <button class="ql-align" value="center"></button>
                          <button class="ql-align" value="right"></button>
                          <button class="ql-align" value="justify"></button></span><span class="ql-formats">
                          <button class="ql-clean"></button></span>
                      </div>
                      <div id="editor8"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <form class="dropzone" id="singleFileUpload" action="/upload.php">
            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
              <h6 class="mb-0">Drop files here or click to upload.</h6>
            </div>
          </form>
          <div class="btn-showcase text-end">
            <button class="btn btn-primary" type="submit">Post</button>
            <input class="btn btn-light" type="reset" value="Discard">
          </div>
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
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
<script src="{{ asset('assets/js/editors/quill.js') }}"></script>
<script src="{{ asset('assets/js/custom-add-product4.js') }}"></script>
<script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
@endsection