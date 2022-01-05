<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  <title>{{ config('app.name', 'IT-Panthiya | Institute for ICT') }}</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&display=swap" rel="stylesheet"> 

  <!-- CSS -->
  <link rel="stylesheet" href="/css/app.css" type="text/css">
  <link rel="stylesheet" href="/css/sl/style.css">
  <link rel="stylesheet" href="/css/sl/animate.css">
  <link rel="stylesheet" href="/css/sl/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/sl/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/sl/magnific-popup.css">
  <link rel="stylesheet" href="/css/sl/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/css/sl/jquery.timepicker.css">
  <link rel="stylesheet" href="/css/sl/flaticon.css">
  <style>
    .bg-login {
      background-image: url('images/stu/bg1.jpg');
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;

    }
    .bg-reg {
      background-image: url('images/stu/bg2.jpg');
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;

    }
  </style>

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
      <main>
        @yield('content')
      </main>
            
    </div>
    
    <!-- JS -->
    <script>
  </script>
    <script src="/js/sl/jquery.min.js"></script>
    <script src="/js/sl/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/sl/popper.min.js"></script>
    <script src="/js/sl/bootstrap.min.js"></script>
    <script src="/js/sl/jquery.easing.1.3.js"></script>
    <script src="/js/sl/jquery.waypoints.min.js"></script>
    <script src="/js/sl/jquery.stellar.min.js"></script>
    <script src="/js/sl/owl.carousel.min.js"></script>
    <script src="/js/sl/jquery.magnific-popup.min.js"></script>
    <script src="/js/sl/jquery.animateNumber.min.js"></script>
    <script src="/js/sl/bootstrap-datepicker.js"></script>
    <script src="/js/sl/scrollax.min.js"></script>
    <script src="/js/sl/main.js"></script>
    <script src="/js/app.js"></script>

    <script src="https://kit.fontawesome.com/11e38db15a.js" crossorigin="anonymous"></script>
</body>
</html>
