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
          <h1 class="mb-0 h2 font-weight-bolder">Organizations</h1>
          <p class="mb-4">
          </p>
        </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between px-3">
              <h6 class="text-white text-capitalize m-0">LYDO Organizations</h6>
            </div>
            </div>
            <div class="px-3 pt-3">
              <div class="d-flex justify-content-end">
                
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

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                
                 <tbody>
@foreach($youths as $youth)
    <tr>
        <td>
            <div class="d-flex px-2 py-1">
                <div>
                    @if(isset($imagePath[$youth->id]))
                        <img src="{{ $imagePath[$youth->id] }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    @else
                        <img src="https://scontent.fcgm1-1.fna.fbcdn.net/v/t39.30808-6/618097911_2626094681097067_8038210258107961028_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=1d70fc&_nc_eui2=AeHC-nA98--AWtuvshzTWTiJDgXlZhB_1JYOBeVmEH_Uloeh4LiZ-bTuKR7KNN5h_0-Pm0KyJHGRyRDX_Ucnw-vL&_nc_ohc=dndpS3Nv6xQQ7kNvwEuWchG&_nc_oc=Adn9G5n7MnHSpL3wT0EEvEttlszomlG3rtTLdvvMtBPTklFRUG2Sh759cFVeXab8sy4&_nc_zt=23&_nc_ht=scontent.fcgm1-1.fna&_nc_gid=xk1QcJuF9rya1r2BPe-BUg&oh=00_AfsOPGo6zn5ymw--mMPB-9v1C2xzYU41VF06pu1zjL8R1g&oe=69A1F6CA" class="avatar avatar-sm me-3 border-radius-lg" alt="user default">
                    @endif
                </div>

                <div class="d-flex flex-column justify-content-center">

                    <h6 class="mb-0 text-sm">{{ $youth->name }}</h6>
                    <p class="text-xs text-secondary mb-0">{{ $youth->email }}</p>
                </div>
            </div>
        </td>
        <td>
            <span class="badge bg-gradient-dark">{{ $youth->type }}</span>
        </td>
        <td class="align-middle text-center text-sm">
            <p class="text-xs font-weight-bold mb-0">{{ $youth->contact_number }}</p>
        </td>
        <td class="align-middle text-center">
            <span class="badge bg-gradient-success">{{ $youth->municipality }}</span>
        </td>
        <td class="align-middle text-center">
            <a href="{{ route('organizations.show', $youth->id) }}" class="btn btn-sm btn-outline-primary">View</a>
            <a href="{{ route('organizations.edit', $youth->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
            <form action="{{ route('organizations.destroy', $youth->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-outline-danger" onclick="return confirmDelete(this)">Delete</button>
                <script>
                    function confirmDelete(event){
                        swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this youth!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                event.closest('form').submit();
                                swal("Poof! Your youth has been deleted!", {
                                    icon: "success",
                                });
                            }
                        });
                        return false;
                    }
                </script>
            </form>
        </td>
    </tr>
@endforeach
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