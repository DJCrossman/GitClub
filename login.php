<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>GitClub</title>
        <link rel="stylesheet" href="https://github.global.ssl.fastly.net/assets/github-4288f026700410ae032b5d324dea2b4571789d7c.css" />
        <link rel="stylesheet" href="https://github.global.ssl.fastly.net/assets/github2-88d5087029dbe346f413843c4cb0149921840ef5.css" />
    	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    </head>
    <body>
    	<header>
    		<div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="http://hack.djcrossman.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" class="notification-indicator tooltipped downwards" data-gotokey="n" original-title="You have unread notifications">
        <span class="mail-status unread"></span>
</a>

      <div class="command-bar js-command-bar  ">

		<h6> Welcome to the GitClub </h6>
        <ul class="top-nav">
          <li class="battle"><a href="/GitClub">Battle Board</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="https://github.com/DJCrossman" class="name">
        <img height="20" src="https://1.gravatar.com/avatar/bb17cafc08254c48919d12213f117e8e?d=https%3A%2F%2Fidenticons.github.com%2Ff5852fd0e3770196c2fa0054caa9386e.png&amp;s=140" width="20"> DJCrossman
      </a>
    </li>

      <li>
        <a href="/new" id="new_repo" class="tooltipped downwards" aria-label="Create a new repo" original-title="Create a new repo">
          <span class="octicon octicon-repo-create"></span>
        </a>
      </li>

      <li>
        <a href="/settings/profile" id="account_settings" class="tooltipped downwards" aria-label="Account settings " original-title="Account settings ">
          <span class="octicon octicon-tools"></span>
        </a>
      </li>
      <li>
        <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" aria-label="Sign out" original-title="Sign out">
          <span class="octicon octicon-log-out"></span>
        </a>
      </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>



</ul>

</div>

  </div>
</div>
    	</header>
<div id="side">&nbsp;</div>
    	<article id="center">

<form name="login" action="index.php" method="post">
	<div class="form-group">
		UserName: <input type="text" name="username"> <br/>
	</div>
	<div class="form-group">
		Password: <input type="password" name="password"><br/>
	</div>
	<input type="submit" value="submit">

</form>

    	</article>
    	<div id="side">&nbsp;</div>
	

</html>

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