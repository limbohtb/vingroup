<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/dangki.css">
    <link rel="stylesheet" href="front-icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/gopy.css">

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
    <div class="nd">
        <ul>
            <li>
                <div>
                    <i class="ti-mobile"></i>
                    <h3>Phone</h3>
                    <p>+840334206232</p>
                </div>
            </li>
            <li>
                <i class="ti-location-pin"></i>
                <h3>Address</h3>
                <p> 40, Ngo 56 ,duong Tay Tuu</p>
            </li>
            <li>
                <i class="ti-time"></i>
                <h3>Open time</h3>
                <p>10:00 am to 23:00 pm</p>
            </li>
            <li>
              <i class="ti-email"></i>
              <h3>Email</h3>
              <p>dtth232@gmail.com</p>
            </li>
        </ul>
    </div>
    <img src="https://vcdn-vnexpress.vnecdn.net/2020/08/04/VinFast-President-1-9915-1596526753.jpg"  width="100%" alt="">
    <main>
        <section>

        </section>
        <form action="">
        <marquee>Cảm ơn quý khách đã đóng góp ý kiến</marquee>
        <h2>Mời quý khách góp ý</h2>
        <label>Họ và tên</label><br>
        <input type="text" placeholder="Họ tên" class="ip" required><br>
        <label>Tuổi</label><br>
        <input type="text" placeholder="Tuổi" class="ip" required><br>
        <label>Số điện thoại</label><br>
        <input type="tel" placeholder="Số điện thoại" class="ip" required><br>
        <label>Password</label><br>
        <input type="password" placeholder="Password" class="ip" required><br>
        <label>Nhập lại password</label><br>
        <input type="password" placeholder="Nhập lại password" class="ip" required><br>
        <label>Email</label><br>
        <input type="email" placeholder="Email" class="ip" required><br>
        <label>Địa chỉ</label><br>
        <input type="text" placeholder="Địa chỉ" class="ip" required><br>
        <label>Quê quán</label><br>
        <select class="que">
            <option value="0">Chọn tỉnh /tp</option>
            <option value="1">Hà Nội</option>
            <option value="2">TP HCM</option>
            <option value="3">Thái bình</option>
            <option value="4">Nam Định</option>
            <option value="5">Yên Bái</option>
        </select><br>
        <label class="inp">Giới tính</label>
        <div class="inp">
            <input type="radio" name="gt"><span>Nam</span>
            <input type="radio" name="gt"><span>Nữ</span>
            <input type="radio" name="gt"><span>Không muốn tiết lộ</span>
        </div>
        <label class="inp">Quý khách có thấy hài lòng với sản phẩm không</label>
        <div class="inp">
            <input type="radio" name="gt"><span>Có</span>
            <input type="radio" name="gt"><span>Không</span>
            <input type="radio" name="gt"><span>Không muốn tiết lộ</span>
        </div>
        
     
        <label>Nội dung góp ý</label><br>
        <textarea name="text" id="" cols="46" rows="5" id="note" maxlength="200"></textarea><br>
        <button onclick="">Góp ý</button>
    </form>
    <img src="https://1.bigdata-vn.com/wp-content/uploads/2021/10/1633485567_856_Nhung-hinh-anh-cam-on-dep-nhat.png" width="100%" alt=""></main>
    <footer>

        <form action="">
            <input type="email" placeholder="Nhập email" required>
            <button>Send</button>
        </form>
    </footer>
    <script>
        function check(){
            alert(' Xin cám ơn quý khách đã góp ý chúng tôi sẽ xem xét và cố gắng sửa đổi cho tốt hơn')
        }
    </script>
</body>
</html>