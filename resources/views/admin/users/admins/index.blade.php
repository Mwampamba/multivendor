@include('admin.partials.header')
@include('admin.partials.navbar')
  <div class="container-fluid page-body-wrapper"> 
    @include('admin.partials.sidebar')
    <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row"> 
            <div class="col-12 mb-4 mb-xl-0">
                <h4 class="card-title float-left">{{ $title }}</h4> 
                    <a href="#" class="btn btn-success btn-sm float-right">ADD NEW USER</a>
            </div>
            <div class="table-responsive">  
                <table id="dataTable" class="table table-hover table-bordered">
                    <thead>
                        <tr> 
                            <th>S/N</th>
                            <th>Full name</th>
                            <th>Profile</th>                                     
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $index=>$admin)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>
                                    @if(!empty($admin->profile))
                                        <img src="{{ url($admin->profile) }}" style="max-width:130px;margin-top:5px;"/>
                                    @else 
                                        <img src="{{ asset('profile/admin/default.png')}}" style="max-width:130px;margin-top:5px;"/>
                                    @endif </td>
                                <td><a href="#" class="btn btn-warning">Edit</a></td>
                                <td><a href="#" onclick="return confirm('Are you sure you want to delete this admin?')" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

</div>