
<?php
	//zkoušení zprovoznění ověření hesla a emailu (neodzkoušeno)
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
	$slquery = "SELECT 1 FROM registration WHERE email = '$email'";
    $selectresult = mysql_query($slquery);
	// připojení na databázi
	$conn = new mysqli('localhost','root','','user');
	//pokud se nepřipojí hodí error
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	//pokud zadaný email existuje registrace neproběhne (nevim jestli funguje)
	else if(mysql_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
    }
	//pokud se hesla neshodují registrace neproběhne (nevim jestli funguje)
    else if($password != $cpassword){
         $msg = "passwords doesn't match";
    }
	//pokud se připojí vypíše do databáze poté nás hodí na stránku loginu
	else {
		$stmt = $conn->prepare("insert into registration(name, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: login.html');
		$stmt->close();
		$conn->close();
	}
	}
?>