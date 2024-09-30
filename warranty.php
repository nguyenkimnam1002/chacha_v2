<?php  
  require_once __DIR__ ."/master_layout/chacha/header.php";
  require('./connect.php');
?>
<?php
  $open = "posts";
  require_once __DIR__ ."/autoload/autoload.php";

  $num = $db->maxIdTable("warranty");
    $index1 = $num['id'];
    $id_warranty= $index1 += 1;

  if(isset($_POST['sbm'])){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $diachi = $_POST['diachi'];
    $productName = $_POST['productName'];
    $serialNumber = $_POST['serialNumber'];
    $purchaseDate = $_POST['purchaseDate'];

    $sql = "INSERT INTO warranty (id, cus_name, cus_phone, cus_add, pro_name, pro_seri, pro_date, pro_active) 
            VALUES ('$id_warranty','$fullName', '$phoneNumber', '$diachi', '$productName','$serialNumber','$purchaseDate', '1')";
    
    if (mysqli_query($conn, $sql))
    //Thông báo nếu thành công
    {
        
        echo "<script>alert('Kích hoạt bảo hành thành công!'); </script>";?>
        <script>
            console.log ("OK hè");
        </script>
    <?php }
    else 
    {//Hiện thông báo khi không thành công
        echo 'Không thành công. Lỗi' . mysqli_error($conn);
    }
}
?>
<div class="container">

    <div class="">
        <div data-html-id="1120">
            <div class="choosemanufac">
            <h3>Chính sách đổi trả, bảo hành cho khách hàng Cha Cha</h3>
            <ul class="listRule">
                <li>
                    <p>Đối với <b> sản phẩm TGDĐ/ĐMX kinh doanh TRỪ nhóm Gia dụng không điện, Phụ kiện không điện &amp; Sản phẩm đã sử dụng</b>, khách hàng chọn 1 trong các phương thức tuỳ sản phẩm </p>
                    <p>
                        <strong>+</strong>
                        <b>Bảo hành có cam kết</b> trong 12 tháng
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Hư gì đổi nấy ngay và luôn</b>
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Hoàn tiền</b>: áp dụng cho sản phẩm lỗi và không lỗi
                    </p>
                </li>
                <li>
                    <p>
                        <span class="s1">Đối với </span>
                        <b>Gia dụng không điện, Phụ kiện không điện, Lọc nước không điện:</b>
                    </p>
                    <p>+ Không áp dụng bảo hành và đổi trả</p>
                </li>
                <li>
                    <p>Đối với <b>sản phẩm đã sử dụng</b>
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Bao xài 1 tháng đầu tiên</b> Nếu sản phẩm lỗi kỹ thuật thì áp dụng bảo hành, Nếu Khách hàng muốn hoàn tiền thì thu phí 10% giá trị hóa đơn.
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Từ tháng thứ 2 trở đi</b> Không áp dụng đổi trả. Áp dụng bảo hành hãng nếu sản phẩm còn thời gian bảo hành của hãng và đủ điều kiện bảo hành của hãng.
                    </p>
                </li>
                <li>
                    <p>Đối với <b>sản phẩm Mua online không dịch vụ</b>
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Không áp dụng chính sách đổi trả</b>
                    </p>
                    <p>
                        <strong>+</strong>
                        <b>Trường hợp sản phẩm lỗi kỹ thuật</b> khách hàng trực tiếp liên hệ trung tâm bảo hành hãng để được hỗ trợ.
                    </p>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <h2>Kích Hoạt Bảo Hành Điện Tử</h2>

    <!-- Popup thông báo thành công -->
    <div id="successPopup" class="popup">
        <h3>Kích hoạt bảo hành thành công!</h3>
        <button id="closePopup">Đóng</button>
    </div>

    <form id="warrantyActivationForm" method="POST" enctype="multipart/form-data">
        <!-- Cột 1: Thông tin người dùng -->
        <div class="form-group">
            <label for="fullName">Họ và tên:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Nhập họ và tên" required>
        </div>

        <div class="form-group">
            <label for="phoneNumber">Số điện thoại:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Nhập số điện thoại" required>
        </div>

        <div class="form-group">
            <label for="diachi">Địa chỉ:</label>
            <input type="diachi" id="diachi" name="diachi" placeholder="Nhập địa chỉ" required>
        </div>

        <!-- Cột 2: Thông tin sản phẩm bảo hành -->
        <div class="form-group">
            <label for="productName">Tên sản phẩm:</label>
            <input type="text" id="productName" name="productName" placeholder="Nhập tên sản phẩm" required>
        </div>

        <div class="form-group">
            <label for="serialNumber">Số serial (mã):</label>
            <input type="text" id="serialNumber" name="serialNumber" placeholder="Nhập số serial" required>
        </div>

        <div class="form-group">
            <label for="purchaseDate">Ngày mua:</label>
            <input type="datetime-local" id="purchaseDate" name="purchaseDate" required>
        </div>

        <!-- Nút kích hoạt -->
        <div style="width: 100%;">
            <button type="submit" name= "sbm">Kích hoạt bảo hành</button>
        </div>
    </form>
    
    <a class="viewmorewar" href="warranty_search.php" target="_blank" title="Tra cứu bảo hành điện tử">Quý khách hàng có thể tra cứu bảo hành tại đây <span>
            </a>
