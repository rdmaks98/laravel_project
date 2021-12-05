<?php $filter = \App\House::orderby('h_id','desc')->get();
?>
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6">
				<div class="about-block">
					<img src="{{ url('assets/images/rooms/img1.jpg') }}" alt="" class="img-fluid shadow-sm">
					<div class="about-img">
						<img src="{{ url('assets/images/rooms/img.jpg') }}" alt="" class="img-fluid">
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="about-features">
					<h2>Conscientious & <br>Professional Services</h2>
					<hr>
					
					<ul class="list-unstyled">
						<li><i class="flaticon-menu"></i>Professional Serving</li>
						<li><i class="flaticon-dishwasher"></i>high Quality Services</li>
						<li><i class="flaticon-credit-card"></i>Easy Booking & Payment</li>
						<li><i class="flaticon-restaurant"></i>Modern Equipments</li>
						<li><i class="flaticon-chef"></i>The World's Top Chefs</li>
						<li><i class="flaticon-location-pin"></i>Interesting Activities</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section class="section-reservation" >
	<div class="container">
		<div class="secondary-bg p-5 position-relative">
			<form action="#" class="reserve-form">
				<div class="form-row">
					<div class="form-group col-md-2 col-sm-4">
						<div class="input-group tp-datepicker date" data-provide="datepicker">
							<input type="text" class="form-control" placeholder="Arrival">
							<div class="input-group-addon">
								<span class="ion-android-calendar"></span>
							</div>
						</div>
					</div>

					<div class="form-group col-md-2 ">
						<select id="person" class="form-control custom-select price_filter">
							<option selected>Price</option>
							@foreach($filter as $price)
							<option id="filter_price" value="{{ $price->h_price }}">₹{{ $price->h_price }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group col-md-2 ">
						<select id="children" class="form-control custom-select">
							<option selected>Area</option>
							<option value="1">1 Children</option>
							<option value="2">2 Children</option>
							<option value="3">3 Children</option>
							<option value="4">4 Children</option>
							<option value="5">5 Children</option>
						</select>
					</div>

					<div class="form-group col-md-2 ">
						<select id="night" class="form-control custom-select" >
							<option selected>Square foot</option>
							<option value="1">1 Night</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<select id="room" class="form-control custom-select">
							<option selected>Rooms</option>
							<option value="1">1 Room</option>
						</select>
					</div>

					<div class="form-group col-md-2">
						<form method="get" action="#">
							<input type="submit" class="btn btn-main btn-block" value="check"></a>
						</form>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<br>
<section class="section secondary-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<p class="section-subtitle">Luxurious</p>
					<h2 class="mb-3">Featured Rooms</h2>
					<span class="section-border"></span>
				</div>
			</div><!-- .col-md-8 close -->
		</div>
		<div class="row plain" data-value="plain">
			<?php $house =\APP\House::orderby('h_id','desc')->limit('3')->get(); ?>
			@foreach($house as $get)
			<?php $image = json_decode($get->h_image);?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="card text-center border-0 rounded-0 mb-4 mb-lg-0">
					<a href="room-details.html"><img src="{{ asset('/house/'.$image[0]) }}" alt="" class="img-fluid card-img-top rounded-0"></a>

					<div class="card-body px-4 py-5">
						<a href="{{ url('fullhouse').'/'.$get->h_id }}" class="text-dark"><h3>{{ $get->h_city }}</h3></a>
						<h2 class="text-color">₹<small>{{ $get->h_price }}</small></h2>
						@if(Auth::guest())
						<form class="rating">
							<label>
								<input type="radio" name="rat_value" value="1" />
								<span class="icon">★</span>
							</label>
							<label>
								<input type="radio" name="rat_value" value="2" />
								<span class="icon">★</span>
								<span class="icon">★</span>
							</label>
							<label>
								<input type="radio" name="rat_value" value="3" />
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>   
							</label>
							<label>
								<input type="radio" name="rat_value" value="4" />
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
							</label>
							<label>
								<input type="radio" name="rat_value" value="5" />
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
								<span class="icon">★</span>
							</label>
						</form>
						@else
						<div class="stars">
							<form class="rating">
								<input type="hidden" class="u_id" name="u_id" data-id="{{ Auth::user()->id }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" id="h_id" name="h_id" data-houseid="{{ $get->h_id }}">
								<label>
									<input type="radio" name="rat_value" value="1" />
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="rat_value" value="2" />
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="rat_value" value="3" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>   
								</label>
								<label>
									<input type="radio" name="rat_value" value="4" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="rat_value" value="5" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
							</form>
						</div>
						@endif
						<a href="{{ url('fullhouse').'/'.$get->h_id }}" class="btn btn-solid-border btn-small">Details</a>
						<a href="{{ url('fullhouse').'/'.$get->h_id }}" class="btn btn-main btn-small">Book</a>
					</div>
				</div>
			</div>	
			@endforeach	
		</div>
		<!-- <div class="search_filter" data-filter="filter">rinkyhardu</div> -->
		<div class="row search_filter" data-filter="filter">
			@foreach($filter as $val)
			<?php
			 $image = json_decode($val->h_image);?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="card text-center border-0 rounded-0 mb-4 mb-lg-0">
					<a href=""><img src="{{ asset('/house/'.$image[0]) }}" alt="" class="img-fluid card-img-top rounded-0"></a>

					<div class="card-body px-4 py-5">
						<a href="room-details.html" class="text-dark"><h3>{{ $val->h_city }}</h3></a>
						<h2 class="text-color">₹<small>{{ $val->h_price }}</small></h2>
						
						<a href="{{ url('fullhouse').'/'.$val->h_id }}" class="btn btn-solid-border btn-small">Details</a>
						<a href="booking-step1.html" class="btn btn-main btn-small">Book</a>
					</div>
				</div>
			</div>	
			@endforeach	
		</div>
	</div>
</section>	