<?php 

require('./autoload/autoload.php');

//unset($_SESSION['cart']);
 
$sqlHomecate = "SELECT name, id FROM category WHERE home = 1 ORDER BY updated_at";
$CategoryHome = $db->fetchsql($sqlHomecate);

$data = [];

foreach ($CategoryHome as $item)
{
 
    //ep kieu 
    $cateId = intval($item['id']);
    //Loc ra
    $sql = "SELECT * FROM product WHERE category_id = $cateId";
    $ProductHome = $db->fetchsql($sql);
 
    // mang 2 chieu
    $data[$item['name']] =$ProductHome; 
   
}

// Post giới thiệu (id = 1) lấy 4 tin
$sql1 = "SELECT * FROM posts WHERE category_id = 1 ORDER BY ID DESC LIMIT 4";
$tuVan = $db->fetchsql($sql1);

// Post Tin tức sự kiện (id = 2) lấy 1 tin
$sql2 = "SELECT * FROM posts WHERE category_id = 2 ORDER BY ID DESC LIMIT 1";
$tuVan2 = $db->fetchsql($sql2);

// Post tư vấn sp (id = 3) lấy 1 tin
$sql3 = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 1";
$tuVan3 = $db->fetchsql($sql3);

// Post bảo hành (id = 5) lấy 1 tin
$sql5 = "SELECT * FROM posts WHERE category_id = 5 ORDER BY ID DESC LIMIT 1";
$tuVan5 = $db->fetchsql($sql5);

// Post xuất khẩu (id = 6) lấy 1 tin
$sql6 = "SELECT * FROM posts WHERE category_id = 6 ORDER BY ID DESC LIMIT 1";
$tuVan6 = $db->fetchsql($sql6);

// Post tuyển dụng (id = 7) lấy 1 tin
$sql7 = "SELECT * FROM posts WHERE category_id = 7 ORDER BY ID DESC LIMIT 1";
$tuVan7 = $db->fetchsql($sql7);
?>
<head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>


