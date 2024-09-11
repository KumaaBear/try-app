<?php
    if(isset($_GET['guest_id']))
    {
        $guest_id = $_GET['guest_id'];
        include "migration/connection.php";
        $sql = "DELETE FROM guest WHERE guest_id= '$guest_id'";
        mysqli_query($conn, $sql);
        header("Location: src/screens/tracking/TrackingLoginAdminScreen.php?delete=success");
        exit();
    } 
    else
    {
        header("Location: src/screens/tracking/TrackingLoginAdminScreen.php");
        exit();
    }