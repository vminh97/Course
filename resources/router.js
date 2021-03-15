import Vue from 'vue'
import Router from 'vue-router'
import DashboardLayout from './layout/DashboardLayout'
// import AuthLayout from './layout/AuthLayout'
import UserProfile from "@/views/User/UserProfile.vue";
import ListUserPage from "@/views/User/UserManagement/ListUserPage.vue";


//Main
import Main from "@/views/Main/Main.vue";
import Category from "@/views/Main/category/Category.vue";
import Course from "@/views/Main/course/Course.vue";
import MyCourse from "@/views/Main/customer/MyCourse.vue";
import Customer from "@/views/Main/customer/Customer.vue";
import InfoTeacherHl from "@/views/Main/teacher/InfoTeacher-Hl.vue";
import Cart from "@/views/Main/cart/Cart.vue";

//admin/course
import ListCourse from "@/views/Course/Course.vue";
import AddCourse from "@/views/Course/AddCourse.vue";
import EditCourse from "@/views/Course/EditCourse.vue";
import FavoriteCourses from "@/views/Course/FavoriteCourses.vue";
import KeywordSearch from "@/views/Course/KeywordSearch.vue";
import RankCourse from "@/views/Course/RankCourse.vue";
import ReviewCourse from "@/views/Course/ReviewCourse.vue";

//admin/category
import ListCategory from "@/views/Category/Category.vue";
import AddCategory from "@/views/Category/AddCategory.vue";
import EditCategory from "@/views/Category/EditCategory.vue";


//admin/customer
import ListCustomer from "@/views/Customer/Customer.vue";
import EditCustomer from "@/views/Customer/EditCustomer.vue";

//admin/new
import ListNew from "@/views/New/New.vue";
import AddNew from "@/views/New/AddNew.vue";
import EditNew from "@/views/New/EditNew.vue";

//admin/course
import ListOrder from "@/views/Order/Order.vue";

//admin/teacher
import ListTeacher from "@/views/Teacher/Teacher.vue";
import AddTeacher from "@/views/Teacher/AddTeacher.vue";
import EditTeacher from "@/views/Teacher/EditTeacher.vue";



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
        { path: "list-category",name: "List Category",component: ListCategory },
        { path: "add-category",name: "Add Category",component: AddCategory },
        { path: "edit-category/id",name: "Edit Category",component:  EditCategory },
      ]
    },
    {
      path: '/admin/customer',
      name: 'Customer',
      component: DashboardLayout,
      children:[
        { path: "list-customer",name: "List Customer",component: ListCustomer },
        { path: "edit-customer/id",name: "Edit Customer",component:  EditCustomer },
      ]
    },
    {
      path: '/admin/new',
      name: 'New',
      component: DashboardLayout,
      children:[
        { path: "list-new",name: "List New",component: ListNew },
        { path: "add-new",name: "Add New",component: AddNew },
        { path: "edit-new/:id",name: "Edit New",component:  EditNew },
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
        { path: "add-teacher",name: "Add Teacher",component: AddTeacher },
        { path: "edit-teacher/id",name: "Edit Teacher",component:  EditTeacher },
      ]
    },
    {
      path: '/admin/course',
      component: DashboardLayout,
      name: 'Course',     
      children: [
        { path: "list-course",name: "List Course",component: ListCourse },
        { path: "add-course",name: "Add Course",component: AddCourse },
        { path: "edit-course/:id",name: "Edit Course",component:  EditCourse },
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