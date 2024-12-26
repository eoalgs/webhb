<?php
include 'ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $magv = $_POST['magv'];
    $tengv = $_POST['tengv'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $gioitinh = $_POST['gioitinh'];
    $lopcn = $_POST['lopcn'];
    $moncn = $_POST['moncn'];

    $stmt = $conn->prepare("UPDATE giaovien SET tengv = ?, ngaysinh = ?, diachi = ?, sodienthoai = ?, gioitinh = ?, tenlop = ?, moncn = ? WHERE magv = ?");
    $stmt->bind_param("ssssssss", $tengv, $ngaysinh, $diachi, $sodienthoai, $gioitinh, $lopcn, $moncn, $magv);

    if ($stmt->execute()) {
        header("Location: qlgv.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>