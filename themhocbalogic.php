<?php
include 'ketnoi.php'; // Include your database connection file

$mahocsinh = $_POST['mahocsinh'] ?? '';
$yearSelect = $_POST['yearSelect'] ?? '';
$toan = $_POST['toan'] ?? 0;
$vatly = $_POST['vatly'] ?? 0;
$hoahoc = $_POST['hoahoc'] ?? 0;
$sinhhoc = $_POST['sinhhoc'] ?? 0;
$tinhoc = $_POST['tinhoc'] ?? 0;
$nguvan = $_POST['nguvan'] ?? 0;
$lichsu = $_POST['lichsu'] ?? 0;
$dialy = $_POST['dialy'] ?? 0;
$tienganh = $_POST['tienganh'] ?? 0;
$congnghe = $_POST['congnghe'] ?? 0;
$gdqp = $_POST['gdqp'] ?? 0;
$theduc = $_POST['theduc'] ?? 0;
$gdcd = $_POST['gdcd'] ?? 0;
$hanhkiem = $_POST['hanhkiem'] ?? 'Xuất Sắc';
$hocluc = $_POST['hocluc'] ?? 'Xuất Sắc';
$xephang = $_POST['xephang'] ?? 0;

$toank2 = $_POST['toank2'] ?? 0;
$vatlyk2 = $_POST['vatlyk2'] ?? 0;
$hoahock2 = $_POST['hoahock2'] ?? 0;
$sinhhock2 = $_POST['sinhhock2'] ?? 0;
$tinhock2 = $_POST['tinhock2'] ?? 0;
$nguvank2 = $_POST['nguvank2'] ?? 0;
$lichsuk2 = $_POST['lichsuk2'] ?? 0;
$dialyk2 = $_POST['dialyk2'] ?? 0;
$tienganhk2 = $_POST['tienganhk2'] ?? 0;
$congnghek2 = $_POST['congnghek2'] ?? 0;
$gdqpk2 = $_POST['gdqpk2'] ?? 0;
$theduck2 = $_POST['theduck2'] ?? 0;
$gdcdk2 = $_POST['gdcdk2'] ?? 0;
$hanhkiemk2 = $_POST['hanhkiemk2'] ?? 'Xuất Sắc';
$hocluck2 = $_POST['hocluck2'] ?? 'Xuất Sắc';
$xephangk2 = $_POST['xephangk2'] ?? 0;

$toan3 = $_POST['toan3'] ?? 0;
$vatly3 = $_POST['vatly3'] ?? 0;
$hoahoc3 = $_POST['hoahoc3'] ?? 0;
$sinhhoc3 = $_POST['sinhhoc3'] ?? 0;
$tinhoc3 = $_POST['tinhoc3'] ?? 0;
$nguvan3 = $_POST['nguvan3'] ?? 0;
$lichsu3 = $_POST['lichsu3'] ?? 0;
$dialy3 = $_POST['dialy3'] ?? 0;
$tienganh3 = $_POST['tienganh3'] ?? 0;
$congnghe3 = $_POST['congnghe3'] ?? 0;
$gdqp3 = $_POST['gdqp3'] ?? 0;
$theduc3 = $_POST['theduc3'] ?? 0;
$gdcd3 = $_POST['gdcd3'] ?? 0;
$hanhkiem3 = $_POST['hanhkiem3'] ?? 'Xuất Sắc';
$hocluc3 = $_POST['hocluc3'] ?? 'Xuất Sắc';
$xephang3 = $_POST['xephang3'] ?? 0;

$toan4 = $_POST['toan4'] ?? 0;
$vatly4 = $_POST['vatly4'] ?? 0;
$hoahoc4 = $_POST['hoahoc4'] ?? 0;
$sinhhoc4 = $_POST['sinhhoc4'] ?? 0;
$tinhoc4 = $_POST['tinhoc4'] ?? 0;
$nguvan4 = $_POST['nguvan4'] ?? 0;
$lichsu4 = $_POST['lichsu4'] ?? 0;
$dialy4 = $_POST['dialy4'] ?? 0;
$tienganh4 = $_POST['tienganh4'] ?? 0;
$congnghe4 = $_POST['congnghe4'] ?? 0;
$gdqp4 = $_POST['gdqp4'] ?? 0;
$theduc4 = $_POST['theduc4'] ?? 0;
$gdcd4 = $_POST['gdcd4'] ?? 0;
$hanhkiem4 = $_POST['hanhkiem4'] ?? 'Xuất Sắc';
$hocluc4 = $_POST['hocluc4'] ?? 'Xuất Sắc';
$xephang4 = $_POST['xephang4'] ?? 0;

