import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {RESOURCE_CATEGORY} from '@/api/api_admin';
Vue.use(Vuex);

const storecategory = {
    namespaced: true,
    state: {
        categorys: [],
        category: {},
        categorydad:{}
    },
    mutations: {
        FETCH(state,  categorys) {
            state. categorys =  categorys;
        },
        FETCH_ONE(state, category) {
            state.category = category;
        },
        FETCH_DAD(state, categorydad)
        {
            state.categorydad=categorydad;
        }
    },
    actions: {

        fetch({ commit }) {
            return axios.get(RESOURCE_CATEGORY+'/index')
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        fetchOne({ commit }, id) {
            axios.get(`${RESOURCE_CATEGORY}/show/${id}`)
                .then(response => commit('FETCH_ONE', response.data))
                .catch();
        },
        fetchdad({ commit }) {
            return axios.get(RESOURCE_CATEGORY+'/categorydad')
                .then(response => commit('FETCH_DAD', response.data))
                .catch();
        },
        delete({}, id) {
            axios.delete(`${RESOURCE_CATEGORY}/destroy/${id}`)
                .then(() => this.dispatch('category/fetch'))
                .catch();
        },
        edit({}, category) {
            axios.put(`${RESOURCE_CATEGORY}/update/${category.id}`, {
                Name: category.Name,
                name_Display: category.name_Display,
                parent_id:category.parent_id,
                is_display:category.is_display,
                category_status:category.category_status,
                order_number:category.order_number
            })
            .then();
        },
        add({}, category) {
            axios.post(`${RESOURCE_CATEGORY}/store/`, {
                Name: category.Name,
                name_Display: category.name_Display,
                parent_id:category.parent_id,
                is_display:category.is_display,
                category_status:category.category_status,
                order_number:category.order_number
            })
                .then();
        }
    }
};

export default storecategory;