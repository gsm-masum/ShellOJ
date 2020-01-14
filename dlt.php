<?php


	$dst = "problems/1575916822/";
		
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
                    if ($index != "solution.cpp") {
						 deleteAll($path);                     }
                   
                } 
                
                // Remove the directory itself 
               
                	return @rmdir($str); 
            } 
        } 


        deleteAll($dst); 
       // header('Location: test_case_management.php');

?>