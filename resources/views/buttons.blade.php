@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Default Style</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Buttons</li>
        <li class="breadcrumb-item f-w-500 active">Default Style</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Square Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Used<code>.btn-square</code> class to square button.</p>
        </div>
        <div class="card-body common-flex">
          <button class="btn btn-square btn-primary">Primary Button</button>
          <button class="btn btn-square btn-secondary">Secondary Button</button>
          <button class="btn btn-square btn-success">Success Button</button>
          <button class="btn btn-square btn-info">Info Button</button>
          <button class="btn btn-square btn-warning">Warning Button</button>
          <button class="btn btn-square btn-danger">Danger Button</button>
          <button class="btn btn-square btn-light">Light Button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head1">&lt;!-- Code Box Copy begin --&gt;
&lt;button class="btn btn-square btn-primary"&gt;Primary Button&lt;/button&gt;
&lt;button class="btn btn-square btn-secondary"&gt;Secondary Button&lt;/button&gt;
&lt;button class="btn btn-square btn-success"&gt;Success Button&lt;/button&gt;
&lt;button class="btn btn-square btn-info"&gt;Info Button&lt;/button&gt;
&lt;button class="btn btn-square btn-warning"&gt;Warning Button&lt;/button&gt;
&lt;button class="btn btn-square btn-danger"&gt;Danger Button&lt;/button&gt;
&lt;button class="btn btn-square btn-light"&gt;Light Button&lt;/button&gt;
&lt;!-- Code Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Default Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Use the<code>.btn </code>class for set default buttons and set background color like
            this : <code>.bg-* [primary/secondary..]. </code></p>
        </div>
        <div class="card-body common-flex">
          <button class="btn btn-primary" type="button" data-bs-toggle="tooltip" title="btn btn-primary">Primary
            Button</button>
          <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="btn btn-secondary">Secondary
            Button</button>
          <button class="btn btn-success" type="button" data-bs-toggle="tooltip" title="btn btn-success">Success
            Button</button>
          <button class="btn btn-info" type="button" data-bs-toggle="tooltip" title="btn btn-info">Info Button</button>
          <button class="btn btn-warning" type="button" data-bs-toggle="tooltip" title="btn btn-warning">Warning
            Button</button>
          <button class="btn btn-danger" type="button" data-bs-toggle="tooltip" title="btn btn-danger">Danger
            Button</button>
          <button class="btn btn-light" type="button" data-bs-toggle="tooltip" title="btn btn-light">Light
            Button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre
              class="custom-scrollbar"><code class="language-html" id="example-head2">&lt;button class="btn btn-primary" type="button" data-bs-toggle="tooltip" title="btn btn-primary"&gt;Primary Button&lt;/button&gt;
&lt;button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="btn btn-secondary"&gt;Secondary Button&lt;/button&gt;
&lt;button class="btn btn-success" type="button" data-bs-toggle="tooltip" title="btn btn-success"&gt;Success Button&lt;/button&gt;
&lt;button class="btn btn-info" type="button" data-bs-toggle="tooltip" title="btn btn-info"&gt;Info Button&lt;/button&gt;
&lt;button class="btn btn-warning" type="button" data-bs-toggle="tooltip" title="btn btn-warning"&gt;Warning Button&lt;/button&gt;
&lt;button class="btn btn-danger" type="button" data-bs-toggle="tooltip" title="btn btn-danger"&gt;Danger Button&lt;/button&gt;
&lt;button class="btn btn-light" type="button" data-bs-toggle="tooltip" title="btn btn-light"&gt;Light Button&lt;/button&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Button Sizes</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Use the <code>.btn-lg,.btn-sm,.btn-xs </code>for sizes of buttons</p>
        </div>
        <div class="card-body common-flex align-items-center buttons-box">
          <button class="btn btn-light-primary btn-lg b-r-8">Large button</button>
          <button class="btn btn-light-secondary b-r-8">Default button</button>
          <button class="btn btn-light-warning btn-sm b-r-8">Small button </button>
          <button class="btn btn-light-success btn-xs b-r-6">Extra small button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head3">&lt;button class="btn btn-light-primary btn-lg b-r-8"&gt;Large button&lt;/button&gt;
