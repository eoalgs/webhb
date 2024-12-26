<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAIZ</title>
    <link rel="icon" href="haiz.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="haiz.jpg" width="150" height="150" class="rounded mx-auto d-block" alt="Logo">
                <h2 class="mt-1 text-center">Đăng Ký</h2>
                <?php
                session_start();
                if (isset($_SESSION['error'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
                    unset($_SESSION['success']);
                }
                ?>
                <form action="dangkylogic.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="username">Tên Đăng Nhập:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email có dạng .edu.vn" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật Khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Xác Nhận Mật Khẩu:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    <a href="dangnhap.php" class="btn btn-secondary ml-2">Đã có tài khoản, đăng nhập</a><br><br>
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