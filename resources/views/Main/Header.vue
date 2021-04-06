<template>
            <div class="header_m">
                <div class="header_m_top">
                    <b-row>
                        <b-col lg="12" cols="12">
                            <b-row>
                                <b-col lg="2" cols="2">
                                        <span class="logo"><i>
                                           <img src="img/svg/logo.svg" alt="">
                                        </i></span>
                                </b-col>
                                <b-col lg="5" cols="10" class="p12">
                                    <span class="search">
                                        <b-row>
                                            <b-col lg="8" xl="8" offset-lg="2" offset-xl="2">
                                                <input class="search" type="text" placeholder="Nhập tên khóa học/giảng viên" > 
                                                <span class="btnsearch"> 
                                                    <i>
                                                       <img src="img/svg/search.svg" id="Capa_1" alt="">
                                                    </i> 
                                                </span>
                                            </b-col>
                                            <b-col lg="2">
                                                <span class="cart"><i>
                                                   <img src="img/svg/cart.svg" alt="">
                                                </i></span>
                                            </b-col>
                                        </b-row>
                                    </span>
                                </b-col>
                                <b-col lg="5" cols="12" sm="12" md="12"  class="p12">
                                    <b-row>
                                        <b-col lg="3" sm="5" md="5">
                                            <input type="button" value="Kích Hoạt COD" @click="click('cod')" class="active" >                     
                                            <span class="dt"></span>
                                        </b-col>
                                        <div v-if="ischeck" class="col-lg-6 col-md-6" >
                                            <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>
                                                <template #button-content>
                                                        <b-row>
                                                            <b-col lg="4" class="hvor">
                                                                <span>Xin Chào!</span><br>
                                                                <span class="name-lg">Minh nè</span>
                                                            </b-col>
                                                            <b-col lg="1">
                                                                <img src="img/svg/down-arrow.svg" class="arrow-down">
                                                            </b-col>
                                                            <b-col lg="4">
                                                                 <img src="img/customer/default.png" class="avatar-m">
                                                            </b-col>
                                                        </b-row>
                                                </template>
                                                <b-dropdown-item href="#">Khóa Học Của tôi</b-dropdown-item>
                                                <b-dropdown-item href="#">Quản Lí Đơn Hàng</b-dropdown-item>
                                                <b-dropdown-item href="#">Chỉnh Sửa Thông Tin</b-dropdown-item>
                                                <b-dropdown-item href="#">Đăng Xuất</b-dropdown-item>
                                            </b-dropdown>
                                        </div>
                                        <div v-else class="col-lg-6 col-md-6" >
                                           <b-row>
                                                <b-col lg="3" cols="5"  sm="2" md="2">
                                                    <input type="button" value="Đăng Kí" class="register" @click="click('register')" > 
                                                </b-col>
                                                <b-col lg="3" cols="5" sm="5" md="5" offset-lg="2">
                                                    <input type="button"  value="Đăng Nhập" class="login" @click="click('login')">
                                                </b-col>
                                           </b-row>
                                        </div>  
                                    </b-row>                        
                                </b-col>    
                            </b-row>
                        </b-col>                 
                        <b-col lg="12">
                            <div v-if="action">
                                <transition name="model">
                                    <b-container>
                                        <b-row>
                                            <b-col lg="6" offset-lg="3">
                                                <div class="modal-mask" >
                                                    <div class="modal-wrapper">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <b-col md="12" lg="12">  
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" @click="action=false"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                </b-col>   
                                                                <div class="modal-body">
                                                                    <div v-if="isregister">
                                                                        <b-col md="12" lg="12">
                                                                            <h3 class="title-position">Đăng Kí</h3>
                                                                        </b-col>
                                                                        <b-col md="12" lg="12">
                                                                            <div class="form-group"  :class="{ 'form-group--error': $v.customer_name.$error }">
                                                                                <label>Tên Đăng Nhập</label>
                                                                                <input type="text" class="form-control" v-model.trim="$v.customer_name.$model" id="customer_name" style="width:100%!important"/>
                                                                                  <div class="error" v-if="!$v.customer_name.required">Tên Đăng Nhập Không Được Để Trống!</div>
                                                                                  <div class="error" v-if="!$v.customer_name.minLength">Tên Đăng Nhập Không Dưới {{$v.customer_name.$params.minLength.min}} Kí Tự</div>                                                                              
                                                                            </div>
                                                                        </b-col>                                                                     
                                                                    </div>
                                                                    <div v-else>
                                                                        <b-col md="12" lg="12">
                                                                            <h3 class="title-position">Đăng Nhập</h3>
                                                                        </b-col>  
                                                                        <div v-if="socical">  
                                                                            <b-col md="12" lg="12">
                                                                                <div class="form-group">
                                                                                    <input type="button" class="fb" value="Đăng Nhập Bằng Facebook" @click="loginsocial('facebook')">
                                                                                    <img src="img/svg/facebook.svg" id="Capa_3" alt="">
                                                                                </div>
                                                                            </b-col>
                                                                            <b-col md="12" lg="12">
                                                                                <div class="form-group">
                                                                                    <input type="button" class="google" value="Đăng Nhập Bằng Google" @click="loginsocial('google')">
                                                                                <img src="img/svg/google.svg"  id="Capa_2" alt="">
                                                                                </div>
                                                                            </b-col>
                                                                        </div>
                                                                        <div v-else>
                                                                        </div>
                                                                    </div>
                                                                    <b-col md="12" lg="12">
                                                                        <div class="form-group"  :class="{ 'form-group--error': $v.email.$error }">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" v-model.trim="$v.email.$model" id="email" style="width:100%!important"/>
                                                                            <div class="error" v-if="!$v.email.email">Bạn không Nhập Đúng Định Dạng Email</div>
                                                                            <div class="error" v-if="!$v.email.required">Email Không Được Để Trống!</div>
                                                                        </div>
                                                                    </b-col>
                                                                    <b-col md="12" lg="12">
                                                                        <div class="form-group"  :class="{ 'form-group--error': $v.password.$error }">
                                                                            <label>Password</label>
                                                                            <input type="password" class="form-control" v-model.trim="$v.password.$model" id="password" style="width:100%!important"/>
                                                                            <div class="error" v-if="!$v.password.minLength">Mật Khẩu Không Dưới {{$v.customer_name.$params.minLength.min}} Kí Tự</div>
                                                                            <div class="error" v-if="!$v.password.required">Mật Khẩu Không Được Để Trống!</div>
                                                                        </div>
                                                                    </b-col>
                                                                     <div v-if="isregister">
                                                                        <b-col md="12" lg="12">
                                                                            <div class="form-group"  :class="{ 'form-group--error': $v.repeatPassword.$error }">
                                                                                <label>Nhập Lại Mật khẩu</label>
                                                                                <input type="text" class="form-control" v-model.trim="$v.repeatPassword.$model" id="repeatPassword" style="width:100%!important"/>
                                                                                  <div class="error" v-if="!$v.repeatPassword.sameAsPassword">Mật Khẩu Không Trùng Nhau</div>                                                                              
                                                                            </div>
                                                                        </b-col>                                                                     
                                                                    </div>                               
                                                                    <b-col md="12" lg="12">
                                                                        <input type="hidden" />
                                                                        <div v-if="isregister">
                                                                            <button class="btn btn-success btn-xs"   @click="registercustomer()" >Đăng kí</button>
                                                                        </div>
                                                                        <div v-else>
                                                                            <button class="btn btn-success btn-xs"   @click="logincustomer()" >Đăng Nhập</button>                                      
                                                                            <p class="p-link">Chưa Có Tài Khoản <input type="url" value="Đăng Kí" @click="click('register')"></p>
                                                                        </div>                                                                                                                                              
                                                                       <p class="p-link">Đã Có Tài Khoản<input type="url" value="Quên Mật Khẩu" @click="click('mk')"></p>
                                                                    </b-col>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </b-col>
                                        </b-row>
                                    </b-container>                          
                                </transition>
                            </div>
                            <div v-else-if="cod">
                                 <transition name="model">
                                    <b-container>
                                        <b-row>
                                            <b-col lg="6" offset-lg="3">
                                                <div class="modal-mask" >
                                                    <div class="modal-wrapper">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <b-col md="12" lg="12">  
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" @click="cod=false"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                </b-col>   
                                                                <div class="modal-body">                                                                  
                                                                    <b-col md="12" lg="12">
                                                                        <div class="form-group">
                                                                            <b-row>
                                                                                <b-col md="12" lg="12">
                                                                                    <h3 class="title-position">Kích Hoạt Khóa Học</h3>
                                                                                </b-col>
                                                                                <b-col md="12" lg="12">
                                                                                    <h4> Nhập mã thẻ kích hoạt COD</h4>
                                                                                    <h4>Mã kích hoạt là 1 dãy ký tự mà chúng tôi đã cung cấp cho bạn.</h4>
                                                                                </b-col>
                                                                                <b-col md="12" lg="12">
                                                                                    <input type="text" class="form-control" style="width:100%!important"/>
                                                                                </b-col>
                                                                                <b-col md="8" lg="12" offset-lg="4">                                                              
                                                                                    <input type="button" value="Kích Hoạt" class="register" > 
                                                                                </b-col>
                                                                                <b-col md="12" lg="12">
                                                                                   <h4>Liên hệ hotline 1900633507 nếu bạn gặp vấn đề về kích hoạt khóa học.</h4>
                                                                                </b-col> 
                                                                            </b-row>                                                                                                                                            
                                                                        </div>
                                                                    </b-col>                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </b-col>
                                        </b-row>
                                    </b-container>                          
                                </transition>
                            </div>
                            <div v-else-if="mk">
                                 <transition name="model">
                                    <b-container>
                                        <b-row>
                                            <b-col lg="6" offset-lg="3">
                                                <div class="modal-mask" >
                                                    <div class="modal-wrapper">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <b-col md="12" lg="12">  
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" @click="mk=false"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                </b-col>   
                                                                <div class="modal-body">                                                                  
                                                                    <b-col md="12" lg="12">
                                                                        <div class="form-group">
                                                                            <b-row>
                                                                                <b-col md="12" lg="12">
                                                                                    <h3 class="title-position">Quên Mật Khẩu</h3>
                                                                                </b-col>
                                                                                <b-col>
                                                                                    <h4>Nhập lại Email đã đăng kí thành viên, chúng tôi sẽ gửi bạn 1  sau đó bạn có thể đăng kí lại mật khẩu</h4>
                                                                                    <div class="form-group"  :class="{ 'form-group--error': $v.email.$error }">
                                                                                        <label>Email</label>
                                                                                        <input type="text" class="form-control" v-model.trim="$v.email.$model" id="email" style="width:100%!important"/>
                                                                                        <div class="error" v-if="!$v.email.email">Bạn không Nhập Đúng Định Dạng Email</div>
                                                                                        <div class="error" v-if="!$v.email.required">Email Không Được Để Trống!</div>
                                                                                    </div>
                                                                                    <input type="button"  @click="resetpassword()" value="Lấy Mật Khẩu" class="register" > 
                                                                                </b-col>
                                                                            </b-row>
                                                                        </div>
                                                                    </b-col>                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </b-col>
                                        </b-row>
                                    </b-container>                          
                                </transition>
                            </div>
                        </b-col>
                    </b-row>
                </div>
                <CarouselHlCourse />        
            </div>   
