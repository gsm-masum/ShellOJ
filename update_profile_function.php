<?php
require('connect.php');  
session_start();

if(!isset($_POST['bio'])){
    header('Location: 404.php');
}
if(!isset($_SESSION['handle'])){
        
        //session_destroy();
        header('Location: 404.php');
    }

    
      
    $image = $_POST['image'];
    
    $bio = $_POST['bio'];
    $institution = $_POST['institution'];
    $fav_lang = $_POST['fav_lang'];
    $handle = $_SESSION['handle'];

    $q = "SELECT * from users WHERE handle = '".$handle."'";
            $r = mysqli_fetch_array($con->query($q));
            if ($r['image']!="image") {
                $file = $r['image'];
                unlink('userImages/'.$file);
            }


    list($type, $image) = explode(';', $image);
    list(, $image)      = explode(',', $image);
    $image = base64_decode($image);
    $imageName = time().'.png';
    
    
    
    
        $sql = "UPDATE `users` SET `image` = '$imageName', `bio` = '$bio',  `institution` = '$institution', `fav_lang` = '$fav_lang' WHERE `users`.`handle` = '$handle' ";
    

        //$sql = "INSERT INTO `users` (`image`, `bio`, `institution`, `fav_lang`) VALUES ('$imageName', '$bio', '$institution', '$fav_lang')";


        $res = mysqli_query($con, $sql);
        
        if(!$res){
            echo "false";
        }else{
            
            file_put_contents('userImages/'.$imageName, $image);

            

            echo "true";
        }

    







?>