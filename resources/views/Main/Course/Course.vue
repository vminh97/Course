<template>
    <div class="course-detail">
        <div class="introduce-course">
            <b-container>
                <b-row>
                    <b-col md="9">
                        <div class="box-introduce">
                            <b-row>
                                <b-col md="12">
                                    <p class="title-focus"> Lập trình web chuyên nghiệp với PHP </p>
                                </b-col>
                                <b-col md="12">
                                    <p class="title-nameteacher">Lưu Trần Quang Hải</p>
                                    <p class="positon-nameteacher">Giảng viên cao cấp TalentPool</p>
                                    <p class="moreinfo-nameteacher">Giảng viên Trần Thanh Phương Nghi (Annie Trần),
                                        Cử nhân Tài chính Ngân hàng, Cử nhân Tâm lý Giáo dục,
                                         Á Quân Cuộc thi Tìm kiếm và Phát triển Diễn giả</p>
                                </b-col>
                                <b-col md="12">
                                    <b-row>
                                        <b-col md="4">
                                            <p><i class="fa fa-graduation-cap"></i>Cơ bản</p>
                                        </b-col>
                                        <b-col md="4">
                                            <p><i class="fa fa-thumbs-up"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span>3.4</span></p>
                                        </b-col>                                      
                                        <b-col md="4">
                                            <p><i class="fas fa-torah"></i>Cấp chứng chỉ hoàn thành</p>
                                        </b-col>
                                    </b-row>
                                </b-col>
                            </b-row>
                        </div>
                    </b-col>
                    <b-col md="3">
                        <div class="card-box-title">
                            <div class="title-1">
                                <b-row>
                                    <b-col md="12">
                                        <span class="price-course"> 200.000đ</span>
                                    </b-col>
                                    <b-col md="12">
                                        <div class="manipulation">
                                            <b-row>
                                                <b-col md="12">
                                                     <input type="button" value="Thêm Khóa Học" class="addcourse">
                                                </b-col>
                                                <b-col md="12">
                                                     <input type="button" value="Thêm Vào Giỏ Hàng" class="addcart">
                                                </b-col>
                                            </b-row>                                
                                        </div>
                                    </b-col>
                                    <b-col md="12">
                                        <div class="contact">
                                            <p><a href=""><i class="fas fa-phone"></i></a>Tư Vấn Thêm</p>
                                        </div>
                                    </b-col>
                                    <b-col md="12">
                                    
                                    </b-col>
                                </b-row>  
                            </div>
                            <div class="title-2">
                                <b-row>
                                    <b-col md="12">
                                        <div class="ttkh">
                                            <p class="name">Thông tin khóa học</p>
                                        </div>
                                    </b-col>
                                    <b-col md="12">
                                         <div class="ttct">
                                             <b-row>
                                                 <b-col md="12">
                                                      <p><i class="fas fa-user-clock ts"></i> 4 học viên</p>
                                                 </b-col>
                                                 <b-col md="12">
                                                      <p><i class="far fa-clock ts"></i> 4 học viên</p>
                                                 </b-col>
                                                 <b-col md="12">
                                                      <p><i class="fas fa-book-open ts"></i> 9 bài học</p>
                                                 </b-col>
                                                 <b-col md="12">
                                                      <p><i class="far fa-clipboard ts"></i> 1 bài tập</p>
                                                 </b-col>
                                                 <b-col md="12">
                                                      <p><i class="fas fa-download ts"></i> 2 tài liệu</p>
                                                 </b-col>
                                                 <b-col md="12">
                                                     <p><i class="fas fa-calculator ts"></i>Cập nhật 25/2/2021</p>
                                                 </b-col>
                                             </b-row>
                                             
                                         </div>
                                    </b-col>
                                </b-row>
                            </div>
  
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </div>
        <div class="content-course">
            <b-container>
                <div class="row">
                    <b-col md="9">
                        <div class="tab-content">
                            <b-tabs content-class="mt-3">
                                <b-tab title="Bạn Sẽ Học Được Gì?" active>
                                    <p>Khóa học "Lập trình web chuyên nghiệp với PHP - Level 2", giảng viên Lưu Trường Hải Lân (ZendVN) sẽ giới thiệu đến bạn các thành phần mở rộng trong PHP như:
                                    Sử dụng biểu thức chính quy để trích lọc dữ liệu, kiểm tra dữ liệu từ phía người dùng, lấy tin tự động từ các website khác
                                    Làm việc và thao tác với File một cách dễ dàng và giải quyết bài toán upload tập tin
                                    Xây dựng hàm đệ quy để giải quyết các bài toán: hiển thị menu (category) đa cấp, liệt kê cây thư mục
                                    Sử dụng session, cookie trong ứng dụng web
                                    Sử dụng SimpleXML và DomDocument để thao tác và làm việc với tập tin XML
                                    Nắm vững các kiến thức về lập trình hướng đối tượng và biết cách xây dựng các class dùng cho công việc thực tế
                                    Hướng dẫn các vấn đề mở rộng khác khi xây dựng một website
                                    </p>
                                </b-tab>
                                <b-tab title="Giới thiệu">
                                    <p>Với các ưu điểm như miễn phí, dễ đọc, thao tác tốt với các hệ quản trị cơ sở dữ liệu, cộng đồng sử dụng rộng rãi, thư viện phong phú. PHP ngày càng phát triển và việc học PHP đã trở nên đặc biệt cần thiết đối với bất kỳ lập trình viên nào.

                                    Sau khi kết thúc khóa học Lập trình web chuyên nghiệp với PHP - Level 1 với những kiến thức căn bản cần thiết. Tiếp tục với khóa học Lập trình web chuyên nghiệp với PHP - Level 2, giảng viên Lưu Trường Hải Lân (ZendVN) sẽ giới thiệu đến bạn các thành phần mở rộng trong PHP như:

                                    Sử dụng biểu thức chính quy để trích lọc dữ liệu, kiểm tra dữ liệu từ phía người dùng, lấy tin tự động từ các website khác
                                    Làm việc và thao tác với File một cách dễ dàng và giải quyết bài toán upload tập tin
                                    Xây dựng hàm đệ quy để giải quyết các bài toán: hiển thị menu (category) đa cấp, liệt kê cây thư mục
                                    Sử dụng session, cookie trong ứng dụng web
                                    Sử dụng SimpleXML và DomDocument để thao tác và làm việc với tập tin XML
                                    Nắm vững các kiến thức về lập trình hướng đối tượng và biết cách xây dựng các class dùng cho công việc thực tế
                                    Hướng dẫn các vấn đề mở rộng khác khi xây dựng một website: xử lý hình ảnh, gửi mail, rss, editor, captcha, detetct mobile, cache. Các vấn đề này được trình bày thông qua việc giới thiệu các class, giúp học viên tiếp cận với nhiều class được hỗ trợ sẵn và cách đọc API để sử dụng một class bất kỳ
                                    ZendVN bảo đảm đây là một trong những khóa học PHP có chất lượng tốt nhất hiện nay ở Việt Nam. Khóa học PHP này được dựa trên những kinh nghiệm thực tế trong quá trình làm việc của ZendVN với các dự án lớn của nước ngoài.
                                    </p>
                                </b-tab>
                                <b-tab title="Nội Dung Khóa Học">
                                    <p>I'm the first tab</p>
                                    <div class="accordion" role="tablist">
                                        <b-card no-body class="mb-1">
                                            <b-card-header header-tag="header" class="p-1" role="tab">
                                                <b-button block v-b-toggle.accordion-1 variant="info">Phần 0</b-button>
                                            </b-card-header>
                                            <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                                                <b-card-body>
                                                    <b-card-text>
                                                        <p><i class="fas fa-play-circle"></i>video 1</p>
                                                        <p><i class="fas fa-play-circle"></i>video 2</p>   
                                                        <p><i class="fas fa-play-circle"></i>video 3</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 4</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 5</p> 
                                                    </b-card-text>
                                                </b-card-body>
                                            </b-collapse>
                                        </b-card>
                                        <b-card no-body class="mb-1">
                                            <b-card-header header-tag="header" class="p-1" role="tab">
                                                <b-button block v-b-toggle.accordion-2 variant="info">Phần 1</b-button>
                                            </b-card-header>
                                            <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                                                <b-card-body>
                                                    <b-card-text>
                                                        <p><i class="fas fa-play-circle"></i>video 1</p>
                                                        <p><i class="fas fa-play-circle"></i>video 2</p>   
                                                        <p><i class="fas fa-play-circle"></i>video 3</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 4</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 5</p> 
                                                    </b-card-text>
                                                </b-card-body>
                                            </b-collapse>
                                        </b-card>

                                        <b-card no-body class="mb-1">
                                            <b-card-header header-tag="header" class="p-1" role="tab">
                                                <b-button block v-b-toggle.accordion-3 variant="info">Phần 2</b-button>
                                            </b-card-header>
                                            <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                                                <b-card-body>
                                                    <b-card-text>
                                                        <p><i class="fas fa-play-circle"></i>video 1</p>
                                                        <p><i class="fas fa-play-circle"></i>video 2</p>   
                                                        <p><i class="fas fa-play-circle"></i>video 3</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 4</p> 
                                                        <p><i class="fas fa-play-circle"></i>video 5</p> 
                                                    </b-card-text>
                                                </b-card-body>
                                            </b-collapse>
                                        </b-card>
                                    </div>
                                </b-tab>
                                <b-tab title="Đánh Giá">
                                    <b-container>
                                        <b-row>
                                            <b-col md="12">
                                                <p>Đánh giá từ học viên</p>
                                            </b-col>
                                            <b-col md="12">
                                               <b-row>
                                                   <b-col md="2">

                                                   </b-col>
                                                   <b-col md="10">
                                                       <b-container>
                                                            <b-row>
                                                                <b-col md="8">
                                                                    <b-row>
                                                                        <b-col md="12">
                                                                             <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                                                                        </b-col>
                                                                        <b-col md="12">
                                                                             <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                                                                        </b-col>
                                                                        <b-col md="12">
                                                                             <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                                                                        </b-col>
                                                                        <b-col md="12">
                                                                             <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                                                                        </b-col>
                                                                        <b-col md="12">
                                                                             <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                                                                        </b-col>
                                                                    </b-row>
                                                                </b-col>
                                                                <b-col md="1">
                                                                    <p>50%</p>
                                                                    <p>50%</p>
                                                                    <p>50%</p>
                                                                    <p>50%</p>
                                                                    <p>50%</p>
                                                                </b-col>
                                                                <b-col md="3">
                                                                    <div class="row">
                                                                        <b-col md="12">
                                                                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                                        </b-col>
                                                                    </div>
                                                                </b-col>
                                                            </b-row>
                                                       </b-container>                                                     
                                                   </b-col>
                                               </b-row>
                                            </b-col>
                                        </b-row>
                                    </b-container>
                                   

                                </b-tab>
                            </b-tabs>
                        </div>
                    </b-col>
                </div>
            </b-container>
        </div>
        <div class="related-course">
            <b-container>
                <b-row>
                    <b-col md="12">
                           <h3>Khóa Học Liên Quan</h3>
                    </b-col>
                    <b-col md="9">
                           <b-row>
                                 <b-col md="12">
                                        <div class="relad-cour">
                                            <b-row>
                                                    <b-col md="2">
                                                        <img src="" alt="">
                                                    </b-col>
                                                    <b-col md="4">
                                                        <b-row>
                                                            <b-col md="12">
                                                                <p class="name">Kỹ Năng Bán Bảo Hiểm Nhân Thọ Chuyên Nghiệp </p>
                                                            </b-col>
                                                            <b-col md="12">
                                                                <b-row>
                                                                    <b-col md="6">
                                                                        <p><i class="far fa-clock ts" ></i>4 giờ</p>
                                                                    </b-col>
                                                                    <b-col md="6">
                                                                        <p><i class="fas fa-book-open ts"></i> 23 giờ học</p>
                                                                    </b-col>
                                                                </b-row>
                                                            </b-col>
                                                            </b-row>
                                                    </b-col>
                                                    <b-col md="3">
                                                        <p>5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </b-col>
                                                    <b-col md="3">
                                                            <p class="pri-course">290.000đ</p>
                                                    </b-col>
                                             </b-row>                                        
                                        </div>   
                                </b-col>
                                 <b-col md="12">
                                        <div class="relad-cour">
                                            <b-row>
                                                    <b-col md="2">
                                                        <img src="" alt="">
                                                    </b-col>
                                                    <b-col md="4">
                                                        <b-row>
                                                            <b-col md="12">
                                                                <p class="name">Kỹ Năng Bán Bảo Hiểm Nhân Thọ Chuyên Nghiệp </p>
                                                            </b-col>
                                                            <b-col md="12">
                                                                <b-row>
                                                                    <b-col md="6">
                                                                        <p><i class="far fa-clock ts" ></i>4 giờ</p>
                                                                    </b-col>
                                                                    <b-col md="6">
                                                                        <p><i class="fas fa-book-open ts"></i> 23 giờ học</p>
                                                                    </b-col>
                                                                </b-row>
                                                            </b-col>
                                                            </b-row>
                                                    </b-col>
                                                    <b-col md="3">
                                                        <p>5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </b-col>
                                                    <b-col md="3">
                                                            <p class="pri-course">290.000đ</p>
                                                    </b-col>
                                             </b-row>                                        
                                        </div>   
                                </b-col>
                                 <b-col md="12">
                                        <div class="relad-cour">
                                            <b-row>
                                                    <b-col md="2">
                                                        <img src="" alt="">
                                                    </b-col>
                                                    <b-col md="4">
                                                        <b-row>
                                                            <b-col md="12">
                                                                <p class="name">Kỹ Năng Bán Bảo Hiểm Nhân Thọ Chuyên Nghiệp </p>
                                                            </b-col>
                                                            <b-col md="12">
                                                                <b-row>
                                                                    <b-col md="6">
                                                                        <p><i class="far fa-clock ts" ></i>4 giờ</p>
                                                                    </b-col>
                                                                    <b-col md="6">
                                                                        <p><i class="fas fa-book-open ts"></i> 23 giờ học</p>
                                                                    </b-col>
                                                                </b-row>
                                                            </b-col>
                                                            </b-row>
                                                    </b-col>
                                                    <b-col md="3">
                                                        <p>5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </b-col>
                                                    <b-col md="3">
                                                            <p class="pri-course">290.000đ</p>
                                                    </b-col>
                                             </b-row>                                        
                                        </div>   
                                </b-col>                          
                           </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>
<style>

</style>
<script>
export default {
    data() {
      return {
        value: 33.333333333,
        max: 50
      }
      
    },
    
}
</script>