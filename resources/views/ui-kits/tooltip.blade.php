@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Tooltip</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">UI Kits</li>
        <li class="breadcrumb-item f-w-500 active">Tooltip</li>
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
          <h2>Basic tooltip</h2>
          <p class="f-m-light mt-2">Use the <code>data-bs-title</code> to change tooltip title and
            <code>data-bs-toggle</code> to add tooltip attribute.
          </p>
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
        <div class="card-body">
          <button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Surprise!!! Thank you for hovering...">It's magic please hover me...
          </button>
          <h5 class="mb-1 py-4 pb-0">Inline Tooltip Content</h5>
          <p class="mb-0">Here, is some content about tooltips that you can set the<a class="txt-primary fw-bold"
              data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="tooltip"
              data-bs-original-title="popover text"> tooltip</a> inside the content with help of tooltip and also you
            can add
            <button class="btn btn-warning text-white border-0 px-3 py-1 me-0 mb-0" type="button"
              data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="button">button </button> .Tooltips helps
            you to add more and more content. A tooltip is often used to specify extra information about something when
            the user moves the mouse pointer over an element
          </p>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
&lt;button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Surprise!!! Thank you for hovering..."&gt;It's magic please hover me... &lt;/button&gt;
&lt;h5 class="mb-1 py-4 pb-0"&gt;Inline Tooltip Content&lt;/h5&gt;
&lt;p&gt;
Here, is some content about tooltips that you can set the&lt;a class="txt-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="tooltip" data-bs-original-title="popover text"&gt; tooltip&lt;/a&gt; inside the content with help of tooltip and also you can add
&lt;button class="btn btn-warning text-white border-0 px-3 py-1 me-0 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="button"&gt;button &lt;/button&gt; .Tooltips helps you to add more and more content. A tooltip is often used to specify extra information about something when the user moves the mouse pointer over an element
&lt;/p&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Colored tooltip </h2>
          <p class="f-m-light mt-2">Use the <code>btn- *</code> to change dark background color and
            <code>data-bs-placement='*'</code> to tooltip positions change.
          </p>
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
        <div class="card-body">
          <div class="common-flex">
            <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="Primary">Primary</button>
            <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="Secondary">Secondary</button>
            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="Success">Success</button>
            <button class="btn btn-warning text-black" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="Warning">Warning</button>
            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="Danger">Danger</button>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#colored-tooltip" title="Copy"><i
                  class="icofont icofont-copy-alt"></i></button>
              <pre
                class="custom-scrollbar"><code class="language-html" id="colored-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
&lt;button class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Primary"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-secondary" type=" button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Secondary"&gt;Secondary&lt;/button&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Success"&gt;Success&lt;/button&gt;
&lt;button class="btn btn-warning text-black" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Warning"&gt;Warning&lt;/button&gt;
&lt;button class="btn btn-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Danger"&gt;Danger&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Tooltip directions</h2>
          <p class="f-m-light mt-2">Use the <code>btn-*</code> to change dark background color
            and<code> data-bs-placement='*'</code>[top/right/bottom/left] to tooltip direction change.</p>
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
        <div class="card-body">
          <div class="common-flex">
            <button class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Tooltip on top">Tooltip on top</button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Tooltip on right">Tooltip on right</button>
            <button class="btn btn-success" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom"
              title="Tooltip on bottom">Tooltip on bottom</button>
            <button class="btn btn-warning" type="button" data-bs-toggle="tooltip" data-bs-placement="left"
              title="Tooltip on left">Tooltip on left</button>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#dark-tooltip" title="Copy"><i
                  class="icofont icofont-copy-alt"></i></button>
              <pre
                class="custom-scrollbar"><code class="language-html" id="dark-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
&lt;button class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;Tooltip on top&lt;/button&gt;
&lt;button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"&gt;Tooltip on right&lt;/button&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"&gt;Tooltip on bottom&lt;/button&gt;
&lt;button class="btn btn-warning" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"&gt;Tooltip on left&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>HTML elements with hover effect</h2>
          <p class="f-m-light mt-2">Use the <code>bg-*-light</code> to change light background color and
            <code>data-bs-title</code> to the content under the HTML tag.
          </p>
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
        <div class="card-body">
          <div class="common-flex">
            <button class="btn bg-primary" type="button" data-bs-toggle="tooltip" data-bs-html="true"
              data-bs-placement="top" data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;">Notifications
              Received</button>
            <button class="btn bg-warning" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;">Last
              Warning</button>
            <button class="btn bg-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="&lt;em&gt;Thank&lt;/em&gt; &lt;u&gt;you&lt;/u&gt;">It's Danger</button>
            <button class="btn bg-info" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="&lt;b&gt;Thank&lt;/b&gt; &lt;em&gt;you&lt;/em&gt;">Coming soon</button>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#hover-tooltip" title="Copy"><i
                  class="icofont icofont-copy-alt"></i></button>
              <pre
                class="custom-scrollbar"><code class="language-html" id="hover-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
&lt;button class="btn bg-primary" type="button" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="&amp;lt;em&amp;gt;Thank&amp;lt;/em&amp;gt; &amp;lt;u&amp;gt;you&amp;lt;/u&amp;gt;"&gt;Notifications Received&lt;/button&gt;
&lt;button class="btn bg-warning" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&amp;lt;b&amp;gt;Thank&amp;lt;/b&amp;gt; &amp;lt;em&amp;gt;you&amp;lt;/em&amp;gt;"&gt;Last Warning&lt;/button&gt;
&lt;button class="btn bg-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&amp;lt;em&amp;gt;Thank&amp;lt;/em&amp;gt; &amp;lt;u&amp;gt;you&amp;lt;/u&amp;gt;"&gt;It's Danger&lt;/button&gt;
&lt;button class="btn bg-info" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="&amp;lt;b&amp;gt;Thank&amp;lt;/b&amp;gt; &amp;lt;em&amp;gt;you&amp;lt;/em&amp;gt;"&gt;Coming soon&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Filled tooltip</h2>
          <p class="f-m-light mt-2">Tooltip in hover effect through fill dark color.<code>[.btn-outline-*]</code> and
            <code>data-bs-title</code> to the content under the HTML Tag.
          </p>
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
        <div class="card-body fill-tooltip">
          <div class="common-flex">
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="tooltip" data-bs-html="true"
              data-bs-placement="top" data-bs-title="Tooltip Primary">Tooltip Primary</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="Tooltip Secondary">Tooltip Secondary</button>
            <button class="btn btn-outline-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="Tooltip Success">Tooltip Success</button>
            <button class="btn btn-outline-info" type="button" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-html="true" data-bs-title="Tooltip Info">Tooltip Info</button>
            <div class="code-box-copy">
              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#filled-tooltip" title="Copy"><i
                  class="icofont icofont-copy-alt"></i></button>
              <pre
                class="custom-scrollbar"><code class="language-html" id="filled-tooltip">&lt;!--You can use attribute (data-bs-target='tooltip') to  used tooltips.--&gt;
&lt;button class="btn btn-outline-primary" type="button" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="top" data-bs-title="Tooltip Primary"&gt;Tooltip Primary&lt;/button&gt;
&lt;button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Secondary"&gt;Tooltip Secondary&lt;/button&gt;
&lt;button class="btn btn-outline-success" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Success"&gt;Tooltip Success&lt;/button&gt;
&lt;button class="btn btn-outline-info" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-title="Tooltip Info"&gt;Tooltip Info&lt;/button&gt;</code></pre>
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
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection