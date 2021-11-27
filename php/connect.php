
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	// připojení na databázi
	$conn = new mysqli('localhost','root','','user');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else if($password != $cpassword){
		$msg = "passwords doesn't match";
   }else {
		$stmt = $conn->prepare("insert into registration(name, email, password, cpassword) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $password, $cpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>