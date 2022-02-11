<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>UAS PAKET 4</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css" />
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
      <?php
      include('config.php'); 
      ?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo mr-5" href=""><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group"></div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-settings d-none d-lg-flex"></li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="ti-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <div class="tab-content" id="setting-content">
            <!-- To do section tab ends -->
            <!-- chat tab ends -->
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">PAKET 4</span>
              </a>
            </li>
        </nav>
        <!-- partial -->
    <?php
        $sql=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'Asia'") or die(mysqli_error($koneksi));
        $sqlEropa=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'Europe'") or die(mysqli_error($koneksi));
        $sqlNorthA=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'North America'") or die(mysqli_error($koneksi));
        $sqlAfrica=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'Africa'") or die(mysqli_error($koneksi));
        $sqlOcean=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'Oceania'") or die(mysqli_error($koneksi));
        $sqlSA=mysqli_query($koneksi,"SELECT ((SELECT SUM(city.Population) FROM city)/(SUM(country.SurfaceArea))) as kepadatan_penduduk FROM `country` where country.Continent LIKE 'South America'") or die(mysqli_error($koneksi));
// Jumlah negara
        $sqlAsia=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'Asia'") or die(mysqli_error($koneksi));
        $sqlE=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'Europe'") or die(mysqli_error($koneksi));
        $sqlAE=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'North America'") or die(mysqli_error($koneksi));
        $sqlAF=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'Africa'") or die(mysqli_error($koneksi));
        $sqlO=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'Oceania'") or die(mysqli_error($koneksi));
        $sqlAN=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'Antarctica'") or die(mysqli_error($koneksi));
        $sqlSAM=mysqli_query($koneksi,"SELECT COUNT(Name) as jumlah_negara FROM `country` WHERE Continent LIKE 'South America'") or die(mysqli_error($koneksi));






        $dataA = mysqli_fetch_array($sqlAsia);
        $dataE = mysqli_fetch_array($sqlE);
        $dataAE = mysqli_fetch_array($sqlAE);
        $dataAF = mysqli_fetch_array($sqlAF);
        $dataO = mysqli_fetch_array($sqlO);
        $dataAN = mysqli_fetch_array($sqlAN);
        $dataSAM = mysqli_fetch_array($sqlSAM);



        // Jumlah kota
        $sqlAsia=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'Asia'") or die(mysqli_error($koneksi));
        $sqlEropaa=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'Europe'") or die(mysqli_error($koneksi));
        $sqlAmrut=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'North America'") or die(mysqli_error($koneksi));
        $sqlAfrik=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'Africa'") or die(mysqli_error($koneksi));
        $sqlOCE=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'Oceania'") or die(mysqli_error($koneksi));
        $sqlANTA=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'Antarctica'") or die(mysqli_error($koneksi));
        $sqlAmsel=mysqli_query($koneksi,"SELECT COUNT(city.Name) as jumlah_kota FROM `country` INNER JOIN city ON country.Code=city.CountryCode WHERE Continent LIKE 'South America'") or die(mysqli_error($koneksi));





        $kotaAsia = mysqli_fetch_array($sqlAsia);
        $kotaEropa = mysqli_fetch_array($sqlEropaa);
        $kotaAmrut = mysqli_fetch_array($sqlAmrut);
        $kotaAfrika = mysqli_fetch_array($sqlAfrik);
        $kotaOceania = mysqli_fetch_array($sqlOCE);
        $kotaAntarctica = mysqli_fetch_array($sqlANTA);
        $kotaAmsel = mysqli_fetch_array($sqlAmsel);