&lt;button class="btn btn-light-secondary b-r-8"&gt;Default button&lt;/button&gt;
&lt;button class="btn btn-light-warning btn-sm b-r-8"&gt;Small button &lt;/button&gt;
&lt;button class="btn btn-light-success btn-xs b-r-6"&gt;Extra small button&lt;/button&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Outline Button Sizes</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Use the <code>.btn-lg,.btn-sm,.btn-xs </code>for sizes of buttons</p>
        </div>
        <div class="card-body common-flex align-items-center">
          <button class="btn btn-outline-primary btn-lg b-r-8">Large button</button>
          <button class="btn btn-outline-secondary b-r-8">Default button</button>
          <button class="btn btn-outline-warning btn-sm b-r-8">Small button </button>
          <button class="btn btn-outline-success btn-xs b-r-6">Extra small button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-outline-primary btn-lg b-r-8"&gt;Large button&lt;/button&gt;
&lt;button class="btn btn-outline-secondary b-r-8"&gt;Default button&lt;/button&gt;
&lt;button class="btn btn-outline-warning btn-sm b-r-8"&gt;Small button &lt;/button&gt;
&lt;button class="btn btn-outline-success btn-xs b-r-6"&gt;Extra small button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Rounded Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Add <code>.btn-pill</code> class for rounded buttons.</p>
        </div>
        <div class="card-body common-flex buttons-box">
          <button class="btn btn-pill btn-light-primary">Contacts </button>
          <button class="btn btn-pill btn-light-dark">Users</button>
          <button class="btn btn-pill btn-light-success">Chats</button>
          <button class="btn btn-pill btn-light-info">Animation</button>
          <button class="btn btn-pill btn-light-warning">Widgets</button>
          <button class="btn btn-pill btn-light-danger">Project</button>
          <button class="btn btn-pill btn-light-light">Icons</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-pill btn-light-primary"&gt;Contacts &lt;/button&gt;
&lt;button class="btn btn-pill btn-light-secondary"&gt;Users&lt;/button&gt;
&lt;button class="btn btn-pill btn-light-success"&gt;Chats&lt;/button&gt;
&lt;button class="btn btn-pill btn-light-info"&gt;Animation&lt;/button&gt;
&lt;button class="btn btn-pill btn-light-warning"&gt;Widgets&lt;/button&gt;
&lt;button class="btn btn-pill btn-light-danger"&gt;Project&lt;/button&gt;
&lt;button class="btn btn-pill btn-light-light"&gt;Icons&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Outline Rounded Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div><span>Add <code>.btn-pill</code> and <code>.btn-outline-*</code> class for outline with buttons.</span>
        </div>
        <div class="card-body common-flex">
          <button class="btn btn-pill btn-outline-primary">Contacts </button>
          <button class="btn btn-pill btn-outline-secondary">Users</button>
          <button class="btn btn-pill btn-outline-success">Chats</button>
          <button class="btn btn-pill btn-outline-info">Animation</button>
          <button class="btn btn-pill btn-outline-warning">Widgets</button>
          <button class="btn btn-pill btn-outline-danger">Project</button>
          <button class="btn btn-pill btn-outline-light">Icons</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-pill btn-outline-primary"&gt;Contacts &lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-secondary"&gt;Users&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-success"&gt;Chats&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-info"&gt;Animation&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-warning"&gt;Widgets&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-danger"&gt;Project&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-light"&gt;Icons&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Rounded Sizes</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Use the <code>.btn-lg,.btn-sm,.btn-xs </code>for sizes of buttons</p>
        </div>
        <div class="card-body common-flex align-items-center">
          <button class="btn btn-pill btn-primary btn-lg">Large button</button>
          <button class="btn btn-pill btn-secondary">Default button</button>
          <button class="btn btn-pill btn-warning btn-sm">Small button </button>
          <button class="btn btn-pill btn-success btn-xs">Extra small button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-pill btn-primary btn-lg"&gt;Large button&lt;/button&gt;
