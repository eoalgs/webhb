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
        <h1 class="mt-5 text-center">Thêm Giáo Viên</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="themgvlogic.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="magv">Mã Giáo Viên:</label>
                        <input type="text" class="form-control" id="magv" name="magv" required>
                    </div>
                    <div class="form-group">
                        <label for="tengv">Tên Giáo Viên:</label>
                        <input type="text" class="form-control" id="tengv" name="tengv" required>
                    </div>
                    <div class="form-group">
                        <label for="ngaysinh">Ngày Sinh:</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
                    </div>
                    <div class="form-group">
                        <label for="diachi">Địa Chỉ:</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" required>
                    </div>
                    <div class="form-group">
                        <label for="sodienthoai">Số Điện Thoại:</label>
                        <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" required>
                    </div>
                    <div class="form-group">
                        <label for="gioitinh">Giới Tính:</label>
                        <select class="form-control" id="gioitinh" name="gioitinh" required>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lopcn">Lớp Chủ Nhiệm:</label>
                        <input type="text" class="form-control" id="lopcn" name="lopcn" required>
                    </div>
                    <div class="form-group">
                        <label for="moncn">Môn CN:</label>
                        <select class="form-control" id="moncn" name="moncn" required>
                            <option value="">Chọn Môn Học</option>
                            <option value="Toán">Toán</option>
                            <option value="Vật Lý">Vật Lý</option>
                            <option value="Hóa Học">Hóa Học</option>
                            <option value="Sinh Học">Sinh Học</option>
                            <option value="Tin Học">Tin Học</option>
                            <option value="Ngữ Văn">Ngữ Văn</option>
                            <option value="Lịch Sử">Lịch Sử</option>
                            <option value="Địa Lý">Địa Lý</option>
                            <option value="Tiếng Anh">Tiếng Anh</option>
                            <option value="Công Nghệ">Công Nghệ</option>
                            <option value="GDQP">GDQP</option>
                            <option value="Thể Dục">Thể Dục</option>
                            <option value="GDCD">GDCD</option>
                        </select>
                    </div>
                    <div class="form-group justify-content-between">
                        <button type="submit" class="btn btn-primary">Thêm Giáo Viên</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='qlgv.php'">Hủy</button>
                    </div><br><br>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>