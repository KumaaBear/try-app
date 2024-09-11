<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
    <link rel="stylesheet" href="css/Index.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="media/images/logo.png" alt="PCE-LOGO">
            <h1 class="logo"><a href="#">PCE</a></h1>
        </div>
      <div>
        <ul class="main-nav">
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="#second-container">Featured</a></li>
            <li><a href="#third-container">Upcoming</a></li>
            <li><a href="src/screens/booking/BookingScreen.php">Booking</a></li>
            <li><a href="src/screens/tracking/TrackingLoginScreen.php">Tracking</a></li>
        </ul>
      </div>
	</header> 

    <div class="first-container">
        <img src="media/images/first-img.png">

        <div class="first-text-container">
            <h1>philippine <span class="first-span">concert</span> events</h1>
            <p>Get ready to experience the thrill of live music like never before! With our easy-to-use platform, securing your tickets is a breeze. Don't let the music pass you by book your tickets now and get ready to rock the night away!</p>

            <button><a href="">see details</a></button>
        </div>

        <div class="first-overlay"></div>
    </div>

    <div class="second-container" id="second-container">
        <div class="second-text-container">
            <img src="media/images/second-img.png" class="second-img">

            <div class="second-text-content">
                <h1>deftones</h1>
                <p>October 22, 2024 <span>|</span> 8PM <span>|</span> Manila World Trade Center</p>
            </div>

            <div class="second-second-content-container">
                <div class="video-container">
                    <video width="640" height="360" controls autoplay>
                        <source src="media/video/video.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="desc-container">
                    <table>
                        <tr>
                            <th>Genre</th>
                            <td>Their sound has been described as alternative metal, art rock/art metal, experimental rock, shoegaze, nu metal, post-punk, post-hardcore, alternative rock, dream pop, drone rock, post-metal, post-rock, progressive metal, stoner rock, math metal, hard rock, trip hop, glitch, funk metal, and psychedelia.</td>
                            
                        </tr>

                        <tr>
                            <th>Deftones</th>
                            <td>One of the hallmarks of Deftones albums is their use of dynamic contrast, shifting from soft, melodic passages to heavy, aggressive moments. This is exemplified in the way they build and layer different song parts, using quiet-loud dynamics to create an intense, emotional atmosphere.</td>
                        </tr>
                    </table>

                    <div class="btn">
                        <button><a href="src/screens/booking/BookingScreen.php">Reserve Your Ticket Now <i class="fa-solid fa-chevron-right"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="media/images/third-nav.png" id="third-container" class="third-nav">
    <div class="third-container">
        <img src="media/images/third-img.png">

        <div class="third-text-container">
            <h1>up coming events</h1>
        </div>

        <div class="third-overlay"></div>
    </div>

    <footer class="footer-container">
        <div class="footer-left-side-container">
            <h4>Got any concerns?</h4>
            <textarea placeholder="Type Here"></textarea>
        </div>

        <div class="footer-right-side-container">
            <h5><i class="fa-solid fa-location-dot location-icon"></i> Technological Institute of the Philippines Quezon City</h5>
            <h5><i class="fa-solid fa-envelope email-icon"></i> qhgarey@tip.edu.ph</h5>
            <h5><i class="fa-solid fa-phone-volume call-icon"></i> 09123456789</h5>

            <div>
                <img src="media/images/Icon_socmed.png">
            </div>
        </div>
    </footer>
</body>
</html>