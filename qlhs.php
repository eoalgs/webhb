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
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h1>Danh Sách Học Sinh</h1>
            <div>
                <a href="themhs.php" class="btn btn-success">
                    <i class="fas fa-plus"></i> Thêm Mới
                </a>
                <a href="nhapexcel.php" class="btn btn-primary">
                    <i class="fas fa-file-import"></i> Nhập Danh Sách
                </a>
                <a href="xuatexcel.php" class="btn btn-primary">
                    <i class="fas fa-file-export"></i> Xuất Danh Sách
                </a>
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group mb-3" style="max-width:600px;">
                <input type="text" class="form-control" id="searchBar" placeholder="Mã, Tên Học Sinh, ...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="searchButton">Tìm Kiếm</button>
                </div>
                <select class="form-control ml-2" id="filterCriteria">
                    <option value="all">Tất cả</option>
                    <option value="k12">Khối 12</option>
                    <option value="k11">Khối 11</option>
                    <option value="k10">Khối 10</option>
                    <option value="nam">Nam Học Sinh</option>
                    <option value="nu">Nữ Học Sinh</option>
                </select>
            </div>
        </div>

        <table class="table table-hover text-center" id="studentTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Mã Học Sinh</th>
                    <th scope="col">Tên Học Sinh</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Lớp Học</th>
                    <th scope="col">GVCN</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "ketnoi.php";
                    $sql = "SELECT * FROM `hocsinh`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $ngaysinh = new DateTime($row['ngaysinh']);
                        ?>
                        <tr>
                            <td><?php echo $row['mahocsinh'] ?></td>
                            <td><?php echo $row['tenhocsinh'] ?></td>
                            <td><?php echo $ngaysinh->format('d-m-Y'); ?></td>
                            <td><?php echo $row['gioitinh'] ?></td>
                            <td><?php echo $row['diachi'] ?></td>
                            <td><?php echo $row['sodienthoai'] ?></td>
                            <td><?php echo $row['tenlop'] ?></td>
                            <td><?php echo $row['tengv'] ?></td>
                            <td> 
                                <a href="suahs.php?mahocsinh=<?php echo $row['mahocsinh'] ?>" class="link-dark" title="Chỉnh sửa"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="xoahs.php?mahocsinh=<?php echo $row['mahocsinh'] ?>" class="link-dark" title="Xóa"><i class="fa-solid fa-trash fs-5 me-3"></i></a>    
                                <a href="xemhb.php?mahocsinh=<?php echo $row['mahocsinh'] ?>" class="link-dark" title="Xem học bạ"><i class="fa-solid fa-eye fs-5"></i></a> 
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table><br><br>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

    <script>
        document.getElementById('filterCriteria').addEventListener('change', function() {
            filterAndSort();
        });

        document.getElementById('searchButton').addEventListener('click', function() {
            filterAndSort();
        });

        document.getElementById('searchBar').addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                filterAndSort();
            }
        });

        function filterAndSort() {
            var searchValue = document.getElementById('searchBar').value.toLowerCase();
            var filterCriteria = document.getElementById('filterCriteria').value;
            var table = document.getElementById('studentTable');
            var rows = table.getElementsByTagName('tr');

            for (var i = 1; i < rows.length; i++) {
                var mahs = rows[i].getElementsByTagName('td')[0].innerText.toLowerCase();
                var tenhs = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();
                var lophoc = rows[i].getElementsByTagName('td')[6].innerText.toLowerCase();
                var gioitinh = rows[i].getElementsByTagName('td')[3].innerText.toLowerCase();
                var match = false;

                if (filterCriteria === 'all') {
                    match = true;
                } else if (filterCriteria === 'k12') {
                    match = lophoc.startsWith('12');
                } else if (filterCriteria === 'k11') {
                    match = lophoc.startsWith('11');
                } else if (filterCriteria === 'k10') {
                    match = lophoc.startsWith('10');
                } else if (filterCriteria === 'nam') {
                    match = gioitinh === 'nam';
                } else if (filterCriteria === 'nu') {
                    match = gioitinh === 'nữ';
                }

                if (match && (mahs.includes(searchValue) || tenhs.includes(searchValue))) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }

            if (filterCriteria === 'all') {
                sortTable();
            }
        }

        function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[0]; 
                y = rows[i + 1].getElementsByTagName("TD")[0];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    window.onload = function() {
        sortTable();
    };
    </script>
</body>
</html>