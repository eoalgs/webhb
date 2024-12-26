<?php
include 'ketnoi.php'; // Include your database connection file

$stmt = $conn->prepare("SELECT manamhoc, tennamhoc, nambatdau, namketthuc FROM qlnamhoc");
$stmt->execute();
$result = $stmt->get_result();

$years = [];
while ($row = $result->fetch_assoc()) {
    $years[] = $row;
}

echo json_encode(['years' => $years]);

$stmt->close();
$conn->close();
?>