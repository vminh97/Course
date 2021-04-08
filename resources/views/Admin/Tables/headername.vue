<template>
    <div class="header-admin">
            <b-row>
                  <b-col md="12" lg="12" >
                      <b-row>
                             <b-col md="8" lg="8">
                                <b-row>
                                    <b-col md="6" lg="6" offset-lg="1">
                                        <input type="text" name="search-txt" id="search-txt">
                                    </b-col>
                                    <b-col md="4" lg="4">
                                        <input type="button" value="Tìm Kiếm" id="search-btn">
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col md="3" lg="3" offset-lg="1" class="info-admin">
                                <b-dropdown size="lg" v-if="isLoggedIn" variant="link"  toggle-class="text-decoration-none" no-caret >
                                        <template #button-content>
                                                <b-row>
                                                    <b-col lg="4" class="hvor">
                                                        <span>Xin Chào!</span><br>
                                                        <span class="name-lg" >{{user.name}}</span>
                                                    </b-col>
                                                    <b-col lg="1">
                                                        <img src="img/svg/down-arrow.svg" class="arrow-down">
                                                    </b-col>
                                                    <b-col lg="4">
                                                        <img src="img/customer/default.png" class="avatar-m">
                                                    </b-col>
                                                </b-row>
                                        </template>
                                        <b-dropdown-item href="#">Thông Tin Cá Nhân</b-dropdown-item>
                                        <b-dropdown-item @click="logout" href="#">Đăng Xuất</b-dropdown-item>
                                </b-dropdown>
                            </b-col>
                      </b-row>                       
                  </b-col>
            </b-row>
    </div>
</template>
<script>
import store from '@/store.js'
export default {
    store,
    data() {
    return {
        user:{
          id:0,name:'Văn Minh',
        },
      }
    },
    computed : {
     isLoggedIn : function(){ return this.$store.getters.isLoggedIn}
    },

    methods: {
      logout: function () {
        this.$store.dispatch('logout')
        .then(() => {
          this.$router.push('/admin/login')
        })
      }
    },
}
</script>

<style lang="scss" scoped >
div#__BVID__127 {
    margin-top: -38px;
}
.hvor{
  cursor: pointer;
  margin-top: -8px;
  &:hover{
    .tcn
    {
      visibility: 1;
      position: absolute;
      z-index: 1;
    }
  }
}
span.name-lg {
  color: black;
  font-size: 25px;
  margin-top: 29px;
}
img.arrow-down{
  width: 10px;
  margin-left: 16px;
  margin-top: 14px;
}
img.avatar-m{
  border-radius: 50%;
  margin-left: -2px;
  margin-top: -2px;
  width: 45px;
  &:hover{
    .tcn
    {
      visibility: 1;
      position: absolute;
      z-index: 1;
    }
  }
}
input#search-btn{
    outline: none;
    height: 40px;
    width: 130px;
    border: 1px solid white;
    border-radius: 10px;
    font-size: 14px;
    font-weight: bold;
    background-color: white;
    color: red;
    margin-right: 10px;
    opacity: 1; 
    &:hover{
    background-color: white;
    opacity: 0.9;
    transition: 0.8;
    border-radius: 0px;
    }
}
div#__BVID__125 {
    margin-top: -38px;
}
.header-admin {
    margin-top: -110px;
}
</style>