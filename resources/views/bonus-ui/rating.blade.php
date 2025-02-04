@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Rating</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Rating</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header rating-header">
          <h2>1 to 10 rating bar</h2>
          <p class="f-m-light mt-1">Rating is displayed using <code>#u-rating-1to10</code> id using javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-1to10" name="rating" autocomplete="off">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7" selected="selected">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Movie rating bar </h2>
          <p class="f-m-light mt-1">Movie rating is displayed using <code>#u-rating-movie</code> id using javascript.
          </p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-movie" name="rating" autocomplete="off">
              <option value="Bad">Bad</option>
              <option value="Mediocre">Mediocre</option>
              <option value="Good" selected="selected">Good</option>
              <option value="Awesome">Awesome</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Square rating bar</h2>
          <p class="f-m-light mt-1">Square rating is displayed using <code>#u-rating-square </code> id using javascript.
          </p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-square" name="rating" autocomplete="off">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Pill rating bar </h2>
          <p class="f-m-light mt-1">Pill rating is displayed using <code>#u-rating-pill </code> id using javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-pill" name="rating" autocomplete="off">
              <option value="A">A </option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F </option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Reversed rating bar </h2>
          <p class="f-m-light mt-1">Reversed rating is displayed using <code>#u-rating-reversed  </code> id using
            javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-reversed" name="rating" autocomplete="off">
              <option value="Strongly Agree">Strongly Agree</option>
              <option value="Agree">Agree</option>
              <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
              <option value="Disagree">Disagree</option>
              <option value="Strongly Disagree">Strongly Disagree</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Star rating bar </h2>
          <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome </code> id using
            javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-fontawesome" name="rating" autocomplete="off">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Horizontal rating bar </h2>
          <p class="f-m-light mt-1">Horizontal rating is displayed using <code>#u-rating-horizontal</code> id using
            javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <select id="u-rating-horizontal" name="rating" autocomplete="off">
              <option value="10">10</option>
              <option value="9">9</option>
              <option value="8">8</option>
              <option value="7">7</option>
              <option value="6">6</option>
              <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1" selected="selected">1</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Current rating bar</h2>
          <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome-o </code> id using
            javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <div class="star-ratings">
              <div class="stars stars-example-fontawesome-o">
                <select id="u-rating-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select><span class="title current-rating">Current rating: <span class="value"></span></span><span
                  class="title your-rating hidden">Your rating: <span class="value"></span><a class="clear-rating"
                    href="#"><i class="fa fa-times-circle"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Animated rating bar</h2>
          <p class="f-m-light mt-1">Star rating is displayed using <code>#u-rating-fontawesome-o </code> id using
            javascript.</p>
        </div>
        <div class="card-body">
          <div class="rating-container">
            <ul class="feedback">
              <li class="angry me-0">
                <div>
                  <svg class="eye left">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="eye right">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="mouth">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                  </svg>
                </div>
              </li>
              <li class="sad me-0">
                <div>
                  <svg class="eye left">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="eye right">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="mouth">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                  </svg>
                </div>
              </li>
              <li class="ok me-0">
                <div></div>
              </li>
              <li class="good active me-0">
                <div>
                  <svg class="eye left">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="eye right">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="mouth">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#mouth') }}"></use>
                  </svg>
                </div>
              </li>
              <li class="happy me-0">
                <div>
                  <svg class="eye left">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                  <svg class="eye right">
                    <use xlink:href="{{ asset('assets/svg/icon-sprite.svg#eye') }}"></use>
                  </svg>
                </div>
              </li>
            </ul>
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
<script src="{{ asset('assets/js/rating/emoji_rating.js') }}"></script>
@endsection