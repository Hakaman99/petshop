<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('config/connect.php');
  include('akses.php');
  include('data.php');
  error_reporting(0); ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Stisla</title>

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
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
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
            <div class="d-sm-none d-lg-inline-block">Hi, <?=$data['nama_depan']?> <?=$data['nama_belakang']?></div></a>
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
              <img alt="image"  src="../imagesProfile/<?=$data['gambar']?>">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?=$data['nama_depan']?> <?=$data['nama_belakang']?></div>
              <div class="user-role">
                PENJUAL
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active">
              <a href="index.php"><i class="ion ion-speedometer"></i><span>Home</span></a>
            </li>
            <li class="menu-header">Penjual</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Penjualan</span></a>
              <ul class="menu-dropdown">
                <li><a href="penjual_orderBaru.php"><i class="ion ion-ios-circle-outline"></i>Order Baru</a></li>
                <li><a href="penjual_statusPengiriman.php"><i class="ion ion-ios-circle-outline"></i>Status Pengiriman</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-clipboard"></i><span>Produk</span></a>
              <ul class="menu-dropdown">
                <li><a href="penjual_daftarProduk.php"><i class="ion ion-ios-circle-outline"></i>Daftar Produk</a></li>
                <li><a href="penjual_tambahProduk.php"><i class="ion ion-ios-circle-outline"></i>Tambah Produk</a></li>
              </ul>
            </li>
            <li>
              <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
           </ul>
        </aside>
      </div>
      <!-- Page Content -->
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Status Pengiriman</div>
          </h1>
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                  <div class="card-body">
                    <form method="POST" action="process/updateStatus.php">
                  <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <td>Nama Order</td>
                      <td>Nama Pembeli</td>
                      <td>Alamat</td>
                      <td>Status Pengiriman</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $id =$data['id'];
                      $sql ="SELECT DISTINCT b.nama,b.status,c.nama_depan,c.nama_belakang,c.alamat  FROM orderdetail a JOIN orders b ON (a.order_id = b.id) JOIN user c ON (b.id_pembeli = c.id) JOIN user d ON (a.idpenjual = d.id)";
                      $q=mysqli_query($con,$sql);
                      $i=0;
                      while ( $row = mysqli_fetch_array($q)) {
                    ?>
                    <tr>
                      <td><?=$row['nama']?></td>
                      <td><?=$row['nama_depan']." ".$row['nama_belakang']?></td>
                      <td><?=$row['alamat']?></td>
                      <td>
                        <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="status<?=$i++?>">
                          <option <?php if($row['status'] == "MENUNGGU VERIFIKASI"){ echo 'selected';}?> value="MENUNGGU VERIFIKASI">MENUNGGU VERIFIKASI</option>
                          <option <?php if($row['status'] == "KONFIRMASI PENERIMAAN PEMBAYARAN"){ echo 'selected';}?> value="KONFIRMASI PENERIMAAN PEMBAYARAN">KONFIRMASI PENERIMAAN PEMBAYARAN</option>
                          <option <?php if($row['status'] == "PROSES PACKING"){ echo 'selected';}?> value="PROSES PACKING">PROSES PACKING</option>
                          <option <?php if($row['status'] == "PROSES PENGANTARAN OLEH KURIR"){ echo 'selected';}?> value="PROSES PENGANTARAN OLEH KURIR">PROSES PENGANTARAN OLEH KURIR</option>
                          <option <?php if($row['status'] == "PESANAN TELAH DIANTAR"){ echo 'selected';}?> value="PESANAN TELAH DIANTAR">PESANAN TELAH DIANTAR</option>
                        </select>
                      </div>
                      </td>
              </tr><?php } ?>
            </tbody>
          </table>
          <br>
          <button type="submit" class="btn btn-primary btn-block">
                Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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
</body>
</html>