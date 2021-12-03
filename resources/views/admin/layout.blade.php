
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <div id="app">
            <main>
              @yield('adminContent')
            </main>
            
        </div>
    </div>
    
    <!-- JS -->
    <script>
  </script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="https://kit.fontawesome.com/11e38db15a.js" crossorigin="anonymous"></script>
</body>
</html>
