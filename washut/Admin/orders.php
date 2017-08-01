<?php
include('../config/config.php');
include('includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<script type="text/javascript">
  function collected (obj_id) {
    if ( parseInt ( obj_id ) > 0 )
        {
      window.location = "p.update_collection.php?id="+obj_id ;
    }
  }
  function delivered (obj_id) {
    if ( parseInt ( obj_id ) > 0 )
        {
      window.location = "p.update_delivery.php?id="+obj_id ;
    }
  }
</script>
<body>
<?php

	?>

  <?php if(isset($_SESSION['adminuser']) && $_SESSION['adminuser']=="team@washut"):
  ?>

    <div class="panel panel-success">
      <div class="panel-body">
        Diamond Hostel Orders
      </div>
    </div>

	<table class="table table-bordered" style="font-weight: bold ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
	 $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%diamond%' AND `is_delivered` <> 1  ORDER BY id Desc");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
                 // var_dump($row);
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

    <div class="panel panel-default">
      <div class="panel-body">
        Amber Hostel Orders
      </div>
    </div>

            <table class="table table-bordered" style="font-weight: bold;">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%amber%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
      $css_class = $i++ % 2 == 0 ? "listing_even" : "listing_odd" ;
                 // var_dump($row);
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

    <div class="panel panel-default">
      <div class="panel-body">
        Jasper Hostel Orders
      </div>
    </div>

            <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%jasper%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
      $css_class = $i++ % 2 == 0 ? "listing_even" : "listing_odd" ;
                 // var_dump($row);
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

                <div class="panel panel-default">
      <div class="panel-body">
        Emarald Hostel Orders
      </div>
    </div>

            <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%emerald%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

      <div class="panel panel-default">
      <div class="panel-body">
        Topaz Hostel Orders
      </div>
    </div>

            <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%topaz%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

<div class="panel panel-default">
      <div class="panel-body">
        Sapphire Hostel Orders
      </div>
    </div>


    <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%sapp%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

    <div class="panel panel-default">
      <div class="panel-body">
        Ruby Hostel Orders
      </div>
    </div>


    <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%ruby%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

    <div class="panel panel-default">
      <div class="panel-body">
        Opal Hostel Orders
      </div>
    </div>


    <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%opal%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

           <div class="panel panel-default">
      <div class="panel-body">
        Shanti Bhavan Hostel Orders
      </div>
    </div>


    <table class="table table-bordered" style="font-weight: bold;border:5px solid black; ">
              <tr>
                <th align="center"><h4>Order No</h4></th>
                <th align="center"><h4>Userid</h4></th>
                <th align="center"><h4>User Name</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th align="center"><h4>Shirts/Tshirts/Pants</h4></th>
                <th align="center"><h4>Bed Sheets</h4></th>
                <th align="center"><h4>Cost</h4></th>
                <th align="center"><h4>Pick Date</h4></th>
                <th align="center"><h4>Order Date</h4></th>
                <th></th>
                <th></th>
              </tr>
    <?php
   $query = mysqli_query($conn,"SELECT * FROM `Orders` WHERE `PickAddrs` LIKE '%santi%' or `PickAddrs` LIKE '%shanti%' AND `is_delivered` <> 1 ORDER BY id");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
           ?>
              <tr <?php if($row['is_collected'] == 1){echo "style='background-color:yellow';";}?> >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['User_ID'] ?></td>
                <td ><?php echo $row['User_Name'] ?></td>
                <td><?php echo $row['PickAddrs'] ?></td>
                <td><?php echo $row['User_phno'] ?></td>
                <td><?php echo $row['Items_Shirts'] ?></td>
                <td><?php echo $row['Items_Sheets'] ?></td>
                <td><?php echo $row['Cost'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['PickDate'])) ?></td>
                <td><?php echo $row['DateAdded'] ?></td>
                <td><button class="btn btn-default" onclick="collected(<?php echo $row['id'] ?>)">Collected</button></td>
                <td><button class="btn btn-default" onclick="delivered(<?php echo $row['id'] ?>)" >Delivered</button></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>




          <?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
