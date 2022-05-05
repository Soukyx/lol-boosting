
<?php 
session_start();
include("../connection.php");
include("../functions.php");

$user_data = check_login($con);


      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
        $user_id=$_POST['user_id'];
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

               $query = "UPDATE `users` SET `pp`='$new_img_name' WHERE user_id='".$user_data['user_id']."'";
                
			   mysqli_query($con, $query);
		   
			   header("Location: ../profile.php");
			   die;
            }
        }
        }   
      
    
         
        ?>
        