@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Search Website</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Apps</li>
        <li class="breadcrumb-item f-w-500 active">Search Website</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid search-page">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <form class="theme-form">
            <div class="input-group m-0 flex-nowrap">
              <input class="form-control-plaintext" type="search" placeholder="Pixelstrap .."><span
                class="btn btn-primary input-group-text">Search</span>
            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="text-center">
            <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
              <li class="nav-item bg-primary"><a class="nav-link active txt-primary" id="all-link" data-bs-toggle="tab"
                  href="#all-links" role="tab" aria-selected="true"><i class="icon-target"></i>All</a></li>
              <li class="nav-item bg-secondary"><a class="nav-link txt-secondary" id="image-link" data-bs-toggle="tab"
                  href="#image-links" role="tab" aria-selected="false"><i class="icon-image"></i>Images</a></li>
              <li class="nav-item bg-success"><a class="nav-link txt-success" id="video-link" data-bs-toggle="tab"
                  href="#video-links" role="tab" aria-selected="false"><i class="icon-video-clapper"></i>Videos</a></li>
              <li class="nav-item bg-danger"><a class="nav-link txt-danger" id="audios-link" data-bs-toggle="tab"
                  href="#audios-links" role="tab" aria-selected="false"><i class="icon-map-alt"></i>Audios</a></li>
              <li class="nav-item bg-warning"><a class="nav-link txt-warning" id="setting-link" data-bs-toggle="tab"
                  href="#setting-links" role="tab" aria-selected="false">Settings</a></li>
              <li class="nav-item bg-secondary"><a class="nav-link txt-secondary" id="setting-link" data-bs-toggle="tab"
                  href="#tools-links" role="tab" aria-selected="false">Tools</a></li>
            </ul>
          </div>
          <div class="tab-content" id="top-tabContent">
            <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel"
              aria-labelledby="all-link">
              <div class="row">
                <div class="col-xxl-8 col-xl-6 box-col-12">
                  <h6 class="mb-2">Search result for "Pixelstrap"</h6>
                  <div class="info-block"><a href="">https://themeforest.net/user/pixelstrap/portfolio/</a>
                    <h6>PixelStrap - Portfolio | ThemeForest</h6>
                    <p>2024's Best Selling Creative WP Themes. The #1 Source of Premium WP Themes! ThemeForest 45,000+
                      WP Themes & Website Templates From $2. Check it Out! </p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                  <div class="info-block"><a href="">PixelStrap - Portfolio | ThemeForestthemeforest.net › user › </a>
                    <h6>PixelStrap - Portfolio | ThemeForest</h6>
                    <p>The #1 marketplace for premium website templates, including themes for WordPress, Magento,
                      Drupal, Joomla, and more. Create a website, fast.</p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                  <div class="info-block"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                    <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                    <p>yuri introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in
                      Surat.</p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i
                            class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i
                            class="icofont icofont-ui-rate-blank"></i></li>
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                  <div class="info-block"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                    <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                    <p>yuri introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in
                      Surat.</p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i
                            class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i
                            class="icofont icofont-ui-rate-blank"></i></li>
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-6 box-col-12 mt-4">
                  <div class="card o-hidden">
                    <div class="blog-box blog-shadow"><img class="img-fluid"
                        src="{{ asset('assets/images/blog/blog.jpg') }}" alt="">
                      <div class="blog-details">
                        <p>20 Feb 2024</p>
                        <h4>Gaekwad III, who dreamed of transforming this big city into an educational.</h4>
                        <ul class="blog-social">
                          <li><i class="icofont icofont-user"></i>Mark Jecno</li>
                          <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="info-block"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                    <h6>Pixelstrap Website Templates from ThemeForest </h6>
                    <p>Get 59 pixelstrap website templates on ThemeForest. Buy pixelstrap website templates from $7. All
                      created by our Global Community of independent Web ...</p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i
                            class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i
                            class="icofont icofont-ui-rate-blank"></i></li>
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                  <div class="info-block"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                    <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                    <p>yuri introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in
                      Surat.</p>
                    <div class="star-ratings">
                      <ul class="search-info">
                        <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i
                            class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i
                            class="icofont icofont-ui-rate-blank"></i></li>
                        <li>3 stars</li>
                        <li>590 votes</li>
                        <li>Theme</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 m-t-30">
                  <nav aria-label="...">
                    <ul class="pagination pagination-primary justify-content-end">
                      <li class="page-item disabled"><a class="page-link" href="#!" tabindex="-1">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#!">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#!">2<span
                            class="sr-only">(current)</span></a></li>
                      <li class="page-item"><a class="page-link" href="#!">3</a></li>
                      <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
              <div>
                <h6 class="mb-2">About 12,120 results (0.50 seconds)</h6>
                <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/01.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/01.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/02.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/02.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/03.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/03.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/04.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/04.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/05.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/05.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/011.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/011.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/010.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/010.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                  <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a
                      href="{{ asset('assets/images/big-lightgallry/08.jpg') }}" itemprop="contentUrl"
                      data-size="1600x950"><img src="{{ asset('assets/images/lightgallry/08.jpg') }}"
                        itemprop="thumbnail" alt="Image description">
                      <div class="caption">
                        <h4>Portfolio Title</h4>
                        <p>An admin theme is a visually beautiful and practical design template created especially for a
                          website's or application's backend.</p>
                      </div>
                    </a>
                    <figcaption itemprop="caption description">
                      <h4>Portfolio Title</h4>
                      <p>An admin theme is a visually beautiful and practical design template created especially for a
                        website's or application's backend.</p>
                    </figcaption>
                  </figure>
                </div>
                <!-- Root element of PhotoSwipe. Must have class pswp.-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                  <!--
                    Background of PhotoSwipe.
                    It's a separate element, as animating opacity is faster than rgba().
                    -->
                  <div class="pswp__bg"></div>
                  <!-- Slides wrapper with overflow:hidden.-->
                  <div class="pswp__scroll-wrap">
                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                    <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>
                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">
                        <!-- Controls are self-explanatory. Order can be changed.-->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                        <!-- element will get class pswp__preloader--active when preloader is running-->
                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-t-30">
                <nav aria-label="...">
                  <ul class="pagination pagination-primary">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2 <span
                          class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
              <div class="row">
                <div class="col-xxl-6">
                  <h6 class="mb-2">About 6,000 results (0.60 seconds)</h6>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Utilize HTML, CSS, JavaScript, and UX design to create a to-do list.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Tips for gaining proficiency in UI/UX design.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Tips for gaining proficiency in CSS.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-6">
                  <p class="pb-4">About 6,000 results (0.60 seconds)</p>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Utilize HTML, CSS, JavaScript, and UX design to create a to-do list.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Tips for gaining proficiency in CSS.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex info-block">
                    <iframe width="200" height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                    <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                      <h6>Tips for gaining proficiency in UI/UX design.</h6>
                      <div class="star-ratings">
                        <ul class="search-info">
                          <li>3 stars</li>
                          <li>590 votes</li>
                          <li>Theme</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 m-t-30">
                  <div>
                    <nav aria-label="...">
                      <ul class="pagination pagination-primary">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
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
<script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
@endsection