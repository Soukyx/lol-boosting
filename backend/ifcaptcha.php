<?php
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } 
	else{
		echo "<script>alert('Verification code match !');</script>" ;
	}
?>