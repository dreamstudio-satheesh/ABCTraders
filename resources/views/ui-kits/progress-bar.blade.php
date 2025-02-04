@extends('layouts.partials.simple.master')

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Progress</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">UI Kits</li>
        <li class="breadcrumb-item f-w-500 active">Progress</li>
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
          <h2>Basic progress bars</h2>
          <p class="f-m-light mt-2">
            Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
            We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar. The
            <code>.progress-bar </code>requires an inline style, utility class, or custom CSS to set their width.
          </p>
        </div>
        <div class="card-body progress-showcase">
          <div class="row">
            <div class="col">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="card title-line">
            <div class="card-header">
              <h2>Progress bars striped</h2>
              <p class="f-m-light mt-2">Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to
                apply a stripe via CSS gradient over the progress bar's background color Using CSS Effects.</p>
            </div>
            <div class="card-body progress-showcase">
              <div class="row">
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 10%"
                      aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%"
                      aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%"
                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%"
                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card title-line">
            <div class="card-header">
              <h2>Progress bars animated</h2>
              <p class="f-m-light mt-2">The striped gradient can also be animated. Add
                <code>.progress-bar-animated</code> to<code>.progress-bar</code> to animate the stripes right to left
                via CSS3 animations.
              </p>
            </div>
            <div class="card-body progress-showcase">
              <div class="row">
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar"
                      style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar-animated progress-bar-striped bg-warning" role="progressbar"
                      style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar-animated progress-bar-striped bg-danger" role="progressbar"
                      style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar-animated progress-bar-striped bg-success" role="progressbar"
                      style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="card title-line">
            <div class="card-header">
              <h2>Multiple bars</h2>
              <p class="f-m-light mt-2">Include multiple progress bars in a progress component if you need.</p>
            </div>
            <div class="card-body progress-showcase">
              <div class="row">
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="20"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-light" role="progressbar" style="width: 10%" aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card title-line custom-number-steps">
            <div class="card-header">
              <h2>Progress with number steps</h2>
              <p class="f-m-light mt-2">
                Use the <code>.position-absolute </code>to set progress numbers steps.</p>
            </div>
            <div class="card-body">
              <div class="position-relative m-3 progress-number">
                <div class="progress progress-wrapper">
                  <div class="progress-bar" role="progressbar" aria-label="Progress" style="width: 50%;"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button class="position-absolute top-0 start-0 translate-middle btn-sm btn-primary rounded-circle"
                  type="button">1</button>
                <button class="position-absolute top-0 start-50 translate-middle btn-sm btn-primary rounded-circle"
                  type="button">2</button>
                <button class="progress-btn position-absolute top-0 start-100 translate-middle btn-sm rounded-circle"
                  type="button">3</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card title-line">
        <div class="card-header">
          <h2>Custom progress bars</h2>
          <p class="f-m-light mt-2">Use the <code>.progress-bar-animated </code>and
            <code>.progress-bar-striped </code>to animate the stripes right to left.
          </p>
        </div>
        <div class="card-body progress-showcase">
          <div class="row">
            <div class="col">
              <h6 class="mb-2">0% Getting Started </h6>
              <div class="progress mb-4">
                <div class="progress-bar-animated progress-bar-striped text-center" role="progressbar" aria-valuenow="0"
                  aria-valuemin="0" aria-valuemax="100"> </div>
              </div>
              <h6 class="mb-2">30% Getting Uploading...</h6>
              <div class="progress mb-4">
                <div class="progress-bar-animated progress-bar-striped bg-primary text-center" role="progressbar"
                  style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
              </div>
              <h6 class="mb-2">60% Getting Pause...</h6>
              <div class="progress mb-4">
                <div class="progress-bar-animated progress-bar-striped bg-secondary text-center" role="progressbar"
                  style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
              <h6 class="mb-2">70% Getting Uploading...</h6>
              <div class="progress mb-4">
                <div class="progress-bar-animated progress-bar-striped bg-success text-center" role="progressbar"
                  style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
              <h6 class="mb-2">100% Completed</h6>
              <div class="progress">
                <div class="progress-bar-animated progress-bar-striped bg-dark text-center" role="progressbar"
                  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="card height-equal title-line">
            <div class="card-header">
              <h2>Small progress bars</h2>
              <p class="f-m-light mt-2">Use <code> .sm-progress-bar</code> class to change progress size to small.</p>
            </div>
            <div class="card-body progress-showcase progress-b-space">
              <div class="row">
                <div class="col">
                  <div class="progress sm-progress-bar overflow-visible mt-4">
                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                      role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                      <span class="txt-primary progress-label">30 MB Data</span><span class="animate-circle"></span>
                    </div>
                  </div>
                  <div class="progress sm-progress-bar overflow-visible">
                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                      role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                      <span class="txt-primary progress-label">50 MB Data</span><span class="animate-circle"></span>
                    </div>
                  </div>
                  <div class="progress sm-progress-bar overflow-visible">
                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                      role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                      <span class="txt-primary progress-label">75 MB Data</span><span class="animate-circle"></span>
                    </div>
                  </div>
                  <div class="progress sm-progress-bar overflow-visible">
                    <div class="progress-bar-animated small-progressbar bg-primary rounded-pill progress-bar-striped"
                      role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                      <span class="txt-primary progress-label">90 MB Data</span><span class="animate-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card height-equal title-line">
            <div class="card-header">
              <h2>Large progress bars</h2>
              <p class="f-m-light mt-2">Use <code> .lg-progress-bar</code> class to change progress size to large.</p>
            </div>
            <div class="card-body progress-showcase">
              <div class="row">
                <div class="col">
                  <div class="progress lg-progress-bar">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                  <div class="progress lg-progress-bar">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
                  <div class="progress lg-progress-bar">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                  <div class="progress lg-progress-bar">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card title-line">
        <div class="card-header">
          <h2>Custom height progress bars</h2>
          <p class="f-m-light mt-2">Set a height value on the <code>.progress-bar</code>, so if you change that value
            the outer<code>.progress</code> will automatically resize accordingly.</p>
        </div>
        <div class="card-body progress-showcase">
          <div class="row">
            <div class="col">
              <div class="progress" style="height: 1px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress" style="height: 11px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress" style="height: 19px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100"></div>
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
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection