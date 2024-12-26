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
                    <a class="nav-link" href="qlhb.php">Quản Lý Lớp Học<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlgv.php">Quản Lý Giáo Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="qlhs.php">Quản Lý Học Sinh</a>
                </li>
            </ul>
            <a href="dangnhap.php" class="btn btn-outline-danger my-2 my-sm-0">
                <i class="fas fa-sign-out-alt"></i> Đăng Xuất
            </a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h1>Danh Sách Lớp</h1>
            <a href="themhb.php" class="btn btn-success" title="Thêm Lớp">
                <i class="fas fa-plus"></i> Thêm Mới
            </a>
        </div>

        <div class="mt-4">
            <div class="input-group mb-3" style="max-width:300px;">
                <input type="text" class="form-control" id="searchBar" placeholder="Mã, Tên Lớp, ...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="searchButton">Tìm Kiếm</button>
                </div>
            </div>
        </div>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Mã Lớp</th>
                    <th scope="col">Tên Lớp</th>
                    <th scope="col">Số Học Sinh</th>
                    <th scope="col">GVCN</th>
                    <th scope="col">Năm Học</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody id="classTableBody">
                <?php
                    include "ketnoi.php";
                    $sql = "SELECT * FROM `lophoc`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr data-malop="<?php echo $row['malop'] ?>">
                            <td><?php echo $row['malop'] ?></td>
                            <td><?php echo $row['tenlop'] ?></td>
                            <td class="sohocsinh"><?php echo $row['sohocsinh'] ?></td>
                            <td><?php echo $row['tengv'] ?></td>
                            <td><?php echo $row['namhoc'] ?></td>
                            <td> 
                                <a href="suahb.php?malop=<?php echo $row['malop'] ?>" class="link-dark" title="Sửa Thông Tin"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="xoahb.php?malop=<?php echo $row['malop'] ?>" class="link-dark" title="Xóa Lớp"><i class="fa-solid fa-trash fs-5"></i></a>    
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('sohocsinh.php')
                .then(response => response.json())
                .then(data => {
                    const classCounts = {};

                    data.forEach(item => {
                        if (item.lop.startsWith('12') || item.lop.startsWith('11') || item.lop.startsWith('10')) {
                            if (!classCounts[item.lop]) {
                                classCounts[item.lop] = 0;
                            }
                            classCounts[item.lop] = item.sohocsinh;
                        }
                    });

                    for (const [lop, count] of Object.entries(classCounts)) {
                        const row = document.querySelector(`tr[data-malop="${lop}"] .sohocsinh`);
                        if (row) {
                            row.textContent = count;
                        }
                    }
                });

            document.getElementById('searchButton').addEventListener('click', function() {
                const searchValue = document.getElementById('searchBar').value.trim();
                const rows = document.querySelectorAll('#classTableBody tr');
                rows.forEach(row => {
                    const malop = row.getAttribute('data-malop');
                    if (malop === searchValue) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>