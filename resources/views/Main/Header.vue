<template>
<header id="header">
        <nav id="navDesktop" class="navbar navbar-light header-wrap">
            <div class="container">
                <div class="navbar-wrap">
                    <div class="navbar-top">
                        <div class="navbar-top-left">
                            <div class="navbar-brand logo">
                                        <a href="https://kyna.vn/"><img width="148" height="auto" src="https://media-kyna.cdn.vccloud.vn/img/logo/Kynavnraftlogo.svg"
                                alt="Khóa học online nâng cao kỹ năng cùng các chuyên gia đầu ngành"
                                class="img-fluid"/>
                                        </a>
                                
                            </div>
                            <div class="form-inline header-search">
                                <div class="row-menu-bar-mobile hidden-sm-up">
                                    <div class="k-menu-list-course col-xs-8">
                                        <a class="nav-link" href="#" data-offpage="#nav-mobile">
                                            <i class="icon icon-bars"></i>
                                            <span>Danh mục khóa học</span>
                                        </a>
                                    </div>
                                    <div class="k-button-search-course col-xs-4">
                                        <a id="k-button-search-course-mb" class="nav-link" href="#"
                                        data-offpage="#nav-mobile-search">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/icon/search-icon.svg" width="15" height="auto"
                                                alt="Khóa học trực tuyến">
                                        </a>
                                    </div>
                                </div>

                                <form id="search-form" action="https://kyna.vn/danh-sach-khoa-hoc" method="get">
                                <div class="input-group">
                                    <label hidden for="live-search-bar">Tìm kiếm</label>
                                    <input id="live-search-bar" name="q" type="text"
                                        class="form-control live-search-bar"
                                        autocomplete="off">
                                    <button class="search-button" type="submit" aria-label="search">
                                        <img src="https://media-kyna.cdn.vccloud.vn/img/icon/search-icon.svg" width="20" height="20"
                                            alt="Khóa học trực tuyến">
                                    </button>
                                </div>
                                </form> 
                                <div id="live-search-result" class="live-search-result"></div>
                                    
                            </div>
                        </div>

                        <div class="nav head-direction">

                            <div class="nav-item nav-item-cart">
                                <div class="k-header-info header-cart">
                                    <div class="cart dropdown">
                                        <a href="https://kyna.vn/gio-hang"
                                        class="dropdown-toggle cart_anchor" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/cart/cart.svg" width="24" height="24"
                                                alt="Khóa học trực tuyến">
                                            <span
                                                    class="count-number none-item">0</span>
                                        </a>
                                        
                                    <ul class="dropdown-menu wrap clearfix">
                                        <div class="hidden" id="items-id-in-current-cart" style="display: none" data-all-cart-items=""></div>
                                        <li class="clearfix wrap-form-cart k-add-to-cart-register" id="k-header-form-cart">
                                                        <p class="empty-cart">Giỏ hàng trống!</p>
                                                </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item right-line">
                                <a class="nav-link cod-btn" href="https://kyna.vn/kich-hoat"
                                data-toggle="popup"
                                data-target="#activeCOD" data-ajax="" data-push-state="false">Kích hoạt COD</a>
                            </div>

                            <div class="nav-item">
                                    <a href="https://kyna.vn/dang-ky" class="register-btn" data-toggle="modal"
                                    data-target="#k-popup-account-register"
                                    data-ajax="" data-push-state="false">Đăng ký</a>
                                    <a href="https://kyna.vn/dang-nhap" class="login-btn" data-toggle="modal"
                                    data-target="#k-popup-account-login"
                                    data-ajax="" data-push-state="false">Đăng nhập</a>                       
                            </div>
                        </div>
                    </div>

                    <div class="navbar-bottom">
                        <div
                                class="nav-item nav-item-category nav-item-active-js ">
                            <div class="nav-link">
                                <i class="far fa-bars"></i>DANH MỤC KHÓA HỌC
                            </div>
                            
                                <div class="header-banner-category">
                                    <div class="header-banner-left">
                                        <i class="icon fas fa-sort-up"></i>
                                        <div class="inner">
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category=''>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/65/img/menu_icon-1594881835.png"
                                                                alt="Tất cả khóa học">
                                                        </div>
                                                        <div class="title">Tất cả khóa học</div>
                                                                                                        </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/khuyen-mai/nhom-khoa-hoc/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category=''>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/66/img/menu_icon-1594881630.png"
                                                                alt="Khóa học combo">
                                                        </div>
                                                        <div class="title">Khóa học combo</div>
                                                                                                        </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/sales-cskh/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":170,"name":"B\u00e1n h\u00e0ng","slug":"sales-cskh\/ban-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/ban-hang"},{"id":171,"name":"Ch\u0103m s\u00f3c kh\u00e1ch h\u00e0ng","slug":"sales-cskh\/cham-soc-khach-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/cham-soc-khach-hang"},{"id":172,"name":"Telesales","slug":"sales-cskh\/telesales\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/telesales"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/162/img/menu_icon-1597659288.png"
                                                                alt="Sales - CSKH">
                                                        </div>
                                                        <div class="title">Sales - CSKH</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-cong-viec/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":203,"name":"Thuy\u1ebft tr\u00ecnh","slug":"ky-nang-cong-viec\/thuyet-trinh\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/thuyet-trinh"},{"id":204,"name":"N\u00e2ng cao hi\u1ec7u su\u1ea5t","slug":"ky-nang-cong-viec\/nang-cao-hieu-suat\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/nang-cao-hieu-suat"},{"id":205,"name":"Gi\u1ea3i quy\u1ebft v\u1ea5n \u0111\u1ec1","slug":"ky-nang-cong-viec\/giai-quyet-van-de\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/giai-quyet-van-de"},{"id":206,"name":" T\u01b0 duy c\u00f4ng vi\u1ec7c","slug":"ky-nang-cong-viec\/tu-duy-cong-viec\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/tu-duy-cong-viec"},{"id":207,"name":"Tin h\u1ecdc v\u0103n ph\u00f2ng","slug":"ky-nang-cong-viec\/tin-hoc-van-phong\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/tin-hoc-van-phong"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/218/img/menu_icon-1597659127.png"
                                                                alt="Kỹ năng công việc">
                                                        </div>
                                                        <div class="title">Kỹ năng công việc</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-con-nguoi/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":208,"name":"Giao ti\u1ebfp","slug":"ky-nang-con-nguoi\/giao-tiep\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/giao-tiep"},{"id":209,"name":"Th\u00f4ng minh c\u1ea3m x\u00fac","slug":"ky-nang-con-nguoi\/thong-minh-cam-xuc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/thong-minh-cam-xuc"},{"id":211,"name":"Ph\u00e1t tri\u1ec3n \u0110\u1ed9ng l\u1ef1c","slug":"ky-nang-con-nguoi\/phat-trien-dong-luc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/phat-trien-dong-luc"},{"id":212,"name":"\u0110\u00e0m ph\u00e1n th\u01b0\u01a1ng l\u01b0\u1ee3ng","slug":"ky-nang-con-nguoi\/dam-phan-thuong-luong\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/dam-phan-thuong-luong"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/219/img/menu_icon-1597659154.png"
                                                                alt="Kỹ năng con người">
                                                        </div>
                                                        <div class="title">Kỹ năng con người</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-quan-tri/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":213,"name":"Qu\u1ea3n tr\u1ecb Doanh nghi\u1ec7p","slug":"ky-nang-quan-tri\/quan-tri-doanh-nghiep\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-quan-tri\/quan-tri-doanh-nghiep"},{"id":214,"name":"Qu\u1ea3n tr\u1ecb R\u1ee7i ro","slug":"ky-nang-quan-tri\/quan-tri-rui-ro\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-quan-tri\/quan-tri-rui-ro"},{"id":215,"name":"Qu\u1ea3n tr\u1ecb Con ng\u01b0\u1eddi","slug":"ky-nang-quan-tri\/quan-tri-con-nguoi\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-quan-tri\/quan-tri-con-nguoi"},{"id":216,"name":"Qu\u1ea3n tr\u1ecb Thay \u0110\u1ed5i","slug":"ky-nang-quan-tri\/quan-tri-thay-doi\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-quan-tri\/quan-tri-thay-doi"},{"id":217,"name":"Qu\u1ea3n tr\u1ecb D\u1ef1 \u00c1n","slug":"ky-nang-quan-tri\/quan-tri-du-an\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-quan-tri\/quan-tri-du-an"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/220/img/menu_icon-1597659175.png"
                                                                alt="Kỹ năng quản trị">
                                                        </div>
                                                        <div class="title">Kỹ năng quản trị</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/ngoai-ngu/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":144,"name":"Ti\u1ebfng Ph\u00e1p","slug":"ngoai-ngu\/tieng-phap\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/tieng-phap"},{"id":145,"name":"Luy\u1ec7n thi","slug":"ngoai-ngu\/luyen-thi\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Luyen thi","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/luyen-thi"},{"id":146,"name":"IELTS","slug":"ngoai-ngu\/ielts\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/ielts"},{"id":57,"name":"Ti\u1ebfng Trung","slug":"ngoai-ngu\/tieng-trung\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Tham gia kh\u00f3a h\u1ecdc Ti\u1ebfng Trung Giao Ti\u1ebfp online gi\u00fap b\u1ea1n linh ho\u1ea1t th\u1eddi gian h\u1ecdc, chi ph\u00ed th\u1ea5p, ch\u1ea5t l\u01b0\u1ee3ng. Gi\u1ea3m t\u1edbi 30% h\u1ecdc ph\u00ed khi h\u1ecdc tr\u1ef1c tuy\u1ebfn. Xem Ngay!","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/tieng-trung"},{"id":59,"name":"Ti\u1ebfng Anh","slug":"ngoai-ngu\/tieng-anh\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc Ti\u1ebfng Anh Giao Ti\u1ebfp Online c\u01a1 b\u1ea3n, h\u1ecdc ti\u1ebfng anh nhanh nh\u1ea5t nh\u01b0ng v\u1eabn \u0111\u1ea3m b\u1ea3o ch\u1ea5t l\u01b0\u1ee3ng, linh ho\u1ea1t th\u1eddi gian h\u1ecdc. Gi\u1ea3m t\u1edbi 30% h\u1ecdc ph\u00ed. Xem Ngay !","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/tieng-anh"},{"id":58,"name":"Ti\u1ebfng Nh\u1eadt","slug":"ngoai-ngu\/tieng-nhat\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"H\u1ecdc ti\u1ebfng Nh\u1eadt Online T\u1eeb A-Z gi\u00fap b\u1ea1n ph\u00e1t tri\u1ec3n nghe \u2013 n\u00f3i \u2013 \u0111\u1ecdc \u2013 vi\u1ebft, n\u1eafm v\u1eefng c\u00e1c m\u1eabu ng\u1eef ph\u00e1p ti\u1ebfng Nh\u1eadt, luy\u1ec7n thi ch\u1ee9ng ch\u1ec9 JLPT theo 3 c\u1ea5p \u0111\u1ed9: N5 - N3. \u0110\u0103ng K\u00ed!","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/tieng-nhat"},{"id":84,"name":"Ti\u1ebfng H\u00e0n","slug":"ngoai-ngu\/tieng-han\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc Ti\u1ebfng H\u00e0n Online cho tr\u00ecnh \u0111\u1ed9 nh\u1eadp m\u00f4n l\u1eabn n\u00e2ng cao v\u1edbi c\u00e1c b\u00e0i gi\u1ea3ng d\u1ec5 nghe, d\u1ec5 hi\u1ec3u, d\u1ec5 h\u1ecdc v\u1edbi c\u00e1c gi\u1ea3ng vi\u00ean \u0111\u1ea7y kinh nghi\u1ec7m. Gi\u1ea3m 40% h\u1ecdc ph\u00ed. H\u1ecdc Ngay!","url":"\/danh-sach-khoa-hoc\/ngoai-ngu\/tieng-han"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/112/img/menu_icon-1595586642.png"
                                                                alt="Ngoại ngữ">
                                                        </div>
                                                        <div class="title">Ngoại ngữ</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/thiet-ke-do-hoa/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":190,"name":"Thi\u1ebft k\u1ebf","slug":"thiet-ke-do-hoa\/thiet-ke\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/thiet-ke-do-hoa\/thiet-ke"},{"id":191,"name":"K\u1ef9 x\u1ea3o","slug":"thiet-ke-do-hoa\/ky-xao\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/thiet-ke-do-hoa\/ky-xao"},{"id":192,"name":"D\u1ef1ng phim","slug":"thiet-ke-do-hoa\/dung-phim\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/thiet-ke-do-hoa\/dung-phim"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/152/img/menu_icon-1595822848.png"
                                                                alt="Thiết kế đồ hoạ">
                                                        </div>
                                                        <div class="title">Thiết kế đồ hoạ</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/ung-dung-phan-mem/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":141,"name":"Excel","slug":"ung-dung-phan-mem\/excel\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/excel"},{"id":142,"name":"Word","slug":"ung-dung-phan-mem\/word\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/word"},{"id":143,"name":"Python","slug":"ung-dung-phan-mem\/python\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/python"},{"id":184,"name":"Premiere","slug":"ung-dung-phan-mem\/premiere\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/premiere"},{"id":185,"name":"Photoshop","slug":"ung-dung-phan-mem\/photoshop\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/photoshop"},{"id":186,"name":"Illustration","slug":"ung-dung-phan-mem\/illustration\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/illustration"},{"id":187,"name":"Javascript","slug":"ung-dung-phan-mem\/javascript\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/javascript"},{"id":188,"name":"VBA","slug":"ung-dung-phan-mem\/vba\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/vba"},{"id":189,"name":"PowerPoint","slug":"ung-dung-phan-mem\/powerpoint\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ung-dung-phan-mem\/powerpoint"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/111/img/menu_icon-1595833302.png"
                                                                alt="Ứng dụng Phần mềm">
                                                        </div>
                                                        <div class="title">Ứng dụng Phần mềm</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/phat-trien-ca-nhan/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":124,"name":"Qu\u1ea3n l\u00fd c\u1ea3m x\u00fac","slug":"phat-trien-ca-nhan\/quan-ly-cam-xuc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/quan-ly-cam-xuc"},{"id":125,"name":"Ph\u00e1t tri\u1ec3n t\u01b0 duy","slug":"phat-trien-ca-nhan\/phat-trien-tu-duy\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/phat-trien-tu-duy"},{"id":127,"name":"K\u1ef9 n\u0103ng","slug":"phat-trien-ca-nhan\/ky-nang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/ky-nang"},{"id":197,"name":"MC","slug":"phat-trien-ca-nhan\/mc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/mc"},{"id":198,"name":"L\u00e3nh \u0111\u1ea1o","slug":"phat-trien-ca-nhan\/lanh-dao\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/lanh-dao"},{"id":199,"name":"Th\u01b0\u01a1ng hi\u1ec7u c\u00e1 nh\u00e2n","slug":"phat-trien-ca-nhan\/thuong-hieu-ca-nhan\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/thuong-hieu-ca-nhan"},{"id":202,"name":"T\u00e0i ch\u00ednh c\u00e1 nh\u00e2n","slug":"phat-trien-ca-nhan\/tai-chinh-ca-nhan\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/phat-trien-ca-nhan\/tai-chinh-ca-nhan"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/109/img/menu_icon-1595841731.png"
                                                                alt="Phát triển cá nhân">
                                                        </div>
                                                        <div class="title">Phát triển cá nhân</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/marketing-va-truyen-thong/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":167,"name":"Content\t","slug":"marketing-va-truyen-thong\/content\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc Content Marketing gi\u00fap b\u1ea1n s\u00e1ng t\u1ea1o c\u00e1c n\u1ed9i dung th\u00fa v\u1ecb v\u00e0 gi\u00e0u th\u00f4ng tin m\u00e0 kh\u00e1ch h\u00e0ng y\u00eau th\u00edch t\u1eeb \u0111\u00f3 quan t\u00e2m \u0111\u1ebfn th\u01b0\u01a1ng hi\u1ec7u hay s\u1ea3n ph\u1ea9m, d\u1ecbch v\u1ee5 c\u1ee7a b\u1ea1n.","url":"\/danh-sach-khoa-hoc\/marketing-va-truyen-thong\/content"},{"id":174,"name":"PR","slug":"marketing-va-truyen-thong\/pr\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/marketing-va-truyen-thong\/pr"},{"id":175,"name":"SEO","slug":"marketing-va-truyen-thong\/seo\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/marketing-va-truyen-thong\/seo"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/151/img/menu_icon-1595822468.png"
                                                                alt="Marketing và truyền thông">
                                                        </div>
                                                        <div class="title">Marketing và truyền thông</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/kinh-doanh-khoi-nghiep/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":119,"name":"Nh\u1eadp h\u00e0ng","slug":"kinh-doanh-khoi-nghiep\/nhap-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/nhap-hang"},{"id":120,"name":"Lu\u1eadt","slug":"kinh-doanh-khoi-nghiep\/luat\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/luat"},{"id":121,"name":"Kh\u00e1ch s\u1ea1n","slug":"kinh-doanh-khoi-nghiep\/khach-san\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/khach-san"},{"id":122,"name":"Nh\u00e0 h\u00e0ng","slug":"kinh-doanh-khoi-nghiep\/nha-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/nha-hang"},{"id":123,"name":"Si\u00eau th\u1ecb","slug":"kinh-doanh-khoi-nghiep\/sieu-thi\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/sieu-thi"},{"id":148,"name":"B\u1ea5t \u0110\u1ed9ng S\u1ea3n","slug":"kinh-doanh-khoi-nghiep\/bat-dong-san\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/bat-dong-san"},{"id":159,"name":"Best seller b\u1ea3o hi\u1ec3m","slug":"kinh-doanh-khoi-nghiep\/best-seller-bao-hiem\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/best-seller-bao-hiem"},{"id":155,"name":"Ch\u1ee9ng kho\u00e1n","slug":"kinh-doanh-khoi-nghiep\/chung-khoan\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/kinh-doanh-khoi-nghiep\/chung-khoan"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/108/img/menu_icon-1595997334.png"
                                                                alt="Kinh doanh - Khởi nghiệp">
                                                        </div>
                                                        <div class="title">Kinh doanh - Khởi nghiệp</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/it-va-lap-trinh/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":179,"name":"Qu\u1ea3n tr\u1ecb m\u1ea1ng","slug":"it-va-lap-trinh\/quan-tri-mang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/it-va-lap-trinh\/quan-tri-mang"},{"id":180,"name":"IT","slug":"it-va-lap-trinh\/it\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/it-va-lap-trinh\/it"},{"id":81,"name":"L\u1eadp tr\u00ecnh web","slug":"it-va-lap-trinh\/lap-trinh-web\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc h\u01b0\u1edbng d\u1eabn l\u1eadp tr\u00ecnh Web chuy\u00ean nghi\u1ec7p t\u1eeb c\u01a1 b\u1ea3n \u0111\u1ebfn n\u00e2ng cao. H\u1ecdc xong l\u00e0m \u0111\u01b0\u1ee3c ngay c\u00f9ng v\u1edbi gi\u1ea3ng vi\u00ean nhi\u1ec1u n\u0103m kinh nghi\u1ec7m. Gi\u1ea3m 40% h\u1ecdc ph\u00ed. H\u1ecdc Ngay!","url":"\/danh-sach-khoa-hoc\/it-va-lap-trinh\/lap-trinh-web"},{"id":82,"name":"L\u1eadp tr\u00ecnh  \u1ee9ng d\u1ee5ng","slug":"it-va-lap-trinh\/lap-trinh-ung-dung\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc l\u1eadp tr\u00ecnh App tr\u00ean \u0111i\u1ec7n tho\u1ea1i t\u1eeb A-Z gi\u00fap b\u1ea1n c\u00f3 k\u1ef9 n\u0103ng v\u1ec1 l\u1eadp tr\u00ecnh, thi\u1ebft k\u1ebf app\/game c\u00f9ng gi\u1ea3ng vi\u00ean \u0111\u1ea7y kinh nghi\u1ec7m. Gi\u1ea3m 40% h\u1ecdc ph\u00ed. H\u1ecdc Ngay!","url":"\/danh-sach-khoa-hoc\/it-va-lap-trinh\/lap-trinh-ung-dung"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/126/img/menu_icon-1595588118.png"
                                                                alt="IT và lập trình">
                                                        </div>
                                                        <div class="title">IT và lập trình</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/hanh-chinh-nhan-su/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":166,"name":"Qu\u1ea3n tr\u1ecb nh\u00e2n s\u1ef1","slug":"hanh-chinh-nhan-su\/quan-tri-nhan-su\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/hanh-chinh-nhan-su\/quan-tri-nhan-su"},{"id":181,"name":"Tuy\u1ec3n d\u1ee5ng","slug":"hanh-chinh-nhan-su\/tuyen-dung\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/hanh-chinh-nhan-su\/tuyen-dung"},{"id":182,"name":"\u0110\u00e0o t\u1ea1o - ph\u00e1t tri\u1ec3n","slug":"hanh-chinh-nhan-su\/dao-tao-phat-trien\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/hanh-chinh-nhan-su\/dao-tao-phat-trien"},{"id":183,"name":"C&B","slug":"hanh-chinh-nhan-su\/cb\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/hanh-chinh-nhan-su\/cb"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/114/img/menu_icon-1595841675.png"
                                                                alt="Hành chính Nhân sự">
                                                        </div>
                                                        <div class="title">Hành chính Nhân sự</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/tai-chinh-ke-toan/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":176,"name":"Thu\u1ebf","slug":"tai-chinh-ke-toan\/thue\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/tai-chinh-ke-toan\/thue"},{"id":177,"name":"K\u1ebf to\u00e1n","slug":"tai-chinh-ke-toan\/ke-toan\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/tai-chinh-ke-toan\/ke-toan"},{"id":178,"name":"T\u00e0i ch\u00ednh","slug":"tai-chinh-ke-toan\/tai-chinh\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/tai-chinh-ke-toan\/tai-chinh"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/150/img/menu_icon-1595822423.png"
                                                                alt="Tài chính - Kế toán">
                                                        </div>
                                                        <div class="title">Tài chính - Kế toán</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                                <a class="item" target="_blank"
                                                href="https://kyna.vn/danh-sach-khoa-hoc/doi-song/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                                                data-child-category='[{"id":134,"name":"Yoga","slug":"doi-song\/yoga\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/yoga"},{"id":136,"name":"S\u1ee9c kho\u1ebb","slug":"doi-song\/suc-khoe\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/suc-khoe"},{"id":138,"name":" \u1ea8m th\u1ef1c","slug":"doi-song\/am-thuc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/am-thuc"},{"id":194,"name":"Nhi\u1ebfp \u1ea3nh","slug":"doi-song\/nhiep-anh\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/nhiep-anh"},{"id":195,"name":"Th\u1eddi trang - l\u00e0m \u0111\u1eb9p","slug":"doi-song\/thoi-trang-lam-dep\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/thoi-trang-lam-dep"},{"id":196,"name":"\u00c2m nh\u1ea1c","slug":"doi-song\/am-nhac\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/am-nhac"},{"id":110,"name":"Ngh\u1ec7 thu\u1eadt","slug":"doi-song\/nghe-thuat\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"Kh\u00f3a h\u1ecdc Ngh\u1ec7 Thu\u1eadt v\u00e0 \u0110\u1eddi S\u1ed1ng X\u00e3 H\u1ed9i trang b\u1ecb cho b\u1ea1n ki\u1ebfn th\u1ee9c v\u1ec1 ngh\u1ec7 thu\u1eadt, k\u1ef9 n\u0103ng s\u1ed1ng,...H\u1ecdc online linh ho\u1ea1t th\u1eddi gian h\u1ecdc. Gi\u1ea3m t\u1edbi 30% h\u1ecdc ph\u00ed. Xem Ngay!","url":"\/danh-sach-khoa-hoc\/doi-song\/nghe-thuat"},{"id":137,"name":"Phong th\u1ee7y","slug":"doi-song\/phong-thuy\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/doi-song\/phong-thuy"}]'>
                                                    <div class="parent-category">
                                                        <div class="img">
                                                            <img width="100%" height="auto"
                                                                src="https://media-kyna.cdn.vccloud.vn/uploads/categories/168/img/menu_icon-1595842434.png"
                                                                alt="Đời sống">
                                                        </div>
                                                        <div class="title">Đời sống</div>
                                                        <div class="child-icon"><i class="fas fa-caret-right"></i></div>                                                </div>
                                                </a>
                                            
                                        </div>

                                        <div class="header-banner-child-category">
                                            <div class="inner">
                                                <!--  Render by js  -->
                                            </div>
                                        </div>
                                        <div class="header-banner-course">
                                            <div class="inner">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="nav-item-box">
                            <div class="nav-item nav-item-course" data-toggle="best-seller-course-header">
                                <a href="#" class="nav-link">
                                    <i class="far fa-thumbs-up"></i>Bán chạy nhất
                                </a>
                            </div>

                            <div class="nav-item nav-item-course" data-toggle="user-seen-course-header">
                                <a class="nav-link" href="#">
                                    <i class="far fa-eye"></i>Khóa học đã xem
                                </a>
                            </div>

                            <div class="nav-item">
                                <a href="https://kyna.vn/danh-sach-khoa-hoc" class="nav-link">
                                    <i class="far fa-books"></i>Tất cả khóa học
                                </a>
                            </div>

                            <div class="nav-item nav-item-blog">
                                <a href="https://kyna.vn/bai-viet" target="_blank" class="nav-link">
                                    <i class="fas fa-wifi"></i>Blog
                                </a>
                            </div>
                        </div>


                        <div class="user-seen-course-header course-header">
                            <div class="container"></div>
                        </div>
                                    
                        </div>
                    </div>
            </div>


        </nav>
    <!--  -->
    <!--  -->    <!-- Menu mobile -->
    <nav id="navMobile" class="nav-mobile">
        <div class="navbar-wrap">

            <div class="navbar-burger">
                <i class="far fa-bars"></i>
            </div>

            <div class="navbar-brand logo">
                                    <a href="https://kyna.vn/"><img width="120" height="auto" src="https://media-kyna.cdn.vccloud.vn/img/logo/Kynavnraftlogo.svg" alt="Kyna.vn"
                                     class="img-fluid"/></a>
                
            </div>

            <div class="navbar-cart">
                <div class="navbar-cart_search">
                    <i class="far fa-search"></i>
                </div>
                <div class="header-cart">
                    <a href="https://kyna.vn/gio-hang">
                        <img src="https://media-kyna.cdn.vccloud.vn/img/cart/cart.svg" width="24" height="24" alt="Khóa học trực tuyến">
                        <span
                                class="count-number none-item">0</span>
                    </a>
                    
                    <ul class="dropdown-menu wrap clearfix">
                        <div class="hidden" id="items-id-in-current-cart" style="display: none" data-all-cart-items=""></div>
                        <li class="clearfix wrap-form-cart k-add-to-cart-register" id="k-header-form-cart">
                                        <p class="empty-cart">Giỏ hàng trống!</p>
                                </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="navbar-bottom">
            <div class="mobile-button-wrap">
                <a class="mobile-button-header mobile-button-header__outline"
                    href="https://kyna.vn/kich-hoat"
                    data-toggle="popup"
                    data-target="#activeCOD"
                    data-ajax="" data-push-state="false">Kích hoạt COD
                    </a>
            </div>
            <div class="mobile-button-wrap">
                <a href="https://kyna.vn/dang-nhap" class="mobile-button-header" data-toggle="modal"
                    data-target="#k-popup-account-login" data-ajax="" data-push-state="false">Đăng nhập
                </a>
            </div>
        </div>
        

        <!-- Menu Search Mobile -->
        <div id="nav-mobile-search" class="nav-mobile-search">
            <div class="inner">
                <form id="search-form" action="https://kyna.vn/danh-sach-khoa-hoc" method="get">               
                    <div class="input-group">
                        <input id="m-live-search-bar" name="q" type="text"
                            class="form-control live-search-bar">
                                <div class="list-suggest-category">
                                        <a href="https://kyna.vn/tag/dau-tu-chung-khoan">Đầu tư chứng khoán</a>
                                        <a href="https://kyna.vn/tag/digital-marketing">Digital Marketing</a>
                                        <a href="https://kyna.vn/tag/seo">SEO</a>
                                        <a href="https://kyna.vn/tag/guitar">Guitar</a>
                                        <a href="https://kyna.vn/tag/photoshop-thiet-ke">Đồ họa - Thiết kế</a>
                                        <a href="https://kyna.vn/tag/khoa-hoc-duoc-yeu-thich-nhat">Được yêu thích nhất</a>
                                        <a href="https://kyna.vn/tag/hoc-kinh-doanh-2020">Học Kinh doanh 2020</a>
                                        <a href="https://kyna.vn/tag/khoa-hoc-moi">Khoá học mới</a>
                                        <a href="https://kyna.vn/tag/ky-nang-mem">Kỹ năng mềm</a>
                                        <a href="https://kyna.vn/tag/hoc-lam-lanh-dao">Học làm lãnh đạo</a>
                                </div>
                        </div>
                </form>
                <div id="m-live-search-result" class="live-search-result"></div>
            </div>
        </div>
        <!-- End Search mobile-->

        <!-- Left sidebar -->
        <div class="header-left-menu">
            <div class="btn-close">
                <i class="fal fa-times"></i>
            </div>
            <div class="inner">
                    <a href="https://kyna.vn/dang-nhap" class="button-login header-login" data-toggle="modal"
                       data-target="#k-popup-account-login" data-ajax="" data-push-state="false">Đăng nhập
                    </a>
                
                <div class="list-category list-category-parent-js">
                        <a class="item" data-is-child="false"
                               target="_blank"
                               href="https://kyna.vn/danh-sach-khoa-hoc/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                               data-child-category=''>
                                <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/65/img/menu_icon-1594881835.png"
                                     alt="Tất cả khóa học">
                                <div class="name">Tất cả khóa học</div>
                        </a>
                        <a class="item" data-is-child="false"
                               target="_blank"
                               href="https://kyna.vn/danh-sach-khoa-hoc/khuyen-mai/nhom-khoa-hoc/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                               data-child-category=''>
                                <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/66/img/menu_icon-1594881630.png"
                                     alt="Khóa học combo">
                                <div class="name">Khóa học combo</div>
                        </a>
                        <a class="item" data-is-child="true"
                               target="_blank"
                               href="https://kyna.vn/danh-sach-khoa-hoc/sales-cskh/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                               data-child-category='[{"id":170,"name":"B\u00e1n h\u00e0ng","slug":"sales-cskh\/ban-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/ban-hang"},{"id":171,"name":"Ch\u0103m s\u00f3c kh\u00e1ch h\u00e0ng","slug":"sales-cskh\/cham-soc-khach-hang\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/cham-soc-khach-hang"},{"id":172,"name":"Telesales","slug":"sales-cskh\/telesales\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/sales-cskh\/telesales"}]'>
                                <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/162/img/menu_icon-1597659288.png"
                                     alt="Sales - CSKH">
                                <div class="name">Sales - CSKH</div>
                                <div class="child-icon"><i class="fas fa-caret-right"></i></div>
                        </a>
                        <a class="item" data-is-child="true"
                               target="_blank"
                               href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-cong-viec/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                               data-child-category='[{"id":203,"name":"Thuy\u1ebft tr\u00ecnh","slug":"ky-nang-cong-viec\/thuyet-trinh\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/thuyet-trinh"},{"id":204,"name":"N\u00e2ng cao hi\u1ec7u su\u1ea5t","slug":"ky-nang-cong-viec\/nang-cao-hieu-suat\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/nang-cao-hieu-suat"},{"id":205,"name":"Gi\u1ea3i quy\u1ebft v\u1ea5n \u0111\u1ec1","slug":"ky-nang-cong-viec\/giai-quyet-van-de\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/giai-quyet-van-de"},{"id":206,"name":" T\u01b0 duy c\u00f4ng vi\u1ec7c","slug":"ky-nang-cong-viec\/tu-duy-cong-viec\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/tu-duy-cong-viec"},{"id":207,"name":"Tin h\u1ecdc v\u0103n ph\u00f2ng","slug":"ky-nang-cong-viec\/tin-hoc-van-phong\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-cong-viec\/tin-hoc-van-phong"}]'>
                                <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/218/img/menu_icon-1597659127.png"
                                     alt="Kỹ năng công việc">
                                <div class="name">Kỹ năng công việc</div>
                                <div class="child-icon"><i class="fas fa-caret-right"></i></div>
                        </a>
                        <a class="item" data-is-child="true"
                               target="_blank"
                               href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-con-nguoi/580026?utm_source=kyna.site&amp;utm_medium=homepage_newmenu"
                               data-child-category='[{"id":208,"name":"Giao ti\u1ebfp","slug":"ky-nang-con-nguoi\/giao-tiep\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/giao-tiep"},{"id":209,"name":"Th\u00f4ng minh c\u1ea3m x\u00fac","slug":"ky-nang-con-nguoi\/thong-minh-cam-xuc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/thong-minh-cam-xuc"},{"id":211,"name":"Ph\u00e1t tri\u1ec3n \u0110\u1ed9ng l\u1ef1c","slug":"ky-nang-con-nguoi\/phat-trien-dong-luc\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/phat-trien-dong-luc"},{"id":212,"name":"\u0110\u00e0m ph\u00e1n th\u01b0\u01a1ng l\u01b0\u1ee3ng","slug":"ky-nang-con-nguoi\/dam-phan-thuong-luong\/580026?utm_source=kyna.site&utm_medium=homepage_newmenu","description":"","url":"\/danh-sach-khoa-hoc\/ky-nang-con-nguoi\/dam-phan-thuong-luong"}]'>
                                <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/219/img/menu_icon-1597659154.png"
                                     alt="Kỹ năng con người">
                                <div class="name">Kỹ năng con người</div>
                                <div class="child-icon"><i class="fas fa-caret-right"></i></div>
                        </a>
                </div>

                <div class="nav head-direction">
                    <div class="nav-item">
                        <a href="https://kyna.vn/danh-sach-khoa-hoc" class="nav-link" target="_blank">
                            Khóa học
                        </a>
                    </div>

                </div>

                
                <div class="header-child-category">
                    <div class="go-back nav-header">
                        <i class="far fa-chevron-left"></i>Trở về
                    </div>
                    <div class="list-category">
                        <!--     Render by js         -->
                    </div>
                </div>


            </div>
        </div>
        <!-- End left sidebar-->

    </nav>
    <!-- End Menu mobile-->
    <!--  -->
