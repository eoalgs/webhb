<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "ketnoi.php";

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Mã Học Sinh');
$sheet->setCellValue('B1', 'Tên Học Sinh');
$sheet->setCellValue('C1', 'Ngày Sinh');
$sheet->setCellValue('D1', 'Giới Tính');
$sheet->setCellValue('E1', 'Địa Chỉ');
$sheet->setCellValue('F1', 'Số Điện Thoại');
$sheet->setCellValue('G1', 'Lớp Học');
$sheet->setCellValue('H1', 'GVCN');

$sql = "SELECT * FROM hocsinh";
$result = mysqli_query($conn, $sql);
$rowNumber = 2;

while ($row = mysqli_fetch_assoc($result)) {
    $ngaysinh = DateTime::createFromFormat('Y-m-d', $row['ngaysinh'])->format('d-m-Y');
    $sheet->setCellValue('A' . $rowNumber, $row['mahocsinh']);
    $sheet->setCellValue('B' . $rowNumber, $row['tenhocsinh']);
    $sheet->setCellValue('C' . $rowNumber, $ngaysinh);
    $sheet->setCellValue('D' . $rowNumber, $row['gioitinh']);
    $sheet->setCellValue('E' . $rowNumber, $row['diachi']);
    $sheet->setCellValue('F' . $rowNumber, $row['sodienthoai']);
    $sheet->setCellValue('G' . $rowNumber, $row['tenlop']);
    $sheet->setCellValue('H' . $rowNumber, $row['tengv']);
    $rowNumber++;
}

$writer = new Xlsx($spreadsheet);
$filename = 'Danh Sách Học Sinh.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit;
?>