&lt;button class="btn btn-pill btn-secondary"&gt;Default button&lt;/button&gt;
&lt;button class="btn btn-pill btn-warning btn-sm"&gt;Small button &lt;/button&gt;
&lt;button class="btn btn-pill btn-success btn-xs"&gt;Extra small button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Outline Rounded Sizes</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Use the <code>.btn-lg,.btn-sm,.btn-xs </code>for sizes of buttons</p>
        </div>
        <div class="card-body common-flex align-items-center">
          <button class="btn btn-pill btn-outline-primary btn-lg">Large button</button>
          <button class="btn btn-pill btn-outline-secondary">Default button</button>
          <button class="btn btn-pill btn-outline-warning btn-sm">Small button </button>
          <button class="btn btn-pill btn-outline-success btn-xs">Extra small button</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-pill btn-outline-primary btn-lg"&gt;Large button&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-secondary"&gt;Default button&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-warning btn-sm"&gt;Small button &lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-success btn-xs"&gt;Extra small button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Disabled Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for
            disabled button</p>
        </div>
        <div class="card-body common-flex">
          <button class="btn btn-primary disabled" type="button">I'm disabled</button>
          <button class="btn btn-pill btn-warning disabled" type="button">Having problems</button>
          <button class="btn btn-outline-primary disabled" type="button">Inaccessible</button>
          <button class="btn btn-pill btn-outline-warning disabled" type="button">Disabled</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head9" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head9">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn btn-primary disabled" type="button"&gt;I'm disabled&lt;/button&gt;
&lt;button class="btn btn-pill btn-warning disabled" type="button"&gt;Having problems&lt;/button&gt;
&lt;button class="btn btn-outline-primary disabled" type="button"&gt;Inaccessible&lt;/button&gt;
&lt;button class="btn btn-pill btn-outline-warning disabled" type="button"&gt;Disabled&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Icons Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Used all variation of icons. like this : <code>.btn-square/.btn-pill</code>.</p>
        </div>
        <div class="card-body common-flex icon-button">
          <button class="btn b-ln-height btn-primary btn-square"><i data-feather="help-circle"></i></button>
          <button class="btn b-ln-height btn-secondary btn-square"><i data-feather="clock"></i></button>
          <button class="btn b-ln-height btn-warning"><i data-feather="loader"></i></button>
          <button class="btn b-ln-height btn-light-primary"><i data-feather="radio"></i></button>
          <button class="btn-pill btn-light-secondary"><i data-feather="loader"></i></button>
          <button class="btn-pill btn-light-warning"><i data-feather="radio"></i></button>
          <button class="btn b-ln-height btn-outline-primary"><i data-feather="radio"></i></button>
          <button class="btn-pill btn-outline-secondary border border-secondary"><i data-feather="loader"></i></button>
          <button class="btn-pill btn-outline-warning border border-warning"><i data-feather="radio"></i></button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head10" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head10">&lt;!-- Cod Box Copy begin --&gt;
