<template>
    <div class="carousel-hl-course">
                <div class="header_m_bottom">
                    <b-container>
                        <b-row>
                            <b-col md="4" lg="4">
                                <span class="title-list" >
                                Danh Sach Khóa Học
                                </span>
                            </b-col>
                            <b-col md="4" lg="4">
                                <span class="tt-hl-ht" v-on:mouseover="mouseOver">
                                    <i class="far fa-thumbs-up as"  ></i><span class="i">Bán Chạy Nhất</span>
                                </span>
                            </b-col>
                            <b-col md="4" lg="4">
                                <span class="tt-hl-ht" >
                                    <i class="far fa-thumbs-up as"  ></i><span class="i">Tất Cả Khóa Học</span>
                                </span>
                            </b-col>
                        </b-row>
                    </b-container>
                </div>
                <div class="header_m_carousel" v-show="activehl">
                        <transition>
                            <b-container>
                                <b-row>
                                    <div id="v-carousel">
                                        <div class="card-carousel-wrapper">
                                            <div class="card-carousel--nav__left" @click="moveCarousel(-1)" :disabled="atHeadOfList">

                                            </div>
                                            <div class="card-carousel">
                                                <div class="card-carousel--overflow-container" >
                                                    <div class="card-carousel--cards" :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}">
                                                        <div class="card-carousel--card" v-for="item in items" :key="item.id">
                                                            <img src="img/banner/image_url-1607591256.jpg" alt="">                                            
                                                            <div class="card-carousel--card--footer">
                                                                <div class="content-course">
                                                                    <span class="count-video">
                                                                        <i class="fa fa-book"></i><span>34</span>
                                                                    </span>
                                                                    <span class="star">
                                                                    <i class="fa fa-star"></i><span>34</span>
                                                                    </span>                                              
                                                                </div>
                                                                <p>{{ item.name }}</p>
                                                                <div class="teacher-m">
                                                                    <img src="img/banner/image_url-1607485822.jpg" alt="">
                                                                    <span class="title">
                                                                        <div class="name-teacher">
                                                                            Đoàn Tiến Hùng
                                                                        </div>
                                                                        <div class="name-teacher">
                                                                            Giảng Viên Youtobe
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input type="button" value="Học Thử" class="learn-test">
                                                                <span class="price">390.000đ</span>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                            </div>
                                            <div class="card-carousel--nav__right" @click="moveCarousel(1)" :disabled="atEndOfList"></div>
                                        </div>                    
                                    </div>
                                </b-row>
                            </b-container>                          
                        </transition>
                </div>  
    </div>
</template>
<script>
export default {
data(){
   return{
        activehl:false,
        currentOffset:0,
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
    click_login(){
         this.login=true;
    },
    click_register(){
         this.register=true;
    },
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
<style lang="scss">
@media all and(max-width: 576px) { 
    .carousel-hl-course{
        visibility: hidden;
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
}
</style>