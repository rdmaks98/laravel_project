@include('admin/header')
@include('admin/sidebar')
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
              <div class="card">
              </div>
            </div>
          </div>
          <!-- End Row-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">View User</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>name</th>
                      <th>Email</th>
                      <th>Mobil no</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @if(empty($user))
                    <h3 align="center">No User Avialable</h3>
                  @else
                  <tbody>
                    @foreach($user as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->mono }}</td>
                      <td style="padding: 0px;"> 
                            <!-- status -->
                            @if($value->status == 0)
                              <a href='{{ route("userstatus") }}/<?php echo $value->id ?>'>
                            <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button></a>
                            @else
                               <a href='{{ route("userstatus") }}/<?php echo $value->id ?>'>
                            <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i class="fa fa-check" aria-hidden="true"></i> <span>Active</span> </button>
                            </a>
                            @endif
                            <a href='{{ route("userdelete") }}/<?php echo $value->id ?>'>
                            <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="confirm-btn-alert"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></a>
                            
                          </td>
                    </tr>
                          @endforeach
                  </tbody>
                  @endif
                  <tfoot>
                  </tfoot>
                </table>
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
      <!-- Bootstrap core JavaScript-->
    </body>
  @include('admin/footer')