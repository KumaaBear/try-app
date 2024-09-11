<?php
    if(isset($_POST['submit']))
    {
        $guest_id = $_POST['guest_id'];
        $num_guest = $_POST['num_guest'];
        $room_type = $_POST['room_type'];
        $num_days = $_POST['num_days'];

        include "connection.php";

        $sql = "SELECT * FROM guest WHERE guest_id = '$guest_id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($query);
        if($result > 0){
            $row = mysqli_fetch_assoc($query);
            $guest_name = $row['guest_name'];
            $guest_type = $row['guest_type'];
            $reg_date = $row['reg_date'];
            $room_details = [
                'Standard' => [
                    "Price" => 1250,
                    "Pax" => 2
                ],
                'Suite' => [
                    "Price" => 2250,
                    "Pax" => 2
                ],
                'Deluxe' => [
                    "Price" => 3750,
                    "Pax" => 3
                ],
                'Family' => [
                    "Price" => 8125,
                    "Pax" => 5
                ]
            ];
            $num_rooms = 1;
            if($num_guest > $room_details[$room_type]["Pax"]){
                $num_rooms = ceil($num_guest/$room_details[$room_type]["Pax"]);
            }
            $amount_due = $room_details[$room_type]["Price"] * $num_rooms * $num_days;
            if($guest_type === "member")
            {
                if($amount_due > 5000)
                {
                    $discount = 0.05 * $amount_due;
                    $final_amount = $amount_due - $discount;
                }
            }
            else
            {
                if($guest_type === "non-member")
                {
                    if($amount_due > 5000)
                    {
                        $discount = 0.02 * $amount_due;
                        $final_amount = $amount_due - $discount;
                    }
                }
            }
            
        }
    }
    else
    {
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Fields</th>
            <th>Values</th>
        </tr>
        <tr>
            <td>Guest ID</td>
            <td><?php echo $guest_id; ?></td>
        </tr>
        <tr>
            <td>Guest Name</td>
            <td><?php echo $guest_name; ?></td>
        </tr>
        <tr>
            <td>Date of Registration</td>
            <td><?php echo $reg_date; ?></td>
        </tr>
        <tr>
            <td>Guest Type</td>
            <td><?php echo $guest_type; ?></td>
        </tr>
    </table><br><br>
    <table>
        <tr>
            <td>Guest Number:</td>
            <td><?php echo $guest_id; ?></td>
        </tr>
        <tr>
            <td>Number of Guests:</td>
            <td><?php echo $num_guest; ?></td>
        </tr>
        <tr>
            <td>Room Type:</td>
            <td><?php echo $room_type; ?></td>
        </tr>
        <tr>
            <td>Number of Days:</td>
            <td><?php echo $num_days; ?></td>
        </tr>
        <tr>
            <td>Amount Due:</td>
            <td><?php echo "PhP " . number_format($final_amount, 2); ?></td>
        </tr>
    </table>
</body>
</html>