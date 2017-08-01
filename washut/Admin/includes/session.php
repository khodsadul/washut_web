<?php require_once("new_functions.php");?>
<?php
// session_start();

$timeout = 60 * 30; // In seconds, i.e. 30 minutes.
$fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
session_start();
if (    (isset($_SESSION['last_active']) && $_SESSION['last_active']<(time()-$timeout))
     || (isset($_SESSION['fingerprint']) && $_SESSION['fingerprint']!=$fingerprint)
     || isset($_GET['logout'])
    )
{
    setcookie(session_name(), '', time()-3600, '/');
    session_destroy();
}
session_regenerate_id();
$_SESSION['last_active'] = time();
$_SESSION['fingerprint'] = $fingerprint;



function logged_in()
{
		return isset($_SESSION['adminuser']);

}
function confirm_logged_in()
{

	if(!logged_in())
	{
		redirect_to("login.php");
	}
}
function like_logged_in()
{
	if(!logged_in())
	{
		redirect_to("login.php?target=1");
	}

}

function is_logged_in()
{
	if(logged_in())
	{
		redirect_to("login.php");
	}
}


?>