&lt;button class="btn b-ln-height btn-primary btn-square"&gt;&lt;i data-feather="help-circle"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn b-ln-height btn-secondary btn-square"&gt;&lt;i data-feather="clock"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn b-ln-height btn-warning"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn b-ln-height btn-light-primary"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn-pill btn-light-secondary"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn-pill btn-light-warning"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn b-ln-height btn-outline-primary"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn-pill btn-outline-secondary border border-secondary"&gt;&lt;i data-feather="loader"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn-pill btn-outline-warning border border-warning"&gt;&lt;i data-feather="radio"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Button Group</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Wrap a series of buttons with <code>.btn </code>in <code>.btn-group </code>. &
            custom class used for sizes: <code>.btn-lg / .btn-sm </code>.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xl-4 col-md-6">
              <div class="card-wrapper border rounded-3 h-100">
                <h6 class="sub-title fw-bold">Button group variation</h6>
                <div class="button-wrapper button-variation">
                  <div class="btn-group btn-group-square" role="group" aria-label="Basic example">
                    <button class="btn btn-primary" type="button">Left</button>
                    <button class="btn btn-light-primary" type="button">Middle</button>
                    <button class="btn btn-primary" type="button">Right</button>
                  </div>
                  <div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
                    <button class="btn btn-light-primary" type="button">Left</button>
                    <button class="btn btn-primary" type="button">Middle</button>
                    <button class="btn btn-light-primary" type="button">Right</button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary" type="button">Left</button>
                    <button class="btn btn-light-primary" type="button">Middle</button>
                    <button class="btn btn-primary" type="button">Right</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card-wrapper border rounded-3 h-100">
                <h6 class="sub-title fw-bold">Outline button group</h6>
                <div class="button-wrapper">
                  <div class="btn-group btn-group-square" role="group" aria-label="Basic outlined example">
                    <button class="btn btn-outline-primary" type="button"><i data-feather="arrow-left"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i data-feather="arrow-up"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i data-feather="arrow-right"></i></button>
                  </div>
                  <div class="btn-group btn-group-pill" role="group" aria-label="Basic outlined example">
                    <button class="btn btn-outline-primary" type="button"> <i
                        data-feather="arrow-left-circle"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i
                        data-feather="arrow-up-circle"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i
                        data-feather="arrow-right-circle"></i></button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button class="btn btn-outline-primary" type="button"> <i data-feather="align-left"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i data-feather="align-center"></i></button>
                    <button class="btn btn-outline-primary" type="button"><i data-feather="align-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-12">
              <div class="card-wrapper border rounded-3 h-100">
                <h6 class="sub-title fw-bold">Button group sizes</h6>
                <div class="button-wrapper">
                  <div class="btn-group" role="group" aria-label="Large button group">
                    <button class="btn btn-outline-primary btn-lg" type="button">Left</button>
                    <button class="btn btn-outline-primary btn-lg" type="button">Middle</button>
                    <button class="btn btn-outline-primary btn-lg" type="button">Right</button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Default button group">
                    <button class="btn btn-outline-primary" type="button">Left</button>
                    <button class="btn btn-outline-primary" type="button">Middle</button>
                    <button class="btn btn-outline-primary" type="button">Right</button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Small button group">
                    <button class="btn btn-outline-primary btn-sm" type="button">Left</button>
                    <button class="btn btn-outline-primary btn-sm" type="button">Middle</button>
                    <button class="btn btn-outline-primary btn-sm" type="button">Right</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head11">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row g-3"&gt;
&lt;div class="col-4"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Button group variation&lt;/h6&gt;
&lt;div class="button-wrapper"&gt;
&lt;div class="btn-group btn-group-square" role="group" aria-label="Basic example"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group btn-group-pill" role="group" aria-label="Basic example"&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-4"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Outline button group&lt;/h6&gt;
&lt;div class="button-wrapper"&gt;
&lt;div class="btn-group btn-group-square" role="group" aria-label="Basic outlined example"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-left"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-up"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-right"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group btn-group-pill" role="group" aria-label="Basic outlined example"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt; &lt;i data-feather="arrow-left-circle"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-up-circle"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="arrow-right-circle"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Basic outlined example"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt; &lt;i data-feather="align-left"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="align-center"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;&lt;i data-feather="align-right"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-4"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Button group sizes&lt;/h6&gt;
&lt;div class="button-wrapper"&gt;
&lt;div class="btn-group" role="group" aria-label="Large button group"&gt;
&lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-outline-primary btn-lg" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Small button group"&gt;
&lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-outline-primary btn-sm" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Block Level Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1"><code>.btn </code>class used for buttons. and <code>.d-grid </code>used for block
            level buttons.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-12">
              <div class="card-wrapper border rounded-3">
                <h6 class="sub-title fw-bold">Block Button</h6>
                <div class="d-grid gap-2 buttons-box">
                  <button class="btn btn-light-primary" type="button">Click here, there is a big surprise with you,
                    Hurry Up!!</button>
                  <button class="btn btn-primary" type="button">40% off all B-Stock Sale!! Hurry Up!!</button>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card-wrapper border rounded-3">
                <h6 class="sub-title fw-bold">Button Center</h6>
                <div class="d-grid gap-2 col-6 mx-auto buttons-box">
                  <button class="btn btn-light-primary" type="button">Center Button</button>
                  <button class="btn btn-primary" type="button">Center Button</button>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card-wrapper border rounded-3">
                <h6 class="sub-title fw-bold">Button End</h6>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end buttons-box">
                  <button class="btn btn-light-primary me-md-2" type="button">Button</button>
                  <button class="btn btn-primary" type="button">Button</button>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head12" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head12">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row g-3"&gt;
