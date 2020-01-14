<?php

require "connect.php";
		date_default_timezone_set("Asia/Dhaka");
		$submission_time = date(DATE_RFC822);
        $user = "dummy";
        $problem_name = "dummy";
        $language= "dummy";
        $verdict= "dummy";
        $running_time= "dummy";
        $memory= "dummy";


        $sql = "INSERT INTO `submission` (`submission_time`, `user`, `problem_name`, `language`, `verdict`, `running_time`, `memory`) VALUES ('$submission_time', '$user', '$problem_name', '$language', '$verdict', '$running_time', '$memory')";
        mysqli_query($con, $sql);

        $data = file('source/log.txt');
        $verdict= $data[0];
        $running_time= $data[1];
        $memory= $data[2];
        //echo "$a\n";
        $editId = 36;
        

        echo "$verdict ";

         $sql = "UPDATE `submission` SET `verdict` = '$verdict', `running_time` = '$running_time', `memory` = '$memory' WHERE `submission`.`id` = $editId";
         
         $res = mysqli_query($con, $sql);


         //$sql="DELETE FROM `submission` WHERE `submission`.`id` = 48"; mysqli_query($con, $sql);

        //  echo "$res";
        // if(!$res){
        // 	echo "\nerror";
        // } else echo "done";

   //      foreach($data as $d) {
   // 		echo $d."\n";
			// }

?>