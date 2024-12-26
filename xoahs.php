<?php
include 'ketnoi.php';

if (isset($_GET['mahocsinh'])) {
    $mahocsinh = $_GET['mahocsinh'];

    $stmt = $conn->prepare("DELETE FROM hocsinh WHERE mahocsinh = ?");
    $stmt->bind_param("s", $mahocsinh);

    if ($stmt->execute()) {
        header("Location: qlhs.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>