<?php 
    
    require_once __DIR__ ."/master_layout/chacha/header.php";
    
    $id = intval(getInput('id'));
   
    //chi tiet san pham
    $product = $db->fetchID("product", $id);
   
     //Lay danh muc san pham lien quan
    $cateid = intval($product['category_id']);
    
    $sql = "SELECT * FROM product WHERE category_id = $cateid ORDER BY ID DESC LIMIT 4";
    $spkemtheo = $db->fetchsql($sql);

    $sql2 = "SELECT * FROM image_file WHERE product_id = $id ORDER BY ID DESC LIMIT 4";
    $image = $db->fetchsql($sql2);
   
   
?>
    
<style>
    .header_box.stick {
        position: unset;
    }
    .header_box.stick {position: static;}
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
              
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/0(53).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/0(53).jpg" alt="0(53).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="0">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/1(86).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/1(86).jpg" alt="1(86).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/2(89).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/2(89).jpg" alt="2(89).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/3(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/3(90).jpg" alt="3(90).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/4(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/4(90).jpg" alt="4(90).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/5(85).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/5(85).jpg" alt="5(85).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/6(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/6(90).jpg" alt="6(90).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/7(68).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/7(68).jpg" alt="7(68).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_box">
                      <div class="khungAnh">
                        <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                          <img src="https://sunhouse.com.vn/pic/thumb/large/product/8(45).jpg" data-src="https://sunhouse.com.vn/pic/thumb/large/product/8(45).jpg" alt="8(45).jpg" class=" lazyloaded">
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="slide_thumb thumbImagesWrap" data-number="9">
              <div class="slide_nav thumbImages">
                
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/6(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/6(90).jpg" alt="6(90).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/7(68).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/7(68).jpg" alt="7(68).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" alt="8(45).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/0(53).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/0(53).jpg" alt="0(53).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/1(86).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/1(86).jpg" alt="1(86).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/2(89).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/2(89).jpg" alt="2(89).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="0">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/3(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/3(90).jpg" alt="3(90).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/4(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/4(90).jpg" alt="4(90).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/5(85).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/5(85).jpg" alt="5(85).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/6(90).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/6(90).jpg" alt="6(90).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/7(68).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/7(68).jpg" alt="7(68).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" alt="8(45).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/0(53).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/0(53).jpg" alt="0(53).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/1(86).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/1(86).jpg" alt="1(86).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item_box">
                        <div class="khungAnh">
                          <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                            <img src="https://sunhouse.com.vn/pic/thumb/small/product/2(89).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/2(89).jpg" alt="2(89).jpg" class=" lazyloaded">
                          </a>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="watchMore">
                <div class="item_box">
                  <div class="khungAnh">
                    <a href="javascript:void(0);" class="khungAnhCrop lastThumbImage" onclick="showImage();">
                      <img src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" data-src="https://sunhouse.com.vn/pic/thumb/small/product/8(45).jpg" alt="8(45).jpg" class="lazyloaded wide">
                    </a>
                    <span>Xem tất cả <br>
                      <b class="demSoAnh">9</b> ảnh </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <h1 class="title">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727</h1>
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
          <div class="code"> Mã: <span>SHD7727</span>
          </div>
          <div class="dacDiemNoiBat">
            <div class="name"> Đặc điểm nổi bật </div>
            <ul class="reset">
              <li> Giải pháp làm mát tối ưu cho không gian mở (lên đến 30m2)</li>
              <li> Gió mát tự nhiên, thân thiện với sức khỏe</li>
              <li> Động cơ bằng đồng nguyên chất siêu bền, tuổi thọ cao</li>
              <li> Tích hợp nhiều tính năng an toàn (tạo ion âm, hẹn giờ, tự động ngắt…)</li>
              <li> Tiết kiệm điện gấp 10 lần so với điều hòa không khí</li>
            </ul>
          </div>
          <div class="btnClick">
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
          </div>
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
                    <p><?php echo $product['content'] ?></p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3> Thông tin khác </h3>
                    <p><?php echo $product['content'] ?></p>
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
              <div class="itemBox">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/nen-mua-may-ep-hoa-qua-hay-may-xay-sinh-to-loai-nao-tot-va-phu-hop-hon.html" title="Nên mua máy ép trái cây hay máy xay sinh tố?" rel="nofollow" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/news/nen-mua-may-ep-hoa-qua-hay-may-xay-sinh-to-loai-nao-tot-va-phu-hop-hon.jpeg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/nen-mua-may-ep-hoa-qua-hay-may-xay-sinh-to-loai-nao-tot-va-phu-hop-hon.jpeg" alt="Nên mua máy ép hoa quả hay máy xay sinh tố? Loại nào tốt và phù hợp hơn?" class="tall lazyloaded">
                  </a>
                </div>
                <div class="itemDetail">
                  <div class="itemTitle">
                    <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/nen-mua-may-ep-hoa-qua-hay-may-xay-sinh-to-loai-nao-tot-va-phu-hop-hon.html" title="Nên mua máy ép trái cây hay máy xay sinh tố?" rel="nofollow">Nên mua máy ép trái cây hay máy xay sinh tố?</a>
                  </div>
                  <div class="itemDescription" style="max-height:40px;overflow:hidden">Nên mua máy ép trái cây khi bạn có nhu cầu sử dụng nước ép trong, dễ tiêu hóa, nên mua máy xay sinh tố khi bạn có nhu cầu xay nhiều loại thực phẩm, trộn trái cây, rau củ với các thành phần (đá, sữa...)&nbsp;khác để chế biến ra thức uống bổ dưỡng. Đồng thời máy ép trái cây thường không có chức năng xay sinh tố, do đó bạn cũng nên cân nhắc yếu tố&nbsp;Trong bài viết dưới đây hãy cùng SUNHOUSE so sánh máy xay sinh tố và máy ép trái cây chi tiết trên từng khía cạnh ảnh hưởng đến trải nghiệm sự dụng của bạn để đưa ra quyết định đúng đắn khi mua hàng nhé!</div>
                </div>
              </div>
              <div class="itemBox">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/xu-ly-noi-chien-khong-dau-moi.html" title="Cách vệ sinh nồi chiên không dầu mới mua về và sau khi sử dụng" rel="nofollow" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/news/bat-mi-4-buoc-xu-ly-noi-chien-khong-dau-moi-sach-het-mui-nhanh.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/bat-mi-4-buoc-xu-ly-noi-chien-khong-dau-moi-sach-het-mui-nhanh.jpg" alt="Bật mí 4 bước xử lý nồi chiên không dầu mới: Sạch - hết mùi nhanh" class="tall lazyloaded">
                  </a>
                </div>
                <div class="itemDetail">
                  <div class="itemTitle">
                    <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/xu-ly-noi-chien-khong-dau-moi.html" title="Cách vệ sinh nồi chiên không dầu mới mua về và sau khi sử dụng" rel="nofollow">Cách vệ sinh nồi chiên không dầu mới mua về và sau khi sử dụng</a>
                  </div>
                  <div class="itemDescription" style="max-height:40px;overflow:hidden">Xử lý nồi chiên không dầu mới mua về như thế nào để hết mùi nhựa? Xem ngay cách vệ sinh nồi chiên không dầu mới mua về và sau khi sử dụng một cách an toàn và hiệu quả ngay trong bài viết dưới đây!</div>
                </div>
              </div>
              <div class="itemBox">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/nguyen-ly-may-loc-nuoc-ro-nhu-the-nao.html" title="Nguyên lý và cấu tạo máy lọc nước RO SUNHOUSE mới nhất" rel="nofollow" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/news/nguyen-ly-may-loc-nuoc-ro-nhu-the-nao.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/nguyen-ly-may-loc-nuoc-ro-nhu-the-nao.png" alt="Nguyên lý và cấu tạo máy lọc nước RO mẫu mới hiện nay" class="tall lazyloaded">
                  </a>
                </div>
                <div class="itemDetail">
                  <div class="itemTitle">
                    <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/nguyen-ly-may-loc-nuoc-ro-nhu-the-nao.html" title="Nguyên lý và cấu tạo máy lọc nước RO SUNHOUSE mới nhất" rel="nofollow">Nguyên lý và cấu tạo máy lọc nước RO SUNHOUSE mới nhất</a>
                  </div>
                  <div class="itemDescription" style="max-height:40px;overflow:hidden">Nắm vững&nbsp;được nguyên lý hoạt động và&nbsp;cấu tạo máy lọc nước sẽ giúp bạn lựa chọn được&nbsp;sản phẩm phù hợp và thuận tiện cho việc xây dựng cấu trúc, quy trình lắp đặt máy lọc nước tại nhà, từ đó có thể đảm bảo an toàn sức khỏe khi sử dụng máy lọc nước.</div>
                </div>
              </div>
              <div class="itemBox">
                <div class="khungAnh">
                  <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/may-loc-nuoc-van-chay-nhung-khong-co-nuoc.html" title="10 nguyên nhân máy lọc nước vẫn chạy mà không ra nước và cách xử lý " rel="nofollow" class="khungAnhCrop">
                    <img src="https://sunhouse.com.vn/pic/thumb/compact/news/may-loc-nuoc-van-chay-nhung-khong-co-nuoc.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/news/may-loc-nuoc-van-chay-nhung-khong-co-nuoc.png" alt="máy lọc nước vẫn chạy nhưng không có nước" class="tall lazyloaded">
                  </a>
                </div>
                <div class="itemDetail">
                  <div class="itemTitle">
                    <a href="https://sunhouse.com.vn/bi-quyet-meo-vat/may-loc-nuoc-van-chay-nhung-khong-co-nuoc.html" title="10 nguyên nhân máy lọc nước vẫn chạy mà không ra nước và cách xử lý " rel="nofollow">10 nguyên nhân máy lọc nước vẫn chạy mà không ra nước và cách xử lý </a>
                  </div>
                  <div class="itemDescription" style="max-height:40px;overflow:hidden">Bạn đang sử dụng máy lọc nước vẫn rất bình thường, bỗng dưng một ngày đẹp trời "máy lọc nước vẫn chạy nhưng không có nước". Đừng lo lắng, việc&nbsp;xử lý máy lọc nước không ra nước khá đơn giản và thường xuyên gặp ở một số máy lọc nước đã sử dụng lâu ngày.&nbsp; Tại sao máy lọc nước không ra nước đến từ rất nhiều nguyên nhân từ màng lọc bị tắt, van áp bị hỏng đến bình áp hết khí nén, SUNHOUSE sẽ giúp bạn xử lý máy lọc nước không ra nước chi tiết và triệt để cho từng trường hợp cụ thể dưới đây.&nbsp;</div>
                </div>
              </div>
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
              <span>(26 sản phẩm)</span>
            </div>
          </div>
          <div class="itemProductCT" role="toolbar">
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7721.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1021_may_lam_mat_khong_khi_sunhouse_shd7721_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7721" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7721.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721</a>
                      </h3>
                      <div class="model">Mã: SHD7721</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7713.html" title="Máy làm mát không khí SUNHOUSE SHD7713" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1073_may_lam_mat_khong_khi_sunhouse_shd7713_001(1).jpg" alt="Máy làm mát không khí SUNHOUSE SHD7713" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7713.html" title="Máy làm mát không khí SUNHOUSE SHD7713" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7713</a>
                      </h3>
                      <div class="model">Mã: SHD7713</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7717.html" title="Máy làm mát không khí SUNHOUSE SHD7717" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/1077_may_lam_mat_khong_khi_sunhouse_shd7717_001.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1077_may_lam_mat_khong_khi_sunhouse_shd7717_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7717" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7717.html" title="Máy làm mát không khí SUNHOUSE SHD7717" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7717</a>
                      </h3>
                      <div class="model">Mã: SHD7717</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7718-key.html" title="Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/1078_may_lam_mat_khong_khi_sunhouse_shd7718_001(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1078_may_lam_mat_khong_khi_sunhouse_shd7718_001(1).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ VÀ BẮT MUỖI SUNHOUSE SHD7718" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7718-key.html" title="Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718" class="name" tabindex="-1">Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718</a>
                      </h3>
                      <div class="model">Mã: SHD7718</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7723.html" title="Máy làm mát không khí SUNHOUSE SHD7723" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/1023_may_lam_mat_khong_khi_sunhouse_shd7723_001.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1023_may_lam_mat_khong_khi_sunhouse_shd7723_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7723" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7723.html" title="Máy làm mát không khí SUNHOUSE SHD7723" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7723</a>
                      </h3>
                      <div class="model">Mã: SHD7723</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7789.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/Avatar(82).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/Avatar(82).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7789.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789</a>
                      </h3>
                      <div class="model">Mã: SHD7789</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7777.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02(3).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02(3).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7777.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777</a>
                      </h3>
                      <div class="model">Mã: SHD7777</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7776.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500.600-100.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500.600-100.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7776.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776</a>
                      </h3>
                      <div class="model">Mã: SHD7776</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7775.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7775.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775</a>
                      </h3>
                      <div class="model">Mã: SHD7775</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7745.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/Thumb 2(15).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/Thumb 2(15).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7745.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745</a>
                      </h3>
                      <div class="model">Mã: SHD7745</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7744.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7744" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/QĐH-09(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/QĐH-09(1).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7744" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7744.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7744" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7744</a>
                      </h3>
                      <div class="model">Mã: SHD7744</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7726.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7726" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7726.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7726.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7726" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7726.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7726" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7726</a>
                      </h3>
                      <div class="model">Mã: SHD7726</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7733.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7733" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(20).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(20).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7733" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7733.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7733" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7733</a>
                      </h3>
                      <div class="model">Mã: SHD7733</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7727.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7727_002.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7727_002.png" alt="Máy làm mát không khí SUNHOUSE SHD7727" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7727.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7727</a>
                      </h3>
                      <div class="model">Mã: SHD7727</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7734.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7734" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7734.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7734.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7734" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7734.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7734" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7734</a>
                      </h3>
                      <div class="model">Mã: SHD7734</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7738-key.html" title="Máy làm mát không khí SUNHOUSE SHD7738" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7738_002.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/quat-dieu-hoa-sunhouse-shd7738_002.png" alt="Máy làm mát không khí SUNHOUSE SHD7738" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7738-key.html" title="Máy làm mát không khí SUNHOUSE SHD7738" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7738</a>
                      </h3>
                      <div class="model">Mã: SHD7738</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7739.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7739" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7739.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7739.png" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7739" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7739.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7739" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7739</a>
                      </h3>
                      <div class="model">Mã: SHD7739</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7750.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7750" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7750.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7750.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7750" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7750.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7750" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7750</a>
                      </h3>
                      <div class="model">Mã: SHD7750</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7756.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7756" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7756.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7756.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7756" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7756.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7756" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7756</a>
                      </h3>
                      <div class="model">Mã: SHD7756</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7757.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7757" class="khungAnhCrop0" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7757.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7757.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7757" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7757.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7757" class="name" tabindex="0">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7757</a>
                      </h3>
                      <div class="model">Mã: SHD7757</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7758.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7758" class="khungAnhCrop0" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(21).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(21).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7758" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7758.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7758" class="name" tabindex="0">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7758</a>
                      </h3>
                      <div class="model">Mã: SHD7758</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7759.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7759" class="khungAnhCrop0" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(22).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500x600(22).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7759" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7759.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7759" class="name" tabindex="0">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7759</a>
                      </h3>
                      <div class="model">Mã: SHD7759</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7772.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7772" class="khungAnhCrop0" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/7772.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7772.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7772" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7772.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7772" class="name" tabindex="0">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7772</a>
                      </h3>
                      <div class="model">Mã: SHD7772</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7746.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7746" class="khungAnhCrop0" tabindex="0">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/may-lam-mat-khong-khi-sunhouse-SHD7746_001.png" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/may-lam-mat-khong-khi-sunhouse-SHD7746_001.png" alt="Máy làm mát không khí SUNHOUSE SHD7746" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7746.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7746" class="name" tabindex="0">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7746</a>
                      </h3>
                      <div class="model">Mã: SHD7746</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7747.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7747" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7747_500x600.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7747_500x600.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7747" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7747.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7747" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7747</a>
                      </h3>
                      <div class="model">Mã: SHD7747</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7732.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7732" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7732_500x600.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/SHD7732_500x600.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7732" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7732.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7732" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7732</a>
                      </h3>
                      <div class="model">Mã: SHD7732</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7721.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/1021_may_lam_mat_khong_khi_sunhouse_shd7721_001.jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1021_may_lam_mat_khong_khi_sunhouse_shd7721_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7721" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7721.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7721</a>
                      </h3>
                      <div class="model">Mã: SHD7721</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7713.html" title="Máy làm mát không khí SUNHOUSE SHD7713" class="khungAnhCrop0" tabindex="-1">
                        <img src="https://sunhouse.com.vn/pic/thumb/compact/product/1073_may_lam_mat_khong_khi_sunhouse_shd7713_001(1).jpg" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1073_may_lam_mat_khong_khi_sunhouse_shd7713_001(1).jpg" alt="Máy làm mát không khí SUNHOUSE SHD7713" class=" lazyloaded">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7713.html" title="Máy làm mát không khí SUNHOUSE SHD7713" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7713</a>
                      </h3>
                      <div class="model">Mã: SHD7713</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7717.html" title="Máy làm mát không khí SUNHOUSE SHD7717" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1077_may_lam_mat_khong_khi_sunhouse_shd7717_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7717" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7717.html" title="Máy làm mát không khí SUNHOUSE SHD7717" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7717</a>
                      </h3>
                      <div class="model">Mã: SHD7717</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7718-key.html" title="Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1078_may_lam_mat_khong_khi_sunhouse_shd7718_001(1).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ VÀ BẮT MUỖI SUNHOUSE SHD7718" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7718-key.html" title="Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718" class="name" tabindex="-1">Máy làm mát không khí và bắt muỗi SUNHOUSE SHD7718</a>
                      </h3>
                      <div class="model">Mã: SHD7718</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7723.html" title="Máy làm mát không khí SUNHOUSE SHD7723" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/1023_may_lam_mat_khong_khi_sunhouse_shd7723_001.jpg" alt="Máy làm mát không khí SUNHOUSE SHD7723" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/sunhouse-shd7723.html" title="Máy làm mát không khí SUNHOUSE SHD7723" class="name" tabindex="-1">Máy làm mát không khí SUNHOUSE SHD7723</a>
                      </h3>
                      <div class="model">Mã: SHD7723</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7789.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/Avatar(82).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7789.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7789</a>
                      </h3>
                      <div class="model">Mã: SHD7789</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7777.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02(3).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7777.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7777</a>
                      </h3>
                      <div class="model">Mã: SHD7777</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7776.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/500.600-100.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7776.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7776</a>
                      </h3>
                      <div class="model">Mã: SHD7776</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7775.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/7775-02.jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7775.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7775</a>
                      </h3>
                      <div class="model">Mã: SHD7775</div>
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
                <div class="item">
                  <div class="wrapper">
                    <div class="khungAnh">
                      <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7745.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class="khungAnhCrop0" tabindex="-1">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/compact/product/Thumb 2(15).jpg" alt="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class="lazyload">
                      </a>
                    </div>
                    <div class="outer">
                      <h3 class="reset">
                        <a href="https://sunhouse.com.vn/dien-tu-dien-lanh/may-lam-mat-khong-khi/may-lam-mat-khong-khi-sunhouse-shd7745.html" title="MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745" class="name" tabindex="-1">MÁY LÀM MÁT KHÔNG KHÍ SUNHOUSE SHD7745</a>
                      </h3>
                      <div class="model">Mã: SHD7745</div>
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
          
          
          <div class="slide_for_2 largeImagesPopup">
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-01.jpg" alt="SHA76623-01.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="0">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-02.jpg" alt="SHA76623-02.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-03.jpg" alt="SHA76623-03.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-04.jpg" alt="SHA76623-04.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-05.jpg" alt="SHA76623-05.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item_box">
                <div class="khungAnh">
                  <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/product/SHA76623-06.jpg" alt="SHA76623-06.jpg" class="lazyload" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide_nav_2 thumbImagesPopup">
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-01.jpg" alt="SHA76623-01.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-02.jpg" alt="SHA76623-02.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-03.jpg" alt="SHA76623-03.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-04.jpg" alt="SHA76623-04.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-05.jpg" alt="SHA76623-05.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_box">
              <div class="khungAnh">
                <a href="javascript:void(0);" class="khungAnhCrop0" tabindex="-1">
                  <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://sunhouse.com.vn/pic/thumb/small/product/SHA76623-06.jpg" alt="SHA76623-06.jpg" class="lazyload" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function DestroySlickImagesPopup() {
      $('.slide_for_2').slick('unslick');
      $('.slide_nav_2').slick('unslick');
    }

    function InitSlickImagesPopup() {
      // $('.slide_for_2').slick({
      //   rows: 1,
      //   slidesPerRow: 1,
      //   slidesToShow: 1,
      //   slidesToScroll: 1,
      //   centerPadding: '0px',
      //   dots: false,
      //   arrows: true,
      //   infinite: true,
      //   autoplay: false,
      //   fade: true,
      //   prevArrow: '<div class="arrow prev"><a href="javascript:void(0);"><span class="button"><i class="fa fa-chevron-left" aria-hidden="true"></i></span><span class="text">Xem hình sau</span></a></div>',
      //   nextArrow: '<div class="arrow next"><a href="javascript:void(0);"><span class="button"><i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="text">Xem hình trước</span></a></div>',
      //   asNavFor: '.slide_nav_2',
      //   responsive: [{
      //     breakpoint: 1200,
      //     settings: {
      //       draggable: false
      //     }
      //   }]
      // });
      $(".slide_for_2").slick({
        rows: 1,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: "0px",
        dots: !1,
        arrows: !0,
        infinite: !0,
        autoplay: !1,
        fade: !0,
        asNavFor: ".slide_nav_2",
        responsive: [{
          breakpoint: 1200,
          settings: {
            draggable: !1
          }
        }]
      });
      $('.slide_nav_2').slick({
      rows: 1,
		slidesPerRow: 1,
		slidesToShow: 3,
		slidesToScroll: 1,
		centerPadding: "0px",
		focusOnSelect: !0,
		dots: !1,
		arrows: !1,
		infinite: !0,
		autoplay: !1,
		centerMode: !1,
		asNavFor: ".slide_for_2",
		responsive: [{
			breakpoint: 1200,
			settings: {
				rows: 1,
				slidesPerRow: 1,
				slidesToShow: 3,
				slidesToScroll: 1,
				draggable: !1
			}
		}, {
			breakpoint: 768,
			settings: {
				rows: 1,
				slidesPerRow: 1,
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}]
  });
  }
    //   $('.slide_nav_2').slick({
    //     rows: 1,
    //     slidesPerRow: 1,
    //     slidesToShow: 11,
    //     slidesToScroll: 1,
    //     centerPadding: '0px',
    //     focusOnSelect: true,
    //     dots: false,
    //     arrows: false,
    //     infinite: true,
    //     autoplay: false,
    //     centerMode: false,
    //     asNavFor: '.slide_for_2',
    //     responsive: [{
    //       breakpoint: 1200,
    //       settings: {
    //         rows: 1,
    //         slidesPerRow: 1,
    //         slidesToShow: 6,
    //         slidesToScroll: 1,
    //         draggable: false
    //       }
    //     }, {
    //       breakpoint: 768,
    //       settings: {
    //         rows: 1,
    //         slidesPerRow: 1,
    //         slidesToShow: 4,
    //         slidesToScroll: 1
    //       }
    //     }]
    //   });
    // }
    //InitSlickImagesPopup();
    //Gọi ở js cuối module
  </script>
</div>
<script>
  //Các biến khởi tạo cho các hàm load ảnh 360
  var ready = false,
    dragging = false,
    pointerStartPosX = 0,
    pointerEndPosX = 0,
    pointerDistance = 0,
    monitorStartTime = 0,
    monitorInt = 10,
    ticker = 0,
    speedMultiplier = 10,
    spinner,
    totalFrames = 0,
    currentFrame = 0,
    frames = [],
    endFrame = 0,
    loadedImages = 0,
    $document = $(document),
    $container = $('#threesixty'),
    $images = $('#threesixty_images'),
    demoMode = true,
    fakePointer = {
      x: 0,
      speed: 4
    },
    fakePointerTimer = 0;
  //End
  if ($(window).innerWidth() <= 1600) {
    fakePointer = {
      x: 0,
      speed: 3
    }
  }
  if ($(window).innerWidth() <= 1366) {
    fakePointer = {
      x: 0,
      speed: 2
    }
  }
  if ($(window).innerWidth() <= 1199) {
    fakePointer = {
      x: 0,
      speed: 1.5
    }
  }
  if ($(window).innerWidth() <= 767) {
    fakePointer = {
      x: 0,
      speed: 1
    }
  }
  $(window).resize(function() {
    if ($(window).innerWidth() <= 1600) {
      fakePointer = {
        x: 0,
        speed: 3
      }
    }
    if ($(window).innerWidth() <= 1366) {
      fakePointer = {
        x: 0,
        speed: 2
      }
    }
    if ($(window).innerWidth() <= 1199) {
      fakePointer = {
        x: 0,
        speed: 1.5
      }
    }
    if ($(window).innerWidth() <= 767) {
      fakePointer = {
        x: 0,
        speed: 1
      }
    }
  });
  //Các hàm load ảnh 360
  function addSpinner() {
    if ($("#threesixty").length > 0) {
      spinner = new CanvasLoader("spinner");
      spinner.setShape("spiral");
      spinner.setDiameter(90);
      spinner.setDensity(90);
      spinner.setRange(1);
      spinner.setSpeed(4);
      spinner.setColor("#333333");
      spinner.show();
      $("#spinner").fadeIn("slow");
    }
  };

  function loadImage360(imageName) {
        var li = document.createElement("li");
        var image = $('<img>').attr('src', imageName).addClass("previous-image").appendTo(li);
        frames.push(image);
        $images.append(li);
        $(image).load(function () {
            imageLoaded();
        });
    };

    function imageLoaded() {
      loadedImages++;
      $("#spinner span").text(Math.floor(loadedImages / totalFrames * 100) + "%");
      if (loadedImages == totalFrames) {
        frames[0].removeClass("previous-image").addClass("current-image");
        $("#spinner").fadeOut("slow", function() {
          spinner.hide();
          showThreesixty();
        });
      }
    };

    function showThreesixty() {
      $images.fadeIn("slow");
      ready = true;
      endFrame = -720;
      if (!demoMode) {
        refresh();
      } else {
        fakePointerTimer = window.setInterval(moveFakePointer, 100);
      }
    };

    function moveFakePointer() {
      fakePointer.x += fakePointer.speed;
      trackPointer();
    };

    function quitDemoMode() {
      window.clearInterval(fakePointerTimer);
      demoMode = false;
    };
    // addSpinner();

    function render() {
      if (currentFrame !== endFrame) {
        var frameEasing = endFrame < currentFrame ? Math.floor((endFrame - currentFrame) * 0.1) : Math.ceil((endFrame - currentFrame) * 0.1);
        hidePreviousFrame();
        currentFrame += frameEasing;
        showCurrentFrame();
      } else {
        window.clearInterval(ticker);
        ticker = 0;
      }
    };

    function refresh() {
      if (ticker === 0) {
        ticker = self.setInterval(render, Math.round(1000 / 60));
      }
    };

    function hidePreviousFrame() {
      frames[getNormalizedCurrentFrame()].removeClass("current-image").addClass("previous-image");
    };

    function showCurrentFrame() {
      frames[getNormalizedCurrentFrame()].removeClass("previous-image").addClass("current-image");
    };

    function getNormalizedCurrentFrame() {
      var c = -Math.ceil(currentFrame % totalFrames);
      if (c < 0) c += (totalFrames - 1);
      return c;
    };

    function getPointerEvent(event) {
      return event.originalEvent.targetTouches ? event.originalEvent.targetTouches[0] : event;
    };
    $container.on("mousedown", function(event) {
      quitDemoMode();
      event.preventDefault();
      pointerStartPosX = getPointerEvent(event).pageX;
      dragging = true;
    });
    $document.on("mouseup", function(event) {
      event.preventDefault();
      dragging = false;
    });
    $document.on("mousemove", function(event) {
      if (demoMode) {
        return;
      }
      event.preventDefault();
      trackPointer(event);
    });
    $container.on("touchstart", function(event) {
      quitDemoMode();
      event.preventDefault();
      pointerStartPosX = getPointerEvent(event).pageX;
      dragging = true;
    });
    $container.on("touchmove", function(event) {
      event.preventDefault();
      trackPointer(event);
    });
    $container.on("touchend", function(event) {
      event.preventDefault();
      dragging = false;
    });

    function trackPointer(event) {
      var userDragging = ready && dragging ? true : false;
      var demoDragging = demoMode;
      if (userDragging || demoDragging) {
        pointerEndPosX = userDragging ? getPointerEvent(event).pageX : fakePointer.x;
        if (monitorStartTime < new Date().getTime() - monitorInt) {
          pointerDistance = pointerEndPosX - pointerStartPosX;
          endFrame = currentFrame + Math.ceil((totalFrames - 1) * speedMultiplier * (pointerDistance / $container.width()));
          refresh();
          monitorStartTime = new Date().getTime();
          pointerStartPosX = userDragging ? getPointerEvent(event).pageX : fakePointer.x;
        }
      } else {
        return;
      }
    };
    //End
    // Sự kiện bật popup zoom ảnh
    function showImage() {
      $('.popUpSanPham').addClass('active');
      //Khởi tạo lại slick slider
      InitSlickImages();
        InitSlickImagesPopup();
    }
    var images360Array = [];
    // Sự kiện load ảnh 360 khi click
    function showImage360() {
      $('.popUpSanPham').addClass('active');
      $('#threesixty').addClass('active');
      if ($("#threesixty_images").html() === "") {
        //totalFrames = 180; //Gán giá trị kết thúc (Tổng số lượng ảnh)
        ////Chạy vòng lặp for, mỗi lần truyền vào 1 đường dẫn của ảnh
        //for (i = 0; i < totalFrames; i++) {
        //    loadImage360("/img/threesixty_" + (i + 1) + ".jpg");
        //}
        totalFrames = images360Array.length;
        images360Array.forEach(function(image360) {
          loadImage360("https://sunhouse.com.vn/pic/product_360/" + image360);
        });
      }
    }
    // Sự kiện close popup zoom ảnh
    function hideImage() {
      $('.popUpSanPham').removeClass('active');
      $('#threesixty').removeClass('active');
    }
    // Sự kiện chuyển ảnh
    $('.popUpSanPham .slide_zoom .arrow').click(function() {
      $('#threesixty').removeClass('active');
    })
    $('.popUpSanPham .slide_nav_2 .khungAnh img').click(function() {
      $('#threesixty').removeClass('active');
    })
    // Sự kiện nhấn ESC
    $(document).keydown(function(e) {
      if (e.keyCode == 27) {
        $('.popUpSanPham').removeClass('active');
        $('#threesixty').removeClass('active');
      }
      if (e.keyCode == 39 || e.keyCode == 38) {
        if ($('.popUpSanPham').hasClass('active')) {
          $('.popUpSanPham .slide_zoom .next').trigger('click');
        }
      }
      if (e.keyCode == 37 || e.keyCode == 40) {
        if ($('.popUpSanPham').hasClass('active')) {
          $('.popUpSanPham .slide_zoom .prev').trigger('click');
        }
      }
    });
</script>
<!-- #region Ajax thay ảnh khi chọn màu -->
<script>
  function GetImagesByColor(variationId, productId, productApp, colorName) {
    $(".selectedColorName").text(colorName);
    $(".ulSelectColor li").removeClass("active");
    $(".ulSelectColor li[data-color-id='" + variationId + "']").addClass("active");
    AjaxLoading(true);
    //Gửi dữ liệu lên server
    $.ajax({
      url: "/themes/1000000/ajax/product.aspx",
      type: "POST",
      dataType: "json",
      data: {
        "action": "GetImagesByColor",
        "variationId": variationId,
        "productId": productId,
        "productApp": productApp
      },
      success: function(res) {
        AjaxLoading(false);
        //Hủy các slick slider cũ
        DestroySlickImages();
        DestroySlickImagesPopup();
        //Gán khối ảnh
        $(".largeImages").html(res[0]);
        $(".thumbImages").html(res[1]);
        $(".largeImagesPopup").html(res[2]);
        $(".thumbImagesPopup").html(res[3]);
        //Gán ảnh cuối:
        $(".lastThumbImage").html(res[4]);
        //Gán data đếm số ảnh ở khối thumb:
        $(".thumbImagesWrap").attr("data-number", res[5]);
        $(".demSoAnh").html(res[5]);
        //Khởi tạo lại slick slider
        InitSlickImages();
        InitSlickImagesPopup();
        // Sự kiện chuyển ảnh ở popup
        $('.popUpSanPham .slide_zoom .arrow').click(function() {
          $('#threesixty').removeClass('active');
        });
        $('.popUpSanPham .slide_nav_2 .khungAnh img').click(function() {
          $('#threesixty').removeClass('active');
        });
      },
      error: function(error) {
        AjaxLoading(false);
        console.log("Có lỗi xảy ra. GetImagesByColor");
      }
    });
  }
</script>
<!-- #endregion -->      

<script src="./Theme/1000000/Assets/js/ProductDetail.min.js" defer=""></script>
<?php include_once('./master_layout/chacha/footer.php'); ?>