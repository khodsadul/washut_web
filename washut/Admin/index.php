<?php
include('../config/config.php');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="fuelux">

    <div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Welcome Admin.</h4>
            <form id="login-form" action="declare.php" method="post" role="form" style="display: block;">
                <div class="form-group">
                    <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="username" />
                    </br>
                </div>
                <div class="form-group">
                    <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
                    </br>
                </div>
                <div class="form-group">
                    <div class="wrapper">
                    <span class="group-btn">
                        <input type="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Submit">
                    </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>
