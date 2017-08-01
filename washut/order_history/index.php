<?php
include('../config/config.php');
include('../includes/session.php');
if(!logged_in())
redirect_to("../login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WashUp</title>
  <link rel="shortcut icon" href="../images/logo.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/order_history.css">
</head>
<body class="fuelux">
<?php//     if(isset($_SESSION['user_email']))var_dump($_SESSION['user_email']); else redirect_to("../login.php"); ?>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                <li><a href="../index.php" class="list-group-item"><i class="fa fa-home fa-fw fa-2x"></i>Home</a></li>
                    <li><a href="../orders/" class="list-group-item"> <i class="fa fa-shopping-cart fa-fw fa-2x"></i> Order
                    </a></li>
                    <li><a style="pointer-events: none;background-color:#E0E0E0" class="list-group-item"><i class="fa fa-history fa-fw fa-2x"></i>Order History
                    </a></li>
                    <li><a href="../share/" class="list-group-item"><i class="fa fa-share-alt fa-fw fa-2x"></i>Share
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
              <h1>Order History</h1>
<br>
<br>
                </div>
                  <!-- End Header -->
                  <!-- Middle COntetn Body -->
              <div class="container-fluid">



            <div class="transbox table-responsive">
            <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
              </tr>
              <?php
                $i = 0 ;
                $uid = $_SESSION['user_id'];
                $query = mysqli_query($conn,"SELECT * FROM Orders Where User_ID = $uid ORDER BY DateAdded DESC");
                if ( empty ( $query ) )
                {
                  echo ' <h3>Sorry No previous Orders!!</h3><a href="../orders/" class="btn btn-primary">Order Now</a>';
                }

                  $rows = array();
                while($row = mysqli_fetch_assoc($query))
                  $rows[] = $row;
                foreach($rows as $row):
                    $css_class = $i++ % 2 == 0 ? "listing_even" : "listing_odd" ;
                  // var_dump($row);
            ?>
              <tr class="<?php echo $css_class ?>" style="background-color: #ffffff;opacity: 0.8;font-weight: bold;color: #000000;" >
                <td ><?php echo $row['id'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>
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

