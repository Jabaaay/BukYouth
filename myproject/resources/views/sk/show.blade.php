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
    BukYouth - Organizations
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
          <h1 class="mb-0 h2 font-weight-bolder">Local Youth Development Officer</h1>
          <p class="mb-4">
          </p>
        </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between px-3">
              <h6 class="text-white text-capitalize m-0">Personal Information</h6>
            </div>
            </div>
            <div class="px-3 pt-3">
              <div class="d-flex justify-content-end">
                
              </div>
            </div>

            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center">
                
                 <tbody class="">

                 <tr>
                    <td class="font-weight-bold"><p class=" font-weight-bold mb-0">Name</p></td>
                    <td class=" mb-0">{{ $sk->name }}</td>
                 </tr>
                 <tr>
                    <td class="font-weight-bold"><p class="font-weight-bold mb-0">Type</p></td>
                    <td class=" mb-0">{{ $sk->type }}</td>
                 </tr>
                  <tr>
                    <td class="font-weight-bold"><p class="font-weight-bold mb-0">Email</p></td>
                    <td class=" mb-0">{{ $sk->email }}</td>
                 </tr>
                 <tr>
                    <td class="font-weight-bold"><p class="font-weight-bold mb-0">Contact Number</p></td>
                    <td class=" mb-0">{{ $sk->contact_number }}</td>
                 </tr>

                 <tr>
                    <td class="font-weight-bold"><p class="font-weight-bold mb-0">Municipality</p></td>
                    <td class=" mb-0">{{ $sk->municipality }}</td>
                 </tr>
                 <tr>
                    <td class="font-weight-bold"><p class="font-weight-bold mb-0">Barangay</p></td>
                    <td class=" mb-0">{{ $sk->brgy }}</td>
                 </tr>

                  </tbody>

                </table>

                <div class="mb-3 px-2">
                    <button type="submit" class="btn bg-gradient-dark"><a href="{{ route('sk.index') }} " class="text-white">Cancel</a></button>
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
  <script>
  document.getElementById('typeFilter').addEventListener('change', function () {
    const selected = this.value;
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
      const type = row.getAttribute('data-type');

      if (selected === 'all' || type === selected) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
</script>

</body>

</html>
