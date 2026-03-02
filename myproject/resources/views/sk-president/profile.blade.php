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
    
    /* Basic animations without hover effects */
    .badge {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }
    
    /* Loading animation */
    .fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .fade-in-delay-1 {
        animation: fadeIn 0.8s ease-out 0.2s both;
    }
    
    .fade-in-delay-2 {
        animation: fadeIn 0.8s ease-out 0.4s both;
    }
    
    .fade-in-delay-3 {
        animation: fadeIn 0.8s ease-out 0.6s both;
    }
</style>
<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <!-- End Navbar -->
     <div class="mt-4 mb-3 px-4">
      <a href="{{ url('/') }}" class="btn btn-outline-primary btn-fw me-3">
        <i class="material-symbols-rounded">arrow_back</i>Back
      </a>
     </div>
     <div class="container-fluid px-2 px-md-4">
      
      <div class="page-header min-height-300 border-radius-xl mt-4 fade-in">
        
        <span class="mask  bg-gradient-dark  opacity-6"></span>
      </div>
      <div class="card card-body mx-2 mx-md-2 mt-n6 fade-in-delay-1">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              @if($skPresident->images && $skPresident->images->where('is_primary', true)->first())
                <img src="{{ $skPresident->images->where('is_primary', true)->first()->image_url }}" 
                     alt="{{ $skPresident->name }}" class="w-100 border-radius-lg shadow-sm">
              @else
                <img src="../assets/img/team-4.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              @endif
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               {{ $skPresident->name }}
              </h5>
              <p class="mb-0 font-weight-normal text-sm badge bg-gradient-primary">
                {{ $skPresident->type }}
              </p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4 fade-in-delay-2">
              <div class="card card-plain h-100">
                <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">email</i>
                      <h6 class="mb-0">Email Address</h6>
                    </div>
                <div class="card-body">
                  <p class="font-size-14">
                    <a href="mailto:{{ $skPresident->email }}" class="text-decoration-none text-primary">
                      {{ $skPresident->email }}
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4 fade-in-delay-2">
              <div class="card card-plain h-100">
                <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">phone</i>
                      <h6 class="mb-0">Contact Number</h6>
                    </div>
                <div class="card-body">
                  <p class="font-size-14 text-primary">
                    <a href="tel:{{ $skPresident->contact_number }}" class="text-decoration-none text-primary">
                      {{ $skPresident->contact_number }}
                    </a>
                  </p>
                </div>
              </div>
            </div>
             
            <div class="col-12 col-xl-4 fade-in-delay-3">
              <div class="card card-plain h-100">
                <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">location_city</i>
                      <h6 class="mb-0">Municipality</h6>
                    </div>
                <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $skPresident->municipality }}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4 fade-in-delay-3">
              <div class="card card-plain h-100">
                <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">location_on</i>
                      <h6 class="mb-0">Barangay</h6>
                    </div>
                <div class="card-body">
                  <p class="font-size-14 text-primary">
                    {{ $skPresident->brgy }}
                  </p>
                </div>
              </div>
            </div>
            @if($skPresident->facebook_page)
            <div class="col-12 col-xl-4 fade-in-delay-3">
              <div class="card card-plain h-100">
                <div class="col-md-8 d-flex align-items-center">
                      <i class="material-symbols-rounded me-2 text-primary">facebook</i>
                      <h6 class="mb-0">Facebook Page</h6>
                    </div>
                <div class="card-body">
                  <p class="font-size-14 text-primary">
                    <a href="{{ $skPresident->facebook_page }}" target="_blank" class="text-decoration-none text-primary">
                      <i class="fab fa-facebook me-1"></i> Visit Page
                    </a>
                  </p>
                </div>
              </div>
            </div> 
            @endif

          </div>
        </div>
      </div>
    </div>
    <br>
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

  // Interactive features
  document.addEventListener('DOMContentLoaded', function() {
    // Add click-to-copy functionality for email and phone
    const emailElement = document.querySelector('a[href^="mailto:"]');
    const phoneElement = document.querySelector('a[href^="tel:"]');
    
    if (emailElement) {
      emailElement.addEventListener('click', function(e) {
        e.preventDefault();
        const email = this.textContent.trim();
        navigator.clipboard.writeText(email).then(function() {
          showToast('Email copied to clipboard!');
          setTimeout(() => {
            window.location.href = `mailto:${email}`;
          }, 1000);
        });
      });
    }
    
    if (phoneElement) {
      phoneElement.addEventListener('click', function(e) {
        e.preventDefault();
        const phone = this.textContent.trim();
        navigator.clipboard.writeText(phone).then(function() {
          showToast('Phone number copied to clipboard!');
          setTimeout(() => {
            window.location.href = `tel:${phone}`;
          }, 1000);
        });
      });
    }

    // Smooth scroll for back button
    const backButton = document.querySelector('.btn-back');
    if (backButton) {
      backButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = this.href;
      });
    }
  });

  // Toast notification function
  function showToast(message) {
    const toast = document.createElement('div');
    toast.className = 'toast-notification';
    toast.textContent = message;
    toast.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      z-index: 10000;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
      animation: slideIn 0.3s ease-out;
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
      toast.style.animation = 'slideOut 0.3s ease-out';
      setTimeout(() => {
        document.body.removeChild(toast);
      }, 300);
    }, 3000);
  }

  // Add slide animations
  const style = document.createElement('style');
  style.textContent = `
    @keyframes slideIn {
      from {
        transform: translateX(100%);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }
    
    @keyframes slideOut {
      from {
        transform: translateX(0);
        opacity: 1;
      }
      to {
        transform: translateX(100%);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(style);

  // Add keyboard navigation
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      window.location.href = '{{ url("/") }}';
    }
  });

  // Add print functionality
  document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && e.key === 'p') {
      e.preventDefault();
      window.print();
    }
  });
</script>

</body>

</html>

