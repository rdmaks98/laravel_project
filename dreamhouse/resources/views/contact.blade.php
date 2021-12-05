@include('header')
<!-- Header Close --> 

<div class="main-wrapper ">
<section class="overly bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h1 class="text-white py-100">Contact Us</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid page-border-top">
    <div class="row ">
      <div class="col-lg-12 text-center">
          <div class="page-breadcumb py-2">
            <a href="#" class="text-white">Home</a>
            <span><i class="fa fa-angle-right text-white mx-1" aria-hidden="true"></i></span>
            <a href="#" class="text-white">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->


<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <p class="section-subtitle">Drop us a email</p>
                    <h2 class="mb-3">Send Us An Email</h2>
                    <span class="section-border"></span>
                </div>
            </div><!-- .col-md-7 close -->
        </div>

        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="user_name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                <input name="user_subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="user_message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

        <div class="form-group">
            <label>Tags:</label>
            <br/>
            <input data-role="tagsinput" type="text" name="tags" >
            @if ($errors->has('tags'))
                <span class="text-danger">{{ $errors->first('tags') }}</span>
            @endif
        </div>
                    <button class="btn btn-main" type="submit">Send Message</button>
                </form>
            </div>

            <div class="col-lg-5">
                <h3 class="mt-4 mt-lg-0 mb-3">We Also Count In Google Map</h3>
                <div class="google-map position-relative">
                  <div id="mapahme"></div>  
                </div>
            </div>
        </div>
    </div>
</section>
@include('foter');
