<?php
    $open = "category";
    require_once __DIR__ ."/../../autoload/autoload.php";
    
   $id = intval(getInput('id')); // ep kieu
   
   $EditCategory = $db->fetchID("category", $id);
   //Neu Id khong co thi tra ve index
   if(empty($EditCategory))
   {
       $_SESSION['error']= "Dữ liệu không tồn tại";
       redirectAdmin("category");
   }
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
       // Trống có nghĩa là không có lỗi
       if(empty($error))
       {
           // Kiem tra ten danh muc cap nhat
           if($EditCategory['name'] !=$data['name'])
           {
               $isset = $db->fetchOne("category", "name='".$data['name']."'");
           
                if(($isset)>0)
                {
                    $_SESSION['error']="Tên danh mục đã tồn tại!";

                }
                else
                {
                    // Check ten file image
                    $isset = $db->fetchOne("category", "image='".$data['image']."'");
           
                    if(($isset)>0)
                    {
                        $_SESSION['error']="Trùng tên ảnh!";

                    }else{

                        if (isset($_FILES['image'])) 
                        {
                            $file_name=$_FILES['image']['name'];
                            $file_tmp=$_FILES['image']['tmp_name'];
                            $file_type=$_FILES['image']['type'];
                            $file_erro=$_FILES['image']['erro'];

                            if($file_erro==0)
                            {
                                //lưu ảnh vào produc
                                $part=ROOT ."product/";
                                //lấy tên của ảnh
                                $data['image']=$file_name;
                            }                
                        }

                        $id_update = $db->update("category",$data,array("id"=>$id));
                        if($id_update > 0)
                        {
                            move_uploaded_file($file_tmp,$part.$file_name);
                            $_SESSION['success']= "Cập nhật thành công!";
                            //Quay tro lai trang category
                            redirectAdmin("category");
                        }
                        else
                        {
                            //Them that bai
                            $_SESSION['error']= "Dữ liệu không thay đổi";
                            redirectAdmin("category");
                        }
                        
                    }
                }       
           }
           else
           {
            $id_update = $db->update("category",$data,array("id"=>$id));
                     if($id_update > 0)
                     {
                         $_SESSION['success']= "Cập nhật thành công 2!";
                         //Quay tro lai trang category
                         redirectAdmin("category");
                     }
                     else
                     {
                         //Them that bai
                          $_SESSION['error']= "Dữ liệu không thay đổi kiểm tra tên hoặc hình ảnh minh hoạ";
                          redirectAdmin("category");
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
                                <small>Subheading</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li>
                                    <i></i> <a href="">Danh mục</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Cập nhật
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
                            <form class="form-horizontal" action="" method="POST"  enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Tên danh mục" name="name" value="<?php echo $EditCategory['name'] ?>">
                                  <?php if (isset($error['name'])): ?>
                                  <p class="text-danger"><?php echo $error['name']; ?></p> 
                                  <?php endif ?>
                                 
                              </div>
                              
                              <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh minh hoạ nhóm sản phẩm</label>
                              <div class="col-sm-4">
                                <input type="file" class="form-control" id="inputEmail3"  name="image" value="<?php echo $EditCategory['image'] ?>">
                                <?php if (isset($error['image'])) : ?>
                                <p class="text-danger"> <?php echo $error['image'] ?></p>   
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
 