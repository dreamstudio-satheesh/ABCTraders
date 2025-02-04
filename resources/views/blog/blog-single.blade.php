@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Blog Single</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Blog</li>
        <li class="breadcrumb-item f-w-500 active">Blog Single</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="blog-single">
            <div class="blog-box blog-details"><img class="img-fluid w-100"
                src="{{ asset('assets/images/blog/blog-single.jpg') }}" alt="blog-main">
              <div class="blog-details">
                <ul class="blog-social">
                  <li>25 July 2024</li>
                  <li><i class="icofont icofont-user"></i><span>William C. Jennings </span></li>
                  <li><i class="icofont icofont-thumbs-up"></i>2<span>Hits</span></li>
                  <li><i class="icofont icofont-ui-chat"></i>692 Comments</li>
                </ul>
                <h4>Using a camera's lens to record moments in time is the art form known as photography.</h4>
                <div class="single-blog-content-top">
                  <p>To produce aesthetically striking photos, it entails the deft use of light, composition, and
                    subject matter. Technology breakthroughs have made photography more widely available to the public,
                    enabling people to express their creativity and share their own viewpoints with a global
                    audience.They use meticulous attention to details like colour balance, depth of focus, and framing
                    to produce aesthetically stunning photos that arouse feelings and convey tales.</p>
                  <p>There are many diverse genres within the area of photography, such as fashion, landscape, portrait,
                    and documentary photography, each needing a unique blend of technical abilities and creative vision.
                    Expert photographers have a thorough grasp of their gear and know how to get the best results by
                    experimenting with different lenses, lighting setups, and post-processing software.</p>
                  <p>
                    With the advent of digital technology, photography has become a vital aspect of our daily life. Ad
                    campaigns and social media platforms alike may benefit greatly from the influence that a well-taken
                    photo can have on its audience. It has the power to spread ideas, arouse sentimentality, and even
                    spark societal change. Photography has developed into an effective tool for documenting and
                    storytelling because of its capacity to stop time and retain memories.</p>
                </div>
              </div>
            </div>
            <section class="comment-box">
              <h3 class="f-w-600">Comment</h3>
              <hr>
              <ul>
                <li>
                  <div class="d-flex align-self-center"><img class="align-self-center"
                      src="{{ asset('assets/images/blog/comment.jpg') }}" alt="Generic placeholder image">
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-4">
                          <h6 class="mt-0">Nina P. Crosby<span> ( Designer )</span></h6>
                        </div>
                        <div class="col-md-8">
                          <ul class="comment-social float-start float-md-end">
                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                            <li><i class="icofont icofont-ui-chat"></i>692 Comments</li>
                          </ul>
                        </div>
                      </div>
                      <p>To create aesthetically striking photos, one must have a strong grasp of composition and
                        lighting in addition to technical proficiency and creative vision. A professional photographer
                        has to have an excellent eye for detail and be able to tell stories and convey emotions via
                        their images.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/9.jpg') }}"
                          alt="Generic placeholder image">
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-xl-12">
                              <h6 class="mt-0">Thomas A. Deloach<span> ( UX Designer )</span></h6>
                            </div>
                          </div>
                          <p>They meticulously plan each shot, considering factors such as lighting, angles, and props
                            to convey the desired message effectively. Commercial photographers are adept at using their
                            technical expertise to highlight the unique features and qualities of their subjects, often
                            manipulating lighting and post-processing techniques to achieve the desired aesthetic.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="d-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/4.jpg') }}"
                      alt="Generic placeholder image">
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-4">
                          <h6 class="mt-0">John E. Cammack<span> ( Designer )</span></h6>
                        </div>
                        <div class="col-md-8">
                          <ul class="comment-social float-start float-md-end">
                            <li><i class="icofont icofont-thumbs-up"></i>5 Hits</li>
                            <li><i class="icofont icofont-ui-chat"></i>400 Comments</li>
                          </ul>
                        </div>
                      </div>
                      <p>To create aesthetically striking photos, one must have a strong grasp of composition and
                        lighting in addition to technical proficiency and creative vision. A professional photographer
                        has to have an excellent eye for detail and be able to tell stories and convey emotions via
                        their images.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/12.png') }}"
                      alt="Generic placeholder image">
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-4">
                          <h6 class="mt-0">Daniele G. Ferguson<span> ( Designer )</span></h6>
                        </div>
                        <div class="col-md-8">
                          <ul class="comment-social float-start float-md-end">
                            <li><i class="icofont icofont-thumbs-up"></i>10 Hits</li>
                            <li><i class="icofont icofont-ui-chat"></i>625 Comments</li>
                          </ul>
                        </div>
                      </div>
                      <p>They meticulously plan each shot, considering factors such as lighting, angles, and props to
                        convey the desired message effectively. Commercial photographers are adept at using their
                        technical expertise to highlight the unique features and qualities of their subjects, often
                        manipulating lighting and post-processing techniques to achieve the desired aesthetic.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/14.png') }}"
                      alt="Generic placeholder image">
                    <div class="flex-grow-1">
                      <div class="row">
                        <div class="col-md-4">
                          <h6 class="mt-0">Nathan C. Wilson<span> ( Painter )</span></h6>
                        </div>
                        <div class="col-md-8">
                          <ul class="comment-social float-start float-md-end">
                            <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                          </ul>
                        </div>
                      </div>
                      <p>They meticulously plan each shot, considering factors such as lighting, angles, and props to
                        convey the desired message effectively. Commercial photographers are adept at using their
                        technical expertise to highlight the unique features and qualities of their subjects, often
                        manipulating lighting and post-processing techniques to achieve the desired aesthetic.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </section>
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