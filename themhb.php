<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAIZ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="haiz.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li class="nav-item active">
                    <a class="nav-link" href="qlhb.php">Quản Lý Lớp Học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlgv.php">Quản Lý Giáo Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlhs.php">Quản Lý Học Sinh</a>
                </li>
            </ul>
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">Đăng Xuất</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="mt-5 text-center">Thêm Lớp Học</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="themhblogic.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="malop">Mã Lớp:</label>
                        <input type="text" class="form-control" id="malop" name="malop" required>
                    </div>
                    <div class="form-group">
                        <label for="tenlop">Tên Lớp:</label>
                        <input type="text" class="form-control" id="tenlop" name="tenlop" required>
                    </div>
                    <div class="form-group">
                        <label for="sohocsinh">Số Học Sinh:</label>
                        <input type="number" class="form-control" id="sohocsinh" name="sohocsinh" required>
                    </div>
                    <div class="form-group">
                        <label for="gvcn">GVCN:</label>
                        <input type="text" class="form-control" id="gvcn" name="gvcn" required>
                    </div>
                    <div class="form-group">
                    <label for="namhoc">Năm Học:</label>
                        <select class="form-control" id="namhoc" name="namhoc" required>
                            <option value="2021-2022">2013-2016</option>
                            <option value="2022-2023">2014-2017</option>
                            <option value="2023-2024">2015-2018</option>
                            <option value="2016-2019">2016-2019</option>
                            <option value="2017-2020">2017-2020</option>
                            <option value="2018-2021">2018-2021</option>
                            <option value="2019-2022">2019-2022</option>
                            <option value="2020-2023">2020-2023</option>
                            <option value="2021-2024">2021-2024</option>
                        </select>
                    </div>
                    <div class="form-group justify-content-between">
                        <button type="submit" class="btn btn-primary">Thêm Lớp</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='qlhb.php'">Hủy</button>
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