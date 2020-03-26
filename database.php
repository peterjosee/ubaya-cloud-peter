<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = 'root';
$dbpassword = 'ubaya';
$dbname = 'ubayadb';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if($c->connect_error)
{
	echo "unable to connect please try again";
	die();
}


?>
