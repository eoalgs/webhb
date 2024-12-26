<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Học Bạ</title>
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
        <h1 class="mt-5 text-center">Thêm Học Bạ</h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="themhocbalogic.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="mahocsinh">Mã Học Sinh:</label>
                        <input type="text" class="form-control" id="mahocsinh" name="mahocsinh" required>
                    </div>
                    <div class="form-group">
                        <label for="yearSelect">Năm Học:</label>
                        <select class="form-control" id="yearSelect" name="yearSelect" required>
                            <!-- Options will be populated by JavaScript -->
                        </select>
                    </div>
                    <div id="formContent">
                        <!-- Form content will be populated by JavaScript -->
                    </div>
                    <div class="form-group justify-content-between">
                        <button type="submit" class="btn btn-primary">Thêm Học Bạ</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='qlhs.php'">Hủy</button>
                    </div><br><br>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('mahocsinh').addEventListener('change', function() {
            const mahocsinh = this.value;
            fetch(`fetch_years.php?mahocsinh=${mahocsinh}`)
                .then(response => response.json())
                .then(data => {
                    const yearSelect = document.getElementById('yearSelect');
                    yearSelect.innerHTML = '';
                    data.years.forEach(year => {
                        const option = document.createElement('option');
                        option.value = year;
                        option.textContent = `Năm học: ${year} - ${parseInt(year) + 1}`;
                        yearSelect.appendChild(option);
                    });
                });
        });

        document.getElementById('yearSelect').addEventListener('change', function() {
            const mahocsinh = document.getElementById('mahocsinh').value;
            const year = this.value;
            fetch(`fetch_data.php?mahocsinh=${mahocsinh}&year=${year}`)
                .then(response => response.json())
                .then(data => {
                    const formContent = document.getElementById('formContent');
                    formContent.innerHTML = `
                        <h2 class="mt-4">Học Kỳ 1</h2>
                        ${generateFormFields(data.semester1)}
                        <h2 class="mt-4">Học Kỳ 2</h2>
                        ${generateFormFields(data.semester2)}
                    `;
                });
        });

        function generateFormFields(data) {
            return `
                <div class="form-group">
                    <label for="toan">Toán:</label>
                    <input type="number" step="0.01" class="form-control" id="toan" name="toan" value="${data.toan || ''}" required>
                </div>
                <div class="form-group">
                    <label for="vatly">Vật Lý:</label>
                    <input type="number" step="0.01" class="form-control" id="vatly" name="vatly" value="${data.vatly || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hoahoc">Hóa Học:</label>
                    <input type="number" step="0.01" class="form-control" id="hoahoc" name="hoahoc" value="${data.hoahoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="sinhhoc">Sinh Học:</label>
                    <input type="number" step="0.01" class="form-control" id="sinhhoc" name="sinhhoc" value="${data.sinhhoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="tinhoc">Tin Học:</label>
                    <input type="number" step="0.01" class="form-control" id="tinhoc" name="tinhoc" value="${data.tinhoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="nguvan">Ngữ Văn:</label>
                    <input type="number" step="0.01" class="form-control" id="nguvan" name="nguvan" value="${data.nguvan || ''}" required>
                </div>
                <div class="form-group">
                    <label for="lichsu">Lịch Sử:</label>
                    <input type="number" step="0.01" class="form-control" id="lichsu" name="lichsu" value="${data.lichsu || ''}" required>
                </div>
                <div class="form-group">
                    <label for="dialy">Địa Lý:</label>
                    <input type="number" step="0.01" class="form-control" id="dialy" name="dialy" value="${data.dialy || ''}" required>
                </div>
                <div class="form-group">
                    <label for="tienganh">Tiếng Anh:</label>
                    <input type="number" step="0.01" class="form-control" id="tienganh" name="tienganh" value="${data.tienganh || ''}" required>
                </div>
                <div class="form-group">
                    <label for="congnghe">Công Nghệ:</label>
                    <input type="number" step="0.01" class="form-control" id="congnghe" name="congnghe" value="${data.congnghe || ''}" required>
                </div>
                <div class="form-group">
                    <label for="gdqp">GDQP:</label>
                    <input type="number" step="0.01" class="form-control" id="gdqp" name="gdqp" value="${data.gdqp || ''}" required>
                </div>
                <div class="form-group">
                    <label for="theduc">Thể Dục:</label>
                    <input type="number" step="0.01" class="form-control" id="theduc" name="theduc" value="${data.theduc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="gdcd">GDCD:</label>
                    <input type="number" step="0.01" class="form-control" id="gdcd" name="gdcd" value="${data.gdcd || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hanhkiem">Hạnh Kiểm:</label>
                    <input type="text" class="form-control" id="hanhkiem" name="hanhkiem" value="${data.hanhkiem || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hocluc">Học Lực:</label>
                    <input type="text" class="form-control" id="hocluc" name="hocluc" value="${data.hocluc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="xephang">Xếp Hạng:</label>
                    <input type="number" class="form-control" id="xephang" name="xephang" value="${data.xephang || ''}" required>
                </div>
            `;
        }
    </script>
</body>
</html>