<!-- #region Các mã có thể nhúng vào đầu thẻ body như Google Analytics, Facebook,... -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTDD9VG" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- #endregion -->
  <!-- #region Thanh loading ajax -->
  <div class="progress-ajax-wrap">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
    </div>
  </div>
  <!-- #endregion -->
  <!-- #region Các biến dùng dung trong js được lấy từ code behind -->
  <script>
    var NoImageSrcThumb = "/pic/noimage/no-image-thumb.png";
    var NoImageSrcSmall = "/pic/noimage/no-image-small.png";
    var NoImageSrcCompact = "/pic/noimage/no-image-compact.png";
    var NoImageSrcMedium = "/pic/noimage/no-image-medium.png";
    var NoImageSrcLarge = "/pic/noimage/no-image-large.png";
    var NoMaleImageSrcThumb = "/pic/noimage/man-thumb.png";
    var NoMaleImageSrcSmall = "/pic/noimage/man-small.png";
    var NoMaleImageSrcCompact = "/pic/noimage/man-compact.png";
    var NoMaleImageSrcMedium = "/pic/noimage/man-medium.png";
    var NoMaleImageSrcLarge = "/pic/noimage/man-large.png";
    var NoFemaleImageSrcThumb = "/pic/noimage/woman-thumb.png";
    var NoFemaleImageSrcSmall = "/pic/noimage/woman-small.png";
    var NoFemaleImageSrcCompact = "/pic/noimage/woman-compact.png";
    var NoFemaleImageSrcMedium = "/pic/noimage/woman-medium.png";
    var NoFemaleImageSrcLarge = "/pic/noimage/woman-large.png";
  </script>
  <!-- #endregion -->
  <!-- #region Header chung -->
  <div class="header_box">
    <div class="container">
      <div class="menuResBtn">
        <span class="openMenuRes"></span>
      </div>
      
      <style>
        /*css viết thêm để ẩn hiện submenu res*/
        .subMenuNganhHang .menuMainRes {
          display: none
        }
      </style>
      <script>
        /*js viết thêm để ẩn hiện submenu res*/
        //Đã chuyển vào NeedToAllModule.js
      </script>
      <div class="menuBox">
        <ul class="menuMain">
          <li class="home active">
            <a href="index.php" title="Trang chủ">
              <i class="fa fa-home" aria-hidden="true"></i>Trang chủ </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>section-topic-details-new.php?id=1" title="Giới thiệu" rel="nofollow">Giới thiệu</a>
            <span class="openSub"></span>
            <ul class="subMenu">
              <?php foreach($tuVan as $item) :?>
              <li>
                <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo  $item['title']?>" rel="nofollow"><?php echo  $item['title']?></a>
              </li>
              <?php endforeach ?>
              <li>
                <a href="/thong-diep-cua-chu-tich-hoi-dong-quan-tri-tap-doan-sunhouse" title="Thông điệp của Chủ tịch HĐQT" rel="nofollow">Thông điệp của Chủ tịch HĐQT</a>
              </li>
            </ul>
          </li>
          <li class="megaMenu">
            <a href="/san-pham" title="Sản phẩm" rel="nofollow">Sản phẩm</a>
            <span class="openSub"></span>
            <div class="menuSanPham">
              <div class="container">
                <div class="col1">
                  <div class="listDanhMuc">
                    <div class="title">
                      <a class="title" style="color: #000000;" href="<?php echo base_url() ?>danh-muc-san-pham-new.php">Danh mục sản phẩm </a>
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                    <ul>
                      <?php foreach($category as $item) :?>
                        <li class="menu-cate" data-id="<?php echo $item['id']?>">
                        <a href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>">
                          <span><?php echo $item['name']?></span>
                        </a>
                      </li>
                        <?php endforeach;?>
                      <li class="menu-cate" data-id="cate_1091">
                        <a href="/do-gia-dung">
                          <span>Đồ gia dụng</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col2">
                  <div class="listDanhMuc">
                    <div class="title">Nổi bật</div>
                    <?php foreach($category as $item) :?>
                      <?php 
                        //San pham thuoc loai danh muc
                        $sqlIn= "SELECT * FROM product WHERE category_id = ".$item['id']." ORDER BY ID DESC LIMIT 3";
                        $productIn= $db->fetchsql($sqlIn);
                      ?>
                      
                        <div class="menu-sub-cate" data-parent-id="<?php echo $item['id']?>">
                          <ul>
                            <?php foreach($productIn as $itemIn) :?>
                            <li>
                              <a href="chi-tiet-san-pham-new.php?id=<?php echo $itemIn['id']?>" title="<?php echo $itemIn['name']?>"><?php echo $itemIn['name']?></a>
                            </li>
                            <?php endforeach;?> 
                          </ul>
                          <a class="more1" href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>" title="Xem tất cả danh mục">Xem tất cả danh mục <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          </a>
                        </div>
                    <?php endforeach;?>  
                    <div class="menu-sub-cate" data-parent-id="cate_1091">
                      <ul>
                        <li>
                          <a href="/do-gia-dung/dong-san-pham-cao-cap-ultra-titanium" title="Dòng sản phẩm cao cấp Ultra Titanium">Dòng sản phẩm cao cấp Ultra Titanium</a>
                        </li>
                        <li>
                          <a href="/do-gia-dung/bo-noi-anod" title="Bộ nồi Anod">Bộ nồi Anod</a>
                        </li>
                        <li>
                          <a href="/do-gia-dung/chao-inox" title="Chảo Inox">Chảo Inox</a>
                        </li>
                        <li>
                          <a href="/do-gia-dung/bo-noi-inox" title="Bộ nồi Inox">Bộ nồi Inox</a>
                        </li>
                        <li>
                          <a href="/do-gia-dung/chao-chong-dinh" title="Chảo chống dính">Chảo chống dính</a>
                        </li>
                        <li>
                          <a href="/do-gia-dung/bo-noi-nhom" title="Nồi nhôm">Nồi nhôm</a>
                        </li>
                      </ul>
                      <a class="more1" href="/do-gia-dung" title="Xem tất cả danh mục">Xem tất cả danh mục <i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col3">
                  <?php foreach($category as $item) :?>
                    <div class="khungAnh menu-banner" data-parent-id="<?php echo $item['id']?>">
                      <a class="khungAnhCrop0" href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['id']?>" rel="nofollow">
                        <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['id']?>" class=" lazyloaded">
                      </a>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
          </li>
          <li>
          <!-- <?php foreach($tuVan6 as $item) :?>
            <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="Xuất khẩu" rel="nofollow">Xuất khẩu</a>
          <?php endforeach ?> -->
            <a href="<?php echo base_url() ?>section-topic-details-new.php?id=6" title="Xuất khẩu" rel="nofollow">Xuất khẩu</a>
          </li>
          <li>
            <a href="warranty.php" title="Bảo hành" rel="nofollow">Bảo hành</a>
          
          </li>
        </ul>
      </div>
      <style>
        /*css thêm để làm phần hover menu sản phẩm*/
        .megaMenu .menu-cate.active a {
          color: #0d7182
        }

        .megaMenu .menu-sub-cate {
          display: none
        }

        .megaMenu .menu-sub-cate.active {
          display: block
        }

        .megaMenu .menu-banner {
          display: none
        }

        .megaMenu .menu-banner.active {
          display: block
        }
      </style>
      <script>
        /*js thêm để hover ngành hàng thì hiện các nhóm hàng tương ứng*/
        //Chuyển vào viết ở NeededToAllModule.js
      </script>
      <div class="logo">
        <a href="/" title="Logo CHACHA" rel="nofollow">
          <img src="https://sunhouse.com.vn/pic/banner/logo.png" alt="Logo CHACHA" class="normal">
          <img src="https://sunhouse.com.vn/pic/banner/logoScroll.png" data-src="https://sunhouse.com.vn/pic/banner/logoScroll.png" alt="Logo CHACHA" class="scroll lazyloaded">
        </a>
      </div>
      <div class="headerRight">
        <div class="searchBox search-box-on-menu">
          <div class="auto-suggest-wrap">
            <input type="text" id="tbSearchKeywordsOnMenu" value="" placeholder="Nội dung tìm kiếm" onkeyup="CheckPostSearchOnMenu()">
            <div class="auto-suggest"></div>
          </div>
          <a class="btnSearch" href="javascript:void(0);" onclick="PostSearchOnMenu()"></a>
          <span class="iconSearch ttuc">
            <i class="fa fa-search" aria-hidden="true"></i>Tìm kiếm </span>
        </div>
        <script>
          function CheckPostSearchOnMenu() {
            event.preventDefault();
            if (event.keyCode === 13) PostSearchOnMenu();
            else AutoSuggestProductSearch();
          }

          function PostSearchOnMenu() {
            var searchKeyword = $("#tbSearchKeywordsOnMenu").val();
            if (searchKeyword.length > 0) window.location = "<?php echo base_url() ?>search-result-found.php?txtsearch=" + searchKeyword;
          }
        </script>
        <script>
          var sendSuggestSearch;

          function AutoSuggestProductSearch() {
            //Hủy ajax trước để đảm bảo chỉ chạy cái cuối
            if (sendSuggestSearch) {
              sendSuggestSearch.abort();
            }
            if ($("#tbSearchKeywordsOnMenu").val() === "") $(".search-box-on-menu .auto-suggest").hide();
            else {
              sendSuggestSearch = $.ajax({
                url: "./themes/1000000/ajax/product.aspx",
                type: "POST",
                dataType: "json",
                data: {
                  "action": "AutoSuggestProductSearch",
                  "searchkeyword": $("#tbSearchKeywordsOnMenu").val()
                },
                success: function(res) {
                  $(".search-box-on-menu .auto-suggest").html("");
                  $(".search-box-on-menu .auto-suggest").append(res[0]);
                  if (res.length > 0) $(".search-box-on-menu .auto-suggest").show();
                  else $(".search-box-on-menu .auto-suggest").hide();
                },
                error: function(error) {
                  $(".search-box-on-menu .auto-suggest").html("");
                  console.log("Có lỗi xảy ra. AutoSuggestProductSearch");
                }
              });
            }
          }
        </script>
        
        <div class="compare ttuc">
          <!-- <a href="/dai-ly" title="Đại lý" target="_self" rel="nofollow">Đại lý</a> -->
        </div>
        <div class="language">
          
        </div>
        <div class="menuRight">
          <span class="iconMenu ttuc">
            <i class="fa fa-bars" aria-hidden="true"></i>Menu </span>
          <div class="contentMain">
            <div class="box">
              <div class="title">Menu</div>
              <a class="closeMenu" href="javascript:void(0);">
                <i class="fa fa-times" aria-hidden="true"></i>
              </a>
              <div class="listMenu">
                <ul>
                  <?php foreach($category as $item) :?>
                    <li>
                      <a href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" rel="nofollow"><?php echo $item['name']?></a>
                    </li>
                  <?php endforeach ?>
                </ul>
                <ul>
                  <li>
                    <a href="<?php echo base_url() ?>section-topic-details-new.php?id=1" title="Câu chuyện CHACHA" target="_blank" rel="nofollow">Câu chuyện CHACHA</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>section-topic-details-new.php?id=2" title="Tin tức &amp; Sự kiện" target="_blank" rel="nofollow">Tin tức &amp; Sự kiện</a>
                  </li>
                  <li>
                    <a href="index.php" title="Nhà phân phối, đại lý" target="_blank" rel="nofollow">Nhà phân phối, đại lý</a>
                  </li>
                  <li>
                  <!-- <?php foreach($tuVan7 as $item) :?>
                    <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="Tuyển dụng" target="_blank" rel="nofollow">Tuyển dụng</a>
                    <?php endforeach ?> -->
                    <a href="<?php echo base_url() ?>section-topic-details-new.php?id=7" title="Tuyển dụng" target="_blank" rel="nofollow">Tuyển dụng</a>
                  </li>
                  <li>
                    <a href="index.php" title="Liên hệ" target="_blank" rel="nofollow">Liên hệ</a>
                  </li>
                </ul>
                <!-- <ul>
                  <li>
                    <a href="/thanh-vien">
                      <i class="fa fa-user" aria-hidden="true"></i>Tài khoản </a>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #endregion -->