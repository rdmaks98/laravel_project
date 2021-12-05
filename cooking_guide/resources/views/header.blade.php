<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cooking Guide</title>
    <link rel="icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" media="screen" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style-portfolio.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/picto-foundry-food.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
<style>
</style>
    <!-- <link rel="icon" href="{{ url('assets/images/favicon-1.ico') }}" type="image/x-icon"> -->
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="{{ url('assets/images/logo.png') }}" class="navbar-brand">
                    <a class="navbar-brand" href="{{ url('') }}">Cooking Guide</a> 
                    <div></div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-nav  clear navbar-right ">
                        @foreach($category as $cat)
                        <li class="dropdownnew"><a class="color_animation dropbtnnew">{{ $cat->cat_name }}</a>
                            <div class="dropdownnew-contentnew">
                                <?php $reci = \App\Recipies::where('cat_id',$cat->cat_id)->get(); ?>
                                @foreach($reci as $search)
                                <a href="{{ url('dishes') }}/<?php echo $search->r_id ?>">{{ $search->r_name }}</a>
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                        <li class="dropdownnew color_animation">
                            <button onclick="myFunction()" class="dropbtnnew">
                                <img src="{{ url('images/icons/icon-header-01.png') }}">
                                <!-- <i aria-hidden="true" class="fa fa-user"></i> -->
                            </button>
                            <div id="myDropdown" class="dropdownnew-contentnew dropregnew">
                                @if(session('user') || session('user') != '')
                                <?php $loguser = session('user');
                                    $user = \App\User::where('sid',$loguser)->first(); ?>
                                <a href="" data-toggle="modal" data-target="#add_reci">Add Recipie</a>
                                <a href="" data-toggle="modal" data-target="#edit">Edit Profile</a>
                                <a href="" data-toggle="modal" data-target="#change_password">Change Password</a>
                                <a href="{{ route('log') }}">logout</a>
                                @else
                                <a href="" data-toggle="modal" data-target="#register">Registration</a>
                                <a href="javascript:void(0);" data-target="#login" data-toggle="modal">Login</a>
                                @endif
                            </div>
                        </li>
                    </ul>
                    <!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </nav>

@if(session('user') || session('user') != "")
<div class="modal fade" id="edit">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">Edit Profile</h4>
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
      <form action="{{ route('editprofile') }}/<?php echo $user->id ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal body -->
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Mobileno</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="mono" value="{{ $user->mono }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">gender</label>
            <div class="col-sm-8">
                <input class="gender" type="radio" class="form-control" name="gender" value="Male">Male
                <input class="gender" type="radio" class="form-control" name="gender" value="Female">Female
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="edit">
            <input type="button" class="btn btn-danger" value="cancel" data-dismiss="model">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="change_password">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">change password</h4>
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
      <form action="{{ route('changepassword') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">old password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="oldpassword">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">new password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">
            confirm password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="confirmpassword">
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="change">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="add_reci">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title card-header">Add Recipie</h4>
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
          <ul>
            <li class="reci_details" style="display:none;color:red;font-size:26px;">Please Fill The All Details</li>
          </ul>
      <form action="{{ route('reci_insert') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Recipies Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control reci_name" id="reci_name" placeholder="Enter Recipies Name" required name="r_name">
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Indgriants</label>
            <div class="col-sm-8">
              <input type="text" name="ind" class="form-control form-control-rounded r_ind" id="r_ind" placeholder="Enter indgriants in number" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Recipies Description</label>
            <div class="col-sm-8">
              <input type="text" name="r_desc" class="form-control form-control-rounded r_desc" id="r_desc" placeholder="Enter Recipies Description" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Timing</label>
            <div class="col-sm-8">
              <input type="text" name="timing" class="form-control form-control-rounded timing" id="timing" placeholder="Enter made recipies timing" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Serve</label>
            <div class="col-sm-8">
              <input type="text" name="serve" class="form-control form-control-rounded serve" id="serve" placeholder="Eated Person Value" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Select Category</label>
            <div class="col-sm-8">
              <select type="" name="cat_id" class="form-control form-control-rounded">
              @foreach($category as $val)
              <option value="{{ $val->cat_id }}" id="cat_name">{{ $val->cat_name }}</option>
              @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="input-10" class="col-sm-3 col-form-label">Recipies Image</label>
            <div class="col-sm-8">
              <input type="file" name="r_image" class="form-control form-control-rounded r_image" id="r_image" placeholder="?Upload Recipies Image" required>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <!-- <input type="submit" class="btn btn-success" value="change"> -->
            <button type="submit" class="btn btn-success btn-round shadow-success px-5" id="recipies">Add</button>
            <button type="reset" class="btn btn-danger btn-round shadow-danger px-5" id="cancel">cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endif