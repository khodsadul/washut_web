<?php
include('../config/config.php');
include('includes/session.php');
// var_dump($_POST);
$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

if($username == "team@washut" && $password == "Washut#ism")
{
	$fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
    $_SESSION['last_active'] = time();
    $_SESSION['fingerprint'] = $fingerprint;
    $_SESSION['adminuser'] = "team@washut";
    // var_dump($_SESSION);die;
    redirect_to("functions.php");
}
else
{
	echo "You are not a Admin So Keep Calm and Do Your Work ;)";
}
