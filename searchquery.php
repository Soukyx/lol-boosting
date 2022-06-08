
<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

$s = $_GET['s'];

$query = "SELECT user_name
	FROM users WHERE user_name LIKE '" . $s . "%' ORDER BY id DESC LIMIT 5";

if ($result = mysqli_query($con, $query)) {

	if (mysqli_num_rows($result) == 0) {
		echo "<ul style='color:white;'><li>No results to display</li></ul>";
	} else {

		echo "<ul style='color:white;'>";

		while ($user_data = mysqli_fetch_assoc($result)) {
			echo "<li>";
			echo "<span>" . $user_data['user_name'] . "</span>";
		}

		echo "</ul>";
	}
} else {
	die("Error with the query");
}

mysqli_close($con);

?>
