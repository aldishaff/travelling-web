<?php
require_once 'db_connect.php'; // Include database connection

// Memeriksa koneksi
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Query untuk mengambil data dari tabel destinations
$query = "SELECT * FROM destinations";
$result = $conn->query($query);

$data = array(); // Array untuk menyimpan data

if ($result->num_rows > 0) {
    // Mengambil data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengembalikan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>