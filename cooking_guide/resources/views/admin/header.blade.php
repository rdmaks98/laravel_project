<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Cooking Guide</title>
    <!--favicon-->
    <!--favicon-->
    <link rel="icon" href="{{ url('assetsadmin/images/logo.png') }}" type="image/x-icon">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('assetsadmin/plugins/summernote/dist/summernote-bs4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- <link rel="icon" href="{{ url('assetsadmin/images/favicon.ico') }}" type="image/x-icon"> -->
    <!-- simplebar CSS-->
    <link href="{{ url('assetsadmin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ url('assetsadmin/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!--Data Tables -->
    <link href="{{ url('assetsadmin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assetsadmin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <!-- animate CSS-->
    <link href="{{ url('assetsadmin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ url('assetsadmin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ url('assetsadmin/css/sidebar-menu.css') }}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ url('assetsadmin/css/app-style.css') }}" rel="stylesheet"/>
    <style type="text/css">
      .btn {
      font-size: 10px;
      padding: 8px 17px;
      }
    </style>
  </head>
<!--Start topbar header-->
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top bg-white">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
       </a>
      </li>
      <li class="nav-item">
        <!-- <form class="search-bar">
          <input type="text" class="form-control" placeholder="Enter keywords">
           <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form> -->
      </li>
    </ul>
     
    <ul class="navbar-nav align-items-center right-nav-link">
      <!-- <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-envelope-open-o"></i><span class="badge badge-secondary badge-up">12</span></a>
        <div class="dropdown-menu dropdown-menu-right">
          <ul class="list-group list-group-flush">
           <li class="list-group-item d-flex justify-content-between align-items-center">
            You have 12 new messages
            <span class="badge badge-secondary">12</span>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{ url('assetsadmin/images/avatars/avatar-5.png') }}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-0 msg-title">Jhon Deo</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              <small>Today, 4:10 PM</small>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{ url('assetsadmin/images/avatars/avatar-6.png') }}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-0 msg-title">Sara Jen</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              <small>Yesterday, 8:30 AM</small>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{ url('assetsadmin/images/avatars/avatar-7.png') }}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-0 msg-title">Dannish Josh</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
               <small>5/11/2018, 2:50 PM</small>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{ url('assetsadmin/images/avatars/avatar-8.png') }}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet.</p>
              <small>1/11/2018, 2:50 PM</small>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
          </ul>
          </div>
      </li>
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
          <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            You have 14 Notifications
            <span class="badge badge-info">14</span>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <i class="zmdi zmdi-accounts fa-2x mr-3 text-primary"></i>
              <div class="media-body">
              <h6 class="mt-0 msg-title">New Registered Users</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <i class="zmdi zmdi-coffee fa-2x mr-3 text-success"></i>
              <div class="media-body">
              <h6 class="mt-0 msg-title">New Received Orders</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item">
            <a href="javaScript:void();">
             <div class="media">
               <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-secondary"></i>
              <div class="media-body">
              <h6 class="mt-0 msg-title">New Updates</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              </div>
            </div>
            </a>
            </li>
            <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
          </ul>
        </div>
      </li> -->
      <li class="nav-item language">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-in"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="{{ url('assetsadmin/images/avatars/avatar-13.png') }}" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{ url('assetsadmin/images/avatars/avatar-13.png') }}" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-2 user-title"></h6>
              <p class="user-subtitle"></p>
              </div>
             </div>
            </a>
          </li>
          @if(session('admin') != "")
          <li class="dropdown-divider"></li>
          <li class="dropdown-item" data-toggle="modal" data-target="#changepass" style="cursor:pointer;"><i class="icon-settings mr-2"></i>Change Password</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="zmdi zmdi-alert-circle-o"></i><a href="{{ route('admin/logout') }}">&nbsp;&nbsp;Logout</li></a>
          @endif
        </ul>
      </li>
    </ul>
  </nav>
</header>
<!--End topbar header-->