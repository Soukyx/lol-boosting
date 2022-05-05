<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `users` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}
		mysqli_close($conn);
	}
}
?>