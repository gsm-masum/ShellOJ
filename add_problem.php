<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php  session_start();
if($_SESSION['user_type']!="problem_setter"){
    header('Location: 404.php');
}
?>
<html lang="en">
    <head>
        <?php require"header.php"?>
        <title>Shell OJ | Add Problem Sets</title>
        <favion></favion>
        <link type="text/css" href="dist/js/countdown/demo/demo.css" rel="stylesheet">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="dist/js/countdown/jquery.countdown.css" rel="stylesheet">
        <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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
                    <li>
                        <?php echo $_SESSION['user_type'];?>
                    </li>
                    
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
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
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
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Porfile</a>
                        </div>
                    </div>
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
                                
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title">Insert Problem Details</h4>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="problem_name"><h5>Problem Name</h5></label>
                                                    <input type="text" class="form-control" id="problem_name" placeholder="Enter Problem Name">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- textarea -->
                                                        <div class="form-group">
                                                            <label><h5>Problem Description</h5></label>
                                                            <textarea class="form-control" id="problem_description" rows="7" placeholder="Problem Description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><h5>Input Description</h5></label>
                                                            <textarea class="form-control"id="input_description" rows="3" placeholder="Input Description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><h5>Output Description</h5></label>
                                                            <textarea class="form-control" id="output_description" rows="3" placeholder="Input Description"></textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="row col-md-12">
                                                    <div class="col-sm-6">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label><h5>Memory Limit( in MegaBytes)</h5></label>
                                                            <input type="number" min="0"  pattern="[0-9]{10}" id="memory_limit" class="form-control" placeholder="Input only max memory limit in Megabytes">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-sm-6">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label><h5>Time Limit (in seconds)</h5></label>
                                                            <input type="number" min="0"  pattern="[0-9]{10}" id="time_limit" class="form-control" placeholder="Enter only max cpu execution time in seconds">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><h5>Sample Input</h5></label>
                                                        <textarea class="form-control" id="sample_input" rows="3" placeholder="Input"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><h5>Sample Output</h5></label>
                                                        <textarea class="form-control" id="sample_output" rows="3" placeholder="Output"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <!-- textarea -->
                                                    <div class="form-group">
                                                        <label><h5>Note box</h5></label>
                                                        <textarea class="form-control" rows="3" id="note" placeholder="Problem Description"></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" onclick="savedata();">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                                
                            </div>
                            </div><!-- /.col -->
                            
                            </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                        <!-- /.content-header -->
                        <!-- Main content -->
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    
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
                    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
                    <!-- Toastr -->
                    <script src="../../plugins/toastr/toastr.min.js"></script>
                    <script type="text/javascript" src="dist/js/countdown/jquery.countdown.min.js"></script>
                    <script type="text/javascript">
                    
                    function savedata(){
                    var problem_name = $('#problem_name').val();
                    var problem_description = $('#problem_description').val();
                    var input_description = $('#input_description').val();
                    var output_description = $('#output_description').val();
                    var memory_limit = $('#memory_limit').val();
                    var time_limit = $('#time_limit').val();
                    var sample_input = $('#sample_input').val();
                    var sample_output = $('#sample_output').val();
                    var note = $('#note').val();


                    $.ajax({
                        url: "problems_add_function.php",
                        type: "POST",
                        data: {
                            "problem_name": problem_name,
                            "problem_description": problem_description,
                            "input_description": input_description,
                            "output_description": output_description,
                            "memory_limit": memory_limit,
                            "time_limit": time_limit,
                            "sample_input": sample_input,
                            "sample_output": sample_output,
                            "note": note,

                        },
                        success: function(data) {
                            if (data == "false") {
                                //unsuccessFun();
                                //alert("action performed successfully");
                                window.location.href = 'test_case_management.php';
                            } else {
                                //successFun();
                                alert("error!!");
                                
                            }
                        }
                    });

                    
                    }



                    // function clicked(){
                    // var editId = "33";
                    // var clickBtnValue = $("#bash").val();
                    // var ajaxurl = 'bash.php',
                    // data =  {'action': clickBtnValue,
                    // 'editId': editId};
                    // //window.location.href="submission_status.php";
                    // $.post(ajaxurl, data, function (response) {
                    // // Response div goes here.
                    // //alert("action performed successfully");
                    // //$(function() {
                    // const Toast = Swal.mixin({
                    // toast: true,
                    // position: 'top-end',
                    // showConfirmButton: false,
                    // timer: 3000
                    // //});
                    // //$('.swalDefaultSuccess').click(function() {
                    // Toast.fire({
                    // type: 'success',
                    // title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    // });
                    // });
                    // //});
                    // //window.location.href="submission_status.php";
                    // });
                    // };
                    // $(function() {
                    // const Toast = Swal.mixin({
                    // toast: true,
                    // position: 'top-end',
                    // showConfirmButton: false,
                    // timer: 3000
                    // });
                    // $('.swalDefaultSuccess').click(function() {
                    // Toast.fire({
                    // type: 'success',
                    // title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    // })
                    // });
                    // });
                    
                    </script>
                </body>
            </html>