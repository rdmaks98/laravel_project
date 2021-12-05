<body>
	<!-- footer Start -->
<footer class="footer pb-md-5 pb-sm-5 secondary-bg pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget footer-widget">
					<div class="footer-logo footer-title mb-4"><h2>Dreamhouse</h2></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet pariatur delectus excepturi debitis ad architecto non, sequi minus quo similique.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-md-4 mb-sm-4">
				<div class="widget footer-widget">
					<h3 class="mb-4">Address</h3>
					<ul class="list-inline footer-address">
						<li class="list-inline-item">
							<i class="ion-android-call"></i>
							 9904604438
						</li>
						<li class="list-inline-item">
							<i class="ion-laptop"></i>
							  dramhouse@gmail.com
						</li>
						<li class="list-inline-item">
							<i class="ion-ios-location"></i>
							 dreamhouse limited,riverfront
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-md-4 mb-sm-4">
				<div class="widget footer-widget">
					<h3 class="mb-4">Quick Links</h3>
					<ul class="list-unstyled footer-menu mb-0">
						<li>
							<a href="#"><i class="fa fa-angle-right"></i>Home</a>
						</li>

						<li>
							<a href="#"><i class="fa fa-angle-right"></i>Services</a>
						</li>

						<li>
							<a href="#"><i class="fa fa-angle-right"></i>contact</a>
						</li>

						<li>
							<a href="#"><i class="fa fa-angle-right"></i>gallery</a>
						</li>

						
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget footer-widget">
					<h3 class="mb-4">Company</h3>

					<ul class="list-unstyled footer-menu mb-0">
						<li><a href="#">Term & Conditions </a></li>

						<li><a href="#">Privacy Policy</a></li>

						<li><a href="#">Site Map </a></li>
					</ul>
					

					<h4 class="my-4">Follow US</h4>

					<ul class="list-inline footer-socials">
						<li class="list-inline-item">
							<a href="#"><i class="ion-social-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="ion-social-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="ion-social-pinterest"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="ion-social-linkedin"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="ion-social-rss"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>


<section class="footer-btm secondary-bg py-4" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					&copy; Copyright TravelPro Reserved to <a href="#">Dreamhouse</a>-2025
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Main jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.js') }}"></script>
<!-- Bootstrap 3.1 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ url('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ url('assets/plugins/nice-select/nice-select.js') }}"></script>
<!--  -->
<script src="{{ url('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<!-- Form Validator -->
<script src="{{ url('assets/cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js') }}"></script>
<script src="{{ url('assets/cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js') }}"></script>
<script src="{{ url('assets/plugins/bootstrap-datepicker-master/bootstrap-datepicker.min.js') }}"></script>

<!-- Google Map -->
<script src="{{ url('assets/plugins/google-map/map.js') }}"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&amp;callback=initMap"></script>  -->
<!-- google map -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>   
<script src="{{ url('assets/js/script.js') }}"></script>
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script>
	// $(document).ready(function(){  
 //     	$("input[type='radio']").on('click', function(){
 //        var radioValue = $("input[name='star']:checked").val();
 //        if(radioValue){
 //            alert(radioValue);
 //        }
 //    }); 
 // });  
	$(':radio').change(function() {
		
	  	var id = $('.u_id').data('id');
	  	if(id){
	    var h_id = $('#h_id').data('houseid');
	    
	    var val = $(this).val();
	    var url = "<?php echo url('/rating') ?>";
    	$.ajax({
    		type:"POST",
    		url:"<?php echo url('/rating') ?>",
    		data:{ "_token": "{{ csrf_token() }}",'u_id' : id,'h_id':h_id,'rat_value':val},
    		success:function(data)
    		{
    			alert("this house rating is submited");
    			location= "<?php echo url('/'); ?>";
    		},
    		error:function(){
    			alert("wrong rating");
    		},
    	});
    }
    else
    {
    	alert("please login");
    }
	});
</script>
<!-- google map -->
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var ahmedabad = {lat: 23.196383, lng: 72.685168};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('mapahme'), {zoom: 4, center: ahmedabad});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: ahmedabad, map: map});
}
    </script>
<script>
	$(document).ready(function()
	{	
	    var plain = $('.plain').data('value');
		var search_filter = $('.search_filter').data('filter');
		$('.search_filter').hide();
		if(search_filter == "filter")
		{
			$("select.price_filter").change(function(){
			$('.plain').hide();
			var price = $(this).val();
			alert(price);
			var url = '<?php echo url('/price_filter') ?>/'+ price;
	        alert("You have selected the price - " + price );
	        
	        $.ajax(
	        {
	        	type:'GET',
	        	url: '<?php echo url('/price_filter') ?>/'+ price,
	        	data : {'price' : price},
	        	success:function(data){
	        		
				$('.plain').hide();
				$('.search_filter').show();
	        	},
	        	error:function()
	        	{
	        		alert("something went wrong price");
	        	}
	        });
	        });
		}
		else
		{
			$('.plain').show();
			$('.search_filter').hide();
		}
	});
</script>

</body>
</html>
