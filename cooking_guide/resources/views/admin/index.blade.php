<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Dec 2018 05:02:10 GMT -->
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>Cooking Guide</title>
	<!--favicon-->
	<link rel="icon" href="{{ url('assetsadmin/images/logo.png') }}" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="{{ url('assetsadmin/css/bootstrap.min.css') }}" rel="stylesheet"/>
	<!-- animate CSS-->
	<link href="{{ url('assetsadmin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Icons CSS-->
	<link href="{{ url('assetsadmin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Custom Style-->
	<link href="{{ url('assetsadmin/css/app-style.css') }}" rel="stylesheet"/>

</head>

<body class="bg-dark">
	<!-- Start wrapper-->
	<div id="wrapper">
	
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="{{ url('assets/images/logo.png') }}" alt="logo icon">
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
					@if(session()->has('message'))
					    <div class="alert alert-danger">
					        {{ session()->get('message') }}
					    </div>
					@endif
					<div class="card-title text-uppercase text-center py-3">Sign In</div>
					<form action="{{ route('admin/login') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="exampleInputUsername" class="">Username</label>
							<div class="position-relative has-icon-right">
								<input type="text" id="exampleInputUsername" class="form-control input-shadow" name="email" placeholder="Enter Username" required>
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword">Password</label>
							<div class="position-relative has-icon-right">
								<input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password" required>
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6">
								<div class="icheck-material-primary">
									<input type="checkbox" id="user-checkbox" checked="" />
									<label for="user-checkbox">Remember me</label>
								</div>
							</div>
							<div class="form-group col-6 text-right">
								<!-- <a href="authentication-reset-password.html">Reset Password</a> -->
							</div>
						</div>
						<input type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light" value="sign in">
						<!-- <div class="text-center mt-3">Sign In With</div> -->

						<!-- <div class="form-row mt-4">
						  <div class="form-group mb-0 col-6">
						   <button type="button" class="btn btn-facebook shadow-facebook btn-block text-white"><i class="fa fa-facebook-square"></i> Facebook</button>
						</div>
						<div class="form-group mb-0 col-6 text-right">
						  <button type="button" class="btn btn-twitter shadow-twitter btn-block text-white"><i class="fa fa-twitter-square"></i> Twitter</button>
						</div> -->
				<!-- </div> -->

					</form>
				</div>
			</div>
		  <!-- <div class="card-footer text-center py-3">
		    <p class="text-muted mb-0">Do not have an account? <a href="authentication-signup.html"> Sign Up here</a></p>
		</div> -->
		</div>

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
	</div><!--wrapper-->
</body>
<!-- Bootstrap core JavaScript-->
<script src="{{ url('assetsadmin/js/jquery.min.js') }}"></script>
<script src="{{ url('assetsadmin/js/popper.min.js') }}"></script>
<script src="{{ url('assetsadmin/js/bootstrap.min.js') }}"></script>

</body>
</html>
