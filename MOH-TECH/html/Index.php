<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOH-TECH Official Website</title>
    <link rel="stylesheet" href="/css/Style.css">
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
        <!-- End of Navigation Bar -->

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block " src="/img/phone-repair2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="/img/computer.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block " src="/img/welcome.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

 <!-- Services section -->
 <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">OUR<span> SERVICES</span></h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="/img/computer-repair2.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">COMPUTER/PHONE REPAIR</h5>
                            <p class="card-text">Experience hassle-free tech solutions with our professional computer and phone repair services! At <span>MOH-TECH</span>, ......</p>
                            <a href="/html/services/computer.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="/img/web-design1.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">GRAPHICS/WEB DESIGN</h5>
                            <p class="card-text">In today's digital age, your online presence is more important than ever. Elevate your brand with .....</p>
                            <a href="/html/services/webdesign.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="/img/software-development.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">SOFTWARE/DATABASE</h5>
                            <p class="card-text">In the fast-paced digital world, having the right software and database solutions can make......</p>
                            <a href="/html/services/software.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="/img/networking1.jpg" class="card-img-top" alt="Service 4">
                        <div class="card-body">
                            <h5 class="card-title">NETWORK INSTALLATION</h5>
                            <p class="card-text">In today's interconnected world, a reliable and efficient network infrastructure is essential ...... </p>
                            <a href="/html/services/networking.php" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact">
    <h2>CONTACT<span> US</span></h2>
    <div class="container-contact">
    <form action="process_form.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send email (You would need to configure this with your SMTP settings)
  $to = "your_email@example.com";
  $subject = "New Message from Contact Form";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully. We'll get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
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
    <p><i class="fas fa-map-marker-alt"></i> <a href="https://maps.google.com/?q=123+Main+Street,+City,+Country" target="_blank">30C Thunder Hill, Freetown</a></p>
    <p><i class="fas fa-envelope"></i> <a href="mailto:mohtech66@gmail.com">Email: mohtech66@gmail.com</a></p>
    <p><i class="fas fa-phone"></i> <a href="tel:+23278285912">Phone: +23278285912</a></p>
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
