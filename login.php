<?php
$email =  $_POST['email'];
$password =  $_POST['password'];

$conn = new mysqli("localhost", "root", "", "tests");

if ($conn->connect_error) {
    die('Connection Failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("Insert into registration(email,password) values(?,?)");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
