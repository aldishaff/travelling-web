<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="form-container">
            <div class="form-header">
                <h1>Create Your Account</h1>
                <p>Join us and start your adventure today!</p>
            </div>
            <form action="process_signup.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
                
                <button type="submit" class="btn-submit">Sign Up</button>
            </form>
            <div class="form-footer">
                <p>Already have an account? <a href="sign_in.php">Sign In</a></p>
            </div>
        </div>
    </div>
</body>
</html>
