<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbchallenge";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['user_id'];
$name = $_POST['username'];
$email = $_POST['email'];
$wachtwoord = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE users SET 
username='$name',
email='$email',
password='$wachtwoord'
WHERE user_id='$id'";
if (mysqli_query($conn, $sql)) {
}
$conn->close();
?>