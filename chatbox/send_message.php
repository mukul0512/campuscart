<?php
// Connect to the database and insert the message into the database
// Replace the database connection details with your own
$server = "localhost";
$username = "root";
$password = "";
$database = "campuscart";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

$message = $_POST['message'];

$query = "INSERT INTO messages (sender, text) VALUES ('User', '$message')";
$result = mysqli_query($conn, $query);

$response = ['success' => false];

if ($result) {
    $response['success'] = true;
}

mysqli_close($conn);

// Send the response as a JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
