
<?php 


if(isset($_POST['user_name']) && 
   isset($_POST['email']) &&  
   isset($_POST['password']) &&
   isset($_POST['cpassword'])){

	session_start();

include("connection.php");
include("functions.php");


	$user_name = $_POST['user_name'];
    $email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    
	$query=mysqli_query($con, "SELECT * FROM users WHERE user_name='$user_name'");
	  if(mysqli_num_rows($query)>0){
		  echo '<p>Username exists!</p></br>';
	  }
	  $query=mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	  if(mysqli_num_rows($query)>0){
		echo '<p>Email exists!</p></br>';
		}
		elseif($password != $cpassword){
			echo ("Not matching password");
		  }
		  else{


      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($user_name, true).'.'.$img_ex_to_lc;
               $img_upload_path = 'upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database  
			   $user_id = random_num(188);
			   $query = "insert into users (user_id,user_name, email, password, pp) values ('$user_id','$user_name','$email','$password', '$new_img_name')";
		   
			   mysqli_query($con, $query);
		   
			   header("Location: login1.php");
			   die;
            }
         }

        
      }
    }


}