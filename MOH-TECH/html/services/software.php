<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOH-TECH Official Website</title>
    <link rel="stylesheet" href="/css/services.css">
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
                            <a class="nav-link" href="/html/about.php" >About</a>
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
<div class="wrap">
    <h2 class="title ">SOFTWARE AND DATABASE<span> DEVELOPMENT</span></h2>
    <div class="image-container">
    <div class="image-wrapper">
        <img src="/img/software-development.jpg" class="card-img" alt="Service 1">
        <h2>SOFTWARE</h2>
    </div>
    <div class="image-wrapper">
        <img src="/img/database.jpg" class="card-img" alt="Service 2">
        <h2>DATABASE</h2>
    </div>
</div>

        <div class="card">
    <div class="card-body">
        <p class="card-text">In the fast-paced digital world, having the right software and database solutions can make all the difference in streamlining your operations and driving business growth. Our team of skilled developers specializes in creating custom software applications and robust database systems to meet your unique needs and propel your business forward.</p>
    </div>
</div>
<div class="container">
    <div class="h2">
        <h2>WHY CHOOSE <span>US?</span></h2>
    </div>
        <div class="list">
            <ul>
                <li><strong>Expertise:</strong>With years of experience in the industry, our team has the knowledge and expertise to tackle even the most complex development challenges. From frontend user interfaces to backend database architecture, we have the skills to bring your vision to life.</li>
                <li><strong>Transparent Communication:</strong> We believe in keeping our clients informed every step of the way. You'll receive clear explanations of the problem and the proposed solution, along with upfront pricing.</li>
                <li><strong>Scalability and Flexibility:</strong> We design our solutions with scalability and flexibility in mind, ensuring that they can grow and adapt along with your business. Whether you're a small startup or a large enterprise, our software and database systems can scale to meet your evolving needs.</li>
                <li><strong>Data Security and Compliance: </strong>We take data security and compliance seriously. Our developers adhere to best practices and industry standards to ensure that your sensitive information remains protected at all times, whether it's stored in your database or transmitted over the internet.</li>
                <li><strong>Transparent Communication:</strong>We believe in keeping our clients informed and involved throughout the development process. You'll receive regular updates, clear explanations of technical concepts, and open lines of communication to address any questions or concerns.</li>
            </ul>
        </div>
        <div class="h2">
        <h2>OUR SERVICES<span> INCLUDE</span></h2>
        </div>
        <ul class="list">
    <li><i class="fas fa-cogs"></i> Custom software development</li>
    <li><i class="fas fa-database"></i> Database design and optimization</li>
    <li><i class="fas fa-exchange-alt"></i> Data migration and integration</li>
    <li><i class="fas fa-cloud"></i> Cloud-based solutions</li>
    <li><i class="fas fa-mobile-alt"></i> Mobile app development</li>
    <li><i class="fas fa-chart-line"></i> Business intelligence and analytics</li>
    <li><i class="fas fa-tools"></i> Ongoing support and maintenance</li>
</ul>
<div class="h2">
<h2>Let's Build Something Exceptional:</h2>
        </div>
        <div class="list">
<p>
Whether you're looking to streamline your internal processes, enhance customer experiences, or gain valuable insights from your data, we're here to help you achieve your goals. Partner with us for innovative software and database solutions that drive success and propel your business to new heights.<br>

Ready to take the next step? Contact us today to discuss your project and discover how we can turn your vision into reality.<br>

Your trusted partner in software and database development.

</p>
        </div>
</div>
</div>
<!-- Footer Section -->
<footer> <div id="about">
<div class="container">
    <div class="about-us">
    <h2>ABOUT <span>US</span></h2>
    <p>We specialize in addressing all office-related hardware and software problems, boasting a team of highly trained and qualified IT technicians available for on-site assistance. Our services are tailored to meet the needs of smaller offices that may struggle to afford an in-house IT technician, as well as larger offices encountering hardware challenges. </p>
    </div>
    <!-- Social media icons -->
    <div class="social-icons">
    <h2>SOCIAL <span>LINKS</span></h2>
        <!-- Icons with names -->
        <a href="078285912"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
    </div>
<div class="footer-contact">
    <h2>CONTACT<span> INFO</Span></h2>
    <!-- Contact information with icons and links -->
    <p><i class="fas fa-map-marker-alt"></i> <a href="https://maps.google.com/?q=123+Main+Street,+City,+Country" target="_blank">123 Main Street, City, Country</a></p>
    <p><i class="fas fa-envelope"></i> <a href="mailto:info@example.com">Email: info@example.com</a></p>
    <p><i class="fas fa-phone"></i> <a href="tel:+23278285912">Phone: +1234567890</a></p>
</div>

        <div class="clearfix"></div>
        <div class="copyright">
            <!-- Copyright text -->
            <p>&copy; 2022 MOH-TECH Official Website. All rights reserved.</p>
        </div>
    </div>
</footer>
    </div>
    </div>

    <!-- Include necessary JavaScript libraries -->
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
</html>
>

