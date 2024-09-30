<?php  
  require_once __DIR__ ."/master_layout/chacha/header.php";
  require('./connect.php');
?>
<?php
    $open = "posts";
    require_once __DIR__ ."/autoload/autoload.php";

    $posts = $db->fetchAll("posts");

    $search = "";
    $stt = 1;
    if(isset($_GET['searchQuery'])){
        $search = $_GET['searchQuery'];
    }
    if($search != "" && $search != " "){
        // $sql = "SELECT * FROM warranty";
        // $sql = "SELECT * FROM warranty WHERE cus_name LIKE '%$search%'";
        $sql = "SELECT * FROM warranty WHERE cus_name LIKE '%$search%' or cus_phone LIKE '%$search%' OR pro_seri LIKE '$search' ORDER BY ID DESC LIMIT 10";
        
        $query = $db->fetchsql($sql);
    }else{
        $query = "";
    }
?>
    <div class="container">
        <h2>Tra cứu bảo hành</h2>

        <!-- Form tra cứu -->
        <form class="search-form" id="warrantySearchForm" action="" method="GET">
            <input type="text" name="searchQuery" id="searchQuery" placeholder="Nhập mã bảo hành hoặc số điện thoại hoặc tên khách hàng" required>
            <button type="submit">Tra cứu</button>
        </form>

        <!-- Bảng kết quả tra cứu bảo hành -->
        <?php if ($query != ""){?>
        <div class="table-responsive">
            <table id="warrantyTable">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sản phẩm/ Seri</th>
                    <th>Tên khách hàng</th>
                    <th>Sản phẩm</th>
                    <th>Ngày mua</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody id="warrantyList">
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['pro_seri']; ?></td>
                        <td><?php echo $item['cus_name']; ?></td>
                        <td><?php echo $item['pro_name']; ?></td>
                        <td><?php echo $item['pro_date']; ?></td>
                        <td>Đã kích hoạt</td>
                    </tr>
                    <?php $stt++ ?>
                <?php endforeach ?>
                <!-- Các dòng kết quả khác có thể thêm vào đây -->
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>

    <script>
    // Xử lý sự kiện khi form tra cứu được submit
    // document.getElementById('warrantySearchForm').addEventListener('submit', function (e) {
    //     e.preventDefault(); // Ngăn chặn hành động mặc định khi submit form

    //     // Lấy giá trị từ ô tìm kiếm
    //     const query = document.getElementById('searchQuery').value;

    //     // Hiển thị bảng nếu có dữ liệu nhập
    //     if (query.trim() !== "") {
    //         document.getElementById('warrantyTable').style.display = 'table';
    //     } else {
    //         alert('Vui lòng nhập mã bảo hành hoặc số điện thoại hoặc tên khách hàng để tra cứu.');
    //     }
    // });
</script>
<style>
    

    h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form tra cứu */
        .search-form {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-form input[type="text"] {
            width: 75%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-form button:hover {
            background-color: #218838;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            /* display: none; Bảng sẽ ẩn cho đến khi bấm tra cứu */
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 16px;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .search-form {
                flex-direction: column;
            }

            .search-form input[type="text"] {
                width: 100%;
                margin-bottom: 10px;
            }

            .search-form button {
                width: 100%;
            }
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