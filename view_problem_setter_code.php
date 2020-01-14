<!DOCTYPE html>
<?php
if(!isset($_REQUEST['editId'])){
header('Location: 404.php');
}
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <?php require "header.php";
        require "connect.php"; session_start();
        ?>
        <title>Shell OJ | Problem Sets</title>
        <favion></favion>
        <link type="text/css" href="dist/js/countdown/demo/demo.css" rel="stylesheet">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="dist/js/countdown/jquery.countdown.css" rel="stylesheet">
        <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
        <?php
        // $q = $con->query("select * from problems WHERE id = ".$_REQUEST['editId']);
        $q = $con->query("select * from problemsetter_submission WHERE submission_id = ".$_REQUEST['editId']);
        $row = mysqli_fetch_array($q);
        ?>
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
                        <a class="btn btn-xs btn-secondary" href="../login/logout.php"><i class="fa fa-power-off fa-flip-horizontal fa-flip-vertical"></i><b> Logout</a></b>
                        <?}
                        else {?>
                        <a class="btn btn-xs btn-secondary" href="../login/"><i class="fa fa-power-off"> </i> <b> Login</a></b>
                        <?}?>
                    </li>
                </ul>
            </nav>
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
            <div class="content-wrapper">
                
                <div class="content">
                    <div class="container-fluid">
                        <!-- <div class="row"> -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row col-md-12">
                                    <div class="card-header col-md-12">
                                        <h6 class="text-center">|| Solver:&nbsp; <b><?php echo $row['user'];?></b>|| &nbsp; Problem: &nbsp;<b> <?php echo $row['problem_name'];?></b>&nbsp;|| &nbsp; Submission ID: &nbsp;<b> <?php echo $row['submission_id'];?></b>&nbsp;|| &nbsp; Time: &nbsp;<b> <?php echo $row['submission_time'];?></b> ||</h6>
                                        <hr>
                                    
                                    <div class="card-body" style="font-size: 17px;">
                                      

                                        <?php
                                        

                                        $file_dir = "userSubmission/".$row['submission_id']."/".$row['solution_name'];
                                        highlight_file_with_line_numbers($file_dir);

                                        function highlight_file_with_line_numbers($file) {
                                        //Strip code and first span
                                        $code = substr(highlight_file($file, true), 36, -15);
                                        //Split lines
                                        $lines = explode('<br />', $code);
                                        //Count
                                        $lineCount = count($lines);
                                        //Calc pad length
                                        $padLength = strlen($lineCount);
                                        
                                        //Re-Print the code and span again
                                        echo "<code><span style=\"color: #000000\">";
                                            
                                            //Loop lines
                                            foreach($lines as $i => $line) {
                                            //Create line number
                                            $lineNumber = str_pad($i + 1,  $padLength, '0', STR_PAD_LEFT);
                                            //Print line
                                            echo sprintf('<br><span style="color: #999999">%s | </span>%s', $lineNumber, $line);
                                            }
                                            
                                            //Close span
                                        echo "</span></code>";
                                        }
                                        ?>
                                    </div>
                                    </div>
                                    
                                </section>
                                <!-- </div> -->
                                <!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.content-wrapper -->
                        <!-- Control Sidebar -->
                        
                        <!-- /.control-sidebar -->
                        <!-- Main Footer -->
                        <div style="float: bottom;"><?php require"footer.php" ?></div>
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
                    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
                    <!-- Toastr -->
                    <script src="plugins/toastr/toastr.min.js"></script>
                    <script type="text/javascript" src="dist/js/countdown/jquery.countdown.min.js"></script>
                   
                </body>
            </html>