<?php
include 'ketnoi.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $malop = $_POST['malop'];
    $tenlop = $_POST['tenlop'];
    $sohocsinh = $_POST['sohocsinh'];
    $gvcn = $_POST['gvcn'];
    $namhoc = $_POST['namhoc'];

    // Update the class in the database
    $stmt = $conn->prepare("UPDATE lophoc SET tenlop = ?, sohocsinh = ?, tengv = ?, namhoc = ? WHERE malop = ?");
    $stmt->bind_param("sisss", $tenlop, $sohocsinh, $gvcn, $namhoc, $malop);

    if ($stmt->execute()) {
        header("Location: qlhb.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>