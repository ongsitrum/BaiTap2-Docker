<?php
$servername = "db"; // Tên service trong docker-compose
$username = "user";
$password = "password";
$dbname = "testdb";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra
if ($conn->connect_error) {
  die("Ket noi That bai: " . $conn->connect_error);
}
echo "<h1>Chuc mung! PHP da ket noi thanh cong voi MySQL qua Docker!</h1>";
?>
