<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Angular</title>
  <base href="/">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("bower_components/jvectormap/jquery-jvectormap.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("dist/css/skins/_all-skins.min.css")}}">

  <style>
  
  .ninja-head {
  width:45px;
  height:50px;
  position:absolute;
  left: 0px;
  top: -1px;
  background:url(data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%20246%20172%22%20enable-background%3D%22new%200%200%20246%20172%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cpath%20d%3D%22M181.2%2C64.1c6.3-18%2C12.5-35.5%2C19-53.9c7.5%2C11.5%2C14.5%2C22.1%2C21.8%2C33.3c-10.8%2C7.9-21.4%2C15.7-32%2C23.4c0.1%2C0.3%2C0.3%2C0.7%2C0.4%2C1%0A%09c13.6-1.5%2C27.2-2.9%2C41.5-4.4c-1%2C7.8-1.9%2C14.8-2.9%2C22.6c-10.5-2.9-20.6-5.7-30.6-8.4c2.8%2C6.1%2C6.6%2C11.7%2C8%2C17.9%0A%09c4.2%2C19-2.8%2C34.4-17.6%2C46.3c-12.7%2C10.2-27.8%2C15.1-43.6%2C17.3C118.9%2C163%2C93%2C162.1%2C68%2C152c-10.5-4.2-19.7-10.4-26.7-19.5%0A%09c-13.6-18-12.2-40.5%2C4.1-56.1c15.6-15%2C35-22.3%2C55.9-25.6C129.1%2C46.3%2C155.7%2C49.8%2C181.2%2C64.1z%20M120.5%2C107.8c-16.5%2C0-33%2C0-49.5%2C0%0A%09c-8.6%2C0-11.2%2C2.4-10.3%2C11.2c0.4%2C3.6%2C1.8%2C7.5%2C3.8%2C10.6c4.3%2C6.9%2C11.4%2C10%2C18.9%2C12.1c20.4%2C5.6%2C41.2%2C5.7%2C61.9%2C2.2%0A%09c8.3-1.4%2C16.7-4.7%2C24.1-8.8c8.1-4.5%2C11-12.6%2C9.2-21.9c-0.7-3.8-2.4-5.5-6.7-5.5C154.8%2C107.9%2C137.7%2C107.8%2C120.5%2C107.8z%22%2F%3E%0A%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M120.5%2C107.8c17.2%2C0%2C34.3%2C0.1%2C51.5-0.1c4.3-0.1%2C6%2C1.7%2C6.7%2C5.5c1.7%2C9.4-1.2%2C17.5-9.2%2C21.9%0A%09c-7.4%2C4.1-15.8%2C7.3-24.1%2C8.8c-20.7%2C3.5-41.5%2C3.4-61.9-2.2c-7.5-2-14.6-5.2-18.9-12.1c-1.9-3.1-3.4-7-3.8-10.6%0A%09c-0.9-8.8%2C1.6-11.2%2C10.3-11.2C87.5%2C107.8%2C104%2C107.8%2C120.5%2C107.8z%20M80.2%2C115.7c1.1%2C9.7%2C8.6%2C15.1%2C15.8%2C12.4c2.8-1.1%2C3.5-2.8%2C1.3-4.7%0A%09C92.6%2C119.2%2C87.1%2C116.5%2C80.2%2C115.7z%20M159.3%2C114.8c-5%2C2.5-10.1%2C5-15.1%2C7.7c-1%2C0.6-2.1%2C2.7-1.8%2C3.6c0.3%2C1.1%2C2.1%2C2%2C3.4%2C2.3%0A%09C152.8%2C130.3%2C159.6%2C124.6%2C159.3%2C114.8z%22%2F%3E%0A%3Cpath%20d%3D%22M80.2%2C115.7c6.9%2C0.9%2C12.4%2C3.5%2C17.1%2C7.7c2.2%2C1.9%2C1.5%2C3.6-1.3%2C4.7C88.8%2C130.8%2C81.3%2C125.4%2C80.2%2C115.7z%22%2F%3E%0A%3Cpath%20d%3D%22M159.3%2C114.8c0.3%2C9.7-6.5%2C15.4-13.4%2C13.6c-1.3-0.3-3.1-1.3-3.4-2.3c-0.3-1%2C0.7-3%2C1.8-3.6%0A%09C149.2%2C119.8%2C154.3%2C117.4%2C159.3%2C114.8z%22%2F%3E%0A%3C%2Fsvg%3E);
  background-repeat:no-repeat;
  background-size:100% 100%;
}

  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
      <div class="ninja-head"></div>
    </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
    <div class="ninja-head"></div>
      Colegio<b>.Ninja</b>
    </span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#"><i class="fa fa-sign-out"></i> Sair</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGAÇÃO</li>
    </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <app-root></app-root>
  </section>

</div>

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>


    <script type="text/javascript" src="{{asset("js/inline.bundle.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/polyfills.bundle.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/styles.bundle.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/vendor.bundle.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/main.bundle.js")}}"></script>
  

    <script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap  -->
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<script src="{{asset("dist/js/demo.js")}}"></script>


  
  </body>
</html>