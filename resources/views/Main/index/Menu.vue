<template>
    <div class="menu_m">
        <b-container>
            <b-row>
                <b-col md="5" lg="5" cols="12">
                    <span class="menu_m_left" >
                            <Slide>
                                <ul>
                                    <li><i class="fa fa-border-all"></i><a href="#" id="home">Tất cả Khóa Học</a></li>
                                    <li><i class="fa fa-fist-raised "></i><a href="#" id="home">Khóa học combo</a>
                                    </li>
                                    <li><i class="fa fa-universal-access"></i><a href="#" id="home">Sale-Cskh</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-briefcase"></i><a href="#" id="home"><span>Kỹ năng công việc</span></a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-people-arrows"></i><a href="#" id="home">Kỹ năng khác</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-print"></i><a href="#" id="home">Kỹ năng quản trị</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-language"></i><a href="#" id="home">Ngoại ngữ</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-paragraph"></i><a href="#" id="home">Thiết kế đồ họa</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-digital-tachograph"></i><a href="#" id="home">Phần mềm</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-layer-group"></i><a href="#" id="home">Phát triển cá nhân</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-funnel-dollar"></i><a href="#" id="home">Marketing </a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-project-diagram"></i><a href="#" id="home">Kinh doanh</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-tv"></i><a href="#" id="home">IT và lập trình</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-people-carry"></i><a href="#" id="home">Nhân sự</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-money-check-alt"></i><a href="#" id="home">Tài chính</a><i class="fa fa-angle-right c"></i></li>
                                    <li><i class="fa fa-print"></i><a href="#" id="home">Kế toán</a><i class="fa fa-angle-right c"></i></li>
                               </ul> 
                            </Slide>
                    </span>
                </b-col>
                <b-col md="7" lg="7" cols="12">
                    <span class="banner_m">
                        <div class="banner" >
                            <b-carousel
                                    id="carousel-1"
                                    v-model="slide"
                                    :interval="1500"
                                    controls
                                    background="#ababab"
                                    style="text-shadow: 1px 1px 2px #333;"
                                    >
                                    <!-- Text slides with image -->
                                    <b-carousel-slide
                                        img-src="img/banner/image_url-1607485822.jpg"
                                    ></b-carousel-slide>
                                    <b-carousel-slide img-src="img/banner/image_url-1607591256.jpg">
                                    </b-carousel-slide>
                                    <b-carousel-slide img-src="img/banner/image_url-1612410162.jpg">
                                    </b-carousel-slide>
                                    <b-carousel-slide img-src="img/banner/image_url-1609405506.jpg">
                                    </b-carousel-slide>
                            </b-carousel>
                        </div>
                        <div class="banner_hl" >
                                <span class="banner_hl_1">
                                    <b-carousel
                                        id="carousel-1"
                                        v-model="slide"
                                        :interval="7000"
                                        background="#ababab"
                                        style="text-shadow: 1px 1px 2px #333;"
                                        >
                                        <!-- Text slides with image -->
                                        <b-carousel-slide
                                            img-src="img/banner/banner_hl_1.jpg " 
                                        ></b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_2.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_3.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_4.jpg" >
                                        </b-carousel-slide>
                                    </b-carousel>
                                </span>
                                <span class="banner_hl_1">
                                    <b-carousel
                                        id="carousel-1"
                                        v-model="slide"
                                        :interval="6000"
                                        background="#ababab"
                                        style="text-shadow: 1px 1px 2px #333;"
                                        >
                                        <!-- Text slides with image -->
                                        <b-carousel-slide img-src="img/banner/banner_hl_2.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_4.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_3.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide
                                            img-src="img/banner/banner_hl_1.jpg " 
                                        ></b-carousel-slide>
                                    </b-carousel>
                                </span>
                                <span class="banner_hl_1">
                                    <b-carousel
                                        id="carousel-1"
                                        v-model="slide"
                                        :interval="5000"
                                        background="#ababab"
                                        style="text-shadow: 1px 1px 2px #333;"
                                        >
                                        <!-- Text slides with image -->
                                        <b-carousel-slide img-src="img/banner/banner_hl_3.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide
                                            img-src="img/banner/banner_hl_1.jpg " 
                                        ></b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_2.jpg" >
                                        </b-carousel-slide>
                                        <b-carousel-slide img-src="img/banner/banner_hl_4.jpg" >
                                        </b-carousel-slide>
                                    </b-carousel>
                                </span>
                        </div>
                    </span>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
import { Slide } from 'vue-burger-menu'
export default {
components: {
    Slide 
},
data(){
   return{
        activehl:false,
        active:false,
        currentOffset:0,
        slide:0,
        items: [
            {name: 'Kin Khao', tag: ["Thai"]},
            {name: 'Jū-Ni', tag: ["Sushi", "Japanese", "$$$$"]},
            {name: 'Delfina', tag: ["Pizza", "Casual"]},
            {name: 'San Tung', tag: ["Chinese", "$$"]},
            {name: 'Anchor Oyster Bar', tag: ["Seafood", "Cioppino"]},
            {name: 'Locanda', tag: ["Italian"]},
            {name: 'Garden Creamery', tag: ["Ice cream"]},
            {name: 'Linh Pham', tag: ["Chinese", "$$"]},
            {name: 'Anchor Oyster Bar', tag: ["Seafood", "Cioppino"]},
        ]
        
   }
},
computed: {
    atEndOfList() {
      return this.currentOffset <= (this.paginationFactor * -1) * (this.items.length - this.windowSize);
      
    },
    atHeadOfList() {
      return this.currentOffset === 0;
    },
},   
methods: {
    mouseOver: function(){
            this.activehl = !this.activehl;   
    },
    moveCarousel(direction) {
      if (direction === 1 && !this.atEndOfList) {
        this.currentOffset -= this.paginationFactor;
      } else if (direction === -1 && !this.atHeadOfList) {
        this.currentOffset += this.paginationFactor;
      }
    },
  },
}
</script>
<style >
@media all and(max-width: 576px) { 
    .bm-burger-button {
        cursor: pointer;
        height: 20px !important;
        left: 36px !important;
        position: absolute;
        top: -145px !important;
        width: 22px !important;
    }

}

@media all and (max-width: 768px) and (min-width:577px ) {
    .bm-burger-button {
    cursor: pointer;
    height: 20px !important;
    left: 36px !important;
    position: absolute;
    top: -145px !important;
    width: 22px !important;
    }
     .menu_m span.menu_m_left .bm-menu{
              height: 100% ;
              left: 0px;
              top: 0%;
              width: 0px;
    }
 }

@media all and (max-width:992px ) and (min-width:769px ) { 
}

@media all and (min-width:1200px ) { 

}
</style>