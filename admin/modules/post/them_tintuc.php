<?php
require('./connect.php'); 
?>

<?php

    $open = "posts";
    require_once __DIR__ ."/../../autoload/autoload.php";
    // $sql = "SELECT *FROM posts inner join account on posts.user_id=account.id";
    // $sql = "SELECT *FROM posts inner join categories on posts.category_id=categories.id";
    $sql_category= "SELECT * FROM categories";
    $sql_post = "SELECT * FROM posts";

    $num = $db->maxIdTable("posts");
    $index1 = $num['id'];
    $id_post= $index1 += 1;

    
    $query_category = mysqli_query($conn, $sql_category);
    if(isset($_POST['sbm'])){
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        
        $content = $_POST['content'];
        
        $category = $_POST['category_id'];
        $category_id = (int)$category;

        $account = $_POST['accounts_id'];
        $accounts_id = (int)$account;

        $status = $_POST['status'];

        $sql = "INSERT INTO posts (id, title, slug, image, content, category_id, accounts_id, status) VALUES ('$id_post','$title', '$slug', '$image', '$content','$category_id','$accounts_id', '$status')";
        if (isset($_FILES['image'])) 
        {
            $file_name=$_FILES['image']['name'];
            $file_tmp=$_FILES['image']['tmp_name'];
                //lưu ảnh vào produc
                $part=ROOT ."product/";
                        
        }
       
        if (mysqli_query($conn, $sql))
       //Thông báo nếu thành công
       {
        move_uploaded_file($image_tmp,$part.$file_name);
        $_SESSION['success']= "Thêm mới thành công!";
        //Quay tro lai trang category
        redirectAdmin("post");
       }
        else 
        //Hiện thông báo khi không thành công
        echo 'Không thành công. Lỗi' . mysqli_error($conn);
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>
<body>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Thêm bài viết</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
    
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" require>
                    </div>
    
                    <div class="form-group">
                        <label for="">Ảnh bài viết</label>
                        <input type="file" name="image" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label for="">Nội dung</label>
                        <textarea type="file"name="content" class="form-control form-control-size" id="content" require></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Thể loại</label>
                        <select name="category_id" id="category_id">
                            <?php while ($row = mysqli_fetch_assoc($query_category)):?>
                                <option value=<?php echo $row['id'];?>> <?php echo $row['name'];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="radio" name="status" value="PUBLIC" checked>Public
                        <input type="radio" name="status" value="PRIVATE"> Private
                    </div>
    
                    <div class="form-group">
                        <label for="">Người viết</label>
                        <input type="text" name="accounts_id" class="form-control" require>
                    </div>
                    
                    <button name= "sbm" class="btn btn-success">Thêm</button>
                </form>
            </div>
        </div>
    
    </div>
</body>
</html>

<script>
    CKEDITOR.replace( 'content' );
</script>