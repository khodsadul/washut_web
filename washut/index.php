<?php
include('config/config.php');
include('includes/session.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Washut Laundry Destination in Dhanbad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Top quality door-step laundry services in Dhanbad with a single click">
		<meta name="keywords" content="laundry, ism dhanbad laundry, dhanbad, ism, dhobi,online dhobi">
		<meta name="author" content="Team Washut">
		<link rel="shortcut icon" href="images/logo.ico">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

	 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-weight:bold;"><span><img src="images/logo.png" width="40px" height="25px" style="padding-right:5px;padding-top:0px;" /></span>Washut</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a><i class="fa fa-home fa-fw"></i>Home</a></li>
        <li><a href="orders/"><i class="fa fa-shopping-cart fa-fw"></i>Order</a></li>
        <li><a href="order_history/"><i class="fa fa-history fa-fw"></i>Order History</a></li>
        <li><a href="prices/"><i class="fa fa-tags fa-fw"></i>Prices</a></li>
        <li><a href="help/"><i class="fa fa-question-circle fa-fw"></i>Help</a></li>
      </ul>
    <?php
	if(!logged_in()):
	?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up</a></li>
      </ul>
    <?php endif; ?>
    <?php if(logged_in()): ?>
    	<ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    <?php endif; ?>

    </div>
  </div>
</nav>


		<!-- Header -->
			<div id="header">
				<span><img src="images/logo.png" class="logo icon img img-responsive"></span>
				<h1>W A S H U T</h1>
				<p>An End to your Washing Problems.
				<br />
				</p>
				<?php if(! logged_in()): ?>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-3"></div>
					<div class="col-md-4 col-sm-4 col-xs-6"><a href="login.php"><button class="fa fa-sign-in btn btn-primary btn-lg">Login To Continue</button></a><br>OR<br>
					<a href="orders/"><button class="fa fa-shopping-cart btn btn-primary btn-lg">Schedule a wash Now !!</button></a></div>
					<div class="col-md-4 col-sm-4 col-xs-3"></div>
				</div>
			<?php endif; ?>
			<?php if(logged_in()): ?>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"><a href="#"><button class="btn btn-success btn-lg">WELCOME <?php echo $_SESSION['user_name'] ?> </button></a><br/><br/>
					<a href="orders/"><button class="fa fa-shopping-cart btn btn-primary btn-lg">Schedule a wash Now !!</button></a></div>
					<div class="col-md-4"> </div>
				</div>
			<?php endif; ?>

			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container 75%">
					<h2>frustrated with the high charges of washer men?<br>
						tired of getting dull clothes after every wash?<br>
						maintaining your clothes the most tedious job for you?<br>
						Now forget all these pains
						Washut has come to help you out!</h2>
					<!--
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					-->
				</header>

				<!-- // banner ads here -->
				<div class="box container">
				<section>
						<blockquote>If you don't do laundry today, you gonna have to buy new clothes tomorrow.</blockquote>
					</section>
					<header>
						<h2>How It Works?</h2>
					</header>
					<section>
						<header>
							<h3>Paragraph</h3>
							<p>This is the subtitle for this particular heading</p>
						</header>
						<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
						habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
						leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
						amet risus elit.</p>
					</section>
					<section>
						<ul class="default">
							<li>Register with us and order</li>
							<li>All Orders placed before 11:00 AM will be picked up on the same day by our pick up guy.</li>
							<li>Sit Back and Relax</li>
							<li>Clean clothes will be delivered in 2 days</li>
						</ul>
					</section>
				</div>






				<div class="box alt container">
					<section class="feature left">
						<a href="#" class="image icon fa-users"><img src="images/laundry.jpg" alt="" /></a>
						<div class="content">
							<h3>About Us</h3>
							<p>We at washut aim at offering top quality laundry service in just one click. We promise to provide you the most convenient, easy and high quality way for maintaining your valuable fabrics. It provides the best cleaning service in Dhanbad. Your delicate fabrics are handled by our staff to ensure your complete</p>
						</div>
					</section>
					<section class="feature right">
						<a href="#" class="image icon fa-thumbs-up"><img src="images/folded.jpg" alt="" /></a>
						<div class="content">
							<h3>Features of Washut</h3>
						<!-- 	<ol class="default">
							<li>Easy and Convinient</li>
							<li>Orders can be placed via Website / App</li>
							<li>Easy to fill the options and login through your washut account.</li>
							<li>Free Pick-up & delivery as per customer's convenience.</li> 
							<li>Delivery within 48 hours.</li>
						</ol> -->
						<p>Easy and Convinient<br>
						Orders can be placed via Website / App<br>
						Login And Get your clothes washed<br>
						Free Pick-up & delivery as per your convenience.<br>
						Delivery within 48 hours.
						</div>
					</section>
					<section class="feature left">
						<a href="#" class="image icon fa-money"><img src="images/pic03.jpg" alt="" /></a>
						<div class="content">
							<h3>Payment</h3>
							<p>Cash On Delivery Avaliable</p>
							<p>Paytm Wallet Coming Soon!!</p>
						</div>
					</section>
				</div>



				<div class="box container">
				<section>
						<header>
							<h3>Prices</h3>
						</header>
						<div class="table-wrapper">
							<table class="default">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Wash And Iron</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Shirt/Tshirt</td>
										<td>Rs 8.00</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Pant</td>
										<td>Rs 8.00</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Bed Sheet</td>
										<td>Rs 15.00</td>
									</tr>
							</table>
						</div>
					</section>
				</div>




			</div>



		<!-- Footer -->
<a href="#suggestion"></a>
			<div id="footer">
				<div class="container 75%">

					<header id="suggestion" class="major last">
						<h2>Questions | comments | complaints ?</h2>
					</header>
<a name="suggestions"></a>
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
						<div class="row">
							<div class="6u 12u(mobilep)">
								<input type="text" name="name" required="true" placeholder="Name" value="<?php if(logged_in()) echo $_SESSION['user_name'] ?>" />
							</div>
							<div class="6u 12u(mobilep)">
								<input type="text" name="number" maxlength="10" required="true" placeholder="Phone Number" value="<?php if(logged_in()) echo $_SESSION['user_phno'] ?>" />
							</div>
							<div class="12u 12u(mobilep)">
								<input type="email" name="email" required="true" placeholder="Email" value="<?php if(logged_in()) echo $_SESSION['user_email'] ?>" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" required="true" placeholder="Message" rows="6"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
						</div>
					</form>

					<!-- <ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul> -->

					<!-- <ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul> -->

				</div>
			</div>




			<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thank you!!</h4>
      </div>
      <div class="modal-body">
        <p>Your Order has been successfully registered.</p>
        <p> Happy with your Work?</p>
        <a type="button" href="../share/" class="btn btn-sucess">Share Your Experience</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="entrymodal" class="modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">We are working again</h4>
      </div>
      <div class="modal-body">
        <p>Sorry for not being there with you for this long.evenwith all the difficulties we try to keep moving thank you for all the support.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    	$(window).load(function(){
    		$('#entrymodal').modal('show'); });
    });
    </script>
<?php
if(!empty($_GET['order']) && $_GET['order'] == 'success'){
echo '<script type="text/javascript">';
echo  "$(window).load(function(){";
echo  "$('#myModal').modal('show'); });";
echo "";
echo "</script>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = test_input($_POST['email']);
    $name = test_input($_POST['name']);
    $cmnt = test_input($_POST['message']);
    $phno = test_input($_POST['number']);
    $res = mysqli_query($conn,"INSERT INTO Comments(Name,EMail,Message,Phno) VALUES ('$name','$email','$cmnt',$phno)");
    if($res)
    {

    }

}
?>
</body>
</html>
