<?php 
    
    require_once __DIR__ ."/master_layout/chacha/header.php";
    
    $id = intval(getInput('id'));
   
    //chi tiet san pham
    $product = $db->fetchID("product", $id);
   
     //Lay danh muc san pham lien quan
    $cateid = intval($product['category_id']);
    
    // Thông tin sản phẩm cùng danh mục
    $sql = "SELECT * FROM product p 
            LEFT JOIN (select DISTINCT product_id, thunbar from image_file img LIMIT 1) img on p.id = img.product_id
            where p.category_id = $cateid ORDER BY ID";
    $spkemtheo = $db->fetchsql($sql);
    $sql1 = "SELECT count(*) as num FROM product p 
            LEFT JOIN (select DISTINCT product_id, thunbar from image_file img LIMIT 1) img on p.id = img.product_id
            where p.category_id = $cateid ORDER BY ID";
    $spkemtheoCont = $db->fetchsql($sql1);

    // Toàn bộ ảnh sản phẩm 
    $sql2 = "SELECT * FROM image_file WHERE product_id = $id ORDER BY ID DESC LIMIT 4";
    $image = $db->fetchsql($sql2);

    // Ảnh mẫu xem tất cả
    $sql3 = "SELECT * FROM image_file WHERE product_id = $id ORDER BY ID DESC LIMIT 1";
    $imagePost = $db->fetchsql($sql3);

    // Post tư vấn sản phẩm (id = 3) lấy 4 tin
    $sql4 = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 4";
    $tuVan = $db->fetchsql($sql4);
   
   
?>
    
<style>
    .header_box.stick {
        position: unset;
    }
    .header_box.stick {position: fixed;}
    .header_box .logo .scroll {display: none !important;}

    .slide_with_thumb{display:block}
