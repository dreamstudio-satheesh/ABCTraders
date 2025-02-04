@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Basic Card</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Bonus UI</li>
        <li class="breadcrumb-item f-w-500 active">Basic Card</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2>Basic Card</h2>
          <p class="f-m-light mt-1">This is a simple basic card using anywhere.</p>
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
        </div>
        <div class="card-body">
          <p class="mb-0">Tabs have long been used to show alternative views of the same group of information tabs in
            software. Known as<em class="txt-danger">“module tabs”</em> , these are still used today in web sites. For
            instance, airline companies such as Ryanair, easyJet and AirMalta use module tabs to enable the user to
            switch between bookings for flights, hotels and car hire.</p>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre
              class="custom-scrollbar"><code class="language-html" id="example-head">&lt;!-- Basic card --&gt;
&lt;p class="mb-0"&gt;Tabs have long been used to show alternative views of the same group of information tabs in software. Known as
&lt;em class="txt-danger"&gt;&ldquo;module tabs&rdquo;&lt;/em&gt; , these are still used today in web sites. For instance, airline companies such as Ryanair, easyJet and AirMalta use module tabs to enable the user to switch between bookings for flights, hotels and car hire.&lt;/p&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card b-r-0 title-line">
        <div class="card-header">
          <h2>Flat Card</h2>
          <p class="f-m-light mt-1">For flat cards, make the<code>.b-r-0[border-radius:0]</code> used class.</p>
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
        </div>
        <div class="card-body">
          <p class="mb-0">A navigation bar is a particularly important feature because it allows visitors to quickly and
            easily find<em class="txt-danger"> important pages on your website</em> , like your blog, product pages,
            pricing, contact info, and documentation. This improves the chances of visitors browsing your site longer,
            which can boost your page views and reduce your bounce rate.</p>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre
              class="custom-scrollbar"><code class="language-html" id="example-head1">&lt;!-- Flat card--&gt;
&lt;p class="mb-0"&gt;A navigation bar is a particularly important feature because it allows visitors to quickly and easily find
&lt;em class="txt-danger"&gt; important pages on your website&lt;/em&gt; , like your blog, product pages, pricing, contact info, and documentation. This improves the chances of visitors browsing your site longer, which can boost your page views and reduce your bounce rate.&lt;/p&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card shadow-none border title-line">
        <div class="card-header">
          <h2>Without Shadow Card</h2>
          <p class="f-m-light mt-1">Use the<code>.shadow-none </code>&<code>.border </code>class through shadow removes.
          </p>
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
        </div>
        <div class="card-body">
          <div class="flex-space flex-wrap align-items-center"><img class="tab-img img-fluid"
              src="{{ asset('assets/images/avtar/2.jpg') }}" alt="profile">
            <p> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States- 33020<br><strong>Mail
                Us:</strong>contact@us@gmail.com<br><strong>Contact Number: </strong>(954) 357-7760</p>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head2">&lt;!-- Without shadow Card --&gt;
&lt;div class="flex-space flex-wrap align-items-center"&gt;
&lt;img class="tab-img" src="{{ asset('assets/images/avtar/2.jpg') }}" alt="profile"&gt;
&lt;p&gt; &lt;strong&gt;Visit Us: &lt;/strong&gt; 2600 Hollywood Blvd,Florida, United States- 33020&lt;br&gt;&lt;strong&gt;Mail Us:&lt;/strong&gt;contact@us@gmail.com&lt;br&gt;&lt;strong&gt;Contact Number: &lt;/strong&gt;(954) 357-7760&lt;/p&gt;
&lt;/div&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card title-line">
        <div class="card-header">
          <h2><i class="icofont icofont-library me-2"></i> Icon in Heading</h2>
          <p class="f-m-light mt-1">Use the any icons for heading <code>[font-awesome/ico-font/feather]</code>.</p>
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
        </div>
        <div class="card-body">
          <div class="d-flex gap-3 align-items-center list-behavior-1 mb-0">
            <div class="flex-shrink-0"><img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}"
                alt="home"></div>
            <div class="flex-grow-1 ms-0">
              <p class="mb-0">We provide end to end digital solutions, right from designing your website/application
                development: Domain, Web Hosting, Email Hosting Registration, Search Engine Optimization and other
                Internet Marketing, Renewal of Services timely and effectively.</p>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head3">&lt;!-- Icon in Heading --&gt;
