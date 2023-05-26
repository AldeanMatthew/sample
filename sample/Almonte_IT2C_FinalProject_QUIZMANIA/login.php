<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided username and password match the expected values
    if ($username === 'User' && $password === 'password123') {
        // Set user session
        $_SESSION['user_id'] = 1; // You can use any user identifier here
        $_SESSION['username'] = $username;

        // Redirect to index.php after successful login
        header("Location: index.php");
        exit;
    } else {
        // If the login fails, display an error message based on the error type
        if ($username !== 'User' && $password !== 'password123') {
            $error_message = "Invalid username and password";
        } elseif ($username !== 'User') {
            $error_message = "Invalid username";
        } else {
            $error_message = "Invalid password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>QUIZMANIA-Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>QUIZMANIA</h1>
        </div>
        <h1>Login</h1>

        <?php if (isset($error_message)): ?>
            <p><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        window.onload = function () {
            alert("Welcome to QUIZMANIA! Please log in.\nUsername: User Password: password123");
        };
    </script>

</body>
</html>
