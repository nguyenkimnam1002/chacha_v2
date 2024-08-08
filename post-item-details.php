<?php  
    require_once __DIR__ ."/master_layout/chacha/header.php";
    require('./connect.php');
?>
<?php
  $open = "posts";
  require_once __DIR__ ."/autoload/autoload.php";
  if(isset($_POST['content']) && isset($_POST['submit'])) {
    $content=$_POST['content'];
    if(isset($_SESSION['account'])) {
      $post_id=$_GET['id'];
      $account_id=$_SESSION['account']['id'];
      $query = "INSERT comments(account_id, post_id, content) VALUES('$account_id', '$post_id', '$content')"; 

      $result = mysqli_query($conn, $query);
    }
  }
?>

<?php
if(isset($_GET['id']) && isset($_GET['category_id'])){
  $id=$_GET['id'];
  $category_id=$_GET['category_id'];
  $sql = "SELECT * FROM posts WHERE id='$id'"; // Câu lệnh select
  $query = mysqli_query($conn, $sql); // thực hiện câu lệnh query - select. Kết quả trả về là 1 mảng collection (các row)
  $rn = $query->fetch_array(MYSQLI_ASSOC); // Lấy bản ghi đầu tiên của kết quả
  if(mysqli_num_rows($query)  == 0) {
    header('Location: index.php');
  }

  $sql = "SELECT * FROM posts WHERE category_id='$category_id' AND id <> '$id'  ORDER BY id DESC LIMIT 3";
  $query_post = mysqli_query($conn, $sql);

  $sql_comments = "SELECT c.content, c.post_id, a.username FROM `comments` as C join `accounts` as A on c.account_id = a.id where c.post_id = '$id'";
  $query_comments = mysqli_query($conn, $sql_comments);
} else {
  header('Location: index.php');
}


?>

<?php  
    while($row = mysqli_fetch_array($query_post)){ /////<!-- Lấy từng bản ghi trong kết quả truy vấn -->
      $id = $row['id'];
      $title = $row['title']; 
    }
?>
  <!-- sticky header end --> 
  <!-- bage header Start -->
  <?php
  // $dt->select("SELECT * FROM posts WHERE id='$id' ORDER BY id DESC LIMIT 10");
  // $r=$dt->fetch();
  ?>
  <div class="container">
    <div class="page-header">
      <h1><?php echo $rn['title']?></h1>
    </div>
    
    
    <div id="news">
      <div id="news_image">
         <img alt="<?php echo $rn['title']; ?>" src="<?php echo uploads()?>product/<?php echo $rn['image'] ?>" class="rounded" width="670">
      </div> 
      <div id="news_content">
        <p><?php echo $rn['content']; ?></p>
      </div>
      <div id="news_more">
        <h4><?php echo "<a>||</a>Tin liên quan"; ?></h4></br>
        <ul>
          <li><?php echo"<a href='post-item-details-new.php?category_id=$category_id&id=$id'>$title</a>"?></li>
        </ul>
      </div>  
      <div class="well">
        <h4>Viết bình luận...</h4></br>
        <form action="" method="POST" role="form">
              <div class="form-group">
                  <textarea class="form-control" name="content" rows="5"></textarea>
              </div>
              <?php if(isset($_SESSION['account'])):?>
              <button type="submit" name="submit" value="Submit" class="btn btn-primary">Gửi</button>
              <?php endif; ?>
        </form>
      </div>
      <div class="news_comments">
        <h4>Bình luận</h4><br>
        <table>
        <?php while($row=mysqli_fetch_array($query_comments)): ?>
                  <tr>
                    <p><b><?php echo $row['username']; ?>: </b><?php echo $row['content']; ?></p>
                  </tr>
      <?php endwhile;?>
        </table>
      </div>
    </div>
  </div> 
  
  
  <!-- bage header End --> 
<style>
  #news{
    width: 670px;
    margin-left: 150px;
  }
  
  p{
    width: 670px;
    margin-top: 30px;
    color: #222;
    letter-spacing: 1px;
    font-size: 13px;
    font-family: Arial,sans-serif;
  }

  #news_more{
    margin-top: 110px;
    margin-bottom: 25px;
  }

  a{
    color: #06c;
  }

  .well{
    margin-top: 75px;
    margin-bottom: 50px;
  }
    
</style>
<?php  
include_once('./master_layout/chacha/footer.php') 
?>
