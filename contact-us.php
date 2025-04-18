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

        <link rel="stylesheet" href="contact-us.css">
    </head>

    <body>
        <!-- Home Section -->
        <div id="Home" id="back-to-top">
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

            <section class="header hidden">
                <div class="row py-lg-5">
                  <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact Us</font></font></h1>
                    <p class="lead text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Got questions or feedback? We're here to help! Reach out to us, and we'll get back to you as soon as possible.</font></font></p>
                  </div>
                </div>
            </section>

            <!-- New Contact Us Section -->
            <div id="Contact-Us">
                <div class="container">
                  <div class="row">
                    <!-- Cebu City Officials Section -->
                    <div class="col-md-6">
                      <h2 class="tab-links">Cebu City Officials</h2>
                      
                      <div class="contact-card hidden3">
                        <h3>MAYOR</h3>
                        <p class="title">ATTY. RAYMOND ALVIN N. GARCIA</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:266-1039">266-1039</a> / <a href="tel:253-2047">253-2047</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>VICE MAYOR</h3>
                        <p class="title">HON. DONALDO C. HONTIVEROS</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:412-1782">412-1782</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>NORTH DISTRICT COUNCILOR</h3>
                        <p class="title">HON. ALVIN M. DIZON</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:266-1035">266-1035</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>NORTH DISTRICT COUNCILOR</h3>
                        <p class="title">HON. JOEL C. GARGANERA</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:254-3521">254-3521</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>SOUTH DISTRICT COUNCILOR</h3>
                        <p class="title">HON. JAMES ANTHONY V. CUENCO</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:266-1355">266-1355</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>SOUTH DISTRICT COUNCILOR</h3>
                        <p class="title">HON. DAVID F. TUMULAK</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:266-1032">266-1032</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>ABC PRESIDENT</h3>
                        <p class="title">HON. FRANKLING O. ONG</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:266-1031">266-1031</a>
                        </p>
                      </div>
                    </div>
              
                    <!-- Head of Offices Section -->
                    <div class="col-md-6">
                      <h2 class="tab-links">Head of Offices</h2>
              
                      <div class="contact-card hidden3">
                        <h3>CCDRRMO</h3>
                        <p class="title">RAQUEL ARCE – OIC</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:316-9767">316-9767</a> / <a href="tel:262-142">262-142</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>DEPW</h3>
                        <p class="title">ENGR. KENNETH CARMELITA M. ENRIQUEZ</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:253-4954">253-4954</a> / <a href="tel:253-4839">253-4839</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>DSWS</h3>
                        <p class="title">DR. EASTER CONCHA – OIC</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:262-9350">262-9350</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>CITY LEGAL</h3>
                        <p class="title">ATTY. EUGENE C. ORBITA</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:239-7260">239-7260</a> / <a href="tel:253-2604">253-2604</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>SCHOLARSHIP</h3>
                        <p class="title">JUDY CONCEPCION Y. NAVARRETTE</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:231-1766">231-1766</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>PROBE</h3>
                        <p class="title">RAQUEL ARCE</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:328-6890">328-6890</a>
                        </p>
                      </div>
              
                      <div class="contact-card hidden3">
                        <h3>COA</h3>
                        <p class="title">ATTY. ARNEL R. PATATAG</p>
                        <p>
                          <i class="icon fa fa-phone"></i>
                          <a href="tel:238-3624">238-3624</a>
                        </p>
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
            <p class="copyright hidden3">&copy; 2024-2025 Cebu City Government. All rights reserved.</p>
        </footer>

        <!-- Back-to-Top Button -->
        <a href="#Home" id="back-to-top">
            <i class="bx bx-up-arrow-alt"></i>
        </a>

        <script src="contact-us.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>