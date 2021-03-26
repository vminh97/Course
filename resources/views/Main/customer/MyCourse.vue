<template>
    <div class="mycourse">
        <b-container>
            <b-row>
                <b-col md="12" lg="12" cols="12">
                    <b-col md="6" offset-lg="3" lg="6" cols="12">
                           <b-col md="12" lg="12" cols="12">
                               <img src="" alt="">
                           </b-col>
                           <b-col md="12" lg="12" cols="12">
                               <h4 class="title-mycourse">minh trần văn / minhcntt29091997@gmail.com</h4>
                           </b-col>
                           <b-col md="12" lg="12" cols="12">
                                  <b-row>
                                      <b-col md="4" lg="4" offset-lg="2" cols="6" >
                                           <input type="button" value="Kích Hoạt COD" class="active" > 
                                      </b-col>
                                      <b-col md="4" lg="4" cols="6">
                                           <input type="button" value="Chỉnh Sửa" class="cs" > 
                                      </b-col>
                                  </b-row>
                           </b-col>
                           <b-col md="12" lg="12">
                               <b-row>
                                    <b-col md="12" lg="12" class="a1">
                                        <b-row>
                                            <b-col md="4" lg="4">
                                                <h4 class="title-count">Số Khóa Học</h4>
                                                <i class="far fa-clipboard fa-4x" ></i>
                                                 <h4 class="count">22</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4 class="title-count">Tài Liệu Học Tập</h4>
                                                <i class="far fa-file-alt fa-4x"></i>
                                                <h4 class="count">20</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4 class="title-count">Câu Hỏi Bài Giảng</h4>
                                                <i class="far fa-question-circle fa-4x"></i>
                                                <h4 class="count">20</h4>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                               </b-row>
                           </b-col>
                    </b-col>
                </b-col>
                <b-col md="12" lg="12">
                    <div>
                        <b-card no-body>
                            <b-tabs card>
                                <b-tab title="Khóa Học" active>
                                    <b-card-text>
                                        <div class="my-list-course">
                                            <b-container>
                                                <b-row>
                                                    <b-col md="4" lg="4">
                                                        <div class="card-course">
                                                            <b-container>
                                                                <b-row>
                                                                    <b-col md="12" lg="12">
                                                                        <img src="" alt="">
                                                                    </b-col>
                                                                    <b-col md="12" lg="12">
                                                                        <div class="ct-my-list-cour">
                                                                            <b-col md="12" lg="12">
                                                                                <p class="name-c">PhotoShop cho thiết kế Web</p>
                                                                            </b-col>
                                                                            <b-col md="12" lg="12">
                                                                                <p class="name-t">Phó Hải Đăng</p>
                                                                            </b-col>
                                                                            <b-col md="12" lg="12">
                                                                                <p class="name-t">Thạc Sĩ Khoa Học Máy Tính</p>
                                                                            </b-col>
                                                                        </div>
                                                                    </b-col>
                                                                    <b-col md="12" lg="12" cols="12">
                                                                        <b-container>
                                                                                 <b-row>
                                                                                    <b-col md="6" lg="6" cols="8">
                                                                                        Điểm Hiệu Quả
                                                                                    </b-col>
                                                                                    <b-col md="3" lg="6" offset-lg="3" cols="4">
                                                                                        <span>0 %<i class="far fa-question-circle" style="margin-left:2px!important"></i></span>
                                                                                    </b-col>
                                                                                </b-row>
                                                                        </b-container>                                                                     
                                                                    </b-col>
                                                                    <b-col md="12" lg="12" class="abc">
                                                                        <b-container>
                                                                                <b-row>
                                                                                    <b-col md="12" lg="12">
                                                                                        <b-progress :value="valueprogress" :max="max" class="mb-3"></b-progress>
                                                                                    </b-col>
                                                                                </b-row> 
                                                                        </b-container>                                                                                                                                           
                                                                    </b-col>
                                                                    <b-col md="12" lg="12" class="bcd">
                                                                        <b-row>
                                                                            <b-col md="4" lg="4" cols="8"  offset-lg="1" offset="2">
                                                                                <input type="button" value="Bắt Đầu Học" class="active" style="margin-top:0px !important">
                                                                            </b-col>
                                                                            <b-col md="4" lg="4" offset-lg="2">
                                                                                 <b-form-rating v-model="value" variant="warning" class="mb-2"></b-form-rating>
                                                                            </b-col>
                                                                        </b-row>
                                                                    </b-col>
                                                                </b-row>
                                                            </b-container>                                                         
                                                        </div>
                                                    </b-col>
                                                   
                                                </b-row>
                                            </b-container>
                                        </div>
                                    </b-card-text>
                                </b-tab>
                                <b-tab title="Tài Liệu">
                                    <b-card-text>Tài Liệu</b-card-text>
                                </b-tab>
                                <b-tab title="Hỏi Giảng Viên">
                                    <b-card-text>Hỏi Giảng Viên</b-card-text>
                                </b-tab>
                                <b-tab title="Thảo Luận">
                                    <b-card-text>Thảo Luận</b-card-text>
                                </b-tab>
                                <b-tab title="Giao Dịch">
                                    <b-card-text>Giao Dịch</b-card-text>
                                </b-tab>
                            </b-tabs>
                        </b-card>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
export default {
    data() {
      return {
        value:'0',
        max:'100',
        valueprogress:'30',
      }
    }
}
</script>

<style scoped lang="scss">
@media all and(max-width: 374px) and (min-width:320px) { 
    .mycourse{   
        input.active{
          margin-left: -10px !important;
        }
        i.fa-clipboard,i.fa-file-alt{
            margin-left: 40% !important;
        }
        i.far.fa-question-circle.fa-4x{
            margin-left: 36% !important;
        }

    }
}
@media all and(max-width: 576px) { 
    .mycourse{
        h4.title-mycourse{
            font-size: 17px;
        }
        input.active{
            width: 115px;
            margin-left: 15%;
        }
        input.cs{
            width: 115px;
            margin-right: 15%;
        }
        i.fa-clipboard,i.fa-file-alt{
            margin-left: 42%;
        }
        i.far.fa-question-circle.fa-4x {
            color: yellow;
            margin-left: 39%;
        }
        .ct-my-list-cour{
            p.name-c,p.name-t {
                text-align: center;
            }
        }
        .abc.col-md-12.col-lg-12 {
            margin-top: -10px;
        }
        .bcd.col-md-12.col-lg-12 {
            margin-top: -10px;
            margin-bottom: 10px;
            input.active{
                margin-bottom: 10px;
            }
            svg.bi-star-fill.b-icon.bi.text-warning {
                margin-top: 58%;
            }
        }
    }
}
// Medium devices (tablets, 768px and up)
@media all and (max-width: 768px) and (min-width:577px ) {
    
 }

// Large devices (desktops, 992px and up)
@media all and (max-width:992px ) and (min-width:769px ) { 
    h4.title-count{
    height: 75px;
    }
    .b-rating {
    text-align: center;
    width: 115px;
    margin-left: -15px;
}
}

// Extra large devices (large desktops, 1200px and up)
@media all and (min-width:1200px ) { 
    h4.title-count{
        height: 75px;
        }
    .b-rating {
    text-align: center;
    width: 115px;
    margin-left: -15px;
    }
}
</style>