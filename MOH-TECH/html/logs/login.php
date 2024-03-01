<?php
// Check if the user is already logged in
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Redirect user to homepage if already logged in
    header("Location: /html/index.php");
    exit;
}

$loginError = ""; // Initialize $loginError variable
$passwordErr = ""; // Initialize $passwordErr variable
$emailErr = ""; // Initialize $emailErr variable



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is empty
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Check if password is empty
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    // If there are no validation errors, proceed with login
    if (empty($emailErr) && empty($passwordErr)) {
        // Connect to MySQL database
        $conn = mysqli_connect("localhost", "onbod", "", "mohtech");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare SQL statement
        $sql = "SELECT * FROM users WHERE email = ?";

        // Bind parameters and execute query
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // Fetch user data
            $row = mysqli_fetch_assoc($result);
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Password is correct, set session variables and redirect to dashboard
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("Location:/html/index.php"); // Redirect to dashboard page
                exit;
            } else {
                // Password is incorrect
                $loginError = "Invalid password";
            }
        } else {
            // No user found with the given email
            $loginError = "Invalid email or password";
        }
        

        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOH-TECH Official Website</title>
    <link rel="stylesheet" href="/css/Style.css">
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="cover">
    <!-- Email and Phone number section -->
    <div class="contact-info ">
        <div class="container text-center">
            <p class="mb-0"><a href="mailto:info@example.com" class="text-white"><i class="fas fa-envelope"></i> Email: info@example.com</a></p>
            <p class="mb-0"><a href="tel:+23288054344" class="text-white"><i class="fas fa-phone"></i> Phone: +1234567890</a></p>
        </div> 
    </div>

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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-items dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Order Service
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/html/services/computer.php">Computers-Repair</a>
                            <a class="dropdown-item" href="/html/services/webdesign.php">Phones-Repair</a>
                            <a class="dropdown-item" href="/html/services/software.php">Other-Repairs</a>
                        </div>
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <!-- Login/Signup link -->
                <ul class="navbar-nav">
                    <li class="nav-item login">
                        <a class="nav-link" href="#">Login/Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>

    <div class="login-container">
        <h2>Login</h2>
        <!-- Display login error message -->
        <?php if ($loginError): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $loginError; ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="google-login">
            <button onclick="googleLogin()">
                <i class="fab fa-google"></i> Login with Google
            </button>
        </div>
        <div class="create-account">
            <p>Don't have an account? <a href="signup.php">Create one</a></p>
        </div>
    </div>

    <script>
        function googleLogin() {
            // Replace this with your actual Google login functionality
            alert("Google login clicked.");
        }
    </script>
</body>
</html>
