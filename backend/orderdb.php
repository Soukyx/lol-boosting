<?php 

	session_start();

include("../connection.php");
include("../functions.php");

    if(count($_POST)>0){
            $user_name=$_POST['user_name'];
            $crank=$_POST['crank'];
            $cdivision=$_POST['cdivision'];
            $rank=$_POST['rank'];
            $division=$_POST['division'];
            $queueType=$_POST['queueType'];
            $price=$_POST['price'];
            $server=$_POST['server'];
                
            $query = "insert into orders (user_name, crank, cdivision, rank, division, queueType, price, server) values ('$user_name','$crank','$cdivision','$rank','$division','$queueType','$price','$server')";
            if (mysqli_query($con, $query)) {
                header("Location: ../order.php");
            } 
            else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
            }

            mysqli_close($con);
    }

   
?>