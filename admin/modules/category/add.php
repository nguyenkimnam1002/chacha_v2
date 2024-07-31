<?php
    $open = "category";
    require_once __DIR__ ."/../../autoload/autoload.php";
  
   if($_SERVER["REQUEST_METHOD"]== "POST")
   {  
       $data =
       [
           "name" => postInput('name'),
           //Chuyen thanh khong dau , cach thanh -
           "slug" =>  to_slug(postInput("name"))
       ];
       
       $error = [];
       
       if(postInput('name') == '')
       {
           $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
       }
       if(! isset($_FILES['thunbar']))
       {
            $error['thunbar']="mời bạn chọn hình ảnh";           
       }
       // Trống có nghĩa là không có lỗi
       if(empty($error))
       {
           // Kiem tra ten moi them vao trung nhau
           $isset = $db->fetchOne("category", "name='".$data['name']."'");
           echo $isset;
           if($isset)
           {
               $_SESSION['error']="Tên danh mục đã tồn tại!";
               
           }
           else
           {
            if (isset($_FILES['thunbar'])) 
            {
                $file_name=$_FILES['thunbar']['name'];
                $file_tmp=$_FILES['thunbar']['tmp_name'];
                $file_type=$_FILES['thunbar']['type'];
                $file_erro=$_FILES['thunbar']['erro'];

                if($file_erro==0)
                {
                    //lưu ảnh vào produc
                    $part=ROOT ."product/";
                    //lấy tên của ảnh
                    $data['image']=$file_name;
                }                
            }
               $id_insert = $db->insert("category",$data);
            if($id_insert > 0)
            {
                move_uploaded_file($file_tmp,$part.$file_name);
                $_SESSION['success']= "Thêm mới thành công!";
                //Quay tro lai trang category
                redirectAdmin("category");
            }
            else
            {
                //Them that bai
                    $_SESSION['error']= "Thêm mới thất bại";
            }
           }       
       }
   }   
    
    
?>

<?php require_once __DIR__ ."/../../layouts/header.php"; ?>
                    <!-- Page Heading NOI DUNG -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới danh mục
                               
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li>
                                    <i></i> <a href="">Danh mục</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm mới
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- Thong bao loi -->
                            <?php require_once __DIR__ ."/../../../partials/notification.php"; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Tên danh mục" name="name">
                                  <?php if (isset($error['name'])): ?>
                                  <p class="text-danger"><?php echo $error['name']; ?></p> 
                                  <?php endif ?>
                                 
                              </div>
                              <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh minh hoạ nhóm sản phẩm</label>
                              <div class="col-sm-4">
                                <input type="file" class="form-control" id="inputEmail3"  name="thunbar">
                                <?php if (isset($error['thunbar'])) : ?>
                                <p class="text-danger"> <?php echo $error['thunbar'] ?></p>   
                                <?php endif ?>            
                              </div>  
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Lưu</button>
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>
<?php require_once __DIR__ ."/../../layouts/footer.php"; ?>
 