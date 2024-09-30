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
                    <div class="container">
    <h2>Tra cứu bảo hành</h2>

    <!-- Form tra cứu -->
    <form class="search-form" id="warrantySearchForm">
        <input type="text" id="searchQuery" placeholder="Nhập mã bảo hành/sđt hoặc tên khách hàng">
        <button type="submit">Tra cứu</button>
    </form>

    <!-- Bảng danh sách bảo hành -->
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã bảo hành</th>
                <th>Tên khách hàng</th>
                <th>SĐT</th>
                <th>Sản phẩm</th>
                <th>Ngày mua</th>
                <th>Thời gian bảo hành (tháng)</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody id="warrantyList">
            <tr>
                <td>1</td>
                <td>ABC123</td>
                <td>Nguyễn Văn A</td>
                <td>02113555666</td>
                <td>Điện thoại XYZ</td>
                <td>01/01/2023</td>
                <td>12</td>
                <td>Đã kích hoạt</td>
            </tr>
            <tr>
                <td>2</td>
                <td>XYZ789</td>
                <td>Trần Thị B</td>
                <td>02113555666</td>
                <td>Laptop ABC</td>
                <td>15/05/2023</td>
                <td>12</td>
                <td>Chưa kích hoạt</td>
            </tr>
            <!-- Các dòng khác -->
            </tbody>
        </table>
    </div>
</div>

<script>
    // Xử lý sự kiện form tra cứu
    document.getElementById('warrantySearchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const query = document.getElementById('searchQuery').value;
        alert('Đang tìm kiếm mã bảo hành hoặc tên khách hàng: ' + query);
        // Logic tra cứu thực tế có thể thêm vào đây
    });
</script>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
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

        /* Form tra cứu */
        .search-form {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        .search-form input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
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

        .table-responsive {
            overflow-x: auto;
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

<!-- /.row -->
<?php require_once __DIR__ ."/../../layouts/footer.php"; ?>
 