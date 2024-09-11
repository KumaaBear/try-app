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
    <link rel="stylesheet" href="../../../css/TrackingLogin.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>
   
<body>
    <header class="header">
        <div class="logo-container">
            <img src="../../../media/images/logo.png" alt="PCE-LOGO">
            <h1 class="logo"><a href="#">PCE</a></h1>
        </div>
      <ul class="main-nav">
          <li><a href="../../../index.php" class="active">Dashboard</a></li>
          <li><a href="../../../index.php#second-container">Featured</a></li>
          <li><a href="../../../index.php#third-container">Upcoming</a></li>
          <li><a href="../booking/BookingScreen.php">Booking</a></li>
          <li><a href="TrackingLoginScreen.php">Tracking</a></li>
      </ul>
    </header>
    
    <div class="login-form-container">
        <div class="login-form">
            <h1>admin login</h1>
            <br>

            <form action="TrackingLoginScreen.php" method="post">
                <label for="">Username</label>
                <input type="text" name="Username" placeholder="Type Here" required = ""> <br>

                <label for="">Password</label>
                <input type="password" name="Pass" placeholder="Type Here" required = ""> 

                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
    
    <?php 
        if (isset($_POST['login'])) {
            $Username = $_POST['Username'];
            $Pass = $_POST['Pass'];

            $select = mysqli_query($conn,"SELECT * FROM p_login WHERE Username = '$Username' AND Pass = '$Pass'" );
            $row = mysqli_fetch_array($select);

            if(is_array($row)) { 
                $_SESSION["Username"] = $row ['Username'];
                $_SESSION["Pass"] = $row ['Pass'];            
            } 
            else {
                echo '<script type = "text/javascript">';
                echo 'alert("invalid username or password");';
                echo 'window.location.href = "TrackingLoginScreen.php";';
                echo '</script>';
            }
        }
        if (isset($_SESSION["Username"])) {
            header("Location: TrackingLoginAdminScreen.php");
        }
    ?>
<img src="../../../media/images/login-img.png" class="cover-photo">

</body>
</html>
