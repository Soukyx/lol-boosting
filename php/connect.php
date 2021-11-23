
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	// připojení na databázi
	$conn = new mysqli('localhost','root','','user');
	//pokud se nepřipojí hodí error
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
	//pokud se připojí vypíše do databáze poté nás hodí na stránku loginu
		//pokud zadaný email existuje registrace neproběhne (nefunguje:D)
//	elseif(mysql_num_rows($selectresult)>0)
  //  {
    //     $msg = 'email already exists';
    //}
	//pokud se hesla neshodují registrace neproběhne
    else if($password != $cpassword){
         $msg = "passwords doesn't match";
    }
	else{
		$stmt = $conn->prepare("insert into registration(name, email, password, cpassword) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $password, $cpassword);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
	
?>