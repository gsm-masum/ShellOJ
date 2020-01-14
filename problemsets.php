<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <?php require"header.php"; session_start();
        require "connect.php";
        ?>
        <title>Shell OJ | Problem Sets</title>
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
                                <a href="problemsets.php" class="nav-link active">
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
                                    <div class="row">
                                        <div class="card col-md-12">
                                            <div class="card-header">
                                                <h3 class="card-title">Problems</h3>
                                              
                                            </div>
                                            
                                            
                                            <div class="text-center">
                                                <!--  <div class="card-header">
                                                    <h3 class="card-title">Problems</h3>
                                                </div> -->
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            
                                                            <tr>
                                                                <th style="width: 2%">
                                                                    PID
                                                                </th>
                                                                <th style="width: 10%">
                                                                    Contest ID
                                                                </th>
                                                                <th style="width: 60%">
                                                                    Problem Name
                                                                </th>
                                                                <th style="width: 8%">
                                                                    Submit
                                                                </th>
                                                                <th style="width: 20%" class="text-center">
                                                                    Solved
                                                                </th>
                                                            </tr>
                                                            
                                                        </thead>
                                                        <?php
                                                        
                                                        $i = 1;
                                                        $quer = $con->query("select * from problems");
                                                        //echo $query;
                                                        while ($row = mysqli_fetch_array($quer)) {
                                                        ?>
                                                        
                                                        <tr>
                                                            <td>
                                                                <?php echo $i; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['id']; ?>
                                                            </td>
                                                            <td>
                                                                <form method="post" action="problems.php">
                                                                    <input type="hidden" name="editId" value="<?php echo $row['id']; ?>">
                                                                    <button type="submit" class="btn  btn-outline btn-sm"><?php echo $row['problem_name']; ?></button>
                                                                </form>
                                                                
                                                            </td>
                                                            <td>
                                                                <form method="post" action="problems.php">
                                                                    <input type="hidden" name="editId" value="<?php echo $row['id']; ?>">
                                                                    <button type="submit" class="btn btn-success btn-outline btn-sm"><i class="fa fa-paper-plane "></i></button>
                                                                </form>
                                                                <!-- <a class="btn btn-success btn-outline btn-sm" href="#">
                                                                    <i class="fa fa-paper-plane ">
                                                                    </i>
                                                                </a> -->
                                                            </td>
                                                            <td><button class="btn btn-sm btn-primary ">
                                                                <i class="fa fa-user-astronaut"></i> X 2000</button>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; }
                                                        ?>
                                                        <tfoot>
                                                        <tr>
                                                            <th style="width: 2%">
                                                                PID
                                                            </th>
                                                            <th style="width: 10%">
                                                                Contest ID
                                                            </th>
                                                            <th style="width: 60%">
                                                                Problem Name
                                                            </th>
                                                            <th style="width: 8%">
                                                                Submit
                                                            </th>
                                                            <th style="width: 20%" class="text-center">
                                                                Solved
                                                            </th>
                                                        </tr>
                                                        </tfoot>
                                                        
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <!-- /.content-wrapper -->
                            <!-- Control Sidebar -->
                            
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
                        <script src="plugins/datatables/jquery.dataTables.js"></script>
                        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
                        <!--    <script src="dist/js/demo.js"></script>-->
                        <!--    <script src="dist/js/pages/dashboard3.js"></script>-->
                        <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
                        <script type="text/javascript" src="dist/js/countdown/jquery.countdown.min.js"></script>
                        <script>
                        $(function () {
                        $("#example1").DataTable();
                        $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        });
                        });
                        </script>
                    </body>
                </html>