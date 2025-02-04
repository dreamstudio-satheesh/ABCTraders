@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Project List</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Project</li>
        <li class="breadcrumb-item f-w-500 active">Project List</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row project-cards">
    <div class="col-md-12 project-list">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                  role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
              <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile"
                  role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
              <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact"
                  role="tab" aria-controls="top-contact" aria-selected="false"><i
                    data-feather="check-circle"></i>Done</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary"
              href="{{ route('admin.projectcreate') }}"> <i data-feather="plus-square"> </i>Create New Project</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
              <div class="row">
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
              <div class="row">
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Doing</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-primary">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-primary">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-primary">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
              <div class="row">
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Universal admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">24</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">40</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+3 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-primary">Done</span>
                    <h4>Endless admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Themeforest, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">12 </div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">5</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">7</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+10 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>70% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar"
                          style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                  <div class="project-box"><span class="badge badge-success">Done</span>
                    <h4>Poco admin Design</h4>
                    <div class="d-flex"><img class="img-20 me-1 rounded-circle"
                        src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title="">
                      <div class="flex-grow-1">
                        <p>Envato, australia</p>
                      </div>
                    </div>
                    <p>Users have a significant influence on how well-functioning and successful different software and
                      internet services are.</p>
                    <div class="row details">
                      <div class="col-6"><span>Issues </span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Resolved</span></div>
                      <div class="col-6 txt-success">40</div>
                      <div class="col-6"> <span>Comment</span></div>
                      <div class="col-6 txt-success">20</div>
                    </div>
                    <div class="customers">
                      <ul>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/3.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/5.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block"><img class="img-30 rounded-circle"
                            src="{{ asset('assets/images/user/1.jpg') }}" alt="" data-original-title="" title=""></li>
                        <li class="d-inline-block ms-2">
                          <p class="f-12">+2 More</p>
                        </li>
                      </ul>
                    </div>
                    <div class="project-status mt-4">
                      <div class="d-flex mb-0">
                        <p>100% </p>
                        <div class="flex-grow-1 text-end"><span>Done</span></div>
                      </div>
                      <div class="progress" style="height: 5px">
                        <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%"
                          aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/touchspin_2/custom_touchspin.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
@endsection