$toan5 = $_POST['toan5'] ?? 0;
$vatly5 = $_POST['vatly5'] ?? 0;
$hoahoc5 = $_POST['hoahoc5'] ?? 0;
$sinhhoc5 = $_POST['sinhhoc5'] ?? 0;
$tinhoc5 = $_POST['tinhoc5'] ?? 0;
$nguvan5 = $_POST['nguvan5'] ?? 0;
$lichsu5 = $_POST['lichsu5'] ?? 0;
$dialy5 = $_POST['dialy5'] ?? 0;
$tienganh5 = $_POST['tienganh5'] ?? 0;
$congnghe5 = $_POST['congnghe5'] ?? 0;
$gdqp5 = $_POST['gdqp5'] ?? 0;
$theduc5 = $_POST['theduc5'] ?? 0;
$gdcd5 = $_POST['gdcd5'] ?? 0;
$hanhkiem5 = $_POST['hanhkiem5'] ?? 'Xuất Sắc';
$hocluc5 = $_POST['hocluc5'] ?? 'Xuất Sắc';
$xephang5 = $_POST['xephang5'] ?? 0;

$toan6 = $_POST['toan6'] ?? 0;
$vatly6 = $_POST['vatly6'] ?? 0;
$hoahoc6 = $_POST['hoahoc6'] ?? 0;
$sinhhoc6 = $_POST['sinhhoc6'] ?? 0;
$tinhoc6 = $_POST['tinhoc6'] ?? 0;
$nguvan6 = $_POST['nguvan6'] ?? 0;
$lichsu6 = $_POST['lichsu6'] ?? 0;
$dialy6 = $_POST['dialy6'] ?? 0;
$tienganh6 = $_POST['tienganh6'] ?? 0;
$congnghe6 = $_POST['congnghe6'] ?? 0;
$gdqp6 = $_POST['gdqp6'] ?? 0;
$theduc6 = $_POST['theduc6'] ?? 0;
$gdcd6 = $_POST['gdcd6'] ?? 0;
$hanhkiem6 = $_POST['hanhkiem6'] ?? 'Xuất Sắc';
$hocluc6 = $_POST['hocluc6'] ?? 'Xuất Sắc';
$xephang6 = $_POST['xephang6'] ?? 0;

