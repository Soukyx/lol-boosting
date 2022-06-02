<?php 
session_start();
include 'database.php';


      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
        $staff_id=$_POST['staff_id'];
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($user_name, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               $sql = "UPDATE `staff` SET `pp`='$new_img_name' WHERE staff_id=$staff_id";

                
			   mysqli_query($conn, $sql);
		   
			   header("Location: ../adminboosters.php");
			   die;
            }
        }
        }   
         
        ?>
        