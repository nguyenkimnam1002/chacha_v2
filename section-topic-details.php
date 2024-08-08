<?php  
    require_once __DIR__ ."/master_layout/chacha/header.php";
    require('./connect.php');
?>
<?php
  $open = "posts";
  require_once __DIR__ ."/autoload/autoload.php";
  ?>
<!-- sticky header end -->
<div class="container">
  <div class="page-header">
    <?php

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT name FROM categories WHERE id ='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

    ?>
      <h1><?php echo $row['name'] ?></h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>


        <li class="active"><?php echo $row['name'] ?></li>
      </ol>

  </div>

  <div class="row">
    <div class="ind">
    <?php
    }
    $sql = "SELECT * FROM posts WHERE category_id='$id' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $idtin = $row['id'];
      $tieude = $row['title'];
      $category_id = $row['category_id'];
      $image = $row['image'];


    ?>

      <div class="col">
        <li class=bantin>
          <?php echo "<a href='post-item-details-new.php?id=$idtin&category_id=$category_id'><img src='$image' width='200px' height='150px' /></a>";
          echo "<a href='post-item-details-new.php?id=$idtin&category_id=$category_id'><h4>$tieude </h4></a>"; ?>
        </li>
      </div>
    <?php } ?>
    </div>

  </div>
</div>

<?php  
include_once('./master_layout/chacha/footer.php') 
?>
<style>
  .ind {
    width: 100%;
    float: left;
  }

  .col {
    float: left;
    width: 25%;
    padding: 35px;
  }

  .bantin {
    list-style-type: none;
    float: left;
  }

  h4{
    margin-top: 17px;
  }
</style>