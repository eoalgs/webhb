<?php
include 'ketnoi.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $magv = $_POST['magv'];
    $tengv = $_POST['tengv'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $gioitinh = $_POST['gioitinh'];
    $lopcn = $_POST['lopcn'];
    $moncn = $_POST['moncn'];

    // Insert new teacher into the database
    $stmt = $conn->prepare("INSERT INTO giaovien (magv, tengv, ngaysinh, diachi, sodienthoai, gioitinh, tenlop, moncn) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $magv, $tengv, $ngaysinh, $diachi, $sodienthoai, $gioitinh, $lopcn, $moncn);

    if ($stmt->execute()) {
        header("Location: qlgv.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>