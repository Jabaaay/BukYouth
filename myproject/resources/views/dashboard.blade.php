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

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <title>
    BukYouth - Dashboard
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
          <h1 class="mb-0 h2 font-weight-bolder">Dashboard</h1>
          <p class="mb-4">
          </p>
        </div>

        <div class="modal modal-content">


        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total LYDO</p>
                  <h2 class="mb-0">{{ $lydo }}</h2>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">group</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total SK President</p>
                  <h2 class="mb-0">{{ $sk_presidents }}</h2>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">location_on</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Number of Register</p>
                  <h2 class="mb-0">{{ $total_registered }}</h2>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">map</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Organizations</p>
                  <h2 class="mb-0">{{ $total_organizations }}</h2>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">business</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">LYDO vs SK President Distribution</h6>
              <p class="text-sm ">Organization Type Comparison</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-donut" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">pie_chart</i>
                <p class="mb-0 text-sm"> Total organizations: {{ $lydo }} </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Registrations by Municipality </h6>
              <p class="text-sm "> Distribution across municipalities </p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-registrations" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">location_city</i>
                <p class="mb-0 text-sm"> Total registered: {{ $total_registered }} </p>
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
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    // Bar Chart for LYDO vs SK President
    var ctxBar = document.getElementById("chart-donut").getContext("2d");

    new Chart(ctxBar, {
      type: "bar",
      data: {
        labels: ["LYDO", "SK President"],
        datasets: [{
          label: "Organizations",
          data: [{{ $lydo }}, {{ $sk_presidents }}],
          backgroundColor: [
            "#43A047",
            "#FB8C00"
          ],
          borderColor: [
            "#43A047",
            "#FB8C00"
          ],
          borderWidth: 2,
          borderRadius: 8,
          barThickness: 60
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            backgroundColor: 'rgba(0, 0, 0, 0.8)',
            titleColor: '#fff',
            bodyColor: '#fff',
            padding: 12,
            displayColors: false,
            callbacks: {
              label: function(context) {
                return context.label + ': ' + context.parsed.y;
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#e5e5e5'
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 12,
                lineHeight: 2
              },
              stepSize: 1
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 14,
                weight: '500'
              }
            }
          }
        }
      }
    });

    // Donut Chart for Registrations by Municipality
    var ctxDonut = document.getElementById("chart-registrations").getContext("2d");

    // Generate colors for municipalities
    const colors = [
        '#43A047', '#FB8C00', '#1E88E5', '#D81B60', '#8E24AA',
        '#F4511E', '#3949AB', '#00ACC1', '#FDD835', '#6D4C41'
    ];

    new Chart(ctxDonut, {
      type: "doughnut",
      data: {
        labels: [{!! $municipality_data->pluck('municipality')->map(function($m) { return "'".$m."'"; })->implode(',') !!}],
        datasets: [{
          label: "Registrations",
          data: [{!! $municipality_data->pluck('total')->implode(',') !!}],
          backgroundColor: colors.slice(0, {{ $municipality_data->count() }}),
          borderColor: '#fff',
          borderWidth: 2,
          hoverOffset: 4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              padding: 15,
              font: {
                size: 11
              },
              color: "#737373",
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          tooltip: {
            backgroundColor: 'rgba(0, 0, 0, 0.8)',
            titleColor: '#fff',
            bodyColor: '#fff',
            padding: 12,
            displayColors: true,
            callbacks: {
              label: function(context) {
                let label = context.label || '';
                if (label) {
                  label += ': ';
                }
                const sum = context.dataset.data.reduce((a, b) => a + b, 0);
                const percentage = ((context.parsed / sum) * 100).toFixed(1);
                label += context.parsed + ' (' + percentage + '%)';
                return label;
              }
            }
          }
        },
        cutout: '60%'
      }
    });
  </script>
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