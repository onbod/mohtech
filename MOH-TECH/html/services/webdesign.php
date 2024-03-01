
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
    <h2 class="title ">GRAPHIC AND WEB<span> DESIGN</span></h2>
    <div class="image-container">
    <div class="image-wrapper">
        <img src="/img/graphic1.jpg" class="card-img" alt="Service 1">
        <h2>GRAPHIC</h2>
    </div>
    <div class="image-wrapper">
        <img src="/img/graphic2.jpg" class="card-img" alt="Service 2">
        <h2>DESIGN</h2>
    </div>
    <div class="image-wrapper">
        <img src="/img/web-design1.jpg" class="card-img" alt="Service 3">
        <h2>WEBSITE</h2>
    </div>
    <div class="image-wrapper">
        <img src="/img/graphic3.jpg" class="card-img" alt="Service 4">
        <h2>DESIGN</h2>
    </div>
</div>

  <div class="card">
    <div class="card-body">
        <p class="card-text">In today's digital age, your online presence is more important than ever. Elevate your brand with captivating graphics and a stunning website that leaves a lasting impression. Our team of talented designers is here to bring your vision to life and help you stand out in the digital landscape.</p>
    </div>
</div>
<div class="container">
    <div class="h2">
        <h2>WHY CHOOSE <span>US?</span></h2>
    </div>
        <div class="list">
            <ul>
                <li><strong>Innovative Design</strong> We specialize in creating visually striking designs that captivate your audience and convey your brand's unique identity. Whether you need a logo, branding materials, or website design, we'll craft a solution tailored to your needs.</li>
                <li><strong>User-Centric Approach: </strong>We prioritize the user experience, ensuring that your website not only looks amazing but also functions seamlessly across all devices. From intuitive navigation to responsive layouts, we design with your audience in mind.</li>
                <li><strong>Timely Delivery:</strong>We understand the importance of deadlines. Our streamlined design process and efficient workflow allow us to deliver high-quality results within the agreed-upon timeframe, without compromising on creativity or attention to detail.</li>
                <li><strong>Support and Maintenance:</strong> Our commitment to your success doesn't end with the delivery of the final product. We provide ongoing support and maintenance services to ensure your website remains up-to-date, secure, and optimized for performance.</li>
            </ul>
        </div>
        <div class="h2">
        <h2>OUR SERVICES<span> INCLUDE</span></h2>
        </div>
        <ul class="list">
            <li><i class="fas fa-desktop"></i> Custom website design and development</li>
            <li><i class="fas fa-paint-brush"></i> Logo and branding design</li>
            <li><i class="fas fa-image"></i> Graphic design for digital and print materials</li>
            <li><i class="fas fa-desktop"></i> UI/UX design</li>
            <li><i class="fas fa-shopping-cart"></i> E-commerce solutions</li>
            <li><i class="fas fa-search"></i> Search engine optimization (SEO)</li>
            <li><i class="fas fa-cogs"></i> Website maintenance and updates</li>
        </ul>

        <div class="h2">
        <h2>Let's Bring Your Vision to Life:</h2>
        </div>
        <div class="list">
        <p>
        Whether you're launching a new brand, refreshing your online presence, or expanding your reach, we're here to help you succeed. With our expertise in graphics and web design, we'll create a visually stunning and user-friendly experience that sets you apart from the competition.<br>

Ready to take your brand to the next level? Contact us today to discuss your project and let's start building something extraordinary together.<br>

Your creative partner in graphics and web design.
        </p>
        </div>
        </div>
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

