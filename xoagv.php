<?php
include 'ketnoi.php'; 

if (isset($_GET['magv'])) {
    $magv = $_GET['magv'];

    $stmt = $conn->prepare("DELETE FROM giaovien WHERE magv = ?");
    $stmt->bind_param("s", $magv);

    if ($stmt->execute()) {
        header("Location: qlgv.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>