</template>
<script>
import { required, minLength,email,sameAs  } from 'vuelidate/lib/validators'
import CarouselHlCourse from "@/Views/Main/course/CarouselHlCourse.vue"
import axios from 'axios';
export default {
    components: {
    'CarouselHlCourse': CarouselHlCourse,   
  },
data(){
   return{
        active:false,
        action:false,
        ischeck:false,
        isregister:true,
        customer:[],
        socical:true,
        kh:false,
        customer_name:'',
        email:'',
        password:'',
        repeatPassword:'',
        mk:false,
        cod:false
   }
},
validations: {
    customer_name: {
      required,
      minLength: minLength(8)
    },
    email: {
      email,
      required
    },
    password: {
      required,
      minLength: minLength(8)
    },
    repeatPassword: {
      sameAsPassword: sameAs('password'),
    }
},
mounted() {
    window.addEventListener('message', this.onMessage, false)
},

beforeDestroy() {
    window.removeEventListener('message', this.onMessage)
},  
methods: {
    
            async click(value)
            {
                if (value=="login"){this.action=true, this.isregister=false}
                else if(value=="register"){this.action=true,this.isregister=true}
                else if(value=="cod"){this.cod=true}
                else if(value=="mk"){this.mk=true,this.action=false}
            },
            async logincustomer() {
                    try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/login', {
                        email: this.email,
                        password:this.password
                        })
                        alert("Chúc mừng bạn đã đăng nhập thành công!");
                        this.action=false
                        this.ischeck=true
                        console.log(response.data)
                    } catch (error) {
                        console.log(error)
                    }
            },
            async registercustomer(){
                try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/register', {
                            email: this.email,
                            password:this.password,
                            customer_name:this.customer_name
                            })
                            alert('Chúc Mừng Bạn Đăng Kí Thành Viên Thành Công!')
                            this.action=true,
                            this.socical=false, 
                            this.isregister=false,
                            this.password=''
                        } catch (error) {
                            console.log(error)
                        }
            },
            async loginsocial(provide) {
                // axios.defaults.headers = {
                // 'Content-Type': 'application/json',
                // Authorization: 'myspecialpassword'
                // }
                    // var config = {
                    //     headers: { 
                    //     'Content-Type': 'application/json',
                    //     'Access-Control-Allow-Methods':'HEAD, GET, POST, PUT, PATCH, DELETE',
                    //     'Access-Control-Allow-Origin':'*',
                    //     'Access-Control-Expose-Headers':'Location'
                    //      },
                    //     };
                    axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
                    axios.defaults.headers.common['Access-Control-Allow-Methods'] = 'HEAD, GET, POST, PUT, PATCH, DELETE';
                    axios.defaults.headers.common['Access-Control-Expose-Headers'] = 'Location';
                    axios.defaults.headers.common['Content-Type'] = 'application/json';
                    axios.get('api/loginsocial/'+provide)
                        .then(response => {
                            newWindow.location.href = response.data;
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                    //   // This method save the new token and username
                    //   onMessage (e) {
                    //     if (e.origin !== window.origin || !e.data.token) {
                    //       return
                    //     }
                    //     localStorage.setItem('user',e.data.name)
                    //     localStorage.setItem('jwt',e.data.token)

                    //     this.$router.go('/board')
                    //   }
            },
            async resetpassword(){
                        try {
                        const response = await axios.post('http://127.0.0.1:8000/api/customer/sentmail', {
                            email: this.email,
                            })
                            alert('Chúng tôi đã gửi bạn 1 đường link trong gmail bạn đã đăng kí, hãy nhấp vào đường link để có thể lấy lại mật khẩu !')
                        } catch (error) {
                            console.log(error)
                        }
            },
            async logout(){
            }
        },
}
</script>

