<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$staff_name=$_POST['staff_name'];
		$descr=$_POST['descr'];

		if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
			$img_name = $_FILES['pp']['name'];
			$tmp_name = $_FILES['pp']['tmp_name'];
			$error = $_FILES['pp']['error'];
			
			if($error === 0){
			   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			   $img_ex_to_lc = strtolower($img_ex);
   
			   $allowed_exs = array('jpg', 'jpeg', 'png');
			   if(in_array($img_ex_to_lc, $allowed_exs)){
				  $new_img_name = uniqid($staff_name, true).'.'.$img_ex_to_lc;
				  $img_upload_path = 'upload/'.$new_img_name;
				  move_uploaded_file($tmp_name, $img_upload_path);

		$sql = "insert into staff (staff_name, descr, pp) values ('$staff_name','$descr', '$new_image_name')";}}}
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
			}
		}


if(count($_POST)>0){
	if($_POST['type']==2){
		$staff_id=$_POST['staff_id'];
		$staff_name=$_POST['staff_name'];
		$descr=$_POST['descr'];
		$sql = "UPDATE `staff` SET `staff_name`='$staff_name',`descr`='$descr' WHERE staff_id=$staff_id";
		if (mysqli_query($conn, $sql)) { 
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$staff_id=$_POST['staff_id'];
		$sql = "DELETE FROM `staff` WHERE staff_id=$staff_id ";
		if (mysqli_query($conn, $sql)) {
			echo $staff_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$staff_id=$_POST['staff_id'];
		$sql = "DELETE FROM staff WHERE staff_id in ($staff_id)";
		if (mysqli_query($conn, $sql)) {
			echo $staff_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>