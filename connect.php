
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// připojení na databázi
	$conn = new mysqli('localhost','root','','user');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: login.html');
		$stmt->close();
		$conn->close();
	}
?>