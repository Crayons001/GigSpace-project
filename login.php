<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "gigspace_db";

// Establish a connection to the database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the submitted email and password
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform input validation and security measures
    $email = strip_tags($email);
    $password = strip_tags($password);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Prepare and execute a query to check if the email and password are valid
    $stmt = $conn->prepare("SELECT * FROM accounts WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful
        // Perform necessary actions (e.g., session management, redirecting to a dashboard page, etc.)
        //echo "Login successful!";
        $stmt = $conn->prepare("SELECT role FROM accounts WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_assoc();
        if ($result['role'] == 'P') {
            header("Location: profile.php");
        }
        elseif ($result['role'] == 'C'){
            header("Location: client_profile.php");
        }
        //header("Location: profile.php");
    } else {
        // Login failed
        header("Location: login.html?error=1");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