</header>
</template>
<script>
import { required, minLength,email,sameAs  } from 'vuelidate/lib/validators'
import CarouselHlCourse from "@/Views/Main/course/CarouselHlCourse.vue"
import axios from 'axios';
export default {
    components: {
    'CarouselHlCourse': CarouselHlCourse,   
  },
data(){
   return{
        active:false,
        action:false,
        ischeck:false,
        isregister:true,
        customer:[],
        socical:true,
        kh:false,
        customer_name:'',
        email:'',
        password:'',
        repeatPassword:'',
        mk:false,
        cod:false
   }
},
validations: {
    customer_name: {
      required,
      minLength: minLength(8)
    },
    email: {
      email,
      required
    },
    password: {
      required,
      minLength: minLength(8)
    },
    repeatPassword: {
      sameAsPassword: sameAs('password'),
    }
},
mounted() {
    window.addEventListener('message', this.onMessage, false)
},

beforeDestroy() {
    window.removeEventListener('message', this.onMessage)
},  
methods: {
    
            async click(value)
            {
                if (value=="login"){this.action=true, this.isregister=false}
                else if(value=="register"){this.action=true,this.isregister=true}
                else if(value=="cod"){this.cod=true}
                else if(value=="mk"){this.mk=true,this.action=false}
            },
            async logincustomer() {
                    try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/login', {
                        email: this.email,
                        password:this.password
                        })
                        alert("Chúc mừng bạn đã đăng nhập thành công!");
                        this.action=false
                        this.ischeck=true
                        console.log(response.data)
                    } catch (error) {
                        console.log(error)
                    }
            },
            async registercustomer(){
                try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/register', {
                            email: this.email,
                            password:this.password,
                            customer_name:this.customer_name
                            })
                            alert('Chúc Mừng Bạn Đăng Kí Thành Viên Thành Công!')
                            this.action=true,
                            this.socical=false, 
                            this.isregister=false,
                            this.password=''
                        } catch (error) {
                            console.log(error)
                        }
            },
            async loginsocial(provide) {
                // axios.defaults.headers = {
                // 'Content-Type': 'application/json',
                // Authorization: 'myspecialpassword'
                // }
                    // var config = {
                    //     headers: { 
                    //     'Content-Type': 'application/json',
                    //     'Access-Control-Allow-Methods':'HEAD, GET, POST, PUT, PATCH, DELETE',
                    //     'Access-Control-Allow-Origin':'*',
                    //     'Access-Control-Expose-Headers':'Location'
                    //      },
                    //     };
                    axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
                    axios.defaults.headers.common['Access-Control-Allow-Methods'] = 'HEAD, GET, POST, PUT, PATCH, DELETE';
                    axios.defaults.headers.common['Access-Control-Expose-Headers'] = 'Location';
                    axios.defaults.headers.common['Content-Type'] = 'application/json';
                    axios.get('api/loginsocial/'+provide)
                        .then(response => {
                            newWindow.location.href = response.data;
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                    //   // This method save the new token and username
                    //   onMessage (e) {
                    //     if (e.origin !== window.origin || !e.data.token) {
                    //       return
                    //     }
                    //     localStorage.setItem('user',e.data.name)
                    //     localStorage.setItem('jwt',e.data.token)

                    //     this.$router.go('/board')
                    //   }
            },
            async resetpassword(){
                        try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/sentmail', {
                            email: this.email,
                            })
                            alert('Chúng tôi đã gửi bạn 1 đường link trong gmail bạn đã đăng kí, hãy nhấp vào đường link để có thể lấy lại mật khẩu !')
                        } catch (error) {
                            console.log(error)
                        }
            },
            async logout(){
            }
        },
}
</script>

