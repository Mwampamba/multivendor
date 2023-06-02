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
               @if($slug=="personal")
               <div class="card-body"> 
                  <h4 class="card-title float-right">Update Personal Details</h4>
                  <form action="{{ route('updateVendorDetails', ['personal']) }}" method="POST" class="pt-1">
                     @csrf 
                    <div class="form-group">
                      <label>Name <span class="text-danger">*</span></label>
                      <input type="text" name="name" placeholder="Name" value="{{ $vendorDetails['name'] }}" class="form-control form-control-lg rounded" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="form-group">
                      <label>Email <span class="text-danger">*</span></label>
                      <input type="email" name="email" placeholder="Email" value="{{ $vendorDetails['email'] }}" class="form-control form-control-lg rounded" readonly/>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Contact <span class="text-danger">*</span></label>
                      <input type="text" name="contact" placeholder="Contact" value="{{ $vendorDetails['contact'] }}" class="form-control form-control-lg rounded" />
                        @error('contact')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Address <span class="text-danger">*</span></label>
                      <input type="text" name="address" placeholder="Physical Address" value="{{ $vendorDetails['address'] }}" class="form-control form-control-lg rounded" />
                        @error('town')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 float-left">UPDATE</button> 
                  </form>
                  <a href="{{ route('adminDashboard')}}" class="btn btn-danger float-right">CANCEL</a>
                </div>
               @elseif($slug=="business") 
               <div class="card-body"> 
               <div class="row">
                  <h4 class="card-title float-right">Update Business Details</h4>
               </div>
                  <form action="{{ route('updateVendorDetails', ['business']) }}" method="POST" enctype="multipart/form-data" class="pt-1">
                     @csrf 
                    <div class="row">
                      <div class="form-group col-md-6 mb-3"> 
                        <label>Shop Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" placeholder="Shop Name" value="{{ $businessDetails['shop_name'] }}" class="form-control form-control-lg rounded" />
                          @error('name')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div> 
                      <div class="form-group col-md-6 mb-3">
                        <label>Shop Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" placeholder="Email" value="{{ $businessDetails['shop_email'] }}" class="form-control form-control-lg rounded" />
                          @error('email')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 mb-3">
                        <label>Shop Contact <span class="text-danger">*</span></label>
                        <input type="text" name="contact" placeholder="Contact" value="{{ $businessDetails['shop_contact'] }}" class="form-control form-control-lg rounded" />
                          @error('contact')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group col-md-6 mb-3">
                        <label>Shop Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" placeholder="Shop Address" value="{{ $businessDetails['shop_address'] }}" class="form-control form-control-lg rounded" />
                          @error('address')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 mb-3"> 
                      <label>TIN Number <span class="text-danger">*</span></label>
                      <input type="text" name="tin_number" placeholder="TIN Number" value="{{ $businessDetails['shop_tin_number'] }}" class="form-control form-control-lg rounded" />
                        @error('tin_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group col-md-6 mb-3">
                        <label>Business License <span class="text-danger">*</span></label>
                        <input type="text" name="business_license" placeholder="Business License" value="{{ $businessDetails['shop_business_license'] }}" class="form-control form-control-lg rounded" />
                          @error('business_license')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 mb-3"> 
                      <label>Town <span class="text-danger">*</span></label>
                      <input type="text" name="town" placeholder="Address" value="{{ $businessDetails['shop_town'] }}" class="form-control form-control-lg rounded" />
                        @error('town')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3">
                      <label>Website <span class="text-danger">*</span></label>
                      <input type="text" name="website" placeholder="Website" value="{{ $businessDetails['shop_website'] }}" class="form-control form-control-lg rounded" />
                        @error('website')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">
                    <label>Shop Proof Image<span class="text-danger">*</span></label>
                        <input type="file" name="shop_profile" class="form-control form-control-lg rounded" />
                        @if(!empty($businessDetails['shop_proof_image']))
                            <img src="{{ url($businessDetails['shop_proof_image']) }}" style="max-width:1000px;margin-top:5px;"/>
                        @else 
                            <p>No image were selected.</p>
                        @endif 
                        @error('shop_profile')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 float-left">UPDATE</button> 
                  </form>
                  <a href="{{ route('adminDashboard')}}" class="btn btn-danger float-right">CANCEL</a>
                </div>
               @elseif($slug=="bank")
               <div class="card-body"> 
                  <h4 class="card-title float-right">Update Bank Details</h4>
                  <form action="{{ route('updateVendorDetails', ['bank']) }}" method="POST" class="pt-1">
                     @csrf 
                    <div class="form-group">
                      <label>Account Holder Name <span class="text-danger">*</span></label>
                      <input type="text" name="holder_name" placeholder="Account Holder Name" value="{{ $bankDetails['account_holder_name'] }}" class="form-control form-control-lg rounded" />
                        @error('holder_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> 
                    <div class="form-group">
                      <label>Bank Name <span class="text-danger">*</span></label>
                      <input type="text" name="bank_name" placeholder="Email" value="{{ $bankDetails['bank_name'] }}" class="form-control form-control-lg rounded" />
                        @error('bank_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Account Number <span class="text-danger">*</span></label>
                      <input type="text" name="account_number" placeholder="Account Number" value="{{ $bankDetails['account_number'] }}" class="form-control form-control-lg rounded" />
                        @error('account_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2 float-left">UPDATE</button> 
                  </form>
                  <a href="{{ route('adminDashboard')}}" class="btn btn-danger float-right">CANCEL</a>
                </div>
               @endif
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    @include('admin.partials.footer')

</div>
