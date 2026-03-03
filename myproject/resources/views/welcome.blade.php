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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    * {
      font-family: 'Poppins', sans-serif;
    }

    /* Interactive Social Media Icons */
    .social-icon-facebook,
    .social-icon-gmail,
    .social-icon-instagram {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      transition: all 0.3s ease;
      text-decoration: none;
      font-size: 16px;
    }

    .social-icon-facebook {
      background: linear-gradient(135deg, #1877f2 0%, #0c63d4 100%);
      color: white;
    }

    .social-icon-facebook:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 8px 20px rgba(24, 119, 242, 0.4);
    }

    .social-icon-gmail {
      background: linear-gradient(135deg, #ea4335 0%, #c5221f 100%);
      color: white;
    }

    .social-icon-gmail:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 8px 20px rgba(234, 67, 53, 0.4);
    }

    .social-icon-instagram {
      background: linear-gradient(135deg, #e4405f 0%, #833ab4 50%, #fd1d1d 100%);
      color: white;
    }

    .social-icon-instagram:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 8px 20px rgba(228, 64, 95, 0.4);
    }

    /* Footer Links Animation */
    .footer .nav-link {
      transition: all 0.3s ease;
      position: relative;
      padding-left: 0;
    }

    .footer .nav-link:hover {
      color: #667eea !important;
      transform: translateX(5px);
    }

    .footer .nav-link:hover i {
      transform: scale(1.2);
    }

    /* Footer Section Animation */
    .footer > .container > .row > div {
      opacity: 0;
      animation: fadeInUp 0.8s ease-out forwards;
    }

    .footer > .container > .row > div:nth-child(1) { animation-delay: 0.1s; }
    .footer > .container > .row > div:nth-child(2) { animation-delay: 0.2s; }
    .footer > .container > .row > div:nth-child(3) { animation-delay: 0.3s; }
    .footer > .container > .row > div:nth-child(4) { animation-delay: 0.4s; }
    .footer > .container > .row > div:nth-child(5) { animation-delay: 0.5s; }
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
                      <td><a href="{{ route('lydo.show-profile', $lydo->id) }}" class="btn btn-sm btn-primary btn-hover">View</a></td>
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
                      <td><a href="{{ route('sk.show-profile', $sk->id) }}" class="btn btn-sm btn-primary btn-hover">View</a></td>
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
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div>
              <img src="../assets/images/bp.png" alt="BukYouth Logo" width="100" height="100" class="me-2 animate-float">
              <img src="../assets/images/nyc.png" alt="BukYouth Logo" width="100" height="100" class="me-2 animate-float">
              <img src="../assets/images/image.png" alt="BukYouth Logo" width="100" height="100" class="me-2 animate-float">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div>
            <h6 class="text-sm text-dark font-weight-bolder">Social Media</h6>
            <ul class="flex-column nav">
              <li class="nav-item">
                 <a href="https://www.facebook.com/profile.php?id=100072118915376" target="_blank" class="social-icon-facebook">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="mailto:youthoffice@bukidnon.gov.ph" target="_blank" class="social-icon-gmail">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://www.instagram.com/bukidnonyouth" target="_blank" class="social-icon-instagram">
                <i class="fa fa-instagram"></i>
              </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4">
          <div>
            <h6 class="text-sm text-dark font-weight-bolder">Quick Links</h6>
            <ul class="flex-column nav">
              <li class="nav-item">
                <a href="{{ route('lydo.show-profile', '1') }}" class="nav-link text-muted">
                  LYDO Organizations
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sk.show-profile', '1') }}" class="nav-link text-muted">
                  SK Presidents
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link text-muted">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-muted">
                  Events
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div>
            <h6 class="text-sm text-dark font-weight-bolder">Contact Info</h6>
            <ul class="flex-column nav">
              <li class="nav-item">
                <a href="mailto:youthoffice@bukidnon.gov.ph" class="nav-link text-muted">
                  youthoffice@bukidnon.gov.ph
                </a>
              </li>
              <li class="nav-item">
                <a href="tel:+639171678932" class="nav-link text-muted">
                  +63 917 167 8932
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-muted">
                  Malaybalay City, Bukidnon
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-muted">
                  Mon-Fri: 8AM-5PM
                </a>
              </li>
            </ul>
          </div>
        </div>

        <h3>This is where we are located</h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.0597336967026!2d125.12810957745565!3d8.15464777092823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffaa2f2abaeca7%3A0x500d3b5f04595a9e!2sOld%20Provincial%20Hospital%20Bulding%2C%20Malaybalay%20City%2C%20Bukidnon!5e1!3m2!1sen!2sph!4v1772505932206!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="col-12">
          <div class="text-center mt-4">
            <p class="text-dark text-sm">
              © <script>document.write(new Date().getFullYear())</script> BukYouth. All rights reserved. | 
              <a href="#" class="text-primary">Privacy Policy</a> | 
              <a href="#" class="text-primary">Terms of Service</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  </body>