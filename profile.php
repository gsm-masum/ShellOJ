<!DOCTYPE html>
<html>
  <head>
    <?php session_start();if (!isset($_SESSION['handle']) && !isset($_POST['viewId'])) {
      header('Location: 404.php');
    } ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shell OJ | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'header.php'; require 'connect.php';?>
  </head>

<?php
   if(isset($_REQUEST['viewId'])){
        $viewId = $_REQUEST['viewId'];
        $sql = $con->query("SELECT * from users WHERE id = '$viewId'");
        $row = mysqli_fetch_array($sql);
        $handle = $row['handle'];
    }

   else if(isset($_SESSION['handle'])){
        $handle = $_SESSION['handle'];
        $sql = $con->query("SELECT * from users WHERE `users`.`handle` = '$handle'");
        $row = mysqli_fetch_array($sql);
    }


?>


  <body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          
          <?php if(isset($_SESSION['name'])){?>
          
          
          <li class="nav-item d-none d-sm-inline-block">
            <a href="submission_status_user.php" class="nav-link">Submission</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="blog.php" class="nav-link">Blog</a>
          </li>
        <?php }?>
          
        </ul>
        <!-- SEARCH FORM -->
        <!--
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item p-1">
                        <?php if(isset($_SESSION['name'])){?>
                        <a class="btn btn-xs btn-secondary" href="../login/logout.php"><i class="fa fa-power-off fa-flip-horizontal fa-flip-vertical"></i><b> Logout</a></b> <?}
                        else {?>
                        <a class="btn btn-xs btn-secondary" href="../login/"><i class="fa fa-power-off"> </i> <b> Login</a></b>  <?}?>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
          <img src="dist/img/oj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Shell Online Judge</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
         <?php if(isset($_SESSION['name'])){?>
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="profile.php" class="d-block"><?php echo $_SESSION['name'];?></a>
                        </div>
                    </div>
                    <?php }?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item ">
                <a href="index.php" class="nav-link ">
                  <i class="nav-icon fa fa-home"></i>
                  <p>
                    Home
                    <!--                                    <i class="right fas fa-angle-left"></i>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="problemsets.php" class="nav-link ">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Problem Set
                    <!--                                    <span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="submission_status.php" class="nav-link">
                  <i class="nav-icon fa fa-receipt"></i>
                  <p>
                    Submission Status
                    <!--                                    <span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contests.php" class="nav-link">
                  <i class="nav-icon fa fa-calendar-alt"></i>
                  <p>
                    Contests
                    <!--                                    <span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link">
                  <i class="nav-icon fa fa-address-card"></i>
                  <p>
                    About
                    <!--                                    <span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3">
      
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                      src="userImages/<?php echo $row['image'];?>"
                      alt="User profile picture">
                    </div>

                    
                    <h3 class="profile-username text-center"><?php echo $row['user_name'];?></h3> 

                    <p class="text-muted text-center"><?php echo $row['handle'];?></p>
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">

                        <?php
                        
                         $q = $con->query("SELECT user from submission WHERE user = '$handle'");
                        $submission = mysqli_num_rows($q);
                        ?>
                        <b>Contests</b> <a class="float-right"><?php echo $submission;?></a>
                      </li>
                      <li class="list-group-item">

                        <?php
                        $q = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Accepted
