<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Lớp Học</title>
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
                    <a class="nav-link" href="qlhb.php">Quản Lý Học Bạ</a>
                </li>
            </ul>
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">Đăng Xuất</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="mt-5 text-center">Sửa Lớp Học</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                include 'ketnoi.php';

                if (isset($_GET['malop'])) {
                    $malop = $_GET['malop'];

                    $stmt = $conn->prepare("SELECT * FROM lophoc WHERE malop = ?");
                    $stmt->bind_param("s", $malop);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $class = $result->fetch_assoc();

                    if ($class) {
                        ?>
                        <form action="suahblogic.php" method="post" class="mt-4">
                            <input type="hidden" name="malop" value="<?php echo $class['malop']; ?>">
                            <div class="form-group">
                                <label for="tenlop">Tên Lớp:</label>
                                <input type="text" class="form-control" id="tenlop" name="tenlop" value="<?php echo $class['tenlop']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sohocsinh">Số Học Sinh:</label>
                                <input type="number" class="form-control" id="sohocsinh" name="sohocsinh" value="<?php echo $class['sohocsinh']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="gvcn">GVCN:</label>
                                <input type="text" class="form-control" id="gvcn" name="gvcn" value="<?php echo $class['tengv']; ?>" required>
                            </div>
                                <div class="form-group">
                                <label for="namhoc">Năm Học:</label>
                                <select class="form-control" id="namhoc" name="namhoc" required>
                                    <option value="">Chọn năm học</option>
                                    <option value="2013-2016" <?php if ($class['namhoc'] == '2013-2016') echo 'selected'; ?>>2013-2016</option>
                                    <option value="2014-2017" <?php if ($class['namhoc'] == '2014-2017') echo 'selected'; ?>>2014-2017</option>
                                    <option value="2015-2018" <?php if ($class['namhoc'] == '2015-2018') echo 'selected'; ?>>2015-2018</option>
                                    <option value="2016-2019" <?php if ($class['namhoc'] == '2016-2019') echo 'selected'; ?>>2016-2019</option>
                                    <option value="2017-2020" <?php if ($class['namhoc'] == '2017-2020') echo 'selected'; ?>>2017-2020</option>
                                    <option value="2018-2021" <?php if ($class['namhoc'] == '2018-2021') echo 'selected'; ?>>2018-2021</option>
                                    <option value="2019-2022" <?php if ($class['namhoc'] == '2019-2022') echo 'selected'; ?>>2019-2022</option>
                                    <option value="2020-2023" <?php if ($class['namhoc'] == '2020-2023') echo 'selected'; ?>>2020-2023</option>
                                    <option value="2021-2024" <?php if ($class['namhoc'] == '2021-2024') echo 'selected'; ?>>2021-2024</option>
                                </select>
                            </div>
                            <div class="form-group justify-content-between">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='qlhb.php'">Hủy</button>
                            </div>
                        </form>
                        <?php
                    } else {
                        echo "<p class='text-center'>Lớp học không tồn tại.</p>";
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