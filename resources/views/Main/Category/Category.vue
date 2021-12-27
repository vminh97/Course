<template>

<div class="category">
    <form id="facets-form" class="k-listing-filter form-inline" action="https://kyna.vn/danh-sach-khoa-hoc" method="get"><!-- Desktop -->
    <div class="container">
        <div class="t-wrap-sort">
            <div class="t-left-sort">
                <a href="javascript:" class="btn-listing-filter"><img
                        src="https://media-kyna.cdn.vccloud.vn/img/kyna-teach/icon-filter.svg" alt="icon">Bộ lọc:</a>
                                                                                        <div class="checkbox">
                            <input id="facet-type-1" type="checkbox"
                                name="facets[type][1]"
                                                            value="1">
                            <label for="facet-type-1">
                                <span><span></span></span>Học qua Video                        </label>
                        </div>
                                                                                                                            <div class="checkbox">
                            <input id="facet-discount-0" type="checkbox"
                                name="facets[discount][0]"
                                                            value="0">
                            <label for="facet-discount-0">
                                <span><span></span></span>Miễn phí                        </label>
                        </div>
                                            <div class="checkbox">
                            <input id="facet-discount-1" type="checkbox"
                                name="facets[discount][1]"
                                                            value="1">
                            <label for="facet-discount-1">
                                <span><span></span></span>Khuyến mãi                        </label>
                        </div>
                                                                                        <select class="form-control t-select-custom" id="facet-time"
                            name="facets[time][value]"
                            value="">
                            <option value="">Theo thời lượng</option>
                                                    <option
                                                            value="0">Dưới 3 tiếng</option>
                                                    <option
                                                            value="1">3 - 24 tiếng</option>
                                                    <option
                                                            value="2">1 - 3 ngày</option>
                                                    <option
                                                            value="3">Trên 3 ngày</option>
                                                </select>
                                                                                    <select class="form-control t-select-custom" id="facet-level"
                            name="facets[level][value]"
                            value="">
                            <option value="">Theo trình độ</option>
                                                    <option
                                                            value="1">Cơ bản</option>
                                                    <option
                                                            value="2">Nâng cao</option>
                                                    <option
                                                            value="3">Chuyên sâu</option>
                                                    <option
                                                            value="4">Mọi cấp độ</option>
                                                </select>
                                                        </div>
                    <div class="field-sort">
                <label><img src="https://media-kyna.cdn.vccloud.vn/img/kyna-teach/icon-sort.svg" alt="">Sắp xếp:</label>
                <select class="form-control t-select-custom" id="sort" name="sort" value="">
                    <option selected value="new">Mới nhất</option>
                    <option  value="feature">Nổi bật</option>
                    <option  value="promotion">% khuyến mãi</option>
                </select>
            </div>
                </div>
    </div>
    <!-- End Desktop -->

    </form>    
    <div id="k-listing" class="container k-height-header">
        <div class="col-lg-3 col-xs-12 k-listing-sidebar" id="offpage-listing-sidebar">
            
        <header>
        <div class="k-header-offpage-menu">
            <img src="https://media-kyna.cdn.vccloud.vn/img/logo/Kynavnraftlogo.svg" alt="Kyna.vn" class="img-responsive">
            <a href="#" class="left offpage-close" data-offpage="#offpage-listing-sidebar">
            <i class="icon icon-arrow-right-bold" aria-hidden="true"></i>
            </a>
            <!--<button type="button" class="k-button">Bỏ lọc</button>       -->
        </div><!--header -->
        </header>
        <section>
        <div class="k-listing-category">
                <h1 class="title-cat">Danh mục khóa học</h1>
                <ul class="k-category-list pd0">
            <li class="tat-ca-khoa-hoc">
                <a href="https://kyna.vn/danh-sach-khoa-hoc">
                <img class="img-lazy"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                    data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/65/img/menu_icon-1594881835.png"
                    width="20" height="20" alt="Tất cả khóa học">Tất cả khóa học</a>
            </li>
            <li class="khoa-hoc-combo">
                <a href="https://kyna.vn/khuyen-mai/nhom-khoa-hoc">
                <img class="img-lazy"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                    data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/66/img/menu_icon-1594881630.png"
                    width="20" height="20" alt="Khóa học Combo<">Khóa học Combo</a>
            </li>
                                <li class="sales-cskh">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/sales-cskh">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/162/img/menu_icon-1597659288.png" width="20" height="20"
                        alt="Sales - CSKH">Sales - CSKH            </a>
                            </li>
                        <li class="ky-nang-cong-viec">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-cong-viec">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/218/img/menu_icon-1597659127.png" width="20" height="20"
                        alt="Kỹ năng công việc">Kỹ năng công việc            </a>
                            </li>
                        <li class="ky-nang-con-nguoi">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-con-nguoi">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/219/img/menu_icon-1597659154.png" width="20" height="20"
                        alt="Kỹ năng con người">Kỹ năng con người            </a>
                            </li>
                        <li class="ky-nang-quan-tri">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/ky-nang-quan-tri">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/220/img/menu_icon-1597659175.png" width="20" height="20"
                        alt="Kỹ năng quản trị">Kỹ năng quản trị            </a>
                            </li>
                        <li class="ngoai-ngu">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/ngoai-ngu">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/112/img/menu_icon-1595586642.png" width="20" height="20"
                        alt="Ngoại ngữ">Ngoại ngữ            </a>
                            </li>
                        <li class="thiet-ke-do-hoa">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/thiet-ke-do-hoa">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/152/img/menu_icon-1595822848.png" width="20" height="20"
                        alt="Thiết kế đồ hoạ">Thiết kế đồ hoạ            </a>
                            </li>
                        <li class="ung-dung-phan-mem">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/ung-dung-phan-mem">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/111/img/menu_icon-1595833302.png" width="20" height="20"
                        alt="Ứng dụng Phần mềm">Ứng dụng Phần mềm            </a>
                            </li>
                        <li class="phat-trien-ca-nhan">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/phat-trien-ca-nhan">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/109/img/menu_icon-1595841731.png" width="20" height="20"
                        alt="Phát triển cá nhân">Phát triển cá nhân            </a>
                            </li>
                        <li class="marketing-va-truyen-thong">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/marketing-va-truyen-thong">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/151/img/menu_icon-1595822468.png" width="20" height="20"
                        alt="Marketing và truyền thông">Marketing và truyền thông            </a>
                            </li>
                        <li class="kinh-doanh-khoi-nghiep">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/kinh-doanh-khoi-nghiep">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/108/img/menu_icon-1595997334.png" width="20" height="20"
                        alt="Kinh doanh - Khởi nghiệp">Kinh doanh - Khởi nghiệp            </a>
                            </li>
                        <li class="it-va-lap-trinh">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/it-va-lap-trinh">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/126/img/menu_icon-1595588118.png" width="20" height="20"
                        alt="IT và lập trình">IT và lập trình            </a>
                            </li>
                        <li class="hanh-chinh-nhan-su">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/hanh-chinh-nhan-su">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/114/img/menu_icon-1595841675.png" width="20" height="20"
                        alt="Hành chính Nhân sự">Hành chính Nhân sự            </a>
                            </li>
                        <li class="tai-chinh-ke-toan">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/tai-chinh-ke-toan">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/150/img/menu_icon-1595822423.png" width="20" height="20"
                        alt="Tài chính - Kế toán">Tài chính - Kế toán            </a>
                            </li>
                        <li class="doi-song">
                    <a href="https://kyna.vn/danh-sach-khoa-hoc/doi-song">
                    <img class="img-lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                        data-src="https://media-kyna.cdn.vccloud.vn/uploads/categories/168/img/menu_icon-1595842434.png" width="20" height="20"
                        alt="Đời sống">Đời sống            </a>
                            </li>
                                </ul>
        </div><!--end k-category-->
        </section>

        <section>
            <div class="k-listing-hot-topics">
                <h3>Chủ đề đang hot</h3>
                <ul class="k-listing-hot-topics-list">
                                    <li><a href="https://kyna.vn/tag/tieng-nhat" title="Tiếng nhật">Tiếng nhật</a></li>
                                    <li><a href="https://kyna.vn/tag/ban-hang" title="Bán hàng">Bán hàng</a></li>
                                    <li><a href="https://kyna.vn/tag/khoa-hoc-marketing-online" title="Marketing">Khóa học Marketing online</a></li>
                                    <li><a href="https://kyna.vn/tag/tieng-anh" title="Học Tiếng Anh Online Cùng Chuyên Gia">Tiếng Anh</a></li>
                                    <li><a href="https://kyna.vn/tag/bat-dong-san" title="Khoá học bất động sản online">Bất động sản</a></li>
                                    <li><a href="https://kyna.vn/tag/lap-trinh" title="Lập trình">Lập trình</a></li>
                                    <li><a href="https://kyna.vn/tag/dau-tu-chung-khoan" title="đầu tư chứng khoán">Đầu tư chứng khoán</a></li>
                                    <li><a href="https://kyna.vn/tag/ki-nang-mem" title="Kĩ năng mềm ">Kĩ năng mềm </a></li>
                                    <li><a href="https://kyna.vn/tag/digital-marketing" title="Digital Marketing">Digital Marketing</a></li>
                                    <li><a href="https://kyna.vn/tag/tieng-anh-cong-so" title=" Tiếng anh công sở"> Tiếng anh công sở</a></li>
                            </ul>
            </div>
        </section>


        </div>
            <!--end .k-listing-sidebar-->
            <div class="col-lg-9 col-xs-12 k-listing-content">
                


        <section id="banner-campaign-category">
            <h3 style="color:#50ad4e; font-weight: bold;">Có gì hot trên Kyna?</h3>
            <div class="box">
            
        <div class="banner-widget banner lg-banner" id="" data-banner-type="3">
                <a href="https://kyna.vn/english-for-business-socializing-tieng-anh-danh-cho-giao-tiep-xa-giao" title="" target="_blank">
                <img class="image-topbar banner-pc img-fluid" src="https://media-kyna.cdn.vccloud.vn/uploads/banners/952/img/image_url-1625586379.original.png" alt="uploads/banners/952/img/image_url-1625586379.original.png" title="uploads/banners/952/img/image_url-1625586379.original.png">                </a>
                    </div>
                <!-- end .lg-banner -->
            
        <div class="banner-widget banner sm-banner" id="" data-banner-type="6">
                <div class="item">
                <a href="https://kyna.vn/ung-dung-phong-thuy-trong-doi-song-kinh-doanh/362588?ktrack=332018-small1-tatca" title="Ứng dụng phong thủy để mang lại may mắn, sung túc" target="_blank">
                <img class="image-topbar banner-pc img-fluid" src="https://media-kyna.cdn.vccloud.vn/uploads/banners/780/img/image_url-1625586451.original.png" alt="Ứng dụng phong thủy để mang lại may mắn, sung túc" title="Ứng dụng phong thủy để mang lại may mắn, sung túc">                </a>
                    <div class="info">
                    <h5>
                <a href="https://kyna.vn/ung-dung-phong-thuy-trong-doi-song-kinh-doanh/362588?ktrack=332018-small1-tatca" title="Ứng dụng phong thủy để mang lại may mắn, sung túc" target="_blank">
                Ứng dụng phong thủy để mang lại may mắn, sung túc            </a>
            </h5>
                    Xem Ngay!      </div>
                </div>
                    <div class="item">
                <a href="https://kyna.vn/khoa-hoc-tro-thanh-bac-thay-bao-cao-voi-excel/362590?ktrack=332018-small2-tatca" title="Trở thành bậc thầy báo cáo với Excel" target="_blank">
                <img class="image-topbar banner-pc img-fluid" src="https://media-kyna.cdn.vccloud.vn/uploads/banners/776/img/image_url-1579147844.original.png" alt="Trở thành bậc thầy báo cáo với Excel" title="Trở thành bậc thầy báo cáo với Excel">                </a>
                    <div class="info">
                    <h5>
                <a href="https://kyna.vn/khoa-hoc-tro-thanh-bac-thay-bao-cao-voi-excel/362590?ktrack=332018-small2-tatca" title="Trở thành bậc thầy báo cáo với Excel" target="_blank">
                Trở thành bậc thầy báo cáo với Excel            </a>
            </h5>
                    Xem Ngay      </div>
                </div>
        </div>
            </div>
            <!-- end .box -->
        </section>
            <!-- end #banner-campaign-category -->

        <!-- start hot courses-->
        <section id="hot-courses">
            <h3 style="padding: 0 15px; color:#50ad4e; font-weight: bold;">
                Khóa học hot dành cho bạn
            </h3>

            <div class="box">
                <h3 class="mobile">
                    Khóa học hot dành cho bạn
                </h3>                 
                <ul id="w0" class="k-box-card-list test hot-courses-container">
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="0">
                        <div class="k-box-card-wrap clearfix" data-id="633" data-course-type="1">
                            <div class="img">
                            <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Lập trình Android nâng cao" title="Lập trình Android nâng cao" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/633/img/image_url-1595227061.cover-263x147.jpg">
                                <div class="label-wrap">
                                
                                
                                                        
                                                                                                

                                </div>
                                <!-- end .label-wrap -->
                                <!-- <div class="teacher mb">
                                    <ul>
                                        <li>
                                            <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/325931/img/avatar-1595304153.crop-35x35.png" alt="Trần Duy Thanh" title="Trần Duy Thanh">                </li>
                                        <li>
                                            Trần Duy Thanh                </li>
                                    </ul>
                                </div> -->

                                <!--start course rating-->
                            
                        <div class="rating-box clearfix">
                            <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                            <div class="rating-text"><b>5 <i class="icon icon-star"></i></b> <span>(1<detail> đánh giá</detail>)</span></div>
                            <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                            <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>301 <span>học viên</span><detail> đăng ký học</detail></span></div>
                        </div>
                                <!--end rating-->

                                <span class="background-detail">
                                <span class="wrap-position">
                                                        <div class="inner">
                                            <a href="https://kyna.vn/lap-trinh-android-nang-cao" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                            <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="view-detail" target="_blank">Xem chi tiết</a>
                                        </div>
                                                </span>
                                </span>
                            </div>
                            <!--end .img-->

                            <div class="content">
                                <div class="box-style">
                                
                                        </div>
                                <h4>Lập trình Android nâng cao</h4>
                                <span class="author"><i class="fas fa-user-tie"></i>Trần Duy Thanh</span>
                                <span class="major"><i class="fas fa-briefcase"></i>Thạc sỹ Khoa học máy tính</span>
                            </div>

                            <!--end .content -->


                            <div class="content-mb">
                                <b>Trần Duy Thanh</b><span><b>,</b> Thạc sỹ Khoa học máy tính</span>
                            </div>

                            <!--end .content mb -->
                            <div class="view-price">
                                <ul>
                                                                <li class="price"><strong>500.000đ</strong></li>
                                                    </ul>
                                                        </div>
                            <!--end .view-price-->


                            <div class="view-price-mb">
                                <div class="student">
                                    <div class="number">301</div>
                                    <div class="text">học viên</div>
                                </div>
                                <div class="time">
                                    <div class="number">23</div>
                                    <div class="text">giờ</div>
                                </div>
                                <div class="price">
                                    <div class="label-price">
                                                                            <div class="first">500.000đ</div>
                                                                </div>
                                </div>
                            </div>
                                        <!--end .view-price mb-->

                                        <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="link-wrap"></a>
                            </div>
                                <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="card-popup"></a>
                        <!--end .wrap-->
                    </li>
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="1">
                    <div class="k-box-card-wrap clearfix" data-id="533" data-course-type="2">
                        <div class="img">
                        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Tự học Tiếng Nhật dành cho người mới bắt đầu" title="Tự học Tiếng Nhật dành cho người mới bắt đầu" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/533/img/image_url-1509609305.cover-263x147.jpg">        <div class="label-wrap">
                                            <div class="ribbon-position">
                                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                                        alt="Kyna.vn">
                                </div>
                            
                                                                
                                                                                                        
                            </div>
                            <!-- end .label-wrap -->
                            <span class="background-detail">
                            <span class="wrap-position">
                                <div class="inner">
                                <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau"
                                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="view-detail" target="_blank">Xem chi tiết</a>
                                </div>
                            </span>
                            </span>
                        </div>
                        <!--end .img-->
                        <div class="content">
                            <div class="box-style">
                            </div>
                            <h4>Tự học Tiếng Nhật dành cho người mới bắt đầu</h4>
                            <span class="author pc">Khóa học combo</span>
                        </div>
                        <!--end .content -->


                        <div class="content-mb">
                            </div>

                        <div class="view-price">
                            <ul>
                                                            <li class="price"><strong>399.000đ</strong></li>
                                                </ul>
                            </div>
                        <!--end .view-price-->

                        <div class="view-price-mb">
                            <div class="student">
                                <div class="number">805</div>
                                <div class="text">học viên</div>
                            </div>
                            <div class="time">
                                <div class="number">1</div>
                                <div class="text">chuyên gia</div>
                            </div>
                            <div class="price">
                                <div class="label-price">
                                                                    <div class="first">399.000đ</div>
                                                    <div class="last"><s>594.000đ</s></div>
                                            </div>
                            </div>
                        </div>
                        <!--end .view-price mb-->
                            <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="link-wrap"></a>
                    
                    </div>

                        <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="card-popup"></a>
                    <!--end .wrap-->
                    </li>
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="2">
                    <div class="k-box-card-wrap clearfix" data-id="273" data-course-type="2">
                        <div class="img">
                        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Thực hành web chuyên nghiệp cùng PHP, HTML, CSS" title="Thực hành web chuyên nghiệp cùng PHP, HTML, CSS" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/273/img/image_url.cover-263x147.jpg">        <div class="label-wrap">
                                            <div class="ribbon-position">
                                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                                        alt="Kyna.vn">
                                </div>
                            
                                                    
                                                                                                        
                            </div>
                            <!-- end .label-wrap -->
                            <span class="background-detail">
                            <span class="wrap-position">
                                <div class="inner">
                                <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css"
                                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="view-detail" target="_blank">Xem chi tiết</a>
                                </div>
                            </span>
                            </span>
                        </div>
                        <!--end .img-->
                        <div class="content">
                            <div class="box-style">
                            </div>
                            <h4>Thực hành web chuyên nghiệp cùng PHP, HTML, CSS</h4>
                            <span class="author pc">Khóa học combo</span>
                        </div>
                        <!--end .content -->


                        <div class="content-mb">
                            </div>

                        <div class="view-price">
                            <ul>
                                                            <li class="price"><strong>600.000đ</strong></li>
                                                </ul>
                            </div>
                        <!--end .view-price-->

                        <div class="view-price-mb">
                            <div class="student">
                                <div class="number">539</div>
                                <div class="text">học viên</div>
                            </div>
                            <div class="time">
                                <div class="number">2</div>
                                <div class="text">chuyên gia</div>
                            </div>
                            <div class="price">
                                <div class="label-price">
                                                                    <div class="first">600.000đ</div>
                                                    <div class="last"><s>990.000đ</s></div>
                                            </div>
                            </div>
                        </div>
                        <!--end .view-price mb-->
                            <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="link-wrap"></a>
                    
                    </div>

                        <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="card-popup"></a>
                    <!--end .wrap-->
                    </li>
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="3">
                    <div class="k-box-card-wrap clearfix" data-id="782" data-course-type="2">
                        <div class="img">
                        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Bí quyết đầu tư bất động sản thành công" title="Bí quyết đầu tư bất động sản thành công" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/782/img/image_url-1500949516.cover-263x147.jpg">        <div class="label-wrap">
                                            <div class="ribbon-position">
                                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                                        alt="Kyna.vn">
                                </div>
                            
                                                    
                                                                                                        
                            </div>
                            <!-- end .label-wrap -->
                            <span class="background-detail">
                            <span class="wrap-position">
                                <div class="inner">
                                <a href="https://kyna.vn/dau-tu-bat-dong-san"
                                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                <a href="https://kyna.vn/dau-tu-bat-dong-san" class="view-detail" target="_blank">Xem chi tiết</a>
                                </div>
                            </span>
                            </span>
                        </div>
                        <!--end .img-->
                        <div class="content">
                            <div class="box-style">
                            </div>
                            <h4>Bí quyết đầu tư bất động sản thành công</h4>
                            <span class="author pc">Khóa học combo</span>
                        </div>
                        <!--end .content -->


                        <div class="content-mb">
                            </div>

                        <div class="view-price">
                            <ul>
                                                            <li class="price"><strong>399.000đ</strong></li>
                                                </ul>
                            </div>
                        <!--end .view-price-->

                        <div class="view-price-mb">
                            <div class="student">
                                <div class="number">6978</div>
                                <div class="text">học viên</div>
                            </div>
                            <div class="time">
                                <div class="number">3</div>
                                <div class="text">chuyên gia</div>
                            </div>
                            <div class="price">
                                <div class="label-price">
                                                                    <div class="first">399.000đ</div>
                                                    <div class="last"><s>1.194.000đ</s></div>
                                            </div>
                            </div>
                        </div>
                        <!--end .view-price mb-->
                            <a href="https://kyna.vn/dau-tu-bat-dong-san" class="link-wrap"></a>
                    
                    </div>

                        <a href="https://kyna.vn/dau-tu-bat-dong-san" class="card-popup"></a>
                    <!--end .wrap-->
                    </li>
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="4">
                    <div class="k-box-card-wrap clearfix" data-id="549" data-course-type="1">
                        <div class="img">
                        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Content Marketing" title="Content Marketing" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/549/img/image_url-1599635532.cover-263x147.jpg">
                            <div class="label-wrap">
                            
                            
                                                    
                                                                                

                            </div>
                            <!-- end .label-wrap -->
                            <!-- <div class="teacher mb">
                                <ul>
                                    <li>
                                        <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/194763/img/avatar.crop-35x35.jpg" alt="Trần Khánh Tùng" title="Trần Khánh Tùng">                </li>
                                    <li>
                                        Trần Khánh Tùng                </li>
                                </ul>
                            </div> -->

                            <!--start course rating-->
                        
                    <div class="rating-box clearfix">
                        <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                        <div class="rating-text"><b>3.8 <i class="icon icon-star"></i></b> <span>(50<detail> đánh giá</detail>)</span></div>
                        <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                        <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>2624 <span>học viên</span><detail> đăng ký học</detail></span></div>
                    </div>
                            <!--end rating-->

                            <span class="background-detail">
                            <span class="wrap-position">
                                                    <div class="inner">
                                        <a href="https://kyna.vn/content-marketing" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                        <a href="https://kyna.vn/content-marketing" class="view-detail" target="_blank">Xem chi tiết</a>
                                    </div>
                                            </span>
                            </span>
                        </div>
                        <!--end .img-->

                        <div class="content">
                            <div class="box-style">
                            
                                    </div>
                            <h4>Content Marketing</h4>
                            <span class="author"><i class="fas fa-user-tie"></i>Trần Khánh Tùng</span>
                            <span class="major"><i class="fas fa-briefcase"></i>Đồng sáng lập Your Fashion</span>
                        </div>

                        <!--end .content -->


                        <div class="content-mb">
                            <b>Trần Khánh Tùng</b><span><b>,</b> Đồng sáng lập Your Fashion</span>
                        </div>

                        <!--end .content mb -->
                        <div class="view-price">
                            <ul>
                                                            <li class="price"><strong>198.000đ</strong></li>
                                                </ul>
                                                    </div>
                        <!--end .view-price-->


                        <div class="view-price-mb">
                            <div class="student">
                                <div class="number">2624</div>
                                <div class="text">học viên</div>
                            </div>
                            <div class="time">
                                <div class="number">6</div>
                                <div class="text">giờ</div>
                            </div>
                            <div class="price">
                                <div class="label-price">
                                                                        <div class="first">198.000đ</div>
                                                            </div>
                            </div>
                        </div>
                                    <!--end .view-price mb-->

                                    <a href="https://kyna.vn/content-marketing" class="link-wrap"></a>
                        </div>
                            <a href="https://kyna.vn/content-marketing" class="card-popup"></a>
                    <!--end .wrap-->
                    </li>
                    <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="5">
                    <div class="k-box-card-wrap clearfix" data-id="866" data-course-type="1">
                        <div class="img">
                        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Tiếng Anh giao tiếp công sở qua điện thoại" title="Tiếng Anh giao tiếp công sở qua điện thoại" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/866/img/image_url-1594981875.cover-263x147.jpg">
                            <div class="label-wrap">
                            
                            
                                                    
                                                                                

                            </div>
                            <!-- end .label-wrap -->
                            <!-- <div class="teacher mb">
                                <ul>
                                    <li>
                                        <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/300068/img/avatar.crop-35x35.png" alt="Kynalingo - Into the World" title="Kynalingo - Into the World">                </li>
                                    <li>
                                        Kynalingo - Into the World                </li>
                                </ul>
                            </div> -->

                            <!--start course rating-->
                        
                    <div class="rating-box clearfix">
                        <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                        <div class="rating-text"><b>5 <i class="icon icon-star"></i></b> <span>(1<detail> đánh giá</detail>)</span></div>
                        <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                        <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>707 <span>học viên</span><detail> đăng ký học</detail></span></div>
                    </div>
                            <!--end rating-->

                            <span class="background-detail">
                            <span class="wrap-position">
                                                    <div class="inner">
                                        <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                                        <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="view-detail" target="_blank">Xem chi tiết</a>
                                    </div>
                                            </span>
                            </span>
                        </div>
                        <!--end .img-->

                        <div class="content">
                            <div class="box-style">
                            
                                    </div>
                            <h4>Tiếng Anh giao tiếp công sở qua điện thoại</h4>
                            <span class="author"><i class="fas fa-user-tie"></i>Kynalingo - Into the World</span>
                            <span class="major"><i class="fas fa-briefcase"></i>Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
                        </div>

                        <!--end .content -->


                        <div class="content-mb">
                            <b>Kynalingo - Into the World</b><span><b>,</b> Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
                        </div>

                        <!--end .content mb -->
                        <div class="view-price">
                            <ul>
                                                            <li class="price"><strong>298.000đ</strong></li>
                                                </ul>
                                                    </div>
                        <!--end .view-price-->


                        <div class="view-price-mb">
                            <div class="student">
                                <div class="number">707</div>
                                <div class="text">học viên</div>
                            </div>
                            <div class="time">
                                <div class="number">3</div>
                                <div class="text">giờ</div>
                            </div>
                            <div class="price">
                                <div class="label-price">
                                                                        <div class="first">298.000đ</div>
                                                            </div>
                            </div>
                        </div>
                                    <!--end .view-price mb-->

                                    <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="link-wrap"></a>
                        </div>
                            <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="card-popup"></a>
                    <!--end .wrap-->
                    </li>
                </ul>            
            </div>
        </section>
        <!-- end hot courses -->

        <span class="menu-heading">                   
                <div class="box-inline">
                    <h3>
                        <b>Tất cả</b><br>
                        <span class="t-sub-h1">
                        <b>362</b> khóa học</span>
                    </h3>
                </div>                  
        </span>
        <section id="hot-courses">
        <h3 style="padding: 0 15px; color:#50ad4e; font-weight: bold;">
        Khóa học hot dành cho bạn
        </h3>

        <div class="box">
        <h3 class="mobile">
        Khóa học hot dành cho bạn
        </h3>                 
        <ul id="w0" class="k-box-card-list test hot-courses-container">
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="0">
        <div class="k-box-card-wrap clearfix" data-id="633" data-course-type="1">
            <div class="img">
            <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Lập trình Android nâng cao" title="Lập trình Android nâng cao" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/633/img/image_url-1595227061.cover-263x147.jpg">
                <div class="label-wrap">
                
                
                                        
                                                                                

                </div>
                <!-- end .label-wrap -->
                <!-- <div class="teacher mb">
                    <ul>
                        <li>
                            <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/325931/img/avatar-1595304153.crop-35x35.png" alt="Trần Duy Thanh" title="Trần Duy Thanh">                </li>
                        <li>
                            Trần Duy Thanh                </li>
                    </ul>
                </div> -->

                <!--start course rating-->
            
        <div class="rating-box clearfix">
            <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
            <div class="rating-text"><b>5 <i class="icon icon-star"></i></b> <span>(1<detail> đánh giá</detail>)</span></div>
            <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
            <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>301 <span>học viên</span><detail> đăng ký học</detail></span></div>
        </div>
                <!--end rating-->

                <span class="background-detail">
                <span class="wrap-position">
                                        <div class="inner">
                            <a href="https://kyna.vn/lap-trinh-android-nang-cao" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                            <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="view-detail" target="_blank">Xem chi tiết</a>
                        </div>
                                </span>
                </span>
            </div>
            <!--end .img-->

            <div class="content">
                <div class="box-style">
                
                        </div>
                <h4>Lập trình Android nâng cao</h4>
                <span class="author"><i class="fas fa-user-tie"></i>Trần Duy Thanh</span>
                <span class="major"><i class="fas fa-briefcase"></i>Thạc sỹ Khoa học máy tính</span>
            </div>

            <!--end .content -->


            <div class="content-mb">
                <b>Trần Duy Thanh</b><span><b>,</b> Thạc sỹ Khoa học máy tính</span>
            </div>

            <!--end .content mb -->
            <div class="view-price">
                <ul>
                                                <li class="price"><strong>500.000đ</strong></li>
                                    </ul>
                                        </div>
            <!--end .view-price-->


            <div class="view-price-mb">
                <div class="student">
                    <div class="number">301</div>
                    <div class="text">học viên</div>
                </div>
                <div class="time">
                    <div class="number">23</div>
                    <div class="text">giờ</div>
                </div>
                <div class="price">
                    <div class="label-price">
                                                            <div class="first">500.000đ</div>
                                                </div>
                </div>
            </div>
                        <!--end .view-price mb-->

                        <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="link-wrap"></a>
            </div>
                <a href="https://kyna.vn/lap-trinh-android-nang-cao" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="1">
        <div class="k-box-card-wrap clearfix" data-id="533" data-course-type="2">
        <div class="img">
        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Tự học Tiếng Nhật dành cho người mới bắt đầu" title="Tự học Tiếng Nhật dành cho người mới bắt đầu" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/533/img/image_url-1509609305.cover-263x147.jpg">        <div class="label-wrap">
                            <div class="ribbon-position">
                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                        alt="Kyna.vn">
                </div>
            
                                                
                                                                                        
            </div>
            <!-- end .label-wrap -->
            <span class="background-detail">
            <span class="wrap-position">
                <div class="inner">
                <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau"
                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="view-detail" target="_blank">Xem chi tiết</a>
                </div>
            </span>
            </span>
        </div>
        <!--end .img-->
        <div class="content">
            <div class="box-style">
            </div>
            <h4>Tự học Tiếng Nhật dành cho người mới bắt đầu</h4>
            <span class="author pc">Khóa học combo</span>
        </div>
        <!--end .content -->


        <div class="content-mb">
            </div>

        <div class="view-price">
            <ul>
                                            <li class="price"><strong>399.000đ</strong></li>
                                </ul>
            </div>
        <!--end .view-price-->

        <div class="view-price-mb">
            <div class="student">
                <div class="number">805</div>
                <div class="text">học viên</div>
            </div>
            <div class="time">
                <div class="number">1</div>
                <div class="text">chuyên gia</div>
            </div>
            <div class="price">
                <div class="label-price">
                                                    <div class="first">399.000đ</div>
                                    <div class="last"><s>594.000đ</s></div>
                            </div>
            </div>
        </div>
        <!--end .view-price mb-->
            <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="link-wrap"></a>

        </div>

        <a href="https://kyna.vn/tieng-nhat-cho-nguoi-moi-bat-dau" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="2">
        <div class="k-box-card-wrap clearfix" data-id="273" data-course-type="2">
        <div class="img">
        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Thực hành web chuyên nghiệp cùng PHP, HTML, CSS" title="Thực hành web chuyên nghiệp cùng PHP, HTML, CSS" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/273/img/image_url.cover-263x147.jpg">        <div class="label-wrap">
                            <div class="ribbon-position">
                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                        alt="Kyna.vn">
                </div>
            
                                    
                                                                                        
            </div>
            <!-- end .label-wrap -->
            <span class="background-detail">
            <span class="wrap-position">
                <div class="inner">
                <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css"
                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="view-detail" target="_blank">Xem chi tiết</a>
                </div>
            </span>
            </span>
        </div>
        <!--end .img-->
        <div class="content">
            <div class="box-style">
            </div>
            <h4>Thực hành web chuyên nghiệp cùng PHP, HTML, CSS</h4>
            <span class="author pc">Khóa học combo</span>
        </div>
        <!--end .content -->


        <div class="content-mb">
            </div>

        <div class="view-price">
            <ul>
                                            <li class="price"><strong>600.000đ</strong></li>
                                </ul>
            </div>
        <!--end .view-price-->

        <div class="view-price-mb">
            <div class="student">
                <div class="number">539</div>
                <div class="text">học viên</div>
            </div>
            <div class="time">
                <div class="number">2</div>
                <div class="text">chuyên gia</div>
            </div>
            <div class="price">
                <div class="label-price">
                                                    <div class="first">600.000đ</div>
                                    <div class="last"><s>990.000đ</s></div>
                            </div>
            </div>
        </div>
        <!--end .view-price mb-->
            <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="link-wrap"></a>

        </div>

        <a href="https://kyna.vn/thuc-hanh-web-chuyen-nghiep-cung-php-html-css" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="3">
        <div class="k-box-card-wrap clearfix" data-id="782" data-course-type="2">
        <div class="img">
        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Bí quyết đầu tư bất động sản thành công" title="Bí quyết đầu tư bất động sản thành công" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/782/img/image_url-1500949516.cover-263x147.jpg">        <div class="label-wrap">
                            <div class="ribbon-position">
                    <img width="100%" height="auto" class="img-ribbon" src="https://media-kyna.cdn.vccloud.vn/img/ribbon/ribbon-combo.png?v=1"
                        alt="Kyna.vn">
                </div>
            
                                    
                                                                                        
            </div>
            <!-- end .label-wrap -->
            <span class="background-detail">
            <span class="wrap-position">
                <div class="inner">
                <a href="https://kyna.vn/dau-tu-bat-dong-san"
                    data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                <a href="https://kyna.vn/dau-tu-bat-dong-san" class="view-detail" target="_blank">Xem chi tiết</a>
                </div>
            </span>
            </span>
        </div>
        <!--end .img-->
        <div class="content">
            <div class="box-style">
            </div>
            <h4>Bí quyết đầu tư bất động sản thành công</h4>
            <span class="author pc">Khóa học combo</span>
        </div>
        <!--end .content -->


        <div class="content-mb">
            </div>

        <div class="view-price">
            <ul>
                                            <li class="price"><strong>399.000đ</strong></li>
                                </ul>
            </div>
        <!--end .view-price-->

        <div class="view-price-mb">
            <div class="student">
                <div class="number">6978</div>
                <div class="text">học viên</div>
            </div>
            <div class="time">
                <div class="number">3</div>
                <div class="text">chuyên gia</div>
            </div>
            <div class="price">
                <div class="label-price">
                                                    <div class="first">399.000đ</div>
                                    <div class="last"><s>1.194.000đ</s></div>
                            </div>
            </div>
        </div>
        <!--end .view-price mb-->
            <a href="https://kyna.vn/dau-tu-bat-dong-san" class="link-wrap"></a>

        </div>

        <a href="https://kyna.vn/dau-tu-bat-dong-san" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="4">
        <div class="k-box-card-wrap clearfix" data-id="549" data-course-type="1">
        <div class="img">
        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Content Marketing" title="Content Marketing" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/549/img/image_url-1599635532.cover-263x147.jpg">
            <div class="label-wrap">
            
            
                                    
                                                                

            </div>
            <!-- end .label-wrap -->
            <!-- <div class="teacher mb">
                <ul>
                    <li>
                        <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/194763/img/avatar.crop-35x35.jpg" alt="Trần Khánh Tùng" title="Trần Khánh Tùng">                </li>
                    <li>
                        Trần Khánh Tùng                </li>
                </ul>
            </div> -->

            <!--start course rating-->

        <div class="rating-box clearfix">
        <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
        <div class="rating-text"><b>3.8 <i class="icon icon-star"></i></b> <span>(50<detail> đánh giá</detail>)</span></div>
        <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
        <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>2624 <span>học viên</span><detail> đăng ký học</detail></span></div>
        </div>
            <!--end rating-->

            <span class="background-detail">
            <span class="wrap-position">
                                    <div class="inner">
                        <a href="https://kyna.vn/content-marketing" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                        <a href="https://kyna.vn/content-marketing" class="view-detail" target="_blank">Xem chi tiết</a>
                    </div>
                            </span>
            </span>
        </div>
        <!--end .img-->

        <div class="content">
            <div class="box-style">
            
                    </div>
            <h4>Content Marketing</h4>
            <span class="author"><i class="fas fa-user-tie"></i>Trần Khánh Tùng</span>
            <span class="major"><i class="fas fa-briefcase"></i>Đồng sáng lập Your Fashion</span>
        </div>

        <!--end .content -->


        <div class="content-mb">
            <b>Trần Khánh Tùng</b><span><b>,</b> Đồng sáng lập Your Fashion</span>
        </div>

        <!--end .content mb -->
        <div class="view-price">
            <ul>
                                            <li class="price"><strong>198.000đ</strong></li>
                                </ul>
                                    </div>
        <!--end .view-price-->


        <div class="view-price-mb">
            <div class="student">
                <div class="number">2624</div>
                <div class="text">học viên</div>
            </div>
            <div class="time">
                <div class="number">6</div>
                <div class="text">giờ</div>
            </div>
            <div class="price">
                <div class="label-price">
                                                        <div class="first">198.000đ</div>
                                            </div>
            </div>
        </div>
                    <!--end .view-price mb-->

                    <a href="https://kyna.vn/content-marketing" class="link-wrap"></a>
        </div>
            <a href="https://kyna.vn/content-marketing" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        <li class="col-xl-4 col-lg-6 col-xs-12 k-box-card" data-key="5">
        <div class="k-box-card-wrap clearfix" data-id="866" data-course-type="1">
        <div class="img">
        <img class="img-fluid img-lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" alt="Tiếng Anh giao tiếp công sở qua điện thoại" title="Tiếng Anh giao tiếp công sở qua điện thoại" lazyImg data-src="https://media-kyna.cdn.vccloud.vn/uploads/courses/866/img/image_url-1594981875.cover-263x147.jpg">
            <div class="label-wrap">
            
            
                                    
                                                                

            </div>
            <!-- end .label-wrap -->
            <!-- <div class="teacher mb">
                <ul>
                    <li>
                        <img class="img-teacher" src="https://media-kyna.cdn.vccloud.vn/uploads/user/300068/img/avatar.crop-35x35.png" alt="Kynalingo - Into the World" title="Kynalingo - Into the World">                </li>
                    <li>
                        Kynalingo - Into the World                </li>
                </ul>
            </div> -->

            <!--start course rating-->

        <div class="rating-box clearfix">
        <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
        <div class="rating-text"><b>5 <i class="icon icon-star"></i></b> <span>(1<detail> đánh giá</detail>)</span></div>
        <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
        <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>707 <span>học viên</span><detail> đăng ký học</detail></span></div>
        </div>
            <!--end rating-->

            <span class="background-detail">
            <span class="wrap-position">
                                    <div class="inner">
                        <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" data-ajax data-toggle="popup" data-target="#modal">Xem nhanh</a>
                        <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="view-detail" target="_blank">Xem chi tiết</a>
                    </div>
                            </span>
            </span>
        </div>
        <!--end .img-->

        <div class="content">
            <div class="box-style">
            
                    </div>
            <h4>Tiếng Anh giao tiếp công sở qua điện thoại</h4>
            <span class="author"><i class="fas fa-user-tie"></i>Kynalingo - Into the World</span>
            <span class="major"><i class="fas fa-briefcase"></i>Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
        </div>

        <!--end .content -->


        <div class="content-mb">
            <b>Kynalingo - Into the World</b><span><b>,</b> Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
        </div>

        <!--end .content mb -->
        <div class="view-price">
            <ul>
                                            <li class="price"><strong>298.000đ</strong></li>
                                </ul>
                                    </div>
        <!--end .view-price-->


        <div class="view-price-mb">
            <div class="student">
                <div class="number">707</div>
                <div class="text">học viên</div>
            </div>
            <div class="time">
                <div class="number">3</div>
                <div class="text">giờ</div>
            </div>
            <div class="price">
                <div class="label-price">
                                                        <div class="first">298.000đ</div>
                                            </div>
            </div>
        </div>
                    <!--end .view-price mb-->

                    <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="link-wrap"></a>
        </div>
            <a href="https://kyna.vn/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="card-popup"></a>
        <!--end .wrap-->
        </li>
        </ul>            
        </div>
        </section>
        <nav id="pager-container">
            <ul class="pagination"><li class="prev disabled"><span>  </span></li>
                    <li class="active"><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=1" data-page="0">1</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=2" data-page="1">2</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=3" data-page="2">3</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=4" data-page="3">4</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=5" data-page="4">5</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=6" data-page="5">6</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=7" data-page="6">7</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=8" data-page="7">8</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=9" data-page="8">9</a></li>
                    <li><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=10" data-page="9">10</a></li>
                    <li class="next"><a href="https://kyna.vn/danh-sach-khoa-hoc?utm_source=kyna.site&amp;utm_medium=homepage_newmenu&amp;page=2" data-page="1">></a></li>
                </ul>
        </nav>
    </div>
    </div>
