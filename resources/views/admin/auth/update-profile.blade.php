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
                  <h4 class="card-title float-right">Update profile</h4>
                  <form action="{{ route('updateAdminProfile') }}" method="POST" enctype="multipart/form-data" class="pt-1">
                     @csrf 
                    <div class="form-group">
                      <label>Name <span class="text-danger">*</span></label>
                      <input type="text" name="name" placeholder="Name" value="{{ Auth::guard('admin')->user()->name }}" class="form-control form-control-lg rounded" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label>Profile<span class="text-danger">*</span></label>
                        <input type="file" name="profile" class="form-control form-control-lg rounded" />
                        @if(!empty(Auth::guard('admin')->user()->profile))
                            <img src="{{ url(Auth::guard('admin')->user()->profile) }}" style="max-width:130px;margin-top:5px;"/>
                        @else 
                            <img src="{{ asset('profile/admin/default.png')}}" style="max-width:130px;margin-top:5px;"/>
                        @endif 
                        @error('profile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                    <button type="submit" class="btn btn-primary mr-2 float-left">UPDATE PROFILE</button> 
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