&lt;div class="col-12"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Block Button&lt;/h6&gt;
&lt;div class="d-grid gap-2"&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Click here, there is a big surprise with you, Hurry Up!!&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;40% off all B-Stock Sale!! Hurry Up!!&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-12"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Button Center&lt;/h6&gt;
&lt;div class="d-grid gap-2 col-6 mx-auto"&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;Center Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Center Button&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-12"&gt;
&lt;div class="card-wrapper border rounded-3"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Button End&lt;/h6&gt;
&lt;div class="d-grid gap-2 d-md-flex justify-content-md-end"&gt;
&lt;button class="btn btn-light-primary me-md-2" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Button Variations</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1"><code>.btn </code>class used for buttons and <code>.btn-group-vertical </code>for
            vertical buttons and made different types of design using <code>.btn-group </code>.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="card-wrapper border rounded-3 h-100">
                <h6 class="sub-title fw-bold">Vertical variation</h6>
                <div class="d-flex gap-3 align-items-end flex-wrap">
                  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button class="btn btn-primary" type="button">Primary</button>
                    <button class="btn btn-secondary" type="button">Secondary</button>
                    <button class="btn btn-success" type="button">Success</button>
                    <button class="btn btn-danger" type="button">Danger</button>
                    <button class="btn btn-warning" type="button">Warning</button>
                  </div>
                  <div class="btn-group-vertical buttons-box" role="group" aria-label="Vertical button group">
                    <button class="btn btn-light-primary" type="button">light-primary</button>
                    <button class="btn btn-light-dark" type="button">light-dark</button>
                    <div class="btn-group" role="group">
                      <button class="btn btn-light-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">light-success</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropstart" role="group">
                      <button class="btn btn-light-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">light-danger</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropend" role="group">
                      <button class="btn btn-light-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">light-warning</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group dropup" role="group">
                      <button class="btn btn-light-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">light-info</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                    <input class="btn-check" id="vbtn-radio1" type="radio" name="vbtn-radio" checked="">
                    <label class="btn btn-outline-primary" for="vbtn-radio1">Radio 1</label>
                    <input class="btn-check" id="vbtn-radio2" type="radio" name="vbtn-radio">
                    <label class="btn btn-outline-primary" for="vbtn-radio2">Radio 2</label>
                    <input class="btn-check" id="vbtn-radio3" type="radio" name="vbtn-radio">
                    <label class="btn btn-outline-primary mb-0" for="vbtn-radio3">Radio 3</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card-wrapper border rounded-3 h-100">
                    <h6 class="sub-title fw-bold">Horizontal variation</h6>
                    <div class="button-wrapper button-box">
                      <div class="btn-group" role="group" aria-label="Default button group">
                        <button class="btn btn-outline-primary" type="button">How</button>
                        <button class="btn btn-outline-primary" type="button">Are</button>
                        <button class="btn btn-outline-primary" type="button">You?</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-primary" type="button">Y</button>
                        <button class="btn btn-secondary" type="button">U</button>
                        <button class="btn btn-warning" type="button">R</button>
                        <button class="btn btn-success" type="button">I</button>
                        <div class="btn-group" role="group">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Pages</button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="btn-group select-checkbox" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input class="btn-check" id="btncheck1" type="checkbox">
                        <label class="btn btn-outline-success mb-0" for="btncheck1">Checkbox 1</label>
                        <input class="btn-check" id="btncheck2" type="checkbox">
                        <label class="btn btn-outline-primary mb-0" for="btncheck2">Checkbox 2</label>
                        <input class="btn-check" id="btncheck3" type="checkbox">
                        <label class="btn btn-outline-success mb-0" for="btncheck3">Checkbox 3</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card-wrapper border rounded-3 h-100">
                    <h6 class="sub-title fw-bold">Button toolbar</h6>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button class="btn btn-primary" type="button">I </button>
                        <button class="btn btn-secondary" type="button">II </button>
                        <button class="btn btn-success" type="button">III</button>
                        <button class="btn btn-info" type="button">IV </button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Second group">
                        <button class="btn btn-warning" type="button">V </button>
                        <button class="btn btn-danger" type="button">VI </button>
                        <button class="btn btn-primary" type="button">VII</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Third group">
                        <button class="btn btn-light" type="button">VIII</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head13" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head13">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row g-3"&gt;
