<?php
include 'ketnoi.php';

$mahocsinh = $_GET['mahocsinh'] ?? '';
$yearSelect = $_GET['yearSelect'] ?? '';

$data = [
    'semester1' => [],
    'semester2' => [],
    'semester3' => [],
    'semester4' => [],
    'semester5' => [],
    'semester6' => []
];

if ($mahocsinh && $yearSelect) {
    // Fetch data for semester 1
    $stmt1 = $conn->prepare("SELECT * FROM qlhocba WHERE mahocsinh = ? AND namhoc = ?");
    $stmt1->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    if ($result1->num_rows > 0) {
        $data['semester1'] = $result1->fetch_assoc();
    }
    $stmt1->close();

    // Fetch data for semester 2
    $stmt2 = $conn->prepare("SELECT * FROM qlhocbak2 WHERE mahocsinh = ? AND namhoc = ?");
    $stmt2->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    if ($result2->num_rows > 0) {
        $data['semester2'] = $result2->fetch_assoc();
    }
    $stmt2->close();

    // Fetch data for semester 3
    $stmt3 = $conn->prepare("SELECT * FROM qlhocba3 WHERE mahocsinh = ? AND namhoc = ?");
    $stmt3->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    if ($result3->num_rows > 0) {
        $data['semester3'] = $result3->fetch_assoc();
    }
    $stmt3->close();

    // Fetch data for semester 4
    $stmt4 = $conn->prepare("SELECT * FROM qlhocba4 WHERE mahocsinh = ? AND namhoc = ?");
    $stmt4->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt4->execute();
    $result4 = $stmt4->get_result();
    if ($result4->num_rows > 0) {
        $data['semester4'] = $result4->fetch_assoc();
    }
    $stmt4->close();

    // Fetch data for semester 5
    $stmt5 = $conn->prepare("SELECT * FROM qlhocba5 WHERE mahocsinh = ? AND namhoc = ?");
    $stmt5->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt5->execute();
    $result5 = $stmt5->get_result();
    if ($result5->num_rows > 0) {
        $data['semester5'] = $result5->fetch_assoc();
    }
    $stmt5->close();

    // Fetch data for semester 6
    $stmt6 = $conn->prepare("SELECT * FROM qlhocba6 WHERE mahocsinh = ? AND namhoc = ?");
    $stmt6->bind_param("ss", $mahocsinh, $yearSelect);
    $stmt6->execute();
    $result6 = $stmt6->get_result();
    if ($result6->num_rows > 0) {
        $data['semester6'] = $result6->fetch_assoc();
    }
    $stmt6->close();
}

$conn->close();
echo json_encode($data);
?>