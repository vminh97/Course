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
                                    <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Name Category</label>
                                    <input type="text" class="form-control" id="namecategory" v-model='category.Name' placeholder="Name Category" required="">
                                </div>
                                <div class="col-lg-5 ">
                                    <label class="form-control-label" for="validationCustom02" style="margin-top: 5%;">Name Display Category</label>
                                    <input type="text" class="form-control" id="displaycategory" v-model='category.name_Display' placeholder="Name Display Category"  required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-1">
                                       <div class="form-group">
                                            <label class="form-control-label" for="validationCustomUsername">Name Category Main</label>
                                            <select class="form-control" id="categorymain" v-model='category.parent_id' >
                                                <option   v-for="cate in listCategorydad" :key="cate.id" >{{ cate.name_Display }}</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-12">
                                        <label class="form-control-label" style="margin-left: 80px;" for="validationCustomUsername">Display Category</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="custom-toggle"   id="isdisplay" style=" margin-left: 110px;margin-top: 10px;">
                                            <input type="checkbox" v-model='category.isdislay'>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <label class="form-control-label" for="validationCustomUsername">Slug_Url</label>
                                    <input type="text" class="form-control" v-model='category.slug_url' placeholder="Slug_url" id="slug_url" aria-describedby="inputGroupPrepend" required="" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-5 sb">
                                       <button class="btn btn-primary" @click="createCategory" type="submit">Submit</button>
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
      }
    },
    created: function()
    {
        this.listcategorymain();
    },
    methods: {
            async listcategorymain()
            {
                try {
                            const response = await axios.get('/api/category/categorydad');
                            console.log(response);
                            this.listCategorydad = response.data;
                } catch (error) 
                {
                            this.error = error.response.data;
                } 
            },
            async createCategory() 
            {
                    try {
                        this.error = null
                        const response = await axios.post('/api/category/store', {
                            Name: this.category.Name,
                            order_number: this.category.order_number,
                            Name_Display: this.category.Name_Display,
                            is_Display:this.category.is_Display,
                            slug_url:this.category.slug_url,
                            category_status:this.category.category_status,
                            parent_id:this.category.parent_id,
                        })
                        console.log(response.data.category)
                    } catch (error) {
                        this.error = error.response.data
                    }
            },
            async UpdateCategory()
            {
                   try {
                        this.error = null
                        const response = await axios.post('/api/category/update/${this.$route.params.id}', {
                            name: this.selectedProduct.name,
                            price: this.selectedProduct.price
                        })
                        console.log(response.data.product)
                    } catch (error) {
                        this.error = error.response.data
                    }
            },
                async deletePost()
            {

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
</style>