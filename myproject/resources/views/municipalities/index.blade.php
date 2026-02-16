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
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Creative Tim
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
          <h1 class="mb-0 h2 font-weight-bolder">Organizations</h1>
          <p class="mb-4">
          </p>
        </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">List of Organizations</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                 <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Malaybalay City LYDO</h6>
                            <p class="text-xs text-secondary mb-0">malaybalay.lydo@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td><p class="text-xs font-weight-bold mb-0">LYDO</p></td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">09171234567</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-success">Approved</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Valencia City LYDO</h6>
                            <p class="text-xs text-secondary mb-0">valencia.lydo@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td><p class="text-xs font-weight-bold mb-0">LYDO</p></td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">09182345678</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-warning">Pending</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Juan Dela Cruz</h6>
                            <p class="text-xs text-secondary mb-0">juandelacruz@email.com</p>
                          </div>
                        </div>
                      </td>
                      <td><p class="text-xs font-weight-bold mb-0">SK President</p></td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">09291234567</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-success">Approved</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Maria Santos</h6>
                            <p class="text-xs text-secondary mb-0">maria.santos@email.com</p>
                          </div>
                        </div>
                      </td>
                      <td><p class="text-xs font-weight-bold mb-0">SK President</p></td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">09381234567</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Don Carlos LYDO</h6>
                            <p class="text-xs text-secondary mb-0">doncarlos.lydo@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td><p class="text-xs font-weight-bold mb-0">LYDO</p></td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">09451234567</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-success">Approved</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr>
                  </tbody>

                </table>
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