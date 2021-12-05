<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="">
    <img src="{{ url('assets/images/logo.png') }}" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Dream House</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header"></li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>User </span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <!-- <ul class="sidebar-submenu">
        <li><a href=""><i class="zmdi zmdi-star-outline"></i>View User</a></li>
      </ul> -->
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>Category </span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('admin/addcategory') }}"><i class="zmdi zmdi-star-outline"></i>Add Category</a></li>
        
        <li><a href="{{ url('admin/viewcategory') }}"><i class="zmdi zmdi-star-outline"></i>View Category</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>House</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('admin/addhouse') }}"><i class="zmdi zmdi-star-outline"></i>Add House</a></li>
        <!-- <li><a href=""><i class="zmdi zmdi-star-outline"></i> view hpuse</a></li> -->
      </ul>
    </li>
     <li>
    <a href="javaScript:void();" class="waves-effect">
    <i class="zmdi zmdi-layers"></i>
    <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href=""><i class="zmdi zmdi-star-outline"></i>user</a></li>
      <li><a href=""><i class="zmdi zmdi-star-outline"></i>Category</a></li>
      <li><a href=""><i class="zmdi zmdi-star-outline"></i>Recipie</a></li>
    </ul>
  </li>
  </ul>
</div>
<!--End sidebar-wrapper-->