<style lang="scss">
@media all and(max-width: 576px) { 
    .header_m{
        .header_m_top{
            span.logo{
                margin-left: 60px;
            }
            input.search{
                visibility: hidden;
            }
            span.search{
                left: 221px;
                top: 56px;
                img#Capa_1
                {
                    left: -80px;
                    top: 19px;
                    width: 23px;
                    height: 23px;
                    position: absolute;
                }
            }
            span.cart{
                margin-left: -3px;
                margin-right: 35px;
                position: absolute;
                top: 21px;
                left: 236px;
                svg#cart{
                    width: 27px;
                    height: 27px;
                }
            }
            input.active{
                visibility: hidden;
            }
            span.dt{
                visibility: hidden;
            }
            .col-sm-2.col-md-2.col-lg-3.col-5.offset-1 {
                margin-top: -65px;
                input.register {
                width: 125px;
                }
            }
            .col-sm-5.col-md-5.col-lg-4.col-5.offset-1 {
                margin-top: -65px;
                input.login {
                width: 125px;
                }
            }
        }
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
    .p12 {
    margin-top: 56px;
    }
    img#Capa_1 {
      max-width: 30px;
      left: 200px;
      top: -32px;
      position: absolute;
    }
    span.cart {
            margin-left: -3px;
            margin-right: 35px;
    }
    .bm-burger-button {
        top: -97px !important;
    }
    img#Capa_1{
        width: 20px;
        height: 20px;
    }
    img#Capa_3 {
    width: 29px;
    left: 106px;
    top: 15px;
    position: absolute;
   }
   input.active,input.register,input.login {
    margin-top: 35px;
   }
}

</style>