import Vue from 'vue'
import Router from 'vue-router'
import DashboardLayout from './layout/DashboardLayout'
// import AuthLayout from './layout/AuthLayout'
import UserProfile from "@/views/User/UserProfile.vue";
import ListUserPage from "@/views/User/UserManagement/ListUserPage.vue";

import EditCourse from "@/views/Course/EditCourse.vue";
import ListCourse from "@/views/Course/Course.vue";
import FavoriteCourses from "@/views/Course/FavoriteCourses.vue";
import KeywordSearch from "@/views/Course/KeywordSearch.vue";
import RankCourse from "@/views/Course/RankCourse.vue";
import ReviewCourse from "@/views/Course/ReviewCourse.vue";

import ListCategory from "@/views/Category/Category.vue";
import ActionCategory from "@/views/Category/ActionCategory.vue";

import ListCustomer from "@/views/Customer/Customer.vue";

import ListNew from "@/views/New/New.vue";

import ListOrder from "@/views/Order/Order.vue";

import ListTeacher from "@/views/Teacher/Teacher.vue";
Vue.use(Router)

export default new Router({
  linkExactActiveClass: 'active',
  routes: [
    {
      path: '/',
      redirect: 'dashboard',
      component: DashboardLayout,
      children: [
        {
          path: '/dashboard',
          name: 'dashboard',
          component: require('./views/Dashboard.vue'),

        },
        {
          path: '/profile',
          name: 'profile',
          component: require('./views/UserProfile.vue'),

        },
      ]
    },
    {
      path: '/category',
      name: 'Category',
      component: DashboardLayout,
      children:[
        { path: "list-category",name: "List Category",components: { default: ListCategory }},
        { path: "add-category",name: "Add Category",components: { default: ActionCategory }},
      ]
    },
    {
      path: '/customer',
      name: 'Customer',
      component: DashboardLayout,
      children:[
        { path: "list-customer",name: "List Customer",components: { default: ListCustomer }},
      ]
    },
    {
      path: '/new',
      name: 'New',
      component: DashboardLayout,
      children:[
        { path: "list-new",name: "List New",components: { default: ListNew }},
      ]
    },
    {
      path: '/order',
      name: 'Order',
      component: DashboardLayout,
      children:[
        { path: "list-order",name: "List Order",components: { default: ListOrder }},
      ]
    },
    {
      path: '/teacher',
      name: 'Teacher',
      component: DashboardLayout,
      children:[
        { path: "list-teacher",name: "List Teacher",components: { default: ListTeacher }},
      ]
    },
    {
      path: '/course',
      component: DashboardLayout,
      name: 'Course',     
      children: [
        { path: "list-course",name: "List Course",components: { default: ListCourse }},
        { path: "edit-course",name: "Edit course",components: { default: EditCourse }},
        { path: "favorite-course",name: "Favorite Courses",components: { default: FavoriteCourses }},
        { path: "keyword-search",name: "Keyword Search",components: { default: KeywordSearch }},
        { path: "rank-course",name: "Rank Course",components: { default: RankCourse }},
        { path: "review-course",name: "Review Course",components: { default: ReviewCourse } }
      ]
    },
    {
      path: "/user",
      component: DashboardLayout,
      name: "User",
      children: [
        { path: "user-profile",name: "User Profile",components: { default: UserProfile }},
        { path: "user-management/list-users",name: "List Users",components: { default: ListUserPage }}
      ]
    },
  ]
})
