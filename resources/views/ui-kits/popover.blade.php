@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Popover</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">UI Kits</li>
        <li class="breadcrumb-item f-w-500 active">Popover</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row popover-main">
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic popover</h2>
          <p class="f-m-light mt-2">Use the<code> data-bs-toggle='popover' </code>through popover above buttons. </p>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"> </i></li>
            </ul>
          </div>
        </div>
        <div class="card-body common-flex popover-wrapper">
          <button class="btn btn-primary example-popover" type="button" data-bs-toggle="popover"
            data-bs-placement="left" title="Basic Popover"
            data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio.">Hurry
            Up! </button>
          <button class="example-popover btn btn-warning" type="button" data-bs-trigger="hover" data-container="body"
            data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px"
            data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building.">Hover
            tooltip</button><a class="btn btn-lg btn-secondary" tabindex="0" role="button" data-bs-toggle="popover"
            data-bs-trigger="focus" title="Dismissible popover" data-bs-title="Dismissible popover"
            data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered.">Dismissible
            popover</a>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#hover-variations" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre
              class="custom-scrollbar"><code class="language-html" id="hover-variations">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons.--&gt;
&lt;div class="card-body common-flex"&gt;
&lt;button class="btn btn-primary example-popover" type="button" data-bs-toggle="popover" title="Basic Popover" data-bs-content="If the package restore doesn't help, you can look at the Output window in the Visual Studio."&gt;Hurry Up! &lt;/button&gt;
&lt;button class="example-popover btn btn-warning" type="button" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Hover Popover" data-offset="-20px -20px" data-bs-content=" Several utility instruction sets have been featured in the Bootstrap 4 to promote very easy learning for beginners in the business of web building."&gt;Hover tooltip&lt;/button&gt;
&lt;a class="btn btn-lg btn-secondary" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-title="Dismissible popover" data-bs-content="You are able to even develop and suggest improvements to the Bootstrap 4 before its final version is delivered."&gt;Dismissible popover&lt;/a&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Popover direction</h2>
          <p class="f-m-light mt-2">Use the<code> data-bs-toggle='popover' </code>through popover directions above
            buttons. </p>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"> </i></li>
            </ul>
          </div>
        </div>
        <div class="card-body common-flex popover-wrapper">
          <button class="example-popover btn btn-success" type="button" data-container="body" data-bs-toggle="popover"
            data-bs-placement="top" title="Popover On Top"
            data-bs-content="Popovers need the tooltip plugin considering that a dependency.">Popover on top</button>
          <button class="example-popover btn btn-danger" type="button" data-container="body" data-bs-toggle="popover"
            data-bs-placement="right" title="Popover On Right"
            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
            on right</button>
          <button class="example-popover btn btn-warning" type="button" data-container="body" data-bs-toggle="popover"
            data-bs-placement="bottom" title="Popover On Bottom"
            data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc).">Popover
            on bottom</button>
          <button class="example-popover btn btn-info" type="button" data-container="body" data-bs-toggle="popover"
            data-bs-placement="left" title="Popover On Left"
            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
            on left</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#direction-variations"
              title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            <pre
              class="custom-scrollbar"><code class="language-html" id="direction-variations">&lt;!--You can use attribute (data-bs-toggle='popover') through make popover on buttons(top/bottom/left/right).--&gt;
&lt;button class="example-popover btn btn-success" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Popover On Top" data-bs-content="Popovers need the tooltip plugin considering that a dependency."&gt;Popover on top&lt;/button&gt;
&lt;button class="example-popover btn btn-danger" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Popover On Right" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on right&lt;/button&gt;
&lt;button class="example-popover btn btn-warning" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Popover On Bottom" data-bs-content="Identify container:to evade rendering problems in more complex components (like Bootstrap input groups, button groups, etc)."&gt;Popover on bottom&lt;/button&gt;
&lt;button class="example-popover btn btn-info" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover on left&lt;/button&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Popover offset </h2>
          <p class="f-m-light mt-2">Use the<code> data-bs-offset="*,*"</code> through popover offset above buttons. </p>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"> </i></li>
            </ul>
          </div>
        </div>
        <div class="card-body common-flex popover-wrapper">
          <button class="btn btn-primary" type="button" data-bs-offset="50,0" data-bs-toggle="popover"
            data-bs-delay-show="5000" title="Popover title"
            data-bs-content="And here's some amazing content. It's very engaging. Right?"
            data-kt-initialized="1">Popover offset 50</button>
          <button class="example-popover btn btn-dark" type="button" data-bs-offset="-50,0" data-container="body"
            data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left"
            data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself.">Popover
            offset -50</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#offset-variations" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="offset-variations">&lt;!--You can use data-bs-offset="" through set popover offset --&gt;
&lt;button class="btn btn-primary" type="button" data-bs-offset="50,0" data-bs-toggle="popover" data-bs-delay-show="5000" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-kt-initialized="1"&gt;Popover offset 50
&lt;/button&gt;
&lt;button class="example-popover btn btn-dark" type="button" data-bs-offset="-50,0" data-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover On Left" data-bs-content="Popovers are opt-in for effectiveness causes, in this way you have to initialize them yourself."&gt;Popover offset -50
&lt;/button&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/popover-custom.js') }}"></script>
@endsection