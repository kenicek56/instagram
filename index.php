<?php
//configuration for our php server
set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//make constants usinf define
define('clientID',	'fa48296f5aa047f48fb9b9192bac9238'); 
define('clientSecret', 'b2974fae436c47a890b6a090b1777897'); 
define('redirectURI', 'http://localhost/Kenicesta/index.php'); 
define('ImageDirectory','pics/'); 
 ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="author" href="humans.txt">
</head>
<body>
	<!-- Creating a login for people to go and give approval for our web app to access their Instagram Account
	After getting approval we are now going to have the info so that we can play with it.
	 -->
	<a href="https:api.instagram/oauth/authorize/?client_id=<?php echo client_ID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">LOGIN</a>
<script src="js/main.js"></script>
</body>
</html>