<!DOCTYPE html>
<head>

	<title>GitClub</title>

</head>

<h1> Welcome to the GitClub </h1>

<form name="login" action="index.php" method="post">

	UserName: <input type="text" name="username"> <br>
	Password: <input type="password" name="password">
	<input type="submit" value="submit">

</form>

	

</html>

>>>>>>> index.php

<?php


	$curl = curl_init('https://api.github.com');
	$postData = array(

			'login' => $_POST["username"],
			'pwd' => $_POST["password"],
			'redirect_to' => 'index.php'
		);

	curl_setopt_array($ch, array(
    CURLOPT_URL => 'https://github.com/login',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_FOLLOWLOCATION => true
	));


/*	$con = mysql_connect("localhost:3306", "thach20n", "football");
	if (!$con)
	{
		dir('could not connect' . mysql_error());
	}

	mysql_select_db('thach20n', $con);

	$username = mysql_real_escape_string($_POST["username"]);
	$pwd = mysql_real_escape_string($_POST["password"]);

	//$result = mysql_query("SELECT * FROM users WHERE username='$username' AND
		//password='$pwd'");

	$count = mysql_num_rows($result);

	if($count == 1){
		$_SESSION['is_logged_in'] = $email1;
		header("Location: index.php");
	}
	else{
		echo "Wrong username or password!";
	}

	ob_end_flush();
*/

?>