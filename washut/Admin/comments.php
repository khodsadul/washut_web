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
                <th align="center"><h4>Phone No</h4></th>
                <th><h4>Message</h4></th>
                <th><h4>Date Added</h4></th>
              </tr>
    <?php
	 $query = mysqli_query($conn,"SELECT * FROM `Comments` ORDER BY No DESC");
   $i = 0 ;
   $rows = array();
   while($row = mysqli_fetch_assoc($query))
     $rows[] = $row;
   foreach($rows as $row):
                 // var_dump($row);
           ?>
              <tr>
                <td><?php echo $row['No'] ?></td>
                <td ><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Phno'] ?></td>
                <td><?php echo $row['Message']; ?></td>
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
