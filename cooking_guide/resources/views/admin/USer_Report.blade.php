@include('admin/header');
@include('admin/sidebar');
    <style type="text/css">
      .btn {
      font-size: 10px;
      padding: 8px 17px;
      }
    </style>
  </head>
  <body>
    <!-- Start wrapper-->
    <div id="wrapper">
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumb-->
          <h5>FROM-DATE TO TO-DATE</h5>
          <div id="dateragne-picker">
            <form action="{{ route('User_r') }}" method="post">
              <div class="input-daterange input-group col-sm-10">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <input type="date" class="form-control" name="from">
                <div class="input-group-prepend">
                 <span class="input-group-text">To</span>
                </div>
                <input type="date" class="form-control" name="to"> &nbsp;&nbsp;
                <button type="submit" class="btn btn-success waves-effect waves-light m-1" id="submit">submit</button>
              </div>
            </form>  
          </div>
        </div>

        <br>
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <h4 class="page-title">User Report</h4>
            </div>
          </div>
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
                <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if($User_r != "")
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>created</th>
                            <td>updated</td>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($User_r as $get)
                          <tr>
                            <td>{{ $get->id }}</td>
                            <td>{{ $get->name }}</td>
                            <td>{{ $get->email }}</td>
                            <td>{{ $get->gender }}</td>
                            <td>{{ $get->mono }}</td>
                            <td>{{ $get->created_at }}</td>
                            <td>{{ $get->updated_at }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                      @else
                        <h5 style="text-align: center;">Please Select Fromdate to Todate</h5>
                      @endif
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
    </div>
    
    <!--End wrapper-->