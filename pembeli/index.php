<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('config/connect.php');
  include('akses.php');
  include('data.php');
  ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Dashboard Wakwaw</title>

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg test"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, <?=$data['nama_depan']?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="ubahProfil.php" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">PETSHOP</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../imagesProfile/<?=$data['gambar']?>">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?=$data['nama_depan']?></div>
              <div class="user-role">
                PEMBELI
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active">
              <a href="index.php"><i class="ion ion-speedometer"></i><span>Home</span></a>
            </li>
            <li >
              <a href="toko.php"><i class="ion ion-briefcase"></i><span>Buka Toko</span></a>
            </li>
            <li class="menu-header">Pembeli</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Pembelian</span></a>
              <ul class="menu-dropdown">
                <li><a href="pembeli_statusPengiriman.php"><i class="ion ion-ios-circle-outline"></i>Status Pengiriman</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Transaksi</span></a>
              <ul class="menu-dropdown">
                <li><a href="pembeli_keranjangBelanja.php"><i class="ion ion-ios-circle-outline"></i>Keranjang Belanja</a></li>
                <li><a href="pembeli_daftarPembelian.php"><i class="ion ion-ios-circle-outline"></i>Daftar Pembelian</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
           </ul>
        </aside>
      </div>
      <!-- Page Content -->
      <div class="main-content">
        <section class="section">
          <h2 class="section-header">
            <div>Rekomendasi</div>
          </h2>
            <div class="row">

              <?php
                $sql = "SELECT * FROM barang";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <div class="col-lg-3 col-md-6 col-12">
                  <center><div class="card card-sm-3">
                    <div class="card-wrap">
                      <div class="card-header">
                        <div class="panel-body" ><img src="../images/<?=$row['gambar'];?>" class="img-responsive" width="202" height="173" alt="Image"></div>
                      </div>
                      <div class="card-body">
                        <p><h6>Nama      : <?=$row['nama'];?></h6></p>
                        <p><h6>Kategori  : <?=$row['kategori'];?></h6></p>
                        <p><h6>Harga     : Rp. <?=number_format($row['harga'],0,"",".");?></h6></p>
                      </div>
                      <a href="pembeli_detailProduk.php?id=<?=$row['id']?>" class="btn btn-primary btn-block">
                See More Detail</a>
                    </div>
                  </div></center>
                </div>
                  <?php
                }

              ?>
            
          </div>
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                  <div class="card-header">
                    <center><h4>Pencarian Detail</h4></center>
                  </div>
                  <div class="card-body">
                  <table class="table"><tr>
                  <td><label>Jenis Hewan</label></td>
                  <td><input class="form-control" type="" name=""></td></tr>
                  <tr><td><label>Ras Hewan</label></td>
                  <td><input class="form-control" type="" name=""></td></tr>
                  <tr><td><label>Umur Hewan</label></td>
                  <td><input class="form-control" type="" name=""></td></tr>
                  </table><br>
                <button type="submit" class="btn btn-primary btn-block">
                Submit</button>   
              </div>
            </div> 
          </div>
        </div>
          <h2 class="section-header">
            <div>Hasil Pencarian</div>
          </h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <center><div class="card card-sm-3">
                <div class="card-wrap">
                  <div class="card-header">
                    <div class="panel-body" ><img src="../images/whiskas.jpg" class="img-responsive" width="202" height="173" alt="Image"></div>
                  </div>
                  <div class="card-body">
                    <p><h6>Nama  : WhisWhis</h6></p>
                    <p><h6>Jenis : Persia</h6></p>
                    <p><h6>Harga : $25</h6></p>
                  </div>
                </div>
              </div></center>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <center><div class="card card-sm-3">
                <div class="card-wrap">
                  <div class="card-header">
                    <div class="panel-body" ><img src="../images/whiskas.jpg" class="img-responsive" width="202" height="173" alt="Image"></div>
                  </div>
                  <div class="card-body">
                    <p><h6>Nama  : WhisWhis</h6></p>
                    <p><h6>Jenis : Persia</h6></p>
                    <p><h6>Harga : $25</h6></p>
                  </div>
                </div>
              </div></center>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <center><div class="card card-sm-3">
                <div class="card-wrap">
                  <div class="card-header">
                    <div class="panel-body" ><img src="../images/whiskas.jpg" class="img-responsive" width="202" height="173" alt="Image"></div>
                  </div>
                  <div class="card-body">
                    <p><h6>Nama  : WhisWhis</h6></p>
                    <p><h6>Jenis : Persia</h6></p>
                    <p><h6>Harga : $25</h6></p>
                  </div>
                </div>
              </div></center>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <center><div class="card card-sm-3">
                <div class="card-wrap">
                  <div class="card-header">
                    <div class="panel-body" ><img src="../images/whiskas.jpg" class="img-responsive" width="202" height="173" alt="Image"></div>
                  </div>
                  <div class="card-body">
                    <p><h6>Nama  : WhisWhis</h6></p>
                    <p><h6>Jenis : Persia</h6></p>
                    <p><h6>Harga : $25</h6></p>
                  </div>
                </div>
              </div></center>
            </div>
          </div>
      </div> 
        </div>
      </section>
    </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
    <script src="../dist/js/demo.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.test').trigger('click');
    })
</script>
</body>
</html>