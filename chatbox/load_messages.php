<?php
// Connect to the database and retrieve messages from the database
// Replace the database connection details with your own
$server = "localhost";
$username = "root";
$password = "";
$database = "campuscart";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM messages";
$result = mysqli_query($conn, $query);

$messages = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $messages[] = [
            'sender' => $row['sender'],
            'text' => $row['text']
        ];
    }

    mysqli_free_result($result);
}

mysqli_close($conn);

// Send the messages as a JSON response
header('Content-Type: application/json');
echo json_encode(['success' => true, 'messages' => $messages]);
?>
