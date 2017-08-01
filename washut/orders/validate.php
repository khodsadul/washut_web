<?php
include('../config/config.php');
include('../includes/session.php');
// var_dump($_POST);die;
// $service = $_POST['service'];
$pickdate = test_input($_POST['pickdate']);
$pickaddr = test_input($_POST['pickaddr']);
$phno = intval(test_input($_POST['phone']));
	$items_shirt = intval(test_input($_POST['items_shirt']));
	$items_sheets = intval(test_input($_POST['items_sheets']));

	if(isset($_SESSION['user_id']))
	{
		$uid = $_SESSION['user_id'];
	}
	else
	{
	 $uid = 0;
	}

	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	var_dump($name);
	var_dump($email);
$cost = $_POST['money'];
$pickdate = date("Y-m-d", strtotime($pickdate));
$query = mysqli_query($conn,"INSERT INTO Orders(User_ID,User_Name,User_phno,PickAddrs,PickDate,Items_Shirts,Items_Sheets,Cost) VALUES ($uid,'$name',$phno,'$pickaddr','$pickdate',$items_shirt,$items_sheets,$cost)");
if ($query) {
	redirect_to("../index.php?order=success");
}
