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
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">
                <i class="fas fa-sign-out-alt"></i> Đăng Xuất
            </a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="mt-5 text-center">Thêm Học Sinh</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="themhslogic.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="mahocsinh">Mã Học Sinh:</label>
                        <input type="text" class="form-control" id="mahocsinh" name="mahocsinh" required>
                    </div>
                    <div class="form-group">
                        <label for="tenhocsinh">Tên Học Sinh:</label>
                        <input type="text" class="form-control" id="tenhocsinh" name="tenhocsinh" required>
                    </div>
                    <div class="form-group">
                        <label for="ngaysinh">Ngày Sinh:</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
                    </div>
                    <div class="form-group">
                        <label for="gioitinh">Giới Tính:</label>
                        <select class="form-control" id="gioitinh" name="gioitinh" required>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
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
                        <label for="lophoc">Lớp Học:</label>
                        <input type="text" class="form-control" id="lophoc" name="lophoc" required>
                    </div>
                    <div class="form-group">
                        <label for="gvcn">GVCN:</label>
                        <input type="text" class="form-control" id="gvcn" name="gvcn" required>
                    </div>
                    <div class="form-group justify-content-between">
                        <button type="submit" class="btn btn-primary">Thêm Học Sinh</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='qlhs.php'">Hủy</button>
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