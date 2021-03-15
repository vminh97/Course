<template>
    <div class="cart">
        <b-container>
            <b-row>
                <b-col md="12" lg="12">
                   <div class="cart-1">
                        <b-row>
                            <b-col md="1" lg="1">
                                <i class="fas fa-cart-plus fa-4x"></i>
                            </b-col>
                            <b-col md="4" lg="4">
                                <b-row>
                                    <b-col md="12" lg="12">
                                        <p class="title-cart">Thông Tin Giỏ Hàng</p>
                                    </b-col>
                                    <b-col md="12" lg="12">
                                        <p class="count-cart-course"><span class="hl">1</span> Khóa Học <span class="hl2">390.000 đ</span></p>
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col md="3" lg="3" offset="4">
                                <router-link to="/">
                                        <input type="button" value="Tiếp Tục Thanh Toán"  class="continue-cart">
                                </router-link>                             
                            </b-col>
                        </b-row>
                   </div>
                </b-col>
                <b-col md="12" lg="12">
                    <b-container>
                        <div class="course-cart">
                            <b-row>
                                <b-col md="2" lg="2">
                                <img src="" alt="" class="image-cart-course">
                                </b-col>
                                <b-col md="4" lg="4">
                                    <b-row>
                                        <b-col md="12" lg="12">
                                            <p class="name-cart-course">Thiết Kế Và Tối Ưu Website cho Meteker</p>
                                        </b-col>
                                        <b-col md="12" lg="12">
                                            <p class="action-delete"><i class="fas fa-trash-alt"></i> Xóa Khóa Học</p>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col md="2" lg="2" >
                                    <p class="money-first">390.000 đ</p>
                                </b-col>
                                <b-col md="2" lg="2" >
                                    <p class="money-discount">0 đ</p>
                                </b-col>
                                <b-col md="2" lg="2" >
                                    <p class="money-finally">390.000 đ</p>
                                </b-col>
                            </b-row>
                        </div>
                    </b-container>                  
                </b-col>
                <b-col md="12" lg="12">
                    <b-container>
                        <div class="box-gray">
                            <b-row>                           
                                    <b-col md="4" lg="4">
                                    <p class="sum-money">Tổng Thành Tiền</p>
                                    </b-col>
                                    <b-col md="2" lg="2" offset="2">
                                            <p class="money-first2">390.000 đ</p>
                                    </b-col>
                                    <b-col md="2" lg="2">
                                            <p class="money-discount2">0 đ</p>
                                    </b-col>
                                    <b-col md="2" lg="2">
                                            <p class="money-finally2">390.000 đ</p>
                                    </b-col>
                            </b-row>
                        </div>
                    </b-container>
                </b-col>
                <b-col md="12" lg="12">                  
                        <b-container>
                            <div class="title-cl">
                                <b-row>
                                    <b-col md="12" lg="12">
                                        <p class="title-hl"><i class="fas fa-money-bill-wave"></i> Các Phương Thức Thanh Toán Linh Hoạt</p>
                                        <p class="title-hl"><i class="fas fa-history"></i> Nội Dung Học Liên Tục Và Xuyên Suốt</p>
                                    </b-col>
                                </b-row>
                            </div>
                        </b-container>
                </b-col>
                <b-col md="12" lg="12">
                    <relatedCourse />
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
import RelatedCourse from '../Course/RelatedCourse.vue'
export default {
  components: { 
      'RelatedCourse':RelatedCourse 
      },
    
}
</script>
<style lang="scss" scoped>
@mixin green()
{
    color:#439141;
}
@mixin orange()
{
    color:#fb6a00;
}
@mixin spana{
    font-size: 27px;
    font-weight: 700;
    @include orange();
}
.box-gray{
    padding: 10px 15px;
    background-color: #fafafa;
    border: 1px solid #fafafa;
    border-radius: 10px;
}
.cart-1 {
    margin-top: 35px;
}
i.fas.fa-cart-plus {
    @include green();
}
p.title-cart {
    font-size: 13px;
    margin-top: 16px;
}

p.count-cart-course {
    margin-top: -24px;
    font-size: 27px
}
span.hl {
    font-weight: 700;
   @include green();
}
p.money-first2,p.money-discount2{
    line-height: 85px;
}
span.hl2{
    @include spana();
}
p.sum-money,p.money-finally2{
     @include spana();
    line-height: 85px;
}
p.money-finally{
    font-weight: 700;
   @include orange();
}
input.continue-cart {
    width: 250px;
    height: 55px;
    margin-top: 6px;
    background:#fb6a00 ;
    color: white;
    outline: none;
    font-size: 18px;
    font-weight: 500;
    border: 1px solid white;
    border-radius: 10px;
    font-weight: bold;
    margin-right: 10px;
    opacity: 0.8;
    &:hover{
        background: #d37533;
        opacity: 1;
    }
}
.course-cart {
    border: 1px solid #a8a8a8;
    border-radius: 10px;
    padding-bottom: 10px;
    padding-top: 15px;
    &:hover{
         box-shadow: 0 6px 20px 0 rgba(40,44,53,.15), 0 5px 5px 0 rgba(40,44,53,.15);
    }
}
.title-cl{
    border: 1px solid #a8a8a8;
    border-radius: 10px;
    padding-bottom: 10px;
    padding-top: 15px;
    margin-top: 15px;
    margin-bottom: 15px;
}
p{
    font-size: 17px;
}
p.title-hl {
    margin-left: 15px;
    i{
        @include green();
        margin-right: 22px;
        width: 20px;
    }
}
p.name-cart-course {
    font-weight: 500;
}
p.money-first,p.money-first {
    text-decoration: line-through;
}
</style>