// Check if records exist for the given student and year
$stmt_check1 = $conn->prepare("SELECT * FROM qlhocba WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check1->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check1->execute();
$result1 = $stmt_check1->get_result();

$stmt_check2 = $conn->prepare("SELECT * FROM qlhocbak2 WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check2->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check2->execute();
$result2 = $stmt_check2->get_result();

$stmt_check3 = $conn->prepare("SELECT * FROM qlhocba3 WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check3->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check3->execute();
$result3 = $stmt_check3->get_result();

$stmt_check4 = $conn->prepare("SELECT * FROM qlhocba4 WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check4->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check4->execute();
$result4 = $stmt_check4->get_result();

$stmt_check5 = $conn->prepare("SELECT * FROM qlhocba5 WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check5->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check5->execute();
$result5 = $stmt_check5->get_result();

$stmt_check6 = $conn->prepare("SELECT * FROM qlhocba6 WHERE mahocsinh = ? AND namhoc = ?");
$stmt_check6->bind_param("ss", $mahocsinh, $yearSelect);
$stmt_check6->execute();
$result6 = $stmt_check6->get_result();

if ($result1->num_rows > 0) {
    // Update existing records in qlhocba
    $stmt1 = $conn->prepare("UPDATE qlhocba SET toan = ?, vatly = ?, hoahoc = ?, sinhhoc = ?, tinhoc = ?, nguvan = ?, lichsu = ?, dialy = ?, tienganh = ?, congnghe = ?, gdqp = ?, theduc = ?, gdcd = ?, hanhkiem = ?, hocluc = ?, xephang = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt1->bind_param("ddddddddddddssssss", $toan, $vatly, $hoahoc, $sinhhoc, $tinhoc, $nguvan, $lichsu, $dialy, $tienganh, $congnghe, $gdqp, $theduc, $gdcd, $hanhkiem, $hocluc, $xephang, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocba
    $stmt1 = $conn->prepare("INSERT INTO qlhocba (mahocsinh, namhoc, toan, vatly, hoahoc, sinhhoc, tinhoc, nguvan, lichsu, dialy, tienganh, congnghe, gdqp, theduc, gdcd, hanhkiem, hocluc, xephang) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toan, $vatly, $hoahoc, $sinhhoc, $tinhoc, $nguvan, $lichsu, $dialy, $tienganh, $congnghe, $gdqp, $theduc, $gdcd, $hanhkiem, $hocluc, $xephang);
}

if ($result2->num_rows > 0) {
    // Update existing records in qlhocbak2
    $stmt2 = $conn->prepare("UPDATE qlhocbak2 SET toank2 = ?, vatlyk2 = ?, hoahock2 = ?, sinhhock2 = ?, tinhock2 = ?, nguvank2 = ?, lichsuk2 = ?, dialyk2 = ?, tienganhk2 = ?, congnghek2 = ?, gdqpk2 = ?, theduck2 = ?, gdcdk2 = ?, hanhkiemk2 = ?, hocluck2 = ?, xephangk2 = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt2->bind_param("ddddddddddddssssss", $toank2, $vatlyk2, $hoahock2, $sinhhock2, $tinhock2, $nguvank2, $lichsuk2, $dialyk2, $tienganhk2, $congnghek2, $gdqpk2, $theduck2, $gdcdk2, $hanhkiemk2, $hocluck2, $xephangk2, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocbak2
    $stmt2 = $conn->prepare("INSERT INTO qlhocbak2 (mahocsinh, namhoc, toank2, vatlyk2, hoahock2, sinhhock2, tinhock2, nguvank2, lichsuk2, dialyk2, tienganhk2, congnghek2, gdqpk2, theduck2, gdcdk2, hanhkiemk2, hocluck2, xephangk2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toank2, $vatlyk2, $hoahock2, $sinhhock2, $tinhock2, $nguvank2, $lichsuk2, $dialyk2, $tienganhk2, $congnghek2, $gdqpk2, $theduck2, $gdcdk2, $hanhkiemk2, $hocluck2, $xephangk2);
}

if ($result3->num_rows > 0) {
    // Update existing records in qlhocba3
    $stmt3 = $conn->prepare("UPDATE qlhocba3 SET toan3 = ?, vatly3 = ?, hoahoc3 = ?, sinhhoc3 = ?, tinhoc3 = ?, nguvan3 = ?, lichsu3 = ?, dialy3 = ?, tienganh3 = ?, congnghe3 = ?, gdqp3 = ?, theduc3 = ?, gdcd3 = ?, hanhkiem3 = ?, hocluc3 = ?, xephang3 = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt3->bind_param("ddddddddddddssssss", $toan3, $vatly3, $hoahoc3, $sinhhoc3, $tinhoc3, $nguvan3, $lichsu3, $dialy3, $tienganh3, $congnghe3, $gdqp3, $theduc3, $gdcd3, $hanhkiem3, $hocluc3, $xephang3, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocba3
    $stmt3 = $conn->prepare("INSERT INTO qlhocba3 (mahocsinh, namhoc, toan3, vatly3, hoahoc3, sinhhoc3, tinhoc3, nguvan3, lichsu3, dialy3, tienganh3, congnghe3, gdqp3, theduc3, gdcd3, hanhkiem3, hocluc3, xephang3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt3->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toan3, $vatly3, $hoahoc3, $sinhhoc3, $tinhoc3, $nguvan3, $lichsu3, $dialy3, $tienganh3, $congnghe3, $gdqp3, $theduc3, $gdcd3, $hanhkiem3, $hocluc3, $xephang3);
}

if ($result4->num_rows > 0) {
    // Update existing records in qlhocba4
    $stmt4 = $conn->prepare("UPDATE qlhocba4 SET toan4 = ?, vatly4 = ?, hoahoc4 = ?, sinhhoc4 = ?, tinhoc4 = ?, nguvan4 = ?, lichsu4 = ?, dialy4 = ?, tienganh4 = ?, congnghe4 = ?, gdqp4 = ?, theduc4 = ?, gdcd4 = ?, hanhkiem4 = ?, hocluc4 = ?, xephang4 = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt4->bind_param("ddddddddddddssssss", $toan4, $vatly4, $hoahoc4, $sinhhoc4, $tinhoc4, $nguvan4, $lichsu4, $dialy4, $tienganh4, $congnghe4, $gdqp4, $theduc4, $gdcd4, $hanhkiem4, $hocluc4, $xephang4, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocba4
    $stmt4 = $conn->prepare("INSERT INTO qlhocba4 (mahocsinh, namhoc, toan4, vatly4, hoahoc4, sinhhoc4, tinhoc4, nguvan4, lichsu4, dialy4, tienganh4, congnghe4, gdqp4, theduc4, gdcd4, hanhkiem4, hocluc4, xephang4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt4->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toan4, $vatly4, $hoahoc4, $sinhhoc4, $tinhoc4, $nguvan4, $lichsu4, $dialy4, $tienganh4, $congnghe4, $gdqp4, $theduc4, $gdcd4, $hanhkiem4, $hocluc4, $xephang4);
}

if ($result5->num_rows > 0) {
    // Update existing records in qlhocba5
    $stmt5 = $conn->prepare("UPDATE qlhocba5 SET toan5 = ?, vatly5 = ?, hoahoc5 = ?, sinhhoc5 = ?, tinhoc5 = ?, nguvan5 = ?, lichsu5 = ?, dialy5 = ?, tienganh5 = ?, congnghe5 = ?, gdqp5 = ?, theduc5 = ?, gdcd5 = ?, hanhkiem5 = ?, hocluc5 = ?, xephang5 = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt5->bind_param("ddddddddddddssssss", $toan5, $vatly5, $hoahoc5, $sinhhoc5, $tinhoc5, $nguvan5, $lichsu5, $dialy5, $tienganh5, $congnghe5, $gdqp5, $theduc5, $gdcd5, $hanhkiem5, $hocluc5, $xephang5, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocba5
    $stmt5 = $conn->prepare("INSERT INTO qlhocba5 (mahocsinh, namhoc, toan5, vatly5, hoahoc5, sinhhoc5, tinhoc5, nguvan5, lichsu5, dialy5, tienganh5, congnghe5, gdqp5, theduc5, gdcd5, hanhkiem5, hocluc5, xephang5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt5->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toan5, $vatly5, $hoahoc5, $sinhhoc5, $tinhoc5, $nguvan5, $lichsu5, $dialy5, $tienganh5, $congnghe5, $gdqp5, $theduc5, $gdcd5, $hanhkiem5, $hocluc5, $xephang5);
}
if ($result6->num_rows > 0) {
    // Update existing records in qlhocba6
    $stmt6 = $conn->prepare("UPDATE qlhocba6 SET toan6 = ?, vatly6 = ?, hoahoc6 = ?, sinhhoc6 = ?, tinhoc6 = ?, nguvan6 = ?, lichsu6 = ?, dialy6 = ?, tienganh6 = ?, congnghe6 = ?, gdqp6 = ?, theduc6 = ?, gdcd6 = ?, hanhkiem6 = ?, hocluc6 = ?, xephang6 = ? WHERE mahocsinh = ? AND namhoc = ?");
    $stmt6->bind_param("ddddddddddddssssss", $toan6, $vatly6, $hoahoc6, $sinhhoc6, $tinhoc6, $nguvan6, $lichsu6, $dialy6, $tienganh6, $congnghe6, $gdqp6, $theduc6, $gdcd6, $hanhkiem6, $hocluc6, $xephang6, $mahocsinh, $yearSelect);
} else {
    // Insert new records into qlhocba6
    $stmt6 = $conn->prepare("INSERT INTO qlhocba6 (mahocsinh, namhoc, toan6, vatly6, hoahoc6, sinhhoc6, tinhoc6, nguvan6, lichsu6, dialy6, tienganh6, congnghe6, gdqp6, theduc6, gdcd6, hanhkiem6, hocluc6, xephang6) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt6->bind_param("ssssssssssssssssss", $mahocsinh, $yearSelect, $toan6, $vatly6, $hoahoc6, $sinhhoc6, $tinhoc6, $nguvan6, $lichsu6, $dialy6, $tienganh6, $congnghe6, $gdqp6, $theduc6, $gdcd6, $hanhkiem6, $hocluc6, $xephang6);
}

if ($stmt1->execute() && $stmt2->execute() && $stmt3->execute() && $stmt4->execute() && $stmt5->execute() && $stmt6->execute()) {
    echo "Cập nhật học bạ thành công";
} else {
    echo "Không thể cập nhật học bạ";
}

$stmt1->close();
$stmt2->close();
$stmt3->close();
$stmt4->close();
$stmt5->close();
$stmt6->close();
$stmt_check1->close();
$stmt_check2->close();
$stmt_check3->close();
$stmt_check4->close();
$stmt_check5->close();
$stmt_check6->close();
$conn->close();
?>