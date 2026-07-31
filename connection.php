<?php

$server = "localhost";
$username  = "root";
$password = "";
$db_name = "webcoding";

$conn = new mysqli($server, $username, $password, $db_name);

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!$conn) {
    echo "Not connected!";
} else {
    echo "Connected to the database!";
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, password) VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $email, $password);

$stmt->execute();
