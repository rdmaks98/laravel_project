@include('header');
<!-- Header Close --> 

<div class="main-wrapper ">
<section class="overly bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h1 class="text-white py-100">Gallery</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid page-border-top">
    <div class="row ">
      <div class="col-lg-12 text-center">
          <div class="page-breadcumb py-2">
            <a href="{{ url('') }}" class="text-white">Home</a>
            <span><i class="fa fa-angle-right text-white mx-1" aria-hidden="true"></i></span>
            <a href="" class="text-white">Gallery</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section"  id="gallery-page">
	<div class="container">
		 <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <p class="section-subtitle">Our Gallery</p>
                    <h2 class="mb-3">Beautiful & Convenient</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    <span class="section-border"></span>
                </div>
            </div><!-- .col-md-7 close -->
        </div>
 
        <div class="row">
        	@foreach($pict as $house)
        	<?php $first = json_decode($house->h_image); ?>
        	<div class="col-lg-4 mb-4 col-md-6 col-sm-6">
        		<div class="gallery-item gallery-4-col">
					 <a href="{{ url('fullhouse').'/'.$house->h_id }}" title="Photo 1">
						<img src='{{ asset("/house")."/".$first[0] }}' alt="" class="img-fluid">
					</a>

					<h4 class="mt-3 mb-1">{{ $house->h_area }}</h4>
					<p>{{ $house->h_rooms }}</p>
				</div>
        	</div>
        	@endforeach
        </div>
	</div>
</section>
@include('foter');
<!-- Mirrored from demo.themefisher.com/eden/gallery-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Mar 2020 06:46:21 GMT -->
</html>