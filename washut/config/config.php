<?php
//include("constants.php");


define('DB_NAME', 'washut') ;
define('DB_USER', 'root') ;
define('DB_PASS', 'lokeswara');
define('DB_SERVER', 'localhost');


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
if(!$conn)
{
	die("Could not connect" . mysql_error());
}

// $db_select = mysqli_select_db(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// if(!$db_select)
// {
// 	die("Could not select" . mysql_error());
// }
?>
