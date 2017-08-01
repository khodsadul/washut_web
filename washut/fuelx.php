<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel UX Basic Template (Globals)</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//www.fuelcdn.com/fuelux/3.6.3/css/fuelux.min.css" rel="stylesheet">
  </head>
  <body class="fuelux">
    <!-- Checkbox example -->
    <div class="checkbox">
      <label class="checkbox-custom" data-initialize="checkbox">
        <input class="sr-only" data-toggle="#hereKittyKitty" type="checkbox" value="option1">
        <span class="checkbox-label">I love kittens!</span>
      </label>
    </div>
    <div id="hereKittyKitty" class="alert bg-info">Great. Meow, too!</div>

    <div class="input-group">
  <input class="form-control" id="myDatepickerInput" type="text"/>

</div>
<?php
define('DB_NAME', 'washut') ;
define('DB_USER', 'root') ;
define('DB_PASS', 'lokeswara');
define('DB_SERVER', 'localhost');


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
if(!$conn)
{
  die("Could not connect" . mysql_error());
}
$res = mysqli_query($conn,"SELECT * FROM Users");
while ($row = mysqli_fetch_assoc($res)) {
echo $row['Name'];
}
?>

<div class="loader" data-initialize="loader" id="myLoader"></div>


    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//www.fuelcdn.com/fuelux/3.6.3/js/fuelux.min.js"></script>
  </body>
  <script type="text/javascript">
$('#myDatepickerInput').datepicker();  </script>
</html>
