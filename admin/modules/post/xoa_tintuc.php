<?php
require_once __DIR__ ."/../../autoload/autoload.php"; ?>

<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id= $id";
    if (mysqli_query($conn, $sql))
       //Thông báo nếu thành công
       {
        echo 'Xóa thành công';
        header("Location: index.php");
       }
   else
       //Hiện thông báo khi không thành công
       echo 'Không thành công. Lỗi' . mysqli_error($conn);
       
?>