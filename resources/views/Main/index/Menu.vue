<template>
    <div class="menu_m">
        <b-container>
            <b-row>
                <b-col md="5" lg="5" cols="12">
                    <span class="menu_m_left" >
                            <Slide >
                                <ul >
                                        <li  v-for="cate in categorycline" :key="cate.id" :value="cate.id">
                                                                               <router-link :to="{ name: 'indexcategory',params: {id:cate.id}}">
                                                                                   <i v-bind:class="cate.slug_url"></i>{{cate.name_Display}}
                                                                                </router-link>
                                        </li>
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
    // atEndOfList() {
    //   return this.currentOffset <= (this.paginationFactor * -1) * (this.items.length - this.windowSize);
      
    // },
    // atHeadOfList() {
    //   return this.currentOffset === 0;
    // },
    categorycline () {
        return this.$store.state.category.categorycline;     
    }
},  
    created: function()
    {
        
        this.$store.dispatch('category/getmenu');
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