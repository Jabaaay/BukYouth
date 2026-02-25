<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/image.png">
  <title>
    BukYouth - Connecting and Empowering Bukidnon's Youth
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
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* Custom Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out;
    }

    .animate-fadeInLeft {
      animation: fadeInLeft 0.8s ease-out;
    }

    .animate-fadeInRight {
      animation: fadeInRight 0.8s ease-out;
    }

    .animate-pulse {
      animation: pulse 2s infinite;
    }

    .animate-float {
      animation: float 3s ease-in-out infinite;
    }

    .animate-delay-1 {
      animation-delay: 0.2s;
    }

    .animate-delay-2 {
      animation-delay: 0.4s;
    }

    .animate-delay-3 {
      animation-delay: 0.6s;
    }

    /* Hover effects */
    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .btn-hover {
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-hover::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .btn-hover:hover::before {
      left: 100%;
    }

    .btn-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Navbar animation */
    .navbar-animate {
      animation: fadeInDown 0.6s ease-out;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Table row animations */
    .table-row-animate {
      transition: all 0.3s ease;
    }

    .table-row-animate:hover {
      background-color: rgba(255,255,255,0.05);
      transform: scale(1.02);
    }

    /* Search input animation */
    .search-animate {
      transition: all 0.3s ease;
    }

    .search-animate:focus {
      transform: scale(1.02);
      box-shadow: 0 0 0 3px rgba(123,76,255,0.3);
    }

    /* Loading Screen */
    .loading-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .loading-content {
      text-align: center;
      color: white;
    }

    .loading-spinner {
      width: 60px;
      height: 60px;
      border: 4px solid rgba(255,255,255,0.3);
      border-top: 4px solid white;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto 20px;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .loading-text {
      font-size: 18px;
      font-weight: 500;
      margin-top: 20px;
      opacity: 0;
      animation: fadeIn 0.5s ease-in 0.5s forwards;
    }

    @keyframes fadeIn {
      to { opacity: 1; }
    }

    .hide-loading {
      animation: fadeOut 0.5s ease-out forwards;
    }

    @keyframes fadeOut {
      to { 
        opacity: 0;
        visibility: hidden;
      }
    }
  </style>
</head>

<body class="landing-page bg-gray-200">

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4 navbar-animate">
          <div class="container-fluid px-0">
           <img src="../assets/images/pydo.png" alt="BukYouth Logo" width="30" height="30">
          <a class="navbar-brand font-weight-bolder" href="https://www.creative-tim.com/material-dashboard" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              BukYouth
            </a>
           
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                
              <li class="nav-item me-2">
               <div class="input-group input-group-outline">
                            <input class="form-control text-black search-animate" name="text" type="text" placeholder="Search organizations..." required />
                          </div>
              </li>
              <br>
                <li class="nav-item">
                <button class="btn btn-outline-primary me-3 mb-0 btn-hover">
                    <a href="{{ route('login') }}" class="text-primary">Log In</a>
                </button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
         
      </div>
    </div>
  </div>

   <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mt-8 position-relative z-index-1">
            <h1 class="animate-fadeInUp">Bukidnon Youth</h1>
            <p class="text-lg mt-3 animate-fadeInUp animate-delay-1">
              Connecting and empowering youth organizations, leaders, and programs across Bukidnon. Discover local opportunities, build networks, and drive positive change in your community.
            </p>
          </div>
          <div class="col-lg-4 ms-auto position-relative z-index-2 d-flex flex-column justify-content-center">
            <img src="../assets/images/pydo.png" alt="" class="animate-float">
          </div>
          <svg class="position-absolute top-0" width="1231" height="1421" viewBox="0 0 1231 1421" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.12786" filter="url(#filter0_f_31_15)">
              <ellipse cx="811.5" cy="602.5" rx="675.5" ry="682.5" fill="url(#paint0_linear_31_15)" />
            </g>
            <defs>
              <filter id="filter0_f_31_15" x="0.085907" y="-215.914" width="1622.83" height="1636.83" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="67.957" result="effect1_foregroundBlur_31_15" />
              </filter>
              <linearGradient id="paint0_linear_31_15" x1="804.405" y1="-136.203" x2="160.281" y2="643.776" gradientUnits="userSpaceOnUse">
                <stop stop-color="#7B4CFF" />
                <stop offset="0.469471" stop-color="#EC407A" />
                <stop offset="1" stop-color="white" />
              </linearGradient>
            </defs>
          </svg>
          <img class="position-absolute top-0 mt-n7 me-n12 end-0 w-70 z-index-3" src="../assets/img/perspective.png" alt="header-image">
        </div>
      </div>
    </div>

    <section id="products">
      <div class="container mt-8">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center mb-4">Search & Discover</h2>
          <p class="text-center text-lg mb-5">Find youth organizations, programs, and events in Bukidnon</p>
          
          <div class="row g-4">
            <div class="col-md-6">
              <div class="card card-hover">
                <div class="card-body bg-gradient-dark h-100 rounded-3">
                  <h5 class="card-title text-secondary">Search LYDO Organizations</h5>
                  <p class="card-text text-secondary">Discover Local Youth Development Organizations across Bukidnon province</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>LYDO</th>
                      <th>Contact Number</th>
                      <th>Municipality</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($lydos as $lydo)
                    <tr>
                      <td>{{ $lydo->name }}</td>
                      <td>{{ $lydo->contact_number }}</td>
                      <td>{{ $lydo->municipality }}</td>
                      <td><a href="#" class="btn btn-sm btn-primary btn-hover">View</a></td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center text-secondary">No LYDO organizations found</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                <div class="mt-3 d-flex justify-content-center">
                        {{ $lydos->links('pagination::bootstrap-4') }}
                    </div>
              </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-hover">
                <div class="card-body bg-gradient-dark h-100 rounded-3">
                  <h5 class="card-title text-secondary">Search SK Presidents</h5>
                  <p class="card-text text-secondary">Connect with Sangguniang Kabataan presidents and their youth programs</p>
                  <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>SK President</th>
                      <th>Contact Number</th>
                      <th>Municipality</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($skPresidents as $sk)
                    <tr>
                      <td>{{ $sk->name }}</td>
                      <td>{{ $sk->contact_number }}</td>
                      <td>{{ $sk->municipality }}</td>
                      <td><a href="#" class="btn btn-sm btn-primary btn-hover">View</a></td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center text-secondary">No SK Presidents found</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>

                 <div class="mt-3 d-flex justify-content-center">
                        {{ $skPresidents->links('pagination::bootstrap-4') }}
                    </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright 2026 Bukidnon Youth.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  </body>