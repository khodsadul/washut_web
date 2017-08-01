<?php
include('../config/config.php');
include('../includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
</head>
<body>

  <title>Share - WashUp Dhanbad Laundry Service</title>
  <link rel="shortcut icon" href="../images/logo.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/share.css">
</head>
<body class="fuelux">
<?php     //if(isset($_SESSION['user_email']))var_dump($_SESSION['user_email']); else redirect_to("../login.php"); ?>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                <li><a href="../index.php" class="list-group-item"><i class="fa fa-home fa-fw fa-2x"></i>Home</a></li>
                    <li><a href="../orders/" class="list-group-item"> <i class="fa fa-shopping-cart fa-fw fa-2x"></i> Order
                    </a></li>
                    <li><a href="../order_history/" class="list-group-item"><i class="fa fa-history fa-fw fa-2x"></i>Order History
                    </a></li>
                    <li><a style="pointer-events: none;background-color:#E0E0E0" class="list-group-item"><i class="fa fa-share-alt fa-fw fa-2x"></i>Share
                    </a></li>
                    <li><a href="../prices/" class="list-group-item"><i class="fa fa-tags fa-fw fa-2x"></i>Prices
                    </a></li>
                    <li><a href="../help/" class="list-group-item" disabled><i class="fa fa-question-circle fa-fw fa-2x"></i>Help
                    </a></li>
                    <li><a href="../logout.php" class="list-group-item"><i class="fa fa-sign-out fa-fw fa-2x"></i>LogOut
                    </a></li>
                </ul>
            </div>
        </div><!--/span-->
        <div class="col-xs-12 col-sm-9 content">
            <p class="pull-left">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="fa fa-bars fa-fw fa-2x"></i></button>
             </p>
             <br>
             <br>
<!-- Page content -->
<!-- Header -->
             <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-8 transbox">
                      <h1 class="text-center">Liked Us? Share Your Experience</h1>
                    </div>
                  </div>
                </div>
<br>
<br>
<br>
<br>
<br>
                </div>
                  <!-- End Header -->
                  <!-- Middle COntetn Body -->
              <div class="container-fluid">
                <div class="col-md-8">

<div class="row">
<div class="col-md-4">
<a class="btn btn-default btn-lg" href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://washut.com.com">
        <img src="../images/email.png" alt="Email" />
    </a>
</div>
<div class="col-md-4">
    <!-- Facebook -->
    <a class="btn btn-default btn-lg" href="http://www.facebook.com/sharer.php?s=100&p[title]=Washut Online Laundry Service Dhanbad&p[summary]=We bring laundry to your door steps&p[url]=https://www.washut.com" target="_blank">
        <img src="../images/facebook.png" alt="Facebook" />
    </a>
</div>

    </div>



                  </div>
                  </div>
                  </div>
                  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
<script type="text/javascript">
    $('#sidebar').affix({
      offset: {
        top: $('header').height()
      }
});
    $(document).ready(function () {
  $('[data-toggle=offcanvas]').click(function () {
    if ($('.sidebar-offcanvas').css('background-color') == 'rgb(255, 255, 255)') {
        $('.list-group-item').attr('tabindex', '-1');
    } else {
        $('.list-group-item').attr('tabindex', '');
    }
    $('.row-offcanvas').toggleClass('active');

  });
});
$('#myDatepicker').datepicker();
</script>
</body>


</html>

