<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

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
    
    <!-- Link to the custom stylesheet for additional styles -->
    <link rel="stylesheet" href="landing_page.css">
</head>


<body>
    <!-- Home Section -->
    <div id="Home" id="back-to-top">

        <!-- Header Section -->
        <div class="header">
            <div class="container">

                <!-- Navigation Bar -->
                <nav>
                    <!-- Logo of Cebu City Government-->
                    <div class="logo-wrapper">
                        <a href="landing_page.php">
                            <!-- Cebu City Icon -->
                            <img src="Images/Cebu City Icon.png" class="logo2 hidden" alt="Cebu City Header Logo">
                        </a>
                        <a href="landing_page.php">
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

                <!-- Video Background -->
                <div class="video-background">
                    <video autoplay loop muted>
                        <source src="Videos/landing page video.mp4" type="video/mp4">
                    </video>
                </div>

                <!-- Header Text Section -->
                <div class="header-text">
                    <h2 class="hidden">Queen City of the South</h2>
                    <h1 class="hidden2">Official Cebu City Government Website</h1>

                    <!-- Buttons -->
                    <div class="btn-box hidden">
                        <a href="about-us.php">About Us</a>
                        <a href="contact-us.php">Contact Us</a>
                    </div>
                </div>

                <!-- Social Media Icons and Links -->
                <div class="home-icons hidden2">
                    <a href="mailto:cityadmin@cebucity.gov.ph" target="_blank">
                        <img src="Images/Gmail.png" alt="Gmail Address">
                    </a>
                    <a href="https://www.facebook.com/cebucity.info" target="_blank">
                        <img src="Images/Facebook.png" alt="Facebook Address">
                    </a>
                    <a href="https://www.instagram.com/cebucitygovernment/" target="_blank">
                        <img src="Images/Instagram.png" alt="Instagram Address">
                    </a>
                    <a href="https://x.com/infocebucity?lang=en" target="_blank">
                        <img src="Images/Twitter.png" alt="Twitter Address">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="container" id="carousel-section">
        <!-- Title Section for the Carousel -->
        <div class="carousel-title hidden2">
            <h2>Cebu City News and Announcements</h2>
        </div>
    
        <!-- Bootstrap Carousel Component -->
        <div id="cebu-city-gov-carousel" class="carousel" data-bs-ride="carousel">
        <div id="carousel-numeric-indicators" class="carousel-numeric-indicators"></div>

            <!-- Carousel Items -->
            <div class="carousel-inner hidden">
                <!-- First Carousel Item -->
                <div class="carousel-item active c-item">
                    <img src="Images/Ched Tdp scholarship by Edu Rama from cebu city government.png" class="d-block w-100 c-img" alt="Scholarship from Ched Tdp by Edu Rama">
                    <div class="carousel-caption d-md-block">
                        <h5>Scholarship from CHED-TDP <br> by Edu Rama</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.facebook.com/EduardoRamaJr/posts/pfbid02rKNFGGcZJkpaUzvQbNQ9M4ndzkKHH8JNFE9tQAMovx18nhWKdchW23UdvQ5BZ3oBl?rdid=HoWlXFzzl76fJZGO" target="_blank">Read More</a>
                    </div>
                </div>
    
                <!-- Second Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/flood victims rescue.png" class="d-block w-100 c-img" alt="Cebu City DRRM remove illegal structures by the Kinalumsan River">
                    <div class="carousel-caption d-md-block">
                        <h5>Cebu city DRRM removes flood-causing structures</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://climatetracker.asia/philippines-flooding-cebu-city-rushes-to-implement-years-old-recommendations/" target="_blank">Read More</a>
                    </div>
                </div>
    
                <!-- Third Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/More barangays get cash aid from City Government.png" class="d-block w-100 c-img" alt="Cash assistance to Barangays of Cebu City">
                    <div class="carousel-caption d-md-block">
                        <h5>Cash assistance to <br> barangays of Cebu City</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://cebucity.news/2022/12/30/more-barangays-get-cash-aid-from-city-government/" target="_blank">Read More</a>
                    </div>
                </div>
    
                <!-- Fourth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/senior citizens cash aid.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Cebu city senior citizens cash aid</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://cebudailynews.inquirer.net/590826/cebu-city-eligible-senior-citizens-to-get-cash-aid-on-sept-7" target="_blank">Read More</a>
                    </div>
                </div>
    
                <!-- Fifth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Solo parents cash aid.png" class="d-block w-100 c-img" alt="Solo parents cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Cebu city solo parents cash aid</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://cebucity.news/2022/12/14/council-to-city-implement-cash-aid-for-solo-parents/7" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Sixth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Malaysia helps cebu city government.jpeg" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Malaysia to help Cebu City government in its infrastructure projects</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://cebudailynews.inquirer.net/623651/malaysia-to-help-cebu-city-government-in-its-infrastructure-projects" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Seventh Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/charter day city hall.jpg" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>P35k charter day gift for City Hall workers: Bonus awaits Comelec nod</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/08/2434401/p35k-charter-day-gift-city-hall-workers-bonus-awaits-comelec-nod" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Eight Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Cashless payment at City Hall soon.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Cashless payment at City Hall soon</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/08/2434383/cashless-payment-city-hall-soon" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Ninth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Comelec bars Serge Osmeña.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>From seeking public office: Comelec bars Serge Osmeña</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/06/2433945/seeking-public-office-comelec-bars-serge-osmea" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Tenth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Fire hits Inayawan anew, 200 homeless.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Fire hits Inayawan anew, 200 homeless</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/06/2433939/fire-hits-inayawan-anew-200-homeless" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Eleventh Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Residents with water problems to get containers.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Residents with water problems to get containers</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/08/2434377/residents-water-problems-get-containers" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Twelfth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Pia slams PhilHealth 18 percent hospital coverage.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Pia slams PhilHealth 18 percent hospital coverage</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/06/2433936/pia-slams-philhealth-18-percent-hospital-coverage" target="_blank">Read More</a>
                    </div>
                </div>

                <!-- Thirteenth Carousel Item -->
                <div class="carousel-item c-item">
                    <img src="Images/Pia slams PhilHealth 18 percent hospital coverage.png" class="d-block w-100 c-img" alt="Senior Citizens cash aid">
                    <div class="carousel-caption d-md-block">
                        <h5>Pia slams PhilHealth 18 percent hospital coverage</h5>
                        <a class="btn btn-primary px-4 py-2 fs-5 mt-2 mb-2" href="https://www.philstar.com/the-freeman/cebu-news/2025/04/06/2433936/pia-slams-philhealth-18-percent-hospital-coverage" target="_blank">Read More</a>
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
                <!-- Logo -->
                <img src="Images/Cebu City Icon.png" class="logo-footer hidden" alt="Footer Cebu City Government Logo">
                <!-- Description -->
                <p class="hidden">
                    Committed to fostering a community of growth and unity, we strive to deliver services with integrity and innovation. 
                    Together, we build a brighter future for Cebu City.
                </p>
            </div>

            <!-- Column 2: Office Information -->
            <div class="col">
                <h3 class="hidden3">
                    Office
                    <div class="underline"><span></span></div>
                </h3>
                <!-- Address -->
                <p class="hidden3">Dr Jose P. Rizal St., Santo Niño</p>
                <p class="hidden3">6000, Cebu City, Cebu, Philippines</p>
                <!-- Email -->
                <p class="email-id hidden3">
                    <a href="mailto:cityadmin@cebucity.gov.ph">cityadmin@cebucity.gov.ph</a>
                </p>
                <!-- Phone Number -->
                <h6 class="fw-bold fs-7 hidden3">
                    <a href="tel:+6324110100">(+632) 411 0100</a>
                </h6>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="col">
                <h3 class="hidden3">
                    Links
                    <div class="underline"><span></span></div>
                </h3>
                <!-- Links List -->
                <ul>
                    <li class="hidden3"><a href="landing_page.html">Home</a></li>
                    <li class="hidden3"><a href="about-us.html">About Us</a></li>
                    <li class="hidden3"><a href="services.html">Services</a></li>
                    <li class="hidden3"><a href="contact-us.html">Transparency and Governance</a></li>
                    <li class="hidden3"><a href="transparency.html">Events and Announcements</a></li>
                    <li class="hidden3"><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 4: Newsletter update -->
            <div class="col">
                <h3 class="hidden2">
                    Newsletter
                    <div class="underline"><span></span></div>
                </h3>
                <!-- Newsletter Form -->
                <form class="hidden2">
                    <!-- Email Input -->
                    <i class='bx bx-envelope'></i>
                    <input type="email" class="hidden2" placeholder="Enter your email address" required>
                    <button type="submit">
                        <i class='bx bxs-right-arrow-alt'></i>
                    </button>
                </form>
                <!-- Social Media Icons -->
                <div class="social-icons hidden2">
                    <i class='bx bxl-gmail'></i>
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bxl-twitter'></i>
                </div>
            </div>
        </div>
        <hr>
        <!-- Footer Copyright -->
        <p class="copyright hidden3">© 2024-2025 Cebu City Government. All rights reserved.</p>
    </footer>
    
    <!-- Link to the javascript for additional functionality -->
    <script src="landing_page.js"></script>

    <!-- Back to top icon-->
    <a id="back-to-top" href="#"><i class='bx bx-arrow-to-top'></i></a>

</body>

</html>