&lt;div class="col-6"&gt;
&lt;div class="card-wrapper border rounded-3 h-100"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Vertical variation&lt;/h6&gt;
&lt;div class="d-flex gap-3 align-items-end flex-wrap"&gt;
&lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Primary&lt;/button&gt;
&lt;button class="btn btn-secondary" type="button"&gt;Secondary&lt;/button&gt;
&lt;button class="btn btn-success" type="button"&gt;Success&lt;/button&gt;
&lt;button class="btn btn-danger" type="button"&gt;Danger&lt;/button&gt;
&lt;button class="btn btn-warning" type="button"&gt;Warning&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
&lt;button class="btn btn-light-primary" type="button"&gt;light-primary&lt;/button&gt;
&lt;button class="btn btn-light-secondary" type="button"&gt;light-secondary&lt;/button&gt;
&lt;div class="btn-group" role="group"&gt;
&lt;button class="btn btn-light-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;light-success&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group dropstart" role="group"&gt;
&lt;button class="btn btn-light-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;light-danger&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group dropend" role="group"&gt;
&lt;button class="btn btn-light-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;light-warning&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group dropup" role="group"&gt;
&lt;button class="btn btn-light-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;light-info&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group"&gt;
&lt;input class="btn-check" id="vbtn-radio1" type="radio" name="vbtn-radio" checked=""&gt;
&lt;label class="btn btn-outline-primary" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
&lt;input class="btn-check" id="vbtn-radio2" type="radio" name="vbtn-radio"&gt;
&lt;label class="btn btn-outline-primary" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
&lt;input class="btn-check" id="vbtn-radio3" type="radio" name="vbtn-radio"&gt;
&lt;label class="btn btn-outline-primary mb-0" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-6"&gt;
&lt;div class="row g-3"&gt;
&lt;div class="col-12"&gt;
&lt;div class="card-wrapper border rounded-3 h-100"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Horizontal variation&lt;/h6&gt;
&lt;div class="button-wrapper"&gt;
&lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;How&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Are&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;You?&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Y&lt;/button&gt;
&lt;button class="btn btn-secondary" type="button"&gt;U&lt;/button&gt;
&lt;button class="btn btn-warning" type="button"&gt;R&lt;/button&gt;
&lt;button class="btn btn-success" type="button"&gt;I&lt;/button&gt;
&lt;div class="btn-group" role="group"&gt;
&lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Pages&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Gallery&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Blog&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"&gt;
&lt;input class="btn-check" id="btncheck1" type="checkbox"&gt;
&lt;label class="btn btn-outline-success mb-0" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;
&lt;input class="btn-check" id="btncheck2" type="checkbox"&gt;
&lt;label class="btn btn-outline-primary mb-0" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;
&lt;input class="btn-check" id="btncheck3" type="checkbox"&gt;
&lt;label class="btn btn-outline-success mb-0" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-12"&gt;
&lt;div class="card-wrapper border rounded-3 h-100"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Button toolbar&lt;/h6&gt;
&lt;div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"&gt;
&lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
&lt;button class="btn btn-primary" type="button"&gt;I &lt;/button&gt;
&lt;button class="btn btn-secondary" type="button"&gt;II &lt;/button&gt;
&lt;button class="btn btn-success" type="button"&gt;III&lt;/button&gt;
&lt;button class="btn btn-info" type="button"&gt;IV &lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group me-2" role="group" aria-label="Second group"&gt;
&lt;button class="btn btn-warning" type="button"&gt;V &lt;/button&gt;
&lt;button class="btn btn-danger" type="button"&gt;VI &lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;VII&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Third group"&gt;
&lt;button class="btn btn-light" type="button"&gt;VIII&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="code-box-copy"&gt;
&lt;button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"&gt;&lt;i class="icofont icofont-copy-alt"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;pre&gt;&lt;code class="language-html" id="example-head5"&gt;&amp;lt;!-- Cod Box Copy begin --&amp;gt;
&amp;lt;button type="button" class="btn btn-primary disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-secondary disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-success disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-info disabled"&amp;gt;Info button&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-warning disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-danger disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;button type="button" class="btn btn-light disabled"&amp;gt;Disabled&amp;lt;/button&amp;gt;
&amp;lt;!-- Cod Box Copy end --&amp;gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Bold Border Outline Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Add <code>.btn-outline-*-2x</code> class for bold outline buttons.</p>
        </div>
        <div class="card-body common-flex">
          <button class="btn btn-outline-primary-2x">Animation</button>
          <button class="btn btn-outline-secondary-2x">Icons</button>
          <button class="btn btn-outline-success-2x">Blog</button>
          <button class="btn btn-outline-info-2x">Widgets</button>
          <button class="btn btn-outline-warning-2x">Chat</button>
          <button class="btn btn-outline-danger-2x">Users</button>
          <button class="btn btn-outline-light-2x txt-dark">FAQ</button>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head14" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head14">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-outline-primary-2x"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary-2x"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success-2x"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info-2x"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning-2x"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger-2x"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light-2x txt-dark"&gt;light button&lt;/button&gt;
