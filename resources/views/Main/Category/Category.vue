<template>
    <div class="category">
        <b-container>
            <b-row>
                <b-col md="12" lg="12">
                    <div class="filter-category">
                       <b-row>
                            <b-col md="6" lg="6">
                               <b-row>
                                    <b-col md="3" lg="3">
                                        <div class="icon-filter">
                                           <span><i class="fa fa-filter"></i></span>Bộ lọc:
                                        </div>
                                    </b-col>
                                    <b-col md="4" lg="4">
                                        <b-dropdown id="dropdown-1" text="Dưới 3 tiếng" class="m-md-2">
                                            <b-dropdown-item>First Action</b-dropdown-item>
                                            <b-dropdown-item>Second Action</b-dropdown-item>
                                            <b-dropdown-item>Third Action</b-dropdown-item>
                                        </b-dropdown>
                                    </b-col>
                                    <b-col md="4" lg="4">
                                        <b-dropdown id="dropdown-1" text="Theo trình độ" class="m-md-2">
                                            <b-dropdown-item>First Action</b-dropdown-item>
                                            <b-dropdown-item>Second Action</b-dropdown-item>
                                            <b-dropdown-item>Third Action</b-dropdown-item>
                                        </b-dropdown>
                                    </b-col>
                               </b-row>
                            </b-col>
                            <b-col md="5" offset="1" lg="5">
                                <b-col md="12" lg="12">
                                   <b-row>
                                        <b-col md="5" lg="5">
                                            <div class="icon-filter">
                                              <span><i class="fa fa-list" style="margin-right:5px;margin-left: 20px;"></i>Sắp xếp:</span>
                                            </div>                                      
                                        </b-col>
                                        <b-col md="7" lg="7">
                                            <b-dropdown id="dropdown-1" text="Nổi bật" class="m-md-2">
                                                <b-dropdown-item>First Action</b-dropdown-item>
                                                <b-dropdown-item>Second Action</b-dropdown-item>
                                                <b-dropdown-item>Third Action</b-dropdown-item>
                                            </b-dropdown>
                                        </b-col>
                                   </b-row>
                                </b-col>
                            </b-col>
                       </b-row>
                    </div>
                </b-col>
                <b-col md="12">
                    <b-container>
                        <div class="list-cour">
                            <b-row>
                            <b-col md="3" lg="3">
                                <b-col md="12" lg="12">
                                    <div class="menu-list">
                                        <b-col md="12" lg="12">
                                            <p class="ft-title">SALE - CSKH</p>
                                        </b-col>
                                        <b-col md="12" lg="12">
                                            <p><a href="">Bán Hàng</a></p>
                                            <p><a href="">Chăm Sóc Khách Hàng</a></p>
                                            <p><a href="">Telesales</a></p>
                                        </b-col>
                                        <b-col md="12" lg="12">
                                            <p class="filter-all-ca"><a href="" >Xem Các Danh Sách Khác</a></p>
                                        </b-col>
                                    </div>
                                </b-col>
                                    <b-col md="12" lg="12">
                                    <div class="menu-list">
                                        <b-col md="12" lg="12">
                                            <p  class="ft-title">Chủ Đề Đang Hot</p>
                                        </b-col>
                                        <b-col md="12" lg="12">
                                            <span class="keyword-a">Tiếng Anh</span>
                                            <span class="keyword-a">Bán hàng Nước</span>    
                                        </b-col>
                                    </div>
                                </b-col>                               
                            </b-col>
                            <b-col md="9" lg="9">
                                <div class="list-course" >
                                    <b-row>
                                        <b-col md="12" lg="12">
                                            <div class="name-cateogory">                                         
                                                <p>16 Khóa học <span style="color:green">Bán Hàng</span> </p>
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col md="4" lg="4">
                                            <div class="card-course">
                                                <b-col md="12" lg="12">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="user-course">
                                                        <span class="count-video">
                                                            <i class="fa fa-book"></i><span>34 (7)</span>
                                                        </span>
                                                        <span class="star">
                                                        <i class="fa fa-star"></i><span>3.4</span>
                                                        </span>                                              
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12" style="border: 1px solid #a8a8a8;">
                                                    <p class="title-n">TeleSale Chuyên Môn Cho Lĩnh Vực Giáo Dục</p>
                                                    <p class="title-m"><i class="fas fa-user"></i>Trần Quang Minh</p>
                                                    <p class="title-m"><i class="fas fa-briefcase"></i>Giảng Viên</p>
                                                    <p class="title-money">500.000đ</p>
                                                </b-col>
                                            </div>
                                        </b-col>
                                         <b-col md="4" lg="4">
                                            <div class="card-course">
                                                <b-col md="12" lg="12">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="user-course">
                                                        <span class="count-video">
                                                            <i class="fa fa-book"></i><span>34 (7)</span>
                                                        </span>
                                                        <span class="star">
                                                        <i class="fa fa-star"></i><span>3.4</span>
                                                        </span>                                              
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12" style="border: 1px solid #a8a8a8;">
                                                    <p class="title-n">TeleSale Chuyên Môn Cho Lĩnh Vực Giáo Dục</p>
                                                    <p class="title-m"><i class="fas fa-user"></i>Trần Quang Minh</p>
                                                    <p class="title-m"><i class="fas fa-briefcase"></i>Giảng Viên</p>
                                                    <p class="title-money">500.000đ</p>
                                                </b-col>
                                            </div>
                                        </b-col>
                                         <b-col md="4" lg="4">
                                            <div class="card-course">
                                                <b-col md="12" lg="12">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="user-course">
                                                        <span class="count-video">
                                                            <i class="fa fa-book"></i><span>34 (7)</span>
                                                        </span>
                                                        <span class="star">
                                                        <i class="fa fa-star"></i><span>3.4</span>
                                                        </span>                                              
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12" style="border: 1px solid #a8a8a8;">
                                                    <p class="title-n">TeleSale Chuyên Môn Cho Lĩnh Vực Giáo Dục</p>
                                                    <p class="title-m"><i class="fas fa-user"></i>Trần Quang Minh</p>
                                                    <p class="title-m"><i class="fas fa-briefcase"></i>Giảng Viên</p>
                                                    <p class="title-money">500.000đ</p>
                                                </b-col>
                                            </div>
                                        </b-col>
                                         <b-col md="4" lg="12">
                                            <div class="card-course">
                                                <b-col md="12" lg="12">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                    <div class="user-course">
                                                        <span class="count-video">
                                                            <i class="fa fa-book"></i><span>34 (7)</span>
                                                        </span>
                                                        <span class="star">
                                                        <i class="fa fa-star"></i><span>3.4</span>
                                                        </span>                                              
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12"  style="border: 1px solid #a8a8a8;">
                                                    <p class="title-n">TeleSale Chuyên Môn Cho Lĩnh Vực Giáo Dục</p>
                                                    <p class="title-m"><i class="fas fa-user"></i>Trần Quang Minh</p>
                                                    <p class="title-m"><i class="fas fa-briefcase"></i>Giảng Viên</p>
                                                    <p class="title-money">500.000đ</p>
                                                </b-col>
                                            </div>
                                        </b-col>
                                         <b-col md="4" lg="4">
                                            <div class="card-course">
                                                <b-col md="12" lg="12">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="user-course">
                                                        <span class="count-video">
                                                            <i class="fa fa-book"></i><span>34 (7)</span>
                                                        </span>
                                                        <span class="star">
                                                        <i class="fa fa-star"></i><span>3.4</span>
                                                        </span>                                              
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12" style="border: 1px solid #a8a8a8;">
                                                    <p class="title-n">TeleSale Chuyên Môn Cho Lĩnh Vực Giáo Dục</p>
                                                    <p class="title-m"><i class="fas fa-user"></i>Trần Quang Minh</p>
                                                    <p class="title-m"><i class="fas fa-briefcase"></i>Giảng Viên</p>
                                                    <p class="title-money">500.000đ</p>
                                                </b-col>
                                            </div>
                                        </b-col>
                                    </b-row>
                                </div>
                            </b-col>
                            </b-row>
                        </div>
                    </b-container>
                </b-col>
            </b-row>
        </b-container>

    </div>
</template>