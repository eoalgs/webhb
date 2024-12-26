<?php
include 'ketnoi.php';

if (isset($_GET['malop'])) {
    $malop = $_GET['malop'];

    $stmt = $conn->prepare("DELETE FROM lophoc WHERE malop = ?");
    $stmt->bind_param("s", $malop);

    if ($stmt->execute()) {
        header("Location: qlhb.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>