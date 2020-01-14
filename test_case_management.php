<!DOCTYPE html>
<?php session_start(); $_SESSION['problem_added_name'] = "Oddness of range";
if(!isset($_SESSION['problem_added_name'])){
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
        require "connect.php";
        ?>
        <title>Shell OJ | Problem Sets</title>
        <favion></favion>
        <link type="text/css" href="dist/js/countdown/demo/demo.css" rel="stylesheet">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="dist/js/countdown/jquery.countdown.css" rel="stylesheet">
        <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
        <?php
        // $q = $con->query("select * from problems WHERE id = ".$_REQUEST['editId']);
        $problem_added_name = $_SESSION['problem_added_name'];
        $q = $con->query("select * from problems WHERE problem_name = '$problem_added_name' ");
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
                        <a class="btn btn-xs btn-secondary" href="../login/logout.php"><i class="fa fa-power-off fa-flip-horizontal fa-flip-vertical"></i><b> Logout</b></a>
                        <?}
                        else {?>
                        <a class="btn btn-xs btn-secondary" href="../login/"><i class="fa fa-power-off"> </i> <b> Login</b></a>
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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                
                <div class="content">
                    <div class="container-fluid">
                        <!-- <div class="row"> -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle" src="dist/img/oj.jpg" alt="User profile picture">
                                                </div>
                                                <h3 class="profile-username text-center">Input, Output and cheking for <?php echo $row['problem_name'];?></h3>
                                                <!-- <p class="text-muted text-center"> #divide and conquer, #fft, #math, #number theory -->
                                                
                                                
                                                
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 text-center">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Upload Test Cases</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 text-center">
                                                    <h6>Upload Input files in format input00.txt,input01.txt and so on</h6>
                                                    <div id="response"></div>
                                                    <form enctype="multipart/form-data" method="post" action="">
                                                        <label>Choose a zip file to upload: <input type="file" name="zip_file" id="zip_file" /></label>
                                                        <br />
                                                        <input type="submit" class="btn btn-block bg-gradient-info" name="submit" id="upload" value="Upload Zip" onClick="uploadZip();" />
                                                    </form>
                                                    <!-- <form action="dlt.php">
                                                        <input type="submit" class="btn btn-block bg-gradient-info"value="dlt"/>
                                                    </form> -->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Input Checker</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 text-center">
                                                    <h6>Upload Solution Code in C or C++ to check inputs on SHELL OJ</h6>
                                                    
                                                    <form enctype="multipart/form-data" method="post" action="">
                                                        <label>Choose a zip file to upload: <input type="file" name="zip_file" id="txtFile" /></label>
                                                        <br />
                                                        <input type="submit" class="btn btn-primary btn-block btn-outline" id="bash" name="select" value="Submit" onclick="judgeFun();" />
                                                    </form>
                                                    <!-- <form action="dlt.php">
                                                        <input type="submit" class="btn btn-block bg-gradient-info"value="dlt"/>
                                                    </form> -->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                        <div class="card-primary" id="processing">
                                            <div class="mt-2 ">
                                                <!-- small card -->
                                                <div class="small-box p-3 bg-gradient-gray-dark">
                                                    <div class="inner">
                                                        <h3 class="text-center">In Queue</h3>
                                                        <p class="text-center">PLease Wait</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-cog fa-spin"></i>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-primary" id="processing_done">
                                            <div class="mt-2 ">
                                                <!-- small card -->
                                                <div class="small-box p-3 bg-gradient-warning">
                                                    <div class="inner">
                                                        <h3 class="text-center">Done</h3>
                                                        <p class="text-center"><a class="btn btn-sm" href="submission_status.php">View result</a></p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>

                                    <div class="card col-md-12">
                                            <div class="card-header">
                                                <h3 class="card-title">Submission Status</h3>
                                              
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
                                                        $user_name_1 = $_SESSION['handle'];
                                                        $quer = $con->query("select * from problemsetter_submission  WHERE user = '$user_name_1' ORDER BY id DESC");
                                                        //echo $query;
                                                        while ($row_table = mysqli_fetch_array($quer)) {
                                                        ?>
                                                        
                                                        <tr>
                                                            <td>
                                                                <?php echo $i; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['id']; ?>
                                                            </td>
                                                            <td>
                                                               <!--  <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-lg"><b></b></button> -->
                                                               <form method="post" action="view_problem_setter_code.php">
                                                                    <input type="hidden" name="editId" value="<?php echo $row_table['submission_id'];?>">
                                                                    <button type="submit" class="btn btn-xs"><b><?php echo $row_table['submission_id']; ?></b></button>
                                                                </form>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['submission_time']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['user']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['problem_name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['language']; ?>
                                                            </td>
                                                            <td >
                                                                <?php if($row_table['verdict']=="Accepted\n"){?>
                                                                <a class="btn btn-outline" style="background-color: lime;">
                                                                    <b>Accepted</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row_table['verdict']=="Wrong Answer\n"){?>
                                                                <a class="btn btn-outline btn-sm" style="background-color: red;" >
                                                                    <b>Wrong Answer</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row_table['verdict']=="Time Limit\n"){?>
                                                                <a class="btn btn-warning btn-outline btn-sm" >
                                                                    <b>Time Limit</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row_table['verdict']=="Memory Limit\n"){?>
                                                                <a class="btn btn-outline btn-sm" style="color:white;background-color: black;" >
                                                                    <b>Memory Limit</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row_table['verdict']=="Presentation Error\n"){?>
                                                                <a class="btn btn-outline btn-warning btn-sm"  >
                                                                    <b>Presentation Error</b>
                                                                </a>
                                                                <?php }
                                                                elseif($row_table['verdict']=="Compilation Error\n"){?>
                                                                <a class="btn  btn-outline btn-sm" style=" background-color: red;" >
                                                                    <b>Compilation Error</b>
                                                                </a>
                                                                <?php }
                                                                else{?>
                                                                <a class="btn btn-info btn-outline btn-sm" >
                                                                    <?php echo $row_table['verdict'];?>
                                                                </a>
                                                                <?php }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['running_time']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row_table['memory']; ?>
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


                                    <!-- /.card -->
                                    
                                   
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                
                                <!-- /.row -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.content-wrapper -->
                        <!-- Control Sidebar -->
                        
                        
                    </div>
                </div>
                <?php require"footer.php"?>
            </div>
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
            <script type="text/javascript">
            
            $("#processing").hide();
            $("#processing_done").hide();
            function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            }
            
            function uploadZip() {
            <?php $_SESSION['problem_id'] = $row['id'];?>
            
            
            formdata = new FormData(document.forms[0]);
            //formData.append('problem_id', problem_id);
            //formData.append('fileupload',$( '#txtFile' )[0].files[0], file_name);
            if (formdata) {
            //$('.main-content').html('<img src="LoaderIcon.gif" />');
            $("#processing").show();
            
            $.ajax({
            url: "test_case_management_function.php",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (res){
            document.getElementById("response").innerHTML = res;
            alert(res);
            $("#processing").hide();
            $("#processing_done").show();
            
            }
            });
            }
            
            }


            function judgeFun() {

            $("#processing_done").hide();
            $("#processing").show();

            var problem_name = "<?php echo $row['problem_name'];?>";
            var username = "<?php echo $_SESSION['name'];?>";
            var problem_id = "<?php echo $row['id'];?>";
            
            var t_limit = "<?php echo $row['t_limit'];?>";
            var m_limit = "<?php echo $row['m_limit'];?>";
            
            var file_name = $('#txtFile').val();
            var index_dot=file_name.lastIndexOf(".")+1;
            var ext=file_name.substr(index_dot);
            if(file_name=='') {
            alert('Please upload solution');
            }
            else if(!(ext=='c' || ext=='cpp')) {
            alert('Please upload .c or .cpp solution only');
            }   //Image validation end
            else {
            //formdata object to send file upload data
            var formData = new FormData();
            formData.append('fileupload',$( '#txtFile' )[0].files[0], file_name);
            formData.append('username', username);
            formData.append('problem_id', problem_id);
            formData.append('problem_name', problem_name);
            formData.append('m_limit', m_limit);
            formData.append('t_limit', t_limit);
            
            
            $.ajax({
            method: "post",
            url: 'bash_problemsetter.php',
            data: formData,
            // data: {
            // problem_name: problem_name,
            // m_limit: m_limit,
            // t_limit: t_limit,
            // lang: lang,
            // username: username,
            // problem_id: problem_id
            // }
            processData: false,
            contentType: false,
            })
            .done(function(response) {
            
            if(response){
            
            $("#processing").hide();
            $("#processing_done").show();
            //alert(response);
            
            }
            else alert(response);
            });
            }
            $('#frmUpdload')[0].reset();
            return false;
            }

            


            
            
            </script>
        </body>
    </html>