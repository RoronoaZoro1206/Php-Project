<?php
session_start();


if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Cebu City Government Office">
    <title>About Us - Cebu City Government</title>
    <link rel="icon" type="image/png" href="Images/Cebu City Icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="about-us.css">
</head>

<body>

    <!-- Home Section -->
    <div id="Home" id="back-to-top">
        <div class="container">
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
                        <a href="landing_page.html">Home</a>
                    </li>
                    <li class="hidden3">
                        <a href="services.html">Services</a>
                    </li>
                    <li class="hidden3">
                        <a href="transparency.html">Transparency and Governance</a>
                    </li>
                    <li class="hidden2">
                        <a href="events.html">Events and Announcements</a>
                    </li>
                    <li class="hidden2">
                      <a href="logout.php" class="logout-button">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 
    
    <!-- Main About Us Section -->
    <section class="main-header">
        <div class="overlay hidden"> 
            <h1>About Us</h1>
        </div>
    </section>
    
    <section id="About-Us">
    <div class="container">
        <h2 class="hidden">Mission-Vision Statement</h2> 
        
        <!-- Mission Section -->
        <div class="tab-box hidden"> 
            <h2>Mission</h2>
                <p>Achieving a higher level of economic growth and an environment that is equitable and environmentally sustainable.</p>
            </div>
            
            <!-- Vision Section -->
            <div class="tab-box hidden2"> 
                <h2>Vision</h2>
                <p>Cebu City is a globally competitive and ecologically balanced city where people are safe, healthy, and have equitable opportunities <br>for success and happiness.</p>
            </div>
            
            <!-- EL CREDO DE CIUDAD DE CEBU -->
            <div class="tab-box hidden"> 
                <h2>EL CREDO DE CIUDAD DE CEBU</h2>
                <p>We are one formidable family;</p>
                <p>We have unlimited talents and resources;</p>
                <p>We believe that we can make a difference;</p>
                <p>We can make things happen;</p>
                <p>We need to “push the envelope”;</p>
                <p>We commit to serve with all our hearts, mind, and soul, Amen.</p>
            </div>
            
            <!-- Performance Pledge -->
            <div class="performance-pledge hidden2"> 
                <h2>Performance Pledge</h2>
                <h1><strong>SERVE BEST</strong></h1>
                <p><strong>S</strong>erve promptly, efficiently with utmost courtesy with the intention to serve the ends of truth and justice.</p>
                <p><strong>E</strong>nsure strict adherence by all to the approved Code of Conduct and uphold at all times standards set in discharging our duties and responsibilities.</p>
                <p><strong>R</strong>eaffirm to the public that the City exists to serve our clients, that all of their needs shall be attended to before end of the business day, Mondays to Fridays.</p>
                <p><strong>V</strong>alue every citizen’s comments, suggestions, and needs, including those with special needs such as persons with disabilities, pregnant women, and senior citizens; and.</p>
                <p><strong>E</strong>mpower the public through efficient access to information on our policies, programs, activities, and services through our website (www.cebucity.gov.ph) and the City Public Assistance Center.</p>
                <p><strong>B</strong>elieve unconditionally that in every circumstance, despite contention “there is always a better way”.</p>
                <p><strong>E</strong>liminate discrimination and gender bias attitudes and deal with professional civility by providing service transparently without delays.</p>
                <p><strong>S</strong>incerely understand and value every client’s comments and suggestions, responding to them with expediency through the City’s Complaints and Public Assistance Desk.</p>
                <p><strong>T</strong>ransparent and fair in all transactions while promoting non-tolerance of the culture of corruption.</p>
            </div>
        </div>

</section>

<!-- Mini Footer -->
<div class="tab-box2 mini-footer">
    <p>All these we commit and pledge, because every <strong>Cebuanon</strong> deserves the <strong>BEST</strong> service.</p>
</div>

</section>

<!-- City Officials -->
<div id="Officials">
    <div class="container">
        <h1 class="sub-title text-center hidden">Officials</h1> 

        <!-- Mayor and Vice Mayor Section -->
        <div class="row justify-content-center mb-5">
            <!-- Mayor -->
            <div class="col-12 col-md-6 col-lg-3 hidden"> 
                <div class="card official-card">
                    <img src="Images/mayor.png" class="card-img-top" alt="Mayor Image">
                    <div class="card-body">
                        <h5 class="card-title">Hon. Raymond Alvin Neri Garcia</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Mayor</h6>
                        <p class="card-text">A lawyer, civic leader, and public servant in Cebu City, Philippines.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <a href="https://www.facebook.com/attyraymondgarcia" class="btn btn-primary" target="_blank">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vice Mayor -->
            <div class="col-12 col-md-6 col-lg-3 hidden2"> 
                <div class="card official-card">
                    <img src="Images/v-mayor.png" class="card-img-top" alt="Vice Mayor Image">
                    <div class="card-body">
                        <h5 class="card-title">Hontiveros, Donaldo “Dondon” C.</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Vice Mayor</h6>
                        <p class="card-text">A politician, dedicated to Cebu City Council service.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <a href="https://www.facebook.com/profile.php?id=61553110716735" class="btn btn-primary" target="_blank">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- North District Section -->
