<?php
session_start();


if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Specify the character encoding for the document -->
    <meta charset="UTF-8">

    <!-- Enable responsive design for different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ensure compatibility with Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Define Open Graph title for social media sharing -->
    <meta property="og:title" content="Cebu City Government Office">

    <!-- Set the title of the webpage -->
    <title>Home - Cebu City Government</title>

    <!-- Add favicon for the website (icon in the browser tab) -->
    <link rel="icon" type="image/png" href="Images/Cebu City Icon.png" alt="Cebu City Government Favicon Logo">

    <!-- Import Google Fonts: Poppins in various weights -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Import Boxicons for icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- Import Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Import Bootstrap JS (deferred for non-blocking loading) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="events.css">
</head>
<body>
    <div id="Home">
        <!-- Header -->
        <section class="header hidden">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Events and Announcements</font></font></h1>
                <p class="lead text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stay updated with the latest events and announcements from the Cebu City Government. From community programs to important advisories, this section keeps you informed and engaged. Don't miss out on what's happening in our city</font></font></p>
              </div>
            </div>
        </section>

        <!-- Navigation Bar -->
        <nav>
            <!-- Logo of Cebu City Government -->
            <div class="logo-wrapper">
                <a href="landing_page.html">
                    <!-- Cebu City Icon -->
                    <img src="Images/Cebu City Icon.png" class="logo2 hidden" alt="Cebu City Header Logo">
                </a>
                <a href="landing_page.html">
                    <!-- Cebu City Header -->
                    <img src="Images/Cebu City Header.png" class="logo hidden" alt="Header Logo">
                </a>    
            </div>

            <!-- Hamburger Menu (For Mobile View) -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navigation Links -->
            <ul id="nav-links">
                <li class="hidden">
                    <a href="landing_page.php">Home</a>
                </li>
                <li class="hidden3">
                    <a href="services.php">Services</a>
                </li>
                <li class="hidden3">
                    <a href="transparency.php">Transparency and Governance</a>
                </li>
                <li class="hidden2">
                    <a href="events.php">Events and Announcements</a>
                </li>
                <li class="hidden2">
                    <a href="logout.php" class="logout-button">Logout</a>
                </li>
            </ul>
        </nav>

    <!--Cards-->
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
        <!-- Card 1 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/bg.jpg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">Sinulog Festival</h1>
                <h2 class="h5">Event</h2>
                <p class="card-text" data-full-text="Experience the vibrant energy of Sinulog Festival 2025 in Cebu! Witness colorful parades, captivating performances, and religious devotion, all celebrating the rich cultural heritage of the region. This festival promises an unforgettable blend of tradition, music, and unity!" data-preview-text="Join the celebration of Sinulog Festival 2025 with parades, performances, and cultural festivities that showcase Cebu's heritage.">
                    Join the celebration of Sinulog Festival 2025 with parades, performances, and cultural festivities that showcase Cebu's heritage.
                </p>
                
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/c2.jpeg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">Cebu Tango Festival</h1>
                <h2 class="h5">Event</h2>
                <p class="card-text" data-full-text="Experience the passion and elegance of tango at the 3rd Cebu Tango Festival Don Quijote Cup 2025. Join dancers and enthusiasts from around the world for workshops and competitions. The event will be held at the Waterfront Hotel and Casino from February 14 to 16, 2025." data-preview-text="Join the Cebu Tango Festival 2025 for workshops, performances, and competitions at the Waterfront Hotel and Casino from February 14 to 16!">
                    Join the Cebu Tango Festival 2025 for workshops and competitions at the Waterfront Hotel and Casino from February 14 to 16!
                </p>
                
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/c3.jpeg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">PREX National Convention</h1>
                <h2 class="h5">Event</h2>
                <p class="card-text" data-full-text="Engage in insightful discussions and networking opportunities at the 16th PREX National Convention. This event brings together professionals and experts to share knowledge and experiences. It will take place at the IEC Convention Center Cebu City from February 21 to 23, 2025." data-preview-text="Don't miss the 16th PREX National Convention at the IEC Convention Center Cebu City from February 21 to 23, 2025, with networking opportunities!">
                    Don't miss the 16th PREX National Convention at the IEC Convention Center Cebu City from February 21 to 23, 2025, with networking opportunities!
                </p>
                
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/c5.jpg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">Cebu’s Annual Arts and Crafts</h1>
                <h2 class="h5">Announcement</h2>
                <p class="card-text" data-full-text="Don't miss Cebu’s Annual Arts and Crafts Exhibit, showcasing local talent and craftsmanship! From February 10 to 14, experience handmade goods, stunning artwork, and more at the Cebu City Sports Complex. Perfect for art lovers and collectors!" data-preview-text="Explore local talent at Cebu’s Annual Arts and Crafts Exhibit, February 10-14 at the Cebu City Sports Complex!">
                    Explore local talent at Cebu’s Annual Arts and Crafts Exhibit, February 10-14 at the Cebu City Sports Complex!
                </p>
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/c6.jpeg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">Cebu Food Festival</h1>
                <h2 class="h5">Announcement</h2>
                <p class="card-text" data-full-text="Savor the flavors of Cebu at the Cebu Food Festival 2025! From February 12 to 15, enjoy a variety of local and international dishes at the SM Seaside City Cebu. Don’t miss this celebration of food, culture, and community!" data-preview-text="Join the Cebu Food Festival 2025 from February 12 to 15 at SM Seaside City Cebu and enjoy a wide range of delicious food!">
                    Join the Cebu Food Festival 2025 from February 12 to 15 at SM Seaside City Cebu and enjoy a wide range of delicious food!
                </p>
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 hidden3">
            <div class="card shadow-sm">
            <img src="Images/c7.jpg" class="card-img-top" alt="Thumbnail" width="100%" height="200px">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </img>
            <div class="card-body">
                <h1 class="h4">Cebu Beach and Music</h1>
                <h2 class="h5">Announcement</h2>
                <p class="card-text" data-full-text="Get ready for the Cebu Beach and Music Fest 2025! From February 25 to 28, enjoy an exciting mix of live music, beach activities, and vibrant parties at Mactan Beach. It’s the ultimate beach party experience!" data-preview-text="Join the Cebu Beach and Music Fest 2025 from February 25 to 28 at Mactan Beach for live music, beach activities, and more!">
                    Join the Cebu Beach and Music Fest 2025 from February 25 to 28 at Mactan Beach for live music, beach activities, and more!
                </p>
                
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-secondary read-more-btn">Read More</button>
                <small class="text-body-secondary">9 mins</small>
                </div>
            </div>
            </div>
        </div>
          </div>
        </div>
      </div>

