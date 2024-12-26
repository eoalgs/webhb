<?php
include 'ketnoi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mahocsinh = $_POST['mahocsinh'];
    $tenhocsinh = $_POST['tenhocsinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $lophoc = $_POST['lophoc'];
    $gvcn = $_POST['gvcn'];

    $stmt = $conn->prepare("UPDATE hocsinh SET tenhocsinh = ?, ngaysinh = ?, gioitinh = ?, diachi = ?, sodienthoai = ?, tenlop = ?, tengv = ? WHERE mahocsinh = ?");
    $stmt->bind_param("ssssssss", $tenhocsinh, $ngaysinh, $gioitinh, $diachi, $sodienthoai, $lophoc, $gvcn, $mahocsinh);

    if ($stmt->execute()) {
        header("Location: qlhs.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>