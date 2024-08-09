<?php  
  require_once __DIR__ ."/master_layout/chacha/header.php";
  require('./connect.php');
?>
<?php
  $open = "posts";
  require_once __DIR__ ."/autoload/autoload.php";

  //id nhóm sản phẩm
  $id = intval(getInput('id'));

  // Lấy tất cả nhóm tin tức 
  $sql = "SELECT * FROM categories ORDER BY ID";
  $nhomTin = $db->fetchsql($sql);

  // Lấy tin tức thuộc nhóm tin tức
  $sql3 = "SELECT * FROM posts where (category_id = $id or $id = 0) ORDER BY ID LIMIT 9";
  $tin = $db->fetchsql($sql3);

  // Count số lượng tin tức sẵn có 
  $sql4 = "SELECT count(1) as slTin FROM posts";
  $resultSL = mysqli_query($conn, $sql4);
  $rowSl = mysqli_fetch_assoc($resultSL);
?>
<div class="master_page thuvienPage thuVienTinPage">
  <div class="breadcrums">
    <div class="container">
      <div class="row">
        <ul>
          <li>
            <a href="/" title="Trang chủ">Trang chủ</a>
          </li>
          <li>
          <?php
            // Lấy tên nhóm tin tức
            if (isset($_GET['id'])) {
              $id1 = $_GET['id'];
              $sql1 = "SELECT name FROM categories WHERE id ='$id1'";
              $result = mysqli_query($conn, $sql1);
              $row = mysqli_fetch_assoc($result);
              echo "<a href='".base_url()."section-topic-details-new.php?id=".$id1."' title='".$row['name']."'>".$row['name']."</a>";
            } else {
              echo "<a href='".base_url()."section-topic-details-new.php'>Tổng hợp  </a>";
            } ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bannerBox">
    <div class="khungAnh">
      <div class="khungAnhCrop">
        <img src="./themes/1000000/assets/css/pic_css/tinTucBanner.png" class="wide">
      </div>
    </div>
    <div class="title">
      <div class="reset">Tin hoạt động</div>
    </div>
    <div class="listCate">
      <div class="container">
        <div class="groupList slick_auto_width" role="toolbar">
          <!-- Lấy tất cả nhóm tin tức  -->
          <?php foreach($nhomTin as $item) :?>
              <div class="item">
                <div class="itemTitle">
                  <a href="section-topic-details-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" tabindex="0"><?php echo $item['name'] ?></a>
                </div>
              </div>
          <?php  endforeach ?>
              <div class="item">
                <div class="itemTitle">
                  <a href="section-topic-details-new.php" title="THÔNG BÁO" tabindex="-1">THÔNG BÁO</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="section-topic-details-new.php" title="Tin thường thức" tabindex="-1">Tin thường thức</a>
                </div>
              </div>
              
            <ul class="slick-dots" style="display: block;" role="tablist">
            <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00">
              <button type="button" data-role="none" role="button" tabindex="0">1</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class="">
              <button type="button" data-role="none" role="button" tabindex="0">2</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02">
              <button type="button" data-role="none" role="button" tabindex="0">3</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03">
              <button type="button" data-role="none" role="button" tabindex="0">4</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation04" id="slick-slide04">
              <button type="button" data-role="none" role="button" tabindex="0">5</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation05" id="slick-slide05">
              <button type="button" data-role="none" role="button" tabindex="0">6</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation06" id="slick-slide06">
              <button type="button" data-role="none" role="button" tabindex="0">7</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation07" id="slick-slide07">
              <button type="button" data-role="none" role="button" tabindex="0">8</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation08" id="slick-slide08">
              <button type="button" data-role="none" role="button" tabindex="0">9</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation09" id="slick-slide09">
              <button type="button" data-role="none" role="button" tabindex="0">10</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation010" id="slick-slide010">
              <button type="button" data-role="none" role="button" tabindex="0">11</button>
            </li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation011" id="slick-slide011">
              <button type="button" data-role="none" role="button" tabindex="0">12</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="masterPage">
    <div class="boxDanhMuc1">
      <div class="thuVienTinDS">
        <div class="container">
          <div class="groupItem">
            <?php foreach($tin as $item) :?>
              <div class="itemBox">
                <div class="khungAnh">
                  <a class="khungAnhCrop" href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>">
                    <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['title'] ?>" class="lazyloaded wide">
                  </a>
                </div>
                <h2 class="itemTitle">
                  <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>"><?php echo $item['title'] ?></a>
                </h2>
                <div class="itemDescription"><?php echo $item['content'] ?></div>
                <a class="itemMore" href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="Chi tiết">Chi tiết <?php echo $item['id']?><i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </div>
            <?php endforeach ?>
            
          </div>
          <a class="moreContent1" href="#" data-itemperpage="12" data-categoryid="1" data-nextpage="2">Xem thêm <span><?php echo $rowSl['slTin'] ?></span> tin tức khác </a>
        </div>
      </div>
    </div>
  </div>
</div>

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