<?php
$conn = mysqli_connect('localhost', 'root', '', 'btth02_1');

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

echo "Kết nối thành công!";