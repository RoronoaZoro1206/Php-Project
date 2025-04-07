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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Services - Cebu City Government</title>
    <link rel="icon" type="image/png" href="Images/Cebu City Icon.png" alt="Cebu City Government Favicon Logo">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <!-- Home Section -->
    <div id="Home" id="back-to-top">
            <!-- Navigation Bar -->
            <nav>
                <!-- Logo of Cebu City Government-->
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
    </div> 

    <section> 
        <div class="container header-text"> 
            <h1>ONLINE SERVICES</h1>
        </div>
    </section>
    <!-- CARDS -->
    <div class="services">
        <!-- Card 1 -->
        <div class="card">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide"><img src="Images/dmdp main.jpg" alt="DMDP Image 1"></div>
                    <div class="swiper-slide"><img src="Images/dmdp image2.webp" alt="DMDP Image 2"></div>
                    <div class="swiper-slide"><img src="Images/dmdp image3.jpg" alt="DMDP Image 3"></div>
                
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="content">
                <h2>Department of Manpower Development & Placement (DMDP)</h2>
                <p>A government agency focused on workforce development, offering skills training, job placement services, and livelihood programs to enhance employment opportunities and support economic growth.</p>
                <div class="button-container">
                    <a href="#modal1" class="buttons1">Read More</a>
                    <a href="#another-link1" class="buttons2">See Service</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="Images/ccdrrmo main.jpg" alt="CCDRRMO Image 1"></div>
                    <div class="swiper-slide"><img src="Images/ccdrrmo image 2.jpg" alt="CCDRRMO Image 2"></div>
                    <div class="swiper-slide"><img src="Images/ccdrrmo image3.jpg" alt="CCDRRMO Image 3"></div>
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="content">
                <h2>Cebu City Disaster Risk Reduction and Management Office (CCDRRMO)</h2>
                <p>A local government office that  ensures disaster preparedness, risk reduction, emergency response, and recovery in Cebu City, focusing on community safety, resilience, and climate change adaptation.</p>
                <div class="button-container">
                    <a href="#modal2" class="buttons1">Read More</a>
                    <a href="#another-link2" class="buttons2">See Service</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="Images/chd image.jpg" alt="CHD Image 1"></div>
                    <div class="swiper-slide"><img src="Images/chd image2.jpg" alt="CHD Image 2"></div>
                    <div class="swiper-slide"><img src="Images/chd image3.png" alt="CHD Image 3"></div>
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="content">
                <h2>City Health Department(CHD)</h2>
                <p>Is responsible for promoting public health by offering services like immunization, disease prevention, sanitation, and health education. It ensures access to quality healthcare, monitors food and water safety, and responds to health emergencies to improve community well-being and safety.</p>
                <div class="button-container">
                    <a href="#modal3" class="buttons1">Read More</a>
                    <a href="#another-link3" class="buttons2">See Service</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="Images/depw image.jpg" alt="DEPW Image 1"></div>
                    <div class="swiper-slide"><img src="Images/depw image2.jpg" alt="DEPW Image 2"></div>
                    <div class="swiper-slide"><img src="Images/depw image3.png" alt="DEPW Image 3"></div>
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="content">
                <h2>Department of Engineering and Public Works(DEPW)</h2>
                <p>Is responsible for planning, constructing, and maintaining public infrastructure such as roads, bridges, drainage systems, and public buildings, ensuring safety, quality, and supporting the city's growth and development.</p>
                <div class="button-container">
                    <a href="#modal4" class="buttons1">Read More</a>
                    <a href="#another-link4" class="buttons2">See Service</a>
                </div>
            </div>
        </div>

    </div>
                                    

                                    <!-- 1. CONTENT OF THE FIRST BUTTON -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal1').style.display='none'">&times;</span>
            <div class="modal-banner">
                <p>
                    <span class="highlighted-sentence">
                        "Dugang Makat-unan, alang sa Disenting Panginabuhian"
                    </span>
                </p>
                <img src="Images/dmdp mission vision.jpg" alt="DMDP Mission and Vision" class="modal-image">
                <img src="Images/dmdp list of services.jpg" alt="DMDP List of Services" class="modal-image">
            </div>
        </div>
    </div>
                                    <!-- 1. CONTENT OF THE SECOND BUTTON -->
    <div id="another-link1" class="modal">
        <div class="modal-content1">
            <span class="close" onclick="document.getElementById('another-link1').style.display='none'">&times;</span>
            <img src="Images/dmdp.jpg" alt="Logo" class="modal-logo">
            <h2>DMDP Services</h2>
            <ol>
                <li> ACCREDITATION OF EMPLOYERS - BUSINESS ESTABLISHMENTS</li>
                <li> ACCREDITATION OF EMPLOYERS - RECRUITMENT AGENCY (LOCAL)</li>
                <li> ACCREDITATION OF EMPLOYERS - OVERSEAS HIRING</li>
                <li> REQUEST FOR TRAINING - LIVELIHOOD TRAINING / SIMPLE TECHNOLOGIES</li>
                <li> REQUEST FOR TRAINING - ENROLLMENT FOR TECHNICAL / VOCATIONAL</li>
                <li> REQUEST FOR ISSUANCE OF CERTIFICATE OF TRAINING</li>
                <li> REQUEST FOR ISSUANCE OF CERTIFICATE OF NO OBJECTION (OVERSEAS)</li>
            </ol>
        </div>
    </div>

                                    <!-- 2. CONTENT OF THE FIRST BUTTON -->
    <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal2').style.display='none'">&times;</span>
                <div class="modal-banner">

                    <img src="Images/reminder and emergency.png" alt="DMDP Mission and Vision" class="modal-image">
                    <img src="Images/ccdrrmo pic one.jpg" alt="DMDP Mission and Vision" class="modal-image">
                    <img src="Images/ccdrrmo pic two.png" alt="DMDP Mission and Vision" class="modal-image">
                    </div>
                </div>
            </div>

                                    <!-- 2. CONTENT OF THE SECOND BUTTON -->
    <div id="another-link2" class="modal">
        <div class="modal-content1">
            <span class="close" onclick="document.getElementById('another-link2').style.display='none'">&times;</span>
            <img src="Images/ccdrrmo.jpg" alt="Logo" class="modal-logo">
            <h2>Cebu City Disaster Risk Riduction and Management Office</h2>
            <ol>
                <li> CUTTING OF HAZARD TREES </li>
                <li> CONDUCT OF TRAINING / DRILL / LECTURE FOR DISASTER PREPAREDNESS </li>
            </ol>
        </div>
    </div>

                                    <!-- 3. CONTENT OF THE FIRST BUTTON -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal3').style.display='none'">&times;</span>
            <div class="modal-banner">
                                                
                <img src="Images/chd m & v.png" alt="DMDP Mission and Vision" class="modal-image">

                                
                </div>
            </div>
        </div>
    
                                    <!-- 3. CONTENT OF THE SECOND BUTTON -->
    <div id="another-link3" class="modal">
        <div class="modal-content1">
            <span class="close" onclick="document.getElementById('another-link3').style.display='none'">&times;</span>
            <img src="Images/chd.jpg" alt="Logo" class="modal-logo">
            <h2>City Health Services</h2>
            <ol>
                <li> SANITARY PERMIT NON-FOOD</li>
                <li> SANITARY PERMIT NON-FOOD RENEWAL</li>
                <li> REQUEST FOR WATER ANALYSIS</li>
                <li> REQUEST FOR SANITARY INSPECTION</li>
            </ol>
        </div>
    </div>

                                            <!-- 4. CONTENT OF THE FIRST BUTTON -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal4').style.display='none'">&times;</span>
            <div class="modal-banner">
                                                
                <img src="Images/depw m and v.png" alt="DMDP Mission and Vision" class="modal-image">
                </div>
            </div>
        </div>

                                    <!-- 4. CONTENT OF THE SECOND BUTTON -->
    <div id="another-link4" class="modal">
        <div class="modal-content1">
            <span class="close" onclick="document.getElementById('another-link4').style.display='none'">&times;</span>
            <img src="Images/depw.jpg" alt="Logo" class="modal-logo">
            <h2>DEPW Services</h2>
            <ol>
                <li> REQUEST FOR ASPHALTING OF ROADS</li>
                <li> REQUEST FOR CONCRETING OF ROADS</li>
                <li> REQUEST FOR DE-CLOGGING OF DRAINAGE CANALS</li>
                <li> REQUEST FOR INSTALLATION OF FOOTPATHS</li>
                <li> REQUEST FOR PATCHING OF POT HOLES</li>
                <li> REQUEST FOR PROVISION OF SURVEY PLAN / PROFILE CROSS-SECTION TO ST</li>
                <li> REQUEST FOR REPLACEMENT OF MANHOLE, CANAL COVERS</li>
                <li> REQUEST FOR RETREADING OF ROADS</li>
            </ol>
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
                <p class="email-id hidden3">cityadmin@cebucity.gov.ph</p>
                <!-- Phone Number -->
                <h6 class="fw-bold fs-7 hidden3">(+632) 411 0100</h6>
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
    
      <!-- SWIPER JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Link to the javascript for additional functionality -->
    <script src="services.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.querySelectorAll('.swiper-container').forEach(swiper => {
            new Swiper(swiper, {
                loop: true,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
    
    <!-- Back to top icon-->
    <a id="back-to-top" href="#"><i class='bx bx-arrow-to-top'></i></a>

</body>
</html>