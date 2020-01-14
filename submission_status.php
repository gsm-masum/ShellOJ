<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <?php session_start(); require"header.php"; require "connect.php";?>
        <title>Shell OJ | Status</title>
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
                    
                    <!-- Notifications Dropdown Menu -->
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
                            <img src="dist/img/avatar04.png" class="img-circle elevation-4" alt="User Image">
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
                                <a href="submission_status.php" class="nav-link active">
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
                                                <h3 class="card-title">Submission Status</h3>
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
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 1%">
                                                                No.
                                                            </th>
                                                            <th style="width: 1%">
                                                                PID
                                                            </th>
                                                            <th style="width: 3%">
                                                                SID
                                                            </th>
                                                            <th style="width: 20%">
                                                                When
                                                            </th>
                                                            <th style="width: 10%">
                                                                Who
                                                            </th>
                                                            <th style="width: 22%">
                                                                Problem Name
                                                            </th>
                                                            <th style="width: 4%">
                                                                Language
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Verdict
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Time
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Memory
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        
                                                        $i = 1;
                                                        $quer = $con->query("select * from submission ORDER BY id DESC; ");
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
                                                               <!--  <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-lg"><b></b></button> -->
                                                               <form method="post" action="view_code.php">
                                                                    <input type="hidden" name="editId" value="<?php echo $row['submission_id']; ?>">
                                                                    <button type="submit" class="btn btn-xs"><b><?php echo $row['submission_id']; ?></b></button>
                                                                </form>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php echo $row['submission_time']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['user']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['problem_name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['language']; ?>
                                                            </td>
                                                            <td >
                                                                <?php if($row['verdict']=="Accepted\n"){?>
                                                                <a class="btn btn-outline" style="background-color: lime;">
                                                                    <b>Accepted</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row['verdict']=="Wrong Answer\n"){?>
                                                                <a class="btn btn-outline btn-sm" style="background-color: red;" >
                                                                    <b>Wrong Answer</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row['verdict']=="Time Limit\n"){?>
                                                                <a class="btn btn-warning btn-outline btn-sm" >
                                                                    <b>Time Limit</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row['verdict']=="Memory Limit\n"){?>
                                                                <a class="btn btn-outline btn-sm" style="color:white;background-color: black;" >
                                                                    <b>Memory Limit</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row['verdict']=="Presentation Error\n"){?>
                                                                <a class="btn btn-outline btn-warning btn-sm"  >
                                                                    <b>Presentation Error</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row['verdict']=="Compilation Error\n"){?>
                                                                <a class="btn  btn-outline btn-sm" style=" background-color: red;" >
                                                                    <b>Compilation Error</b>
                                                                </a>
                                                                <?php }
                                                                else{?>
                                                                <a class="btn btn-info btn-outline btn-sm" >
                                                                    <?php echo $row['verdict'];?>
                                                                </a>
                                                                <?php }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['running_time']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['memory']; ?>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; }
                                                        ?>
                                                        <tfoot>
                                                        <tr>
                                                            <th style="width: 1%">
                                                                No.
                                                            </th>
                                                            <th style="width: 1%">
                                                                PID
                                                            </th>
                                                            <th style="width: 3%">
                                                                SID
                                                            </th>
                                                            <th style="width: 20%">
                                                                When
                                                            </th>
                                                            <th style="width: 10%">
                                                                Who
                                                            </th>
                                                            <th style="width: 23%">
                                                                Problem Name
                                                            </th>
                                                            <th style="width: 4%">
                                                                Language
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Verdict
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Time
                                                            </th>
                                                            <th style="width: 15%" class="text-center">
                                                                Memory
                                                            </th>
                                                        </tr>
                                                        </tfoot>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                        <div class="modal fade" id="modal-lg">
                                                <div class="modal-dialog modal-lg">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 class="modal-title">Solution of <?php echo $view_id;?> </h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>

                                                    <div class="modal-body">
                                                      <p>One fine body&hellip;</p>
                                                    </div>

                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      
                                                    </div>
                                                  </div>
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                        </div>

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
                        // setTimeout(function(){
                        // location.reload();
                        // },10000);
                        function startRefresh() {
                        $.get('', function(data) {
                        $(document.body).html(data);
                        });
                        }
                        $(function() {
                        setTimeout(startRefresh,10000);
                        });
                        </script>
                    </body>
                </html>