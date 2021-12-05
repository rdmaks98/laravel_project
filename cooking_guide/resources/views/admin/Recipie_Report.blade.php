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
            <form action="{{ route('r_recipi') }}" method="post">
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
              <div class="input-daterange input-group col-sm-10">
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
              <h4 class="page-title">Recipie Report</h4>
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
                    @if($r_recipi == "")
                         <h5 style="text-align: center;">Please Select Fromdate to Todate</h5>
                         @else
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Indgriants</th>
                            <th>Serve</th>
                            <th>Timing</th>
                            <th>Description</th>
                            <th>created</th>
                            <td>updated</td>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($r_recipi as $get)
                          <tr>
                            <td>{{ $get->r_id }}</td>
                            <td>{{ $get->r_name }}</td>
                            <td><?php $set = $get->ind; 
                             echo($set); ?></td>
                            <td>{{ $get->serve }}</td>
                            <td>{{ $get->timing }}</td>
                            <td>{{ $get->r_desc }}</td>
                            <td>{{ $get->cretaed_at }}</td>
                            <td>{{ $get->updated_at }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                        </tfoot>
                      </table>
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