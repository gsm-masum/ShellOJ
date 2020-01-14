<!DOCTYPE html>
<html>

<?php
session_start();
 if(!isset($_SESSION['handle'])){
        
        header('Location: 404.php');
    }?>


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shell OJ | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/croppie.css">
    <?php require 'header.php';?>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expan navbar-black navbar-dark text-center">
        <!-- Left navbar links -->
        <h3 class="col-md-12" style="color: white;">Please Complete Your Profile</h3>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar  sidebar-dark-primary elevation-">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="dist/img/oj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Shell Online Judge</span>
        </a>
        <!-- Sidebar -->
        
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3">
        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"><div class="col-md-2"></div>
            <div class="col-md-8">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  
                  <div class="col-md-12 text-center">
                    <div style="border:1px solid black;padding:10px;">
                      <div class="row text-center">
                        <div class="col-md-12 text-center">
                          <div id="upload-demo"></div>
                        </div>
                      </div>
                      <div class="row text-center">
                        <div class="col-md-12 text-center">
                          <input type="file" id="upload">
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="col-md-12 mt-7 text-center" >
                    <label class="col-md-12"><h5>Enter Bio</h5></label>
                    <input type="text" class="form-control text-center col-md-12 mt-2" id="bio" placeholder="Enter Bio in less than 100 character">
                  </div>
                  
                  <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- About Me Box -->
              <div class="card card-primary">
                
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Institution</strong>
                  <p class="text-muted">
                    <!-- <label class="col-md-12"><h5>Enter Bio</h5></label> -->
                    <input type="text" class="form-control mt-2 col-md-12" id="institution" placeholder="Enter Institution">
                  </p>
                  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Favourite Language</strong>
                  <input type="text" class="form-control mt-2 col-md-12" id="fav_lang" placeholder="Seperate Favourite Languages with comma">
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <button type="submit" class="btn btn-primary btn-block " style="margin-bottom: 20px;" onclick="saveData();">Submit</button>
              
            </div>
            <!-- /.col -->
            <div class="col-md-2"></div>
            
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      
      
      
    </div>
    <?php require'footer.php'; ?>
  </div>
  <!-- </div> -->
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/croppie.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="plugins/flot/jquery.flot.js"></script>
  <script src="plugins/flot-old/jquery.flot.pie.min.js"></script>
  <script src="plugins/flot-old/jquery.flot.resize.min.js"></script>
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script type="text/javascript">


    $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 250,
                height: 250,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
    $('#upload').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });

            }
            reader.readAsDataURL(this.files[0]);
        });



    function saveData() {
            var bio = $('#bio').val();
            var institution = $('#institution').val();
            var fav_lang = $('#fav_lang').val();



            $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(resp) {

                    $.ajax({
                        url: "update_profile_function.php",
                        type: "POST",
                        data: {
                            "image": resp,
                            "bio": bio,
                            "institution": institution,
                            "fav_lang": fav_lang,
                            
                        },
                        success: function(data) {
                            if (data == "true") {
                                window.location.href='index.php';
                            } else {
                                alert (data);
                              
                            }
                        }
                    });
                });


          }





  </script>
</body>
</html>