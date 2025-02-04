@extends('layouts.partials.simple.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
    <div>
        <h2>Knowledgebase</h2>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item f-w-500">Knowledgebase</li>
                <li class="breadcrumb-item f-w-500 active">Knowledgebase</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="knowledgebase-bg"><img class="bg-img-cover bg-center"
                    src="{{ asset('assets/images/knowledgebase/bg_1.jpg') }}" alt="looginpage"></div>
            <div class="knowledgebase-search">
                <div>
                    <h3>How Can I help you?</h3>
                    <form class="form-inline" action="#" method="get">
                        <div class="form-group w-100"><i data-feather="search"></i>
                            <input class="form-control-plaintext w-100" type="text" placeholder="Type question here"
                                title="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-flex faq-widgets">
                        <div class="flex-grow-1">
                            <h3 class="f-w-600 txt-light mb-2">Articles</h3>
                            <p>The usefulness and usability of a website, not its aesthetic design, define its success
                                or failure. User-centric design has become the norm for effective and financially
                                motivated web design since the visitor to the website is the only one who clicks the
                                mouse and thus determines everything. After all, a feature might as well not exist if
                                people can't utilise it.</p>
                        </div><i data-feather="book-open"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-flex faq-widgets">
                        <div class="flex-grow-1">
                            <h3 class="f-w-600 txt-light mb-2">Knowledgebase</h3>
                            <p>A knowledge base acts as a central repository for knowledge, data, and information
                                pertaining to a certain subject or thing. Its main goal is to make it easier for
                                consumers to obtain information quickly and conveniently so they can solve problems,
                                find solutions, and make wise decisions.</p>
                        </div><i data-feather="aperture"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-flex faq-widgets">
                        <div class="flex-grow-1">
                            <h3 class="f-w-600 txt-light mb-2">Support</h3>
                            <p>Email, chat, forums, and a social media interface (and monitoring) are all part of
                                real-time online assistance, which helps in reacting to public complaints and comments.
                                Taking care of returns or repairs may fall under this.</p>
                        </div><i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="header-faq">
                <h3 class="mb-0 f-w-600">Browse articles by category</h3>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Browse Articles</h2>
                        </div>
                        <div class="card-body">
                            <div class="row browse g-sm-4 g-3 knowledgebase-contents">
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles">
                                        <h5><span><i data-feather="archive"></i></span>Quick questions are answered</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Dream
                                                        big, work
                                                        hard, achieve more.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Stars
                                                        require
                                                        darkness to shine.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                        key to happiness lies within, not in goods.</span><span
                                                        class="badge badge-primary pull-right">New</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Seek
                                                        advancement
                                                        rather than perfection. </span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (40)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles">
                                        <h5><span><i data-feather="archive"></i></span> Integrating wordPress with your
                                            website</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Plugins
                                                        and tools
                                                        for seamless WordPress integration</span><span
                                                        class="badge badge-primary pull-right">Review</span></a></li>
                                            <li><a href="#!"><span><i
                                                            data-feather="file-text"></i></span><span>advantages of
                                                        using WordPress as my website's CMS</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Desktop
                                                        publishing
                                                        software like Jully</span><span
                                                        class="badge badge-primary pull-right">Articles</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Making
                                                        this the
                                                        first true generator on the Internet.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (90)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles">
                                        <h5><span><i data-feather="archive"></i></span>WordPress site maintenance</h5>
                                        <ul>
                                            <li><a href="#!"><span><i
                                                            data-feather="file-text"></i></span><span>WordPress Site
                                                        Upkeep: Important Best Practises</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Regular
                                                        Updates:
                                                        WordPress Security and Stability</span><span
                                                        class="badge badge-primary pull-right">Closed</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Backup
                                                        Fundamentals: Protecting Your Website Data</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                        Essential Maintenance for a Thriving Website</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (50)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i> Meta tags in wordPress</span></h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                        article
                                                        WordPress Site Care: A Recipe for Success</span><span
                                                        class="badge badge-primary pull-right">Popular</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Security
                                                        Scan:
                                                        Protecting Against Vulnerabilities.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>SEO and
                                                        Site
                                                        Speed: Improving User Experience</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Broken
                                                        Links:
                                                        Fixing for Improved Navigation</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (90)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i></span>WordPress in your language</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Discover
                                                        WordPress Themes: Improve Website Design</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Making
                                                        the Best
                                                        Decision: WordPress vs. Other CMS</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Using
                                                        Widgets to
                                                        Your Advantage: Creating a Custom Website</span></a></li>
                                            <li><a href="#!"><span><i
                                                            data-feather="file-text"></i></span><span>Essential
                                                        WordPress Plugins: Easily enhance</span><span
                                                        class="badge badge-primary pull-right">Closed</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (50)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i></span>Know your sources</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>First,
                                                        get the
                                                        issue resolved. Write the code after that.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>It has a
                                                        more-or-less normal distribution of letters</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The
                                                        writing of
                                                        programmes must be simple</span><span
                                                        class="badge badge-primary pull-right">Article</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Coding
                                                        involves
                                                        logic and creativity in addition to merely writing
                                                        code</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (26)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i></span>Validating a website</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Build
                                                        your
                                                        website to make users happy</span><span
                                                        class="badge badge-primary pull-right">Review</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Your
                                                        website is
                                                        your front door online</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Make
                                                        sure your
                                                        website is easy to use and simple </span><span
                                                        class="badge badge-primary pull-right">Closed</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Update,
                                                        innovate,
                                                        and enhance your website </span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (10)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 col-md-6">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i></span>Quick questions are answered
                                        </h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Coding:
                                                        turning
                                                        caffeine into lines of brilliance.</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Code is
                                                        the
                                                        poetry of logical expression.</span><span
                                                        class="badge badge-primary pull-right">Popular</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Coding
                                                        is the art
                                                        of engineering</span><span
                                                        class="badge badge-primary pull-right">Review</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Every
                                                        screen size
                                                        is accommodated with a responsive website</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (25)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-100">
                                    <div class="browse-articles browse-bottom">
                                        <h5><span><i data-feather="archive"></i></span>Integrating wordPress with your
                                            website</h5>
                                        <ul>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>The core
                                                        of your
                                                        online presence is your website</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Your
                                                        website is a
                                                        24/7 marketing tool</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>Build a
                                                        website
                                                        that turns users into buyers</span></a></li>
                                            <li><a href="#!"><span><i data-feather="file-text"></i></span><span>User
                                                        experience
                                                        determines a website's success</span><span
                                                        class="badge badge-primary pull-right">On hold</span></a></li>
                                            <li><a href="#!"><span><i data-feather="arrow-right"></i></span><span>See
                                                        More
                                                        (34)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="header-faq">
                <h3 class="mb-0 f-w-600">Featured Tutorials</h3>
            </div>
            <div class="row">
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid"
                                src="{{ asset('assets/images/faq/1.jpg') }}" alt="">
                            <div class="product-hover">
                                <ul>
                                    <li><i class="icon-link"></i></li>
                                    <li><i class="icon-import"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="f-w-600 pb-1"> Web Designer</h4>
                            <p>Setting aside time once every three months to refresh your portfolio is a fantastic idea.
                                Even if you are not submitting any new work, you could still need to provide more
                                context or alter anything based on your continuing learnings and objectives. Compared to
                                months or years later, it is far simpler to update when the information is still fresh
                                in your mind.</p>
                        </div>
                        <div class="card-footer"><span>Dec 11, 2024</span><span class="pull-right"><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i></span></div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid"
                                src="{{ asset('assets/images/faq/2.jpg') }}" alt="">
                            <div class="product-hover">
                                <ul>
                                    <li><i class="icon-link"></i></li>
                                    <li><i class="icon-import"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="f-w-600 pb-1">Web Development</h4>
                            <p>To display HTML and CSS components on different web browsers, such as Chrome, Safari, and
                                previous versions of Opera, CSS3 uses the Webkit rendering engine. It offers the
                                essential features for generating online content and guaranteeing consistency across
                                many platforms.</p>
                        </div>
                        <div class="card-footer"><span>Dec 14, 2024</span><span class="pull-right"><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star-o font-primary"></i></span></div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid"
                                src="{{ asset('assets/images/faq/3.jpg') }}" alt="">
                            <div class="product-hover">
                                <ul>
                                    <li><i class="icon-link"></i></li>
                                    <li><i class="icon-import"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="f-w-600 pb-1">UI Designer</h4>
                            <p>Seniority does have a significant role in how much influence a UI specialist has at this
                                first stage of the design process. Senior UI designers may take the initiative in coming
                                up with suggestions for which visual components will work best, whereas an entry-level
                                UI designer is more likely to be focused on storyboards, sitemaps, and process flows and
                                not have much influence on the site's appearance.</p>
                        </div>
                        <div class="card-footer"><span>Dec 20, 2024</span><span class="pull-right"><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i></span></div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid"
                                src="{{ asset('assets/images/faq/4.jpg') }}" alt="">
                            <div class="product-hover">
                                <ul>
                                    <li><i class="icon-link"></i></li>
                                    <li><i class="icon-import"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="f-w-600 pb-1"> UX Designer</h4>
                            <p>Information architecture is a discipline that, among other things, organises, arranges,
                                and structures the content of a website or app. Information architects determine how to
                                organise something's components in a way that makes sense.</p>
                        </div>
                        <div class="card-footer"><span>Dec 25, 2024</span><span class="pull-right"><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i
                                    class="fa fa-star-half-o font-primary"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="header-faq">
                <h3 class="mb-0 f-w-600">Latest articles and videos</h3>
            </div>
            <div class="row knowledgebase-box">
                <div class="col-xl-4 col-md-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1">Product manager</h5>
                                            <p>A product manager is a specialist in charge of managing the growth,
                                                direction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1">E-commerce</h5>
                                            <p>Discover the flourishing e-commerce industry and how digital technology
                                                has transformed it.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="codepen"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1"> Web-development</h5>
                                            <p>To display HTML and CSS components on different web browsers, such as
                                                Chrome, Safari.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="file-text"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1"> UX designer</h5>
                                            <p>Seniority does have a significant role in how much influence a UI
                                                specialist.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="file-text"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1"> SDLC cycle</h5>
                                            <p>the intricacies of the Software Development Life Cycle a systematic
                                                approach to software development</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="file-text"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1">Using Video </h5>
                                            <p>Information architecture is a discipline that, among other things,
                                                arranges, and structures</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1"> Information gathering</h5>
                                            <p>Explore the critical role of information gathering in effective
                                                problem-solving processes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1">Effective communication</h5>
                                            <p>It's crucial to communicate! This blog explores the key components of
                                                good communication.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex articles-icons"><i class="m-r-20" data-feather="youtube"></i>
                                        <div class="flex-grow-1">
                                            <h5 class="f-w-600 mb-1">Travel adventures</h5>
                                            <p>The spirit is enriched by travel! This site takes you on an exhilarating
                                                tour of stunning.</p>
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
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
@endsection