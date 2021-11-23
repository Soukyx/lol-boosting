
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// připojení na databázi
	$conn = new mysqli('localhost','root','','user');
	//pokud se nepřipojí hodí error
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	//pokud se připojí vypíše do databáze poté nás hodí na stránku loginu
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