<?php
     require('./connect.php');
?>
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
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <div class="menuBoxRes">
        <div class="nganhHang">
          <div class="groupItem">
            <?php foreach($category as $item) :?>
              <!-- <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id']?>"><?php echo $item['name']?></a></li> -->
              <div class="itemBox" data-id="<?php echo $item['id']?>">
                <div class="khungAnh">
                  <a href="javascript:void(0)" class="khungAnhCrop0" title="<?php echo $item['name']?>">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/bo-noi-inox-5-day-sh779-removebg-preview.png" alt="<?php echo $item['name']?>" class="lazyload">
                  </a>
                </div>
                <div class="itemTitle">
                  <a href="javascript:void(0)" title="<?php echo $item['name']?>"><?php echo $item['name']?></a>
                </div>
              </div>
            <?php endforeach;?>
            
            <div class="itemBox" data-id="1091">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Đồ gia dụng 1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/bo-noi-inox-5-day-sh779-removebg-preview.png" alt="Đồ gia dụng" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Đồ gia dụng">Đồ gia dụng 1</a>
              </div>
            </div>
            <div class="itemBox" data-id="1092">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Điện gia dụng">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/keyshot.566.png" alt="Điện  gia dụng" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Điện gia dụng">Điện gia dụng</a>
              </div>
            </div>
            <div class="itemBox" data-id="1244">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Điện tử Điện lạnh">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/sunhouse-sha76213ck_001-removebg-preview(1).png" alt="Điện tử - Điện lạnh" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Điện tử Điện lạnh">Điện tử Điện lạnh</a>
              </div>
            </div>
            <div class="itemBox" data-id="1093">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Thiết bị nhà bếp">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/MMB9208DIH-2-removebg.png" alt="Thiết bị  nhà bếp" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Thiết bị nhà bếp">Thiết bị nhà bếp</a>
              </div>
            </div>
            <div class="itemBox" data-id="1271">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Đồ dùng  nhà bếp">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/do-dung-nha-bep-removebg.png" alt="Đồ dùng nhà bếp" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Đồ dùng  nhà bếp">Đồ dùng nhà bếp</a>
              </div>
            </div>
            <div class="itemBox" data-id="2385">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Tủ nhựa">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/Đơn3T-xanh.0.png" alt="Tủ nhựa" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Tủ nhựa">Tủ nhựa</a>
              </div>
            </div>
            <div class="itemBox" data-id="2389">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Thiết bị âm thanh">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/LOA.png" alt="Thiết bị âm thanh" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Thiết bị âm thanh">Thiết bị âm thanh</a>
              </div>
            </div>
            <div class="itemBox" data-id="1094">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Điện dân dụng">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/_16A5054(1).png" alt="Điện dân dụng" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Điện dân dụng">Điện dân dụng</a>
              </div>
            </div>
            <div class="itemBox" data-id="1095">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Thiết bị  điện công nghiệp">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/thiet-bi-dien-cong-nghiep.png" alt="Thiết bị  điện công nghiệp" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Thiết bị  điện công nghiệp">Thiết bị điện công nghiệp</a>
              </div>
            </div>
            <div class="itemBox" data-id="2351">
              <div class="khungAnh">
                <a href="javascript:void(0)" class="khungAnhCrop0" title="Dây cáp điện">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/thumb/product/capdien.png" alt="Cáp điện" class="lazyload">
                </a>
              </div>
              <div class="itemTitle">
                <a href="javascript:void(0)" title="Dây cáp điện">Dây cáp điện</a>
              </div>
            </div>
          </div>
        </div>
        <ul class="menuMainRes">
          <li>
            <a href="https://sunhouse.com.vn/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
          </li>
          <li>
            <a href="/xuat-khau" title="Xuất khẩu">Xuất khẩu</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bao-hanh" title="Bảo hành">Bảo hành</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dai-ly" title="Nhà phân phối, đại lý">Nhà phân phối, đại lý</a>
          </li>
          <li>
            <a href="http://nhamay.sunhouse.com.vn/" title="Nhà máy">Nhà máy</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tin-tuc" title="Tin tức &amp; Sự kiện">Tin tức &amp; Sự kiện</a>
          </li>
          <li>
            <a href="/tuyen-dung/xem-toan-bo-tin" title="Tuyển dụng">Tuyển dụng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/lien-he" title="Liên hệ">Liên hệ</a>
          </li>
        </ul>
        <ul class="menuOther">
          <li>
            <a href="http://sunhouse.com.vn">
              <i class="fa fa-globe" aria-hidden="true"></i> Tiếng Việt </a>
          </li>
          <li>
            <a href="http://en.sunhouse.com.vn">
              <i class="fa fa-globe" aria-hidden="true"></i> English </a>
          </li>
          <li class="accountShow" data-id="tai-khoan">
            <a href="javascript:void(0);" title="Tài khoản">
              <i class="fa fa-user" aria-hidden="true"></i> Tài khoản </a>
          </li>
        </ul>
      </div>
      <div class="menuBoxRes subMenuNganhHang">
        <a class="back" href="javascript:void(0);" title="Quay lại">
          <i class="fa fa-chevron-left" aria-hidden="true"></i> Quay lại </a>
        <ul class="menuMainRes" data-parent-id="1091">
          <li class="title">Đồ gia dụng <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dong-san-pham-cao-cap-ultra-titanium" title="Dòng sản phẩm cao cấp Ultra Titanium">Dòng sản phẩm cao cấp Ultra Titanium</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-noi-anod" title="Bộ nồi Anod">Bộ nồi Anod</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/chao-inox" title="Chảo Inox">Chảo Inox</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-noi-inox" title="Bộ nồi Inox">Bộ nồi Inox</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/chao-chong-dinh" title="Chảo chống dính">Chảo chống dính</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-noi-nhom" title="Nồi nhôm">Nồi nhôm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-ap-suat" title="Nồi áp suất">Nồi áp suất</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-inox" title="Nồi Inox">Nồi Inox</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-quay-bot" title="Nồi quấy bột">Nồi quấy bột</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-anod" title="Nồi Anod">Nồi Anod</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-noi-chao" title="Bộ nồi chảo">Bộ nồi chảo</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1092">
          <li class="title">Điện gia dụng <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-chien-khong-dau" title="Nồi chiên không dầu">Nồi chiên không dầu</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-com-dien" title="Nồi cơm điện">Nồi cơm điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-xay-sinh-to" title="Máy xay sinh tố">Máy xay sinh tố</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-ep-trai-cay" title="Máy ép hoa quả">Máy ép hoa quả</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/quat-dung" title="Quạt đứng">Quạt đứng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/quat-tran" title="Quạt trần">Quạt trần</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-nuong-dien" title="Bếp nướng">Bếp nướng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/quat-tich-dien" title="Quạt sạc">Quạt sạc</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-ap-suat-dien" title="Nồi áp suất điện">Nồi áp suất điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/noi-lau-dien" title="Lẩu điện">Lẩu điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-hong-ngoai" title="Bếp hồng ngoại">Bếp hồng ngoại</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-tu" title="Bếp điện từ đơn">Bếp điện từ đơn</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/lo-nuong" title="Lò nướng">Lò nướng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/lo-vi-song" title="Lò vi sóng">Lò vi sóng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/am-sieu-toc" title="Ấm siêu tốc">Ấm siêu tốc</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/binh-thuy-dien" title="Bình thủy điện">Bình thủy điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/ban-la" title="Bàn là">Bàn là</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-say-toc" title="Máy sấy tóc">Máy sấy tóc</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-xay-thit" title="Máy xay thịt">Máy xay thịt</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-say-quan-ao" title="Máy sấy quần áo">Máy sấy quần áo</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/quat-suoi" title="Sưởi phòng tắm">Sưởi phòng tắm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/suoi-dien" title="Sưởi phòng">Sưởi phòng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tam-nuoc" title="Tăm nước">Tăm nước</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1244">
          <li class="title">Điện tử Điện lạnh <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dieu-hoa" title="Điều hòa không khí">Điều hòa không khí</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-loc-nuoc" title="Máy lọc nước gia đình ">Máy lọc nước gia đình </a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-lam-mat-khong-khi" title="Máy làm mát không khí - Quạt điều hòa">Máy làm mát không khí - Quạt điều hòa</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/mang-loc" title="Màng lọc không khí">Màng lọc không khí</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-loc-khong-khi" title="Máy lọc không khí ">Máy lọc không khí </a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-dong-tu-mat" title="Tủ đông">Tủ đông</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/cay-nuoc-nong-lanh" title="Cây nước nóng lạnh">Cây nước nóng lạnh</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/binh-nuoc-nong" title="Bình nước nóng">Bình nước nóng</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/loi-loc-nuoc" title="Lõi lọc nước">Lõi lọc nước</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1093">
          <li class="title">Thiết bị nhà bếp <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-thiet-bi-nha-bep-quoc-dan" title="Bộ Thiết bị nhà bếp quốc dân">Bộ Thiết bị nhà bếp quốc dân</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-tu-doi" title="Bếp từ đôi">Bếp từ đôi</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-doi-dien-tu-hong-ngoai" title="Bếp điện từ hồng ngoại">Bếp điện từ hồng ngoại</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-hut-mui" title="Máy hút mùi">Máy hút mùi</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-hong-ngoai-doi" title="Bếp hồng ngoại đôi">Bếp hồng ngoại đôi</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-rua-bat" title="Máy rửa bát">Máy rửa bát</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-gas" title="Bếp gas dương">Bếp gas dương</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-gas-am" title="Bếp gas âm">Bếp gas âm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bep-gas-hong-ngoai" title="Bếp gas hồng ngoại">Bếp gas hồng ngoại</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/van-gas" title="Van gas">Van gas</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1271">
          <li class="title">Đồ dùng nhà bếp <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/do-dung-sinh-hoat" title="Đồ dùng sinh hoạt">Đồ dùng sinh hoạt</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bo-lau-nha" title="Bộ Lau Nhà">Bộ Lau Nhà</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dung-cu-nau-an" title="Dụng cụ nấu ăn">Dụng cụ nấu ăn</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/hop-bao-quan" title="Hộp bảo quản thực phẩm">Hộp bảo quản thực phẩm</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="2385">
          <li class="title">Tủ nhựa <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-nhua-tre-em" title="Tủ nhựa trẻ em">Tủ nhựa trẻ em</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-nhua-so-sinh" title="Tủ nhựa sơ sinh">Tủ nhựa sơ sinh</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-nhua-gia-dinh" title="Tủ nhựa gia đình">Tủ nhựa gia đình</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-giay" title="Tủ giày">Tủ giày</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="2389">
          <li class="title">Thiết bị âm thanh <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/loa-keo-don" title="Loa kéo đơn">Loa kéo đơn</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/loa-keo-doi" title="Loa kéo đôi">Loa kéo đôi</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/loa-xach-tay" title="Loa xách tay">Loa xách tay</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1094">
          <li class="title">Điện dân dụng <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-downlight" title="Đèn Led Downlight">Đèn Led Downlight</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/thiet-bi-dien" title="Thiết bị điện">Thiết bị điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-op-tuong" title="Đèn Led ốp tường">Đèn Led ốp tường</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-day" title="Đèn Led dây">Đèn Led dây</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-trang-tri" title="Đèn Led trang trí">Đèn Led trang trí</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-pha-led" title="Đèn pha Led">Đèn pha Led</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-duong" title="Đèn đường">Đèn đường</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-nam" title="Đèn Led nấm">Đèn Led nấm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-bulb" title="Đèn Led Bulb">Đèn Led Bulb</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-led-tuyp" title="Đèn Led tuýp">Đèn Led tuýp</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-tuyp-ban-nguyet" title="Đèn tuýp bán nguyệt">Đèn tuýp bán nguyệt</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-ceiling" title="Đèn Led Ceiling">Đèn Led Ceiling</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-ban" title="Đèn bàn">Đèn bàn</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-pin" title="Đèn pin">Đèn pin</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/vot-muoi" title="Vợt muỗi">Vợt muỗi</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/o-cam-dien" title="Ổ cắm điện">Ổ cắm điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-tich-dien" title="Đèn tích điện">Đèn tích điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bang-keo-cach-dien" title="Băng keo cách điện">Băng keo cách điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/den-compact" title="Đèn compact">Đèn compact</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="1095">
          <li class="title">Thiết bị điện công nghiệp <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-dien-ha-the" title="Tủ điện hạ thế" target="_blank" rel="nofollow">Tủ điện hạ thế</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/thang-mang-cap" title="Thang máng cáp" target="_blank" rel="nofollow">Thang máng cáp</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dau-cap-hop-noi" title="Đầu cáp hộp nối" target="_blank" rel="nofollow">Đầu cáp hộp nối</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/tu-trung-the" title="Tủ trung thế" target="_blank" rel="nofollow">Tủ trung thế</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/thiet-bi-dong-cat-dien" title="Thiết bị đóng cắt" target="_blank" rel="nofollow">Thiết bị đóng cắt</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/dcn-cap-dien" title="Cáp điện" target="_blank" rel="nofollow">Cáp điện</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/thiet-bi-do-dem" title="Thiết bị đo đếm" target="_blank" rel="nofollow">Thiết bị đo đếm</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/busway-dcn" title="Busway" target="_blank" rel="nofollow">Busway</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-bien-ap" title="Máy biến áp" target="_blank" rel="nofollow">Máy biến áp</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/may-phat-dien" title="Máy phát điện" target="_blank" rel="nofollow">Máy phát điện</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="2351">
          <li class="title">Dây cáp điện <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/nhom-hang-cap-dien" title="Nhóm hàng Cáp điện">Nhóm hàng Cáp điện</a>
          </li>
        </ul>
        <ul class="menuMainRes" data-parent-id="tai-khoan">
          <li class="title">Tài khoản <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </li>
          <li>
            <a href="/dang-nhap">Đăng nhập</a>
          </li>
          <li>
            <a href="/dang-ky">Tạo tài khoản mới</a>
          </li>
        </ul>
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
            <a href="https://sunhouse.com.vn/" title="Trang chủ">
              <i class="fa fa-home" aria-hidden="true"></i>Trang chủ </a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/gioi-thieu" title="Giới thiệu" rel="nofollow">Giới thiệu</a>
            <span class="openSub"></span>
            <ul class="subMenu">
              <li>
                <a href="/nha-la-bep-bep-la-sunhouse" title="Về tập đoàn SUNHOUSE" rel="nofollow">Về tập đoàn SUNHOUSE</a>
              </li>
              <li>
                <a href="/thong-diep-cua-chu-tich-hoi-dong-quan-tri-tap-doan-sunhouse" title="Thông điệp của Chủ tịch HĐQT" rel="nofollow">Thông điệp của Chủ tịch HĐQT</a>
              </li>
              <li>
                <a href="/co-cau-to-chuc" title="Cơ cấu tổ chức" rel="nofollow">Cơ cấu tổ chức</a>
              </li>
              <li>
                <a href="/thanh-tich-giai-thuong" title="Thành tích giải thưởng" rel="nofollow">Thành tích giải thưởng</a>
              </li>
              <li>
                <a href="https://sunhouse.com.vn/video" title="SUNHOUSE TV" rel="nofollow">SUNHOUSE TV</a>
              </li>
            </ul>
          </li>
          <li class="megaMenu">
            <a href="https://sunhouse.com.vn/san-pham" title="Sản phẩm" rel="nofollow">Sản phẩm</a>
            <span class="openSub"></span>
            <div class="menuSanPham">
              <div class="container">
                <div class="col1">
                  <div class="listDanhMuc">
                    <div class="title">Danh mục sản phẩm <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                    <ul>
                      <?php foreach($category as $item) :?>
                        <li class="menu-cate" data-id="<?php echo $item['id']?>">
                        <a href="https://sunhouse.com.vn/do-gia-dung">
                          <span><?php echo $item['name']?></span>
                        </a>
                      </li>
                        <?php endforeach;?>
                      <li class="menu-cate" data-id="cate_1091">
                        <a href="https://sunhouse.com.vn/do-gia-dung">
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
                              <a href="danh-muc-san-pham.php?id=<?php echo $itemIn['id']?>" title="<?php echo $itemIn['name']?>"><?php echo $itemIn['name']?></a>
                            </li>
                            <?php endforeach;?> 
                          </ul>
                          <a class="more1" href="/chacha_v2/danh-muc-san-pham.php?id=<?php echo $item['id']?>" title="Xem tất cả danh mục">Xem tất cả danh mục <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          </a>
                        </div>
                    <?php endforeach;?>  
                    <div class="menu-sub-cate" data-parent-id="cate_1091">
                      <ul>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/dong-san-pham-cao-cap-ultra-titanium" title="Dòng sản phẩm cao cấp Ultra Titanium">Dòng sản phẩm cao cấp Ultra Titanium</a>
                        </li>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/bo-noi-anod" title="Bộ nồi Anod">Bộ nồi Anod</a>
                        </li>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/chao-inox" title="Chảo Inox">Chảo Inox</a>
                        </li>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/bo-noi-inox" title="Bộ nồi Inox">Bộ nồi Inox</a>
                        </li>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/chao-chong-dinh" title="Chảo chống dính">Chảo chống dính</a>
                        </li>
                        <li>
                          <a href="https://sunhouse.com.vn/do-gia-dung/bo-noi-nhom" title="Nồi nhôm">Nồi nhôm</a>
                        </li>
                      </ul>
                      <a class="more1" href="https://sunhouse.com.vn/do-gia-dung" title="Xem tất cả danh mục">Xem tất cả danh mục <i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col3">
                  <?php foreach($category as $item) :?>
                    <div class="khungAnh menu-banner" data-parent-id="<?php echo $item['id']?>">
                      <a class="khungAnhCrop0" href="/chacha2/danh-muc-san-pham.php?id=<?php echo $item['id']?>" title="<?php echo $item['id']?>" rel="nofollow">
                        <img src="/chacha_v2/public/uploads/product/<?php echo $item['image']?>" data-src="/chacha_v2/public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['id']?>" class=" lazyloaded">
                      </a>
                    </div>
                  <?php endforeach ?>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1091">
                    <a class="khungAnhCrop0" href="/chao-chong-dinh/sunhouse-mama-sfp28ma-key" title="Chảo Trơn Sunhouse Mama Đáy Từ Sfp28ma" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/Noi.478.png" data-src="https://sunhouse.com.vn/pic/banner/Noi.478.png" alt="Chảo Trơn Sunhouse Mama Đáy Từ Sfp28ma" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1092">
                    <a class="khungAnhCrop0" href="/dien-gia-dung/may-ep-trai-cay" title="MÁY ÉP CHẬM SUNHOUSE SHD5503" target="_self" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/SHD5503_1.png" data-src="https://sunhouse.com.vn/pic/banner/SHD5503_1.png" alt="MÁY ÉP CHẬM SUNHOUSE SHD5503" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1244">
                    <a class="khungAnhCrop0" href="/may-loc-nuoc/sunhouse-sha76213ck" title="Máy Lọc Nước R.o Shr8829k" target="_blank" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/500x600.jpg" data-src="https://sunhouse.com.vn/pic/banner/500x600.jpg" alt="Máy Lọc Nước R.o Shr8829k" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1093">
                    <a class="khungAnhCrop0" href="bep-doi-dien-tu-hong-ngoai/sunhouse-mama-mmb9100vn-key" title="Bếp đôi hồng ngoại 9100vn" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/bep doi hong ngoai 9100vn.jpg" data-src="https://sunhouse.com.vn/pic/banner/bep doi hong ngoai 9100vn.jpg" alt="Bếp đôi hồng ngoại 9100vn" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1271">
                    <a class="khungAnhCrop0" href="/do-dung-nha-bep" title="Đồ dùng nhà bếp - KITCHEN TOOL" target="_blank" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/do-dung-nha-bep-kitchen-tool.png" data-src="https://sunhouse.com.vn/pic/banner/do-dung-nha-bep-kitchen-tool.png" alt="Đồ dùng nhà bếp - KITCHEN TOOL" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_2385">
                    <a class="khungAnhCrop0" href="#" title="TỦ NHỰA TRẺ EM 2 CÁNH HAPPY KIDS SUNHOUSE KS-CA1400G4">
                      <img src="https://sunhouse.com.vn/pic/banner/Cánh4T-hồng.0.png" data-src="https://sunhouse.com.vn/pic/banner/Cánh4T-hồng.0.png" alt="TỦ NHỰA TRẺ EM 2 CÁNH HAPPY KIDS SUNHOUSE KS-CA1400G4" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner" data-parent-id="cate_1094">
                    <a class="khungAnhCrop0" href="/den-pin/sunhouse-she8000" title="Đèn pin xách tay SUNHOUSE" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/_16A4957-1(1)(1).png" data-src="https://sunhouse.com.vn/pic/banner/_16A4957-1(1)(1).png" alt="Đèn pin xách tay SUNHOUSE" class=" lazyloaded">
                    </a>
                  </div>
                  <div class="khungAnh menu-banner active" data-parent-id="cate_0">
                    <a class="khungAnhCrop0" href="#" title="Ảnh quảng cáo chung các ngành hàng" rel="nofollow">
                      <img src="https://sunhouse.com.vn/pic/banner/1920x1000-27-11(1).jpg" data-src="https://sunhouse.com.vn/pic/banner/1920x1000-27-11(1).jpg" alt="Ảnh quảng cáo chung các ngành hàng" class=" lazyloaded">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="/xuat-khau" title="Xuất khẩu" rel="nofollow">Xuất khẩu</a>
          </li>
          <li>
            <a href="https://sunhouse.com.vn/bao-hanh" title="Bảo hành" rel="nofollow">Bảo hành</a>
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
        <a href="/" title="Logo SUNHOUSE" rel="nofollow">
          <img src="https://sunhouse.com.vn/pic/banner/logo.png" alt="Logo SUNHOUSE" class="normal">
          <img src="https://sunhouse.com.vn/pic/banner/logoScroll.png" data-src="https://sunhouse.com.vn/pic/banner/logoScroll.png" alt="Logo SUNHOUSE" class="scroll lazyloaded">
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
            if (searchKeyword.length > 0) window.location = "/search/" + searchKeyword;
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
          <!-- <a href="https://sunhouse.com.vn/dai-ly" title="Đại lý" target="_self" rel="nofollow">Đại lý</a> -->
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
                      <a href="https://sunhouse.com.vn/do-gia-dung" title="<?php echo $item['name'] ?>" rel="nofollow"><?php echo $item['name']?></a>
                    </li>
                  <?php endforeach ?>
                </ul>
                <ul>
                  <li>
                    <a href="https://sunhouse.com.vn/gioi-thieu" title="Câu chuyện SUNHOUSE" target="_blank" rel="nofollow">Câu chuyện SUNHOUSE</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/tin-tuc" title="Tin tức &amp; Sự kiện" target="_blank" rel="nofollow">Tin tức &amp; Sự kiện</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/dai-ly" title="Nhà phân phối, đại lý" target="_blank" rel="nofollow">Nhà phân phối, đại lý</a>
                  </li>
                  <li>
                    <a href="/tuyen-dung/xem-toan-bo-tin" title="Tuyển dụng" target="_blank" rel="nofollow">Tuyển dụng</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/thu-vien-anh" title="Thư viện ảnh sản phẩm" target="_blank" rel="nofollow">Thư viện ảnh sản phẩm</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/video" title="Thư viện video" target="_blank" rel="nofollow">Thư viện video</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/tai-lieu" title="Thư viện tài liệu" target="_blank" rel="nofollow">Thư viện tài liệu</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/cau-hoi-thuong-gap" title="Câu hỏi thường gặp" target="_blank" rel="nofollow">Câu hỏi thường gặp</a>
                  </li>
                  <li>
                    <a href="https://sunhouse.com.vn/lien-he" title="Liên hệ" target="_blank" rel="nofollow">Liên hệ</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="/thanh-vien">
                      <i class="fa fa-user" aria-hidden="true"></i>Tài khoản </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #endregion -->