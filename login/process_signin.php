<?php
session_start();

// Assuming you have a file for database connection like db_connect.php
require_once 'db_connect.php';  // Include your database connection file here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example query to check if the user exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);  // Prepare the query

    if ($stmt === false) {
        // If the query preparation fails, output an error and exit
        die('Error preparing the query: ' . $conn->error);
    }

    $stmt->bind_param("s", $email);  // Bind the email parameter
    $stmt->execute();  // Execute the query
    $result = $stmt->get_result();  // Get the result of the query
    
    if ($result->num_rows > 0) {
        // User exists, now check password
        $user = $result->fetch_assoc();
        
        // Verify the password (assuming hashed passwords)
        if (password_verify($password, $user['password'])) {
            // Password is correct, start session and redirect to admin page
            $_SESSION['username'] = $user['username'];  // Store username in session
            $_SESSION['user_id'] = $user['id'];  // Store user ID in session (optional)
            
            // Redirect to admin page
            header("Location: admin.php");
            exit(); // Always call exit after header redirect
        } else {
            // Password is incorrect
            echo "<p>Invalid credentials. Please try again.</p>";
        }
    } else {
        // User not found
        echo "<p>No user found with this email.</p>";
    }
}
?>
