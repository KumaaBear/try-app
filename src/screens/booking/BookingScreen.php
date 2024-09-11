<?php 
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die ('Unable to connect');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="../../../css/Booking.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Booking</title>
</head>
<body>
    <div class="overlay"></div>
    <header class="header">
        <div class="logo-container">
            <img src="../../../media/images/logo.png" alt="PCE-LOGO">
            <h1 class="logo"><a href="#">PCE</a></h1>
        </div>
      <ul class="main-nav">
          <li><a href="../../../index.php" class="active">Dashboard</a></li>
          <li><a href="../../../index.php#second-container">Featured</a></li>
          <li><a href="../../../index.php#third-container">Upcoming</a></li>
          <li><a href="BookingScreen.php">Booking</a></li>
          <li><a href="../tracking/TrackingLoginScreen.php">Tracking</a></li>
      </ul>
    </header>
    
    <div class="booking-container">
       <div class="booking-stage-img-container">
            <img src="../../../media/images/stage-plan.png" class="img-1">
            <img src="../../../media/images/booking-img-seat.png" class="img-2">
       </div>

       <div class="booking-form-container">
            <div class="centered-content">
                <h1>Deftones</h1>
                <p>October 22, 2024 <span>|</span> 8pm <span>|</span> Manila World Center</p>
            </div>

            <div class="booking-content-form">
                <form action="../../../add.inc.php" method="POST">
                    <div>
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Type Here" required>

                        <label for="middle_name">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name" placeholder="Type Here">

                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Type Here" required>

                        <p class="eme">Failure to pay the ticket on the given amount of time will cause your registration to be revoked</p>
                    </div>

                    <div>
                        <label for="seat_type">Seat Type:</label>
                        <select name="seat_type" id="seat_type">
                            <option value="vip-seated">VIP Seated</option>
                            <option value="royalty">Royalty</option>
                            <option value="upper-box">Upper Box</option>
                            <option value="generic-admission">Generic Admission</option>
                        </select>

                        <label for="seat_number">Seat Number:</label>
                        <select name="seat_number" id="seat_number">
                            <option value="207">207</option>
                            <option value="208">208</option>
                            <option value="209">209</option>
                            <option value="210">210</option>
                            <option value="211">211</option>
                            <option value="212">212</option>
                            <option value="213">213</option>
                            <option value="214">214</option>
                            <option value="215">215</option>
                            <option value="216">216</option>
                            <option value="217">217</option>
                            <option value="218">218</option>
                            <option value="219">219</option>
                            <option value="220">220</option>
                            <option value="221">221</option>
                        </select>

                        <label for="payment_method">Select Merchant:</label>
                        <select name="payment_method" id="payment_method" aria-placeholder="payment">
                            <option value="paymaya">PAYMAYA</option>
                            <option value="g-cash">G-CASH</option>
                        </select>
                        <br>
                        <button name="submit">Reserve</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
    
    <img src="../../../media/images/booking-img.png" class="cover-photo">
</body>
</html>
