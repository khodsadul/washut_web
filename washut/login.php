<?php
include('config/config.php');
include('includes/session.php');
if(logged_in())
redirect_to("index.php");
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
	<link href="//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
</head>
<body class="fuelux">

<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <div class="alert alert-danger alert-dismissible" id="login_error" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <strong>Error!</strong> Better check yourself, Wrong Email id or password.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input style="border:none;background-color: #ECF0F1;" type="email" name="login_email" id="username" tabindex="1" class="form-control" placeholder="Email" value="" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input style="border:none;background-color: #ECF0F1;" type="password" name="login_pwd" id="password" tabindex="2" class="form-control" placeholder="Password" required="true">
                                    </div>
                                    <!-- <div class="form-group text-center">
                                        <div class="checkbox" id="myCheckbox">
                                          <label class="checkbox-custom" data-initialize="checkbox">
                                            <input class="sr-only" tabindex="3" type="checkbox" value="">
                                            <span class="checkbox-label">Remember Me</span>
                                          </label>
                                        </div>
                                    </div> -->
                                   <!--  <div class="form-group text-center" >
                                        <div class="g-recaptcha text-center" data-sitekey="6LdxJQsTAAAAAEaYeJ5XLQvYt8n5V8_Puss0Co5T"></div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input  type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </form>
                                <form id="register-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" role="form" style="display: none;">
                                <span style="color:red;"><p>All Fields are compulsory</p> </span>
                                    <div class="form-group">
                                        <input style="border:none;background-color: #ECF0F1;" type="text" name="reg_name" id="username" tabindex="1" required="true" class="form-control" placeholder="Name" value="">
                                    </div>
                                    <div class="form-group">
                                        <textarea  required="true"  style="border:none;background-color: #ECF0F1;" rows="3" name="address" class="form-control" tabindex="1" id="review" placeholder="Room No,Block, Hostel, College"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input  required="true"  style="border:none;background-color: #ECF0F1;" type="email" name="reg_email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input  required="true"  style="border:none;background-color: #ECF0F1;" type="tel" name="reg_phno" tabindex="1" class="form-control" placeholder="Phone Number" value="" minlength="10" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <input  required="true"  style="border:none;background-color: #ECF0F1;" type="password" name="reg_pwd" id="pass" tabindex="1" class="form-control" placeholder="Password" value="">
                                    </div>
                                    <div class="form-group" id="copass">
                                        <input style="border:none;background-color: #ECF0F1;" type="password" name="confirm-password" id="cpass" tabindex="1" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->

<script type="text/javascript">
    $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});

$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
        ('#copass').addClass("has-error");
       alert('Password not matches');
       return false;
   }
   return true;
});


</script>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['login_email']))
    {
    	$login_email = test_input($_POST['login_email']);
    	$login_pwd = test_input($_POST['login_pwd']);
        $query = mysqli_query($conn,"SELECT * FROM Users where email LIKE '$login_email'");
        $row = mysqli_fetch_array($query);
    	$rows = mysqli_num_rows($query);
         // $row['salt'].
        if($rows == 1)
        {
        	if (check_password( $login_pwd, $row['pwd']))
        	{
                $fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
                $_SESSION['last_active'] = time();
                $_SESSION['fingerprint'] = $fingerprint;
        		$_SESSION['user_email']=$login_email;
                $_SESSION['user_name']=$row['Name'];
                $_SESSION['user_addr']=$row['Address'];
                $_SESSION['user_id']=$row['id'];
                $_SESSION['user_phno']=$row['PhNo'];
                // var_dump($_SESSION);
                // die;
        		redirect_to("orders/");
        	}

        }
        else
        {
           echo "<script>$('#login_error').show();</script>";
        }
    }
    elseif (isset($_POST['reg_email'])) {
        $name = test_input($_POST['reg_name']);
        $email = test_input($_POST['reg_email']);
        $pwd = test_input($_POST['reg_pwd']);
        $addr = test_input($_POST['address']);
        $phno =  intval($_POST['reg_phno']);
        // var_dump($phno);die;
        $pass = get_hashed_password($pwd);
        $query = mysqli_query($conn,"INSERT INTO Users (Name,email,pwd,Address,PhNo) Values('$name','$email','$pass','$addr',$phno)");
        if($query)
        {
            $fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
            $_SESSION['last_active'] = time();
            $_SESSION['fingerprint'] = $fingerprint;
            $_SESSION['user_email']=$email;
            $_SESSION['user_name']=$name;
            $_SESSION['user_addr']=$addr;
            $_SESSION['user_phno']=$phno;
            $_SESSION['user_id']=mysqli_insert_id($conn);
            // var_dump($_SESSION);
            redirect_to("index.php");
        }
    }

}
else
{
    echo "<script> $('#login_error').hide(); </script>";
}

?>

</body>
</html>
