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
	<title>WashUp</title>
  <link rel="shortcut icon" href="../images/logo.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/order_schedule.css">
  <link href="https://www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">

</head>
<body class="fuelux">
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                <li><a href="../index.php" class="list-group-item"><i class="fa fa-home fa-fw fa-2x"></i>Home</a></li>
                    <li><a style="pointer-events: none;background-color:#E0E0E0" class="list-group-item" disabled> <i class="fa fa-shopping-cart fa-fw fa-2x"></i> Order
                    </a></li>
                    <li><a href="../order_history/" class="list-group-item"><i class="fa fa-history fa-fw fa-2x"></i>Order History
                    </a></li>
                    <li><a href="../share/" class="list-group-item"><i class="fa fa-share-alt fa-fw fa-2x"></i>Share
                    </a></li>
                    <li><a href="../prices/" class="list-group-item"><i class="fa fa-tags fa-fw fa-2x"></i>Prices
                    </a></li>
                    <li><a href="../help/" class="list-group-item"><i class="fa fa-question-circle fa-fw fa-2x"></i>Help
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
             <div class="container-fluid">
             <!-- Header -->
                    <div class="row">
                    <div class="col-md-8 transbox">
                      <h1 class="text-center">Schedule a Wash</h1>
                    </div>
                  </div>



                  <!-- End Header -->
                  <!-- Middle COntetn Body -->
            <div class="row" style="margin-top:30px;">
            <div class="col-md-8" >
            <form class="form-horizontal" id="large-header" method="post" action="validate.php">

               <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Name :</label>
                    <div class="col-md-9">
                        <input type="text" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="name" class="form-control" id="" placeholder="Name" value="<?php if(logged_in()){ echo $_SESSION['user_name']; } ?>" <?php if(logged_in()) echo "readonly='readonly'"; ?>required="true" >
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Email :</label>
                    <div class="col-md-9">
                        <input type="text" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="email" class="form-control" id="" placeholder="Email" value="<?php if(logged_in()) echo $_SESSION['user_email']; ?>" <?php if(logged_in()) echo "disabled='true'"; ?> required="true" >
                    </div>
                </div>

                <!-- <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Service Type:</label>
                    <div class="col-md-9">
                    <div id="service-type" style="border:2px solid black;background-color: #ECF0F1;color:black;" class="btn-group" data-toggle="buttons" >
                        <label class="btn btn-default ser-btn active" value="regular">
                            <input type="radio" name="service" value="regular" id="" checked="checked"> Wash and Iron
                        </label>
                         <label class="btn btn-default ser-btn" value="regular">
                            <input type="radio" name="service" value="wash" id=""> Wash Only
                        </label>
                        <label class="btn btn-default ser-btn" value="express"  data-toggle="modal" id="">
                            <input type="radio" name="service" value="iron" id=""> Iron Only
                        </label>
                    </div>
                    </div>
                </div>
 -->
                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Pick Up Date:</label>
                    <div class="col-md-9">
                        <div class="datepicker fuelux" id="myDatepicker">
                <div class="input-group">
                    <input style="border:2px solid black;" class="form-control" name="pickdate" id="myDateInput" type="text" />
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-calendar"></span>
                      <span class="sr-only">Toggle Calendar</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right datepicker-calendar-wrapper" role="menu">
                      <div class="datepicker-calendar">
                        <div class="datepicker-calendar-header">
                          <button type="button" class="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous Month</span></button>
                          <button type="button" class="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next Month</span></button>
                          <button type="button" class="title" data-month="11" data-year="2014">
                              <span class="month">
                                <span data-month="0">January</span>
                                <span data-month="1">February</span>
                                <span data-month="2">March</span>
                                <span data-month="3">April</span>
                                <span data-month="4">May</span>
                                <span data-month="5">June</span>
                                <span data-month="6">July</span>
                                <span data-month="7">August</span>
                                <span data-month="8">September</span>
                                <span data-month="9">October</span>
                                <span data-month="10">November</span>
                                <span data-month="11" class="current">December</span>
                              </span> <span class="year">2014</span>
                          </button>
                        </div>
                        <table class="datepicker-calendar-days">
                          <thead>
                          <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                          </tr>
                          </thead>
                          <tbody></tbody>
                        </table>
                        <div class="datepicker-calendar-footer">
                          <button type="button" class="datepicker-today">Today</button>
                        </div>
                      </div>
                      <div class="datepicker-wheels" aria-hidden="true">
                        <div class="datepicker-wheels-month">
                          <h2 class="header">Month</h2>
                          <ul>
                            <li data-month="0"><button type="button">Jan</button></li>
                            <li data-month="1"><button type="button">Feb</button></li>
                            <li data-month="2"><button type="button">Mar</button></li>
                            <li data-month="3"><button type="button">Apr</button></li>
                            <li data-month="4"><button type="button">May</button></li>
                            <li data-month="5"><button type="button">Jun</button></li>
                            <li data-month="6"><button type="button">Jul</button></li>
                            <li data-month="7"><button type="button">Aug</button></li>
                            <li data-month="8"><button type="button">Sep</button></li>
                            <li data-month="9"><button type="button">Oct</button></li>
                            <li data-month="10"><button type="button">Nov</button></li>
                            <li data-month="11"><button type="button">Dec</button></li>
                          </ul>
                        </div>
                        <div class="datepicker-wheels-year">
                          <h2 class="header">Year</h2>
                          <ul></ul>
                        </div>
                        <div class="datepicker-wheels-footer clearfix">
                          <button type="button" class="btn datepicker-wheels-back"><span class="glyphicon glyphicon-arrow-left"></span><span class="sr-only">Return to Calendar</span></button>
                          <button type="button" class="btn datepicker-wheels-select">Select <span class="sr-only">Month and Year</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>


                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Estimated Delivery :</label>
                    <div class="col-md-9">
                        <input type="text" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="deldate" class="form-control" id="deldate" placeholder="First Name" disabled="true" value="Expect Us after 2 days from your order date">
                    </div>
                </div>

              <!-- <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Pick Up Time:</label>
                    <div class="col-md-9">
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Middle</button>
                      </div>
                    </div>
                    </div>
                      <div class="dropdown col-md-9">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                      </div>
                  </div>
 -->

                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Number of Items :</label>
                    <div class="col-md-9">
                        <input type="number" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="items_shirt" class="form-control costcalc" id="items_shirt" placeholder="No of Shirts/Tshirts" value="" >
                    </div>
                </div>

                <div class="form-group ">
                  <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <input type="number" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="items_sheets" class="form-control costcalc" id="items_sheets" placeholder="No of Bed Sheets" value="" >
                    </div>
                </div>


                <div class="form-group ">
                <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div id="mincost" class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry!</strong> Minimum amount is 40.
                  </div>
                  </div>
                <div class="col-md-2"></div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Cost :</label>
                    <div class="col-md-9">
                        <input type="number" style="border:2px solid black;background-color: #ECF0F1;color:black;" name="money" readonly='readonly' class="form-control input-fields" id="cost" placeholder="Estimated Cost" >
                    </div>
                </div>


                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Pick Up Address :</label>
                    <div class="col-md-9">
                      <textarea rows="3" name="pickaddr" style="border:2px solid black;background-color: #ECF0F1;color:black;" class="form-control" id="review" placeholder="Room No,Block, Hostel, College" required="true" value=""><?php if(logged_in()) echo htmlspecialchars($_SESSION['user_addr']); ?></textarea>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3" for="firstName">Phone Number :</label>
                    <div class="col-md-9">
                        <input type="tel" name="phone" style="border:2px solid black;background-color: #ECF0F1;color:black;" class="form-control input-fields" id="phno" maxlength="10" placeholder="Phone Number" required="true" value="<?php if(logged_in()) echo $_SESSION['user_phno'] ?>" >
                    </div>
                </div>


                <div class="form-group ">
                <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <button id="btn_submit" type="submit" align="centre" class="btn btn-success btn-lg col-md-9 col-sm-9 col-xs-9 text-center">Schedule</button>
                </div>
                </div>


                    </div>
                </div>



      </form>
      </div>

        </div> <!-- Main Page div closing   -->
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
$('#mincost').hide();
$('.costcalc').keyup(function(){
  var shirt= $('#items_shirt').val();
  var sheets = $('#items_sheets').val();
  var cost = shirt * 8 + sheets * 15;
  if (cost < 40) {
    $('#mincost').show();
     $('#btn_submit').attr('disabled',true);
  }
  else
  {
    $('#mincost').hide();
    $('#btn_submit').attr('disabled',false);
  }
  $('#cost').val(cost);
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

var date = $('#myDateInput').val();
// alert(date.substring(3,5));
date = date.replace(date.substring(3,5),Number(date.substring(3,5))+2);
$('#deldate').val(date);

</script>

</body>


</html>

