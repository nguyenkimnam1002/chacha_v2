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
  if(isset($_GET['id']) && isset($_GET['category_id'])){
    $id=$_GET['id'];
    $category_id=$_GET['category_id'];
    
    // Chi tiết bản tin
    $sql = "SELECT * FROM posts WHERE id='$id'"; // Câu lệnh select
    $query = mysqli_query($conn, $sql); // thực hiện câu lệnh query - select. Kết quả trả về là 1 mảng collection (các row)
    $rn = $query->fetch_array(MYSQLI_ASSOC); // Lấy bản ghi đầu tiên của kết quả
    if(mysqli_num_rows($query)  == 0) {
      header('Location: index.php');
    }

    // Lấy tất cả nhóm tin tức 
    $sql = "SELECT * FROM categories ORDER BY ID";
    $nhomTin = $db->fetchsql($sql);

    // Tin liên quan 
    $sql = "SELECT * FROM posts WHERE category_id='$category_id' AND id <> '$id'  ORDER BY id DESC LIMIT 3";
    $query_post = $db->fetchsql($sql);

    // Tin mới nhất
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
    $query_post_new = $db->fetchsql($sql);

    // $sql_comments = "SELECT c.content, c.post_id, a.username FROM `comments` as C join `accounts` as A on c.account_id = a.id where c.post_id = '$id'";
    // $query_comments = mysqli_query($conn, $sql_comments);
  } else {
    header('Location: index.php');
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
          <?php
            // Lấy tên nhóm tin tức
            if (isset($_GET['category_id'])) {
              $id1 = $_GET['category_id'];
              $sql1 = "SELECT name FROM categories WHERE id ='$id1'";
              $result = mysqli_query($conn, $sql1);
              $row = mysqli_fetch_assoc($result);
              echo "<a href='".base_url()."section-topic-details-new.php?id=".$id1."' title='".$row['name']."'>".$row['name']."</a>";
            } else {
              echo "<a href='".base_url()."section-topic-details-new.php'>Tổng hợp  </a>";
            } ?>
          </li>
          <li>
            <a href="post-item-details-new.php?category_id=<?php echo  $rn['category_id']?>&id=<?php echo $rn['id']?>" title="<?php echo $rn['title']?>"><?php echo $rn['title']?></a>
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
  <div class="aboutAchieve masterPage">
    <div class="container">
      <div class="contentLeft">
        <div class="aboutIncorporation contentDetail">
          <div class="row">
            <h1 class="reset title">
              <span class="name"><?php echo $rn['title'] ?></span>
            </h1>
            <div class="commonHeadTool">
              <div class="date"><?php echo $rn['created_at'] ?></div>
            </div>
            <div class="noidung TextSize"> 
              <?php echo $rn['content'] ?>
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
                  <div class="fb-share-button fb_iframe_widget" data-href="post-item-details-new.php?category_id=<?php echo  $rn['category_id']?>&id=<?php echo $rn['id']?>" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=51&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Ftin-hoat-dong%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
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
            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="post-item-details-new.php?category_id=<?php echo  $rn['category_id']?>&id=<?php echo $rn['id']?>" data-width="100%" data-numposts="5" style="width: 100%;" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1158196177653765&amp;container_width=784&amp;height=100&amp;href=https%3A%2F%2Fsunhouse.com.vn%2Fdai-dien-cap-cao-tap-doan-amazon-global-selling-tham-va-lam-viec-tai-nha-may-sunhouse&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.11&amp;width=">
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
                  <?php foreach($query_post as $item) :?>
                    <div class="item">
                      <div class="itemBox">
                        <div class="khungAnh">
                          <a class="khungAnhCrop" href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" tabindex="-1">
                            <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['title'] ?>" class="lazyload tall">
                          </a>
                        </div>
                        <div class="itemTitle">
                          <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" tabindex="-1"><?php echo $item['title'] ?></a>
                        </div>
                        <div class="itemDescription"><?php echo $item['content'] ?></div>
                        <a class="itemMore" href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="Chi tiết" tabindex="-1">Chi tiết <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  <?php endforeach ?>
                    <!-- Tin mẫu  -->
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
                    <!-- end tin mẫu  -->
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
        <div class="otherAchieve fixedTop w300" id="fixedTop">
          <span class="title">Tin mới nhất</span>
          <div class="listItem">
            <!-- Tin mẫu  -->
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
            <!-- End tin mẫu  -->
          <?php foreach($query_post_new as $item) :?>
            <div class="item">
              <div class="khungAnh">
                <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" class="khungAnhCrop" rel="nofollow">
                  <img src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>public/uploads/product/<?php echo $item['image']?>" alt="<?php echo $item['title'] ?>" class="lazyloaded wide">
                </a>
              </div>
              <div class="outer">
                <div class="reset">
                  <a href="post-item-details-new.php?category_id=<?php echo  $item['category_id']?>&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" class="name" rel="nofollow"><?php echo $item['title'] ?></a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
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
