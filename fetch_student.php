<?php
include 'ketnoi.php'; // Include your database connection file

$mahocsinh = $_GET['mahocsinh'] ?? '';

$stmt = $conn->prepare("SELECT tenhocsinh FROM hocsinh WHERE mahocsinh = ?");
$stmt->bind_param("s", $mahocsinh);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

$stmt_years = $conn->prepare("SELECT manamhoc, tennamhoc, nambatdau, namketthuc FROM qlnamhoc");
$stmt_years->execute();
$result_years = $stmt_years->get_result();

$years = [];
while ($row = $result_years->fetch_assoc()) {
    $years[] = $row;
}

echo json_encode(['student' => $student, 'years' => $years]);

$stmt->close();
$stmt_years->close();
$conn->close();
?>