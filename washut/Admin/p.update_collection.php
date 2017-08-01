<?php
include('../config/config.php');
include('includes/session.php');
// var_dump($_GET);die;
 if ( intval ( $_GET["id"] ) > 0 )
    {
        $query=mysqli_query($conn,"UPDATE Orders
                        SET is_collected = 1
                        WHERE id = ".$_GET["id"]);
        // var_dump($query);die;
        $_SESSION["str_system_message"] = "BannerAd Changed successfully." ;
    }

    header ( "location:".$_SERVER['HTTP_REFERER'] ) ;
    exit ( ) ;
