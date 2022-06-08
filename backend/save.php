<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$staff_name=$_POST['staff_name'];
		$descr=$_POST['descr'];

		$sql = "insert into staff (staff_name, descr) values ('$staff_name','$descr')";
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
