<?php
// Connect to the database (replace with your database credentials)
$conn = new mysqli("localhost", "root", "", "innobyte");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (sanitize and escape to prevent SQL injection)
    $username = mysqli_real_escape_string($conn, $username);

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $result = $conn->query($query);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userRole = $row['role'];
    
        // Now you can check the user's role
        if ($userRole === 'admin') {
            
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username; 
            header("Location: /src/douma.php");
            exit();
          
        } elseif ($userRole === 'reception') {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username; 
            header("Location: /src/booking.php");
            exit();
          
        } 
     
        // You can set session variables or redirect the user to another page here
    } else {
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>