@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Select2</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Form Widgets</li>
        <li class="breadcrumb-item f-w-500 active">Select2</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="select2-drpdwn">
    <div class="row">
      <!-- Tagify select2 start-->
      <div class="col-md-12">
        <div class="card title-line">
          <div class="card-header">
            <h2>Single-value Select</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for drag and sort options available.</p>
          </div>
          <div class="card-body">
            <form class="row g-3">
              <div class="col-xl-3 col-sm-6">
                <input class="selectMode select-2-primary" name="tags-select-mode" placeholder="Please select">
              </div>
              <div class="col-xl-3 col-sm-6">
                <input class="selectMode select-2-secondary" name="tags-select-value-mode" placeholder="Please select">
              </div>
              <div class="col-xl-3 col-sm-6">
                <input class="selectMode select-2-light" name="tags-select-v-mode" placeholder="Please select">
              </div>
              <div class="col-xl-3 col-sm-6">
                <input class="selectMode select-2-warning" name="tags-s-value-mode" placeholder="Please select">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Default Select </h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select options and edit.</p>
          </div>
          <div class="card-body">
            <form>
              <input name="basic" value="tag1, tag2, tag3, tag4 autofocus">
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Random Suggestions</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select options.</p>
          </div>
          <div class="card-body">
            <form>
              <input class="some_class_name" name="input-custom-dropdown" placeholder="write some tags"
                value="tivo, roxo, sheltos, viho, zeta, koho">
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Colors Select Options</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select colors options.</p>
          </div>
          <div class="card-body">
            <form>
              <input name="tags3"
                value="[{&quot;value&quot;:&quot;point&quot;}, {&quot;value&quot;:&quot;soft&quot;}, {&quot;value&quot;:&quot;horse&quot;}, {&quot;value&quot;:&quot;flood&quot;}, {&quot;value&quot;:&quot;asset&quot;}]"
                pattern="^[A-Za-z_✲ ]{1,15}$">
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Flags Selection</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select flags options.</p>
          </div>
          <div class="card-body">
            <form>
              <input class="countries" name="tags3-1" placeholder="Try to add tags from the list">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Readonly Options</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for readonly options.</p>
          </div>
          <div class="card-body">
            <form>
              <input name="tags4" readonly="" value="tag1, tag 2, another tag">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Read and Write Options</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for read and write options.</p>
          </div>
          <div class="card-body">
            <form>
              <input class="readonlyMix" name="tags-readonly-mix" placeholder="Type something"
                value="[                        {                        &quot;value&quot;    : &quot;foo&quot;,                        &quot;readonly&quot; : true,                        &quot;title&quot;    : &quot;read-only tag&quot;                        },                        {                        &quot;value&quot;    : &quot;bar&quot;                        },                        {                        &quot;value&quot;    : &quot;Locked tag&quot;,                        &quot;readonly&quot; : true,                        &quot;title&quot;    : &quot;Another readonly tag&quot;                        }                        ]">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Disabled Readonly</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for readonly option available.</p>
          </div>
          <div class="card-body">
            <form>
              <input name="disabledInput" disabled="" value="tag1, tag 2, another tag">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Customize Emails</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select email options.</p>
          </div>
          <div class="card-body">
            <form>
              <input class="customLook" value="pixelstrap.theme@website.com">
              <button type="button">+</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Telephone Input</h2>
            <p class="f-m-light mt-1">
              Select the country and enter your telephone number.</p>
          </div>
          <div class="card-body">
            <form class="international-num">
              <input id="country" type="tel">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-6">
        <div class="card title-line">
          <div class="card-header">
            <h2>Movie Suggestions</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select movie options.</p>
          </div>
          <div class="card-body">
            <form>
              <textarea name="tags2"
                placeholder="Enter movie names">[{&quot;value&quot;:&quot;Hot Sit&quot;}, {&quot;value&quot;:&quot;The Matrix&quot;}]</textarea>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card height-equal title-line">
          <div class="card-header">
            <h2>Autocomplete Words</h2>
            <p class="f-m-light mt-1">
              Enter any letter and display autocomplete words.</p>
          </div>
          <div class="card-body">
            <form class="international-num row">
              <div class="col-12">
                <label for="autokeyword">Search programming language </label>
              </div>
              <div class="col-12">
                <input id="autokeyword" type="text" placeholder="Search.." onkeyup="getValue(this.value)">
                <div class="results"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card height-equal title-line">
          <div class="card-header">
            <h2>Select Input using Search Option</h2>
            <p class="f-m-light mt-1">
              Use search option through select any options.</p>
          </div>
          <div class="card-body">
            <div class="select-box">
              <div class="options-container">
                <div class="selection-option">
                  <input class="radio" id="webdesigner" type="radio" name="category">
                  <label class="mb-0" for="webdesigner">web-designer</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="film" type="radio" name="category">
                  <label class="mb-0" for="film">Film &amp; Animation</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="software" type="radio" name="category">
                  <label class="mb-0" for="software">software-engineer</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="art" type="radio" name="category">
                  <label class="mb-0" for="art">Art</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="music" type="radio" name="category">
                  <label class="mb-0" for="music">Music</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="travel" type="radio" name="category">
                  <label class="mb-0" for="travel">Travel &amp; Events</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="sports" type="radio" name="category">
                  <label class="mb-0" for="sports">Sports</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="news" type="radio" name="category">
                  <label class="mb-0" for="news">News &amp; Politics</label>
                </div>
                <div class="selection-option">
                  <input class="radio" id="tutorials" type="radio" name="category">
                  <label class="mb-0" for="tutorials">Tutorials</label>
                </div>
              </div>
              <div class="selected-box">Select Your Profession</div>
              <div class="search-box">
                <input type="text" placeholder="Start Typing...">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card title-line">
          <div class="card-header">
            <h2>Render Suggestions List Manually</h2>
            <p class="f-m-light mt-1">
              Use the tagify plugin for select random options.</p>
          </div>
          <div class="card-body">
            <form>
              <input name="tags-manual-suggestions" placeholder="write some tags">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
<script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/telephone-input.js') }}"></script>
<script src="{{ asset('assets/js/select2/custom-inputsearch.js') }}"></script>
<script src="{{ asset('assets/js/select2/select3-custom.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection