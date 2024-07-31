<!-- footer start  -->
<div class="footer_box stopfixedTop">
    <!--Phần đầu footer-->
    <div class="top_footer">
      <div class="container">
        <div class="fbPage">
          <div class="text">Like và truy cập SUNHOUSE để cập nhật chương trình khuyến mại và tin tức sớm nhất</div>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunhouse.com.vn%2F&amp;tabs&amp;width=350&amp;height=140&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1158196177653765" width="350" height="140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="ytChannel">
          <div class="text">Cùng SUNHOUSE xem các chương trình phát sóng về giới thiệu về sản phẩm</div>
          <div class="val">
            <a href="https://www.youtube.com/channel/UCuUMw6wl9XYfRpaq_D1vGng?sub_confirmation=1" target="_blank" rel="nofollow" title="SUNHOUSE TV: 186k subscribe">
              <span>SUNHOUSE TV: 186k subscribe</span>
            </a>
          </div>
        </div>
        <div class="newsLetter ValidateForm" id="NewsLetterSignUp">
          <div class="text">Đăng ký để cập nhật những thông tin về dịch vụ mới, sự kiện và khuyến mãi</div>
          <div class="box">
            <input type="text" value="" placeholder="Nhập email của bạn" id="tbEmail_nlsu" onkeyup="CheckNewsLetterSignUp(event)" data-validate="true" data-vld-email="true">
            <a class="submit" href="#" data-function="PostNewsLetterSignUp" onclick="PostNewsLetterSignUp(event)"></a>
          </div>
        </div>
        <script>
          function CheckNewsLetterSignUp(event) {
            if (event.keyCode === 13) PostNewsLetterSignUp();
          }

          function PostNewsLetterSignUp(event) {
            if (event) event.preventDefault();
            //Khối chứa form
            var $container = $("#NewsLetterSignUp");
            //Validate dữ liệu
            if ($container.validate('check')) {
              AjaxLoading(true);
              //Khóa nút gửi để không bị gửi nhiều lần
              $("a[data-function='PostNewsLetterSignUp']").css({
                "pointer-events": "none"
              });
              //Gửi dữ liệu lên server
              $.ajax({
                url: "./themes/1000000/ajax/newsletter.aspx",
                type: "POST",
                dataType: "json",
                data: {
                  "action": "PostNewsLetterSignUp",
                  "email": $("#tbEmail_nlsu").val()
                },
                success: function(res) {
                  AjaxLoading(false);
                  alert(res[0]);
                },
                error: function(error) {
                  AjaxLoading(false);
                  console.log("Có lỗi xảy ra. NewsLetterSignUp");
                }
              });
            }
          }
        </script>
      </div>
    </div>
    <!--Phần giữa footer-->
    <div class="middle_footer">
      <div class="container">
        <div class="footerMenuBox">
          <div class="footerMenu">
            <div class="title"> Sản phẩm </div>
            <ul>
              <li>
                <a href="/may-loc-nuoc" title="Máy lọc nước">
                  <span>Máy lọc nước</span>
                </a>
              </li>
              <li>
                <a href="/do-gia-dung" title="Đồ gia dụng">
                  <span>Đồ gia dụng</span>
                </a>
              </li>
              <li>
                <a href="/dien-gia-dung" title="Điện gia dụng">
                  <span>Điện gia dụng</span>
                </a>
              </li>
              <li>
                <a href="/thiet-bi-nha-bep" title="Thiết bị nhà bếp">
                  <span>Thiết bị nhà bếp</span>
                </a>
              </li>
              <li>
                <a href="/dien-tu-dien-lanh" title="Điện tử Điện lạnh">
                  <span>Điện tử Điện lạnh</span>
                </a>
              </li>
              <li>
                <a href="/dien-dan-dung" title="Điện dân dụng" rel="nofollow">
                  <span>Điện dân dụng</span>
                </a>
              </li>
              <li>
                <a href="/thiet-bi-dien-cong-nghiep" title="Thiết bị điện công nghiệp" rel="nofollow">
                  <span>Thiết bị điện công nghiệp</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="footerMenu">
            <div class="title"> Về SUNHOUSE </div>
            <ul>
              <li>
                <a href="/thong-diep-cua-chu-tich-hoi-dong-quan-tri-tap-doan-sunhouse" title="Thông điệp của Chủ tịch HĐQT" rel="nofollow">
                  <span>Thông điệp của Chủ tịch HĐQT</span>
                </a>
              </li>
              <li>
                <a href="/co-cau-to-chuc" title="Cơ cấu tổ chức" rel="nofollow">
                  <span>Cơ cấu tổ chức</span>
                </a>
              </li>
              <li>
                <a href="/thanh-tich-giai-thuong" title="Thành tích giải thưởng" rel="nofollow">
                  <span>Thành tích giải thưởng</span>
                </a>
              </li>
              <li>
                <a href="https://sunhouse.com.vn/video" title="SUNHOUSE TV" rel="nofollow">
                  <span>SUNHOUSE TV</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="footerMenu">
            <div class="title"> Tin tức &amp; Sự kiện </div>
            <ul>
              <li>
                <a href="/tin-hoat-dong" title="Tin hoạt động" rel="nofollow">
                  <span>Tin hoạt động</span>
                </a>
              </li>
              <li>
                <a href="/bi-quyet-meo-vat" title="Bí quyết -  Mẹo vặt " rel="nofollow">
                  <span>Bí quyết - Mẹo vặt </span>
                </a>
              </li>
              <li>
                <a href="/tin-thuong-thuc" title="Tin thưởng thức" rel="nofollow">
                  <span>Tin thưởng thức</span>
                </a>
              </li>
              <li>
                <a href="/khuyen-mai-hot" title="Khuyến mại HOT" rel="nofollow">
                  <span>Khuyến mại HOT</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="footerMenu">
            <div class="title"> Hỗ trợ khách hàng </div>
            <ul>
              <li>
                <a href="/bao-hanh/chinh-sach-bao-hanh-cua-sunhouse" title="Chính sách bảo hành" target="_blank" rel="nofollow">
                  <span>Chính sách bảo hành</span>
                </a>
              </li>
              <li>
                <a href="/bao-hanh" title="Xác thực sản phẩm chính hãng" rel="nofollow">
                  <span>Xác thực sản phẩm chính hãng</span>
                </a>
              </li>
              <li>
                <a href="https://sunhouse.com.vn/dai-ly" title="Địa điểm bán hàng" rel="nofollow">
                  <span>Địa điểm bán hàng</span>
                </a>
              </li>
              <li>
                <a href="https://sunhouse.com.vn/lien-he" title="Liên hệ" rel="nofollow">
                  <span>Liên hệ</span>
                </a>
              </li>
            </ul>
            <p>
              <a class="icon-dtbbct" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=36901" target="_blank" rel="nofollow">
                <img data-src="./Theme/1000000/Assets/css/images/dathongbao.png" src="./Theme/1000000/Assets/css/images/dathongbao.png" class=" lazyloaded" style="max-height:68px">
              </a>
            </p>
            <a target="_blank" href="https://www.dmca.com/Protection/Status.aspx?ID=226b5450-b69e-4ae9-8470-36001650112d&amp;refurl=https://sunhouse.com.vn/" title="DMCA.com Protection Status" class="dmca-badge">
              <img src="https://images.dmca.com/Badges/_dmca_premi_badge_1.png?ID=226b5450-b69e-4ae9-8470-36001650112d" alt="DMCA.com Protection Status">
            </a>
            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
          </div>
        </div>
        <div class="contactInfo">
          <div class="info add">
            <div class="name">
              <span>Địa chỉ</span>
            </div>
            <div class="text">
              <div>Tầng 12, tòa nhà Richy Tower, Số 35 Mạc Thái Tổ, Yên Hòa, Cầu Giấy, Hà Nội</div>
            </div>
          </div>
          <div class="info phone">
            <div class="name">
              <span>Điện thoại</span>
            </div>
            <div class="text"> Văn phòng tập đoàn: <a href="tel:02437366676">024.37366676</a>
              <span>/</span>
              <a href="tel:02437366686">024.37366686</a>
              <br>Tổng đài CSKH: <a href="tel:18006680">1800 6680</a>
            </div>
          </div>
          <div class="info mail">
            <div class="name add">
              <span>Email</span>
            </div>
            <div class="text">
              <a href="mailto:info@sunhouse.com.vn">info@sunhouse.com.vn</a>
            </div>
          </div>
          <div class="info web">
            <div class="name">
              <span>Website</span>
            </div>
            <div class="text">
              <a href="http://sunhouse.com.vn">www.sunhouse.com.vn</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Phần cuối footer-->
    <div class="bottom_footer">
      <div class="container">
        <div class="text">Copyright © 2017 SUNHOUSE.com.vn</div>
        <div class="link" style="opacity:0.28">
          <a target="_blank" rel="nofollow" href="http://tatthanh.com.vn/" title="Click để có 1 website chuyên nghiệp, hiệu quả!">Thiết kế website</a> bởi <a target="_blank" rel="nofollow" href="http://tatthanh.com.vn/" title="Click để xây dựng website - SEO chuyên nghiệp!">Tất Thành</a>
        </div>
        <div class="social">
          <div class="text">Theo dõi SUNHOUSE trên</div>
          <ul>
            <li>
              <a href="https://www.facebook.com/sunhouse.com.vn" target="_blank" rel="nofollow" title="Facebook SUNHOUSE GROUP">
                <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/fbImg.png" src="./themes/1000000/assets/css/images/fbImg.png" alt="Facebook SUNHOUSE GROUP">
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/user/sunhousechanel" target="_blank" rel="nofollow" title="Youtube SUNHOUSE GROUP">
                <img class=" lazyloaded" data-src="./themes/1000000/assets/css/images/ytImg.png" src="./themes/1000000/assets/css/images/ytImg.png" alt="Youtube SUNHOUSE GROUP">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
      background: url('https://sunhouse.com.vn/themes/1000000/assets/css/pic_css/baohanh3.png') no-repeat right 80px;
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