'");
                        $solutions = mysqli_num_rows($q);
                        ?>
                        <b>Solutions</b> <a class="float-right"><?php echo $solutions;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Submissions</b> <a class="float-right"><?php echo $submission;?></a>
                      </li>
                    </ul>
                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">About <?php echo $row['user_name'];?></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                    <p class="text-muted">
                      <?php echo $row['institution'];?>
                    </p>
                    <hr>
                    <strong><i class="fas fa-calendar-alt mr-1"></i>Joind Date</strong>
                    <p class="text-muted"><?php echo $row['date'];?></p>
                    <hr>
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Favorite Topic</strong>
                    <p class="text-muted">
                      <span class="tag tag-danger"><?php echo $row['fav_lang'];?></span>
                      
                    </p>
                    <hr>
                    <strong><i class="fa fa-code mr-1"></i> Xeroxer</strong>
                    <div class="mt-2">
                    <!-- small card -->
                    <div class="small-box bg-gradient-warning">
                      <div class="inner">
                        <h3>35 %</h3>
                        <p>Similar to others</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-code"></i>
                      </div>
                      
                    </div>
                  </div>
                    <p class="text-muted">Percentage of Similarities With Others' Code</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9"><div class="card p-3">
                <h3 class="info text-center mt-5">Contest Rating Graph</h3>
                <div class="row mt-1">
                  <div class="col-md-12">
                    <!-- Line chart -->
                    
                    <div class="card-header">
                      
                    </div>
                    <div class="card-body">
                      <div id="line-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.card-body-->
                    
                    <!-- /.card -->
                    <!-- Area chart -->
                    
                  </div>
                  <hr>
                  
                </div>
                <h3 class="info text-center mt-5">User Statistics</h3>
                
                <div class="row mt-1">
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-info">
                      <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase in 30 Days
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-success">
                      <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase in 30 Days
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box bg-gradient-danger">
                      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Events</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase in 30 Days
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  
                </div>
                <hr>
                <h3 class=" text-center mt-7">Verdict</h3>
                <div class="row">
                  <div class="card-body">
                    <canvas id="pieChart" style="height:310px; min-height:310px"></canvas>
                  </div>
                </div>
                

                
                <hr>
                <h3 class="info text-center mt-5">Solved in Categories</h3>
                <div class="row mt-1">
                  <div class="col-md-4 col-sm-6 col-12">
                    <!-- small card -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-12">
                    <!-- small card -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-12">
                    <!-- small card -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <hr>
                <h3 class=" text-center mt-7">Used Language</h3>
                <div class="row mt-7">
                  
                  <div class="card-body">
                    <canvas id="donutChart" style="height:310px; min-height:310px"></canvas>
                  </div>
                  
                </div>
                
                
                
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <?php
                        
                        

                        $qwa = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Wrong Answer\n'");
                        $wa = mysqli_num_rows($qwa);

                        $qtl = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Time Limit\n'");
                        $tl = mysqli_num_rows($qtl);

                        $qml = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Memory Limit\n'");
                        $ml = mysqli_num_rows($qml);

                        $qpe = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Presentation Error\n'");
                        $pe = mysqli_num_rows($qpe);

                        $qce = $con->query("SELECT user from submission WHERE user = '$handle' AND verdict = 'Compilation Error\n'");
                        $ce = mysqli_num_rows($qce);

                        $qc = $con->query("SELECT user from submission WHERE user = '$handle' AND language = 'C'");
                        $c = mysqli_num_rows($qc);

                        $qcpp = $con->query("SELECT user from submission WHERE user = '$handle' AND language = 'C++'");
                        $cpp = mysqli_num_rows($qcpp);

                        if($wa==0 && $tl==0 && $ml==0 && $pe==0 && $ce==0 && $c==0 && $cpp==0){
                          $wa=1; $tl=1; $ml=1; $pe=1; $ce=1; $c=1; $cpp=1;
                        }

                        ?>
        
        
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
    <script src="dist/js/demo.js"></script>
    <script src="plugins/flot/jquery.flot.js"></script>
    <script src="plugins/flot-old/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot-old/jquery.flot.resize.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
   




    <script type="text/javascript">
    $(function () {
    var sin = [],
    cos = []
    for (var i = 0; i < 14; i += 0.5) {
    sin.push([i, Math.sin(i)])
    cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
    data : sin,
    color: '#3c8dbc'
    }
    var line_data2 = {
    data : cos,
    color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
    grid  : {
    hoverable  : true,
    borderColor: '#f3f3f3',
    borderWidth: 1,
    tickColor  : '#f3f3f3'
    },
    series: {
    shadowSize: 0,
    lines     : {
    show: true
    },
    points    : {
    show: true
    }
    },
    lines : {
    fill : false,
    color: ['#3c8dbc', '#f56954']
    },
    yaxis : {
    show: true
    },
    xaxis : {
    show: true
    }
    })

    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
    position: 'absolute',
    display : 'none',
    opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {
    if (item) {
    var x = item.datapoint[0].toFixed(2),
    y = item.datapoint[1].toFixed(2)
    $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
    .css({
    top : item.pageY + 5,
    left: item.pageX + 5
    })
    .fadeIn(200)
    } else {
    $('#line-chart-tooltip').hide()
    }
    })
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')

    var donutData        = {
    labels: [
    'C',
    'C++',
    ],
    datasets: [
    {
    data: ["<?php echo $c;?>","<?php echo $cpp;?>"],
    backgroundColor : ['#f56954', '#00c0ef'],
    }
    ]
    }


    var pieData        = {
    labels: [
    'Accepted',
    'Wrong Answer',
    'Time Limit',
    'Memory Limit',
    'Presentation Error',
    'Compilation Error',
    ],
    datasets: [
    {
    data: ["<?php echo $solutions;?>","<?php echo $submission;?>","<?php echo $tl;?>","<?php echo $ml;?>","<?php echo $pe;?>","<?php echo $ce;?>"],
    backgroundColor : ['#41b15b', '#dc3848','#f39c12','#3c8dbc','#ffc313','#343a40'],
    }
    ]
    }



    var donutOptions     = {
    maintainAspectRatio : false,
    responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
    })
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = pieData;
    var pieOptions     = {
    maintainAspectRatio : false,
    responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieData,
    options: pieOptions
    })
    //-------------

      


    })
    </script>
  </body>
</html>