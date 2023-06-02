<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. All rights reserved.</span>
    </div>
</footer>

<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/js/template.js') }}"></script>
<script src="{{ asset('admin/js/settings.js') }}"></script>
<script src="{{ asset('admin/js/todolist.js') }}"></script>
<!-- <script src="{{ asset('admin/js/custom.js') }}"></script> -->

<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  $(document).ready( function(){
    $('#dataTable').DataTable();  
  });
</script>

<!-- Toastr popup -->
@if(Session::has('success'))
  <script>
    toastr.success("{!! Session::get('success') !!}");
  </script>
@endif

@if(Session::has('error'))
  <script>
    toastr.error("{!! Session::get('error') !!}");
  </script>
@endif

  </body>
</html>