</style> 
<div class="master_page sanPhamChiTietPage sanPhamChiTietChung">
  <div class="breadcrums">
    <div class="container">
      <div class="row">
        <ul>
          <li>
            <a href="index.php" title="Trang chủ">Trang chủ</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dien-tu-dien-lanh" title="Sản phẩm">Sản phẩm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi" title="Máy làm mát không khí - Quạt điều hòa">Máy làm mát không khí - Quạt điều hòa</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="thongTinSanPhamChung">
    <div class="container">
      <div class="top">
        <div class="col1">
          <!--Slide ảnh sản phẩm load lần đầu (Khi click vào xem theo màu sắc cần load Ajax, đổ dữ liệu vào sau đó khởi tạo lại Js slick cho khối "slide_for" và "slide_nav")-->
          <div class="slide_with_thumb listImageByColor">
            <span class="zoom">
              <i class="fa fa-search" aria-hidden="true"></i> Xem ảnh lớn </span>
            <div class="slide_for largeImages">
                <?php foreach($image as $item) :?>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['thunbar']?>" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
            </div>
            <div class="slide_thumb thumbImagesWrap" data-number="9">
              <div class="slide_nav thumbImages">
                
                  <?php foreach($image as $item) :?>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['thunbar']?>" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
              </div>
              <div class="watchMore">
              <?php foreach($imagePost as $item) :?>
                <div class="item_box">
                  <div class="khungAnh">
                    <a href="javascript:void(0);" class="khungAnhCrop lastThumbImage" onclick="showImage();">
                      <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['thunbar']?>" class="lazyloaded wide">
                    </a>
                    <span>Xem tất cả <br>
                      <b class="demSoAnh"></b> ảnh </span>
                  </div>
                </div>
              <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <h1 class="title"><?php echo $product['name'] ?></h1>
          <div class="infoView">
            <div class="comment">
              <i class="fa fa-comment-o" aria-hidden="true"></i> Bình luận: <span>0</span>
            </div>
            <div class="view">
              <i class="fa fa-eye" aria-hidden="true"></i> lượt xem: <span>307,751</span>
            </div>
            <div class="review ">
              <div class="star">
                <span class="no"></span>
                <span class="no"></span>
                <span class="no"></span>
                <span class="no"></span>
                <span class="no"></span>
              </div>
              <div class="quantity">(0 đánh giá)</div>
            </div>
            <div id="fb-root" class=" fb_reset">
              <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                <div></div>
              </div>
            </div>
            <script>
              (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1158196177653765';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
            </script>
            <script type="text/javascript">
              (function() {
                var po = document.createElement("script");
                po.type = "text/javascript";
                po.async = true;
                po.src = "https://apis.google.com/js/platform.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(po, s);
              })();
            </script>
            <div class="shareItem">
              <div class="fb-share-button fb_iframe_widget" data-href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7727.html" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=51&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Fdien-tu-dien-lanh%2Fmay-lam-mat-khong-khi%2Fsunhouse-shd7727.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                <span style="vertical-align: bottom; width: 86px; height: 20px;">
                  <iframe name="fcef060a819f3b91c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/share_button.php?app_id=1158196177653765&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfb664e097b757c9ba%26domain%3Dsunhouse.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsunhouse.com.vn%252Ff66a6c9122a822dbb%26relation%3Dparent.parent&amp;container_width=51&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Fdien-tu-dien-lanh%2Fmay-lam-mat-khong-khi%2Fsunhouse-shd7727.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 86px; height: 20px;" class=""></iframe>
                </span>
              </div>
            </div>
          </div>
          <div class="code"> Mã: <span><?php echo $product['slug'] ?></span>
          </div>
          <div class="dacDiemNoiBat">
            <div class="name"> Thông tin sản phẩm </div>
            <ul class="reset">
              <li> <?php echo preg_replace('~[\r\n]+~', '<br>', trim($product['content'])) ?></li>
            </ul>
          </div>
          <!-- <div class="btnClick">
            <a class="btn360 d-none" href="javascript:void(0);" onclick="showImage360();">
              <span>Xem 360</span>
            </a>
            <a class="btnSoSanh" href="javascript:void(0);" onclick="SelectToCompare(this)" data-url="sunhouse-shd7727" data-title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727" data-image="quat-dieu-hoa-sunhouse-shd7727_002.png">
              <i class="fa fa-exchange" aria-hidden="true"></i>So sánh </a>
            <a class="diemBan" href="javascript:openPopupSP()" title="Mua ở đâu">
              <i class="fa fa-map-marker" aria-hidden="true"></i>Mua ở đâu </a>
            <a class="download d-none" href="#">
              <i class="fa fa-download" aria-hidden="true"></i>Tải catalogue </a>
            <a target="_blank" href="https://baohanhdientu.sunhouse.com.vn/" title="Kích hoạt bảo hành">
              <i class="fa fa-search" aria-hidden="true"></i>Kích hoạt bảo hành </a>
          </div> -->
          <div class="description"></div>
        </div>
      </div>
      
      <div class="bottom">
        <div class="col1">
          <div class="row">                 
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
                <li><a data-toggle="tab" href="#menu2">Yêu thích</a></li>
                <li><a data-toggle="tab" href="#menu3">Bình luận về sản phẩm</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Nội dung</h3>
                    <p><?php echo preg_replace('~[\r\n]+~', '<br>', trim($product['content'])) ?></p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3> Thông tin khác </h3>
                    <p><?php echo preg_replace('~[\r\n]+~', '<br>', trim($product['content'])) ?></p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3></h3>
                    <p>Bình luận về sản phẩm.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    
                    <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1862935443738920&autoLogAppEvents=1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="kinhNghiemMua" id="kinhNghiemMua">
            <div class="title">TƯ VẤN SẢN PHẨM</div>
            <div class="groupItem">
            <?php foreach($tuVan as $item) :?>
              <div class="itemBox">
                <div class="khungAnh">
                  <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" rel="nofollow" class="khungAnhCrop">
                    <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $product['name'] ?>" class="tall lazyloaded">
                  </a>
                </div>
                <div class="itemDetail">
                  <div class="itemTitle">
                    <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" rel="nofollow"><?php echo $item['title'] ?></a>
                  </div>
                  <div class="itemDescription" style="max-height:40px;overflow:hidden"><?php echo preg_replace('~[\r\n]+~', '<br>', trim($item['content'])) ?></div>
                </div>
              </div>
            <?php endforeach ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="kinhNghiemMua_stop"></div>
  <div class="sanPhamChiTietBotoom">
    <div class="container">
      <div class="bottom">
        <div class="newsProductDetail">
          <div class="header">
            <div class="title">
              <h2 class="reset">Sản phẩm cùng danh mục</h2>
              <span>(<?php foreach($spkemtheoCont as $item) : echo $item['num']?> <?php endforeach ?> sản phẩm)</span>
            </div>
          </div>
          <div class="itemProductCT" role="toolbar">
              <?php foreach($spkemtheo as $item) :?>
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="khungAnhCrop0" tabindex="-1">
                        <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['name']?>" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="name" tabindex="-1"><?php echo $item['name']?></a>
                      </h3>
                      <div class="model">Mã: <?php echo $item['slug'] ?></div>
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
              <?php foreach($spkemtheo as $item) :?>
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="khungAnhCrop0" tabindex="-1">
                        <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['name']?>" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="name" tabindex="-1"><?php echo $item['name']?></a>
                      </h3>
                      <div class="model">Mã: <?php echo $item['slug'] ?></div>
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
              <?php foreach($spkemtheo as $item) :?>
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="khungAnhCrop0" tabindex="-1">
                        <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['name']?>" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="name" tabindex="-1"><?php echo $item['name']?></a>
                      </h3>
                      <div class="model">Mã: <?php echo $item['slug'] ?></div>
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
                
                
            <ul class="slick-dots" style="display: block;" role="tablist">
              <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation20" id="slick-slide20">
                <button type="button" data-role="none" role="button" tabindex="0">1</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation21" id="slick-slide21" class="">
                <button type="button" data-role="none" role="button" tabindex="0">2</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation22" id="slick-slide22" class="">
                <button type="button" data-role="none" role="button" tabindex="0">3</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation23" id="slick-slide23" class="">
                <button type="button" data-role="none" role="button" tabindex="0">4</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation24" id="slick-slide24" class="">
                <button type="button" data-role="none" role="button" tabindex="0">5</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation25" id="slick-slide25" class="">
                <button type="button" data-role="none" role="button" tabindex="0">6</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation26" id="slick-slide26" class="">
                <button type="button" data-role="none" role="button" tabindex="0">7</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation27" id="slick-slide27" class="">
                <button type="button" data-role="none" role="button" tabindex="0">8</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation28" id="slick-slide28" class="">
                <button type="button" data-role="none" role="button" tabindex="0">9</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation29" id="slick-slide29" class="">
                <button type="button" data-role="none" role="button" tabindex="0">10</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation210" id="slick-slide210" class="">
                <button type="button" data-role="none" role="button" tabindex="0">11</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation211" id="slick-slide211" class="">
                <button type="button" data-role="none" role="button" tabindex="0">12</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation212" id="slick-slide212" class="">
                <button type="button" data-role="none" role="button" tabindex="0">13</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation213" id="slick-slide213" class="">
                <button type="button" data-role="none" role="button" tabindex="0">14</button>
              </li>
              <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation214" id="slick-slide214" class="slick-active">
                <button type="button" data-role="none" role="button" tabindex="0">15</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation215" id="slick-slide215" class="">
                <button type="button" data-role="none" role="button" tabindex="0">16</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation216" id="slick-slide216" class="">
                <button type="button" data-role="none" role="button" tabindex="0">17</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation217" id="slick-slide217" class="">
                <button type="button" data-role="none" role="button" tabindex="0">18</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation218" id="slick-slide218" class="">
                <button type="button" data-role="none" role="button" tabindex="0">19</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation219" id="slick-slide219" class="">
                <button type="button" data-role="none" role="button" tabindex="0">20</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation220" id="slick-slide220" class="">
                <button type="button" data-role="none" role="button" tabindex="0">21</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation221" id="slick-slide221" class="">
                <button type="button" data-role="none" role="button" tabindex="0">22</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation222" id="slick-slide222" class="">
                <button type="button" data-role="none" role="button" tabindex="0">23</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation223" id="slick-slide223" class="">
                <button type="button" data-role="none" role="button" tabindex="0">24</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation224" id="slick-slide224" class="">
                <button type="button" data-role="none" role="button" tabindex="0">25</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation225" id="slick-slide225" class="">
                <button type="button" data-role="none" role="button" tabindex="0">26</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<div class="popUpSanPham">
  <div class="popUpContent">
    <div class="content">
      <div class="slide_with_thumb_2">
        <div class="slide_zoom">
          <div class="close" onclick="hideImage();">
            <a href="javascript:void(0);">
              <span class="button">
                <i class="fa fa-times" aria-hidden="true"></i>
              </span>
              <span class="text">Đóng</span>
            </a>
          </div>
          <div class="watch360 d-none" onclick="showImage360();">
            <a href="javascript:void(0);">
              <span class="button">
                <i class="fa fa-times" aria-hidden="true"></i>
              </span>
              <span class="text">Xem 360</span>
            </a>
          </div>
          <!--Khối ảnh 360 (Load ảnh tự động theo thư mục và tên định sẵn trong file Js (images360), tên ảnh giống nhau chỉ khác phần cuối (VD: threesixty_1.jpg, threesixty_1.jpg, threesixty_3.jpg, ...))-->
          <div id="threesixty">
            <div id="spinner">
              <span>0%</span>
            </div>
            <ol id="threesixty_images"></ol>
          </div>
          
          <div class="slide_for_2 largeImagesPopup" role="toolbar">
            <?php foreach($image as $item) :?>
              <div class="item">
                <div class="item_box">
                  <div class="khungAnh">
                    <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                      <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['thunbar']?>" class="lazyload">
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          
            
          </div>
        </div>
        <div class="slide_nav_2 thumbImagesPopup">
          <?php foreach($image as $item) :?>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['thunbar']?>" alt="<?php echo $item['thunbar']?>" class="lazyload">
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    function DestroySlickImagesPopup() {
      $('.slide_for_2').slick('unslick');
      $('.slide_nav_2').slick('unslick');
    }
  </script>
</div>
    

<script src="./Theme/1000000/Assets/js/ProductDetail.min.js" defer=""></script>
<script src="./Theme/1000000/Assets/js/jquery.min.js" defer=""></script>
<?php include_once('./master_layout/chacha/footer.php'); ?>