<?php
require 'connect.php';
session_start();

if(!isset($REQUEST['problem_name'])){
	header('Location: 404.php');
}


date_default_timezone_set("Asia/Dhaka");
$time = date(DATE_RFC822);
$problem_name = $_POST['problem_name'];
$problem_description = $_POST['problem_description'];
$input_description = $_POST['input_description'];
$output_description = $_POST['output_description'];
$memory_limit = $_POST['memory_limit'];
$time_limit = $_POST['time_limit'];
$sample_input = $_POST['sample_input'];
$sample_output = $_POST['sample_output'];
$note = $_POST['note'];
$added_by = $_SESSION['handle'];


$sql = "INSERT INTO `problems` (`problem_name`, `problem_description`, `input_description`, `output_description`, `m_limit`, `t_limit`, `sample_input`, `sample_output`, `note`, `time`, `added_by`) VALUES ('$problem_name', '$problem_description', '$input_description', '$output_description', '$memory_limit', '$time_limit', '$sample_input', '$sample_output', '$note', '$time', '$added_by') ";

$res = mysqli_query($con, $sql);

$_SESSION['problem_added_name'] = $problem_name;

//header('Location: test_case_management.php');

// if($res){
// 	@mkdir("problems/");
// }





?>