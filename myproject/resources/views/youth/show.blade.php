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
    BukYouth - LYDO Details
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
          <h1 class="mb-0 h2 font-weight-bolder">LYDO Details</h1>
          <p class="mb-4">
          </p>
        </div>

<div class="row">
    
        <div class="col-12">
            
            <div class="card my-4">
               
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between px-3">
                        <h6 class="text-white text-capitalize m-0">{{ $youth->name }} - Local Youth Development Officer</h6>
                        <div>
                            <a href="{{ route('youth.edit', $youth->id) }}" class="btn btn-sm btn-warning text-white">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('youth.index') }}" class="btn btn-sm btn-secondary text-white">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-3">Personal Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td>{{ $youth->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $youth->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Contact Number:</strong></td>
                                    <td>{{ $youth->contact_number }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Facebook Page:</strong></td>
                                    <td>
                                        @if($youth->facebook_page)
                                            <a href="{{ $youth->facebook_page }}" target="_blank">{{ $youth->facebook_page }}</a>
                                        @else
                                            <span class="text-muted">Not provided</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Location Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Municipality:</strong></td>
                                    <td>{{ $youth->municipality }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Barangay:</strong></td>
                                    <td>{{ $youth->brgy }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Registered Count:</strong></td>
                                    <td>{{ $youth->registered_count }} youth</td>
                                </tr>
                                <tr>
                                    <td><strong>LYDP Status:</strong></td>
                                    <td>
                                        <span class="badge bg-{{ $youth->lydp_status == 'Approved' ? 'success' : ($youth->lydp_status == 'Rejected' ? 'danger' : 'warning') }}">
                                            {{ $youth->lydp_status }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5 class="mb-3">Local Youth Development Plan</h5>
                            @if($youth->lydp_plan)
                                <div class="alert alert-info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="fas fa-file-pdf"></i>
                                            <strong>LYDP Document Available</strong>
                                            <p class="mb-0 text-muted">Click the buttons below to view or download the document</p>
                                        </div>
                                        <div>
                                            <a href="{{ route('youth.view-lydp', $youth->id) }}" target="_blank" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="{{ route('youth.download-lydp', $youth->id) }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <strong>No LYDP Document Uploaded</strong>
                                    <p class="mb-0">The Local Youth Development Plan document has not been uploaded yet.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
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

  @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: "{{ session('error') }}",
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
</script>
@endif


</body>

</html>