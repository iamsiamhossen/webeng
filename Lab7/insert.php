<?php
$host = "localhost";  
$user = "root";       
$password = "";       
$db = "student_db";   

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$roll = $_POST['roll'];
$address = $_POST['address'];

$sql = "INSERT INTO students (name, roll, address) VALUES ('$name', '$roll', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "Student information saved successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
