<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/dangnhap.css">
</head>
<body>
    <header>


        <ul>
            <img src="img/logo.png" alt="">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="lienhe.php">Sản phẩm khác của Vin</a></li>
            <li><a href="">Đăng nhập</a>
                <ul>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="dangki.php">Đăng kí</a></li>
                </ul>
            </li>
            <li><a href="muahang.php">Mua hàng</a></li>
            <li><a href="gopy.php">Góp ý</a></li>



        </ul>
        <div>

            <input type="text" placeholder="Tìm kiếm">
        </div>

    </header>
    <main>
        <img src="img/banner.jpg" alt="">
        <form action="">
            <h1>Đăng nhập</h1>
            <label>Tên đăng nhập</label><br>
        <input type="text" placeholder="Tên đăng nhập" class="ip" required><br>
        <label>Password</label><br>
        <input type="Password" placeholder="Password" class="ip" required><br>
        <button>Đăng  nhập</button><br>
        <a href="">Quên mật khẩu</a><br>
        <button><a href="" color="white"> Tạo tài khoản mới</a></button>
        </form>
    </main>
    <footer>

        <form action="">
            <input type="email" placeholder="Nhập email" required>
            <button>Send</button>
        </form>
    </footer>
</body>
</html>