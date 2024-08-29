<?php include_once('./master_layout/chacha/header.php') ;
  require "connect.php";

  // Post Tin tức sự kiện (id = 2) lấy 5 tin mới nhất
  $sql2 = "SELECT * FROM posts WHERE category_id = 2 ORDER BY ID DESC LIMIT 1";
  $tuVan2 = $db->fetchsql($sql2);

  //Danh mục sản phẩm
  $sqlNew= "SELECT * FROM category WHERE 1 ORDER BY ID ASC LIMIT 4";
  $categoryHome= $db->fetchsql($sqlNew);

  // Get sản phẩm mới
  $sql1 = "SELECT p.*, ifnull(p.thunbar, img.thunbar) as image  FROM product p 
  LEFT JOIN (select DISTINCT product_id, thunbar from image_file img LIMIT 1) img on p.id = img.product_id
  where 
  ifnull(p.thunbar, img.thunbar) IS NOT NULL
  ORDER BY ID LIMIT 3";
  $spNew = $db->fetchsql($sql1);
?>
<main id="main" class="">
  
  <!--Khối nội dung riêng từng trang-->
  <style>
    .header_box {
      background-color: rgba(12, 112, 130, 0.8);
    }
  </style>
  <style>
        html, body{
          background: #102131;
        }
        .slider{
          /* width:400px; */
          margin:20px auto;
          text-align: center;
          padding:20px;
          color:white;
          .parent-slide{padding:15px;}
          img{display: block;margin:auto;}
        }
      </style>
      
      <script>
        window.onload=function(){
          $('.slider').slick({
            dots: !1,
            infinite: !0,
            speed: 1e3,
            autoplaySpeed: 5e3,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !0,
            autoplay: !0,
            prevArrow: '<a class="prev controls"><i class="fa fa-chevron-left" aria-hidden="true"><\/i><\/a>',
            nextArrow: '<a class="next controls"><i class="fa fa-chevron-right" aria-hidden="true"><\/i><\/a>',
            responsive: [{
                breakpoint: 1200,
                settings: {
                    draggable: !1
                }
            }]
          });
        };
      </script>
  <div class="master_page">
    <div class="bannerHome">
      <div class="khungAnh">
        <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024">
          <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="" class="img-responsive" />
          <h1>slide 1</h1>
        </a>
      </div>
      <div class="khungAnh">
        <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024">
          <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt="" class="img-responsive" />
          <h1>slide 2</h1>
        </a>
      </div>
      <div class="khungAnh">
        <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024">
          <img src="https://sunhouse.com.vn/pic/banner/Website-1920x900(3).jpg" alt="" class="img-responsive" />
          <h1>slide 3</h1>
        </a>
      </div>
      <div class="khungAnh">
        <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024">
          <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="" class="img-responsive" />
          <h1>slide 4</h1>
        </a>
      </div>
      <div class="khungAnh">
        <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024">
          <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt="" class="img-responsive" />
          <h1>slide 5</h1>
        </a>
      </div>
    </div>
    <!--Start Khối cateHome-->
    <div class="cateHome">
      <div class="container">
        <div class="row">
          <div class="titleHead">
            <div>
              <span>Chào mừng đến với</span>
            </div>
            <div class="wrapperImg">
              <h1 class="reset">
                <img src="./themes/1000000/assets/css/images/logoText.png" data-src="./themes/1000000/assets/css/images/logoText.png" class=" lazyloaded" height="57" width="354" alt="SUNHOUSE">
              </h1>
            </div>
          </div>
          <div class="listCate slick_7" id="DanhMucSanPham" role="toolbar">
            <?php foreach($category as $item) :?>
              <div class="item">
                <div class="khungAnh">
                  <a href="danh-muc-san-pham-new.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0">
                    <img src="<?php echo base_url() ?>/public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>/public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class="lazyloaded">
                  </a>
                </div>
                <h2 class="reset">
                  <a href="danh-muc-san-pham-new.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>" class="name"><?php echo $item['name'] ?></a>
                </h2>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <!--End Khối cateHome->-->
    </div>
    <!--End Khối cateHome->-->
    <!--Start Khối fetureProduct-->
    <div class="featureProduct">
      <div class="container">
        <div class="row">
          <div class="titleHome">
            <h2 class="reset">
              <span class="name">Sản phẩm nổi bật</span>
            </h2>
            <div class="description"> Với mạng lưới 60.000 điểm bán, sản xuất kinh doanh hơn 500 nhóm sản phẩm gia dụng thiết yếu, sản phẩm SUNHOUSE đã có mặt tại toàn bộ hệ thống siêu thị, trung tâm thương mại, các cửa hàng truyền thống </div>
          </div>
          <div class="col-sm-5" style="">
            <div style="background-color: #f3f3f3;margin: 0 -1.5px;">
              <div class="hinh_binh_hanh"><span> Sản phẩm</span></div>
            </div>
            <div class="cateProductD doGiaDung" style="background-color: #f3f3f3;">
              <?php foreach($categoryHome as $item) :?> 
              <div class="item" style="width: 50% !important; padding: 13px 13px 13px !important;">
                <div class="wrapper" style=" background: #ffffff !important; border-radius: 6%; ">
                  <div class="khungAnh">
                    <a href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="khungAnhCrop0">
                    <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['id']?>" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="inner">
                    <h3 class="reset">
                      <a href="<?php echo base_url() ?>danh-muc-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name']?>" class="name"><?php echo $item['name']?></a>
                    </h3>
                    <div class="text"></div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
          <div class="col-sm-5" style="background-color: #f3f3f3;">
            <div class="row" style="height: 200px;">
              <div style="background-color: #f3f3f3;margin: 0 -1.5px;">
                <div class="hinh_binh_hanh"><span> Dell</span></div>
              </div>
              <div class="newsProductDetail" style="padding-top: 0px; padding-bottom: 0px;background-color: #f3f3f3;">
                <div class="itemProductCTHome" role="toolbar">
                  <?php foreach($spNew as $item) :?> 
                    <div class="item" data-slick-index="-5" aria-hidden="true" style="width: 381px; padding: 13px 13px 13px !important;" tabindex="-1">
                      <div class="wrapper" style="background-color: #ffff;">
                        <div class="khungAnh">
                          <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0" tabindex="-1">
                            <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class="lazyload">
                          </a>
                        </div>
                        <div class="outer">
                          <h3 class="reset">
                            <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="name" tabindex="-1"><?php echo $item['name'] ?></a>
                          </h3>
                          
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="row" style="height: 200px;">
              <div style="background-color: #f3f3f3;margin: 0 -1.5px;">
                <div class="hinh_binh_hanh"><span> Assus</span></div>
              </div>
              <div class="newsProductDetail" style="padding-top: 0px; padding-bottom: 0px;background-color: #f3f3f3;">
                <div class="itemProductCTHome" role="toolbar">
                  <?php foreach($spNew as $item) :?> 
                    <div class="item" data-slick-index="-5" aria-hidden="true" style="width: 381px; padding: 13px 13px 13px !important;" tabindex="-1">
                      <div class="wrapper" style="background-color: #ffff;">
                        <div class="khungAnh">
                          <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0" tabindex="-1">
                            <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class="lazyload">
                          </a>
                        </div>
                        <div class="outer">
                          <h3 class="reset">
                            <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="name" tabindex="-1"><?php echo $item['name'] ?></a>
                          </h3>
                          
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="row" style="height: 200px;">
              <div style="background-color: #f3f3f3;margin: 0 -1.5px;">
                <div class="hinh_binh_hanh"><span> Assus</span></div>
              </div>
              <div class="newsProductDetail" style="padding-top: 0px; padding-bottom: 0px;background-color: #f3f3f3;">
                <div class="itemProductCTHome" role="toolbar">
                  <?php foreach($spNew as $item) :?> 
                    <div class="item" data-slick-index="-5" aria-hidden="true" style="width: 381px; padding: 13px 13px 13px !important;" tabindex="-1">
                      <div class="wrapper" style="background-color: #ffff;">
                        <div class="khungAnh">
                          <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0" tabindex="-1">
                            <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class="lazyload">
                          </a>
                        </div>
                        <div class="outer">
                          <h3 class="reset">
                            <a href="chi-tiet-san-pham-new.php?id=<?php echo $item['id']?>" title="<?php echo $item['name'] ?>" class="name" tabindex="-1"><?php echo $item['name'] ?></a>
                          </h3>
                          
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Khối fetureProduct->-->
    <style>
      /*Hòa sửa css để ảnh nền trắng không phải png vẫn không bị nộ nền*/
      .featureProduct .listProduct .item .khungAnh {
        background: #fff
      }

      .featureProduct .listProduct .item .khungAnh .khungAnhCrop0:after {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.0588235294117647)
      }
    </style>
    <!--Start Khối newsHome-->
    <div class="newsHome">
      <div class="container">
        <div class="row">
          <div class="saleOff" style="width: 65% !important;">
            <div class="titleHome">
              <h2 class="reset">
                <a href="<?php echo base_url() ?>section-topic-details-new.php?id=2" title="Tin tức - Sự kiện tập đoàn" class="name">Tin tức - Sự kiện tập đoàn</a>
              </h2>
            </div>
            <div class="listSale listSaleHome" role="toolbar">
            <?php foreach($tuVan2 as $item) :?>
              <div class="item">
                <div class="khungAnh">
                  <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title']?>" class="khungAnhCrop">
                    <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['title']?>" class="lazyloaded wide">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title']?>" class="name"><?php echo $item['title']?></a>
                  </h3>
                  <div class="text"><?php echo $item['content'] ?></div>
                </div>
              </div>
              <?php endforeach ?>
              <div class="item">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" alt="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="lazyloaded wide">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="name">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</a>
                  </h3>
                  <div class="text">SUNHOUSE cũng là doanh nghiệp Việt duy nhất có vinh dự đón tiếp đoàn lãnh đạo cấp cao của Tập đoàn Amazon đến thăm quan các nhà máy sản xuất sản phẩm đang kinh doanh trên sàn TMĐT Amazon.</div>
                </div>
              </div>
              <div class="item">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" alt="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="lazyloaded wide">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="name">THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: "VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”</a>
                  </h3>
                  <div class="text">VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT</div>
                </div>
              </div>
              <div class="item">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="lazyloaded wide">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="name">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
                  </h3>
                  <div class="text">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
                </div>
              </div>
              <ul class="slick-dots" style="display: block;" role="tablist">
                <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation20" id="slick-slide20">
                  <button type="button" data-role="none" role="button" tabindex="0">1</button>
                </li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation21" id="slick-slide21" class="">
                  <button type="button" data-role="none" role="button" tabindex="0">2</button>
                </li>
                <li aria-hidden="true" class="" role="presentation" aria-selected="false" aria-controls="navigation22" id="slick-slide22">
                  <button type="button" data-role="none" role="button" tabindex="0">3</button>
                </li>
                <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation23" id="slick-slide23" class="slick-active">
                  <button type="button" data-role="none" role="button" tabindex="0">4</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="newsRight"  style="width: 35% !important;">
            <div class="titleHome">
              <h2 class="reset">
                <a href="https://sunhouse.com.vn/tu-van-san-pham" title="Tư vấn sản phẩm" class="name">Tư vấn sản phẩm</a>
              </h2>
            </div>
            <div class="listNews">
              <div class="item">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/hoi-dap-dien-gia-dung/nhung-cau-hoi-thuong-gap-khi-su-dung-quat-dieu-hoa-sunhouse.html" title="Những câu hỏi thường gặp khi sử dụng quạt điều hòa SUNHOUSE" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/small/qa/quat-dieu-hoa-sunhouse-shd7727_001.png" data-src="https://sunhouse.com.vn/pic/thumb/small/qa/quat-dieu-hoa-sunhouse-shd7727_001.png" alt="Những câu hỏi thường gặp khi sử dụng quạt điều hòa SUNHOUSE" class="lazyloaded wide">
                  </a>
                </div>
                <div class="outer">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/hoi-dap-dien-gia-dung/nhung-cau-hoi-thuong-gap-khi-su-dung-quat-dieu-hoa-sunhouse.html" title="Những câu hỏi thường gặp khi sử dụng quạt điều hòa SUNHOUSE" class="name">Những câu hỏi thường gặp khi sử dụng quạt điều hòa SUNHOUSE</a>
                  </h3>
                  <div class="date">16.08.2018</div>
                </div>
              </div>
              <div class="item">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/tu-van-san-pham/bep-hong-ngoai-khac-gi-voi-bep-tu.html" title="Bếp hồng ngoại khác gì với bếp từ?" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/small/qa/bep-hong-ngoai-la-gi.png" data-src="https://sunhouse.com.vn/pic/thumb/small/qa/bep-hong-ngoai-la-gi.png" alt="Bếp hồng ngoại khác gì với bếp từ?" class="lazyloaded wide">
                  </a>
                </div>
                <div class="outer">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/tu-van-san-pham/bep-hong-ngoai-khac-gi-voi-bep-tu.html" title="Bếp hồng ngoại khác gì với bếp từ?" class="name">Bếp hồng ngoại khác gì với bếp từ?</a>
                  </h3>
                  <div class="date">15.06.2018</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Khối newsHome-->
    <!--Start Khối infoHome-->
    <div class="infoHome">
      <div class="container">
        <div class="row">
          <div class="left" style="width: 50% !important;">
            <div class="khungAnh">
              <a class="khungAnhCrop" href="https://sunhouse.com.vn/dai-ly" title="Đại lý SUNHOUSE" target="_blank" rel="nofollow">
                <img src="https://sunhouse.com.vn/pic/banner/dai-ly-sunhouse.png" data-src="https://sunhouse.com.vn/pic/banner/dai-ly-sunhouse.png" alt="Đại lý SUNHOUSE" class="lazyloaded tall">
              </a>
            </div>
          </div>
          <div class="right" style="width: 50% !important;">
            <div class="khungAnh">
              <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=KMg5fj0I128" title=" " rel="nofollow" class="khungAnhCrop">
                <img src="https://sunhouse.com.vn/pic/banner/cá-nhân-1400x790.jpg" data-src="https://sunhouse.com.vn/pic/banner/cá-nhân-1400x790.jpg" alt="Quy mô sản xuất khép kín lớn nhất với" class="normal lazyloaded wide">
              </a>
              <div class="inner">
                <div class="icon">
                  <div class="quick-alo-ph-circle hvr-icon-pulse"></div>
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
                <span></span>
                <div class="text"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Khối infoHome-->
    <!--Start Khối guaranteeHome-->
    <div class="guaranteeHome">
      <div class="container">
        <div class="row">
          <div class="left" style="width: 70% !important;">
            <div class="titleHome">
              <span class="name">Trung tâm bảo hành SUNHOUSE</span>
              <div class="description"> Tất cả trung tâm bảo hành ủy quyền SUNHOUSE trên toàn quốc đều được đào tạo và chỉ sử dụng linh kiện chính hãng SUNHOUSE trong mọi hoạt động sửa chữa. </div>
            </div>
            <div class="searchBox">
              <div class="text"> Tra cứu bảo hành điện từ <span>(Nhập mã cào trên thẻ bảo hành, sau đó click tra cứu để lấy dữ liệu)</span>
              </div>
              <div class="form">
                <input type="text" placeholder="Mã tra cứu" id="tbWarrantyCode" onkeyup="CheckPostSearchWarranty()">
                <a href="#" class="search" onclick="PostSearchWarranty()">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="khungAnh">
            <a href="#" title="" class="khungAnhCrop" style="">
              <img data-src="./themes/1000000/assets/css/pic_css/baohanh2.png" class="lazyload tall" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Tra cứu bảo hành">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--End Khối guaranteeHome-->
    <script>
      function CheckPostSearchWarranty() {
        if (event.keyCode === 13) PostSearchWarranty();
      }

      function PostSearchWarranty() {
        event.preventDefault();
        var code = $("#tbWarrantyCode").val();
        if (code.length > 3) window.location = "/bao-hanh/tra-cuu-" + code;
      }
    </script>
  </div>
  <style>
    .popup-thqg {
      display: none
    }
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
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/fbImg1.png" src="./themes/1000000/assets/css/images/fbImg1.png" alt="Facebook CHACHA GROUP">
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/kimnam.nguyen.52493" target="_blank" rel="nofollow" title="Zalo DEMO TECH">
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/zaloIcon.png" src="./themes/1000000/assets/css/images/zaloIcon.png" alt="Youtube CHACHA GROUP">
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/kimnam.nguyen.52493" target="_blank" rel="nofollow" title="Tiktok DEMO TECH">
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/tiktokIcon.png" src="./themes/1000000/assets/css/images/tiktokIcon.png" alt="Youtube CHACHA GROUP">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/user/CHACHAchanel" target="_blank" rel="nofollow" title="Youtube DEMO TECH">
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/ytImg1.png" src="./themes/1000000/assets/css/images/ytImg1.png" alt="Youtube CHACHA GROUP">
        </a>
      </li>
    </ul>
  </div>
  <!--Nút back top-->
  <div class="btn_top" style="display: none;">
    <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/backTopIcon.png" src="./themes/1000000/assets/css/images/backTopIcon.png" alt="Top">
  </div>
  
  
  
</main>
<script src="./Theme/1000000/Assets/js/ProductDetail.min.js" defer=""></script>
<?php  
include_once('./master_layout/chacha/footer.php') 
?>