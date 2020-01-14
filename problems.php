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
        <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
        <?php
        // $q = $con->query("select * from problems WHERE id = ".$_REQUEST['editId']);
        $q = $con->query("select * from problems WHERE id = ".$_REQUEST['editId']);
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
                
                <div class="content">
                    <div class="container-fluid">
                        <!-- <div class="row"> -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3" style="float: lef;">
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle" src="dist/img/oj.jpg" alt="User profile picture">
                                                </div>
                                                <h3 class="profile-username text-center"><?php echo $row['problem_name'];?></h3>
                                                <p class="text-muted text-center"> #divide and conquer, #fft, #math, #number theory
                                                </p>
                                                <ul class="list-group list-group-unbordered mb-3">
                                                    <li class="list-group-item">
                                                        <b>Time limit per test</b> <a class="float-right" id="t_limit"><?php echo $row['t_limit'];?></a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Memory limit per test</b> <a class="float-right" id="m_limit"><?php echo $row['m_limit'];?></a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Input</b> <a class="float-right">Standard input</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Output </b> <a class="float-right">Standard output</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                        <!-- About Me Box -->
                                        <div class="card card-primary ">
                                            <div class="card-header ">
                                                <h3 class="card-title ">Submit Solution</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <?php if(isset($_SESSION['name'])){?>
                                                <!-- <strong><i class="fa fa-language mr-1"></i>Select Language</strong>
                                                <p></p>
                                                <div class="col-md-  ">
                                                    <div class="form-group">
                                                        <select class="form-control" id="lang">
                                                            <option >C</option>
                                                            <option>C++</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                               
                                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Choose Source File</strong>
                                                <p class="text-muted">Select .c or .cpp solution</p>
                                                <div class="form-group">
                                                    <p></p>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <!--  <form name="frmUpdload" id="frmUpdload" method="POST" enctype="multipart/form-data">
                                                                <input type="file" name="txtFile" class="txtFile" />
                                                                <input type="submit" name="btnSubmit" value="Submit" />
                                                            </form> -->
                                                            <form name="frmUpdload" id="frmUpdload" method="POST" enctype="multipart/form-data">
                                                            <input type="file" class="" name="txtFile" placeholder="Select .c or .cpp or .c++ file" class="txtFile" id="txtFile" >

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <input type="submit" class="btn btn-primary btn-block btn-outline" id="bash" name="select" value="Submit" onclick="judgeFun();">
                                                <?php }else echo "<h4>Login to submit solution.</h4>";
                                                ?>
                                                <!-- <button class="btn bg-gradient-warning" onclick="sandbox();">sandbox</button> -->
                                                <!-- <a id="bash" href="#" class="btn btn-primary btn-block"><b>Submit</b></a> -->
                                                
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
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
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-9" style="float: righ;">
                                        <div class="card">
                                            
                                            <div class="tab-content">
                                                <div class="active tab-pane">
                                                    <!-- Post -->
                                                    <div class="card-header">
                                                        <div class="user-block">
                                                            <img class="img-circle img-bordered-sm" src="dist/img/oj.jpg" alt="user image">
                                                            <span class="username">
                                                                <h6 id="problem_name"><?php echo $row['problem_name'];?></h6>
                                                            </span>
                                                            <span class="description">Added - <?php echo $row['time'];?></span>
                                                        </div>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="card-body">
                                                        <p>
                                                            <?php echo nl2br($row['problem_description']);?>
                                                        </p>
                                                        
                                                        
                                                        <!-- /.post -->
                                                        
                                                        <!-- Post -->
                                                        <!-- /.post -->
                                                    </div>
                                                    <!-- /.tab-pane -->
                                                    <!-- /.tab-pane -->
                                                </div>
                                                <!-- /.tab-content -->
                                                </div><!-- /.card-body -->
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Input Description</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        <?php echo nl2br($row['input_description']);?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Output Description</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        <?php echo nl2br($row['output_description']);?>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- /.nav-tabs-custom -->
                                            <div class="card">
                                                <div class="card-header ">
                                                    <h3 class="card-title">Examples</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body p-0">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="card-title">Input</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td id="inputCopy"><?php echo nl2br($row['sample_input']);?></td>
                                                                <td style="width: 10%;">
                                                                <button  class="btn btn-sm btn-primary btn-outline" onclick="copyToClipboard('#inputCopy');">Copy</button></td>
                                                            </tr>
                                                        </tbody>
                                                        <thead>
                                                            <tr>
                                                                <th class="card-title">Output</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td id="outputCopy"><?php echo nl2br($row['sample_output']);?></td>
                                                                <td style="width: 10%;">
                                                                <button  class="btn btn-sm btn-primary" onclick="copyToClipboard('#outputCopy');">Copy</button></td>
                                                            </tr>
                                                        </tbody>
                                                        
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <?php if($row['note']!=""){?>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class=" card-primary card-title">Notes</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        <?php echo nl2br($row['note']);?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                </section>
                                <!-- </div> -->
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
                    
                    function clicked(){
                    $("#processing").show();
                    //$("#processing_done").show();
                    
                    var clickBtnValue = $("#bash").val();
                    var problem_name = $("#problem_name").val();
                    var ajaxurl = 'bash.php',
                    data =  {'action': clickBtnValue,
                    'problem_name': problem_name,
                    
                    };
                    //window.location.href="submission_status.php";
                    $.post(ajaxurl, data, function (response) {
                    // Response div goes here.
                    alert("action performed successfully");
                    
                    });
                    };
                    function judgeFun() {
                    

                    var problem_name = "<?php echo $row['problem_name'];?>";
                    var username = "<?php echo $_SESSION['name'];?>";
                    var problem_id = "<?php echo $row['id'];?>";
                    
                    var t_limit = $('#t_limit').val();
                    var m_limit = $('#m_limit').val();
                    //var l = document.getElementById("lang");
                    //var lang = l.options[l.selectedIndex].text;



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

                    $("#processing_done").hide();
                    $("#processing").show();

                    var formData = new FormData();

                    formData.append('fileupload',$( '#txtFile' )[0].files[0], file_name);
                    formData.append('username', username);
                    formData.append('problem_id', problem_id);
                    formData.append('problem_name', problem_name);
                    formData.append('m_limit', m_limit);
                    formData.append('t_limit', t_limit);
                    //formData.append('lang', lang);
                    
                    $.ajax({
                    method: "post",
                    url: 'bash.php',
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


                    function sandbox(){


                    var username = "<?php echo $_SESSION['name'];?>";
                    var problem_id = "<?php echo $row['id'];?>";

                    var file_name = $('#txtFile').val();
                    var index_dot=file_name.lastIndexOf(".")+1;
                    var ext=file_name.substr(index_dot);

                    if(file_name=='') {
                    alert('Please upload solution');
                    }
                    else if(!(ext=='c' || ext=='cpp')) {
                    alert('Please upload c or cpp solution only');
                    }   //Image validation end
                    else {
                    //formdata object to send file upload data
                    var formData = new FormData();
                    formData.append('fileupload',$( '#txtFile' )[0].files[0], file_name);
                    formData.append('username', username);
                    formData.append('problem_id', problem_id);
                    
                    $.ajax({
                    url: 'sandbox.php',
                    data: formData,
                          
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data){
                    alert(data);
                    }
                    });
                    }
                    $('#frmUpdload')[0].reset();
                    return false;

                    }
                    
                    
                    </script>
                </body>
            </html>