</div>
</template>
<script>
    import Header from "@/Views/Main/Header.vue";
    export default {  
        components: {
            'Header':Header,
        },
        data(){
        return{           
              status:'',
         }
        },
        beforeCreate() {
          this.$store.dispatch('category/getmenudetail', this.$route.params.id);
          this.$store.dispatch('course/getcountcourse', this.$route.params.id);
          this.$store.dispatch('course/getcoursebycategory', this.$route.params.id);
        },
        computed: {
            categorydetail () {return this.$store.state.category.categorydetail;     },
            getcountcourse (){return this.$store.state.course.countcourse;  },
            getcoursebycategory(){return this.$store.state.course.courses;}
        },  
    }
</script>
   
<style scoped lang="scss">
.view-price__flash-sale {
        position: absolute;
    }

    .view-price__flash-sale .old-price {
        position: relative;
    }

    .view-price__flash-sale .in-flash {
        left: -10px;
        text-decoration: line-through;
    }

    .view-price__flash-sale .new-price::before {
        content: url("https://media-kyna.cdn.vccloud.vn/img/flash-sale/flash-icon.png");
        position: relative;
        top: 2px;
    }

    .view-price__flash-sale .new-price {
        position: relative;
        top: 5px;
        left: 0px;
        color: #ff293f;
        font-size: 18px;

    }

    .clock-flash-sale {
        margin-top: 10px !important;
    }

    @media only screen and (max-width: 540px) {
        .view-price-mb {
            padding: 10px 0 25px !important;
        }

        .clock-flash-sale-text {
            position: absolute;
            left: 10px;
            bottom: 55px;
        }
    }

    .k-box-card-list .k-box-card .k-box-card-wrap {
        border: 1px solid #ddd;
    }
    
    h3.mobile{
        display: none !important;
        font-weight: bold;
    }
    
    
    .k-box-card-list .k-box-card .k-box-card-wrap {

    }
    #best-seller-courses div.hr {
        border: 1px solid #ddd !important;
        margin-bottom: 25px !important;
    }
    .best-seller-categories-container{
        margin-top: 1.3rem !important;
    }
    
            
    #best-seller-courses h2 {
        display: block;
        color: #50ad4e;
        font-size: 18px;
        padding-left: 15px;
        font-weight: bold;
    }
    
    
    @media (max-width: 767px) {
    
        #banner-campaign-category h3 {
            display: block;
            font-weight: bold;
            padding-left: 15px;
        }
    
        .hot-category .img {
            width: 100% !important;
            box-shadow: none !important;
        }
        
        .k-listing-content span.menu-heading {
            margin-top: -11px !important;
        }
    
        
        .slick-dotted.slick-slider {
            margin-bottom: 5px !important;
        }
    
        .slick-slider {
            margin-top: 0 !important;
        }
    
        #banner-campaign-category .sm-banner {
            padding-bottom: 15px;
            display: none;
        }
        
        .hot-category {
            border: 0px solid #ddd !important;
        }
    
        #hot-courses .box{
            margin: 10px;
        }
    
        .breadcrumb-container {
            display: none;
        }
        
        .best-seller-categories-container   
            .col-xl-4, 
            .col-lg-6,
            .col-xs-6
        {
            padding: 0px !important;    
        }
        
        .slick-slide.k-box-card-list{
             padding-bottom: 0 !important;
        }
        h3.mobile{
            display: block !important;
            font-weight: bold;
            padding-left: 1px;
            color: #50ad4e;
        }
        
        .slick-dots {
            position: absolute;
            bottom: 5px;
         }
    
        .breadcrumb-container {
            margin-top: 67px;
            background-color: #fafafa;
        }
        
         .slick-dots li button:before {
            font-size: 10px !important;
            line-height: 25px;
        }
        
        .best-seller-categories-container {
            margin-top: 1px !important;
        }
        .best-seller-categories-container {
            margin-top: 1px !important;
        }
        
        .hot-category {
            padding: 5px !important;
        }
        
        #best-seller-courses h2 {
            display: block;
            color: #50ad4e;
            font-size: 20px;
            padding-left: 15px;
        }
        #best-seller-courses div.hr {
            margin-top: 20px !important;
            margin-left: 3.5%;
            width: 93%;
           
        }
        
        .hot-category .name {
            font-size: unset !important;
            
        }

    }
    #k-listing {
  
    }

    #hot-courses h3 {
        display: none;
    }
    #hot-courses{
        margin-bottom: -15px;
    }
    @media (min-width: 768px) {
        #hot-courses h3 {
            display: block;
            color: #50ad4e;
            font-size: 18px;
            padding-left: 15px;
            padding-right: 14px;
            padding-bottom: 0;
        }


    }
    


    div.hr {
        width: 96%;
        border-bottom-style: solid;
        border-bottom-width: initial;
        border-color: #aab2bd;
        margin-top: -18px;
        margin-bottom: 40px;
        margin-left: 2%
    }

    .hot-category .name {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
        font-size: large;
        font-weight: bolder;
        color: #FFFFFF;
        height: 100%;
    }
    
    .hot-category .name span{
            position: absolute;
            width: 94%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 2.5%;
    }
       
    
    .hot-category:hover .overlay {
        width:100%;
        height:100%;
        position:absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color:#000;
        opacity:0.2;
        border-radius:1px;
    }
    @media(max-width: 425px){
        .hot-category{
            position: unset !important;
            }
        #w2{
            padding: 0 12px;
        }
         .w3{
            padding: 0 12px;
        }
    }
    #w2{
        
            margin-bottom: 20px;
    }
    .w3{
        
            margin-bottom: 20px;
    }
    
    k-box-card-wrap.k-box-card-wrap-hot{
        
    }
.icon-filter{
    margin-top: 34px;
}
.custom-control.custom-checkbox {
    margin-top: 17px;
}
@media all and(max-width: 374px) and (min-width:320px) { 

}
@media all and(max-width: 576px) { 
        .icon-filter {
            margin-bottom: 10px;
        }
        .custom-control.custom-checkbox {
            margin-bottom: 20px;
        }
        .icon-filter-1 {
            margin-top: -12px;
        }
}
// Extra large devices (large desktops, 1200px and up)
@media all and (min-width:1200px ) { 
    
}
</style>