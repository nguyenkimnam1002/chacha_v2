<?php include_once('./master_layout/chacha/header.php') ;
require "connect.php";
?>
<main id="main" class="">
  
  <!--Khối nội dung riêng từng trang-->
  <style>
    .header_box {
      background-color: rgba(12, 112, 130, 0.8);
    }
  </style>
  <div class="master_page">
    <div class="bannerHome slick-initialized slick-slider">
      <!-- <a class="prev controls slick-arrow" style="display: block;">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </a> -->
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
      <div class="slider">
        <!-- <button type="button" class="slick-prev" style="display: block;"></button> -->
        <div class="" style="">
          <a class="khungAnhCrop" href="https://sunhouse.com.vn/dien-gia-dung/quat-tran" title="quạt mát 2024" tabindex="-1">
            <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="quạt mát 2024" class="">
          </a>
        </div>
        <div class="" style="">
          <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024" title=" " tabindex="0">
            <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt=" " class="">
          </a>
        </div>
        <div class="" style="">
          <a class="khungAnhCrop" href="https://sunhouse.com.vn/khuyen-mai-hot/chuong-trinh-doi-bep-cu-len-doi-bep-sang.html" title=" " tabindex="-1">
            <img src="https://sunhouse.com.vn/pic/banner/Website-1920x900(3).jpg" alt=" " class="">
          </a>
        </div>
        <div class="" style="">
          <a class="khungAnhCrop" href="https://sunhouse.com.vn/dien-gia-dung/quat-tran" title="quạt mát 2024" tabindex="-1">
            <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="quạt mát 2024" class="">
          </a>
        </div>
        <div class="" style="">
          <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024" title=" " tabindex="-1">
            <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt=" " class="">
          </a>
        </div>
        <!-- <button type="button" class="slick-next" style="display: block;"></button> -->
      </div>
      
      <script>
        window.onload=function(){
          $('.slider').slick({
          autoplay:true,
          autoplaySpeed:1500,
          arrows:true,
          prevArrow:'<button type="button" class="slick-prev"></button>',
          nextArrow:'<button type="button" class="slick-next"></button>',
          centerMode:true,
          slidesToShow:3,
          slidesToScroll:1
          });
          $('.slick-track').slick({
          autoplay:true,
          autoplaySpeed:1500,
          arrows:true,
          prevArrow:'<button type="button" class="slick-prev"></button>',
          nextArrow:'<button type="button" class="slick-next"></button>',
          centerMode:true,
          slidesToShow:6,
          slidesToScroll:2
          });
        };
      </script>
      <div aria-live="polite" class="slick-list draggable">
        <div class="slick-track1" style="opacity: 1; width: 9515px; transform: translate3d(0px, 0px, 0px); transition: transform 1000ms;" role="listbox">
          <div class="khungAnh slick-slide slick-cloned" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="-1" aria-hidden="true">
            <a class="khungAnhCrop" href="https://sunhouse.com.vn/dien-gia-dung/quat-tran" title="quạt mát 2024" tabindex="-1">
              <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="quạt mát 2024" class="tall">
            </a>
          </div>
          <div class="khungAnh slick-slide" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="true">
            <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024" title=" " tabindex="0">
              <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt=" " class="tall">
            </a>
          </div>
          <div class="khungAnh slick-slide slick-current slick-active" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
            <a class="khungAnhCrop" href="https://sunhouse.com.vn/khuyen-mai-hot/chuong-trinh-doi-bep-cu-len-doi-bep-sang.html" title=" " tabindex="-1">
              <img src="https://sunhouse.com.vn/pic/banner/Website-1920x900(3).jpg" alt=" " class="tall">
            </a>
          </div>
          <div class="khungAnh slick-slide" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="true">
            <a class="khungAnhCrop" href="https://sunhouse.com.vn/dien-gia-dung/quat-tran" title="quạt mát 2024" tabindex="-1">
              <img src="https://sunhouse.com.vn/pic/banner/Website(1).jpg" alt="quạt mát 2024" class="tall">
            </a>
          </div>
          <div class="khungAnh slick-slide slick-cloned" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="3" aria-hidden="true">
            <a class="khungAnhCrop" href="https://khuyenmai.sunhouse.com.vn/tunhua2024" title=" " tabindex="-1">
              <img src="https://sunhouse.com.vn/pic/banner/Website(2).jpg" alt=" " class="tall">
            </a>
          </div>
        </div>
      </div>
      <!-- <a class="next controls slick-arrow" style="display: block;">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </a> -->
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
          <div class="listCate slick_7 slick-initialized slick-slider slick-dotted" id="DanhMucSanPham" role="toolbar">
            <div aria-live="polite" class="slick-list draggable">
              <div class="slick-track" style="opacity: 1; width: 1680px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                <?php foreach($category as $item) :?>
                  <div class="item slick-slide slick-active" style="width: 168px;" tabindex="-1" role="option" aria-describedby="slick-slide11" data-slick-index="1" aria-hidden="false">
                    <div class="khungAnh">
                      <a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>" class="khungAnhCrop0" tabindex="0">
                        <img src="/chacha_v2/public/uploads/product/<?php echo $item['image']?>" data-src="/chacha_v2/public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['name'] ?>" class=" lazyloaded">
                      </a>
                    </div>
                    <h2 class="reset">
                      <a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>" title="<?php echo $item['name'] ?>" class="name" tabindex="0"><?php echo $item['name'] ?></a>
                    </h2>
                  </div>
                <?php endforeach ?>  
                <div class="item slick-slide slick-active" style="width: 168px;" tabindex="-1" role="option" aria-describedby="slick-slide11" data-slick-index="1" aria-hidden="false">
                  <div class="khungAnh">
                    <a href="https://sunhouse.com.vn/dien-gia-dung" title="Điện gia dụng" class="khungAnhCrop0" tabindex="0">
                      <img src="https://sunhouse.com.vn/pic/thumb/compact/product/keyshot.566.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/keyshot.566.png" alt="Điện  gia dụng" class=" lazyloaded">
                    </a>
                  </div>
                  <h2 class="reset">
                    <a href="https://sunhouse.com.vn/dien-gia-dung" title="Điện gia dụng" class="name" tabindex="0">Điện gia dụng</a>
                  </h2>
                </div>
                
              </div>
            </div>
            <!-- <ul class="slick-dots" style="display: flex;" role="tablist">
              <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation10" id="slick-slide10">
                <button type="button" data-role="none" role="button" tabindex="0">1</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation11" id="slick-slide11">
                <button type="button" data-role="none" role="button" tabindex="0">2</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation12" id="slick-slide12">
                <button type="button" data-role="none" role="button" tabindex="0">3</button>
              </li>
              <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation13" id="slick-slide13">
                <button type="button" data-role="none" role="button" tabindex="0">4</button>
              </li>
            </ul> -->
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
          <div class="listProduct">
            <div class="item">
              <div class="wrapper">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-loc-nuoc/may-loc-nuoc-r-o-ultrapure-sunhouse-10-loi-sha76210kl.html" title="MÁY LỌC NƯỚC RO ULTRAPURE SUNHOUSE 10 LÕI SHA76210KL" class="khungAnhCrop0">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(176).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(176).jpg" alt="Máy lọc nước R.O UltraPURE SUNHOUSE 10 LÕI SHA76210KL" class=" lazyloaded">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-loc-nuoc/may-loc-nuoc-r-o-ultrapure-sunhouse-10-loi-sha76210kl.html" title="MÁY LỌC NƯỚC RO ULTRAPURE SUNHOUSE 10 LÕI SHA76210KL" class="name">MÁY LỌC NƯỚC RO ULTRAPURE SUNHOUSE 10 LÕI SHA76210KL</a>
                  </h3>
                  <div class="text"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="wrapper">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/dien-gia-dung/may-ep-trai-cay/may-ep-cham-sunhouse-shd5503.html" title="MÁY ÉP CHẬM SUNHOUSE SHD5503" class="khungAnhCrop0">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD5503 thumb new.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD5503 thumb new.jpg" alt="MÁY ÉP CHẬM SUNHOUSE SHD5503" class=" lazyloaded">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/dien-gia-dung/may-ep-trai-cay/may-ep-cham-sunhouse-shd5503.html" title="MÁY ÉP CHẬM SUNHOUSE SHD5503" class="name">MÁY ÉP CHẬM SUNHOUSE SHD5503</a>
                  </h3>
                  <div class="text"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="wrapper">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/thiet-bi-nha-bep/bep-doi-dien-tu-hong-ngoai/sunhouse-mama-mmb9200mix.html" title="BẾP ĐÔI ĐIỆN TỪ HỒNG NGOẠI SUNHOUSE MAMA MMB9200MIX" class="khungAnhCrop0">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/product/MMB9200MIX_02.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/MMB9200MIX_02.jpg" alt="BẾP ĐÔI ĐIỆN TỪ HỒNG NGOẠI SUNHOUSE MAMA MMB9200MIX" class=" lazyloaded">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/thiet-bi-nha-bep/bep-doi-dien-tu-hong-ngoai/sunhouse-mama-mmb9200mix.html" title="BẾP ĐÔI ĐIỆN TỪ HỒNG NGOẠI SUNHOUSE MAMA MMB9200MIX" class="name">BẾP ĐÔI ĐIỆN TỪ HỒNG NGOẠI SUNHOUSE MAMA MMB9200MIX</a>
                  </h3>
                  <div class="text"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="wrapper">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/do-gia-dung/dong-san-pham-cao-cap-ultra-titanium/bo-noi-chao-chong-dinh-ultra-titanium-sunhouse-st2204b.html" title="BỘ NỒI CHẢO CHỐNG DÍNH ULTRA TITANIUM SUNHOUSE ST2204B" class="khungAnhCrop0">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500x670(1).png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500x670(1).png" alt="Bộ nồi chảo chống dính Ultra Titanium SUNHOUSE ST2204B" class=" lazyloaded">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/do-gia-dung/dong-san-pham-cao-cap-ultra-titanium/bo-noi-chao-chong-dinh-ultra-titanium-sunhouse-st2204b.html" title="BỘ NỒI CHẢO CHỐNG DÍNH ULTRA TITANIUM SUNHOUSE ST2204B" class="name">BỘ NỒI CHẢO CHỐNG DÍNH ULTRA TITANIUM SUNHOUSE ST2204B</a>
                  </h3>
                  <div class="text"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="wrapper">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7727.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727" class="khungAnhCrop0">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7727_002.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7727_002.png" alt="Máy làm mát không khí SUNHOUSE SHD7727" class=" lazyloaded">
                  </a>
                </div>
                <div class="inner">
                  <h3 class="reset">
                    <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7727.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727" class="name">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727</a>
                  </h3>
                  <div class="text"></div>
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
          <div class="saleOff">
            <div class="titleHome">
              <h2 class="reset">
                <a href="https://sunhouse.com.vn/tin-hoat-dong" title="Tin tức - Sự kiện tập đoàn" class="name">Tin tức - Sự kiện tập đoàn</a>
              </h2>
            </div>
            <div class="listSale listSaleHome slick-initialized slick-slider slick-dotted" role="toolbar">
              <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 3256px; transform: translate3d(-2035px, 0px, 0px);" role="listbox">
                  <div class="item slick-slide slick-cloned" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide22" data-slick-index="-2" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" alt="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="name" tabindex="-1">Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam</a>
                      </h3>
                      <div class="text">Tại nhà máy Sunhouse Việt Nam, từ những hạt nhựa, tấm kim loại thô, bằng bàn tay, khối óc của người Việt, sản phẩm nồi chiên không dầu Made in Việt Nam nhận được niềm tin của người tiêu dùng Mỹ. Có gì bên trong “đại bản doanh” sản xuất nồi chiên không dầu Made in Việt Nam đầu tiên và duy nhất tại Việt Nam đủ tiêu chuẩn xuất sang Mỹ.</div>
                    </div>
                  </div>
                  <div class="item slick-slide slick-cloned" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide23" data-slick-index="-1" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" alt="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="name" tabindex="-1">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</a>
                      </h3>
                      <div class="text">SUNHOUSE cũng là doanh nghiệp Việt duy nhất có vinh dự đón tiếp đoàn lãnh đạo cấp cao của Tập đoàn Amazon đến thăm quan các nhà máy sản xuất sản phẩm đang kinh doanh trên sàn TMĐT Amazon.</div>
                    </div>
                  </div>
                  <div class="item slick-slide" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide20" data-slick-index="0" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" alt="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="name" tabindex="-1">THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: "VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”</a>
                      </h3>
                      <div class="text">VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT</div>
                    </div>
                  </div>
                  <div class="item slick-slide" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide21" data-slick-index="1" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="name" tabindex="-1">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
                      </h3>
                      <div class="text">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
                    </div>
                  </div>
                  <div class="item slick-slide" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide22" data-slick-index="2" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" alt="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="name" tabindex="-1">Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam</a>
                      </h3>
                      <div class="text">Tại nhà máy Sunhouse Việt Nam, từ những hạt nhựa, tấm kim loại thô, bằng bàn tay, khối óc của người Việt, sản phẩm nồi chiên không dầu Made in Việt Nam nhận được niềm tin của người tiêu dùng Mỹ. Có gì bên trong “đại bản doanh” sản xuất nồi chiên không dầu Made in Việt Nam đầu tiên và duy nhất tại Việt Nam đủ tiêu chuẩn xuất sang Mỹ.</div>
                    </div>
                  </div>
                  <div class="item slick-slide slick-current slick-active" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide23" data-slick-index="3" aria-hidden="false">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="khungAnhCrop" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" alt="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="name" tabindex="0">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</a>
                      </h3>
                      <div class="text">SUNHOUSE cũng là doanh nghiệp Việt duy nhất có vinh dự đón tiếp đoàn lãnh đạo cấp cao của Tập đoàn Amazon đến thăm quan các nhà máy sản xuất sản phẩm đang kinh doanh trên sàn TMĐT Amazon.</div>
                    </div>
                  </div>
                  <div class="item slick-slide slick-cloned slick-active" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide20" data-slick-index="4" aria-hidden="false">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="khungAnhCrop" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.png" alt="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-vui-ep-me-say-rinh-ngay-tao-chat.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”" class="name" tabindex="0">THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: "VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT”</a>
                      </h3>
                      <div class="text">VUI ÉP MÊ SAY – RINH NGAY TÁO CHẤT</div>
                    </div>
                  </div>
                  <div class="item slick-slide slick-cloned" style="width: 407px;" tabindex="-1" role="option" aria-describedby="slick-slide21" data-slick-index="5" aria-hidden="true">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="khungAnhCrop" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="lazyloaded wide">
                      </a>
                    </div>
                    <div class="inner">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="name" tabindex="-1">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
                      </h3>
                      <div class="text">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
                    </div>
                  </div>
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
          <div class="newsRight">
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
          <div class="left">
            <div class="khungAnh">
              <a class="khungAnhCrop" href="https://sunhouse.com.vn/dai-ly" title="Đại lý SUNHOUSE" target="_blank" rel="nofollow">
                <img src="https://sunhouse.com.vn/pic/banner/dai-ly-sunhouse.png" data-src="https://sunhouse.com.vn/pic/banner/dai-ly-sunhouse.png" alt="Đại lý SUNHOUSE" class="lazyloaded tall">
              </a>
            </div>
          </div>
          <div class="right">
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
          <div class="left">
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
        <a href="https://www.facebook.com/sunhouse.com.vn" target="_blank" rel="nofollow" title="Facebook SUNHOUSE GROUP">
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/fbImg1.png" src="./themes/1000000/assets/css/images/fbImg1.png" alt="Facebook SUNHOUSE GROUP">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/user/sunhousechanel" target="_blank" rel="nofollow" title="Youtube SUNHOUSE GROUP">
          <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/ytImg1.png" src="./themes/1000000/assets/css/images/ytImg1.png" alt="Youtube SUNHOUSE GROUP">
        </a>
      </li>
    </ul>
  </div>
  <!--Nút back top-->
  <div class="btn_top" style="display: none;">
    <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/backTopIcon.png" src="./themes/1000000/assets/css/images/backTopIcon.png" alt="Top">
  </div>
  
  <!-- #endregion -->
  <!-- #region Các mã có thể nhúng vào cuối thẻ body như Google Analytics, Facebook,... -->
  <style>
    .newsNew .col1 .itemBox .itemTitle {
      margin: 15px 0 2px !important;
    }

    .thuVienTinDS .khungAnh:before,
    .newsNew .col2 .itemBox .khungAnh:before,
    .newsNew .col1 .itemBox .itemPicture .khungAnh:before,
    .thuVienTinDS .khungAnh:before,
    .otherAchieve .listItem .item .khungAnh:before,
    .newsHot .itemBox .khungAnh:before,
    .thuVienTinDS .khungAnh:before,
    .saleOff .listSale .item .khungAnh:before,
    .newsHome .newsRight .listNews .item .khungAnh:before {
      padding-bottom: calc(100 / 148* 100%) !important;
    }

    .hotineBottom {
      border-radius: 0 8px 0 0;
      right: auto;
      left: 0
    }

    .btn_top {
      bottom: 100px
    }

    iframe {
      max-width: 100%;
    }

    @media(max-width: 767px) {
      .thongTinSanPhamChung .tabView {
        display: block;
      }

      .thongTinSanPhamChung .tabView .menuView1 li {
        display: none;
      }

      .thongTinSanPhamChung .tabView .menuView1 li:last-child {
        display: block;
      }

      .thongTinSanPhamChung .top .col2 .btnClick a {
        margin-top: 5px;
      }
    }

    @media (max-width: 767px) {
      .hotineBottom {
        border-radius: 50%;
        right: 10px;
        left: auto;
        bottom: 100px
      }

      .footer_box .middle_footer {
        padding-bottom: 140px;
      }

      .btnSearch {
        width: 34px;
        height: 34;
        position: absolute;
        right: 23px;
        top: 5px;
        z-index: 1000000;
        text-align: center;
        line-height: 34px;
        display: none;
      }

      .btnSearch:before {
        content: '\f002';
        font-family: FontAwesome;
      }

      .header_box .searchBox.active .btnSearch {
        display: block;
      }

      .header_box .searchBox.active input {
        width: 300px;
      }
    }

    .toolLeft {
      display: none !important
    }

    #popupSP .big_tt {
      color: white
    }

    #popupSP .closePopup {
      position: static;
      float: right;
      background-color: white
    }

    .popUpTrangChu {
      display: none
    }

    .popUpTrangChu.active {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      z-index: 111111;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0
    }

    .popUpTrangChu.active .popupcontent {
      position: relative;
      z-index: 111111
    }

    .popUpTrangChu.active .popupcontent .content>a {
      color: white
    }
  </style>
  <!-- #endregion -->
  <style>
    .reset {
      display: inherit;
      margin: inherit;
      font-size: inherit;
      line-height: inherit
    }

    .bannerHome {
      margin-top: 0 !important
    }

    .bannerHome .khungAnh:before {
      padding-bottom: 45%;
    }

    .bannerHome .khungAnh .khungAnhCrop img {
      top: 0;
      transform: translate(-50%, 0);
    }

    .thongTinSanPhamChung .top .col2 .infoView .review {
      margin-right: 10px
    }

    .thongTinSanPhamChung .top .col2 .infoView .fb_reset,
    .thongTinSanPhamChung .top .col2 .infoView .shareItem,
    .thongTinSanPhamChung .top .col2 .infoView .shareItem .fb_iframe_widget {
      float: left
    }

    .guaranteeHome .left {
      position: relative;
      z-index: 2
    }

    .guaranteeHome .khungAnh {
      z-index: 1;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      transform: none;
      background: url('https://sunhouse.com.vn./themes/1000000/assets/css/pic_css/baohanh3.png') no-repeat right 80px;
      background-size: auto 80%;
      pointer-events: none;
    }

    .guaranteeHome .khungAnhCrop {
      display: none;
    }

    .wrapperContentProduct .contentRight .headTool .left {
      width: calc(100% - 450px)
    }

    .wrapperContentProduct .contentRight .headTool .right {
      width: 450px;
      float: right
    }

    .cateHome .titleHead h2 {
      margin: 0
    }

    .cateHome .listCate .item h2 {
      margin-top: 26px
    }

    .cateHome .listCate .item h2 a.name {
      font-family: "StagSansVUMedium";
      color: #fff;
      font-size: 18px;
      line-height: 24px;
      display: inline-block;
      width: 100%;
      text-align: center;
      text-transform: uppercase;
      transition: .4s;
      height: 48px;
      overflow: hidden
    }

    blockquote {
      padding: 2px 8px 2px 20px;
      border-left: 5px solid #ccc;
      font-style: italic
    }

    .noidung blockquote p {
      margin: 15px 0
    }

    .featureProduct .titleHome h2.reset {
      margin-bottom: 0
    }

    .TextSize a[href] {
      color: #1f01ff
    }

    .thuVienTinDS .itemTitle {
      line-height: 24px;
      height: 72px;
      max-height: 72px
    }

    @media(min-width:1600px) {
      .guaranteeHome .left {
        width: 70%
      }
    }

    @media (max-width: 1599px) {
      .guaranteeHome .khungAnh {
        background-size: auto 60%;
        background-position: right 120px
      }
    }

    @media(max-width: 1366px) {
      .wrapperContentProduct .contentRight .headTool .left {
        width: 100%
      }

      .wrapperContentProduct .contentRight .headTool .right {
        width: auto;
        margin-top: 10px
      }

      .wrapperContentProduct .contentRight .headTool .left span {
        width: auto
      }
    }

    @media (max-width: 1199px) {
      .cateHome {
        margin-top: -112px;
      }

      .guaranteeHome .khungAnh {
        display: none
      }
    }

    @media (max-width: 991px) {
      .cateHome {
        margin-top: -84px;
      }
    }

    @media (max-width: 767px) {
      .guaranteeHome .searchBox {
        padding-bottom: 60px;
      }

      .bannerHome .khungAnh:before {
        padding-bottom: 50%;
      }

      .cateHome {
        margin-top: -44px;
      }

      .popUpSanPham .slide_zoom {
        width: 96%;
        left: 2%;
      }

      .popUpSanPham .slide_zoom .next,
      .popUpSanPham .slide_zoom .close,
      .popUpSanPham .slide_zoom .watch360 {
        right: 0;
      }

      .popUpSanPham .slide_zoom .prev {
        left: 0;
      }
    }
  </style>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
        "@type": "Organization",
        "name": "Sunhouse",
        "alternateName": "Sunhouse Group",
        "url": "https://sunhouse.com.vn",
        "logo": "https://sunhouse.com.vn/pic/banner/logo.png",
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "02432007698",
          "contactType": "customer service",
          "contactOption": "TollFree",
          "areaServed": "VN",
          "availableLanguage": "Vietnamese"
        }, {
          "@type": "ContactPoint",
          "telephone": "02435511212",
          "contactType": "technical support"
        }],
        "sameAs": ["https://www.facebook.com/sunhouse.com.vn", "https://www.youtube.com/channel/UCuUMw6wl9XYfRpaq_D1vGng", "https://g.co/kgs/ejBJJ5", "https://twitter.com/SunhouseG", "https://www.instagram.com/sunhousegroup/", "https://vn.linkedin.com/company/sunhouse-group", "https://sunhouse.com.vn", "https://sunhousegroup.tumblr.com/"]
      }, {
        "@type": "LocalBusiness",
        "name": "Sunhouse",
        "image": "https://sunhouse.com.vn/pic/banner/logo.png",
        "@id": "https://sunhouse.com.vn/#website",
        "url": "https://sunhouse.com.vn",
        "telephone": "02437366676",
        "priceRange": "1000000",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Tầng 12, tòa nhà Richy Tower, Số 35 Mạc Thái Tổ, Yên Hòa, Cầu Giấy",
          "addressLocality": "Hà Nội",
          "postalCode": "100000",
          "addressCountry": "VN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 21.0171588,
          "longitude": 105.7907232
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "08:00",
          "closes": "18:00"
        },
        "sameAs": ["https://www.facebook.com/sunhouse.com.vn", "https://twitter.com/SunhouseG", "https://www.instagram.com/sunhousegroup/", "https://www.youtube.com/channel/UCuUMw6wl9XYfRpaq_D1vGng", "https://vn.linkedin.com/company/sunhouse-group", "https://sunhousegroup.tumblr.com/", "https://g.co/kgs/ejBJJ5", "https://sunhouse.com.vn"]
      }, {
        "@type": "WebSite",
        "url": "https://sunhouse.com.vn",
        "potentialAction": {
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://sunhouse.com.vn/search/{search_term_string}"
          },
          "query-input": "required name=search_term_string"
        }
      }, {
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Trang chủ",
          "item": "http://localhost:49931/"
        }, {
          "@type": "ListItem",
          "position": 2,
          "name": "Tin hoạt động",
          "item": "http://localhost:49931/tin-hoat-dong/"
        }, {
          "@type": "ListItem",
          "position": 3,
          "name": "CẢNH BÁO GIẢ MẠO TẬP ĐOÀN SUNHOUSE NHẰM LỪA ĐẢO TRỤC LỢI",
          "item": "http://localhost:49931/tin-hoat-dong/canh-bao-gia-mao-tap-doan-sunhouse-nham-lua-dao-truc-loi.html"
        }]
      }, {
        "@type": "BlogPosting",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "http://localhost:49931/tin-hoat-dong/canh-bao-gia-mao-tap-doan-sunhouse-nham-lua-dao-truc-loi.html"
        },
        "headline": "CẢNH BÁO GIẢ MẠO TẬP ĐOÀN SUNHOUSE NHẰM LỪA ĐẢO TRỤC LỢI",
        "description": "Thời gian gần đây, diễn ra tình trạng có các cá nhân/tổ chức MẠO DANH là “Đại diện Tập đoàn SUNHOUSE” liên hệ Quý khách hàng để thực hiện hành vi lừa đảo trục lợi. Hình thức chung của các hoạt động này như sau:",
        "image": "http://localhost:49931/pic/news/thumb.jpg",
        "author": {
          "@type": "Organization",
          "name": "Sunhouse",
          "url": "https://sunhouse.com.vn"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Sunhouse",
          "logo": {
            "@type": "ImageObject",
            "url": "https://sunhouse.com.vn/pic/banner/logo.png"
          }
        },
        "datePublished": "2022-12-23",
        "dateModified": "2022-12-23"
      }]
    }
  </script>
  <iframe allow="join-ad-interest-group" data-tagging-id="AW-11006955196" data-load-time="1722323530310" height="0" width="0" src="https://td.doubleclick.net/td/rul/11006955196?random=1722323530297&amp;cv=11&amp;fst=1722323530297&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be47t0v898488184za200&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=95250752&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fsunhouse.com.vn%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Website%20ch%C3%ADnh%20th%E1%BB%A9c%20c%E1%BB%A7a%20T%E1%BA%ADp%20%C4%91o%C3%A0n%20SUNHOUSE%20-%20SUNHOUSE%20GROUP&amp;npa=0&amp;pscdl=noapi&amp;auid=393881066.1722212751&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.72%7CChromium%3B127.0.6533.72&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;"></iframe>
  <iframe id="_hjSafeContext_91786251" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
  <script type="text/javascript" id="">
    ! function(b, e, f, g, a, c, d) {
      b.fbq || (a = b.fbq = function() {
        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
      }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "2659254590859412");
    fbq("set", "agent", "tmgoogletagmanager", "2659254590859412");
    fbq("track", "PageView");
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2659254590859412&amp;ev=PageView&amp;noscript=1">
  </noscript>
  <iframe allow="join-ad-interest-group" data-tagging-id="G-CY6D834NL1" data-load-time="1722323530806" height="0" width="0" src="https://td.doubleclick.net/td/ga/rul?tid=G-CY6D834NL1&amp;gacid=1841374620.1722212752&amp;gtm=45je47t0v889029372z8830103098za200zb830103098&amp;dma=0&amp;gcd=13l3l3l3l1&amp;npa=0&amp;pscdl=noapi&amp;aip=1&amp;fledge=1&amp;frm=0&amp;tag_exp=95250752&amp;z=936446523" style="display: none; visibility: hidden;"></iframe>
  <iframe allow="join-ad-interest-group" data-tagging-id="G-X3C2KPMQ0S" data-load-time="1722323530861" height="0" width="0" src="https://td.doubleclick.net/td/ga/rul?tid=G-X3C2KPMQ0S&amp;gacid=1841374620.1722212752&amp;gtm=45je47t0v9122405193z8830103098za200zb830103098&amp;dma=0&amp;gcd=13l3l3l3l1&amp;npa=0&amp;pscdl=noapi&amp;aip=1&amp;fledge=1&amp;frm=0&amp;tag_exp=95250753&amp;z=1522503918" style="display: none; visibility: hidden;"></iframe>
  <iframe allow="join-ad-interest-group" data-tagging-id="AW-966402230" data-load-time="1722323530895" height="0" width="0" src="https://td.doubleclick.net/td/rul/966402230?random=1722323530886&amp;cv=11&amp;fst=1722323530886&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be47t0v9182292099z8830103098za201zb830103098&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=95250752&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fsunhouse.com.vn%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Website%20ch%C3%ADnh%20th%E1%BB%A9c%20c%E1%BB%A7a%20T%E1%BA%ADp%20%C4%91o%C3%A0n%20SUNHOUSE%20-%20SUNHOUSE%20GROUP&amp;npa=0&amp;pscdl=noapi&amp;auid=393881066.1722212751&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.72%7CChromium%3B127.0.6533.72&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1" style="display: none; visibility: hidden;"></iframe>
  <script type="text/javascript" id="">
    dataLayer.push({
      pageCategory: document.querySelector("body \x3e div.master_page.thuvienPage.thuVienTinPage \x3e div.breadcrums \x3e div \x3e div \x3e ul \x3e li:nth-child(3)").innerText
    });
  </script>
  <div id="bs-chatbot-widget-container__21E7F" class="website-chat-plugin__ON4Sg livechat__2vclc">
    <div class="">
      <iframe id="bs-chatbot-frame__Xd3eS" class="bs-chatbot-frame__Xd3eS" name="bs-chatbot-widget-frame" frameborder="0" allowfullscreen="true" allowtransparency="true" autoplay="true" src="https://widget.botstar.com/sa6733f5b-6382-4838-865a-9f28f06fb3cf?embedded=1&amp;host=%7B%22ancestorOrigins%22%3A%7B%7D%2C%22href%22%3A%22https%3A%2F%2Fsunhouse.com.vn%2F%22%2C%22origin%22%3A%22https%3A%2F%2Fsunhouse.com.vn%22%2C%22protocol%22%3A%22https%3A%22%2C%22host%22%3A%22sunhouse.com.vn%22%2C%22hostname%22%3A%22sunhouse.com.vn%22%2C%22port%22%3A%22%22%2C%22pathname%22%3A%22%2F%22%2C%22search%22%3A%22%22%2C%22hash%22%3A%22%22%7D&amp;mode=livechat&amp;initData=%7B%7D"></iframe>
      <div class="bs-chatbot-fab__nJAOV" style="background: linear-gradient(135deg, rgb(218, 32, 40), rgb(8, 113, 129));">
        <img src="https://app-upload-assets.cdn.botstar.com/6f860630-8ce3-11e9-a12c-db236403da6d/image/1564365642425/message-in-a-speech-bubble-pngrepo-com.png" class="bs-chatbot-fab--icon__22tcL open__39RDt">
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTEwLjcgMTAuNWw1LjctNS42YS41LjUgMCAwIDAtLjgtLjhMMTAgOS44IDQuNCA0YS41LjUgMCAwIDAtLjguOGw1LjcgNS42TDMuNiAxNmEuNS41IDAgMCAwIC44LjhsNS42LTUuNyA1LjYgNS43YS41LjUgMCAwIDAgLjggMGMuMS0uMi4xLS42IDAtLjhsLTUuNy01LjZ6Ii8+PC9zdmc+" class="bs-chatbot-fab--icon__22tcL close__30Msb">
      </div>
    </div>
  </div>
</main>
<?php  
include_once('./master_layout/chacha/footer.php') 
?>