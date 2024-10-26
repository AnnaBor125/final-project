<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Спасибо! Для меня важно каждое сообщение!";
} else {
    echo "Ошибка!: " . $sql . "<br>" . $conn->error;
}


$conn->close();