<?php
include 'ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        session_start();
        $_SESSION['error'] = "Mật khẩu vừa nhập không khớp";
        header("Location: dangky.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM dangnhap WHERE tendn = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['error'] = "Tên đăng nhập đã tồn tại";
        header("Location: dangky.php");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO dangnhap (tendn, matkhau, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);
    if ($stmt->execute()) {
        session_start();
        header("Location: dangnhap.php");
    } else {
        session_start();
        $_SESSION['error'] = "Đăng ký thất bại, vui lòng thử lại";
        header("Location: dangky.php");
    }

    $stmt->close();
    $conn->close();
}
?>