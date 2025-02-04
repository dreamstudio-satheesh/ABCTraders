@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollable.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Scrollable</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">Bonus UI</li>
                <li class="breadcrumb-item f-w-500 active">Scrollable</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2 class="mb-0">Custom scrollbar</h2>
                    <p class="f-m-light mt-1">Used <code>.vertical-scroll </code>and <code>.scroll-demo </code>through
                        design scrollbar.</p>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo">
                        <h5 class="pb-2">Custom Scrollbar </h5>
                        <p>I'm quite interested in learning more about <em class="txt-danger">custom scrollbars</em>
                            because they are becoming more and more common.</p>
                        <div class="scrollbar-images"><img class="img-fluid"
                                src="{{ asset('assets/images/banner/1.jpg') }}" alt="banner"></div>
                        <p>
                            There are various justifications for customizing a scrollbar. For instance, the default
                            scrollbar can cause an app's user interface to look inconsistent across various operating
                            systems. In this case, having a single style is helpful.</p>
                        <p>
                            I never had the opportunity to learn about CSS scrollbar customization, but I have always
                            been interested in doing so. I'll take the chance to learn more about them and share my trip
                            in this essay.</p>
                        <p class="m-b-0">One crucial point to remember is that, depending on the design, a scrollbar
                            may operate either <em class="txt-danger">horizontally or vertically</em> . Additionally, it
                            might alter when you work on a website that is global and operates in both left-to-right and
                            right-to-left orientations.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Small size scrollbar</h2>
                    <p class="f-m-light mt-1">
                        Use the <code>.scrollbar-margins </code>through small scroll and image is draggable. </p>
                </div>
                <div class="card-body">
                    <div class="scroll-bar-wrap">
                        <div class="scrollbar-margins large-margin scroll-demo pe-0">
                            <div class="margin-scrollbar">
                                <h5 class="pb-2">Solution for Business Transformation</h5>
                            </div>
                            <p>
                                The Business Transformation Solution programme is a <em class="txt-danger">multi-level
                                    engagement program</em> is designed to help Small and Medium-Sized Businesses and
                                Startups create a strong, well-functioning business organization that produces the best
                                results quickly and effectively.<img class="img-fluid pt-3"
                                    src="{{ asset('assets/images/banner/3.jpg') }}" alt="business" width="800"
                                    height="600"></p>
                            <p class="m-b-0">The core of the programme is our internally developed <em
                                    class="txt-danger">Business Management model</em> , "Business Foundation &
                                Management", which was tried and true for Indian business conditions while drawing
                                inspiration from other successful global SME Business Management techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Badges scrollbar</h2>
                    <p class="f-m-light mt-1">Use the<code>.badge </code> class through create more badges and
                        <code>.vertical-scroll </code>used as vertical scroll.
                    </p>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <ol class="list-group list-group-numbered scroll-rtl">
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Stella Nowland</div><span
                                    class="badge bg-warning rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Lola Stanford</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Caitlin Coungeau</div><span
                                    class="badge bg-primary text-white rounded-pill p-2">Social</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Graciela W. McClaran</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Derek T. Aldridge</div><span
                                    class="badge bg-warning text-white rounded-pill p-2">Freelance </span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Annie A. Riley</div><span
                                    class="badge bg-primary text-white rounded-pill p-2">Social </span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Hana J. Boyd</div><span
                                    class="badge bg-danger text-white rounded-pill p-2">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Karen R. Pryce</div><span
                                    class="badge bg-warning text-white rounded-pill p-2">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start flex-wrap">
                                <div class="ms-2 me-auto">Cordie C. Pope</div><span
                                    class="badge bg-primary text-white rounded-pill p-2">Social</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Profile scrollable</h2>
                    <p class="f-m-light mt-1">
                        Use the <code>.list-group-item </code>through made profile and with used <code>.vertical-scroll
                            </code>.</p>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-hover-primary"
                                href="#!"><img class="rounded-circle" src="{{ asset('assets/images/user/3.png') }}"
                                    alt="user">Gloria D. Acheson</a><a
                                class="list-group-item list-group-item-action list-hover-primary" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/2.jpg') }}"
                                    alt="user">Sharon C.
                                Obrien</a><a class="list-group-item list-group-item-action list-hover-primary"
                                href="#!"><img class="rounded-circle" src="{{ asset('assets/images/user/5.jpg') }}"
                                    alt="user">Bryan A. Owens</a><a
                                class="list-group-item list-group-item-action list-hover-primary" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/12.png') }}"
                                    alt="user">Ronald
                                M. Enger</a><a class="list-group-item list-group-item-action list-hover-primary"
                                href="#!"><img class="rounded-circle" src="{{ asset('assets/images/user/14.png') }}"
                                    alt="user">Herbert A. Clary</a><a
                                class="list-group-item list-group-item-action list-hover-primary" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/6.jpg') }}" alt="user">Dino
                                A.
                                Cannon</a><a class="list-group-item list-group-item-action list-hover-primary"
                                href="#!"><img class="rounded-circle" src="{{ asset('assets/images/user/3.jpg') }}"
                                    alt="user">Danny A. McLean</a><a
                                class="list-group-item list-group-item-action list-hover-primary" href="#!"><img
                                    class="rounded-circle" src="{{ asset('assets/images/user/2.jpg') }}"
                                    alt="user">Betty K.
                                Curtis</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-12">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Scrollable content</h2>
                    <p class="f-m-light mt-1">
                        Use the <code>.list-group-item </code>through made profile and with used <code>.vertical-scroll
                            </code>.</p>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content pt-0"><a
                                class="list-group-item list-group-item-action active list-hover-primary" href="#!"
                                aria-current="true">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/9.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Molly Boake</h6>
                                        <p>MollyBoake@rhyta.com</p><small>5 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/10.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Gabrielle Fahey</h6>
                                        <p>GabrielleFahey@dayrep.com</p><small class="text-muted">10 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lucinda Moseley</h6>
                                        <p>LucindaMoseley@teleworm.us</p><small class="text-muted">3 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/12.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Francis K. Henriques</h6>
                                        <p>FrancisKHenriques@teleworm.us</p><small class="text-muted">2 days
                                            ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/14.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Jose A. Seay</h6>
                                        <p>JoseASeay@rhyta.com</p><small class="text-muted">15 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/3.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Phil F. Cunningham</h6>
                                        <p>PhilFCunningham@dayrep.com</p><small class="text-muted">6 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/7.jpg') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Richard E. Johnson</h6>
                                        <p>RichardEJohnson@teleworm.us</p><small class="text-muted">20 days ago</small>
                                    </div>
                                </div>
                            </a><a class="list-group-item list-group-item-action list-hover-primary" href="#!">
                                <div class="list-wrapper gap-0"><img class="list-img"
                                        src="{{ asset('assets/images/user/2.png') }}" alt="profile">
                                    <div class="list-content">
                                        <h6>Lawrence L. Nash</h6>
                                        <p>LawrenceLNash@jourrapide.com</p><small class="text-muted">8 days ago</small>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Horizontal scrollbar </h2>
                    <p class="f-m-light mt-1">Use the <code>.horizontal-scroll </code>through move content
                        horizontally.</p>
                </div>
                <div class="card-body">
                    <div class="horizontal-scroll scroll-demo">
                        <div class="horz-scroll-content">
                            <div class="row">
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion1.jpg') }}" alt="girl"></div>
                                </div>
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion2.jpg') }}" alt="girl"></div>
                                </div>
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion3.jpg') }}" alt="girl"></div>
                                </div>
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion4.jpg') }}" alt="girl"></div>
                                </div>
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion5.jpg') }}" alt="girl"></div>
                                </div>
                                <div class="col-2">
                                    <div class="horizontal-img"><img class="img-fluid"
                                            src="{{ asset('assets/images/scrollbar/fashion6.jpg') }}" alt="girl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card title-line">
                <div class="card-header">
                    <h2>Both side visible scrollbar</h2>
                    <p class="f-m-light mt-1">Use the <code>.visible-scroll </code>through visible both side scrollbar.
                    </p>
                </div>
                <div class="card-body">
                    <div class="scroll-bar-wrap">
                        <div class="visible-scroll always-visible scroll-demo">
                            <div class="horz-scroll-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="visible-wrapper"><img
                                                src="{{ asset('assets/images/banner/2.jpg') }}" alt="office-work"></div>
                                        <div class="pt-3">Inspiration can take many different forms, and <em
                                                class="txt-danger">professional growth never stops</em>. In light of
                                            this, we've compiled a comprehensive list of web design blogs that will keep
                                            your mind stimulated for the entire year. You won't find any stinkers on
                                            this list, so don't worry. We value your time and believe that you should
                                            only receive the greatest. Because of this, we've only gathered web design
                                            blogs that have recently being updated. Get ready to add numerous
                                            subscriptions by creating your Feebly account.
                                            <ul class="d-flex flex-column gap-1">
                                                <li>
                                                    --> Responsive...</li>
                                                <li>
                                                    --> Secure your domain...</li>
                                                <li>
                                                    --> Testing...</li>
                                                <li>
                                                    --> Content creation...</li>
                                                <li>
                                                    --> Visual elements...</li>
                                                <li>
                                                    --> Launch...</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="pb-2">Latest trends </h6>
                                        <p>You should stay current with all the most recent advances in the business
                                            whether you operate as a freelance web designer or for an agency or design
                                            studio. You may be sure you're constantly providing the most intelligent and
                                            original design solutions by doing this.</p>
                                        <p>You can keep up with evolving design trends by reading web design blogs.
                                            You'll need to be able to comprehend new trends' causes and how they affect
                                            user experience. Additionally, you'll discover upgrades to current tools as
                                            well as new ones that have recently hit the market.</p>
                                        <div class="visible-wrapper"> <img
                                                src="{{ asset('assets/images/email/3.jpg') }}" alt="office"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="pb-2">The best UX designer</h6><span>The internet is teeming with
                                            free resources, no matter what stage of your UX journey you're in, and UX
                                            design blogs should be your first point of call. The abundance of blogs
                                            available, though, can be somewhat of a double-edged sword because there are
                                            so many to choose from. How do you decide which blogs are actually
                                            worthwhile reading?</span>
                                        <div>We've collected a selection of the top UX design blogs available right now
                                            to spare you hours of scrolling and sorting through search results. We
                                            possess:
                                            <ol class="d-flex flex-column gap-1">
                                                <li><strong>Muzli </strong></li>
                                                <li><strong>Facebook Design </strong></li>
                                                <li><strong>Awwwards</strong></li>
                                            </ol>
                                        </div>
                                        <p>
                                            If you already work in the UX field, the Inside Design blog has all the
                                            information you need to expand your knowledge, especially if you're
                                            interested in streamlining your UX teams and procedures and getting a better
                                            understanding of the whole product design and development process. This is
                                            an excellent location to keep an eye out for the most recent UX trends,
                                            tools, resources, and events because they are always adding new stuff.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="pb-2">How to make best website ideas </h6>
                                        <div class="visible-wrapper"> <img
                                                src="{{ asset('assets/images/banner/3.jpg') }}" alt="website"></div>
                                        <ul class="d-flex flex-column gap-1 pt-2">
                                            <li>
                                                --> Blog </li>
                                            <li>
                                                --> Portfolio website </li>
                                            <li>
                                                --> Event website </li>
                                            <li>
                                                --> personal website </li>
                                            <li>
                                                --> Fashion website </li>
                                            <li>
                                                --> Admin dashboards </li>
                                            <li>
                                                --> E-commerce website </li>
                                            <li>
                                                --> Beauty website </li>
                                            <li>
                                                --> Food website</li>
                                            <li>
                                                --> Animation website </li>
                                            <li>
                                                --> Financial website</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
<script src="{{ asset('assets/js/scrollable/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollable/scrollable-custom.js') }}"></script>
@endsection