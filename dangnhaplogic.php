<?php
session_start();
include 'ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM dangnhap WHERE tendn = ? AND matkhau = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: giaodien.php");
    } else {
        $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng";
        header("Location: dangnhap.php");
    }

    $stmt->close();
    $conn->close();
}
?>