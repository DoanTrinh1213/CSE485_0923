


<?php
$servername = "localhost"; // Tên máy chủ MySQL
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$database = "qlsinhvien"; // Tên cơ sở dữ liệu MySQL

// Kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

echo "Kết nối thành công!";
?>