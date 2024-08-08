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
<style>
    .footer_box .top_footer {background-color: #f1f1f1;}
</style>
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
  <div class="aboutAchieve masterPage">
    <div class="container">
      <div class="contentLeft">
        <div class="aboutIncorporation contentDetail">
          <div class="row">
            <h1 class="reset title">
              <span class="name">ĐẠI DIỆN CẤP CAO TẬP ĐOÀN AMAZON GLOBAL SELLING THĂM VÀ LÀM VIỆC TẠI NHÀ MÁY SUNHOUSE</span>
            </h1>
            <div class="commonHeadTool">
              <div class="date">26/10/2023 - 04:45 PM</div>
              <div class="right">
                <div class="changeSize">
                  <a class="NormalSize" href="javascript:void(0)">Cỡ chữ</a>
                  <a class="LargeSize" href="javascript:void(0)">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </a>
                  <a class="SmallSize" href="javascript:void(0)">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </a>
                </div>
                <div class="social">
                  <div class="fb-share-button fb_iframe_widget" data-href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=41&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Ftin-hoat-dong%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                    <span style="vertical-align: bottom; width: 86px; height: 20px;">
                      <iframe name="f2483769e2e6c9d27" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/share_button.php?app_id=1158196177653765&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df146b076cf67d907f%26domain%3Dsunhouse.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsunhouse.com.vn%252Ff76b7911dc41b0dc4%26relation%3Dparent.parent&amp;container_width=41&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Ftin-hoat-dong%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 86px; height: 20px;" class=""></iframe>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="noidung TextSize"> Ngày 16/10 vừa qua, nhà máy SUNHOUSE vinh dự đón tiếp đoàn đại diện cấp cao của Tập đoàn Amazon Global Selling, với người dẫn đoàn là ông Eric Broussard, Phó Chủ Tịch Tập đoàn, phụ trách Khối Đối tác Bán hàng Quốc tế. Chuyến thăm vừa là dịp để Amazon “chứng thực” các dây chuyền sản xuất sản phẩm gia dụng “made in Vietnam” của SUNHOUSE, vừa là cơ hội để hai bên có thể trao đổi trực tiếp những định hướng, mục tiêu đồng hành. <br>
              <img alt="" src="/pic/general/images/Anh%201.JPG" style="height:527px; width:790px">
              <br> Đại diện cho Tập đoàn thương mại điện tử toàn cầu lớn nhất thế giới, ông Eric Broussard chia sẻ sự ngạc nhiên trước những phát triển vượt bậc của những doanh nghiệp sản xuất tại Việt Nam, mà SUNHOUSE là một trong những đại diện tiêu biểu nhất có sản phẩm đang kinh doanh trên sàn Amazon. Theo ông Eric, “ <em>Những doanh nghiệp như SUNHOUSE đang có cơ hội đa dạng hóa danh mục sản phẩm trên sàn rất lớn, nhờ hệ thống sản xuất bài bản và sự dịch chuyển chuỗi cung ứng từ các nước láng giềng</em>”. Ngoài ra, ông cũng cảm nhận được tinh thần khởi nghiệp rần mạnh mẽ khi trực tiếp thăm quan nhà máy SUNHOUSE với gần 2.000 nhân viên lao động. <br>
              <img alt="" src="/pic/general/images/Anh%202.JPG" style="height:527px; width:790px">
              <br>
              <img alt="" src="/pic/general/images/Anh%203.JPG" style="height:527px; width:790px">
              <div style="text-align:center">
                <em>Đại diện cấp cao của Amazon đi thăm quan nhà máy và các sản phẩm của SUNHOUSE</em>
              </div>
              <div>
                <br> Song song đó, buổi làm việc chính giữa hai bên với các lãnh đạo cấp cao nhất của SUNHOUSE và Amazon xoay quanh những vấn đề đang gặp phải của doanh nghiệp Việt khi kinh doanh trên Amazon, cũng như các hỗ trợ của Amazon để nâng cao năng lực, phát triển hoạt động kinh doanh và xây dựng thương hiệu trên quy mô toàn cầu, đặc biệt trong bối cảnh xuất khẩu sôi động.&nbsp;Các vấn đề được hai bên trực tiếp thảo luận như những hỗ trợ về mặt chi phí hoạt động trên sàn cho DN, các khóa đào tạo tìm hiểu thị trường của Amazon cho DN mới – đặc biệt là các DN nước ngoài như SUNHOUSE và những định hướng của Amazon để cạnh tranh với các sàn TMĐT Quốc tế khác cũng đang thâm nhập mạnh mẽ vào thị trường Mỹ. <br> Đại diện cho Tập đoàn SUNHOUSE, ông Vũ Thanh Hải – Phó TGĐ Tập đoàn chia sẻ: “ <em>Nhiều doanh nghiệp Việt e ngại việc bắt đầu và thử nghiệm với một sàn TMĐT quốc tế như Amazon vì nhiều nguy cơ tiềm ẩn. Tuy nhiên, nếu, SUNHOUSE, một thương hiệu hàng đầu tại Việt Nam có thể thành công trên Amazon thì sẽ là một niềm cảm hứng cũng như động lực để thúc đẩy cộng đồng tự tin giới thiệu sản phẩm của mình</em>”. Bởi vì thế, SUNHOUSE chấp nhận đi lên từ những con số 0 đầu tiên trên Amazon khi bản thân đã đứng ở vị thế hàng đầu tại “quê hương” Việt Nam. <br>
                <img alt="" src="/pic/general/images/Anh%204.png" style="height:1013px; width:790px">
                <br> SUNHOUSE chính thức kinh doanh trên Amazon từ năm 2021 với mục tiêu nghiên cứu người tiêu dùng Mỹ, thử nghiệm những sản phẩm tiềm năng. Cho đến nay, SUNHOUSE đã có những SKU (mã hàng hóa) nhận được phản hồi tích cực của khách hàng Mỹ như Bộ nồi chảo chống dính Ceramic, Bộ nồi hấp nấu đa năng... cho thấy khả năng “thâm nhập” thị trường bán lẻ quốc tế hoàn toàn rộng mở. Tuy nhiên, SUNHOUSE cũng đang nghiên cứu thêm về hành vi và nhu cầu của khách hàng bản địa để gia tăng thêm danh mục hàng hóa như đèn LED, máy nướng bánh mì, nồi chiên không dầu… <br> Việc bắt tay với Amazon có thể ví như nắm được chiếc “chìa khóa vàng” mở ra cánh cửa đưa thương hiệu Việt “go global”. SUNHOUSE tin rằng, chuyến thăm lần này sẽ đánh dấu một bước tiến quan trọng trong công cuộc “giương buồm” cho cuộc chơi xuyên biên giới, sánh vai với các thương hiệu lớn của các cường quốc.
              </div>
            </div>
          </div>
          <div id="CommonCuoiChiTietTin">
            <div class="fl apd dnmb left">
              <a class="prevDBT" href="javascript:history.go(-1)">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>Về trang trước </a>
              <div class="fr pl20 apd dnmb">
                <a href="javascript:void(0)" class="email addthis_button_email">
                  <i class="fa fa-envelope" aria-hidden="true"></i>Gửi email </a>
                <a href="javascript:window.print()" class="print">
                  <i class="fa fa-print" aria-hidden="true"></i>In trang </a>
              </div>
            </div>
            <div class="fr right">
              <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
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
                <div class="shareItem">
                  <div class="fb-share-button fb_iframe_widget" data-href="https://sunhouse.com.vn/tin-hoat-dong/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=51&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Ftin-hoat-dong%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                    <span style="vertical-align: bottom; width: 86px; height: 20px;">
                      <iframe name="f99cecd30b6f9a22f" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/share_button.php?app_id=1158196177653765&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df0e450db211189e1f%26domain%3Dsunhouse.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsunhouse.com.vn%252Ff76b7911dc41b0dc4%26relation%3Dparent.parent&amp;container_width=51&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Ftin-hoat-dong%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 86px; height: 20px;" class=""></iframe>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="cb"></div>
          </div>
        </div>
        <div class="fbComment">
          <div class="title">Bình luận Facebook</div>
          <div class="content">
            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://sunhouse.com.vn/dai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse" data-width="100%" data-numposts="5" style="width: 100%;" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=784&amp;height=100&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.11&amp;width=">
              <span style="vertical-align: bottom; width: 100%; height: 201px;">
                <iframe name="f2be8844357c98c8f" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/comments.php?app_id=1158196177653765&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df4958e9d03e5d2ddc%26domain%3Dsunhouse.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsunhouse.com.vn%252Ff76b7911dc41b0dc4%26relation%3Dparent.parent&amp;container_width=784&amp;height=100&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.11&amp;width=" style="border: none; visibility: visible; width: 100%; height: 201px;" class=""></iframe>
              </span>
            </div>
          </div>
        </div>
        
        <script>
          function CommentNews() {
            var obError = undefined;
            $("#commentForm .required").each(function() {
              if (obError == undefined && $(this).val() == '') {
                alert("Bạn phải nhập những thông tin bắt buộc trước khi gửi!");
                obError = $(this);
                return;
              }
            });
            if (obError != undefined) {
              obError.focus();
              return;
            }
            var id = "13749";
            var name = $("#tbName").val();
            var phone = $("#tbPhone").val();
            var comment = $("#tbContent").val();
            var dataForm = new FormData();
            dataForm.append("action", "Comment");
            dataForm.append("name", name);
            dataForm.append("phone", phone);
            dataForm.append("comment", comment);
            dataForm.append("id", id);
            jQuery.ajax({
              url: "/themes/1000000/ajax/news.aspx",
              type: "POST",
              dataType: "json",
              data: dataForm,
              contentType: false,
              processData: false,
              success: function(res) {
                if (res[0].toString() == "Success") {
                  $("#tbName").val("");
                  $("#tbPhone").val("");
                  $("#tbContent").val("");
                  alert("Cảm ơn bạn đã gửi ý kiến cho chúng tôi! Bình luận của bạn sẽ được xét duyệt trước khi được hiển thị!");
                }
              },
              error: function(error) { //Lỗi xảy ra
                alert('Hệ thống đang bận, bạn vui lòng thử lại sau!');
              }
            });
          };
        </script>
        <div class="baiVietOther thuVienOther">
          <div class="title"> Bài viết liên quan </div>
          <div class="boxDanhMuc1">
            <div class="thuVienTinDS">
              <div class="groupItem slick_3" role="toolbar">
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" tabindex="-1">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/Untitled(2).png" alt="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" class="lazyload tall">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" tabindex="-1">CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/Keyvisual.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/Keyvisual.jpg" alt="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" tabindex="-1">Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" alt="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" tabindex="-1">Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?</a>
                        </div>
                        <div class="itemDescription">“Cơ hội cho Sunhouse nếu chỉ bám trụ trong nước rất nhỏ… 2021 là năm đầu tiên chúng tôi bước chân sang Mỹ, và với Đông Nam Á chúng tôi chọn Indonesia”, ông Vũ Thanh Hải – Phó Tổng Giám đốc Tập đoàn Sunhouse – chia sẻ.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" tabindex="-1">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
                        </div>
                        <div class="itemDescription">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/2(6).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/2(6).jpg" alt="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" tabindex="-1">Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam</a>
                        </div>
                        <div class="itemDescription">Tại nhà máy Sunhouse Việt Nam, từ những hạt nhựa, tấm kim loại thô, bằng bàn tay, khối óc của người Việt, sản phẩm nồi chiên không dầu Made in Việt Nam nhận được niềm tin của người tiêu dùng Mỹ. Có gì bên trong “đại bản doanh” sản xuất nồi chiên không dầu Made in Việt Nam đầu tiên và duy nhất tại Việt Nam đủ tiêu chuẩn xuất sang Mỹ.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.jpeg" alt="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" tabindex="-1">SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG</a>
                        </div>
                        <div class="itemDescription">Hà Nội, ngày 11 tháng 7 năm 2023 - Tập đoàn SUNHOUSE vừa chính thức cho ra mắt dòng sản phẩm Tủ nhựa dành cho gia đình, dự kiến sản lượng 12.000 chiếc mỗi tháng cung cấp cho thị trường.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.jpeg" alt="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E" tabindex="-1">TẬP ĐOÀN SUNHOUSE BẮT TAY CÙNG TẬP ĐOÀN SOHACO PHÂN PHỐI CÁC SẢN PHẨM M&amp;E</a>
                        </div>
                        <div class="itemDescription">Ngày 21/06 vừa qua, Sunhouse Group và Sohaco Group đã cùng ký kết hợp tác chiến lược nhằm cung cấp và phân phối các sản phẩm M&amp;E (cơ điện) của Sunhouse vào các dự án xây dựng và công trình liên quan.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/tap-doan-sunhouse-bat-tay-cung-tap-doan-sohaco-phan-phoi-cac-san-pham-m-e.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/web.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/web.jpg" alt="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY" tabindex="-1">SUNHOUSE KÝ KẾT HỢP TÁC CÙNG STARTUP LIQUIDBOX – TRIỂN KHAI GIẢI PHÁP NÂNG CAO HIỆU SUẤT NHÀ MÁY</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ky-ket-hop-tac-cung-startup-liquidbox-trien-khai-giai-phap-nang-cao-hieu-suat-nha-may.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4&quot;" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/KV_NGANG.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/KV_NGANG.jpg" alt="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: &quot;ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4&quot;" tabindex="0">THỂ LỆ CHƯƠNG TRÌNH KHUYẾN MẠI: "ÉP MỌNG NƯỚC – TƯƠI BẤT TẬN – ZẬT NGAY ZFLIP4"</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-khuyen-mai-ep-mong-nuoc-tuoi-bat-tan-zat-ngay-zflip4.html" title="Chi tiết" tabindex="0">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.jpeg" alt="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI" tabindex="0">SUNHOUSE ĐÓN TIẾP ĐỐI TÁC SAIGON CO.OP VÀ CHIA SẺ NHIỀU CƠ HỘI HỢP TÁC MỚI</a>
                        </div>
                        <div class="itemDescription">Trong tháng 4/2023 vừa qua, SUNHOUSE vinh hạnh đón tiếp đoàn đại biểu của SAIGON CO.OP - đơn vị quản lý hệ thống siêu thị Co.opmart đến tham quan và làm việc. Nhiều cơ hội hợp tác đã được mở ra sau chuyến thăm này.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-don-tiep-doi-tac-saigon-co-op-va-chia-se-nhieu-co-hoi-hop-tac-moi.html" title="Chi tiết" tabindex="0">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/Untitled(2).png" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/Untitled(2).png" alt="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG" tabindex="0">CẢNH BÁO MẠO DANH, LỪA ĐẢO THAY LÕI LỌC NƯỚC KHÔNG CHÍNH HÃNG</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/canh-bao-mao-danh-lua-dao-thay-loi-loc-nuoc-khong-chinh-hang.html" title="Chi tiết" tabindex="0">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/Keyvisual.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/Keyvisual.jpg" alt="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN" tabindex="-1">Thể lệ chương trình MUA SUNHOUSE - TRÚNG TOUR MỖI TUẦN</a>
                        </div>
                        <div class="itemDescription"></div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/the-le-chuong-trinh-mua-sunhouse-trung-tour-moi-tuan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.jpg" alt="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?" tabindex="-1">Sunhouse của Shark Phú lên Amazon: Bước ra ngoài mới biết Sunhouse trong nước là Vua Chảo, bên ngoài được xếp là ‘lính’ hay là ‘quan’?</a>
                        </div>
                        <div class="itemDescription">“Cơ hội cho Sunhouse nếu chỉ bám trụ trong nước rất nhỏ… 2021 là năm đầu tiên chúng tôi bước chân sang Mỹ, và với Đông Nam Á chúng tôi chọn Indonesia”, ông Vũ Thanh Hải – Phó Tổng Giám đốc Tập đoàn Sunhouse – chia sẻ.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-cua-shark-phu-len-amazon-buoc-ra-ngoai-moi-biet-sunhouse-trong-nuoc-la-vua-chao-ben-ngoai-duoc-xep-la-linh-hay-la-quan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/01(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/01(1).jpg" alt="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân" tabindex="-1">Sunhouse – Thương hiệu quốc gia, sản phẩm quốc dân</a>
                        </div>
                        <div class="itemDescription">Với những nỗ lực bền bỉ trong hơn 20 năm qua, Sunhouse giữ vững vị thế trong Top 500 doanh nghiệp lớn nhất Việt Nam. Doanh nghiệp cũng khẳng định vị trí hàng đầu ngành hàng gia dùng, được người tiêu dùng Việt ưa chuộng.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-thuong-hieu-quoc-gia-san-pham-quoc-dan.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/compact/news/2(6).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/2(6).jpg" alt="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" class="tall lazyloaded">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam" tabindex="-1">Khám phá nơi sản xuất nồi chiên không dầu Made in Việt Nam</a>
                        </div>
                        <div class="itemDescription">Tại nhà máy Sunhouse Việt Nam, từ những hạt nhựa, tấm kim loại thô, bằng bàn tay, khối óc của người Việt, sản phẩm nồi chiên không dầu Made in Việt Nam nhận được niềm tin của người tiêu dùng Mỹ. Có gì bên trong “đại bản doanh” sản xuất nồi chiên không dầu Made in Việt Nam đầu tiên và duy nhất tại Việt Nam đủ tiêu chuẩn xuất sang Mỹ.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/kham-pha-noi-san-xuat-noi-chien-khong-dau-made-in-viet-nam.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" tabindex="-1">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.jpeg" alt="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" class="lazyload tall">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG" tabindex="-1">SUNHOUSE RA MẮT DÒNG SẢN PHẨM TỦ NHỰA TIÊN PHONG TỦ THÁO LẮP – AN TOÀN TIỆN DỤNG</a>
                        </div>
                        <div class="itemDescription">Hà Nội, ngày 11 tháng 7 năm 2023 - Tập đoàn SUNHOUSE vừa chính thức cho ra mắt dòng sản phẩm Tủ nhựa dành cho gia đình, dự kiến sản lượng 12.000 chiếc mỗi tháng cung cấp cho thị trường.</div>
                        <a class="itemMore" href="https://sunhouse.com.vn/tin-hoat-dong/sunhouse-ra-mat-dong-san-pham-tu-nhua-tien-phong-tu-thao-lap-an-toan-tien-dung.html" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  <ul class="slick-dots" style="display: block;" role="tablist">
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
                  <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation15" id="slick-slide15" class="slick-active">
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
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contentRight">
        <div class="otherAchieve">
          <span class="title">Tin mới nhất</span>
          <div class="listItem">
            <div class="item">
              <div class="khungAnh">
                <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/uu-diem-may-ep-cham.html" title="Khám phá 8 ưu điểm máy ép chậm: Có nên mua hay không?" class="khungAnhCrop" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/uu-diem-may-ep-cham.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/small/news/uu-diem-may-ep-cham.jpeg" alt="Khám phá 8 ưu điểm máy ép chậm: Có nên mua hay không?" class="lazyloaded wide">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/uu-diem-may-ep-cham.html" title="Khám phá 8 ưu điểm máy ép chậm: Có nên mua hay không?" class="name" rel="nofollow">Khám phá 8 ưu điểm máy ép chậm: Có nên mua hay không?</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="khungAnh">
                <a href="https://sunhouse.com.vn/khuyen-mai-hot/danh-sach-khach-hang-trung-iphone-ctkm-vui-ep-me-say-rinh-ngay-tao-chat.html" title="DANH SÁCH KHÁCH HÀNG TRÚNG IPHONE CTKM &quot;VUI ÉP MÊ SAY - RINH NGAY TÁO CHẤT”" class="khungAnhCrop" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/danh-sach-khach-hang-trung-iphone-ctkm-vui-ep-me-say-rinh-ngay-tao-chat.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/small/news/danh-sach-khach-hang-trung-iphone-ctkm-vui-ep-me-say-rinh-ngay-tao-chat.jpeg" alt="DANH SÁCH KHÁCH HÀNG TRÚNG IPHONE CTKM VUI ÉP MÊ SAY - RINH NGAY TÁO CHẤT”" class="lazyloaded wide">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="https://sunhouse.com.vn/khuyen-mai-hot/danh-sach-khach-hang-trung-iphone-ctkm-vui-ep-me-say-rinh-ngay-tao-chat.html" title="DANH SÁCH KHÁCH HÀNG TRÚNG IPHONE CTKM &quot;VUI ÉP MÊ SAY - RINH NGAY TÁO CHẤT”" class="name" rel="nofollow">DANH SÁCH KHÁCH HÀNG TRÚNG IPHONE CTKM "VUI ÉP MÊ SAY - RINH NGAY TÁO CHẤT”</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="khungAnh">
                <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/may-ep-cham-nao-co-the-lam-kem.html" title="3 mẫu máy ép chậm có thể làm kem: Giải pháp tuyệt vời cho mùa hè" class="khungAnhCrop" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/may-ep-cham-sunhouse-shd5518.png" data-src="https://sunhouse.com.vn/pic/thumb/small/news/may-ep-cham-sunhouse-shd5518.png" alt="máy ép chậm nào có thể làm kem" class="lazyloaded tall">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/may-ep-cham-nao-co-the-lam-kem.html" title="3 mẫu máy ép chậm có thể làm kem: Giải pháp tuyệt vời cho mùa hè" class="name" rel="nofollow">3 mẫu máy ép chậm có thể làm kem: Giải pháp tuyệt vời cho mùa hè</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="khungAnh">
                <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/ep-tao-bang-may-ep-cham.html" title="Cách làm nước ép táo bằng máy ép chậm thanh mát ngay tại nhà" class="khungAnhCrop" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/ep-tao-bang-may-ep-cham.jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/news/ep-tao-bang-may-ep-cham.jpg" alt="ép táo bằng máy ép chậm" class="lazyloaded wide">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="https://sunhouse.com.vn/tu-van-mua-may-ep-cham/ep-tao-bang-may-ep-cham.html" title="Cách làm nước ép táo bằng máy ép chậm thanh mát ngay tại nhà" class="name" rel="nofollow">Cách làm nước ép táo bằng máy ép chậm thanh mát ngay tại nhà</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="khungAnh">
                <a href="https://sunhouse.com.vn/tu-van-mua-noi-chien-khong-dau/so-sanh-cac-loai-noi-chien-khong-dau.html" title="So sánh các loại nồi chiên không dầu: Theo 3 cách phân loại" class="khungAnhCrop" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/so-sanh-cac-loai-noi-chien-khong-dau.jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/news/so-sanh-cac-loai-noi-chien-khong-dau.jpg" alt="so sánh các loại nồi chiên không dầu" class="lazyloaded wide">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="https://sunhouse.com.vn/tu-van-mua-noi-chien-khong-dau/so-sanh-cac-loai-noi-chien-khong-dau.html" title="So sánh các loại nồi chiên không dầu: Theo 3 cách phân loại" class="name" rel="nofollow">So sánh các loại nồi chiên không dầu: Theo 3 cách phân loại</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="newsHot fixedTop w300" id="fixedTop">
          <div class="header">
            <div class="title">
              <span>Tin nhiều người đọc</span>
            </div>
          </div>
          <div class="groupItem">
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/bi-quyet-meo-vat/hoc-cach-lam-nuoc-gao-rang-han-quoc-voi-3-buoc-don-gian.html" title="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản" rel="nofollow">
                  <img src="https://sunhouse.com.vn/pic/thumb/small/news/1471_cach_lam_nuoc_gao_rang_han_quoc_1.jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/news/1471_cach_lam_nuoc_gao_rang_han_quoc_1.jpg" alt="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản" class="lazyloaded wide">
                </a>
              </div>
              <div class="itemDetail">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/hoc-cach-lam-nuoc-gao-rang-han-quoc-voi-3-buoc-don-gian.html" title="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản" rel="nofollow">Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản</a>
                </div>
                <span class="itemView">
                  <i class="fa fa-eye" aria-hidden="true"></i> 91,597 lượt xem </span>
              </div>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/bi-quyet-meo-vat/phai-lam-gi-voi-chao-chong-dinh-moi-mua-ve.html" title="Cách xử lý chảo chống dính mới mua về nên làm gì?" rel="nofollow">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/news/phai-lam-gi-voi-chao-chong-dinh-moi-mua-ve.jpeg" alt="PHẢI LÀM GÌ VỚI CHẢO CHỐNG DÍNH MỚI MUA VỀ?" class="lazyload tall">
                </a>
              </div>
              <div class="itemDetail">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/phai-lam-gi-voi-chao-chong-dinh-moi-mua-ve.html" title="Cách xử lý chảo chống dính mới mua về nên làm gì?" rel="nofollow">Cách xử lý chảo chống dính mới mua về nên làm gì?</a>
                </div>
                <span class="itemView">
                  <i class="fa fa-eye" aria-hidden="true"></i> 85,704 lượt xem </span>
              </div>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/bi-quyet-meo-vat/nghi-thuc-cung-co-hon-dung-cach-de-tranh-ruoc-vong-vao-nha.html" title="Nghi thức cúng cô hồn đúng cách để tránh “rước vong” vào nhà" rel="nofollow">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/news/1513_cung_co_hon.jpg" alt="Nghi thức cúng cô hồn đúng cách để tránh “rước vong” vào nhà" class="lazyload tall">
                </a>
              </div>
              <div class="itemDetail">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/nghi-thuc-cung-co-hon-dung-cach-de-tranh-ruoc-vong-vao-nha.html" title="Nghi thức cúng cô hồn đúng cách để tránh “rước vong” vào nhà" rel="nofollow">Nghi thức cúng cô hồn đúng cách để tránh “rước vong” vào nhà</a>
                </div>
                <span class="itemView">
                  <i class="fa fa-eye" aria-hidden="true"></i> 72,725 lượt xem </span>
              </div>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/bi-quyet-meo-vat/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham.html" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm" rel="nofollow">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/news/1870_cach_chinh_nhiet_do_lo_nuong_phu_hop_voi_tung_loai_thuc_pham__4_.jpg" alt="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm" class="lazyload tall">
                </a>
              </div>
              <div class="itemDetail">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham.html" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm" rel="nofollow">Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm</a>
                </div>
                <span class="itemView">
                  <i class="fa fa-eye" aria-hidden="true"></i> 69,472 lượt xem </span>
              </div>
            </div>
            <div class="itemBox">
              <div class="khungAnh">
                <a class="khungAnhCrop" href="https://sunhouse.com.vn/bi-quyet-meo-vat/top-5-nguyen-nhan-khien-dieu-hoa-bat-khong-len.html" title="Điều hòa bật không lên: 5 Nguyên nhân và cách xử lý  tại nhà" rel="nofollow">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/news/top-5-nguyen-nhan-khien-dieu-hoa-bat-khong-len.png" alt="Top 5 nguyên nhân khiến điều hòa bật không lên và cách xử lý tại nhà" class="lazyload tall">
                </a>
              </div>
              <div class="itemDetail">
                <div class="itemTitle">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/top-5-nguyen-nhan-khien-dieu-hoa-bat-khong-len.html" title="Điều hòa bật không lên: 5 Nguyên nhân và cách xử lý  tại nhà" rel="nofollow">Điều hòa bật không lên: 5 Nguyên nhân và cách xử lý tại nhà</a>
                </div>
                <span class="itemView">
                  <i class="fa fa-eye" aria-hidden="true"></i> 66,891 lượt xem </span>
              </div>
            </div>
          </div>
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
  
  
  
</main>
<!-- <script src="./Theme/1000000/Assets/js/News.min.js" defer=""></script> -->
<?php  
include_once('./master_layout/chacha/footer.php') 
?>
