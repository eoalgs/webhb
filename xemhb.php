<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAIZ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="haiz.png" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="giaodien.php">Quản Lý Học Bạ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="giaodien.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlhb.php">Quản Lý Lớp Học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlgv.php">Quản Lý Giáo Viên</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="qlhs.php">Quản Lý Học Sinh<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">Đăng Xuất</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="mt-5 text-center">Học Bạ</h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                include 'ketnoi.php';

                if (isset($_GET['mahocsinh'])) {
                    $mahocsinh = $_GET['mahocsinh'];

                    // Fetch student's birth year
                    $stmt_birthyear = $conn->prepare("SELECT ngaysinh FROM hocsinh WHERE mahocsinh = ?");
                    $stmt_birthyear->bind_param("s", $mahocsinh);
                    $stmt_birthyear->execute();
                    $result_birthyear = $stmt_birthyear->get_result();
                    $student = $result_birthyear->fetch_assoc();
                    $birthyear = (int)substr($student['ngaysinh'], 0, 4);

                    $stmt1 = $conn->prepare("SELECT * FROM qlhocba WHERE mahocsinh = ?");
                    $stmt1->bind_param("s", $mahocsinh);
                    $stmt1->execute();
                    $result1 = $stmt1->get_result();
                    $report1 = $result1->fetch_assoc();

                    // Query for qlhocbak2
                    $stmt2 = $conn->prepare("SELECT * FROM qlhocbak2 WHERE mahocsinh = ?");
                    $stmt2->bind_param("s", $mahocsinh);
                    $stmt2->execute();
                    $result2 = $stmt2->get_result();
                    $report2 = $result2->fetch_assoc();

                    // Query for qlhocba3
                    $stmt3 = $conn->prepare("SELECT * FROM qlhocba3 WHERE mahocsinh = ?");
                    $stmt3->bind_param("s", $mahocsinh);
                    $stmt3->execute();
                    $result3 = $stmt3->get_result();
                    $report3 = $result3->fetch_assoc();

                    // Query for qlhocba4
                    $stmt4 = $conn->prepare("SELECT * FROM qlhocba4 WHERE mahocsinh = ?");
                    $stmt4->bind_param("s", $mahocsinh);
                    $stmt4->execute();
                    $result4 = $stmt4->get_result();
                    $report4 = $result4->fetch_assoc();

                    // Query for qlhocba5
                    $stmt5 = $conn->prepare("SELECT * FROM qlhocba5 WHERE mahocsinh = ?");
                    $stmt5->bind_param("s", $mahocsinh);
                    $stmt5->execute();
                    $result5 = $stmt5->get_result();
                    $report5 = $result5->fetch_assoc();

                    // Query for qlhocba6
                    $stmt6 = $conn->prepare("SELECT * FROM qlhocba6 WHERE mahocsinh = ?");
                    $stmt6->bind_param("s", $mahocsinh);
                    $stmt6->execute();
                    $result6 = $stmt6->get_result();
                    $report6 = $result6->fetch_assoc();
                }

                    ?>
                    <div class="form-group">
                        <label for="yearSelect">Năm Học:</label>
                        <select class="form-control" id="yearSelect">
                            <option value="<?php echo $birthyear + 15; ?>">Năm học: <?php echo $birthyear + 15; ?> - <?php echo $birthyear + 16; ?></option>
                            <option value="<?php echo $birthyear + 16; ?>">Năm học: <?php echo $birthyear + 16; ?> - <?php echo $birthyear + 17; ?></option>
                            <option value="<?php echo $birthyear + 17; ?>">Năm học: <?php echo $birthyear + 17; ?> - <?php echo $birthyear + 18; ?></option>
                        </select>
                    </div>
                    <?php
                    if ($report1 && $report2) {
                        $diemtrungbinh1 = ($report1['toan'] + $report1['vatly'] + $report1['hoahoc'] + $report1['sinhhoc'] + $report1['tinhoc'] + $report1['nguvan'] + $report1['lichsu'] + $report1['dialy'] + $report1['tienganh'] + $report1['congnghe'] + $report1['gdqp'] + $report1['theduc'] + $report1['gdcd']) / 13;

                        $diemtrungbinhk2 = ($report2['toank2'] + $report2['vatlyk2'] + $report2['hoahock2'] + $report2['sinhhock2'] + $report2['tinhock2'] + $report2['nguvank2'] + $report2['lichsuk2'] + $report2['dialyk2'] + $report2['tienganhk2'] + $report2['congnghek2'] + $report2['gdqpk2'] + $report2['theduck2'] + $report2['gdcdk2']) / 13;

                        $diemtrungbinh_year = ($diemtrungbinh1 + $diemtrungbinhk2) / 2;

                        $lenlop = $diemtrungbinh_year > 4 ? "Được Lên Lớp" : "Không Đủ Điều Kiện Lên Lớp";
                        ?>

                        <div id="<?php echo $birthyear + 15; ?>" class="year-table">
                            <h2 class="mt-4">Năm học: <?php echo $birthyear + 15; ?> - <?php echo $birthyear + 16; ?></h2>
                            <h3 class="mt-4">Học Kỳ 1</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Toán</td><td><?php echo $report1['toan']; ?></td></tr>
                                    <tr><td>Vật Lý</td><td><?php echo $report1['vatly']; ?></td></tr>
                                    <tr><td>Hóa Học</td><td><?php echo $report1['hoahoc']; ?></td></tr>
                                    <tr><td>Sinh Học</td><td><?php echo $report1['sinhhoc']; ?></td></tr>
                                    <tr><td>Tin Học</td><td><?php echo $report1['tinhoc']; ?></td></tr>
                                    <tr><td>Ngữ Văn</td><td><?php echo $report1['nguvan']; ?></td></tr>
                                    <tr><td>Lịch Sử</td><td><?php echo $report1['lichsu']; ?></td></tr>
                                    <tr><td>Địa Lý</td><td><?php echo $report1['dialy']; ?></td></tr>
                                    <tr><td>Tiếng Anh</td><td><?php echo $report1['tienganh']; ?></td></tr>
                                    <tr><td>Công Nghệ</td><td><?php echo $report1['congnghe']; ?></td></tr>
                                    <tr><td>GDQP</td><td><?php echo $report1['gdqp']; ?></td></tr>
                                    <tr><td>Thể Dục</td><td><?php echo $report1['theduc']; ?></td></tr>
                                    <tr><td>GDCD</td><td><?php echo $report1['gdcd']; ?></td></tr>
                                    <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh1, 2); ?></td></tr>
                                    <tr><td>Hạnh Kiểm</td><td><?php echo $report1['hanhkiem']; ?></td></tr>
                                    <tr><td>Học Lực</td><td><?php echo $report1['hocluc']; ?></td></tr>
                                    <tr><td>Xếp Hạng</td><td><?php echo $report1['xephang']; ?></td></tr>
                                </tbody>
                            </table>

                            <h3 class="mt-4">Học Kỳ 2</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Toán</td><td><?php echo $report2['toank2']; ?></td></tr>
                                    <tr><td>Vật Lý</td><td><?php echo $report2['vatlyk2']; ?></td></tr>
                                    <tr><td>Hóa Học</td><td><?php echo $report2['hoahock2']; ?></td></tr>
                                    <tr><td>Sinh Học</td><td><?php echo $report2['sinhhock2']; ?></td></tr>
                                    <tr><td>Tin Học</td><td><?php echo $report2['tinhock2']; ?></td></tr>
                                    <tr><td>Ngữ Văn</td><td><?php echo $report2['nguvank2']; ?></td></tr>
                                    <tr><td>Lịch Sử</td><td><?php echo $report2['lichsuk2']; ?></td></tr>
                                    <tr><td>Địa Lý</td><td><?php echo $report2['dialyk2']; ?></td></tr>
                                    <tr><td>Tiếng Anh</td><td><?php echo $report2['tienganhk2']; ?></td></tr>
                                    <tr><td>Công Nghệ</td><td><?php echo $report2['congnghek2']; ?></td></tr>
                                    <tr><td>GDQP</td><td><?php echo $report2['gdqpk2']; ?></td></tr>
                                    <tr><td>Thể Dục</td><td><?php echo $report2['theduck2']; ?></td></tr>
                                    <tr><td>GDCD</td><td><?php echo $report2['gdcdk2']; ?></td></tr>
                                    <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinhk2, 2); ?></td></tr>
                                    <tr><td>Hạnh Kiểm</td><td><?php echo $report2['hanhkiemk2']; ?></td></tr>
                                    <tr><td>Học Lực</td><td><?php echo $report2['hocluck2']; ?></td></tr>
                                    <tr><td>Xếp Hạng</td><td><?php echo $report2['xephangk2']; ?></td></tr>
                                </tbody>
                            </table>

                        <h2 class="mt-4">Tổng Kết</h2>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Học Kỳ</th>
                                    <th>Điểm Trung Bình</th>
                                    <th>Hạnh Kiểm</th>
                                    <th>Học Lực</th>
                                    <th>Xếp Hạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Học Kỳ 1</td><td><?php echo round($diemtrungbinh1, 2); ?></td><td><?php echo $report1['hanhkiem']; ?></td><td><?php echo $report1['hocluc']; ?></td><td><?php echo $report1['xephang']; ?></td></tr>
                                <tr><td>Học Kỳ 2</td><td><?php echo round($diemtrungbinhk2, 2); ?></td><td><?php echo $report2['hanhkiemk2']; ?></td><td><?php echo $report2['hocluck2']; ?></td><td><?php echo $report2['xephangk2']; ?></td></tr>
                                <tr><td>Cả Năm</td><td><?php echo round($diemtrungbinh_year, 2); ?></td><td colspan="3" class="text-center"><?php echo $lenlop; ?></td></tr>
                            </tbody>
                        </table>
                        </div>
                    <?php
                }


                if ($report3 && $report4) {
                    $diemtrungbinh3 = ($report3['toan3'] + $report3['vatly3'] + $report3['hoahoc3'] + $report3['sinhhoc3'] + $report3['tinhoc3'] + $report3['nguvan3'] + $report3['lichsu3'] + $report3['dialy3'] + $report3['tienganh3'] + $report3['congnghe3'] + $report3['gdqp3'] + $report3['theduc3'] + $report3['gdcd3']) / 13;

                    $diemtrungbinh4 = ($report4['toan4'] + $report4['vatly4'] + $report4['hoahoc4'] + $report4['sinhhoc4'] + $report4['tinhoc4'] + $report4['nguvan4'] + $report4['lichsu4'] + $report4['dialy4'] + $report4['tienganh4'] + $report4['congnghe4'] + $report4['gdqp4'] + $report4['theduc4'] + $report4['gdcd4']) / 13;

                    $diemtrungbinh_year2 = ($diemtrungbinh3 + $diemtrungbinh4) / 2;

                    $lenlop2 = $diemtrungbinh_year2 >= 4 ? "Được Lên Lớp" : "Không Đủ Điều Kiện Lên Lớp";
                    ?>
                        <div id="<?php echo $birthyear + 16; ?>" class="year-table" style="display:none;">
                            <h2 class="mt-4">Năm học: <?php echo $birthyear + 16; ?> - <?php echo $birthyear + 17; ?></h2>
                            <h3 class="mt-4">Học Kỳ 1</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr><td>Toán</td><td><?php echo $report3['toan3']; ?></td></tr>
                                <tr><td>Vật Lý</td><td><?php echo $report3['vatly3']; ?></td></tr>
                                <tr><td>Hóa Học</td><td><?php echo $report3['hoahoc3']; ?></td></tr>
                                <tr><td>Sinh Học</td><td><?php echo $report3['sinhhoc3']; ?></td></tr>
                                <tr><td>Tin Học</td><td><?php echo $report3['tinhoc3']; ?></td></tr>
                                <tr><td>Ngữ Văn</td><td><?php echo $report3['nguvan3']; ?></td></tr>
                                <tr><td>Lịch Sử</td><td><?php echo $report3['lichsu3']; ?></td></tr>
                                <tr><td>Địa Lý</td><td><?php echo $report3['dialy3']; ?></td></tr>
                                <tr><td>Tiếng Anh</td><td><?php echo $report3['tienganh3']; ?></td></tr>
                                <tr><td>Công Nghệ</td><td><?php echo $report3['congnghe3']; ?></td></tr>
                                <tr><td>GDQP</td><td><?php echo $report3['gdqp3']; ?></td></tr>
                                <tr><td>Thể Dục</td><td><?php echo $report3['theduc3']; ?></td></tr>
                                <tr><td>GDCD</td><td><?php echo $report3['gdcd3']; ?></td></tr>
                                <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh3, 2); ?></td></tr>
                                <tr><td>Hạnh Kiểm</td><td><?php echo $report3['hanhkiem3']; ?></td></tr>
                                <tr><td>Học Lực</td><td><?php echo $report3['hocluc3']; ?></td></tr>
                                <tr><td>Xếp Hạng</td><td><?php echo $report3['xephang3']; ?></td></tr>
                                </tbody>
                            </table>

                            <h3 class="mt-4">Học Kỳ 2</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr><td>Toán</td><td><?php echo $report4['toan4']; ?></td></tr>
                                <tr><td>Vật Lý</td><td><?php echo $report4['vatly4']; ?></td></tr>
                                <tr><td>Hóa Học</td><td><?php echo $report4['hoahoc4']; ?></td></tr>
                                <tr><td>Sinh Học</td><td><?php echo $report4['sinhhoc4']; ?></td></tr>
                                <tr><td>Tin Học</td><td><?php echo $report4['tinhoc4']; ?></td></tr>
                                <tr><td>Ngữ Văn</td><td><?php echo $report4['nguvan4']; ?></td></tr>
                                <tr><td>Lịch Sử</td><td><?php echo $report4['lichsu4']; ?></td></tr>
                                <tr><td>Địa Lý</td><td><?php echo $report4['dialy4']; ?></td></tr>
                                <tr><td>Tiếng Anh</td><td><?php echo $report4['tienganh4']; ?></td></tr>
                                <tr><td>Công Nghệ</td><td><?php echo $report4['congnghe4']; ?></td></tr>
                                <tr><td>GDQP</td><td><?php echo $report4['gdqp4']; ?></td></tr>
                                <tr><td>Thể Dục</td><td><?php echo $report4['theduc4']; ?></td></tr>
                                <tr><td>GDCD</td><td><?php echo $report4['gdcd4']; ?></td></tr>
                                <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh4, 2); ?></td></tr>
                                <tr><td>Hạnh Kiểm</td><td><?php echo $report4['hanhkiem4']; ?></td></tr>
                                <tr><td>Học Lực</td><td><?php echo $report4['hocluc4']; ?></td></tr>
                                <tr><td>Xếp Hạng</td><td><?php echo $report4['xephang4']; ?></td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="mt-4">Tổng Kết</h2>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Học Kỳ</th>
                                    <th>Điểm Trung Bình</th>
                                    <th>Hạnh Kiểm</th>
                                    <th>Học Lực</th>
                                    <th>Xếp Hạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Học Kỳ 1</td><td><?php echo round($diemtrungbinh3, 2); ?></td><td><?php echo $report3['hanhkiem3']; ?></td><td><?php echo $report3['hocluc3']; ?></td><td><?php echo $report3['xephang3']; ?></td></tr>
                                <tr><td>Học Kỳ 2</td><td><?php echo round($diemtrungbinh4, 2); ?></td><td><?php echo $report4['hanhkiem4']; ?></td><td><?php echo $report4['hocluc4']; ?></td><td><?php echo $report4['xephang4']; ?></td></tr>
                                <tr><td>Cả Năm</td><td><?php echo round($diemtrungbinh_year2, 2); ?></td><td colspan="3" class="text-center"><?php echo $lenlop2; ?></tr>
                            </tbody>
                        </table>

                    <?php
                }
                    if ($report5 && $report6) {
                        $diemtrungbinh5 = ($report5['toan5'] + $report5['vatly5'] + $report5['hoahoc5'] + $report5['sinhhoc5'] + $report5['tinhoc5'] + $report5['nguvan5'] + $report5['lichsu5'] + $report5['dialy5'] + $report5['tienganh5'] + $report5['congnghe5'] + $report5['gdqp5'] + $report5['theduc5'] + $report5['gdcd5']) / 13;

                        $diemtrungbinh6 = ($report6['toan6'] + $report6['vatly6'] + $report6['hoahoc6'] + $report6['sinhhoc6'] + $report6['tinhoc6'] + $report6['nguvan6'] + $report6['lichsu6'] + $report6['dialy6'] + $report6['tienganh6'] + $report6['congnghe6'] + $report6['gdqp6'] + $report6['theduc6'] + $report6['gdcd6']) / 13;

                        $diemtrungbinh_year3 = ($diemtrungbinh5 + $diemtrungbinh6) / 2;

                        $lenlop3 = $diemtrungbinh_year3 >= 4 ? "Được Lên Lớp" : "Không Đủ Điều Kiện Lên Lớp";
                        ?>
                        <div id="<?php echo $birthyear + 17; ?>" class="year-table" style="display:none;">
                            <h2 class="mt-4">Năm học: <?php echo $birthyear + 17; ?> - <?php echo $birthyear + 18; ?></h2>
                            <h3 class="mt-4">Học Kỳ 1</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr><td>Toán</td><td><?php echo $report5['toan5']; ?></td></tr>
                                <tr><td>Vật Lý</td><td><?php echo $report5['vatly5']; ?></td></tr>
                                <tr><td>Hóa Học</td><td><?php echo $report5['hoahoc5']; ?></td></tr>
                                <tr><td>Sinh Học</td><td><?php echo $report5['sinhhoc5']; ?></td></tr>
                                <tr><td>Tin Học</td><td><?php echo $report5['tinhoc5']; ?></td></tr>
                                <tr><td>Ngữ Văn</td><td><?php echo $report5['nguvan5']; ?></td></tr>
                                <tr><td>Lịch Sử</td><td><?php echo $report5['lichsu5']; ?></td></tr>
                                <tr><td>Địa Lý</td><td><?php echo $report5['dialy5']; ?></td></tr>
                                <tr><td>Tiếng Anh</td><td><?php echo $report5['tienganh5']; ?></td></tr>
                                <tr><td>Công Nghệ</td><td><?php echo $report5['congnghe5']; ?></td></tr>
                                <tr><td>GDQP</td><td><?php echo $report5['gdqp5']; ?></td></tr>
                                <tr><td>Thể Dục</td><td><?php echo $report5['theduc5']; ?></td></tr>
                                <tr><td>GDCD</td><td><?php echo $report5['gdcd5']; ?></td></tr>
                                <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh5, 2); ?></td></tr>
                                <tr><td>Hạnh Kiểm</td><td><?php echo $report5['hanhkiem5']; ?></td></tr>
                                <tr><td>Học Lực</td><td><?php echo $report5['hocluc5']; ?></td></tr>
                                <tr><td>Xếp Hạng</td><td><?php echo $report5['xephang5']; ?></td></tr>
                                </tbody>
                            </table>

                            <h3 class="mt-4">Học Kỳ 2</h3>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Môn Học</th>
                                        <th>Điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr><td>Toán</td><td><?php echo $report6['toan6']; ?></td></tr>
                                <tr><td>Vật Lý</td><td><?php echo $report6['vatly6']; ?></td></tr>
                                <tr><td>Hóa Học</td><td><?php echo $report6['hoahoc6']; ?></td></tr>
                                <tr><td>Sinh Học</td><td><?php echo $report6['sinhhoc6']; ?></td></tr>
                                <tr><td>Tin Học</td><td><?php echo $report6['tinhoc6']; ?></td></tr>
                                <tr><td>Ngữ Văn</td><td><?php echo $report6['nguvan6']; ?></td></tr>
                                <tr><td>Lịch Sử</td><td><?php echo $report6['lichsu6']; ?></td></tr>
                                <tr><td>Địa Lý</td><td><?php echo $report6['dialy6']; ?></td></tr>
                                <tr><td>Tiếng Anh</td><td><?php echo $report6['tienganh6']; ?></td></tr>
                                <tr><td>Công Nghệ</td><td><?php echo $report6['congnghe6']; ?></td></tr>
                                <tr><td>GDQP</td><td><?php echo $report6['gdqp6']; ?></td></tr>
                                <tr><td>Thể Dục</td><td><?php echo $report6['theduc6']; ?></td></tr>
                                <tr><td>GDCD</td><td><?php echo $report6['gdcd6']; ?></td></tr>
                                <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh6, 2); ?></td></tr>
                                <tr><td>Hạnh Kiểm</td><td><?php echo $report6['hanhkiem6']; ?></td></tr>
                                <tr><td>Học Lực</td><td><?php echo $report6['hocluc6']; ?></td></tr>
                                <tr><td>Xếp Hạng</td><td><?php echo $report6['xephang6']; ?></td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="mt-4">Tổng Kết</h2>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Học Kỳ</th>
                                    <th>Điểm Trung Bình</th>
                                    <th>Hạnh Kiểm</th>
                                    <th>Học Lực</th>
                                    <th>Xếp Hạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Học Kỳ 1</td><td><?php echo round($diemtrungbinh5, 2); ?></td><td><?php echo $report5['hanhkiem5']; ?></td><td><?php echo $report5['hocluc5']; ?></td><td><?php echo $report5['xephang5']; ?></td></tr>
                                <tr><td>Học Kỳ 2</td><td><?php echo round($diemtrungbinh6, 2); ?></td><td><?php echo $report6['hanhkiem6']; ?></td><td><?php echo $report6['hocluc6']; ?></td><td><?php echo $report6['xephang6']; ?></td></tr>
                                <tr><td>Điểm Trung Bình</td><td><?php echo round($diemtrungbinh_year3, 2); ?></td><td colspan="3"></td></tr>
                                <tr><td>Kết Quả</td><td colspan="3" class="text-center"><?php echo $lenlop3; ?></td></tr>
                            </tbody>
                        </table>
                        <?php
                    }

                    $stmt1->close();
                    $stmt2->close();
                    $stmt3->close();
                    $stmt4->close();
                    $stmt5->close();
                    $stmt6->close();
                    $stmt_birthyear->close();
                $conn->close();
                ?>
                <br><br>
                <div class="mt-4">
                    <h1 class="text-center">
                        <?php echo ($birthyear + 18 <= 2024) ? "ĐÃ TỐT NGHIỆP" : "CHƯA TỐT NGHIỆP"; ?>
                    </h1>
                </div><br>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('yearSelect').addEventListener('change', function() {
            const selectedYear = this.value;
            const yearTables = document.querySelectorAll('.year-table');
            yearTables.forEach(table => {
                if (table.id === selectedYear) {
                    table.style.display = 'block';
                } else {
                    table.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>