<?php
include 'ketnoi.php';

// Fetch namhoc information from lophoc table
$stmt = $conn->prepare("SELECT DISTINCT namhoc FROM lophoc");
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $namhoc = $row['namhoc'];
    $nambatdau = (int)substr($namhoc, 0, 4);
    $namketthuc = (int)substr($namhoc, 5, 4);

    // Check if the namhoc already exists in qlnamhoc table
    $stmt_check = $conn->prepare("SELECT * FROM qlnamhoc WHERE nambatdau = ? AND namketthuc = ?");
    $stmt_check->bind_param("ii", $nambatdau, $namketthuc);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Update existing record
        $stmt_update = $conn->prepare("UPDATE qlnamhoc SET tennamhoc = ? WHERE nambatdau = ? AND namketthuc = ?");
        $tennamhoc = "Năm học: $nambatdau - $namketthuc";
        $stmt_update->bind_param("sii", $tennamhoc, $nambatdau, $namketthuc);
        $stmt_update->execute();
        $stmt_update->close();
    } else {
        // Insert new record
        $stmt_insert = $conn->prepare("INSERT INTO qlnamhoc (tennamhoc, nambatdau, namketthuc) VALUES (?, ?, ?)");
        $tennamhoc = "Năm học: $nambatdau - $namketthuc";
        $stmt_insert->bind_param("sii", $tennamhoc, $nambatdau, $namketthuc);
        $stmt_insert->execute();
        $stmt_insert->close();
    }

    $stmt_check->close();
}

$stmt->close();
$conn->close();

echo "Cập nhật thông tin năm học thành công.";
?>