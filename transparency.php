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
    <!-- Specify the character encoding for the document -->
    <meta charset="UTF-8">
    
    <!-- Enable responsive design for different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Ensure compatibility with Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Define Open Graph title for social media sharing -->
    <meta property="og:title" content="Cebu City Government Office">
    
    <!-- Set the title of the webpage -->
    <title>Transparency and Governance - Cebu City Government</title>
    
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
    <link rel="stylesheet" href="transparency.css">
</head>

<body>
    <!-- Home Section -->
    <div id="Home" id="back-to-top">
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
        </div>
    </div> 
    <!-- Search Bar Section -->
    <header class="main-header">
        <div class="overlay">
            <h1>TRANSPARENCY AND GOVERNANCE</h1>
            <input type="text" id="searchInput" class="form-control hidden3" placeholder="Search by card title..." />
        </div>
    </header>
        

    <!-- Manpower Complement Section -->
    <div class="container additional">
        <h1 class="card-header hidden">Manpower Complements</h1>
        <div class="row g-4" id="cardContainer"> 
            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/manpower complement 2024.png" class="card-img-top" alt="PDF File for Manpower Complement 2024 3rd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">MANPOWER COMPLEMENT 2024 (3RD QUARTER)</h5>
                        <p class="card-text">Respectfully transmitting a copy of the 2024, 3rd Quarter Financial Reports for posting as per DILG requirement.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal1" data-pdf-src="PDF/MANPOWER-COMPLEMENT-2024-3RD-QUARTER.pdf">
                                See More
                            </button>                     
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/manpower complement 2023.png" class="card-img-top" alt="PDF File for Manpower Complement 2023 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">MANPOWER COMPLEMENT 2023 (2ND QUARTER)</h5>
                        <p class="card-text">Respectfully transmitting a copy of the 2023, 2nd Quarter Financial Reports for posting as per DILG requirement.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal2" data-pdf-src="PDF/MANPOWER-COMPLEMENT-2023-2ND-QUARTER.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/manpower complement 2022.png" class="card-img-top-2" alt="PDF File for Manpower Complement 2023 1st Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">MANPOWER COMPLEMENT 2023 (1ST QUARTER)</h5>
                        <p class="card-text">Respectfully transmitting a copy of the 2023, 1st Quarter Financial Reports for posting as per DILG requirement.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal3" data-pdf-src="PDF/MANPOWER COMPLEMENT BUDGET-2023-1ST QUARTER.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/manpower complement 2022 2nd quarter.png" class="card-img-top" alt="PDF File for Manpower Complement 2022 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">MANPOWER COMPLEMENT 2022 (2ND QUARTER)</h5>
                        <p class="card-text">Respectfully transmitting a copy of the 2022, 2ND Quarter Financial Reports for posting as per DILG requirement.</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal4" data-pdf-src="PDF/MANPOWER-COMPLEMENT-2ND-QUARTER-2022.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial Reports Section -->
    <div class="container">
        <h1 class="card-header hidden2">Financial Reports</h1>
        <div class="row g-4" id="cardContainer"> 
            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden2">
                    <img src="Images/Financial Report 2024 2nd-quarter.jpg" class="card-img-top" alt="PDF File for Financial Reports 2024 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">FINANCIAL REPORTS 2024 (2ND QUARTER)</h5>
                        <p class="card-text">FDP Form No. 9 – Statement of Cash Flows FDP Form No. 12 – Unliquidated Cash Advances FDP Form No. 8 – LDRRM Fund Utilization FDP Form No. 6 – continue reading : 2024 – Q2 FINANCIAL REPORTS</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal5" data-pdf-src="PDF/2024-Q2 FINANCIAL REPORTS.pdf">
                                See More
                            </button>                     
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card modify hidden2">
                    <img src="Images/Financial Report 2023 2nd-quarter.jpg" class="card-img-top" alt="PDF File for Financial Reports 2023 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">FINANCIAL REPORTS 2023 (2ND QUARTER)</h5>
                        <p class="card-text">Attached herein are the 2nd Quarter of 2023 DILG Reports of the Cebu City Government  2Q – CONSOLIDATED QUARTERLY REPORT (TFU) 2Q – LOCAL DRRM FUND continue reading : 2023 – Q2 FINANCIAL REPORTS</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal6" data-pdf-src="PDF/2023-2ND QUARTER FINANCIAL REPORTS.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden2">
                    <img src="Images/Financial Report 2022 4th-quarter.jpg" class="card-img-top" alt="PDF File for Manpower Complement 2022 4th Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">FINANCIAL REPORTS 2022 (4TH QUARTER)</h5>
                        <p class="card-text">4th Quarter of 2022 DILG Reports of the Cebu City Government 4Q Cash Statement 4Q Unliquidated Cash Advances 4Q LDRRM Fund Utilization continue reading : 2022 – 4th Quarter Financial Reports</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal7" data-pdf-src="PDF/2022-4th Quarter Financial Reports.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden2">
                    <img src="Images/Financial Report 2022 2nd-quarter.jpg" class="card-img-top" alt="PDF File for Manpower Complement 2022 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">FINANCIAL REPORTS 2022 (2ND QUARTER)</h5>
                        <p class="card-text">FDP Form 9 – Statement of Cash Flows FDP Form 12 – Unliquidated Cash Advances FDP Form 8 – LDRRM Fund Utilization FDP Form 6 – Trust Fund  continue reading : 2022 – 2nd Quarter Financial Reports </p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal8" data-pdf-src="PDF/2022 – 2nd Quarter Financial Reports.pdf">
                                See More
                            </button>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Reports Section -->
    <div class="container">
        <h1 class="card-header hidden">Other Reports</h1>
        <div class="row g-4" id="cardContainer"> 
            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/SBB for Carnival and Circus Bidding.png" class="card-img-top" alt="PDF File for Financial Reports 2024 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">Structural Budget Balance for Carnival and Circus Bidding 2024</h5>
                        <p class="card-text">For Fun Rides, For Circus Performance Affidavit of Undertaking - Circus</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal9" data-pdf-src="PDF/FUN-RIDES-AND-CARNIVAL-VER.4.pdf">
                                See More
                            </button>                     
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/Carnival and Circus bidding.png" class="card-img-top" alt="PDF File for Financial Reports 2023 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">Fun Carnival Activities and Circus bidding 2024</h5>
                        <p class="card-text">Fun Rides, Circus Extravaganza and Carnival Performance Circus For Cebu City Citizens</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal10" data-pdf-src="PDF/PERFORMANCIRCUS-VER.-2.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/Statement of Indebtedness Payments and Balances (SIPB) – Q3.png" class="card-img-top" alt="PDF File for Manpower Complement 2022 4th Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">Statement of Indebtedness Payments and Balances 2024</h5>
                        <p class="card-text">Summary of outstanding debts, payments made, and remaining balances</p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal11" data-pdf-src="PDF/Statement of Indebtedness Payments and Balances (SIPB) – Q3.pdf">
                                See More
                            </button>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 card-item"> 
                <div class="card hidden">
                    <img src="Images/Ccmc logo.png" class="card-img-top" alt="PDF File for Manpower Complement 2022 2nd Quarter">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title" style="border-top: 2px solid #000000; padding-top: 10px; text-align: center;">CCMC – Rate of Services</h5>
                        <p class="card-text">This outlines the fees and charges for various medical and healthcare services provided by the Cebu City Medical Center. </p>
                        <div class="d-flex justify-content-center mt-auto">
                            <button type="button" class="btn btn-primary open-pdf-modal" data-bs-toggle="modal" 
                                data-bs-target="#pdfModal12" data-pdf-src="PDF/CCMC – Rate of Services.pdf">
                                See More
                            </button>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container"></div>
        
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

    <!-- PDF Modal 1 -->
    <div class="modal fade" id="pdfModal1" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/MANPOWER-COMPLEMENT-2024-3RD-QUARTER.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/MANPOWER-COMPLEMENT-2024-3RD-QUARTER.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- PDF Modal 2 -->
    <div class="modal fade" id="pdfModal2" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/MANPOWER-COMPLEMENT-2023-2ND-QUARTER.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/MANPOWER-COMPLEMENT-2023-2ND-QUARTER.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- PDF Modal 3 -->
    <div class="modal fade" id="pdfModal3" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/MANPOWER COMPLEMENT BUDGET-2023-1ST QUARTER.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/MANPOWER COMPLEMENT BUDGET-2023-1ST QUARTER.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 4 -->
    <div class="modal fade" id="pdfModal4" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/MANPOWER-COMPLEMENT-2ND-QUARTER-2022.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/MANPOWER-COMPLEMENT-2ND-QUARTER-2022.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 5 -->
    <div class="modal fade" id="pdfModal5" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/2024-Q2 FINANCIAL REPORTS.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/2024-Q2 FINANCIAL REPORTS.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 6 -->
    <div class="modal fade" id="pdfModal6" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/2023-2ND QUARTER FINANCIAL REPORTS.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/2023-2ND QUARTER FINANCIAL REPORTS.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 7 -->
    <div class="modal fade" id="pdfModal7" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/2022-4th Quarter Financial Reports.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/2022-4th Quarter Financial Reports.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 8 -->
    <div class="modal fade" id="pdfModal8" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/2022 – 2nd Quarter Financial Reports.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/2022 – 2nd Quarter Financial Reports.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 9 -->
    <div class="modal fade" id="pdfModal9" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/FUN-RIDES-AND-CARNIVAL-VER.4.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/FUN-RIDES-AND-CARNIVAL-VER.4.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 10 -->
    <div class="modal fade" id="pdfModal10" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/PERFORMANCIRCUS-VER.-2.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/PERFORMANCIRCUS-VER.-2.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 11 -->
    <div class="modal fade" id="pdfModal11" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/Statement of Indebtedness Payments and Balances (SIPB) – Q3.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/Statement of Indebtedness Payments and Balances (SIPB) – Q3.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 12 -->
    <div class="modal fade" id="pdfModal12" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 85%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="pdfModalLabel">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- PDF Preview -->
                    <iframe id="pdfPreview" src="PDF/CCMC – Rate of Services.pdf" width="100%" height="700px" style="border: none;"></iframe>
                </div>
                <div class="modal-footer">
                    <!-- Download Button -->
                    <a id="downloadPdfLink" href="PDF/CCMC – Rate of Services.pdf" class="btn btn-primary" download>Download PDF</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="transparency.js"></script>

    <a id="back-to-top" href="#"><i class='bx bx-arrow-to-top'></i></a>


</body>

</html>