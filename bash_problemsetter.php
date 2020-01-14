<?php
require "connect.php";
    if (isset($_POST['problem_name'])) {
  
        session_start();
        



    $problem_id= $_POST['problem_id'];

    $time=time();
    $user_name = $time;

    //echo $user_name;
    $judge_src = "judge"; 
    $problem_source = "problems/$problem_id"; 
    $user_source = "userSubmission/optimus";

    $dst = "userSubmission/$user_name"; 
    
function custom_copy($src, $dst) {  
   
    // open the source directory 
    $dir = opendir($src);  
   
    // Make the destination directory if not exist 
    @mkdir($dst);  
   
    // Loop through the files in source directory 
    foreach (scandir($src) as $file) {  
   
        if (( $file != '.' ) && ( $file != '..' )) {  
            if ( is_dir($src . '/' . $file) )  
            {  
   
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy($src . '/' . $file, $dst . '/' . $file);  
   
            }  
            else {  
                copy($src . '/' . $file, $dst . '/' . $file);  
            }  
        }  
    }  
   
    closedir($dir); 
}   




    custom_copy($judge_src, $dst); 
    custom_copy($problem_source, $dst);
    //custom_copy($user_source, $dst);
    
    
    $files=$_FILES['fileupload'];

    $File_Name = strtolower($_FILES['fileupload']['name']);
    $File_Ext  = substr($File_Name, strrpos($File_Name, '.'));
    $final_name = "solution".$File_Ext;

    $destination= "userSubmission/$user_name/";

    $res=move_uploaded_file($_FILES['fileupload']['tmp_name'], $destination.$final_name);
    if($res) {
        $msg='Uploaded successfully';
    }
    else {
        $msg='Error';
    }
    echo $msg;


        function deleteAll($str) { 
            
            // Check for files 
            if (is_file($str)) { 
                
                // If it is file then remove by 
                // using unlink function 
                return unlink($str); 
            } 
            
            // If it is a directory. 
            elseif (is_dir($str)) { 
                
                // Get the list of the files in this 
                // directory 
                $scan = glob(rtrim($str, '/').'/*'); 
                
                // Loop through the list of files 
                foreach($scan as $index=>$path) { 
                    echo "deleted\n";
                    
                    // Call recursive function 
                    deleteAll($path); 
                } 
                
                // Remove the directory itself 
                return @rmdir($str); 
            } 
        } 

        
            //$destination= "userSubmission/$user_name";
            

          

        

        if ($File_Ext == ".cpp") {
            $output = shell_exec("cd $dst && bash judge2.sh");
            $language="C++";
        }
        elseif ($File_Ext == ".c") {
            $output = shell_exec("cd $dst && bash judgeC.sh");
            $language= "C";
        }

        
        
        date_default_timezone_set("Asia/Dhaka");
        $submission_time = date(DATE_RFC822); //date('Y-m-d H:i:s');
        $user = $_SESSION['handle'];
        $problem_name = $_POST['problem_name'];
        $solution_name = $final_name;
        

        $verdict= "";
        $running_time= "";
        $memory= "";
        $maxMem="";
        //$editId = $_POST['editId'];


        $sql = "INSERT INTO `problemsetter_submission` (`submission_time`, `user`, `problem_name`, `language`, `verdict`, `running_time`, `memory`, `submission_id`, `solution_name`) VALUES ('$submission_time', '$user', '$problem_name', '$language', '$verdict', '$running_time', '$memory', '$user_name', '$solution_name')";
        mysqli_query($con, $sql);



            // $verdict="Time Limit\n";
            // $running_time="Exceeded Time Limit";
            // $memory="0 Kb";

        $timelimit = file($dst."/timelimit.txt");

        if($timelimit[0]==0){
            $data = file($dst."/verdict.txt");

            $verdict= $data[0];
            $running_time= $data[1]." ms";
            $mem = file($dst."/details.txt");

            $allmem = array();
            $i=1;
            $key="Maximum";
            $maxMe = 0;

                foreach ($mem as $line) {
                    $var = substr($line,0,7);

                    if(strlen($line) >= 34){
                        //$maxMem +=1;

                        if(preg_match("/{$key}/", $line)) {
                            $allmem[$i] = substr($line, 36);
                            if (!$allmem[0]&&$allmem[$i]>$allmem[$i-1]) {
                                $maxMem=$allmem[$i];
                            } else $maxMem=$allmem[$i-1];

                        
                        //$maxMem ="lol";
                        }
                     }

                }

           

            $maxMe = (int)$maxMem;
            $memory = $maxMem."Kb";

          
         }else{
            $verdict="Time Limit\n";
            $running_time="Exceeded Time Limit";
            $memory="0 Kb";

        }

        if ($maxMe>5000) {
            $verdict="Memory Limit\n";
            $running_time="0 ms";
            $memory="Memory Limit Exceeded";
        }
      

        $sql = "UPDATE `problemsetter_submission` SET `verdict` = '$verdict', `running_time` = '$running_time', `memory` = '$memory' WHERE submission_time = '".$submission_time."'";

        mysqli_query($con, $sql);

        
        echo "true";

        //remove habijabi files server side

            deleteAll("userSubmission/$user_name/res/");
            deleteAll("userSubmission/$user_name/test/");
            unlink($destination.'a.out');
            unlink($destination.'judge2.sh');
            unlink($destination.'judge.sh');
            unlink($destination.'judgeC.sh');
            unlink($destination.'time.txt');
            unlink($destination.'timelimit.txt');
            unlink($destination.'verdict.txt');
    }


    else header('Location: 404.php');

    
?>