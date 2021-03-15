<template>
    <div class="mycourse">
        <b-container>
            <b-row>
                <b-col md="12" lg="12">
                    <b-col md="6" offset="3" lg="6">
                           <b-col md="12" lg="12">
                               <img src="" alt="">
                           </b-col>
                           <b-col md="12" lg="12">
                               <h4>minh trần văn / minhcntt29091997@gmail.com</h4>
                           </b-col>
                           <b-col md="12" lg="12">
                                  <b-row>
                                      <b-col md="4" lg="4" offset="2" >
                                           <input type="button" value="Kích Hoạt COD" class="active" > 
                                      </b-col>
                                      <b-col md="4" lg="4">
                                           <input type="button" value="Chỉnh Sửa" class="cs" > 
                                      </b-col>
                                  </b-row>
                           </b-col>
                           <b-col md="12" lg="12">
                               <b-row>
                                    <b-col md="12" lg="12" class="a1">
                                        <b-row>
                                            <b-col md="4" lg="4">
                                                <h4>Số Khóa Học</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4>Tài Liệu</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4>Câu Hỏi</h4>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                    <b-col md="12" lg="12">
                                        <b-row>
                                            <b-col md="4" lg="4">
                                                <i class="far fa-clipboard fa-4x" ></i>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <i class="far fa-file-alt fa-4x"></i>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <i class="far fa-question-circle fa-4x"></i>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                    <b-col md="12" lg="12">
                                        <b-row>
                                            <b-col md="4" lg="4">
                                                <h4>2</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4>0</h4>
                                            </b-col>
                                            <b-col md="4" lg="4">
                                                <h4 style="margin-left: 19px;">0</h4>
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
                                                                    <b-col md="12" lg="12">
                                                                        <b-container>
                                                                                 <b-row>
                                                                                    <b-col md="6" lg="6">
                                                                                        Điểm Hiệu Quả
                                                                                    </b-col>
                                                                                    <b-col md="3" lg="6" offset="3">
                                                                                        <span>0 %<i class="far fa-question-circle" style="margin-left:2px!important"></i></span>
                                                                                    </b-col>
                                                                                </b-row>
                                                                        </b-container>                                                                     
                                                                    </b-col>
                                                                    <b-col md="12" lg="12">
                                                                        <b-container>
                                                                                <b-row>
                                                                                    <b-col md="12" lg="12">
                                                                                        <b-progress :value="valueprogress" :max="max" class="mb-3"></b-progress>
                                                                                    </b-col>
                                                                                </b-row> 
                                                                        </b-container>                                                                                                                                           
                                                                    </b-col>
                                                                    <b-col md="12" lg="12">
                                                                        <b-row>
                                                                            <b-col md="4" lg="4">
                                                                                <input type="button" value="Bắt Đầu Học" class="active" style="margin-top:0px !important">
                                                                            </b-col>
                                                                            <b-col md="4" lg="4" offset="2">
                                                                                <b-form-rating v-model="value" variant="warning"></b-form-rating>
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
        value:'1',
        max:'100',
        valueprogress:'30',
      }
    }
}
</script>

<style scoped lang="scss">
p.name-t {
    font-size: 13px;
    font-weight: 400;
    margin-top: -7px;
}
p.name-c{
    font-size: 17px;
    font-weight: 600;
    color: #439141;
    line-height: 15px;
}
.a1{
    margin-top: 20px;
}
.col-md-12,.col-lg-12 {
    margin-bottom: 5px;
}
h4 {
    text-align: center;
}
i{
    margin-left: 47px;
}
i.far.fa-clipboard.fa-4x {
    color: #439141;
}
i.far.fa-file-alt.fa-4x {
    color: #fb6a00;
}
i.far.fa-question-circle.fa-4x {
    color: yellow;
}
output {
    border: 1px solid white;
}
.mb-3.progress {
    height: 15px!important;
}
.card-course{
    border: 1px solid #a8a8a8;
    border-radius: 5px;
    &:hover{
             box-shadow: 0 4px 15px 0 rgba(40,44,53,.15), 0 2px 2px 0 rgba(40,44,53,.15);
    }
}
span.b-rating-star.flex-grow-1.b-rating-star-full {
    height: 10px !important;
    margin-right: -5px !important;
    margin-top: -10px !important;
}
span.b-rating-icon {
    height: 10px !important;
    margin-right: -5px !important;
    margin-top: -10px !important;
}
</style>