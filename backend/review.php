<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$user_review=$_POST['user_review'];
		$sql = "insert into reviews (name, user_review) values ('$name','$user_review')";
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
		$review_id=$_POST['review_id'];
		$sql = "DELETE FROM `reviews` WHERE review_id=$review_id ";
		if (mysqli_query($conn, $sql)) {
			echo $review_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$review_id=$_POST['review_id'];
		$sql = "DELETE FROM reviews WHERE review_id in ($review_id)";
		if (mysqli_query($conn, $sql)) {
			echo $review_id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>