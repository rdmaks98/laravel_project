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
              <!-- <h4 class="page-title">Add Category</h4> -->
            </div>
          </div>
          <ul>
            <li class="reci_details" style="display:none;color:red;font-size:26px;">Please Fill The All Details</li>
          </ul>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title text-success">Add Recipies</div>
                  <hr>
                  <form action="{{ route('recipiesinsert') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <div class="form-group">
                      <label for="input-6">Recipies Name</label>
                      <input type="text" name="r_name" class="form-control form-control-rounded" id="r_name" placeholder="Enter Recipies Name" required>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Indgriants</label>
                      <input type="text" name="ind" class="form-control form-control-rounded" id="r_ind" placeholder="Enter indgriants in number" required>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Recipies Description</label>
                      <input type="text" name="r_desc" class="form-control form-control-rounded" id="r_desc" placeholder="Enter Recipies Description" required>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Timing</label>
                      <input type="text" name="timing" class="form-control form-control-rounded" id="timing" placeholder="Enter made recipies timing" required>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Serve</label>
                      <input type="text" name="serve" class="form-control form-control-rounded" id="serve" placeholder="Eated Person Value" required>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Select Category</label>
                      <select type="" name="cat_id" class="form-control form-control-rounded">
                        @foreach($category as $val)
                        <option value="{{ $val->cat_id }}" id="cat_name">{{ $val->cat_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Recipies Image</label>
                      <input type="file" name="r_image" class="form-control form-control-rounded" id="r_image" placeholder="?Upload Recipies Image" required>
                    </div><br>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success btn-round shadow-success px-5" id="recipies">Add</button>
                      <button type="reset" class="btn btn-danger btn-round shadow-danger px-5" id="cancel">cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--End Row-->
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
  </body>
@include ('admin/footer');
<script>
     $('#recipies').on('click',function()
    {
      var r_name = $('#r_name').val();
      var r_desc = $('#r_desc').val();
      var r_ind = $('#r_ind').val();
      var r_image = $('#r_image').val();
      // var cat_name = $('#cat_name').val();
      var timing = $('#timing').val();
      if(r_name == '' && r_desc == '' && r_ind == '' && timing == '' && r_image == ''){
            $('.reci_details').show();
                }
    });
    </script>