&lt;!-- Cod Box Copy end</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Radio and Checkbox Group</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Add radio for <code>.radio </code> class & checkbox for <code>.checkbox </code>
            class used.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xl-6">
              <div class="card-wrapper border rounded-3 bg-light">
                <h6 class="sub-title fw-bold">Radio Button</h6>
                <div class="btn-radio">
                  <div class="btn-group" data-bs-toggle="buttons">
                    <div class="btn btn-light-primary">
                      <div class="radio radio-primary">
                        <input id="radio7" type="radio" name="radio1" value="option1">
                        <label class="mb-0" for="radio7">Theme</label>
                      </div>
                    </div>
                    <div class="btn btn-light-primary">
                      <div class="radio radio-primary">
                        <input id="radio8" type="radio" name="radio1" value="option1" checked="">
                        <label class="mb-0" for="radio8">E-commerce</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card-wrapper border rounded-3 bg-light">
                <h6 class="sub-title fw-bold">Checkbox</h6>
                <div class="btn-group btn-option" data-bs-toggle="buttons">
                  <div class="btn btn-light-dark">
                    <div class="checkbox checkbox-dark">
                      <input id="checkbox-primary-1" type="checkbox">
                      <label class="mb-0" for="checkbox-primary-1">Theme</label>
                    </div>
                  </div>
                  <div class="btn btn-light-dark">
                    <div class="checkbox checkbox-dark">
                      <input id="checkbox-primary-2" type="checkbox">
                      <label class="mb-0" for="checkbox-primary-2">E-commerce</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head15" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head15">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row"&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="card-wrapper border rounded-3 bg-light"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Radio Button&lt;/h6&gt;
&lt;div class="btn-radio"&gt;
&lt;div class="btn-group" data-bs-toggle="buttons"&gt;
&lt;div class="btn btn-light-primary"&gt;
&lt;div class="radio radio-primary"&gt;
&lt;input id="radio7" type="radio" name="radio1" value="option1"&gt;
&lt;label class="mb-0" for="radio7"&gt;Theme&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn btn-light-primary"&gt;
&lt;div class="radio radio-primary"&gt;
&lt;input id="radio8" type="radio" name="radio1" value="option1" checked=""&gt;
&lt;label class="mb-0" for="radio8"&gt;E-commerce&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6"&gt;
&lt;div class="card-wrapper border rounded-3 bg-light"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Checkbox&lt;/h6&gt;
&lt;div class="btn-group btn-option" data-bs-toggle="buttons"&gt;
&lt;div class="btn btn-light-dark"&gt;
&lt;div class="checkbox checkbox-dark"&gt;
&lt;input id="checkbox-primary-1" type="checkbox"&gt;
&lt;label class="mb-0" for="checkbox-primary-1"&gt;Theme&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="btn btn-light-dark"&gt;
&lt;div class="checkbox checkbox-dark"&gt;
&lt;input id="checkbox-primary-2" type="checkbox"&gt;
&lt;label class="mb-0" for="checkbox-primary-2"&gt;E-commerce&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card title-line">
        <div class="card-header">
          <h2>Gradient Buttons</h2>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
          <p class="f-m-light mt-1">Add <code>.btn-*-gradien</code> class for gradien buttons.</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-xl-4 col-sm-6">
              <div class="card-wrapper border rounded-3 bg-light">
                <h6 class="sub-title fw-bold">Default gradient buttons</h6>
                <div class="common-flex">
                  <button class="btn btn-primary-gradien">Icons</button>
                  <button class="btn btn-secondary-gradien">Animation</button>
                  <button class="btn btn-success-gradien">Tasks</button>
                  <button class="btn btn-info-gradien">Letter box</button>
                  <button class="btn btn-warning-gradien">Chat</button>
                  <button class="btn btn-danger-gradien">Blog</button>
                  <button class="btn btn-light-gradien text-dark">Gallery</button>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6">
              <div class="card-wrapper border rounded-3 bg-light">
                <h6 class="sub-title fw-bold">Square gradient buttons</h6>
                <div class="common-flex">
                  <button class="btn btn-square btn-primary-gradien">Icons</button>
                  <button class="btn btn-square btn-secondary-gradien">Animation</button>
                  <button class="btn btn-square btn-success-gradien">Tasks</button>
                  <button class="btn btn-square btn-info-gradien">Letter box</button>
                  <button class="btn btn-square btn-warning-gradien">Chat</button>
                  <button class="btn btn-square btn-danger-gradien">Blog</button>
                  <button class="btn btn-square btn-light-gradien text-dark">Gallery</button>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-12">
              <div class="card-wrapper border rounded-3 bg-light">
                <h6 class="sub-title fw-bold">Rounded gradient buttons</h6>
                <div class="common-flex">
                  <button class="btn btn-pill btn-air-primary btn-primary-gradien">Icons</button>
                  <button class="btn btn-pill btn-air-secondary btn-secondary-gradien">Animation</button>
                  <button class="btn btn-pill btn-air-success btn-success-gradien">Tasks</button>
                  <button class="btn btn-pill btn-air-info btn-info-gradien">Letter box</button>
                  <button class="btn btn-pill btn-air-warning btn-warning-gradien">Chat</button>
                  <button class="btn btn-pill btn-air-danger btn-danger-gradien">Blog</button>
                  <button class="btn btn-pill btn-air-light btn-light-gradien txt-dark">Gallery</button>
                </div>
              </div>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head16" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head16">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="row"&gt;
