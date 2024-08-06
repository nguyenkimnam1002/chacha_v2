<?php 
    
    require_once __DIR__ ."/master_layout/chacha/header.php";
    
    //id nhóm sản phẩm
    $id = intval(getInput('id'));

    // Get sản phẩm theo danh mục
    $sql = "SELECT p.*, ifnull(p.thunbar, img.thunbar) as image  FROM product p 
            LEFT JOIN (select DISTINCT product_id, thunbar from image_file img LIMIT 1) img on p.id = img.product_id
            where (p.category_id = $id or $id = 0) ORDER BY ID";
    $spTheoDanhMuc = $db->fetchsql($sql);

    // Get sản phẩm hot
    $sql1 = "SELECT p.*, ifnull(p.thunbar, img.thunbar) as image  FROM product p 
            LEFT JOIN (select DISTINCT product_id, thunbar from image_file img LIMIT 1) img on p.id = img.product_id
            where (p.category_id = $id or $id = 0) ORDER BY ID LIMIT 10";
    $spHot = $db->fetchsql($sql1);
?>
    
<style>
    .header_box.stick {
        position: unset;
    }
    .header_box.stick {position: fixed;}
    .header_box .logo .scroll {display: none !important;}

    .slide_with_thumb{display:block}
</style> 
<div class="master_page">
  <div class="breadcrums">
    <div class="container">
      <div class="row">
        <ul>
          <li>
            <a href="index.php" title="Trang chủ">Trang chủ</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/do-gia-dung" title="Đồ gia dụng">Đồ gia dụng</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
<div class="container">  
  <!-- Start slick sản phẩm  mới-->
  <div class="newsProductDetail">
    <h2 class="reset">
      <a href="https://sunhouse.com.vn/san-pham-moi" title="Sản phẩm mới" class="name">Sản phẩm mới</a>
    </h2>
    <div class="itemProductCT" role="toolbar">
    <?php foreach($spHot as $item) :?> 
        <div class="item" data-slick-index="-5" aria-hidden="true" style="width: 381px;" tabindex="-1">
            <div class="wrapper">
              <div class="khungAnh">
                <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0" tabindex="-1">
                  <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class="lazyload">
                </a>
              </div>
              <div class="outer">
                <h3 class="reset">
                  <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="name" tabindex="-1"><?php echo $item['name'] ?></a>
                </h3>
                <div class="model">Mã: SHG2503MSA</div>
                <div class="rate">
                  <ul>
                    <li class="active">
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </li>
                    <li class="active">
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </li>
                    <li class="active">
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </li>
                    <li class="active">
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </li>
                    <li class="active">
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </li>
                  </ul>
                  <span>1 đánh giá</span>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
          
      <ul class="slick-dots" style="display: flex;" role="tablist">
        <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation10" id="slick-slide10">
          <button type="button" data-role="none" role="button" tabindex="0">1</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation11" id="slick-slide11" class="">
          <button type="button" data-role="none" role="button" tabindex="0">2</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation12" id="slick-slide12" class="">
          <button type="button" data-role="none" role="button" tabindex="0">3</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation13" id="slick-slide13" class="">
          <button type="button" data-role="none" role="button" tabindex="0">4</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation14" id="slick-slide14" class="">
          <button type="button" data-role="none" role="button" tabindex="0">5</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation15" id="slick-slide15" class="">
          <button type="button" data-role="none" role="button" tabindex="0">6</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation16" id="slick-slide16" class="">
          <button type="button" data-role="none" role="button" tabindex="0">7</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation17" id="slick-slide17" class="">
          <button type="button" data-role="none" role="button" tabindex="0">8</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation18" id="slick-slide18" class="">
          <button type="button" data-role="none" role="button" tabindex="0">9</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation19" id="slick-slide19" class="">
          <button type="button" data-role="none" role="button" tabindex="0">10</button>
        </li>
        <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation110" id="slick-slide110" class="slick-active">
          <button type="button" data-role="none" role="button" tabindex="0">11</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation111" id="slick-slide111" class="">
          <button type="button" data-role="none" role="button" tabindex="0">12</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation112" id="slick-slide112" class="">
          <button type="button" data-role="none" role="button" tabindex="0">13</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation113" id="slick-slide113" class="">
          <button type="button" data-role="none" role="button" tabindex="0">14</button>
        </li>
        <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation114" id="slick-slide114" class="">
          <button type="button" data-role="none" role="button" tabindex="0">15</button>
        </li>
      </ul>
    </div>
  </div>
  <!-- End sản phẩm mới  -->
   <!-- star khối danh mục sản phẩm -->
   <div class="cateProductD doGiaDung">
        <?php foreach($spTheoDanhMuc as $item) :?>
        <div class="item">
            <div class="wrapper">
            <div class="khungAnh">
                <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0">
                <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['slug'] ?>" class=" lazyloaded">
                </a>
            </div>
            <h2 class="reset">
                <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="name"><?php echo $item['name'] ?></a>
            </h2>
            <div class="text"></div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    
   <!-- End khối danh mục sản phẩm -->
</div>    
<script src="./Theme/1000000/Assets/js/ProductDetail.min.js" defer=""></script>
<script src="./Theme/1000000/Assets/js/jquery.min.js" defer=""></script>
<?php include_once('./master_layout/chacha/footer.php'); ?>