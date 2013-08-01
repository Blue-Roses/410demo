<?php  
// sitewide configurtion data here
// set locl timezone
putenv('TZ=US/Eastern');

//create DB constants
define ('HOST', 'localhost');
define ('DBNAME' 'mcnzerth_cms1');
define ('USER' 'mcnzerth_rose');
define ('PASS' 'App30le!@');


$db = new mysqli(HOST, USER, PASS, DBNAME);

if(mysqli_connect_errno())
{
	echo "Error: CCould not connect to database. Please try later";
	exit();
}

?>
