<?php
    
    $open = "user";
    require_once __DIR__ ."/../../autoload/autoload.php";
    
    if(isset($_GET['page']))
    {
        $p = $_GET['page'];
    }
    else
    {
        $p = 1;
    }
    //truy van doi ten cot category name bang chu
    $sql = "SELECT users.* FROM users ORDER BY ID DESC";
        
    $admin = $db->fetchJone('users',$sql,$p, 20,true);
    
    if(isset($admin['page']))
    {
        $sotrang = $admin['page'];
        unset($admin['page']);
    }
   // $admin = $db->fetchAll("admin");
?>
<?php require_once __DIR__ ."/../../layouts/header.php"; ?>
                    <!-- Page Bảo hành điện tử -->
                    <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Kích hoạt bảo hành</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    background-color: #f0f0f0;
                                    margin: 0;
                                    padding: 20px;
                                }

                                .container {
                                    max-width: 600px;
                                    margin: 0 auto;
                                    background-color: #fff;
                                    padding: 20px;
                                    border-radius: 10px;
                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                }

                                h2 {
                                    text-align: center;
                                    margin-bottom: 20px;
                                }

                                form {
                                    display: flex;
                                    flex-direction: column;
                                }

                                label {
                                    margin-bottom: 10px;
                                    font-weight: bold;
                                }

                                input[type="text"] {
                                    padding: 10px;
                                    margin-bottom: 20px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                }

                                button {
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

                                /* Table CSS */
                                table {
                                    width: 100%;
                                    border-collapse: collapse;
                                    margin-top: 20px;
                                }

                                table, th, td {
                                    border: 1px solid #ccc;
                                }

                                th, td {
                                    padding: 10px;
                                    text-align: left;
                                }

                                th {
                                    background-color: #f8f8f8;
                                }
                            </style>

                            <style>
                                .choosemanufac {
                                    display: block;
                                    overflow: hidden;
                                    margin: 15px 0 0;
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
                                    width: 320px;
                                    margin: 8px auto;
                                    border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    font-size: 16px;
                                    color: #4a90e2;
                                    text-align: center;
                                }
                            </style>
                        </head>
                        <body>

                        <div class="">
                            <div data-html-id="1120">
                                <div class="choosemanufac">
                                <h3>Chính sách đổi trả, bảo hành cho khách hàng Điện Máy Xanh</h3>
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
                                <a class="viewmorewar" href="https://www.dienmayxanh.com/bao-hanh-doi-tra" target="_blank" title="Chính sách đổi trả, bảo hành cho khách hàng Điện Máy Xanh">Xem thêm chính sách đổi trả <span>›</span>
                                </a>
                                </div>
                            </div>
                            </div>

                        <div class="container">
                            <h2>Kích hoạt bảo hành</h2>

                            <!-- Form kích hoạt -->
                            <form id="warrantyForm">
                                <label for="warrantyCode">Nhập mã bảo hành:</label>
                                <input type="text" id="warrantyCode" placeholder="Nhập mã bảo hành" required>
                                <button type="submit">Kích hoạt</button>
                            </form>

                            <!-- Popup thông báo thành công -->
                            <div id="successPopup" class="popup">
                                <h3>Kích hoạt bảo hành thành công!</h3>
                                <button id="closePopup">Đóng</button>
                            </div>

                            <!-- Bảng tra cứu mã bảo hành -->
                            <h2>Danh sách mã bảo hành</h2>
                            <table>
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã bảo hành</th>
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody id="warrantyList">
                                <tr>
                                    <td>1</td>
                                    <td>ABC123</td>
                                    <td>Đã kích hoạt</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>XYZ789</td>
                                    <td>Chưa kích hoạt</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            // Xử lý sự kiện submit form kích hoạt bảo hành
                            document.getElementById('warrantyForm').addEventListener('submit', function (e) {
                                e.preventDefault();

                                // Hiển thị popup thành công
                                document.getElementById('successPopup').classList.add('active');
                            });

                            // Đóng popup khi bấm nút đóng
                            document.getElementById('closePopup').addEventListener('click', function () {
                                document.getElementById('successPopup').classList.remove('active');
                            });
                        </script>

                        </body>
                        </html>

<!-- /.row -->
<?php require_once __DIR__ ."/../../layouts/footer.php"; ?>
 