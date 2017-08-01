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

	<table class="table table-bordered" style="font-weight: bold;">
              <tr>
                <th align="center"><h4>Id</h4></th>
                <th align="center"><h4>Name</h4></th>
                <th align="center"><h4>Email</h4></th>
                <th align="center"><h4>Address</h4></th>
                <th align="center"><h4>Phone No</h4></th>
                <th><h4>Date Added</h4></th>
              </tr>
    <?php
	 $query = mysqli_query($conn,"SELECT * FROM `Users`  ORDER BY id DESC");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
      $css_class = $i++ % 2 == 0 ? "listing_even" : "listing_odd" ;
                 // var_dump($row);
           ?>
              <tr class="<?php echo $css_class ?>" style="font-weight: bold;color: #000000;" >
                <td ><?php echo $row['id'] ?></td>
                <td ><?php echo $row['Name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['PhNo'] ?></td>
                <td><?php echo $row['dateadded'] ?></td>
              </tr>
              <?php
                endforeach ;
            ?>
            </table>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
