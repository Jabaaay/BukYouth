<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../assets/images/image.png">
  

  <title>
    BukYouth - Add Youth
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
    *
    {
        font-family: 'Poppins', sans-serif;
    }
</style>
<body class="g-sidenav-show  bg-gray-100">
  
    @include('layouts.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
   @include('layouts.nav')
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div>
          <h1 class="mb-0 h2 font-weight-bolder">Officials</h1>
          <p class="mb-4">
          </p>
        </div>


<div class="container-fluid py-2">
  <div class="row">

    <!-- Card 1: Add LYDO -->
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <h4 class="card-title mb-3">LYDO</h4>
          <p class="card-text text-muted">
            Add Local Youth Development Officer
          </p>
          <a href="{{ route('youth.create') }}" class="btn btn-outline-primary w-100">
            Add LYDO
          </a>
        </div>
      </div>
    </div>

    <!-- Card 2: Add SK President -->
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body text-center">
          <h4 class="card-title mb-3">SK President</h4>
          <p class="card-text text-muted">
            Add Sangguniang Kabataan President
          </p>
          <a href="{{ route('youth.create-sk') }}" class="btn btn-outline-success w-100">
            Add SK President
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

    
      </div>
      
     
    </div>
  </main>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>