</div>

<style>
    .choosemanufac {
        display: block;
        overflow: hidden;
        /* margin: 15px 0 0; */
        border-top: 1px solid #ebebeb;
        background: #fff;
        background: -webkit-gradient(radial, 50% 0, 0, 50% 0%, 100, from(#f8f8f8), to(#fff));
        background: -webkit-radial-gradient(50% 0%, #f8f8f8, #fff);
        background: -moz-radial-gradient(50% 0%, #f8f8f8, #fff);
        background: -ms-radial-gradient(50% 0%, #f8f8f8, #fff);
    }
    .choosemanufac h3 {
        display: block;
        overflow: hidden;
        line-height: 1.3em;
        font-size: 36px;
        text-transform: capitalize;
        color: #4a4a4a;
        text-align: center;
        margin: 15px 0;
    }

    .listRule {
        display: flex;
        flex-wrap: wrap;
    }
    .listRule li {
        float: left;
        position: relative;
        width: 46%;
        margin-right: 3%;
        margin-top: 15px;
        overflow: hidden;
        border: 1px solid #ebebeb;
        background: #f8f8f8;
        padding: 5px 1%;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f5f5f5), to(#fff));
        background: -webkit-linear-gradient(top, #fff, #f5f5f5);
        background: -moz-linear-gradient(top, #fff, #f5f5f5);
        background: -ms-linear-gradient(top, #fff, #f5f5f5);
        background: -o-linear-gradient(top, #fff, #f5f5f5);
    }
    .listRule li p {
        line-height: 30px;
    }
    .viewmorewar {
        display: block;
        overflow: hidden;
        padding: 8px 0 10px;
        /* width: 320px; */
        margin: 8px auto;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        font-size: 16px;
        color: #4a90e2;
        text-align: center;
    }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            width: 48%;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="diachi"], input[type="datetime-local"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-group {
                width: 100%;
            }
        }

        /* Popup CSS */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .popup.active {
            display: block;
        }

        .popup h3 {
            margin: 0;
        }
    </style>

<style>
    .noidung {line-height: 24px}
    .noidung p {margin-bottom: 12px}
    #phuLuc span {display: block;font-weight: bold}
    #phuLuc a {display: block;margin-bottom: 5px;color: #333}
    #phuLuc a.tagh3 {margin-left: 25px}
    #phuLuc a:hover {color: #0d7182}
    #phuLuc {padding: 10px 20px;background-color: #eee;margin-bottom: 20px}
</style>
<!-- #region Footer chung -->
<!--Hotline chân trang góc phải-->
<a class="hotineBottom" href="tel:1800 6680">
  <span>1800 6680</span>
</a>
<!--Mạng xã hội bên phải-->
<div class="socialRight">
  <ul>
    <li>
      <a href="https://www.facebook.com/kimnam.nguyen.52493" target="_blank" rel="nofollow" title="Facebook DEMO TECH">
        <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/fbImg1.png" src="./themes/1000000/assets/css/images/fbImg1.png" alt="Facebook SUNHOUSE GROUP">
      </a>
    </li>
    <li>
      <a href="https://www.youtube.com/user/sunhousechanel" target="_blank" rel="nofollow" title="Youtube DEMO TECH">
        <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/ytImg1.png" src="./themes/1000000/assets/css/images/ytImg1.png" alt="Youtube SUNHOUSE GROUP">
      </a>
    </li>
  </ul>
</div>
<!--Nút back top-->
<div class="btn_top" style="display: none;">
  <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/backTopIcon.png" src="./themes/1000000/assets/css/images/backTopIcon.png" alt="Top">
</div>

<?php  
include_once('./master_layout/chacha/footer.php') 
?>