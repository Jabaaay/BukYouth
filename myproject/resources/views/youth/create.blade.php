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
          <h1 class="mb-0 h2 font-weight-bolder">Officials</h1>
          <p class="mb-4">
          </p>
        </div>

<div class="row">
    
        <div class="col-12">
            
            <div class="card my-4">
               
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between px-3">
                        <h6 class="text-white text-capitalize m-0">Add Local Youth Development Officer</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-4">

                    <form action="{{ route('youth.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="mb-3">
                            <label for="name" class="form-label">Name (LYDO)</label>
                            <input type="text" name="name" id="name" class="form-control border" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Add Profile Picture</label>
                            <input type="file" name="photo" id="photo" class="form-control border">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control border" value="{{ old('email') }}" required>
                        </div>

                         <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number" class="form-control border" value="{{ old('contact_number') }}" required>
                        </div>


                      

                         <div class="mb-3">
                            <label for="facebook_page" class="form-label">Facebook Page (Optional)</label>
                            <input type="text" name="facebook_page" id="facebook_page" class="form-control border" value="{{ old('facebook_page') }}">
                        </div>
                        <div class="mb-3">
                            <label for="registered_count" class="form-label">Number of Register in LYDC</label>
                            <input type="text" name="registered_count" id="registered_count" class="form-control border" value="{{ old('registered_count') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="member_name" class="form-label">Add LYDC Members</label>
                            <div class="input-group">
                                <input type="text" id="member_name" class="form-control border mb-3 right-border-none" placeholder="Enter member name">
                                <button type="button" class="btn btn-outline-secondary right-border-none cursor-pointer" onclick="addMember()">Add</button>
                            </div>
                            <small class="text-muted">Add members of the Local Youth Development Council</small>
                        </div>

                        

                        <div class="mb-3">
                            <label class="form-label">LYDC Members</label>
                            <div id="members_container" class="row g-2">
                                <!-- Members will be displayed here -->
                            </div>
                            <input type="hidden" name="lydc_members" id="lydc_members" value="">
                        </div>

                         <div class="mb-3">
                            <label for="file_plan" class="form-label">Local Youth Development Plan (Optional)</label>
                            <input type="file" name="file_plan" id="file_plan" class="form-control border" accept=".pdf,.doc,.docx">
                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max: 10MB)</small>
                        </div>

                

                        <div class="mb-3">
                            <label for="lydp_status" class="form-label">LYDP Status</label>
                            <select name="lydp_status" id="lydp_status" class="form-control border" required>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div>

                         <div class="mb-3">
                            <label for="municipality" class="form-label">Municipality</label>
                            <select name="municipality" id="municipality" class="form-control border" required>
                                <option value="">-- Select Municipality --</option>
                                <option value="Baungon">Baungon</option>
                                <option value="Cabanglasan">Cabanglasan</option>
                                <option value="Damulog">Damulog</option>
                                <option value="Dangcagan">Dangcagan</option>
                                <option value="Don Carlos">Don Carlos</option>
                                <option value="Impasug-ong">Impasug-ong</option>
                                <option value="Kadingilan">Kadingilan</option>
                                <option value="Kalilangan">Kalilangan</option>
                                <option value="Kibawe">Kibawe</option>
                                <option value="Kitaotao">Kitaotao</option>
                                <option value="Lantapan">Lantapan</option>
                                <option value="Libona">Libona</option>
                                <option value="Malitbog">Malitbog</option>
                                <option value="Manolo Fortich">Manolo Fortich</option>
                                <option value="Maramag">Maramag</option>
                                <option value="Quezon">Quezon</option>
                                <option value="San Fernando">San Fernando</option>
                                <option value="Sumilao">Sumilao</option>
                                <option value="Talakag">Talakag</option>
                                <option value="Pangantucan">Pangantucan</option>
                                <option value="Valencia City">Valencia City</option>
                                <option value="Malaybalay City">Malaybalay City</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="brgy" class="form-label">Barangay</label>
                            <select name="brgy" id="barangay" class="form-control border" required>
                                <option value="">-- Select Barangay --</option>
                            </select>
                        </div>

                        <button type="submit" class="btn bg-gradient-dark mb-0 toast-btn" data-toast="successToast">Save</button>

                        <a href="{{ route('youth.index') }}" class="btn btn-secondary mb-0">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
      </div>
      
     
    </div>
 @if (session('success'))
     <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-symbols-rounded text-success me-2">
              check
            </i>
            <span class="me-auto font-weight-bold"> {{ session('success') }}</span>
       
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            {{ session('success') }}
          </div>
        </div>
      </div>
      @endif
  </main>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var barangays = {
        "Baungon": ["Balintad", "Buenavista", "Danatag", "Imbatug", "Kalilangan", "Lacolac", "Langaon", "Liboran", "Lingating", "Mabuhay", "Mabunga", "Nicdao", "Pualas", "Salimbalan", "San Miguel", "San Vicente"],
        "Cabanglasan": ["Anlogan", "Cabulohan", "Canangaan", "Capinonan", "Dalacutan", "Freedom", "Iba", "Imbatug", "Jasaan", "Lambangan", "Mandahikan", "Mandaing", "Mauswagon", "Paradise", "Poblacion"],
        "Damulog": ["Aludas", "Angga-an", "Kinapat", "Kiraon", "Kitingting", "Lagandang", "Macapari", "Maican", "Migcawayan", "New Compostela", "Old Damulog", "Omonay", "Poblacion", "Pocopoco", "Sampagar", "San Isidro", "Tangkulan"],
        "Dangcagan": ["Barongcot", "Bugwak", "Dolorosa", "Kapalaran", "Kianggat", "Lourdes", "Macarthur", "Miaray", "Migcuya", "New Visayas", "Osmeña", "Poblacion", "Sagbayan", "San Vicente"],
        "Don Carlos": ["Bismartz", "Bocboc", "Buyot", "Cabadiangan", "Calaocalao", "Don Carlos Norte", "Doc Carlos Sur", "Embayao", "Kalubihon", "Kasigkot", "Kawilihan", "Kiara", "Kibatang", "Mahayahay", "Manlamonay", "Maraymaray", "Mauswagon", "Minsalagan", "New Nongnongan", "new Visayas", "Old Nongnongan", "Pinamaloy", "Pualas", "San Antonio East", "San Antonoio West", "San Francisco", "San Nicolas", "San Roque", "Sinaysayan", "Sinuda", "Tandong", "Tawas", "West Dalurong", "White Kulaman"],
        "Impasug-ong": ["Bontongon", "Bulonay", "Capitan Bayong", "Cawayan", "Dumalaguing", "Guihe-an", "Hagpa", "Impalutao", "Kalabugao", "Kibenton", "La Fortuna", "Poblacion", "Sayawan"],
        "Kadingilan": [
            "Bagongbayan",
            "Bagor",
            "Balaoro",
            "Baroy",
            "Cabadiangan",
            "Husayan",
            "Kibalagon",
            "Kibogtok",
            "Mabuhay",
            "Malinao",
            "Matampay",
            "Pay-as",
            "Pinamanguhan",
            "Poblacion",
            "Salvacion",
            "San Andres",
            "Sibonga"
        ],
        "Kalilangan": [
            "Baborawon",
            "Bangbang",
            "Canituan",
            "Kibaning",
            "Kinura",
            "Lampanusan",
            "Maca-opao",
            "Malinao",
            "Ninoy Aquino",
            "Pamotolon",
            "Poblacion",
            "Public",
            "San Vicente Ferrer",
            "West Poblacion"
        ],
        "Kibawe": [
            "Balintawak",
            "Bukang Liwayway",
            "Cagawasan",
            "East Kibawe",
            "Gutapol",
            "Kiorao",
            "Kisawa",
            "Labuagon",
            "Magsaysay",
            "Marapangi",
            "Mascariñas",
            "Natulongan",
            "New Kidapawan",
            "Old Kibawe",
            "Palma",
            "Pinamula",
            "Romagooc",
            "Sampaguita",
            "Sanipon",
            "Spring",
            "Talahiron",
            "Tumaras",
            "West Kibawe"
        ],
        "Kitaotao": [
            "Balangigay",
            "Balukbukan",
            "Bershiba",
            "Binoongan",
            "Bobong",
            "Bolocaon",
            "Cabalantian",
            "Calapaton",
            "Digongan",
            "East Dalurong",
            "Kahusayan",
            "Kalumihan",
            "Kauyonan",
            "Kimolong",
            "Kipilas",
            "Kitaihon",
            "Kitobo",
            "Kiulom",
            "Magsaysay",
            "Malobalo",
            "Metebagao",
            "Napalico",
            "Pagan",
            "Panganan",
            "Poblacion",
            "Sagundanon",
            "San Isidro",
            "San Lorenzo",
            "Santo Rosario",
            "Sinaysayan",
            "Sinuda",
            "Tandong",
            "Tawas",
            "West Dalurong",
            "White Kulaman"
        ],
        "Lantapan": [
            "Alanib",
            "Baclayon",
            "Balila",
            "Bantuanon",
            "Basak",
            "Bugcaon",
            "Capitan Juan",
            "Cawayan",
            "Ka-atoan",
            "Kibangay",
            "Kulasihan",
            "Poblacion",
            "Songco",
            "Victory"
        ],
        "Libona": [
            "Capihan",
            "Crossing",
            "Gango",
            "Kiliog",
            "Kinawe",
            "Laturan",
            "Maambong",
            "Nangka",
            "Palabucan",
            "Poblacion",
            "Pongol",
            "San Jose",
            "Santa Fe",
            "Sil-ipon"
        ],
        "Malitbog": [
            "Kalingking",
            "Kiabo",
            "Mindagat",
            "Omagling",
            "Patpat",
            "Poblacion",
            "Sampiano",
            "San Luis",
            "Santa Ines",
            "Silo-o",
            "Sumalsag"
        ],
        "Manolo Fortich": [
            "Agusan Canyon",
            "Alae",
            "Dahilayan",
            "Dalirig",
            "Damilag",
            "Diclum",
            "Guilang-guilang",
            "Kalugmanan",
            "Lindaban",
            "Lingion",
            "Lunocan",
            "Maluko",
            "Mambatangan",
            "Mampayag",
            "Mantibugao",
            "Minsuro",
            "San Miguel",
            "Sankanan",
            "Santiago",
            "Santo Niño",
            "Tankulan",
            "Ticala"
        ],
        "Maramag": [
            "Anahawon",
            "Bagongsilang",
            "Base Camp",
            "Bayabason",
            "Camp I",
            "Colambugan",
            "Dagumbaan",
            "Danggawan",
            "Dologon",
            "Kiharong",
            "Kisanday",
            "Kuya",
            "La Roxas",
            "North Poblacion",
            "Panadtalan",
            "Panalsalan",
            "San Miguel",
            "San Roque",
            "South Poblacion",
            "Tubigon"
        ],
        "Pangantucan": [
            "Adtuyon",
            "Bacusanon",
            "Bangahan",
            "Barandias",
            "Concepcion",
            "Gandingan",
            "Kimanait",
            "Kipadukan",
            "Langcataon",
            "Lantay",
            "Madaya",
            "Malipayon",
            "Mendis",
            "Nabaliwa",
            "New Eden",
            "Payad",
            "Pigtauranan",
            "Poblacion",
            "Portulin"
        ],
        "Quezon": [
            "Butong",
            "Cawayan",
            "Cebole",
            "C-Handumanan",
            "Delapa",
            "Dumalama",
            "Kiburiao",
            "Kipaypayon",
            "Libertad",
            "Linabo",
            "Lipa",
            "Lumintao",
            "Magsaysay",
            "Mahayag",
            "Manuto",
            "Merangerang",
            "Mibantang",
            "Minongan",
            "Minsalirak",
            "Minsamongan",
            "Paitan",
            "Palacapao",
            "Pinilayan",
            "Poblacion",
            "Puntian",
            "Salawagan",
            "San Isidro",
            "San Jose",
            "San Roque",
            "Santa Cruz",
            "Santa Filomena"
        ],
        "San Fernando": [
            "Bonacao",
            "Bulalang",
            "Cabuling",
            "Candelaria",
            "Cayaga",
            "Dao",
            "Durian",
            "Halapitan",
            "Iglugsad",
            "Kalagangan",
            "Kawayan",
            "Kibongcog",
            "Little Baguio",
            "Mabuhay",
            "Magkalungay",
            "Malayanan",
            "Matupe",
            "Nacabuklad",
            "Namnam",
            "Palacpacan",
            "Sacramento Valley",
            "San Jose",
            "Santo Domingo",
            "Tugop"
        ],
        "Sumilao": [
            "Kisolon",
            "Kulasi",
            "Licoan",
            "Lupiagan",
            "Ocasion",
            "Poblacion",
            "Puntian",
            "San Roque",
            "San Vicente",
            "Vista Villa"
        ],
        "Talakag": [
            "Barangay 1",
            "Barangay 2",
            "Barangay 3",
            "Barangay 4",
            "Barangay 5",
            "Basak",
            "Baylanan",
            "Cacaon",
            "Colawingon",
            "Cosina",
            "Dagumbaan",
            "Dagundalahon",
            "Dominorog",
            "Indulang",
            "Lantud",
            "Lapok",
            "Liguron",
            "Lingi-on",
            "Lirongan",
            "Miarayon",
            "Sagaran",
            "Salucot",
            "San Antonio",
            "San Isidro",
            "San Miguel",
            "San Rafael",
            "Santo Niño",
            "Tagbak",
            "Tikalaan"
        ],
        "Valencia City": [
            "Bagontaas",
            "Banlag",
            "Barobo",
            "Batangan",
            "Catumbalon",
            "Colonia",
            "Concepcion",
            "Dagat-Kidavao",
            "Guinoyuran",
            "Kahapunan",
            "Laligan",
            "Lilingayon",
            "Lourdes",
            "Lumbayao",
            "Lumbo",
            "Lurogan",
            "Maapag",
            "Mabuhay",
            "Mailag",
            "Mt. Nebo",
            "Nabago",
            "Pinatilan",
            "Poblacion",
            "San Carlos",
            "San Isidro",
            "Sinabuagan",
            "Sinayawan",
            "Sugod",
            "Tongantongan",
            "Tugaya",
            "Vintar"
        ],
        "Malaybalay City": [
            "Aglayan",
            "Apo Macote",
            "Bangcud",
            "Barangay 1",
            "Barangay 10",
            "Barangay 11",
            "Barangay 2",
            "Barangay 3",
            "Barangay 4",
            "Barangay 5",
            "Barangay 6",
            "Barangay 7",
            "Barangay 8",
            "Barangay 9",
            "Busdi",
            "Cabangahan",
            "Caburacanan",
            "Canituan",
            "Capitan Angel",
            "Casisang",
            "Dalwangan",
            "Imbayao",
            "Indalaza",
            "Kabalabag",
            "Kalasungay",
            "Kulaman",
            "Laguitas",
            "Linabo",
            "Magsaysay",
            "Malinao",
            "Managok",
            "Manalog",
            "Mapayag",
            "Mapulo",
            "Miglamin",
            "Patpat",
            "Saint Peter",
            "San Jose",
            "San Martin",
            "Santo Niño",
            "Silae",
            "Simaya",
            "Sinanglanan",
            "Sumpong",
            "Violeta",
            "Zamboanguita"
        ]
    };

    $('#municipality').change(function() {
        var municipality = $(this).val();
        var options = '<option value="">-- Select Barangay --</option>';
        if(municipality && barangays[municipality]){
            $.each(barangays[municipality], function(index, value){
                options += '<option value="'+value+'">'+value+'</option>';
            });
        }
        $('#barangay').html(options);
    });

    var members = [];

    function addMember() {
        var memberInput = document.getElementById('member_name');
        var memberName = memberInput.value.trim();
        
        if (memberName === '') {
            alert('Please enter a member name');
            return;
        }
        
        if (members.includes(memberName)) {
            alert('This member already exists');
            return;
        }
        
        members.push(memberName);
        memberInput.value = '';
        updateMembersDisplay();
        updateHiddenInput();
    }

    function removeMember(index) {
        members.splice(index, 1);
        updateMembersDisplay();
        updateHiddenInput();
    }

    function updateMembersDisplay() {
        var container = document.getElementById('members_container');
        container.innerHTML = '';
        
        members.forEach(function(member, index) {
            var memberCard = document.createElement('div');
            memberCard.className = 'col-md-4 col-lg-2';
            memberCard.innerHTML = `
                <div class="border border-secondary p-2 position-relative align-items-center">
                    <span class="text-wrap text-truncate text-sm">${member}</span>
                    <div class="position-absolute top-0 end-0 p-2">
                        <i class="material-symbols-rounded cursor-pointer" onclick="removeMember(${index})">close</i>
                    </div>
                </div>
            `;
            container.appendChild(memberCard);
        });
    }

    function updateHiddenInput() {
        var hiddenInput = document.getElementById('lydc_members');
        hiddenInput.value = members.join(',');
    }

    // Allow adding member with Enter key
    document.getElementById('member_name').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            addMember();
        }
    });

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