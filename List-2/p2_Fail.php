<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>
    <!-- Your CSS styling here -->
</head>
<body>
    <div class="container">
        <h2>Login Failed</h2>
        <?php
            // Display the appropriate error message
            $error = $_GET['error'] ?? 'UnknownError';
            if ($error === 'InvalidCredentials') {
                echo '<p>Invalid username or password. Please try again.</p>';
            } else {
                echo '<p>An unknown error occurred. Please try again later.</p>';
            }
        ?>
    </div>
</body>
</html>
