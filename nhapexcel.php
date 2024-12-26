<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

include "ketnoi.php";

if (isset($_POST['import'])) {
    $file = $_FILES['file']['tmp_name'];
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();
    $data = $sheet->toArray();

    foreach ($data as $row) {
        $mahocsinh = $row[0];
        $tenhocsinh = $row[1];
        $ngaysinh = DateTime::createFromFormat('d-m-Y', $row[2]);
        if ($ngaysinh) {
            $ngaysinh = $ngaysinh->format('Y-m-d');
        } else {
            continue;
        }
        $gioitinh = $row[3];
        $diachi = $row[4];
        $sodienthoai = $row[5];
        $tenlop = $row[6];
        $tengv = $row[7];

        $sql = "INSERT INTO hocsinh (mahocsinh, tenhocsinh, ngaysinh, gioitinh, diachi, sodienthoai, tenlop, tengv) 
                VALUES ('$mahocsinh', '$tenhocsinh', '$ngaysinh', '$gioitinh', '$diachi', '$sodienthoai', '$tenlop', '$tengv')
                ON DUPLICATE KEY UPDATE 
                tenhocsinh = VALUES(tenhocsinh), 
                ngaysinh = VALUES(ngaysinh), 
                gioitinh = VALUES(gioitinh), 
                diachi = VALUES(diachi), 
                sodienthoai = VALUES(sodienthoai), 
                tenlop = VALUES(tenlop), 
                tengv = VALUES(tengv)";
        mysqli_query($conn, $sql);
    }

    header("Location: qlhs.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Danh Sách Học Sinh</title>
    <link rel="icon" href="haiz.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Nhập Danh Sách Học Sinh Từ File Excel</h1>
        <form action="nhapexcel.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Chọn file Excel:</label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" name="import" class="btn btn-primary">Nhập</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='qlhs.php'">Hủy</button>
        </form>
    </div>
</body>
</html>