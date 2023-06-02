@include('front.partials.header')
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
                <h3 class="font-weight-light float-left">Sign in</h3>
               <a href="{{ url('/') }}"><img src="{{ asset('admin/images/logo.png') }}" class="float-right" alt="logo"></a>
              </div> <br>
              <div class="error-message">
                @if(Session::has('success'))
                  <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <strong></strong>{{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if(Session::has('error'))
                  <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong></strong>{{ Session::get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
              </div>
              <form action="{{ route('adminLogin') }}" method="POST" class="pt-3">
                @csrf
                <div class="form-group">
                  <label>Email <span class="text-danger">*</span></label>
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-lg rounded" />
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Password <span class="text-danger">*</span></label>
                  <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg rounded" />
                  @error('password')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <a href="#" class="auth-link text-black">Don't have account?</a>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </div> 
 
@include('front.partials.footer')