<h2 class="text-center hidden">North District</h2>
<div class="row mb-5">
    <!-- Official 1 -->
    <div class="col-12 col-md-6 col-lg-3 hidden">
        <div class="card" style="width: 100%;">
            <img src="Images/nd-1.png" class="card-img-top" alt="North District Official">
            <div class="card-body">
                <h5 class="card-title">Alcover, Pastor, Jr. “Jun” M.</h5>
                <p class="card-text">Advocate for public service and grassroots development in Cebu City.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/junalcoverjr/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 2 -->
    <div class="col-12 col-md-6 col-lg-3 hidden">
        <div class="card" style="width: 100%;">
            <img src="Images/nd-2.png" class="card-img-top" alt="North District Official">
            <div class="card-body">
                <h5 class="card-title">Santos, Mary Ann C. de los</h5>
                <p class="card-text">Focused on health and community welfare programs in Cebu.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/MADcebucitynorth/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 3 -->
    <div class="col-12 col-md-6 col-lg-3 hidden2">
        <div class="card" style="width: 100%;">
            <img src="Images/nd-3.png" class="card-img-top" alt="North District Official">
            <div class="card-body">
                <h5 class="card-title">Labella, Edgardo II “JP” N.</h5>
                <p class="card-text">Dedicated to youth and education in Cebu City.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/edgar.colina.3720/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 4 -->
    <div class="col-12 col-md-6 col-lg-3 hidden2">
        <div class="card" style="width: 100%;">
            <img src="Images/nd-4.png" class="card-img-top" alt="North District Official">
            <div class="card-body">
                <h5 class="card-title">Garganera, Joel C.</h5>
                <p class="card-text">Noted for urban planning and environmental initiatives in Cebu City.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/joelgarganerapanday/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- South District Section -->
<h2 class="text-center hidden">South District</h2>
<div class="row mb-5">
    <!-- Official 1 -->
    <div class="col-12 col-md-6 col-lg-3 hidden2">
        <div class="card" style="width: 100%;">
            <img src="Images/sd-1.png" class="card-img-top" alt="South District Official">
            <div class="card-body">
                <h5 class="card-title">Esparis, Francis I.</h5>
                <p class="card-text">Promoting sustainable community development and governance.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/francisesparis/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 2 -->
    <div class="col-12 col-md-6 col-lg-3 hidden2">
        <div class="card" style="width: 100%;">
            <img src="Images/sd-2.png" class="card-img-top" alt="South District Official">
            <div class="card-body">
                <h5 class="card-title">Cuenco, James Anthony R.</h5>
                <p class="card-text">Focused on legislative reforms and public service.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/jamescuencoofficial/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 3 -->
    <div class="col-12 col-md-6 col-lg-3 hidden">
        <div class="card" style="width: 100%;">
            <img src="Images/sd-3.png" class="card-img-top" alt="South District Official">
            <div class="card-body">
                <h5 class="card-title">Abellanosa, Jose Lorenzo “BJ” R.</h5>
                <p class="card-text">Dedicated to education, youth empowerment, and public welfare.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/bejoseabellanosa/" class="btn btn-primary" target="_blank">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Official 4 -->
    <div class="col-12 col-md-6 col-lg-3 hidden">
        <div class="card" style="width: 100%;">
            <img src="Images/sd-4.png" class="card-img-top" alt="South District Official">
            <div class="card-body">
                <h5 class="card-title">Pesquera, Jocelyn “Joy” G.</h5>
                <p class="card-text">Contributions to health services and women’s empowerment initiatives.</p>
                <div class="d-flex justify-content-center mt-auto">
                    <a href="https://www.facebook.com/attyjoypesquera/" class="btn btn-primary" target="_blank">Visit</a>
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

    <!-- External Scripts -->
    <script src="about-us.js"></script>

    <!-- Back to Top -->
    <a id="back-to-top" href="#"><i class='bx bx-arrow-to-top'></i></a>
</body>

</html>