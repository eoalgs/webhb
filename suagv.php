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
                <li class="nav-item active">
                    <a class="nav-link" href="qlgv.php">Quản Lý Giáo Viên<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlhs.php">Quản Lý Học Sinh</a>
                </li>
            </ul>
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">Đăng Xuất</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="mt-5 text-center">Sửa Giáo Viên</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                include 'ketnoi.php';

                if (isset($_GET['magv'])) {
                    $magv = $_GET['magv'];

                    $stmt = $conn->prepare("SELECT * FROM giaovien WHERE magv = ?");
                    $stmt->bind_param("s", $magv);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $teacher = $result->fetch_assoc();

                    if ($teacher) {
                        ?>
                        <form action="suagvlogic.php" method="post" class="mt-4">
                            <input type="hidden" name="magv" value="<?php echo $teacher['magv']; ?>">
                            <div class="form-group">
                                <label for="tengv">Tên Giáo Viên:</label>
                                <input type="text" class="form-control" id="tengv" name="tengv" value="<?php echo $teacher['tengv']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="ngaysinh">Ngày Sinh:</label>
                                <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?php echo $teacher['ngaysinh']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="diachi">Địa Chỉ:</label>
                                <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $teacher['diachi']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sodienthoai">Số Điện Thoại:</label>
                                <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" value="<?php echo $teacher['sodienthoai']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="gioitinh">Giới Tính:</label>
                                <select class="form-control" id="gioitinh" name="gioitinh" required>
                                    <option value="Nam" <?php if ($teacher['gioitinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
                                    <option value="Nữ" <?php if ($teacher['gioitinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lopcn">Lớp Chủ Nhiệm:</label>
                                <input type="text" class="form-control" id="lopcn" name="lopcn" value="<?php echo $teacher['tengv']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="moncn">Môn Chủ Nhiệm:</label>
                                <select class="form-control" id="moncn" name="moncn" required>
                                    <option value="">Chọn Môn Học</option>
                                    <option value="Toán" <?php echo $teacher['moncn'] == 'Toán' ? 'selected' : ''; ?>>Toán</option>
                                    <option value="Vật Lý" <?php echo $teacher['moncn'] == 'Vật Lý' ? 'selected' : ''; ?>>Vật Lý</option>
                                    <option value="Hóa Học" <?php echo $teacher['moncn'] == 'Hóa Học' ? 'selected' : ''; ?>>Hóa Học</option>
                                    <option value="Sinh Học" <?php echo $teacher['moncn'] == 'Sinh Học' ? 'selected' : ''; ?>>Sinh Học</option>
                                    <option value="Tin Học" <?php echo $teacher['moncn'] == 'Tin Học' ? 'selected' : ''; ?>>Tin Học</option>
                                    <option value="Ngữ Văn" <?php echo $teacher['moncn'] == 'Ngữ Văn' ? 'selected' : ''; ?>>Ngữ Văn</option>
                                    <option value="Lịch Sử" <?php echo $teacher['moncn'] == 'Lịch Sử' ? 'selected' : ''; ?>>Lịch Sử</option>
                                    <option value="Địa Lý" <?php echo $teacher['moncn'] == 'Địa Lý' ? 'selected' : ''; ?>>Địa Lý</option>
                                    <option value="Tiếng Anh" <?php echo $teacher['moncn'] == 'Tiếng Anh' ? 'selected' : ''; ?>>Tiếng Anh</option>
                                    <option value="Công Nghệ" <?php echo $teacher['moncn'] == 'Công Nghệ' ? 'selected' : ''; ?>>Công Nghệ</option>
                                    <option value="GDQP" <?php echo $teacher['moncn'] == 'GDQP' ? 'selected' : ''; ?>>GDQP</option>
                                    <option value="Thể Dục" <?php echo $teacher['moncn'] == 'Thể Dục' ? 'selected' : ''; ?>>Thể Dục</option>
                                    <option value="GDCD" <?php echo $teacher['moncn'] == 'GDCD' ? 'selected' : ''; ?>>GDCD</option>
                                </select>
                            </div>
                            <div class="form-group justify-content-between">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='qlgv.php'">Hủy</button>
                            </div>
                        </form>
                        <?php
                    } else {
                        echo "<p class='text-center'>Không có giáo viên.</p>";
                    }

                    $stmt->close();
                } else {
                    echo "<p class='text-center'>Yêu cầu không hợp lệ.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>