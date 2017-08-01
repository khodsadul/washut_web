<?php
include('../config/config.php');
include('includes/session.php');
if(!logged_in())
redirect_to("index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<a href="users.php" class="btn btn-lg btn-primary">See The Registered Users</a>
<a href="orders.php" class="btn btn-lg btn-primary" >See the orders</a>
<a href="comments.php" class="btn btn-lg btn-primary" >See the Comments</a>
<a href="logout.php" class="btn btn-danger">Logout</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
