<?php
    // Initialize variables to avoid undefined errors
    $guest_name = "";
    $seat_type = "";

    if(isset($_GET['guest_id']))
    {
        $guest_id = $_GET['guest_id'];
        include "migration/connection.php";
        $sql = "SELECT * FROM guest WHERE guest_id = '$guest_id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($query);
        if($result > 0)
        {
            $row = mysqli_fetch_assoc($query);
            $guest_name = $row['guest_name'];
            $seat_type = $row['seat_type'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.inc.php?guest_id=<?php echo $guest_id;?>" method="POST">
        <label for="guest_name">Guest Name:</label><br>
        <input type="text" name="guest_name" id="guest_name" value="<?php echo $guest_name ?>" required><br>
        <label for="seat_type">Seat Type</label><br>
        <select name="seat_type" id="seat_type">
            <option value="vip-seated" <?php if($seat_type == "vip-seated") echo "selected"; ?>>VIP Seated</option>
            <option value="royalty" <?php if($seat_type == "royalty") echo "selected"; ?>>Royalty</option>
            <option value="upper-box" <?php if($seat_type == "upper-box") echo "selected"; ?>>Upper Box</option>
            <option value="generic-admission" <?php if($seat_type == "generic-admission") echo "selected"; ?>>Generic Admission</option>
        </select><br><br>
        <button name="submit">Update Guest</button>
    </form>


    
</body>
</html>
