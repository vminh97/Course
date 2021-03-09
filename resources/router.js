import Vue from 'vue'
import Router from 'vue-router'
import DashboardLayout from './layout/DashboardLayout'
// import AuthLayout from './layout/AuthLayout'
import UserProfile from "@/views/User/UserProfile.vue";
import ListUserPage from "@/views/User/UserManagement/ListUserPage.vue";

import ListCourse from "@/views/Course/Course.vue";
import ActionCourse from "@/views/Course/ActionCourse.vue";
import FavoriteCourses from "@/views/Course/FavoriteCourses.vue";
import KeywordSearch from "@/views/Course/KeywordSearch.vue";
import RankCourse from "@/views/Course/RankCourse.vue";
import ReviewCourse from "@/views/Course/ReviewCourse.vue";

//Main
import Category from "@/views/Main/category/Category.vue";
import Course from "@/views/Main/course/Course.vue";
import MyCourse from "@/views/Main/customer/MyCourse.vue";
import Customer from "@/views/Main/customer/Customer.vue";
import InfoTeacherHl from "@/views/Main/teacher/InfoTeacher-Hl.vue";
import Cart from "@/views/Main/cart/Cart.vue";


import ListCategory from "@/views/Category/Category.vue";
import ActionCategory from "@/views/Category/ActionCategory.vue";

import ListCustomer from "@/views/Customer/Customer.vue";

import ListNew from "@/views/New/New.vue";

import ListOrder from "@/views/Order/Order.vue";

import ListTeacher from "@/views/Teacher/Teacher.vue";

import Main from "@/views/Main/Main.vue";
Vue.use(Router)

export default new Router({
  linkExactActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'Main',
      component: Main,
    },
    {
      path: '/category',
      name: 'indexcategory',
      component: Category,
    },
    {
      path: '/course',
      name: 'indexcourse',
      component: Course,
    },
    {
      path: '/mycourse',
      name: 'indexmycourse',
      component: MyCourse,
    },
    {
      path: '/customer',
      name: 'indexcustomer',
      component: Customer,
    },
    {
      path:'/infoteacherhl',
      name:'infoteacherhl',
      component:InfoTeacherHl,
    },
    {
      path:'/cart',
      name:'cart',
      component:Cart,
    },
    {
      path: '/admin',
      redirect: 'dashboard',
      component: DashboardLayout,
      children: [
        {
          path: '/dashboard',
          name: 'dashboard',
          component: require('./views/Dashboard.vue'),

        },
      ]
    },
    {
      path: '/admin/category',
      name: 'Category',
      component: DashboardLayout,
      children:[
        { path: "list-category",name: "List Category",components: ListCategory },
        { path: "add-category",name: "Add Category",components: ActionCategory },
        { path: "edit-category/id",name: "Edit Category",components:  ActionCategory },
      ]
    },
    {
      path: '/admin/customer',
      name: 'Customer',
      component: DashboardLayout,
      children:[
        { path: "list-customer",name: "List Customer",component: ListCustomer },
      ]
    },
    {
      path: '/admin/new',
      name: 'New',
      component: DashboardLayout,
      children:[
        { path: "list-new",name: "List New",component: ListNew },
      ]
    },
    {
      path: '/admin/order',
      name: 'Order',
      component: DashboardLayout,
      children:[
        { path: "list-order",name: "List Order",component: ListOrder },
      ]
    },
    {
      path: '/admin/teacher',
      name: 'Teacher',
      component: DashboardLayout,
      children:[
        { path: "list-teacher",name: "List Teacher",component:  ListTeacher },
      ]
    },
    {
      path: '/admin/course',
      component: DashboardLayout,
      name: 'Course',     
      children: [
        { path: "list-course",name: "List Course",component: ListCourse },
        { path: "add-course",name: "Add Course",component: ActionCourse },
        { path: "edit-course/:id",name: "Edit Course",component:  ActionCourse },
        { path: "favorite-course",name: "Favorite Courses",components: { default: FavoriteCourses }},
        { path: "keyword-search",name: "Keyword Search",components: { default: KeywordSearch }},
        { path: "rank-course",name: "Rank Course",components: { default: RankCourse }},
        { path: "review-course",name: "Review Course",components: { default: ReviewCourse } }
      ]
    },
    {
      path: "admin/user",
      component: DashboardLayout,
      name: "User",
      children: [
        { path: "user-profile",name: "User Profile",components: { default: UserProfile }},
        { path: "user-management/list-users",name: "List Users",components: { default: ListUserPage }}
      ]
    },
  ]
})