<template>
    <div class="course_m_hl">
                    <b-container>
                        <b-row>
                           <b-col md=12 lg="12">
                               <h3>Cùng Nhau Phát Triển Tương Lai</h3>
                            </b-col> 
                        </b-row>
                        <b-row>
                           <b-col md=12 lg="12">
                              <h6>Thăng tiến vượt bậc với các khóa học phát triển kỹ năng</h6>
                            </b-col> 
                        </b-row>
                        <b-row>
                            <div id="v-carousel">
                                <div class="card-carousel-wrapper">
                                    <div class="card-carousel--nav__left" @click="moveCarousel(-1)" :disabled="atHeadOfList">

                                    </div>
                                    <div class="card-carousel">
                                        <div class="card-carousel--overflow-container" >
                                            <div class="card-carousel--cards" :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}">
                                                    <div class="card-carousel--card" v-for="item in items" :key="item.id">
                                                            <b-row>
                                                                <b-col md="12" lg="12">
                                                                    <div class="card-carousel--card--footer">
                                                                        <b-col md="12" lg="12" class="db">
                                                                            <div class="banner-products">
                                                                                 <img src="img/banner/image_url-1607485822.jpg" id="banner-products" alt="">               
                                                                            </div>                                                         
                                                                        </b-col>
                                                                        <b-col md="12" lg="12">
                                                                            <div class="content-course">
                                                                                <b-row>                                                                               
                                                                                        <b-col md="6" lg="6">
                                                                                            <span class="count-video">
                                                                                                <i class="fa fa-book"></i><span>34</span>
                                                                                            </span>
                                                                                        </b-col>
                                                                                        <b-col md="6" lg="6">
                                                                                            <span class="star">
                                                                                                <i class="fa fa-star"></i><span>34</span>
                                                                                            </span> 
                                                                                        </b-col>                                             
                                                                                </b-row>
                                                                            </div>                                                                          
                                                                        </b-col>
                                                                        <b-col md="12" lg="12">
                                                                            <div class="title-product-lm">
                                                                                <p>{{ item.name }}</p>
                                                                            </div>    
                                                                        </b-col>
                                                                        <b-col md="12" lg="12">
                                                                            <div class="teacher-m">
                                                                                <b-row>
                                                                                    <b-col md="5" lg="5">
                                                                                        <div class="avatar-teacher-course">
                                                                                            <img src="img/teacher/teacher_1.png" alt="" id="teacher-m">
                                                                                        </div>   
                                                                                    </b-col>
                                                                                    <b-col md="7" lg="7">
                                                                                        <span class="title">
                                                                                            <div class="name-teacher">
                                                                                                Đoàn Tiến Hùng
                                                                                            </div>
                                                                                            <div class="name-teacher">
                                                                                                Giảng Viên Youtobe
                                                                                            </div>
                                                                                        </span>
                                                                                    </b-col>
                                                                                </b-row>                                                                                                                                                    
                                                                            </div>
                                                                        </b-col>
                                                                        <b-col md="12" lg="12">
                                                                            <b-row>
                                                                                <b-col md="6" lg="6">
                                                                                     <input type="button" value="Học Thử" class="learn-test">
                                                                                </b-col>
                                                                                <b-col md="6" lg="6">
                                                                                     <span class="price">390.000đ</span>
                                                                                </b-col>
                                                                            </b-row>
                                                                        </b-col>
                                                                    </div>
                                                                </b-col>
                                                            </b-row>                                       
                                                            
                                                    </div>                                            
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="card-carousel--nav__right" @click="moveCarousel(1)" :disabled="atEndOfList"></div>
                                </div>                    
                            </div>
                        </b-row>           
                        
                    </b-container>
                    
                </div>
</template>
<script>
export default {
data(){
   return{
        activehl:false,
        active:false,
        currentOffset:0,
        slide:0,
        items: [
            {name: 'Kin Khao1', tag: ["Thai1"]},
            {name: 'Kin Khao2', tag: ["Thai2"]},
            {name: 'Kin Khao3', tag: ["Thai3"]},
            {name: 'Kin Khao4', tag: ["Thai4"]},
            {name: 'Kin Khao5', tag: ["Thai5"]},
            {name: 'Kin Khao6', tag: ["Thai6"]},
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
<style lang="scss">
@media all and(max-width: 576px) { 
.course_m_hl{
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