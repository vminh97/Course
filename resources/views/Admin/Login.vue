<template>
  <div class="login-admin">
      <div class="bla"></div>
      <b-container>
        <b-row>
            <b-col md="6" lg="6" offset-lg="3" offset-md="3">
                    <div class="card card-default">
                        <b-col md="12" lg="12">
                                <div class="card-header">Sign In</div>
                        </b-col>
                        <b-col md="12" lg="12">
                            <div class="card-body">
                                <b-col md="12" lg="12"> 
                                    <div class="alert alert-danger" v-if="error">
                                        <p>Sign in fail. Please try again!</p>
                                    </div>
                                </b-col>
                                <b-col md="12" lg="12">
                                    <form autocomplete="off" @submit.prevent="login" method="post">
                                        <div class="form-group">
                                            <b-col md="12" lg="12">
                                                <label for="email">E-mail</label>
                                            </b-col>
                                            <b-col md="12" lg="12">
                                                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                                            </b-col>                                
                                        </div>
                                        <div class="form-group">
                                            <b-col md="12" lg="12">
                                                <label for="password">Password</label>
                                            </b-col>
                                            <b-col md="12" lg="12">
                                            <input type="password" id="password" class="form-control" v-model="password" required>
                                            </b-col>                                
                                        </div>
                                        <b-col md="12" lg="12">
                                            <button type="submit" class="btn btn-default">Sign In</button>
                                        </b-col>                         
                                    </form>
                                </b-col>
                            </div>
                        </b-col>
                    </div>
            </b-col>
        </b-row>   
      </b-container>
  </div>
</template>
<script>
import axios from 'axios';
import store from '@/store'
export default {
    store,
  data: function () {
    return {
      email: null,
      password: null,
      error: false
    }
  },
  methods: {
        login() 
        {
            let email = this.email
            let password = this.password
            this.$store.dispatch('login', { email, password })
            .then(() => this.$router.push('/admin/dashboard'))
            .catch(err => console.log(err))
        }
      }
}
</script>
<style scoped>
.bla {
    height: 200px;
}
.login-admin {
    height: 1000px;
}
.card-header {
    text-align: center;
}
</style>