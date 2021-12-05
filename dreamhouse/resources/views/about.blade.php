
@include('header')
<!-- Header Close --> 

<div class="main-wrapper ">
<section class="overly bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h1 class="text-white py-100">About Us</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid page-border-top">
    <div class="row ">
      <div class="col-lg-12 text-center">
          <div class="page-breadcumb py-2">
            <a href="#" class="text-white">Home</a>
            <span><i class="fa fa-angle-right text-white mx-1" aria-hidden="true"></i></span>
            <a href="#" class="text-white">About Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->

<section id="about" class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <p class="section-subtitle">About Us</p>
                    <h2 class="mb-3">Most Popular Hotel since 1992</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                    <span class="section-border"></span>
                </div>
            </div><!-- .col-md-7 close -->
        </div>


        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/rooms/img1.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-4 mt-lg-0">
                    <h2 class="mb-3">You will love our hospitality and value</h2>
                    <p>A continental breakfast buffet is served in the Reading Room on the second floor Monday – Friday from 7:00 am to 10:30 am and Saturday and Sunday until 11:00 am</p>

                    <ul class="list-unstyled my-4">
                        <li>Access to New York Sports Clubs throughout Manhattan</li>
                        <li>High-speed wireless Internet throughout the hotel</li>
                        <li>Newspapers including the New York Times, Wall Street Journal</li>
                        <li>24-Hour business center</li>
                       
                    </ul>

                    <a href="service.html" class="btn btn-main">Our Services</a>
                </div>
            </div>
        </div>

        <div class="row align-items-center section pb-0">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="mb-3">Daily Continental Breakfast Buffet</h2>
               
                <p>Offerings include hard boiled eggs, yogurts, hot oatmeal, a selection of cold cereals, assorted Danish, scones, muffins and bagels, butter, cream cheese, peanut butter and jams, fresh whole fruits and fruit salad, a selection of international coffees, teas and juices. </p>

                <p> Almond milk and soy milk, as well as gluten-free options, are available upon request. Please notify us of your needs when making reservations.</p>

                <a href="room-grid.html" class="btn btn-solid-border mt-4">Our Rooms</a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="images/about/about1.jpg" alt="" class="img-fluid w-100">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="images/about/about2.jpg" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="section cta" id="cta">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="cta-box mb-5 mb-lg-0">
					<i class="flaticon-bar text-white"></i>
					<h2 class="mt-2 text-white">250</h2>
					<p class="mb-0 text-white text-uppercase">Rooms</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="cta-box mb-5 mb-lg-0">
					<i class="flaticon-waiter text-white"></i>
					<h2 class="mt-2 text-white">150</h2>
					<p class="mb-0 text-white text-uppercase">Staffs</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="cta-box mb-5 mb-lg-0">
					 <i class="flaticon-menu text-white"></i>
					<h2 class="mt-2 text-white">120</h2>
					<p class="mb-0 text-white text-uppercase">Menus</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="cta-box " >
					<i class="flaticon-restaurant text-white"></i>
					<h2 class="mt-2 text-white">4</h2>
					<p class="mb-0 text-white text-uppercase">Restuarant</p>
				</div>
			</div>
		</div>
	</div>
</section>	
<br>    

@include('foter');
<!-- footer Start -->
