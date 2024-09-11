<?php
    if(isset($_POST['submit']))
    {
        $guest_id = $_GET['guest_id'];
        $guest_name = strtoupper($_POST['guest_name']);
        $seat_type = $_POST['seat_type'];
        if(!preg_match("/^[a-zA-Z, ]*$/", $guest_name)){
            header("Location: index.php?error=guest_name");
            exit();
        }
        include "migration/connection.php";
        $sql = "UPDATE guest SET guest_name = '$guest_name', seat_type = '$seat_type' WHERE guest_id= '$guest_id'";
        mysqli_query($conn, $sql);
        header("Location: src/screens/tracking/TrackingLoginAdminScreen.php?update=success");
        exit();
    } 
  