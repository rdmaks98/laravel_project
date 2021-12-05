<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="{{ url('admin/dashboard') }}">
    <img src="{{ url('assets/images/logo.png') }}" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Cooking Guide</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header"></li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>User </span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('user_view') }}"><i class="zmdi zmdi-star-outline"></i>View User</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>Category </span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('addcategory') }}"><i class="zmdi zmdi-star-outline"></i>Add Category</a></li>
        <li><a href="{{ url('category_view') }}"><i class="zmdi zmdi-star-outline"></i>View Category</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
      <i class="zmdi zmdi-layers"></i>
      <span>Recepies</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ url('addrecipies') }}"><i class="zmdi zmdi-star-outline"></i>Add Recipies</a></li>
        <li><a href="{{ url('recipies_view') }}"><i class="zmdi zmdi-star-outline"></i>View Recepies </a></li>
      </ul>
    </li>
     <li>
    <a href="javaScript:void();" class="waves-effect">
    <i class="zmdi zmdi-layers"></i>
    <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{ url('USer_Report') }}"><i class="zmdi zmdi-star-outline"></i>user</a></li>
      <li><a href="{{ url('Category_Report') }}"><i class="zmdi zmdi-star-outline"></i>Category</a></li>
      <li><a href="{{ url('Recipie_Report') }}"><i class="zmdi zmdi-star-outline"></i>Recipie</a></li>
    </ul>
  </li>
  </ul>
</div>
<!--End sidebar-wrapper-->