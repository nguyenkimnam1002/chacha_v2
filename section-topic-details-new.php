<?php  
  require_once __DIR__ ."/master_layout/chacha/header.php";
  require('./connect.php');
?>
<?php
  $open = "posts";
  require_once __DIR__ ."/autoload/autoload.php";
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
            <a href="https://sunhouse.com.vn/tin-hoat-dong" title="Tin hoạt động">Tin hoạt động</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</a>
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
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/khuyen-mai-hot" title="Khuyến mại HOT" tabindex="0">Khuyến mại HOT</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/thong-bao" title="THÔNG BÁO" tabindex="-1">THÔNG BÁO</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tin-thuong-thuc" title="Tin thường thức" tabindex="-1">Tin thường thức</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tin-hoat-dong" title="Tin hoạt động" class="active" tabindex="-1">Tin hoạt động</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat" title="Bí quyết - Mẹo vặt" tabindex="-1">Bí quyết - Mẹo vặt</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-bep-dien" title="Tư vấn mua bếp điện" tabindex="-1">Tư vấn mua bếp điện</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-loc-nuoc" title="Tư vấn mua Máy lọc nước" tabindex="-1">Tư vấn mua Máy lọc nước</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-noi-com-dien" title="Tư vấn mua Nồi cơm điện" tabindex="-1">Tư vấn mua Nồi cơm điện</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-noi-chien-khong-dau" title="Tư vấn mua Nồi chiên không dầu" tabindex="-1">Tư vấn mua Nồi chiên không dầu</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-rua-bat" title="Tư vấn mua Máy rửa bát" tabindex="-1">Tư vấn mua Máy rửa bát</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham" title="Tư vấn mua Máy ép chậm" tabindex="-1">Tư vấn mua Máy ép chậm</a>
                </div>
              </div>
              <div class="item">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-hut-mui" title="Tư vấn mua Máy hút mùi" tabindex="-1">Tư vấn mua Máy hút mùi</a>
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
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
              </h2>
              <div class="itemDescription">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/2(6).jpg" alt="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam">Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam</a>
              </h2>
              <div class="itemDescription">Tại nhà máy Sunhouse Việt Nam, từ những hạt nhựa, tấm kim loại thô, bằng bàn tay, khối óc của người Việt, sản phẩm nồi chiên không dầu Made in Việt Nam nhận được niềm tin của người tiêu dùng Mỹ. Có gì bên trong “đại bản doanh” sản xuất nồi chiên không dầu Made in Việt Nam đầu tiên và duy nhất tại Việt Nam đủ tiêu chuẩn xuất sang Mỹ.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Anh 1(4).JPG" alt="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</a>
              </h2>
              <div class="itemDescription">SUNHOUSE cũng là doanh nghiệp Việt duy nhất có vinh dự đón tiếp đoàn lãnh đạo cấp cao của Tập đoàn Amazon đến thăm quan các nhà máy sản xuất sản phẩm đang kinh doanh trên sàn TMĐT Amazon.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.jpeg" alt="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG">SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG</a>
              </h2>
              <div class="itemDescription">Hà Nội, ngày 11 tháng 7 năm 2023 - Tập đoàn SUNHOUSE vừa chính thức cho ra mắt dòng sản phẩm Tủ nhựa dành cho gia đình, dự kiến sản lượng 12.000 chiếc mỗi tháng cung cấp cho thị trường.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.jpeg" alt="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E">TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E</a>
              </h2>
              <div class="itemDescription">Ngày 21/06 vừa qua, Sunhouse Group và Sohaco Group đã cùng ký kết hợp tác chiến lược nhằm cung cấp và phân phối các sản phẩm M&amp;E (cơ điện) của Sunhouse vào các dự án xây dựng và công trình liên quan.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/web.jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/web.jpg" alt="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY" class="lazyloaded tall">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY">SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY</a>
              </h2>
              <div class="itemDescription"></div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4&quot;">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/KV_NGANG.jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/KV_NGANG.jpg" alt="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4&quot;">THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: "ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4"</a>
              </h2>
              <div class="itemDescription"></div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.jpeg" alt="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI">SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI</a>
              </h2>
              <div class="itemDescription">Trong tháng 4/2023 vừa qua, SUNHOUSE vinh hạnh đón tiếp đoàn đại biểu của SAIGON CO.OP - đơn vị quản lý hệ thống siêu thị Co.opmart đến tham quan và làm việc. Nhiều cơ hội hợp tác đã được mở ra sau chuyến thăm này.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Untitled(2).png" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Untitled(2).png" alt="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" class="lazyloaded wide">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG">CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG</a>
              </h2>
              <div class="itemDescription"></div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/Keyvisual.jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/Keyvisual.jpg" alt="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" class="tall lazyloaded">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN">Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN</a>
              </h2>
              <div class="itemDescription"></div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" alt="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" class="tall lazyloaded">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?">Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?</a>
              </h2>
              <div class="itemDescription">“Cơ hội cho Sunhouse nếu chỉ bám trụ trong nước rất nhỏ… 2021 là năm đầu tiên chúng tôi bước chân sang Mỹ, và với Đông Nam Á chúng tôi chọn Indonesia”, ông Vũ Thanh Hải – Phó Tổng Giám đốc Tập đoàn Sunhouse – chia sẻ.</div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/danh-sach-khach-hang-trung-giai-tet-sam-loc-nuoc-ruoc-kim-cuong-dot-2.html" title="DANH SÁCH KHÁCH HÀNG TRÚNG GIẢI &quot;TẾT SẮM LỌC NƯỚC – RƯỚC KIM CƯƠNG&quot; ĐỢT 2">
                  <img src="https://sunhouse.com.vn/pic/thumb/medium/news/z4073327668028_f0a4d6c826463e0cf6fa2129f7800bc5.jpg" data-src="https://sunhouse.com.vn/pic/thumb/medium/news/z4073327668028_f0a4d6c826463e0cf6fa2129f7800bc5.jpg" alt="DANH SÁCH KHÁCH HÀNG TRÚNG GIẢI TẾT SẮM LỌC NƯỚC – RƯỚC KIM CƯƠNG ĐỢT 1" class="tall lazyloaded">
                </a>
              </div>
              <h2 class="itemTitle">
                <a href="https://sunhouse.com.vn/tin-hoat-dong/danh-sach-khach-hang-trung-giai-tet-sam-loc-nuoc-ruoc-kim-cuong-dot-2.html" title="DANH SÁCH KHÁCH HÀNG TRÚNG GIẢI &quot;TẾT SẮM LỌC NƯỚC – RƯỚC KIM CƯƠNG&quot; ĐỢT 2">DANH SÁCH KHÁCH HÀNG TRÚNG GIẢI "TẾT SẮM LỌC NƯỚC – RƯỚC KIM CƯƠNG" ĐỢT 2</a>
              </h2>
              <div class="itemDescription"></div>
              <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/danh-sach-khach-hang-trung-giai-tet-sam-loc-nuoc-ruoc-kim-cuong-dot-2.html" title="Chi tiết">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <a class="moreContent1" href="#" data-itemperpage="12" data-categoryid="1" data-nextpage="2">Xem thêm <span>423</span> tin tức khác </a>
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