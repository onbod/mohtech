<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header("Location: /html/login.php");
    exit;
}

// Initialize variables to store error messages
$currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";
$passwordChanged = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate current password
    if (empty($_POST["current_password"])) {
        $currentPasswordErr = "Current password is required";
    } else {
        $currentPassword = $_POST["current_password"];
        // Check current password against the one stored in the session or database
        // This is just a placeholder, replace it with your actual password validation logic
        if ($currentPassword !== $_SESSION['password']) {
            $currentPasswordErr = "Incorrect current password";
        }
    }

    // Validate new password
    if (empty($_POST["new_password"])) {
        $newPasswordErr = "New password is required";
    } else {
        $newPassword = $_POST["new_password"];
        // Add your password complexity validation logic here
    }

    // Validate confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Please confirm new password";
    } else {
        $confirmPassword = $_POST["confirm_password"];
        if ($confirmPassword !== $newPassword) {
            $confirmPasswordErr = "Passwords do not match";
        }
    }

    // If there are no validation errors, proceed with password change
    if (empty($currentPasswordErr) && empty($newPasswordErr) && empty($confirmPasswordErr)) {
        // Update password in the session or database
        // This is just a placeholder, replace it with your actual password update logic
        $_SESSION['password'] = $newPassword; // Update password in the session
        
        // Your code to update password in the database goes here
        
        // Password changed successfully message
        $passwordChanged = "Password changed successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Add your CSS links here -->
</head>
<body>
    <h2>Change Password</h2>
    <!-- Display password change success message -->
    <?php if ($passwordChanged): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $passwordChanged; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required>
            <span class="error"><?php echo $currentPasswordErr; ?></span>
        </div>
        <div class="form-group">
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <span class="error"><?php echo $newPasswordErr; ?></span>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <span class="error"><?php echo $confirmPasswordErr; ?></span>
        </div>
        <div class="form-group">
            <button type="submit">Change Password</button>
        </div>
    </form>
    <!-- Add your JavaScript code here -->
</body>
</html>
