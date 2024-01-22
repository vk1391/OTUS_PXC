<?php
$dbServerName = "192.168.56.208:6033";
$dbUsername = "sbuser";
$dbPassword = "password";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = 'CREATE database OTUS;';
$result = mysqli_query($conn, $sql);
if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
else {
      $sql = "SHOW DATABASES;";
      $result = mysqli_query($conn, $sql);
}
?>
