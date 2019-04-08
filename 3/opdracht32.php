<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbchallenge";


$name = $_POST['username'];
$email = $_POST['email'];
$wachtwoord = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, email, password) VALUES ('$name','$email','$wachtwoord')";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>