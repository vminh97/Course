<template>
  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    <side-bar
      :background-color="sidebarBackground"
      short-title="Minh"
      title="Minh"
    >
      <template slot="links">
        <sidebar-item :link="{name: 'Dashboard', icon: 'ni ni-atom text-red', path: 'admin/dashboard'}"/>
        <sidebar-item :link="{name: 'User',icon: 'ni ni-single-02 text-red',path:''}">
            <sidebar-item
              :link="{ name: 'User Profile', path: 'user-profile' }"
            />
            <sidebar-item
              :link="{name: 'User Management', path: 'user-management/list-users',}"
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'Course', icon: 'ni ni-planet text-red', path:'',}">
            <sidebar-item
              :link="{  name: 'List Course', path: 'list-course',}"           
            />
            <sidebar-item
              :link="{  name: 'Edit Course', path: 'edit-course', }"
            />
            <sidebar-item
              :link="{  name: 'Favorite Courses', path: 'favorite-course',}"           
            />
            <sidebar-item
              :link="{  name: 'Keyword Search', path: 'keyword-search', }"
            />
            <sidebar-item
              :link="{ name: 'Rank Course', path: 'rank-course'}"           
            />
            <sidebar-item
              :link="{  name: 'Review Course', path: 'review-course', }"
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'Teacher',icon: 'ni ni-circle-08 text-red',path:''}">
           <sidebar-item
              :link="{  name: 'List Teacher', path: 'list-teacher',}"           
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'Category',icon: 'ni ni-circle-08 text-red',path:''}">
           <sidebar-item
              :link="{  name: 'List Category', path: 'list-category',}"           
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'Customer',icon: 'ni ni-hat-3 text-red',path:''}">
           <sidebar-item
              :link="{  name: 'List Customer', path: 'list-customer',}"           
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'New',icon: 'ni ni-key-25 text-red',path:''}">
           <sidebar-item
              :link="{  name: 'List New', path: 'list-new',}"           
            />
        </sidebar-item>
        <sidebar-item :link="{name: 'Order',icon: 'ni ni-cart text-red',path:''}">
           <sidebar-item
              :link="{  name: 'List Order', path: 'list-order',}"           
            />
        </sidebar-item>
      </template>
    </side-bar>
    <div class="main-content" :data="sidebarBackground">
      <dashboard-navbar></dashboard-navbar>

      <div @click="toggleSidebar">
        <fade-transition :duration="200" origin="center top" mode="out-in">
          <!-- your content here -->
          <router-view></router-view>
        </fade-transition>
        <content-footer v-if="!$route.meta.hideFooter"></content-footer>
      </div>
    </div>
  </div>
</template>
<script>
  import DashboardNavbar from './DashboardNavbar.vue';
  import ContentFooter from './ContentFooter.vue';
  import { FadeTransition } from 'vue2-transitions';

  export default {
    components: {
      DashboardNavbar,
      ContentFooter,
      FadeTransition
    },
    data() {
      return {
        sidebarBackground: 'vue' 
      };
    },
    methods: {
      toggleSidebar() {
        if (this.$sidebar.showSidebar) {
          this.$sidebar.displaySidebar(false);
        }
      }
    }
  };
</script>
<style lang="scss" scoped>
</style>
