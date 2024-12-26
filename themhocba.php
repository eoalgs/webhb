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
                <form id="hocbaForm" class="mt-4">
                    <div class="form-group">
                        <label for="mahocsinh">Mã Học Sinh:</label>
                        <input type="text" class="form-control" id="mahocsinh" name="mahocsinh" required>
                    </div>
                    <div class="form-group">
                        <label for="yearSelect">Năm Học:</label>
                        <select class="form-control" id="yearSelect" name="yearSelect" required>
                            <?php
                            include 'ketnoi.php';
                            $result = $conn->query("SELECT * FROM qlnamhoc");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['manamhoc']}'>{$row['tennamhoc']} {$row['nambatdau']} - {$row['namketthuc']}</option>";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="loadButton">Thêm</button>
                    </div>
                </form>     
                <div id="formContent">
                    <!-- Form fields will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loadButton').addEventListener('click', function() {
            const mahocsinh = document.getElementById('mahocsinh').value;
            const yearSelect = document.getElementById('yearSelect').value;
            if (mahocsinh && yearSelect) {
                fetch(`fetch_data.php?mahocsinh=${mahocsinh}&yearSelect=${yearSelect}`)
                    .then(response => response.json())
                    .then(data => {
                        const formContent = document.getElementById('formContent');
                        formContent.innerHTML = `
                            <form action="themhocbalogic.php" method="post">
                                <input type="hidden" name="mahocsinh" value="${mahocsinh}">
                                <input type="hidden" name="yearSelect" value="${yearSelect}">
                                <h2>Năm Học : </h2>
                                <h3>Học Kỳ 1</h3>
                                ${generateFormFields(data.semester1, '')}
                                <h3>Học Kỳ 2</h3>
                                ${generateFormFields(data.semester2, 'k2')}
                                <h3>Học Kỳ 3</h3>
                                ${generateFormFields(data.semester3, 'k3')}
                                <h3>Học Kỳ 4</h3>
                                ${generateFormFields(data.semester4, 'k4')}
                                <h3>Học Kỳ 5</h3>
                                ${generateFormFields(data.semester5, 'k5')}
                                <h3>Học Kỳ 6</h3>
                                ${generateFormFields(data.semester6, 'k6')}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Lưu Học Bạ</button>
                                    <button type="button" class="btn btn-outline-danger" onclick="window.location.href='xemhb.php'">Hủy</button>
                                </div>
                            </form>
                        `;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            } else {
                alert('Please enter Mã Học Sinh and select Năm Học');
            }
        });

        function generateFormFields(data, suffix) {
            return `
                <div class="form-group">
                    <label for="toan${suffix}">Toán:</label>
                    <input type="number" step="0.01" class="form-control" id="toan${suffix}" name="toan${suffix}" value="${data.toan || ''}" required>
                </div>
                <div class="form-group">
                    <label for="vatly${suffix}">Vật Lý:</label>
                    <input type="number" step="0.01" class="form-control" id="vatly${suffix}" name="vatly${suffix}" value="${data.vatly || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hoahoc${suffix}">Hóa Học:</label>
                    <input type="number" step="0.01" class="form-control" id="hoahoc${suffix}" name="hoahoc${suffix}" value="${data.hoahoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="sinhhoc${suffix}">Sinh Học:</label>
                    <input type="number" step="0.01" class="form-control" id="sinhhoc${suffix}" name="sinhhoc${suffix}" value="${data.sinhhoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="tinhoc${suffix}">Tin Học:</label>
                    <input type="number" step="0.01" class="form-control" id="tinhoc${suffix}" name="tinhoc${suffix}" value="${data.tinhoc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="nguvan${suffix}">Ngữ Văn:</label>
                    <input type="number" step="0.01" class="form-control" id="nguvan${suffix}" name="nguvan${suffix}" value="${data.nguvan || ''}" required>
                </div>
                <div class="form-group">
                    <label for="lichsu${suffix}">Lịch Sử:</label>
                    <input type="number" step="0.01" class="form-control" id="lichsu${suffix}" name="lichsu${suffix}" value="${data.lichsu || ''}" required>
                </div>
                <div class="form-group">
                    <label for="dialy${suffix}">Địa Lý:</label>
                    <input type="number" step="0.01" class="form-control" id="dialy${suffix}" name="dialy${suffix}" value="${data.dialy || ''}" required>
                </div>
                <div class="form-group">
                    <label for="tienganh${suffix}">Tiếng Anh:</label>
                    <input type="number" step="0.01" class="form-control" id="tienganh${suffix}" name="tienganh${suffix}" value="${data.tienganh || ''}" required>
                </div>
                <div class="form-group">
                    <label for="congnghe${suffix}">Công Nghệ:</label>
                    <input type="number" step="0.01" class="form-control" id="congnghe${suffix}" name="congnghe${suffix}" value="${data.congnghe || ''}" required>
                </div>
                <div class="form-group">
                    <label for="gdqp${suffix}">GDQP:</label>
                    <input type="number" step="0.01" class="form-control" id="gdqp${suffix}" name="gdqp${suffix}" value="${data.gdqp || ''}" required>
                </div>
                <div class="form-group">
                    <label for="theduc${suffix}">Thể Dục:</label>
                    <input type="number" step="0.01" class="form-control" id="theduc${suffix}" name="theduc${suffix}" value="${data.theduc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="gdcd${suffix}">GDCD:</label>
                    <input type="number" step="0.01" class="form-control" id="gdcd${suffix}" name="gdcd${suffix}" value="${data.gdcd || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hanhkiem${suffix}">Hạnh Kiểm:</label>
                    <input type="text" class="form-control" id="hanhkiem${suffix}" name="hanhkiem${suffix}" value="${data.hanhkiem || ''}" required>
                </div>
                <div class="form-group">
                    <label for="hocluc${suffix}">Học Lực:</label>
                    <input type="text" class="form-control" id="hocluc${suffix}" name="hocluc${suffix}" value="${data.hocluc || ''}" required>
                </div>
                <div class="form-group">
                    <label for="xephang${suffix}">Xếp Hạng:</label>
                    <input type="number" class="form-control" id="xephang${suffix}" name="xephang${suffix}" value="${data.xephang || ''}" required>
                </div>
            `;
        }
    </script>
</body>
</html>