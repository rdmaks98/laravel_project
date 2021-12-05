
<!-- <section class="social_connect"> -->
    <!-- <div class="text-content container">  -->
        <!-- <div class="col-md-6"> -->
            <!-- <span class="social_heading">FOLLOW</span> -->
            <!-- <ul class="social_icons">
                <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                <li><a class="icon-mail color_animation" href="#"></a></li>
            </ul> -->
        <!-- </div> -->
        <!-- <div class="col-md-4">
            <span class="social_heading">OR DIAL</span>
            <span class="social_info"><a class="color_animation" href="tel:883-335-6524">(941) 883-335-6524</a></span>
        </div> -->
    <!-- </div> -->
<!-- </section> -->

<!-- ============ Contact Section  ============= -->
<!-- <section id="contact">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="inner contact"> -->
                  <!-- Form Area -->
                  <!-- <div class="contact-form"> -->
                      <!-- Form -->
                      <!-- <form id="contact-us" method="post" action="contact.php"> -->
                          <!-- Left Inputs -->
                          <!-- <div class="col-md-6 "> -->
                              <!-- Name -->
                              <!-- <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" /> -->
                              <!-- Email -->
                              <!-- <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" /> -->
                              <!-- Subject -->
                              <!-- <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" /> -->
                          <!-- </div> -->
                          <!-- End Left Inputs -->
                          <!-- Right Inputs -->
                          <!-- <div class="col-md-6"> -->
                              <!-- Message -->
                              <!-- <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea> -->
                          <!-- </div> -->
                          <!-- End Right Inputs -->
                          <!-- Bottom Submit -->
                          <!-- <div class="relative fullwidth col-xs-12"> -->
                              <!-- Send Button -->
                              <!-- <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button>  -->
                          <!-- </div> -->
                            <!-- End Bottom Submit -->
                          <!-- Clear -->
                          <!-- <div class="clear"></div> -->
                      <!-- </form> -->
                  <!-- </div> -->
                  <!-- End Contact Form Area -->
              <!-- </div> -->
              <!-- End Inner -->
          <!-- </div> -->
      <!-- </div> -->
  <!-- </div> -->
<!-- </section> -->

<!-- ============ Footer Section  ============= -->
<footer class="sub_footer">
    <div class="container">
        <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Cooking Guide 2014<!-- , Theme by <a href="https://themewagon.com/">Rinky,Sonalee</a> --></p></div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
        </div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
    </div>
</footer>
<!-- Register popup-->
<div class="modal fade" id="register">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">Registration</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <h3 class="error" style="display:none; color:red;font-style:bolder;text-align:center;">All Fields are Required</h3>
      <form method="post" enctype="multipart/form-data" action="{{ url('/register') }}">
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
            <label for="input-10" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control name" name="name">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control email" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label mono">Mobile no</label>
            <div class="col-sm-8">
              <input type="text" class="form-control mobile" name="mono">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-8">
              <input type="radio" name="gender" value="Female" class="gender">Female
              <input type="radio" name="gender" value="Male" class="gender">Male
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control password" name="password">
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success insert">Register</button>
          <button type="button" class="btn btn-danger">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- login popup -->
<div class="modal fade" id="login">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
      <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success logindata">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ url('assets/js/jquery-1.10.2.min.js') }}"> </script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}" ></script>
<script type="text/javascript" src="{{ url('assets/js/jquery-1.10.2.js') }}"></script>     
<script type="text/javascript" src="{{ url('assets/js/jquery.mixitup.min.js') }}" ></script>
<script type="text/javascript" src="{{ url('assets/js/main.js') }}" ></script>

<script type="text/javascript">
 
</script>

<!-- <script>
  $('.logindata').click(function(e)
  {
    e.preventDefault();
    var email = $('.email').val();
    alert(email);
    var password = $('#password').val();
    var url = '<?php echo url('/login') ?>';
    var csrf = "<?= csrf_token() ?>";
    alert(76);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': csrf
          },
      });
      $.ajax({
        type:'post',
        data:{'_csrf':csrf,'email':email,'password':password},
        url: url,
        success:function(data)
        {
          alert('success');
          window.location.reload();
        },
        error:function()
        {
          alert('check email and password');
        }
      });
  });
</script> -->

<script>
  $('.category').click(function()
  {
    var cathide = $(".catsearchhide");
    var catshow = $(".catsearchshow");
        if(catshow){
          id = $(this).data('id');
          var url = '<?php echo url('/searchcategory') ?>/' + id;
          $.ajax({
              type: 'GET',
              url: url ,
              data: {'id': id},
              success:function(data){
                cathide.hide();
                catshow.show();
                catshow.html(data);
              },
              error:function(){alert("something went wrong");}
          });
        }
  });
</script>

<script>
   $('.add_reci').click(function(e)
    {
      alert(2345);
      e.preventDefault();
      var reci_name = $('.reci_name').val();
      alert(reci_name);
      var reci_ingriants = $('.r_ind').val();
      var reci_descriprion = $('.r_desc').val();
      var reci_timing = $('.timing').val();
      var reci_serve = $('.serve').val();
      var reci_image = $('.reci_image').val();
      var url = '<?php echo url('/reci_insert') ?>';
      var csrf = "<?= csrf_token() ?>";

      // if(reci_name == '' && reci_ingriants == '' && reci_descriprion == '' && reci_timing == '' && reci_serve == '' && reci_image){
      //   alert(1234);
      //       $('.reci_details').show();
      //           }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            },
        });
      $.ajax({
        type:'post',
        data:{csrf:'_csrf',reci_name:'r_name',reci_ingriants:'ind',reci_descriprion:'r_desc',reci_timing:'timing',reci_serve:'serve',reci_image:'r_image'},
        url :url,
        success:function(data)
        {
          alert('success');
          // window.location.reload();
        },
        error:function()
        {
          alert('wrong');
        }
      });
    });
</script>