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
  <app-root></app-root>
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