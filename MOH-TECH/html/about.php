<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOH-TECH Official Website</title>
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom CSS styles */
    </style>
</head>
<body>
<div class="cover">
        <!-- Email and Phone number section -->
        <div class="contact-info ">
            <div class="container text-center">
                <p class="mb-0"><a href="mailto:mohtech66@gmail.com" class="text-white"><i class="fas fa-envelope"></i> Email: motech66@gmail.com</a></p>
                <p class="mb-0"><a href="tel:+23278285912" class="text-white"><i class="fas fa-phone"></i> Phone: +23232173107</a></p>
            </div> 
        </div>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo"  href="#">
                    <img src="/Logo/new-logo.png" alt="Logo" >
                </a>
                
                <!-- Toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navbar items -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Home, Services, About links -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-items">
                            <a class="nav-link" href="/html/Index.php">Home</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link" href="/html/services/computer/Cbrands/order.php">Order Service</a>
                        </li>
                        <li class="nav-items dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/html/services/computer.php">Computers & Phones</a>
                                <a class="dropdown-item" href="/html/services/webdesign.php">Graphics & Web Design</a>
                                <a class="dropdown-item" href="/html/services/software.php">Software & Database Development</a>
                                <a class="dropdown-item" href="/html/services/networking.php">Networking</a>
                            </div>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link" href="#about" >About</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link" href="#about" >Contact Us</a>
                        </li>
                    </ul>
                    
                    <!-- Login/Signup or Profile button -->
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { ?>
                        <!-- Profile button -->
                        <div class="profile-circle" id="profileBtn"><?php echo strtoupper(substr($_SESSION['email'], 0, 1)); ?></div>
                        <!-- Profile info -->
                        <div class="profile-info" id="profileInfo">
                            <p><?php echo $_SESSION['email']; ?></p>
                            <a href="/html/logs/logout.php" class="logout-btn">Logout</a>
                        </div>
                    <?php } else { ?>
                        <!-- Login/Signup button -->
                        <ul class="navbar-nav">
                            <li class="nav-item login">
                                <a class="nav-link" href="/html/logs/login.php">Login/Signup</a>
                            </li> 
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <!-- End of Navigation Bar -->

<div class="about-us">
    <h2>ABOUT <span>US</span></h2>
        <p>MOH-TECH, short for Mobile Office Handlers-Technicians, is a business initiative conceived by a group of university students in Sierra Leone, West Africa. The primary objective is to address office hardware and software-related issues efficiently. This is achieved by deploying professional IT technicians who operate on a field basis, targeting government institutions, NGOs, private companies, and individuals. 

The initiative offers several benefits to the nation:</p>
<ol>
<li> Employment opportunities: It serves as a hub for IT graduates, providing valuable job opportunities.
<li>Internship platform: New IT graduates can gain practical experience through internships.
<li>Cost-effectiveness: Group work leads to cost savings for customers.
<li>Time efficiency: Division of labor ensures tasks are completed more quickly.
<li>Security and privacy: As a recognized and registered company, MOH-TECH prioritizes security and privacy.
<li>Low risk: Its professional status reduces risks for clients.
<li>Professional advice: Non-IT individuals benefit from expert guidance.
</ol>
<p>Looking ahead, MOH-TECH aims to establish an IT school to train the next generation of IT professionals, providing them with the skills and knowledge needed to excel in the ever-evolving tech industry. Additionally, we aspire to expand our offerings and potentially evolve into a college in the future, further solidifying our commitment to advancing IT education and innovation in Sierra Leone and beyond.
</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Profile button functionality
        document.getElementById('profileBtn').addEventListener('click', function() {
            document.getElementById('profileInfo').classList.toggle('active');
        });
    </script>
</body>
</html