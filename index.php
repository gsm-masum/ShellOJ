<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <?php require"header.php";
        require"connect.php";
        session_start();?>
        <title>Welcome | Shell OJ</title>
        <favion></favion>
        <link type="text/css" href="dist/js/countdown/demo/demo.css" rel="stylesheet">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="dist/js/countdown/jquery.countdown.css" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>

                    <?php require'nav.php';?>
                    
                </ul>
                
                <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item p-1">
                        <?php if(isset($_SESSION['name'])){?>
                        <a class="btn btn-xs btn-secondary" href="../login/logout.php"><i class="fa fa-power-off fa-flip-horizontal fa-flip-vertical"></i><b> Logout</a></b> <?}
                        else {?>
                        <a class="btn btn-xs btn-secondary" href="../login/"><i class="fa fa-power-off"> </i> <b> Login</a></b>  <?}?>
                    </li>
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
                            <li class="nav-item has-treeview menu-open">
                                <a href="index.php" class="nav-link active">
                                    <i class="nav-icon fa fa-home"></i>
                                    <p>
                                        Home
                                        <!--                                    <i class="right fas fa-angle-left"></i>-->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="problemsets.php" class="nav-link">
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
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <!--                            <h1 class="m-0 text-dark text-center">Welcome to Shell Online Judge</h1>-->
                                </div><!-- /.col -->
                                <!-- /.col -->
                                </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- /.content-header -->
                            <!-- Main content -->
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-3 ">
                                            <!-- Widget: user widget style 1 -->
                                            <div class="card card-widget widget-user">
                                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                                <div class="widget-user-header bg-danger">
                                                    <h3 class="widget-user-username">Attention! Next Contest</h3>
                                                    <h5 class="widget-user-desc">Intermediate Round #600 (Div.2)</h5>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="row text-center">
                                                        <div class="description-block text-center">
                                                            <ul id="example">
                                                                <li><span class="days">00</span>
                                                                <p class="days_text">Days</p>
                                                            </li>
                                                            <li class="seperator">:</li>
                                                            <li><span class="hours">00</span>
                                                            <p class="hours_text">Hours</p>
                                                        </li>
                                                        <li class="seperator">:</li>
                                                        <li><span class="minutes">00</span>
                                                        <p class="minutes_text">Minutes</p>
                                                    </li>
                                                    <li class="seperator">:</li>
                                                    <li><span class="seconds">00</span>
                                                    <p class="seconds_text">Seconds</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.description-block -->
                                        <!-- /.col -->
                                        <!-- /.col -->
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <div class="card card-header border-0 bg-danger">
                                <div class="form-group">
                                    <label>
                                        <h6>Find user</h6>
                                    </label>
                                    <input type="submit" class="btn btn-sm mb-2 btn-outline-dark float-right" value="Find">
                                    <input type="text" class="form-control" placeholder="User ID">
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Hardest Problems</h3>
                                        <!--                                        <a href="javascript:void(0);">View More</a>-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">18,230.00</span>
                                            <span>Average Submission Over Time</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->
                                    <div class="position-relative mb-4">
                                        <canvas id="sales-chart" height="200"></canvas>
                                    </div>
                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> Submitted
                                        </span>
                                        <span>
                                            <i class="fas fa-square text-gray"></i> Accepted
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-3  text-center">
                            <div class="card bg-info">
                                <div class="card-header">
                                    <h5 class="text-center ">Top Rated Users</h5>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>User</th>
                                                <th>Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            
                                            $quer = $con->query("select * from users ORDER BY id DESC ;");
                                            //echo $query;
                                            for ($i=1; $i < 4 ; $i++) {
                                            # code...
                                            $row = mysqli_fetch_array($quer)
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td>
                                                    <form method="post" action="profile.php">
                                                        <input type="hidden" name="viewId" value="<?php echo $row['id']; ?>">
                                                        <input type="submit" class="btn btn-sm btn-gradiant-info" style="color: black;" value="<?php echo $row['handle'];?>">
                                                    </form>
                                                    
                                                </td>
                                                <td>3539</td>
                                            </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix text-center">
                                    <ul class="pagination pagination-sm m-0 float-right ">
                                        <li class="page-item "><a class="page-link" href="#">View all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card -->
                            <!-- /.card -->
                        </div>
                        <div class="col-md-12  ">
                            <!-- Box Comment -->
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                        <i class="far fa-circle"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- post text -->
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at</p>
                                    <p>the coast of the Semantics, a large language ocean.
                                        A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia. It is a paradisematic
                                        country, in which roasted parts of sentences fly into
                                    your mouth.</p>
                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <!-- /.attachment-block -->
                                    <!-- Social sharing buttons -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-down"></i> Dislike</button>
                                    <span class="float-right text-muted">45 likes - 2 dislikes</span>
                                </div>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-12  ">
                            <!-- Box Comment -->
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                        <i class="far fa-circle"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- post text -->
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at</p>
                                    <p>the coast of the Semantics, a large language ocean.
                                        A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia. It is a paradisematic
                                        country, in which roasted parts of sentences fly into
                                    your mouth.</p>
                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <!-- /.attachment-block -->
                                    <!-- Social sharing buttons -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-down"></i> Dislike</button>
                                    <span class="float-right text-muted">45 likes - 2 dislikes</span>
                                </div>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-12  ">
                            <!-- Box Comment -->
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                        <i class="far fa-circle"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- post text -->
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at</p>
                                    <p>the coast of the Semantics, a large language ocean.
                                        A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia. It is a paradisematic
                                        country, in which roasted parts of sentences fly into
                                    your mouth.</p>
                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <!-- /.attachment-block -->
                                    <!-- Social sharing buttons -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-down"></i> Dislike</button>
                                    <span class="float-right text-muted">45 likes - 2 dislikes</span>
                                </div>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-12  ">
                            <!-- Box Comment -->
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                        <i class="far fa-circle"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- post text -->
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at</p>
                                    <p>the coast of the Semantics, a large language ocean.
                                        A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia. It is a paradisematic
                                        country, in which roasted parts of sentences fly into
                                    your mouth.</p>
                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <!-- /.attachment-block -->
                                    <!-- Social sharing buttons -->
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-down"></i> Dislike</button>
                                    <span class="float-right text-muted">45 likes - 2 dislikes</span>
                                </div>
                                <!-- /.card-body -->
                                <!-- /.card-footer -->
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Main Footer -->
            <?php require"footer.php" ?>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!--    <script src="dist/js/demo.js"></script>-->
        <!--    <script src="dist/js/pages/dashboard3.js"></script>-->
        <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script type="text/javascript" src="dist/js/countdown/jquery.countdown.min.js"></script>
        <script type="application/javascript">
        $(function() {
        'use strict'
        var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
        }
        var mode = 'index'
        var intersect = true
        var $salesChart = $('#sales-chart')
        var salesChart = new Chart($salesChart, {
        type: 'bar',
        data: {
        labels: ['Problem1', 'Problem2', 'Problem3', 'Problem4', 'Problem5', 'Problem6', 'Problem7'],
        datasets: [{
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
        },
        {
        backgroundColor: '#ced4da',
        borderColor: '#ced4da',
        data: [200, 700, 900, 1000, 650, 1200, 1600]
        }
        ]
        },
        options: {
        maintainAspectRatio: false,
        tooltips: {
        mode: mode,
        intersect: intersect
        },
        hover: {
        mode: mode,
        intersect: intersect
        },
        legend: {
        display: false
        },
        scales: {
        yAxes: [{
        // display: false,
        gridLines: {
        display: true,
        lineWidth: '4px',
        color: 'rgba(0, 0, 0, .2)',
        zeroLineColor: 'transparent'
        },
        ticks: $.extend({
        beginAtZero: true,
        // Include a dollar sign in the ticks
        callback: function(value, index, values) {
        if (value >= 100) {
        value /= 100
        value += ' times'
        }
        return '' + value
        }
        }, ticksStyle)
        }],
        xAxes: [{
        display: true,
        gridLines: {
        display: false
        },
        ticks: ticksStyle
        }]
        }
        }
        })
        })
        </script>
        <script type="text/javascript">
        $('#example').countdown({
        date: '12/24/2020 23:59:59',
        offset: -8,
        day: 'Day',
        days: 'Days'
        }, function() {
        alert('Done!');
        });
        </script>
    </body>
</html>