@include('admin.partials.header')
@include('admin.partials.navbar')
  <div class="container-fluid page-body-wrapper"> 
    @include('admin.partials.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row"> 
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                  <h4 class="card-title float-right">Update password</h4>
                  <form action="{{ route('updateAdminPassword') }}" method="POST" class="pt-1">
                     @csrf 
                    <div class="form-group">
                      <label>Current password <span class="text-danger">*</span></label>
                      <input type="password" name="old_password" id="old_password" placeholder="Current password" class="form-control form-control-lg rounded" />
                      <span id="check_password"></span>
                        @error('old_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>New password <span class="text-danger">*</span></label>
                        <input type="password" name="new_password" id="new_password" placeholder="New password" class="form-control form-control-lg rounded" />
                            @error('new_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                      <label>Confirm password <span class="text-danger">*</span></label>
                      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" class="form-control form-control-lg rounded" />
                            @error('confirm_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 float-left">UPDATE PASSWORD</button> 
                  </form>
                  <a href="{{ route('adminDashboard')}}" class="btn btn-danger float-right">CANCEL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    @include('admin.partials.footer')

</div>