<style lang="scss">
@media all and(max-width: 576px) { 
    .header_m{
        .header_m_top{
            span.logo{
                margin-left: 60px;
            }
            input.search{
                visibility: hidden;
            }
            span.search{
                left: 221px;
                top: 56px;
                img#Capa_1
                {
                    left: -80px;
                    top: 19px;
                    width: 23px;
                    height: 23px;
                    position: absolute;
                }
            }
            span.cart{
                margin-left: -3px;
                margin-right: 35px;
                position: absolute;
                top: 21px;
                left: 236px;
                svg#cart{
                    width: 27px;
                    height: 27px;
                }
            }
            input.active{
                visibility: hidden;
            }
            span.dt{
                visibility: hidden;
            }
            .col-sm-2.col-md-2.col-lg-3.col-5.offset-1 {
                margin-top: -65px;
                input.register {
                width: 125px;
                }
            }
            .col-sm-5.col-md-5.col-lg-4.col-5.offset-1 {
                margin-top: -65px;
                input.login {
                width: 125px;
                }
            }
        }
    } 
}
// Medium devices (tablets, 768px and up)
@media all and (max-width: 768px) and (min-width:577px ) {
    
 }

// Large devices (desktops, 992px and up)
@media all and (max-width:992px ) and (min-width:769px ) { 

}

// Extra large devices (large desktops, 1200px and up)
@media all and (min-width:1200px ) { 
    .p12 {
    margin-top: 56px;
    }
    img#Capa_1 {
      max-width: 30px;
      left: 200px;
      top: -32px;
      position: absolute;
    }
    span.cart {
            margin-left: -3px;
            margin-right: 35px;
    }
    .bm-burger-button {
        top: -97px !important;
    }
    img#Capa_1{
        width: 20px;
        height: 20px;
    }
    img#Capa_3 {
    width: 29px;
    left: 106px;
    top: 15px;
    position: absolute;
   }
   input.active,input.register,input.login {
    margin-top: 35px;
   }
}

</style>