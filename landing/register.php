<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("config/connect.php"); ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Register Wakwaw Shop</title>

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
  <script>

  </script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              Register
            </div>

            <div class="card card-primary">
              <div class="card-header"><a href="index.php"><span class="ion ion-home" style="font-size: 120%;font-weight: bold;"> Home</span></a></div>
              <div class="card-body">
                <form method="POST" action="process/register.php">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                      <span id="message"></span>
                    </div>
                  </div>

                  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Provinsi</label>
                      <select class="form-control" name="provinsi" id="provinsi">
                        <option>Pilih Provinsi</option>
                        <?php
                          $sql = "SELECT * FROM provinsi";
                          $result = mysqli_query($con,$sql);
                          while ($row = mysqli_fetch_array($result)) {
                        ?>
                          <option value="<?=$row['id'];?>"><?=$row['nama'];?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Tanggal Lahir</label>
                      <input class="form-control" type="date" name="lahir">
                    </div>
                  </div>  
                  <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <select class="form-control" name="city" id="kota">
                        <option>Pilih Kota</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Postal Code</label>
                      <input type="number" class="form-control" name="postal_code">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/moment.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
  <script>
    $('#password, #password2').on('keyup', function () {
      if ($('#password').val() != $('#password2').val()) {
        $('#message').html('Password Tidak Cocok!').css('color', 'red');
      }else{
        $('#message').html('').css('color', 'red');
      }
      }
    );
        $(document).ready(function(){
      $("#provinsi").change(function(){
        var provinsi_id = $(this).val();

        $.ajax({
          type: 'POST',
          url: 'kota.php',
          data: 'prov_id='+provinsi_id,
          success: function(response){
            $('#kota').html(response);
          }
        });
      })
    });
  </script>
</body>
</html>