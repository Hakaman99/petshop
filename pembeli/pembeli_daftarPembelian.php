<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('config/connect.php');
        include('akses.php');
        include('data.php');
         include('cart.php');
         error_reporting(0);
  ?>
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
            <div class="d-sm-none d-lg-inline-block">Hi, <?=$data['nama_depan']?> <?=$data['nama_belakang']?> <?=$data['nama_belakang']?></div></a>
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
              <div class="user-name"><?=$data['nama_depan']?> <?=$data['nama_belakang']?> <?=$data['nama_belakang']?></div>
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
              <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
           </ul>
        </aside>
      </div>
      <!-- Page Content -->
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Daftar Pembelian</div>
          </h1>
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                  <div class="card-body">
                  <form method="POST">
                  <table class="table">
                  <thead class="thead-dark">
                    <tr style="text-align: center;">
                      <td>No</td>
                      <td>Nama Barang</td>
                      <td>Jenis Hewan</td>
                      <td>Jenis Produk</td>
                      <td>Harga</td>
                      <td>Quantity</td>
                      <td>Total Pembayaran</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $cart = unserialize(serialize($_SESSION['cart']));
                      $s = 0;
                      $index = 0;
                      $no=1;
                      for($i=0; $i<count($cart); $i++){
                          $s += $cart[$i]->harga * $cart[$i]->quantity;
                    ?> 
                    <tr style="text-align: center;">
                      <td><?=$no++?></td>
                      <td><?=$cart[$i]->nama;?></td>
                      <td><?=$cart[$i]->kategori;?></td>
                      <td><?=$cart[$i]->fungsi;?></td>
                      <td><?=$cart[$i]->harga;?></td>
                      <td><input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"></td>
                      <td style="text-align: right;">Rp. <?php echo number_format($cart[$i]->harga * $cart[$i]->quantity,0,"","."); ?></td>
                      <td><a  href="pembeli_daftarPembelian.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" ><span class="ion ion-trash-a" style="color: red"></span></a> </td>
                    </tr>
                      <?php 
                         $index++;
                      } ?>
                      <tr style="text-align: right;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td>Rp. <?=number_format($s,0,"",".");?></td>
                        <td width="5%">
                          <input width="100%" type="image" src="../images/save.png" name="update" alt="Save Button">
                          <input type="hidden" name="update">
                        </td>
                      </tr>
                  </tbody>
          </table><br>
          </form>
          <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
          </div><br><br>
          <a href="checkout.php" class="btn btn-danger btn-block">Konfirmasi Pembayaran</a>
          <br> 
          
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
        <center><label class="form-control"><b>Tata Cara Melakukan Pembayaran</b></label></center>
          <h5 class="form-control"><p>Silahkan melakukan transfer ke rekening berikut : </p>
          <p>Bank        : Mandiri</p>
          <p>A/N         : Babang <?=$data['nama_depan']?> <?=$data['nama_belakang']?> <?=$data['nama_belakang']?></p>
          <p>No Rekening : 999999999999</p>
          <p>#Harap Melakukan Transfer sesuai dengan nilai/harga total pembayaran, jika pembayaran telah selesai silahkan untuk upload bukti pembayaran dan melakukan konfirmasi pembayaran</p></h5>
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