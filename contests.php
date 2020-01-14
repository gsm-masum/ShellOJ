<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <?php require"header.php"; session_start(); ?>
        <title>Shell OJ | Contests</title>
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
                                <a href="submission_status.php" class="nav-link ">
                                    <i class="nav-icon fa fa-receipt"></i>
                                    <p>
                                        Submission Status
                                        <!--                                    <span class="right badge badge-danger">New</span>-->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contests.php" class="nav-link active">
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
                                    <div class="row">
                                        <div class="card col-md-9">
                                            <div class="card-header">
                                                <h3 class="card-title">Contests</h3>
                                                <!--
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                                    <i class="fas fa-times"></i></button>
                                                </div>
                                                -->
                                            </div>
                                            <div class="card-body p-0 text-center">
                                                <table class="table table-striped projects">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 1%">
                                                                ID
                                                            </th>
                                                            <th style="width: 40%">
                                                                Name
                                                            </th>
                                                            <th style="width: 10%">
                                                                Start
                                                            </th>
                                                            <th style="width: 10%">
                                                                Length
                                                            </th>
                                                            <th style="width: 20%">
                                                                T-Start
                                                            </th>
                                                            <th style="width: 20%" class="text-center">
                                                                T-Registration
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                Technocup 2020 - Elimination Round 3
                                                            </td>
                                                            <td>
                                                            Nov/24/2019 14:05 </td>
                                                            <td>
                                                                02:00
                                                            </td>
                                                            <td>Before start 3 days
                                                            </td>
                                                            <td>Before registration 19:44:36</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
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
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>
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
    </body>
</html>