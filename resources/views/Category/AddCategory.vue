<template >
    <div class="ct">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <Statistical></Statistical>
                </div>
            </div>
        </div>
        <div class="form1">
            <div class="container">
                    <div class="title">
                    <h1>Add Category</h1>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                            <div class="form-row">
                                <div class="col-lg-5 offset-lg-1  " >
                                    <label class="form-control-label" >Name Category</label>
                                    <input type="text" class="form-control" id="namecategory" v-model='category.Name' placeholder="Name Category" required="">
                                </div>
                                <div class="col-lg-5 ">
                                    <label class="form-control-label">Name Display Category</label>
                                    <input type="text" class="form-control" id="displaycategory" v-model='category.name_Display' placeholder="Name Display Category"  required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-1">
                                       <div class="form-group">
                                            <label class="form-control-label" >Name Category Main</label>
                                            <select class="form-control" id="categorymain" v-model='category.parent_id' >
                                                <option v-for="cate in listCategorydad" :key="cate.id" :value="cate.parent_id" >{{ cate.name_Display }}</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-12">
                                        <label class="form-control-label ax">Display Category</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="custom-toggle bx">
                                            <input type="checkbox" v-model='category.is_display' checked >
                                            <span class="custom-toggle-slider rounded-circle cx"   ></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <label class="form-control-label">Category Status</label>
                                    <input type="text" class="form-control" v-model='category.category_status' placeholder="category_status" id="slug_url" aria-describedby="inputGroupPrepend" required="" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-5 sb">
                                    <router-link to="/admin/category/list-category" >
                                          <button class="btn btn-primary"  @click="createCategory" >Submit</button>
                                    </router-link>                                      
                                </div>                                                              
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
 import Statistical from '../Tables/Statistical';
 import axios from 'axios';
  export default {
    name: 'statistical',
    components: {
      Statistical
    },
    data() {
      return {
        selected: null,
        listCategorydad:[],
        category:[],
        categorybyid:[],
        checked: true,
      }
    },
    computed: {
    },
    created: function()
    {
        this.listcategorymain();
        this.valuebyid()
    },
    methods: {
            async listcategorymain()
            {
                try {
                            const response = await axios.get('/api/category/categorydad');
                            this.listCategorydad = response.data;
                } catch (error) 
                {
                            this.error = error.response.data;
                } 
            },
            async valuebyid()
            {
                try {
                            const response = await axios.get('/api/category/categorydad');
                            this.categorybyid = response.data;
                } catch (error) 
                {
                            this.error = error.response.data;
                } 
            },
            async createCategory() {
                try {
                    const response = await axios.post('http://127.0.0.1:8000/api/category/store', {
                      Name: this.category.Name,
                      name_Display: this.category.name_Display,
                      parent_id: this.category.parent_id,
                      is_display: this.category.is_display,
                      category_status: this.category.category_status,
                      order_number: this.category.order_number,
                      slug_url: this.category.slug_url,
                    })
                    console.log(response.data)
                } catch (error) {
                    console.log(error)
                }
            }
    }
  }
</script>
<style lang="scss" scoped>
.form1
{
    margin-top:100px;
   
}
.title {
    text-align: center;
}
form
{
     background:white;
}
.sb
{
    margin-top: 45px;
    margin-bottom: 35px;
}
.form-row
{
    margin-top:2%;
}
.form-control-label{
    margin-top: 5%;
}
.ax{
    margin-left: 80px;
}
.bx{
    margin-left: 110px;margin-top: 10px;
}
.cx{
    border-radius: 10px!important;
}
</style>