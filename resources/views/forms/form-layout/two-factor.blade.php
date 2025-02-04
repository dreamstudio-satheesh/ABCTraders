@extends('layouts.partials.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
@endsection

@section('breadcrumb')
<div class="col-auto header-right-wrapper page-title">
  <div>
    <h2>Two Factor</h2>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item f-w-500">Form Layout</li>
        <li class="breadcrumb-item f-w-500 active">Two Factor</li>
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
        <div class="card-body authentication-body">
          <div class="authentication-wrapper">
            <h2>Two-factor Authentication</h2>
            <p class="f-m-light mt-1">Click on the authentication button below and scan the QR code</p><img
              src="{{ asset('assets/images/forms/qr-scan.png') }}" alt="qr-scan">
          </div>
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle">Two-factor authentication</h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="modal-toggle-wrapper">
                    <p>
                      To log into your account, you'll also need to enter your username, password, and a code that was
                      sent to you through SMS or an app.</p>
                    <div class="authentication-options">
                      <div class="form-check radio radio-primary ps-0">
                        <ul class="radio-wrapper">
                          <li>
                            <input class="form-check-input" id="radioOptionWizard1" type="radio" name="radio2"
                              value="option2">
                            <label class="form-check-label mb-0" for="radioOptionWizard1"><i
                                class="fa fa-spin fa-cog"></i><span class="d-flex flex-column"><span>2FA
                                  Authenticator</span><span>Obtain codes from a authy/google authenticator/ios 15
                                  etc.</span></span></label>
                          </li>
                          <li>
                            <input class="form-check-input" id="radioOptionWizard2" type="radio" name="radio2"
                              value="option2" checked="">
                            <label class="form-check-label mb-0" for="radioOptionWizard2"><i
                                class="fa fa-comments"></i><span class="d-flex flex-column"><span>SMS</span><span>The
                                  backup login method will be sent to you via SMS if you require
                                  it.</span></span></label>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <button class="btn btn-dark rounded-pill w-100 mt-3" data-bs-target="#exampleModalToggle2"
                      data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                    <button class="btn rounded-pill w-100 pb-0 dark-toggle-btn" type="button"
                      data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggle2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle1">Scan QR code</h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body main-qr-code">
                  <div class="modal-toggle-wrapper">
                    <p>
                      Scan the QR code using an authenticator app and website such as abc authenticator, OTP xyz, or pqr
                      authenticator. You must input the six-digit code it generates below.</p>
                    <div class="modal-img">
                      <div class="qr-img"><img src="{{ asset('assets/images/forms/qr-code.png') }}" alt="qr-code"></div>
                      <div class="qr-content">
                        <div
                          class="alert alert-light-dark light alert-dismissible fade show text-dark border-left-light"
                          role="alert"><i class="fa fa-exclamation-triangle"></i>
                          <div><span>If your qr code is not working then enter this code in your input
                              field.</span><span class="f-w-500">TYU78DE29OLAAWCVNTYFGESWQ31098QW</span></div>
                          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      </div>
                    </div>
                    <form class="needs-validation" novalidate="">
                      <input class="form-control" id="AccountName" type="text" required="" placeholder="Enter QR Code">
                      <div class="valid-feedback">Looks good!</div>
                    </form>
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div><a class="btn btn-primary mt-5" data-bs-toggle="modal" href="#exampleModalToggle" role="button">2 factor
            authentication</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body email-verify">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="card-wrapper border rounded-3 h-100">
                <div class="row g-1">
                  <div class="col-xxl-4 box-col-5">
                    <div class="authenticate"><img class="img-fluid" src="{{ asset('assets/images/forms/email.png') }}"
                        alt=""></div>
                  </div>
                  <div class="col-xxl-8 box-col-7">
                    <h2>Email Verification</h2>
                    <p>A verification code has been sent to your email. This code will be valid for 15 minutes.</p>
                    <div class="input-group mb-3">
                      <input class="form-control" type="text" placeholder="Please enter the code here"
                        aria-label="basic-addon2" aria-describedby="basic-addon2"><span
                        class="input-group-text bg-primary" id="basic-addon2">Verify</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card-wrapper border rounded-3 h-100">
                <div class="authenticate">
                  <h2>Verification Code</h2><img class="img-fluid"
                    src="{{ asset('assets/images/forms/authenticate.png') }}" alt="authenticate"><span>We've sent a
                    verification code to</span><span>+91********70</span>
                  <form class="row">
                    <div class="col">
                      <h5>Your OTP Code here:</h5>
                    </div>
                    <div class="col otp-generate">
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                      <input class="form-control code-input" type="text" maxlength="1" pattern="[0-9]" required>
                    </div>
                    <div class="col">
                      <button class="btn btn-primary w-100" type="submit">Verify</button>
                    </div>
                    <div> <span>Not received your code?</span><span><a href="#!">Resend </a>OR <a href="#!">Call
                        </a></span></div>
                  </form>
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
<script src="{{ asset('assets/js/form-wizard/verification.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection