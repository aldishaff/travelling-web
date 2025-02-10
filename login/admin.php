<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: sign_in.php"); // Jika tidak login, alihkan ke halaman sign-in
    exit();
}

echo "Welcome, " . $_SESSION['username']; // Tampilkan username

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - CRUD</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-container">
        <h1>Admin Dashboard</h1>
        <a href="logout.php">Logout</a>

        <h2>Manage Popular Destinations</h2>
        <!-- CRUD for Popular Destinations -->
        <form action="process_popular_destinations.php" method="POST">
            <input type="text" name="name" placeholder="Destination Name" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="file" name="image" required>
            <button type="submit">Add Destination</button>
        </form>

        <h2>Manage Featured Tours</h2>
        <!-- CRUD for Featured Tours -->
        <form action="process_featured_tours.php" method="POST">
            <input type="text" name="tour_name" placeholder="Tour Name" required>
            <textarea name="tour_details" placeholder="Tour Details" required></textarea>
            <input type="file" name="image" required>
            <button type="submit">Add Tour</button>
        </form>
    </div>
</body>
</html>
