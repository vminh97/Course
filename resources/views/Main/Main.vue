<template>
    <main>
        <div class="app_m">
          <!-- <div class="fb-login-button" data-width="" data-size="small" data-button-type="continue_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="false"></div> -->
          <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
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
