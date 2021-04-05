import bearer from '@websanova/vue-auth/drivers/auth/bearer';
import axios from '@websanova/vue-auth/drivers/http/axios.1.x';
import router from '@websanova/vue-auth/drivers/router/vue-router.2.x';

const config = {
    auth: bearer,
    http: axios,
    router: router,
    tokenDefaultName: 'auth-token',
    tokenStore: ['cookie'],
    notFoundRedirect: {
        path: '/home'
    },
    registerData: {
        url: '/api/customer/register',
        method: 'POST',
        redirect: null,
    },
    loginData: {
        url: '/api/customer/login',
        method: 'POST',
        redirect: '/home',
        fetchUser: true,
    },
    logoutData: {
        url: '/api/customer/logout',
        method: 'POST',
        redirect: '/login',
        makeRequest: true
    },
    fetchData: {
        url: '/api/customer/user',  
        method: 'GET',
        enabled: true
    },
    parseUserData (data) {
        return data || {}
    },
};

export default config;