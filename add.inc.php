<?php
if(isset($_POST['submit']))
{
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $guest_name = $last_name . ", " . $first_name . " " . $middle_name;
    $seat_type = $_POST['seat_type'];
    $seat_number = $_POST['seat_number'];
    $payment_method = $_POST['payment_method'];
    date_default_timezone_set('Asia/Manila');      
    $reg_date = date('F d, Y');
    
    if(!preg_match("/^[a-zA-Z]*$/", $last_name) || !preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $middle_name)){
        header("Location: src/screens/booking/BookingScreen.php?error=invalid_name");
        exit();
    }
    
    include "migration/connection.php";

    $sql = "INSERT INTO guest (guest_id, guest_name, seat_type, seat_number, payment_method, reg_date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    
    if(mysqli_stmt_prepare($stmt, $sql)) {
        $random_num = str_pad(rand(0, 99999), 5, "0", STR_PAD_LEFT);
        $guest_id = strtoupper(substr($last_name, 0, 3) . "-" . $random_num . "-" . date('dmY'));

        mysqli_stmt_bind_param($stmt, "ssssss", $guest_id, $guest_name, $seat_type, $seat_number, $payment_method, $reg_date);
        mysqli_stmt_execute($stmt);

        header("Location: src/screens/booking/BookingScreen.php?added=success");
        exit();
    } else {
        // Redirect with error message if statement preparation failed
        header("Location: src/screens/booking/BookingScreen.php?error=stmt_prepare_failed");
        exit();
    }
}
?>