&lt;div class="col-xl-4"&gt;
&lt;div class="card-wrapper border rounded-3 bg-light"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Default gradient buttons&lt;/h6&gt;
&lt;div class="common-flex"&gt;
&lt;button class="btn btn-primary-gradien"&gt;Icons&lt;/button&gt;
&lt;button class="btn btn-secondary-gradien"&gt;Animation&lt;/button&gt;
&lt;button class="btn btn-success-gradien"&gt;Tasks&lt;/button&gt;
&lt;button class="btn btn-info-gradien"&gt;Letter box&lt;/button&gt;
&lt;button class="btn btn-warning-gradien"&gt;Chat&lt;/button&gt;
&lt;button class="btn btn-danger-gradien"&gt;Blog&lt;/button&gt;
&lt;button class="btn btn-light-gradien text-dark"&gt;Gallery&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-4"&gt;
&lt;div class="card-wrapper border rounded-3 bg-light"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Square gradient buttons&lt;/h6&gt;
&lt;div class="common-flex"&gt;
&lt;button class="btn btn-square btn-primary-gradien"&gt;Icons&lt;/button&gt;
&lt;button class="btn btn-square btn-secondary-gradien"&gt;Animation&lt;/button&gt;
&lt;button class="btn btn-square btn-success-gradien"&gt;Tasks&lt;/button&gt;
&lt;button class="btn btn-square btn-info-gradien"&gt;Letter box&lt;/button&gt;
&lt;button class="btn btn-square btn-warning-gradien"&gt;Chat&lt;/button&gt;
&lt;button class="btn btn-square btn-danger-gradien"&gt;Blog&lt;/button&gt;
&lt;button class="btn btn-square btn-light-gradien text-dark"&gt;Gallery&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-4"&gt;
&lt;div class="card-wrapper border rounded-3 bg-light"&gt;
&lt;h6 class="sub-title fw-bold"&gt;Rounded gradient buttons&lt;/h6&gt;
&lt;div class="common-flex"&gt;
&lt;button class="btn btn-pill btn-air-primary btn-primary-gradien"&gt;Icons&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-secondary btn-secondary-gradien"&gt;Animation&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-success btn-success-gradien"&gt;Tasks&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-info btn-info-gradien"&gt;Letter box&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-warning btn-warning-gradien"&gt;Chat&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-danger btn-danger-gradien"&gt;Blog&lt;/button&gt;
&lt;button class="btn btn-pill btn-air-light btn-light-gradien txt-dark"&gt;Gallery&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
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