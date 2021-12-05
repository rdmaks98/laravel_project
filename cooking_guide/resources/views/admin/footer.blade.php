<!--Start footer-->
<footer class="footer">
  <div class="container">
    <div class="text-center">
      Copyright © 2018 Cooking Guide
    </div>
  </div>
</footer>
<!--End footer-->
<!-- Bootstrap Core Javascript -->
<script src="{{ url('assetsadmin/js/jquery.min.js') }}"></script>
    <script src="{{ url('assetsadmin/js/popper.min.js') }}"></script>
    <script src="{{ url('assetsadmin/js/bootstrap.min.js') }}"></script>
    <!-- simplebar js -->
    <script src="{{ url('assetsadmin/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- waves effect js -->
    <script src="{{ url('assetsadmin/js/waves.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ url('assetsadmin/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ url('assetsadmin/js/app-script.js') }}"></script>
    <!--Data Tables js-->
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <!-- responisive -->
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ url('assetsadmin/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
    <script>
      $(document).ready(function() {
      
       //Default data table
      
        $('#default-datatable').DataTable();
      
          var table = $('#example').DataTable( {
      
          responsive: true,
      
          buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
       } );
      
        table.on('draw.dt', function(){
      
         $('input').iCheck({
      
           checkboxClass: 'icheckbox_flat-green'
      
         });
      
       });
      
        table.buttons().container()
      
         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        
        } );
    </script>
    <!--Sweet Alerts -->
    <script src="{{ url('assetsadmin/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>
    <script src="{{ url('assets/plugins/alerts-boxes/js/sweet-alert-script.js') }}"></script>
    <script type="text/javascript">
      document.querySelector('#sweet-14').onclick = function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      };
    </script>

<!-- change password model -->
 <div class="modal fade" id="changepass">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="" action="{{ route('admin/changepassword') }}" method="post">
        @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ $message }}</li>
                    </ul>
                </div>
              @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Old Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="input-10" name="opassword" >
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">New Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="input-10" name="password" >
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="input-10" name="cpassword" >
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>