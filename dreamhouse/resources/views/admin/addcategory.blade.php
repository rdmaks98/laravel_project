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
              <!-- <h4 class="page-title">Add house</h4> -->
            </div>
          </div>
          <!-- End Breadcrumb-->
          <ul>
            <li class="cat_detail" style="display:none;color:red;font-size:26px;">Please Fill The All Details
            </li>
          </ul>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title text-success">Add category</div>
                  <hr>
                  <form action="{{ route('admin/insertcategory') }}" method="post" enctype="multipart/form-data">
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
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                    <div class="form-group">
                      <label for="input-6">Category name</label>
                      <input type="text" name="cat_name" class="form-control form-control-rounded" id="cat_name" placeholder="Enter Catgeory name">
                    </div>
                    
                    <div class="form-group">
                      <label for="input-6">category Image</label>
                      <input type="file" name="cat_image" class="form-control form-control-rounded" id="cat_image" placeholder="Upload category image" multiple>
                    </div><br>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success btn-round shadow-success px-5" id="signupForm">Add</button>
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
<script type="text/javascript">
    $('#signupForm').on('click',function()
    {
      var cat_name = $('#cat_name').val();
      var cat_img = $('#cat_image').val();
      if(cat_name == '' && cat_img == ''){
            $('.cat_detail').show();
                }
    });
</script>