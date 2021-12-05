<div id="wrapper">
  <div class="clearfix"></div>
  <?php $user = \App\User::orderBy('id','desc')->get(); 
        $category = \App\Category::orderBy('cat_id','desc')->get();
        $recipies = \App\Recipies::join('categories','categories.cat_id', '=', 'recipies.cat_id')->orderBy('r_id','desc')->limit(8)->get();
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
      <div class="row mt-3">
        <a href="{{ url('admin/view_user') }}" class="col-12 col-lg-6 col-xl-4">
          <div>
            <div class="card gradient-bloody">
              <div class="card-body">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="text-white">Total User</p>
                    <h4 class="text-white line-height-5">{{ count($user) }}</h4>
                  </div>
                  <div class="w-circle-icon rounded-circle border border-white">
                    <i class="fa fa-users text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="{{ url('category_view') }}" class="col-12 col-lg-6 col-xl-4">
          <div>
            <div class="card gradient-scooter">
              <div class="card-body">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="text-white">Total Category</p>
                    <h4 class="text-white line-height-5">{{ count($category) }}</h4>
                  </div>
                  <div class="w-circle-icon rounded-circle border border-white">
                    <i class="zmdi zmdi-view-quilt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="{{ url('recipies_view') }}" class="col-12 col-lg-6 col-xl-4"> 
          <div>
            <div class="card gradient-blooker">
              <div class="card-body">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="text-white">Total Recipies</p>
                    <h4 class="text-white line-height-5">{{ count($recipies) }}</h4>
                  </div>
                  <div class="w-circle-icon rounded-circle border border-white">
                    <img src="{{ url('assetsadmin/images/fried.png') }}" height="25px" width="31px" style="top:17px;position:relative;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <br>
      <!--End Row-->
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-10">
          <div class="card">
            <div class="card-header border-0">
              All User Details
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile no</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user as $val)
                  <tr>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $val->mono }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6 col-xl-10">
          <div class="card">
            <div class="card-header border-0">
              All Catgory Details
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($category as $val)
                  <tr>
                    <td>{{ $val->cat_id }}</td>
                    <td>{{ $val->cat_name }}</td>
                    <td><img src="{{ url('category') }}/<?php echo $val->cat_image ?>" height="75px" width="81px"></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12 col-lg-6 col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              All Recipie Details
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Ingradiants</th>
                    <th>Category Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($recipies as $val)
                  <tr>
                    <td>{{ $val->r_name }}</td>
                    <td><img src="{{ url('recipies') }}/<?php echo $val->r_image ?>" height="80px" width="70px"></td>
                    <td>{{ $val->ind }}</td>
                    <td>{{ $val->cat_name }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--End Row-->

      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
  </div>
  <!--End content-wrapper-->
  <!--Start Back To Top Button-->
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->