&lt;div class="d-flex gap-3 align-items-center list-behavior-1 mb-0"&gt;
&lt;div class="flex-shrink-0"&gt;&lt;
img class="tab-img img-fluid" src="{{ asset('assets/images/blog/img.png') }}" alt="home"&gt;&lt;/div&gt;
&lt;div class="flex-grow-1 ms-0"&gt;
&lt;p class="mb-0"&gt;We provide end to end digital solutions, right from designing your website/application development: Domain, Web Hosting, Email Hosting Registration, Search Engine Optimization and other Internet Marketing, Renewal of Services timely and effectively.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card title-line">
        <div class="card-header bg-dark">
          <h2 class="text-white">Dark Color Card</h2>
          <p class="f-m-light mt-1">Use the <code>.bg-dark </code>color for dark background card.</p>
          <div class="card-header-right dark-color-header">
            <ul class="list-unstyled card-option">
              <li><i class="fa fa-spin fa-cog"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body bg-dark">
          <div class="d-flex align-items-center gap-3 pills-blogger">
            <div class="blog-wrapper"> <img class="blog-img"
                src="{{ asset('assets/images/dashboard-2/product/headphone.png') }}" alt="head phone"></div>
            <div class="blog-content">
              <p> <em class="txt-danger fw-bold">Smart headphones</em> — also called smart earbuds or hearable — are
                high-tech in-ear devices that do more than transmit audio. These headphones are usually wireless, and
                they can sync up with your phone, tablet, computer or other Bluetooth-enabled device. The main appeal of
                hearables is convenience, as they allow you to complete common tasks without directly accessing your
                phone or computer. Smart wireless headphones sync up to other devices using Bluetooth technology, and
                many of their features rely on data from your smartphone or computer.</p>
            </div>
          </div>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i
                class="icofont icofont-copy-alt"></i></button>
            <pre class="custom-scrollbar"><code class="language-html" id="example-head4">&lt;!-- Dark Color Card --&gt;
&lt;div class="d-flex align-items-center gap-3 pills-blogger"&gt;
&lt;div class="blog-wrapper"&gt;
&lt;img class="blog-img" src="{{ asset('assets/images/dashboard-2/product/headphone.png') }} alt="head-phone"&gt;
&lt;/div&gt;
&lt;div class="blog-content"&gt;
&lt;p&gt;
&lt;em class="txt-danger fw-bold"&gt;Smart headphones&lt;/em&gt; &mdash; also called smart earbuds or hearable &mdash; are high-tech in-ear devices that do more than transmit audio. These headphones are usually wireless, and they can sync up with your phone, tablet, computer or other Bluetooth-enabled device. The main appeal of hearables is convenience, as they allow you to complete common tasks without directly accessing your phone or computer. Smart wireless headphones sync up to other devices using Bluetooth technology, and many of their features rely on data from your smartphone or computer.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer bg-dark"&gt;
&lt;h6 class="mb-0"&gt;Card Footer&lt;/h6&gt;</code></pre>
          </div>
        </div>
        <div class="card-footer bg-dark">
          <h6 class="mb-0 txt-light">Card Footer</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header bg-info">
          <h2 class="text-white">Info Color Header</h2>
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
    <div class="col-xl-4 col-sm-6">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Info Color Body</h2>
        </div>
        <div class="card-body bg-info">
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
    <div class="col-xl-4 col-12">
      <div class="card height-equal title-line">
        <div class="card-header">
          <h2>Info Color Footer</h2>
        </div>
        <div class="card-body">
          <h5 class="pb-2">Web Developer</h5>
          <p class="mb-0">A programmer who uses the client-server architecture to create World Wide Web applications is
            known as a web developer. The apps generally employ any general-purpose programming language on the server
            and HTML, CSS, and JavaScript on the client.</p>
        </div>
        <div class="card-footer bg-info">
          <h6 class="mb-0 text-end txt-light">Yuri Theme</h6>
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
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection