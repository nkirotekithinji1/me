<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Mentee</title>
  

  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>

        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="logo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mentee</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{ Auth::user()->name }}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview">
            <a href="http://127.0.0.1:8000/employees" class="nav-link active">My Network
              
              <p>
              
              
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Users</p>
                </router-link>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/create" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               My Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-power-off"></i>
                <p>
                  {{ __('Logout') }}
                </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <router-view></router-view>
    Passions
   <!--  <il> -->
      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://127.0.0.1:8000/nina">
      <img src="musiclogo.jpg" width="600" height="400">
    </a>
    <div class="desc">Music</div>
  </div>
</div>
<<div class="container-fluid">
    <router-view></router-view>
    Passions
   <!--  <il> -->
      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://127.0.0.1:8000/nina">
      <img src="musiclogo.jpg" width="600" height="400">
    </a>
    <div class="desc">Music</div>
  </div>
</div>
<div class="content">
  <div class="container-fluid">
    <router-view></router-view>
    Passions
   <!--  <il> -->
      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://127.0.0.1:8000/nina">
      <img src="musiclogo.jpg" width="600" height="400">
    </a>
    <div class="desc">Music</div>
  </div>
</div>
<!-- <img src="musiclogo.jpg" class="img-circle elevation-2" alt="User Image"><a href="http://127.0.0.1:8000/music">Music
<img src="photography.jpg" class="img-circle elevation-2" alt="User Image" width="150" height="200">
<a href="http://127.0.0.1:8000/music">Photography</a>
<img src="bakinglogo.jpg" class="img-circle elevation-2" alt="User Image" width="100" height="100">
<a href="http://127.0.0.1:8000/music">Bakers</a> -->
<!-- </il> -->
<br>
Courses
<button class="btn default">CyberSecurity</button><img src="cyber.jpg" class="img-circle elevation-2" alt="User Image" width="150" height="200">
<button class="btn success">Commerce</button><img src="commerce.jpg" class="img-circle elevation-2" alt="User Image" width="150" height="200">
<br>
Sports
<button class="btn warning">Football</button><img src="football.jpg" class="img-circle elevation-2" alt="User Image" width="150" height="200">
<button class="btn danger">Voleyball</button><img src="volleyball.jpg" class="img-circle elevation-2" alt="User Image" width="150" height="200">
<button class="btn default">Karate</button><img src="karate.png" class="img-circle elevation-2" alt="User Image" width="150" height="200">
  </div><!-- /.container-fluid -->
</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 
</body>
</html>