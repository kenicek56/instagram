<?php
//configuration for our php server
set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//make constants usinf define
define('client_id',	'fa48296f5aa047f48fb9b9192bac9238'); 
define('client_secret', 'b2974fae436c47a890b6a090b1777897'); 
define('redirectURI', 'http://localhost/Kenicesta/index.php'); 
define('ImageDirectory','pics/'); 
 ?>
<!--CLIENT ID	fa48296f5aa047f48fb9b9192bac9238
CLIENT SECRET	b2974fae436c47a890b6a090b1777897
WEBSITE URL	http://localhost/Kenicesta/index.php
REDIRECT URI	http://localhost/Kenicesta/index.php-->