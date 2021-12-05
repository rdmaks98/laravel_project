@include ('admin/header');
@include ('admin/sidebar');

<body>
  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
          <div class="col-sm-9">
            <!-- <h4 class="page-title">View Category</h4> -->
          </div>
        </div>
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
        <!-- End Breadcrumb-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card-header">
              <a href="{{ url('addcategory') }}"><button style="position:relative;left:87%;" class="btn btn-success waves-effect waves-light btn-lg">Add category</button></a>
            </div>
          </div>
        </div>
        <!-- End Row-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
               <!--  <i class="fa fa-table"></i> -->
              View Category</div>
             <div class="card-body">
             	  @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>name</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $view)
                    <tr>
                      <td>{{ $view->cat_id }}</td>
                      <td>{{ $view->cat_name }}</td>
                      <td><img src="{{ url('/category') }}/<?php echo $view->cat_image ?>" height="50px" width="70px"></td> 
                      <td> 
                          <button type="button" class="btn btn-dark waves-effect waves-light btn-sm"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button></a>
                         
                        <a href=>
                            <button type="button" class="btn btn-dark waves-effect waves-light btn-sm"><i class="fa fa-check" aria-hidden="true"></i> <span>Active</span> </button></a>
                          
                            <!-- edit -->
                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Edit</span> </button>

                          <a href=''>
                              <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="confirm-btn-alert"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></a>
                              <!-- delete -->
                              <!-- <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="sweet-14">Delete</button> -->
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                      <!-- The Modal -->
                      <div class="modal fade" id="">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Category</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <form id="signupForm" action="" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="cat_id" value="">
                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-2 col-form-label">Category Name</label>
                                  <div class="col-sm-8">
                                    <select type="text" class="form-control" id="input-10" name="cat_name">
                                     
                                      <option name="cat_name" value=></option>
                                     
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-2 col-form-label">Category Image</label>
                                  <div class="col-sm-8">
                                    <input type="file" class="form-control" id="input-10" name="cat_image" value="">
                                  </div>
                                </div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Row-->
          </div>
          <!-- End container-fluid-->
        </div>
      
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        <!--End wrapper-->
        <!--Sweet Alerts -->
        <script src="{{ url('assetsadmin/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>
        <script src="{{ url('assetsadmin/plugins/alerts-boxes/js/sweet-alert-script.js') }}"></script>
      </body>
      @include ('admin/footer');