<?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    if(!$conn)
    {
        die("Connection Failed: " . mysqli_connect_error());
    }
