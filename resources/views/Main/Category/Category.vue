<template>
 <div>
    <Header />    
    <div class="category">
        <b-container>
            <b-row>
                <b-col md="12" lg="12" cols="12">
                    <div class="filter-category">
                       <b-row>
                            <b-col md="6" lg="6" cols="12">
                               <b-row>
                                    <b-col md="4" lg="4" cols="6" >
                                        <div class="icon-filter">
                                           <span><i class="fa fa-filter"></i></span>Bộ lọc:
                                        </div>
                                    </b-col>
                                    <b-col md="4" lg="4" cols="6">
                                        <b-dropdown id="dropdown-1" text="Theo Thời Lượng" class="m-md-2">
                                            <b-dropdown-item>Dưới 3 Tiếng</b-dropdown-item>
                                            <b-dropdown-item>Từ 3- 24 Tiếng</b-dropdown-item>
                                        </b-dropdown>
                                    </b-col>
                                    <b-col md="4" lg="4" cols="6">
                                        <b-dropdown id="dropdown-1" text="Theo trình độ" class="m-md-2">
                                            <b-dropdown-item>Cơ Bản</b-dropdown-item>
                                            <b-dropdown-item>Nâng Cao</b-dropdown-item>
                                            <b-dropdown-item>Chuyên Sâu</b-dropdown-item>
                                        </b-dropdown>
                                    </b-col>
                               </b-row>
                            </b-col>
                            <b-col md="5" offset-md="1" lg="5" cols="12">
                                <b-col md="12" lg="12" cols="12">
                                   <b-row>
                                        <b-col md="3" lg="5" cols="5">
                                            <b-form-checkbox
                                                id="checkbox-1"
                                                v-model="status"
                                                name="checkbox-1"
                                                value="accepted"
                                                unchecked-value="not_accepted"
                                                >
                                                Miễn Phí
                                            </b-form-checkbox>
                                        </b-col>
                                        <b-col md="4" lg="5" class="cs1" cols="6">
                                            <b-dropdown id="dropdown-1" text="Nổi bật" class="m-md-2">
                                                <b-dropdown-item>Mới Nhất</b-dropdown-item>
                                                <b-dropdown-item>Nổi Bật</b-dropdown-item>
                                                <b-dropdown-item>Khuyến Mại</b-dropdown-item>
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
                                            <li>
                                                <!-- <router-link :to="{ name: 'indexcategory',params: {id:categorydetail.id}}"> -->
                                                   {{categorydetail.name_Display}}
                                            </li>
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
                                                <!-- <p>{{countcourse.count}}Khóa học <span style="color:green">Bán Hàng</span> </p> -->
                                            </div>
                                        </b-col>
                                    </b-row>
                                    <b-row>
                                        <b-col md="4" lg="4" cols="12">
                                        <!-- <b-col md="4" lg="4" cols="12"  v-for="co in courses" :key="co.id" > -->
                                            <div class="card-course">
                                                <b-col md="12" lg="12" cols="5">
                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                </b-col>
                                                <b-col md="12" lg="12" cols="7">
                                                    <div class="btn-redirct">
                                                        <input type="button" value="Xem nhanh" class="watchfast">
                                                        <input type="button" value="Xem chi tiết" class="watchdetail">
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12">
                                                    <div class="user-course">
                                                        <b-row>
                                                            <b-col md="6" lg="6">
                                                                <span class="count-video">
                                                                    <i class="fa fa-book"></i><span>34 (7)</span>
                                                                </span>
                                                            </b-col>
                                                            <b-col md="6" lg="6" >
                                                                <span class="star">
                                                                    <i class="fa fa-star"></i><span>3.4</span>
                                                                </span>  
                                                            </b-col>
                                                        </b-row>                                            
                                                    </div>
                                                </b-col>
                                                <b-col md="12" lg="12" style="border-top: 1px solid #a8a8a8;">
                                                    <!-- <p class="title-n">{{co.content_product}}</p> -->
                                                    <p class="title-n">Alo</p>
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