</div>

<!-- Footer Section -->
<footer class="hidden2">
    <div class="row">
        <!-- Column 1: Footer Logo and Description -->
        <div class="col">
            <img src="Images/Cebu City Icon.png" class="logo-footer hidden" alt="Footer Cebu City Government Logo">
            <p class="hidden">Committed to fostering a community of growth and unity, we strive to deliver services with integrity and innovation. Together, we build a brighter future for Cebu City.</p>
        </div>

        <!-- Column 2: Office Information -->
        <div class="col">
            <h3 class="hidden3">
                Office
                <div class="underline"><span></span></div>
            </h3>
            <p class="hidden3">Dr Jose P. Rizal St., Santo Niño</p>
            <p class="hidden3">6000, Cebu City, Cebu, Philippines</p>
            <p class="email-id hidden3">cityadmin@cebucity.gov.ph</p>
            <h6 class="fw-bold fs-7 hidden3">(+632) 411 0100</h6>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="col">
            <h3 class="hidden3">
                Links
                <div class="underline"><span></span></div>
            </h3>
            <ul>
                <li class="hidden3"><a href="landing_page.html">Home</a></li>
                <li class="hidden3"><a href="about-us.html">About Us</a></li>
                <li class="hidden3"><a href="services.html">Services</a></li>
                <li class="hidden3"><a href="contact-us.html">Transparency and Governance</a></li>
                <li class="hidden3"><a href="transparency.html">Events and Announcements</a></li>
                <li class="hidden3"><a href="contact-us.html">Contact Us</a></li>
            </ul>
        </div>

        <!-- Column 4: Newsletter Update -->
        <div class="col">
            <h3 class="hidden2">
                Newsletter
                <div class="underline"><span></span></div>
            </h3>
            <form class="hidden2">
                <i class='bx bx-envelope'></i>
                <input type="email" class="hidden2" placeholder="Enter your email address" required>
                <button type="submit">
                    <i class='bx bxs-right-arrow-alt'></i>
                </button>
            </form>
            <div class="social-icons hidden2">
                <i class='bx bxl-gmail'></i>
                <i class='bx bxl-facebook'></i>
                <i class='bx bxl-instagram-alt'></i>
                <i class='bx bxl-twitter'></i>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright hidden3">&copy; 2024-2025 Cebu City Government. All rights reserved.</p>
</footer>

    <!-- Back-to-Top Button -->
    <a href="#Home" id="back-to-top">
        <i class="bx bx-up-arrow-alt"></i>
    </a>

    <script src="events.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>