<?php
include 'ketnoi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $malop = $_POST['malop'];
    $tenlop = $_POST['tenlop'];
    $sohocsinh = $_POST['sohocsinh'];
    $gvcn = $_POST['gvcn'];
    $namhoc = $_POST['namhoc'];

    $stmt = $conn->prepare("INSERT INTO lophoc (malop, tenlop, sohocsinh, tengv, namhoc) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $malop, $tenlop, $sohocsinh, $gvcn, $namhoc);

    if ($stmt->execute()) {
        header("Location: qlhb.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>