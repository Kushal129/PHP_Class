<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform validation (you can add more sophisticated validation here if needed)
    if ($username === 'Admin' && $password === 'Admin') {
        // If username and password are correct, redirect to Success.php
        header('Location: p2_Success.php');
        exit;
    } else {
        // If username and/or password are incorrect, redirect to Fail.php with an error message
        header('Location: p2_Fail.php?error=InvalidCredentials');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Your CSS styling here -->
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