// kepadatan pend
        $data = mysqli_fetch_array($sql);
        $data1 = mysqli_fetch_array($sqlEropa);
        $data2 = mysqli_fetch_array($sqlNorthA);
        $data3 = mysqli_fetch_array($sqlAfrica);
        $data4 = mysqli_fetch_array($sqlOcean);
        $data5 = mysqli_fetch_array($sqlSA);



    ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Paket 4</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin transparent ">
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">Benua Asia</p>
                        <p class="fs-30 mb-2"><?php echo $data['kepadatan_penduduk']; ?> <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataA['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaAsia['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraAsia= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'Asia'");
                        while($negaraAsia = mysqli_fetch_assoc($dataNegaraAsia)){
                        echo '<a href="?negara='.$negaraAsia['Name'].'">';?><button type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraAsia['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Benua Eropa</p>
                        <p class="fs-30 mb-2"><?php echo $data1['kepadatan_penduduk']; ?> <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataE['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaEropa['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraEropa= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'Europe'");
                        while($negaraEropa = mysqli_fetch_assoc($dataNegaraEropa)){
                        echo '<a href="?negara='.$negaraEropa['Name'].'">';?><button type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraEropa['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Benua Amerika Utara</p>
                        <p class="fs-30 mb-2"><?php echo $data2['kepadatan_penduduk']; ?><br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataAE['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaAmrut['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraAmrut= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'North America'");
                        while($negaraAmrut = mysqli_fetch_assoc($dataNegaraAmrut)){
                        echo '<a href="?negara='.$negaraAsia['Name'].'">';?><button  type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraAmrut['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Benua Afrika</p>
                        <p class="fs-30 mb-2"><?php echo $data3['kepadatan_penduduk']; ?> <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataAF['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaAfrika['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraAfrik= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'Africa'");
                        while($negaraAfrik = mysqli_fetch_assoc($dataNegaraAfrik)){
                        echo '<a href="?negara='.$negaraAfrik['Name'].'">';?>
                          <button type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraAfrik['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent mt-4">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Benua Oceania</p>
                        <p class="fs-30 mb-2"><?php echo $data4['kepadatan_penduduk']; ?> <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataO['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaOceania['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraOCE= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'Oceania'");
                        while($negaraOCE = mysqli_fetch_assoc($dataNegaraOCE)){
                        echo '<a href="?negara='.$negaraOCE['Name'].'">';?><button type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraOCE['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent mt-4">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Benua Antarctica</p>
                        <p class="fs-30 mb-2">0,00000 <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataAN['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaAntarctica['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraAntarc= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'Antarctica'");
                        while($negaraAntarc = mysqli_fetch_assoc($dataNegaraAntarc)){
                       echo '<a href="?negara='.$negaraAntarc['Name'].'">';?> <button type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraAntarc['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent mt-4">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Benua Amerika Selatan</p>
                        <p class="fs-30 mb-2"><?php echo $data5['kepadatan_penduduk']; ?> <br> Jiwa/Km<sup>2</sup></p>
                        <p>Jumlah Negara : <?php echo $dataSAM['jumlah_negara']; ?></p>
                        <p>Jumlah Kota : <?php echo $kotaAmsel['jumlah_kota']; ?></p>
                        <?php 
                        $dataNegaraAmsel= mysqli_query($koneksi,"SELECT  Name FROM `country` WHERE Continent LIKE 'South America'");
                        while($negaraAmsel = mysqli_fetch_assoc($dataNegaraAmsel)){
                        echo '<a href="?negara='.$negaraAmsel['Name'].'">';?><button onClick="grafikAmsel()" type="button" style="width:100%;" class="btn btn-warning mt-2"><?php echo $negaraAmsel['Name'] ?></button></a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ambil data yg dikirim dr button -->
              <?php 
               $negara = "";
              if(isset($_GET['negara'])){
                $negara= $_GET['negara'];
                
                $sqlNegara=mysqli_query($koneksi,"SELECT city.Name FROM city INNER JOIN country ON country.Code=city.CountryCode WHERE country.Name LIKE '$negara' ORDER BY city.Population ASC LIMIT 5");

                $sqlPopulasi=mysqli_query($koneksi,"SELECT city.Population FROM city INNER JOIN country ON country.Code=city.CountryCode WHERE country.Name LIKE '$negara' ORDER BY city.Population ASC LIMIT 5");


                
              }
              ?>
              <div class="col-md-6 grid-margin justify-content-end">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">Grafik 5 kota dengan populasi terendah di negara <?php  echo $negara ?></h4>
                  <canvas id="areaChart"></canvas>
                </div>
              </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span
              >
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>


    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- <script src="js/chart.js"></script> -->

    <!-- End custom js for this page-->

    <!-- js chart area -->
    <script>


      const areaData = {
    labels: [<?php while($row = mysqli_fetch_array($sqlNegara)) {echo '"'.$row['Name'].'",';} ?>],
    datasets: [
      {
        label: "populasi",
        data: [<?php while($row = mysqli_fetch_array($sqlPopulasi)) {echo '"'.$row['Population'].'",';} ?>],
        backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)"],
        borderColor: ["rgba(255,99,132,1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"],
        borderWidth: 1,
        // fill: true, // 3: no fill
      },
    ],
  };

  // var areaOptions = {
  //   plugins: {
  //     filler: {
  //       propagate: true,
  //     },
  //   },
  // };

  const config = {
  type: 'line',
  data: areaData,
  options: {}
};

const myChart = new Chart(
    document.getElementById('areaChart'),
    config
  );

    </script>
  </body>
</html>
