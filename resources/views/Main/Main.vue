<template>
    <main>
        <div class="app_m">
            <Header />          
            <Menu />
            <div class="body_m">
                <HlCourse />
                <Keyword />
                <ViewedCourse />
                <MostTeacher />
            </div>
            <Footer></Footer>
        </div>
    </main>
</template>
<script>
import Header from "@/Views/Main/Header.vue"
import Footer from "@/Views/Main/Footer.vue"
import Menu from "@/Views/Main/index/Menu.vue"
import HlCourse from "@/Views/Main/course/Hl-Course.vue"
import MostTeacher from "@/Views/Main/index/MostTeacher.vue"
import ViewedCourse from "@/Views/Main/course/ViewedCourse.vue"
import Keyword from "@/Views/Main/index/Keyword.vue"
export default {  
  components: {
    'Footer': Footer,
    'MostTeacher': MostTeacher,
    'ViewedCourse':ViewedCourse,
    'Keyword':Keyword,
    'HlCourse':HlCourse,
    'Menu':Menu,
    'Header':Header,
  },
  
};

</script>
<style>

</style>
