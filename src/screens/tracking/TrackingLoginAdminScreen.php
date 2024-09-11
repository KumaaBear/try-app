<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../../../css/TrackingLoginAdmin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>

    <style>
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="../../../media/images/logo.png" alt="PCE-LOGO">
            <h1 class="logo"><a href="#">PCE</a></h1>
        </div>
        <div class="logoutt">
            <ul class="main-nav">
                <li><a href="../../../Logout.php">Logout</a></li>
            </ul>
        </div>
    </header> 

    <div class="login-admin-container">
        <div class="text-admin">
            <h1>track tickets</h1>
        </div>

        <div class="search-container">
            <div class="search-content">
                <h4>Type Here to Search</h4>
                <form action="" method="POST">
                    <input type="text" name="search_data" placeholder="Type Here">
                    <button type="submit" name="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        
        <div class="table-content-container">
            <table>
                <tr>
                    <th>Guest ID</th>
                    <th>Guest Name</th>
                    <th>Seat Type</th>
                    <th>Seat Number</th>
                    <th>Payment Method</th>
                    <th>Date of Registration</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                include "../../../migration/connection.php";
                
                if($conn) {
                    if(isset($_POST['submit'])) {
                        $search_data = $_POST['search_data'];
                        if(empty($search_data)) {
                            // If search input is empty, retrieve all records
                            $sql = "SELECT * FROM guest";
                        } else {
                            // Otherwise, perform the search
                            $sql = "SELECT * FROM guest WHERE guest_id LIKE '%$search_data%' OR guest_name LIKE '%$search_data%' OR seat_type LIKE '%$search_data%' OR seat_number LIKE '%$search_data%' OR payment_method LIKE '%$search_data%' OR reg_date LIKE '%$search_data%'";
                        }
                    } else {
                        // If form is not submitted, retrieve all records
                        $sql = "SELECT * FROM guest";
                    }
                    
                    $query = mysqli_query($conn, $sql);
                    
                    if($query) {
                        $result = mysqli_num_rows($query);
                        if($result > 0)
                        {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                echo '
                                <tr>
                                    <td>'. $row['guest_id'] .'</td>
                                    <td>'. $row['guest_name'] .'</td>
                                    <td>'. $row['seat_type'] .'</td>
                                    <td>'. $row['seat_number'] .'</td>
                                    <td>'. $row['payment_method'] .'</td>
                                    <td>'. $row['reg_date'] .'</td>
                                    <td><a href="../../../edit.php?guest_id='. $row['guest_id'] .'"><i class="fa fa-pencil-square-o edit-icon" aria-hidden="true"></i></a></td>
                                    <td><a href="../../../delete.inc.php?guest_id='. $row['guest_id'] .'"><i class="fa fa-trash trash-icon" aria-hidden="true"></i></a></td>
                                </tr>
                                ';
                            }
                        } else {
                            echo '<tr><td colspan="7">No records found.</td></tr>';
                        }
                    } else {
                        echo '<tr><td colspan="7">Error executing query: ' . mysqli_error($conn) . '</td></tr>';
                    }
                } else {
                    echo '<tr><td colspan="7">Failed to connect to the database: ' . mysqli_connect_error() . '</td></tr>';
                }
                mysqli_close($conn);
                ?>
            </table>
        </div>
    </div>
</body>
</html>
