@include('header')
<div class="main-wrapper ">
<section class="overly bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h1 class="text-white py-100">Rooms</h1>
      </div>
    </div>
  </div>

  <div class="container-fluid page-border-top">
    <div class="row ">
      <div class="col-lg-12 text-center">
          <div class="page-breadcumb py-2">
            <a href="#" class="text-white">Home</a>
            <span><i class="fa fa-angle-right text-white mx-1" aria-hidden="true"></i></span>
            <a href="#" class="text-white">Rooms</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section room-details ">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-4 mb-lg-0">
				<div class="room-details-info p-4 border">
					<div class="room-img-lg">
						<?php $new = json_decode($fulldetail->h_image);?>
						<img src="{{ asset('/house/').'/'.$new[0] }}" alt="" class="img-fluid">
					</div>

					<div class="room-heading row d-flex mt-3 mb-5">
						<div class="col-lg-9">
							<h2 class="mb-0">{{ $fulldetail->h_area }}</h2>
							<h3>Starting from : <span> {{ $fulldetail->h_price }}</span></h3>
						</div>

						<div class="col-lg-3">
							<a href="booking-step1.html" class="btn btn-main ">Book Now</a>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="mb-5 list-unstyled">
                                <li>
                                    <p><i class="fa fa-bed" aria-hidden="true"></i> Bed: <span>2 King Bed</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast: <span>Yes</span></p>
                                </li>
                            </ul>
                        </div>

						<div class="col-lg-12">
							<h4 class="mb-3">Informations: </h4>
							<?php ?>
							<p></p>
						</div>
                	</div>
                </div>
			</div>
			<div class="col-lg-4">
					<div class="product-sidebar bg-dark p-4">
		<h3 class="text-white text-center py-2 text-uppercase ">Book your Room</h3>
		<form action="#" class="sidebar-form p-2">
			<div class="form-row">
			    <div class="form-group col-lg-12 col-sm-12 mb-3">
			    	<h6 class="text-white text-uppercase mb-2">Check In</h6>
			    	<div class="input-group tp-datepicker date" data-provide="datepicker">
					    <input type="text" class="form-control" placeholder="Arrival">
					    <div class="input-group-addon">
					       <span class="ion-android-calendar"></span>
					    </div>
					</div>
	          	</div>

			    <div class="form-group col-lg-12  mb-3">
			    	<h6 class="text-white text-uppercase mb-2">No of rooms</h6>
		    		<select id="person" class="form-control custom-select">
				        <option selected>{{ $fulldetail->h_rooms }}</option>
				      </select>
			    </div>

			    <div class="form-group col-lg-12  mb-3">
			    	<h6 class="text-white text-uppercase mb-2">City</h6>
		    		<select id="children" class="form-control custom-select">
				        <option selected>{{ $fulldetail->h_city }}</option>
				      </select>
			    </div>

			     <div class="form-group col-lg-12  mb-3">
			     	<h6 class="text-white text-uppercase mb-2">Area</h6>
		     		<select id="night" class="form-control custom-select" >
				        <option selected>{{ $fulldetail->h_area }}</option>
				      </select>
			    </div>

			    <div class="form-group col-lg-12 mt-4 mb-3">
				 	<h6 class="text-white text-uppercase mb-2">Extra Facilities</h6>
			 		<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Air Conditioner 
					  </label>
					</div>

					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
					  <label class="form-check-label" for="defaultCheck2">
					     Free Internet 
					  </label>
					</div>

					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
					  <label class="form-check-label" for="defaultCheck3">
					     Television
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
					  <label class="form-check-label" for="defaultCheck5">
					      Microwave 
					  </label>
					</div>
			    </div>
			    <div class="form-group col-lg-12 mb-3">
			    	<div class="input-group range_slider ">
	                    <div data-role="rangeslider" >
	                        <label>Price Range:</label>
	                        <div class="range">
	                            <span class="float-left text-white">50$</span><span class="float-right text-white">5000$</span>
	                            <input class="ml-4" type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
	                        </div>
	                     </div>        
	                </div>
			    </div>  

			    <div class="form-group col-lg-12">
			      <a href="booking-step2.html" class="btn btn-main btn-block">Book Now</a>
			    </div>
			 </div>
		</form>
	</div>

			</div>
		</div>


		<div class="row">
			<div class="col-lg-8">
				<div class="room-details-review p-4 mt-5">
                    <!-- <div class="room-review-comment mt-5 pt-5 border-top"> -->
	                    <h4 class="mb-4">Add Your Review :- </h4>

	                    <form action="#">
	                        <div class="form-group">
	                                <input type="text" id="firstName" placeholder="Your name ..." class="form-control">
	                        </div>
	                        <div class="form-group">
	                                <input type="Email" id="firstEmail" placeholder="Your email ..." class="form-control">
	                        </div>
	                        <div class="form-group">
	                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
	                        </div>

	                        <div class="form-group">
	                            <div class="btn-submit">
	                                   <a href="#" class="btn btn-main">SUBMIT</a>
	                            </div>
	                        </div>
	                    </form>
	                <!-- REVIEW COMMENT END -->
				</div>
            </div>
		</div>
	</div>
</section>
@include('foter')