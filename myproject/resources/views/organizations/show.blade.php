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
     <div class="container-fluid px-2 px-md-4">
      <div class="mb-3">
      <a href="{{ route('organizations.index') }}" class="btn btn-outline-primary btn-fw me-3">
        <i class="material-symbols-rounded">arrow_back</i>Back
      </a>
     </div>
      <div class="page-header min-height-300 border-radius-xl mt-4" style="">
        <span class="mask  bg-gradient-dark  opacity-6"></span>
      </div>
      <div class="card card-body mx-2 mx-md-2 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
@if(isset($imagePath[$youth->id]))
                    <img src="{{ $imagePath[$youth->id] }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                   @else
                    <img src="../assets/images/image.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"><img src="https://scontent.fcgm1-1.fna.fbcdn.net/v/t39.30808-6/618097911_2626094681097067_8038210258107961028_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=1d70fc&_nc_eui2=AeHC-nA98--AWtuvshzTWTiJDgXlZhB_1JYOBeVmEH_Uloeh4LiZ-bTuKR7KNN5h_0-Pm0KyJHGRyRDX_Ucnw-vL&_nc_ohc=dndpS3Nv6xQQ7kNvwEuWchG&_nc_oc=Adn9G5n7MnHSpL3wT0EEvEttlszomlG3rtTLdvvMtBPTklFRUG2Sh759cFVeXab8sy4&_nc_zt=23&_nc_ht=scontent.fcgm1-1.fna&_nc_gid=xk1QcJuF9rya1r2BPe-BUg&oh=00_AfsOPGo6zn5ymw--mMPB-9v1C2xzYU41VF06pu1zjL8R1g&oe=69A1F6CA" class="avatar avatar-sm me-3 border-radius-lg" alt="user default">
                  @endif            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               {{ $youth->name }}
              </h5>
              <p class="mb-0 font-weight-normal text-sm badge bg-gradient-primary">
                {{ $youth->type }}
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3 d-flex align-items-center">
                  <i class="material-symbols-rounded me-2 text-primary">email</i>
                  <h6 class="mb-0">Email Address</h6>
                </div>
                <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $youth->email }}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3 ">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">phone</i>
                      <h6 class="mb-0">Contact Number</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $youth->contact_number }}
                  </p>
                </div>
                  </div>
                </div>
             
              </div>
            </div>
              <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">groups</i>
                      <h6 class="mb-0">Register Count</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $youth->registered_count }}
                  </p>
                </div>
                  </div>
                </div>
                
              </div>
            </div> 
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">location_city</i>
                      <h6 class="mb-0">Municipality</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $youth->municipality }}
                  </p>
                </div>
                  </div>
                </div>
             
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">location_on</i>
                      <h6 class="mb-0">Barangay</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $youth->brgy }}
                  </p>
                </div>
                  </div>
                </div>
             
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">public</i>
                      <h6 class="mb-0">Facebook Page</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    <a href="{{ $youth->facebook_page }}" target="_blank" class="text-decoration-none text-primary">
                      {{ $youth->facebook_page }}
                    </a>
                  </p>
                </div>
                  </div>
                </div>
             
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">description</i>
                      <h6 class="mb-0">LYDP Plan</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    <a href="{{ route('youth.view-lydp', $youth->id) }}" target="_blank" class="text-decoration-none text-primary">
                      View
                    </a> 
                  </p>
                </div>
                  </div>
                </div>
             
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">check_circle</i>
                      <h6 class="mb-0">LYDP Status</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                    @if($youth->lydp_status == 'Pending')
                      <span class="badge bg-warning">Pending</span>
                    @elseif($youth->lydp_status == 'Approved')
                      <span class="badge bg-success">Approved</span>
                    @elseif($youth->lydp_status == 'Rejected')
                      <span class="badge bg-danger">Rejected</span>
                    @endif
                  </p>
                </div>
                  </div>
                  
                </div>
              </div>
            </div> 
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                 
                    <div class="card-body">
               
                </div>
                  </div>
                </div>
             
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">groups</i>
                      <h6 class="mb-0">List of All Members</h6>
                    </div>
                    <div class="card-body">
                  <p class="font-size-14 text-primary">
                  @foreach($lydcMembers as $member)
                    <tr>
                      <td class=" mb-0">{{ $member->name }}</td>
                    </tr>
                  @endforeach 
                  </p>
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

