<?php
    
    $open = "posts";
    require_once __DIR__ ."/../../autoload/autoload.php";
    
    $posts = $db->fetchAll("posts");

    $search = "";
    $limit = 5;
    $page = 1;
    if(isset($_REQUEST['p']) && (int)$_REQUEST['p'] >= 1) {
        $page = (int) $_REQUEST['p'];
    }
    if(isset($_GET['txtsearch'])){
        $search = $_GET['txtsearch'];
    }

    $offset = ($page - 1) * $limit;
    $sql = "SELECT p.*,loai.name as loai FROM posts p, categories loai WHERE p.category_id = loai.id and p.title LIKE '%$search%' LIMIT $offset, $limit";
    $sqlAll = "SELECT p.*,loai.name as loai FROM posts p, categories loai WHERE p.category_id = loai.id and p.title LIKE '%$search%'";
    
    $query = $db->fetchsql($sql);
    $count = $db->countSql($sqlAll);
    $totalPage = ceil($count/$limit) ?? 0;
?>
<?php require_once __DIR__ ."/../../layouts/header.php"; ?>
<!-- Page Heading NOI DUNG -->
<div class="content-wrapper" style="min-height: 365px;">
  <section class="content">
    <div class="container-fluid">
      <h2>Danh sách tin tức</h2></br>
      <form  action="" method="GET">
        <input type="text" name="txtsearch" class='searchform'/>
        <button class='sbutton' type="submit">Search</button>
      </form></br>
      <div class="row">
        <div class="table-responsive">
          <table cellspacing="0" cellpadding="0" class="table" style="display: block !important; overflow-x: auto !important; width: 100% !important;">
            <thead>
              <tr>
                 <td scope="row">ID</td>
                 <td scope="row">Tittle</td>
                 <td scope="row">Slug</td>
                 <td scope="row">Ảnh</td>
                 <td scope="row">Nội dung</td>
                 <td scope="row">Loại</td>
                 <td scope="row">Ngày tạo</td>
                 <td scope="row">Ngày sửa</td>
	             <td scope="row">Trạng thái</td>
                 <td scope="row" colspan="2"><a href="them_tintuc.php">Thêm</a></td>
              </tr>
            <thead>
<?php foreach ($query as $item): ?>
<tr>
  <td><?php echo $item['id']; ?></td>
  <td><?php echo $item['title']; ?></td>
  <td><a href="<?php echo $item['slug']; ?>"><?php echo $item['slug']; ?></a></td>
  <td><img src="<?php echo uploads()?>product/<?php echo $item['image']?>" width="170px">
  <td><a href="<?php echo $item['content']; ?>"><?php echo $item['content']; ?></a></td>
  <td><a href="<?php echo $item['loai']; ?>"><?php echo $item['loai']; ?></a></td>
  <td><?php echo $item['created_at']; ?></td>
  <td><?php echo $item['updated_at']; ?></td>
  <td><?php echo $item['status']; ?></td>
  <td><a href="sua_tintuc.php?id=<?php echo $item['id']; ?>">Sửa</a></td>
  <td><a href="xoa_tintuc.php?id=<?php echo $item['id']; ?>">Xóa</a></td>
</tr>
<?php endforeach;?>
</table>

  <?php 
  for ($i=1; $i <= $totalPage; $i++)
    if($i == $page) {
      echo "<a href = 'index.php?p=$i' style='font-size: 20px; color: red; margin: 0px 4px;'> $i </a>";
    } else{
      echo "<a href = 'index.php?p=$i' style='margin: 0px 2px;'> $i </a>";
    }
  ?>
        </div>
      </div>

    </div>
  </section>
</div>
<style>

    .sbutton {
    color: #007bff;
    border-radius: 10px;
    }

    h2{
    padding-top: 10px;
    }
    
    .form{
    border: 2px solid black;
    border-radius: 5px;
    }


</style>
<!-- /.row -->
<?php require_once __DIR__ ."/../../layouts/footer.php"; ?>