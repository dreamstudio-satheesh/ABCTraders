@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Helper Classes</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">UI Kits</li>
        <li class="breadcrumb-item f-w-500 active">Helper Classes</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Styles in borders</h2>
          <p class="f-m-light mt-1">
            Use the different styles of borders like: <code>border radius/border-color/border-width</code>. Use of any
            components.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Custom border-radius class</h4>
                <div class="helper-common-box">
                  <div class="helper-box b-r-0 bg-light border"></div><span>.b-r-0</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-1 bg-light border"></div><span>.b-r-1</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-2 bg-light border"></div><span>.b-r-2</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-3 bg-light border"></div><span>.b-r-3</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-4 bg-light border"></div><span>.b-r-4</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-5 bg-light border"></div><span>.b-r-5</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-6 bg-light border"></div><span>.b-r-6</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-7 bg-light border"></div><span>.b-r-7</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-8 bg-light border"></div><span>.b-r-8</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-9 bg-light border"></div><span>.b-r-9</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box b-r-10 bg-light border"></div><span>.b-r-10</span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Border color</h4>
                <div class="helper-common-box">
                  <div class="helper-box border-primary border"></div><span>.border-primary</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-secondary border"></div><span>.border-secondary</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-success border"></div><span>.border-success</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-danger border"></div><span>.border-danger</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-warning border"></div><span>.border-warning</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-info border"></div><span>.border-info</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-dark border"></div><span>.border-dark</span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Border-width</h4>
                <div class="helper-common-box">
                  <div class="helper-box border-1 border"> </div><span>.border-1</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-2 border"> </div><span>.border-2</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-3 border"> </div><span>.border-3</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-4 border"> </div><span>.border-4</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-5 border"> </div><span>.border-5</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-6 border"> </div><span>.border-6</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-7 border"> </div><span>.border-7</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-8 border"> </div><span>.border-8</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-9 border"> </div><span>.border-9</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box border-10 border"> </div><span>.border-10 </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper light-background h-100 dark-helper">
                <h4 class="mb-3">Text colors</h4>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-primary">C </div><span>.txt-primary</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-secondary">C </div><span>.txt-secondary</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-success">C </div><span>.txt-success</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-danger">C </div><span>.txt-danger</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-warning">C </div><span>.txt-warning</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-info">C </div><span>.txt-info</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-dark">C </div><span>.txt-dark</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box helper-text border txt-light bg-dark">C </div><span>.txt-light</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Borders and displays</h2>
          <p class="f-m-light mt-1">
            Use border utilities to add or remove an element's borders.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xl-4 col-sm-6">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Additive border </h4>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border"></div><span>.border</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border-top"></div><span>.border-top</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border-bottom"></div><span>.border-bottom</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border-start"></div><span>.border-start</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border-end"></div><span>.border-end</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Subtractive border</h4>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border border-0"> </div><span>.border-0</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border border-top-0"> </div><span>.border-top-0</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border border-end-0"> </div><span>.border-end-0</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border border-bottom-0"> </div><span>.border-bottom-0</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light border border-start-0"> </div><span>.border-start-0</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Additive radius</h4>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded"></div><span>.rounded</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-top"></div><span>.rounded-top</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-end"></div><span>.rounded-end</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-bottom"></div><span>.rounded-bottom</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-start"></div><span>.rounded-start</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-pill"></div><span>.rounded-pill</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-circle"></div><span>.rounded-circle</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-radius radius-wrapper rounded-0"></div><span>.rounded-0 </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Background colors </h2>
          <p class="f-m-light mt-1">
            Use the <code>.bg-* </code>and <code>.alert-light-* </code>colors in yuri theme. Use of any components.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xl-4 col-sm-6">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Dark background</h4>
                <div class="helper-common-box">
                  <div class="helper-box bg-primary"></div><span>.bg-primary </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-secondary"></div><span>.bg-secondary </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-success"></div><span>.bg-success </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-danger"></div><span>.bg-danger </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-warning"></div><span>.bg-warning </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-info"></div><span>.bg-info </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-dark"></div><span>.bg-dark </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box bg-light"></div><span>.bg-light </span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Light backgrounds</h4>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-primary"> </div><span>.alert-light-primary </span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-secondary"></div><span>.alert-light-secondary</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-success"></div><span>.alert-light-success</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-danger"></div><span>.alert-light-danger</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-warning"></div><span>.alert-light-warning</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-info"></div><span>.alert-light-info</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-dark"></div><span>.alert-light-dark</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box alert-light-light"></div><span>.light-background</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12">
              <div class="border-wrapper h-100 border">
                <h4 class="mb-3">Extended background colors</h4>
                <div class="helper-common-box">
                  <div class="helper-box light-card"> </div><span>.light-card</span>
                </div>
                <div class="helper-common-box">
                  <div class="helper-box light-background border"></div><span>.light-background </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Border color</h2>
          <p class="f-m-light mt-1">
            Use the <code>.b-*/.b-t-*/.b-b-*/.b-l-*/.b-r-* </code>class for borders.</p>
        </div>
        <div class="card-body">
          <div class="gradient-border">
            <div class="helper-common-box">
              <div class="helper-box b-primary border fill-wrapper"> </div><span>.b-primary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-primary border fill-wrapper"> </div><span>.b-t-primary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-primary border fill-wrapper"> </div><span>.b-b-primary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-primary border fill-wrapper"> </div><span>.b-l-primary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-primary border fill-wrapper"> </div><span>.b-r-primary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-secondary border fill-wrapper"> </div><span>.b-secondary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-secondary border fill-wrapper"> </div><span>.b-t-secondary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-secondary border fill-wrapper"> </div><span>.b-b-secondary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-secondary border fill-wrapper"> </div><span>.b-l-secondary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-secondary border fill-wrapper"> </div><span>.b-r-secondary</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-success border fill-wrapper"> </div><span>.b-success</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-success border fill-wrapper"> </div><span>.b-t-success</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-success border fill-wrapper"> </div><span>.b-b-success</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-success border fill-wrapper"> </div><span>.b-l-success</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-success border fill-wrapper"> </div><span>.b-r-success</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-danger border fill-wrapper"> </div><span>.b-danger</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-danger border fill-wrapper"> </div><span>.b-t-danger</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-danger border fill-wrapper"> </div><span>.b-b-danger</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-danger border fill-wrapper"> </div><span>.b-l-danger</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-danger border fill-wrapper"> </div><span>.b-r-danger</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-warning border fill-wrapper"> </div><span>.b-warning</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-warning border fill-wrapper"> </div><span>.b-t-warning</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-warning border fill-wrapper"> </div><span>.b-b-warning</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-warning border fill-wrapper"> </div><span>.b-l-warning</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-warning border fill-wrapper"> </div><span>.b-r-warning</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-info border fill-wrapper"> </div><span>.b-info</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-info border fill-wrapper"> </div><span>.b-t-info</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-info border fill-wrapper"> </div><span>.b-b-info</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-info border fill-wrapper"> </div><span>.b-l-info</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-info border fill-wrapper"> </div><span>.b-r-info</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-dark border fill-wrapper"> </div><span>.b-dark</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-dark border fill-wrapper"> </div><span>.b-t-dark</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-dark border fill-wrapper"> </div><span>.b-b-dark</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-dark border fill-wrapper"> </div><span>.b-l-dark</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-dark border fill-wrapper"> </div><span>.b-r-dark</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-light border fill-wrapper"> </div><span>.b-light</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-t-light border fill-wrapper"> </div><span>.b-t-light</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-b-light border fill-wrapper"> </div><span>.b-b-light</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-l-light border fill-wrapper"> </div><span>.b-l-light</span>
            </div>
            <div class="helper-common-box">
              <div class="helper-box b-r-light border fill-wrapper"> </div><span>.b-r-light</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Images sizes</h2>
          <p class="f-m-light mt-1">
            Use the width and height of images class like: <code>.img-* </code>and <code>.img-h-*</code>.</p>
        </div>
        <div class="card-body">
          <div class="gradient-border gap-3"><img class="img-30 img-h-30"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-30"><img class="img-40 img-h-40"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-40"><img class="img-50 img-h-50"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-50"><img class="img-60 img-h-60"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-60"><img class="img-70 img-h-70"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-70"><img class="img-80 img-h-80"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-80"><img class="img-90 img-h-90"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-90"><img class="img-100 img-h-100"
              src="{{ asset('assets/images/blog/comment.jpg') }}" alt="img-size-100"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Font-style</h2>
          <p class="f-m-light mt-1">
            Use the font-style like: <code> .f-s-*[normal/italic/oblique/initial/inherit]</code>.</p>
        </div>
        <div class="card-body">
          <p class="f-s-normal">
            This is a <strong>.f-s-normal</strong> font-style </p>
          <p class="f-s-italic">This is a <strong>.f-s-italic</strong> font-style </p>
          <p class="f-s-oblique">This is a <strong>.f-s-oblique</strong> font-style </p>
          <p class="f-s-initial">This is a <strong>.f-s-initial</strong> font-style </p>
          <p class="f-s-inherit">This is a <strong>.f-s-inherit</strong> font-style </p>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Font weight </h2>
          <p class="f-m-light mt-1">
            Use the font-weight classes like: <code>.f-w-* [100/300/400/600/700/900]</code></p>
        </div>
        <div class="card-body">
          <div class="helper-common-box">
            <div class="f-w-100">
              You can set light font weight heading .f-w-100</div>
          </div>
          <div class="helper-common-box">
            <div class="f-w-300">You can set light font weight heading .f-w-300</div>
          </div>
          <div class="helper-common-box">
            <div class="f-w-400">You can set light font weight heading .f-w-400</div>
          </div>
          <div class="helper-common-box">
            <div class="f-w-600">You can set bolder font weight heading .f-w-600</div>
          </div>
          <div class="helper-common-box">
            <div class="f-w-700">You can set bold font weight heading .f-w-700</div>
          </div>
          <div class="helper-common-box">
            <div class="f-w-900">You can set bold font weight heading .f-w-900</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Text colors</h2>
          <p class="f-m-light mt-1">
            Use the text color for <code>.font-*</code> class.</p>
        </div>
        <div class="card-body">
          <div class="helper-common-box"></div>
          <div class="font-primary">
            This is a <strong>font-primary </strong> text used class as .font-primary</div>
          <div class="helper-common-box"></div>
          <div class="font-secondary">This is a <strong>font-secondary </strong> text used class as .font-secondary
          </div>
          <div class="helper-common-box"></div>
          <div class="font-success">This is a <strong>font-success </strong> text used class as .font-success</div>
          <div class="helper-common-box"></div>
          <div class="font-danger">This is a <strong>font-danger </strong> text used class as .font-danger</div>
          <div class="helper-common-box"></div>
          <div class="font-warning">This is a <strong>font-warning </strong> text used class as .font-warning</div>
          <div class="helper-common-box"></div>
          <div class="font-info">This is a <strong>font-info </strong> text used class as .font-info</div>
          <div class="helper-common-box"></div>
          <div class="font-dark">This is a <strong>font-dark </strong> text used class as .font-dark</div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Padding</h2>
          <p class="f-m-light mt-1">
            Use the padding classes like: <code>.p-* [10/15/20/25/30/35/40/45/50]</code></p>
        </div>
        <div class="card-body">
          <div class="border-wrapper h-100 light-background dark-helper">
            <h4 class="mb-3">Padding</h4>
            <div class="helper-common-box helper-p-wrapper">
              <div class="helper-p-box p-10 bg-light border"><span>.p-10</span></div>
              <div class="helper-p-box p-15 bg-light border"><span>.p-15</span></div>
              <div class="helper-p-box p-20 bg-light border"><span>.p-20</span></div>
              <div class="helper-p-box p-25 bg-light border"><span>.p-25</span></div>
              <div class="helper-p-box p-30 bg-light border"><span>.p-30</span></div>
              <div class="helper-p-box p-35 bg-light border"><span>.p-35</span></div>
              <div class="helper-p-box p-40 bg-light border"><span>.p-40</span></div>
              <div class="helper-p-box p-45 bg-light border"><span>.p-45</span></div>
              <div class="helper-p-box p-50 bg-light border"><span>.p-50</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Only one side padding</h2>
          <p class="f-m-light mt-1">
            Use the padding classes like: <code>.p-l-*/.p-r-*/.p-t-*/.p-b-*</code></p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Left</h4>
                <div class="common-p-box">
                  <span>.p-l-10</span><span>.p-l-15</span><span>.p-l-20</span><span>.p-l-25</span><span>.p-l-30</span><span>.p-l-35</span><span>.p-l-40</span><span>.p-l-45</span><span>.p-l-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Right</h4>
                <div class="common-p-box">
                  <span>.p-r-10</span><span>.p-r-15</span><span>.p-r-20</span><span>.p-r-25</span><span>.p-r-30</span><span>.p-r-35</span><span>.p-r-40</span><span>.p-r-45</span><span>.p-r-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Top</h4>
                <div class="common-p-box">
                  <span>.p-t-10</span><span>.p-t-15</span><span>.p-t-20</span><span>.p-t-25</span><span>.p-t-30</span><span>.p-t-35</span><span>.p-t-40</span><span>.p-t-45</span><span>.p-t-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Bottom</h4>
                <div class="common-p-box">
                  <span>.p-b-10</span><span>.p-b-15</span><span>.p-b-20</span><span>.p-b-25</span><span>.p-b-30</span><span>.p-b-35</span><span>.p-b-40</span><span>.p-b-45</span><span>.p-b-50
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Margin</h2>
          <p class="f-m-light mt-1">
            Use the margin classes like: <code>.m-* [10/15/20/25/30/35/40/45/50]</code></p>
        </div>
        <div class="card-body">
          <div class="gradient-border">
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-10 border bg-light"></div><span>.m-10</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-15 border bg-light"></div><span>.m-15</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-20 border bg-light"></div><span>.m-20</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-25 border bg-light"></div><span>.m-25</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-30 border bg-light"></div><span>.m-30</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-35 border bg-light"></div><span>.m-35</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-40 border bg-light"></div><span>.m-40</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-45 border bg-light"></div><span>.m-45</span>
            </div>
            <div class="helper-common-box gap-0 mb-0">
              <div class="helper-box m-50 border bg-light"></div><span>.m-50</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Only one side margin</h2>
          <p class="f-m-light mt-1">
            Use the margin classes like: <code>.m-l-*/.m-r-*/.m-t-*/.m-b-*</code></p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Margin Left</h4>
                <div class="common-p-box">
                  <span>.m-l-10</span><span>.m-l-15</span><span>.m-l-20</span><span>.m-l-25</span><span>.m-l-30</span><span>.m-l-35</span><span>.m-l-40</span><span>.m-l-45</span><span>.m-l-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Right</h4>
                <div class="common-p-box">
                  <span>.m-r-10</span><span>.m-r-15</span><span>.m-r-20</span><span>.m-r-25</span><span>.m-r-30</span><span>.m-r-35</span><span>.m-r-40</span><span>.m-r-45</span><span>.m-r-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Top</h4>
                <div class="common-p-box">
                  <span>.m-t-10</span><span>.m-t-15</span><span>.m-t-20</span><span>.m-t-25</span><span>.m-t-30</span><span>.m-t-35</span><span>.m-t-40</span><span>.m-t-45</span><span>.m-t-50
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
              <div class="border-wrapper h-100 light-background dark-helper">
                <h4 class="mb-3">Padding Bottom</h4>
                <div class="common-p-box">
                  <span>.m-b-10</span><span>.m-b-15</span><span>.m-b-20</span><span>.m-b-25</span><span>.m-b-30</span><span>.m-b-35</span><span>.m-b-40</span><span>.m-b-45</span><span>.m-b-50
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Font sizes</h2>
          <p class="f-m-light mt-1">
            Use the font-size for <code>.f-* [14/16/18/20/22/24/26/28/30/32/34/36/38/40]</code>.</p>
        </div>
        <div class="card-body">
          <div class="gradient-border">
            <div class="font-wrapper border">
              <div class="f-14">Font-size .f-14</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-16">Font-size .f-16</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-18">Font-size .f-18</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-20">Font-size .f-20</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-22">Font-size .f-22</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-24">Font-size .f-24</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-26">Font-size .f-26</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-28">Font-size .f-28</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-30">Font-size .f-30</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-32">Font-size .f-32</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-34">Font-size .f-34</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-36">Font-size .f-36</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-38">Font-size .f-38</div>
            </div>
            <div class="font-wrapper border">
              <div class="f-40">Font-size .f-40</div>
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