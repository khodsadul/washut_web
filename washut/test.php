<?php
include('config/config.php');
include('includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WashUp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
</head>
<body class="fuelx">
<a class="btn btn-success" href="login.php">Login</a>
<?php if(isset($_SESSION['user_email'])) var_dump($_SESSION['user_email']); ?>
<a class="btn btn-default" href="logout.php" class="btn btn-default">Logout</a>
<a class="btn btn-default" href="orders/">Orders</a>
<a class="btn btn-default" href="prices/">Prices</a>
<a class="btn btn-default" href="help/">Help</a>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
</body>
</html>

