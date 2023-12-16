<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innobyte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert data into the database
function insertData($conn, $data) {
    $sql = "INSERT INTO booking (first_ame, last_name, phone, id_number, room_type, arrival_date, Departure_date) VALUES ('$data[first_name]', '$data[last_name]','$data[phone]','$data[id_number]','$data[room_type]','$data[arrival_date]','$data[Departure_date]')";
    // Add more columns and values as needed

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Data inserted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
}

// Get the submitted data
$data = json_decode(file_get_contents("php://input"), true);

// If data is successfully inserted into the database
if (isset($data['first_name']) && isset($data['last_name']) && isset($data['phone']) && isset($data['id_number']) && isset($data['room_type']) && isset($data['arrival_date']) && isset($data['Departure_date'])) {
    insertData($conn, $data);
}

// Check for locally stored data
$offlineData = json_decode(file_get_contents('offline_data.json'), true);

if (!empty($offlineData)) {
    foreach ($offlineData as $offlineDatum) {
        insertData($conn, $offlineDatum);
    }

    // Clear locally stored data after successful synchronization
    file_put_contents('offline_data.json', json_encode([]));
}

// Close the database connection
$conn->close();
?>