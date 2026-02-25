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
  <link rel="icon" type="image/png" href="{{ asset('assets/images/image.png') }}">
  <title>
    BukYouth - Organizations
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
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
          <h1 class="mb-0 h2 font-weight-bolder">Organizations</h1>
          <p class="mb-4">
          </p>
        </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between px-3">
              <h6 class="text-white text-capitalize m-0">Edit Organization</h6>
            </div>
            </div>


                    <div class="card-body px-4 pb-4">
                        <form action="{{ route('youth.update', $youth->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name (Organization)</label>
                            <input type="text" name="name" id="name" class="form-control border" value="{{ old('name', $youth->name) }}" required>
                        </div>
                         <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control border" value="{{ old('email', $youth->email) }}" required>
                        </div>
                         <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number" class="form-control border" value="{{ old('contact_number', $youth->contact_number) }}" required>
                        </div>
                         <div class="mb-3">
                            <label for="registered_count" class="form-label">Registered Count</label>
                            <input type="text" name="registered_count" id="registered_count" class="form-control border" value="{{ old('registered_count', $youth->registered_count) }}" required>
                        </div>
                         <div class="mb-3">
                            <label for="lydp_plan" class="form-label">LYDP Plan</label>
                            <textarea name="lydp_plan" id="lydp_plan" class="form-control border">{{ old('lydp_plan', $youth->lydp_plan) }}</textarea>
                        </div>
                         <div class="mb-3">
                            <label for="lydp_status" class="form-label">LYDP Status</label>
                            <select class="form-control border" name="lydp_status" id="lydp_status">
                                <option value="Approved" {{ old('lydp_status', $youth->lydp_status) == 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ old('lydp_status', $youth->lydp_status) == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary"> <a href="{{ route('organizations.index') }}" class="text-white">Cancel</a></button>
                        </form>
                    </div>


          </div>
        </div>
      </div>
      
     
    </div>
  </main>
 
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>


</body>

</html>