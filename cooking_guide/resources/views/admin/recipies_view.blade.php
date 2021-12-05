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
              <a href="{{ url('addrecipies') }}"><button style="position:relative;left:86%;" class="btn btn-success waves-effect waves-light btn-lg">Add Recipies</button></a>
            </div>
          </div>
        </div>
        <!-- End Row-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                View Recipies
              </div>
             <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>name</th>
                      <th>Ingrediants</th>
                      <th>Description:</th>
                      <th>Category Name:</th>
                      <th>Serve:</th>
                      <th>Timing</th>
                      <th>Image</th>
                      <th>Action:</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($recipies as $reci)
                    <tr>
                      <td>{{ $reci->r_id }}</td>
                      <td>{{ $reci->r_name }}</td>
                      <td>{{ $reci->ind }}</td>
                      <td>{{ $reci->r_desc }}</td>
                      <td>{{ $reci->cat_name }}</td>
                      <td>{{ $reci->serve }}</td>
                      <td>{{ $reci->timing }}</td>
                      <td><img src="{{ url('/recipies')}} /<?php echo $reci->r_image ?>" height="50px" width="70px"></td> 
                      <td> 
                        @if($reci->r_status == 0)
                        <a href='{{ route("recipiesstatus") }}/<?php echo $reci->r_id ?>'>
                          <button type="button" class="btn btn-dark waves-effect waves-light btn-sm"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button></a>
                          @else
                          <a href='{{ route("recipiesstatus") }}/<?php echo $reci->r_id ?>'>
                            <button type="button" class="btn btn-dark waves-effect waves-light btn-sm"><i class="fa fa-check" aria-hidden="true"></i> <span>Active</span> </button></a>
                            @endif
                            <!-- edit -->
                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#a<?php echo $reci->r_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Edit</span> </button>
                            <a href="{{ route('recipiesdelete') }}/<?php echo $reci->r_id ?>">
                              <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="confirm-btn-alert"><i class="fa fa-trash" aria-hidden="true"></i>Delet</button></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                      <!-- The Modal -->
                      @foreach($recipies as $edit)
                      <div class="modal fade" id="a<?php echo $edit->r_id ?>">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Recipies</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form id="signupForm" action="{{ route('recipiesedit') }}/<?php echo $edit->r_id ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="r_id" value="{{ $edit->r_id }}">
                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input-10" name="r_name" value="{{ $edit->r_name }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Ingrediants</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input-10" name="ind" value="{{ $edit->ind }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Description</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input-10" name="r_desc" value="{{ $edit->r_desc }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Timing</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input-10" name="timing" value="{{ $edit->timing }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Serve</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input-10" name="serve" value="{{ $edit->serve }}">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Category Name</label>
                                  <div class="col-sm-8">
                                    <select type="text" class="form-control" id="input-10" name="cat_id">
                                      @foreach($category as $cat)
                                      <option name="cat_id" value=" {{ $cat->cat_id }}" {{ $edit->cat_id == $cat->cat_id ? 'selected' : '' }}>{{ $cat->cat_name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input-10" class="col-sm-3 col-form-label">Image</label>
                                  <div class="col-sm-8">
                                    <input type="file" class="form-control" id="input-10" name="r_image" value="{{ $edit->r_image }}">
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
                      @endforeach
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