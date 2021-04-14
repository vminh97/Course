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
                    <h1>Edit Category</h1>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" @submit.prevent="updateCategory">
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
                                            <select class="form-control" id="categorymain" v-model="category.parent_id" >
                                                <!-- <option v-for="cate in categorydad" :key="cate.id" :value="cate.parent_id" >{{ cate.name_Display }}</option> -->
                                                 <option  >{{ category.name_Display }}</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-12">
                                        <label class="form-control-label ax">Display Category</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="custom-toggle bx">
                                            <input type="checkbox"  v-model="category.is_display" checked >
                                            <span class="custom-toggle-slider rounded-circle cx"   ></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <label class="form-control-label">Category Status</label>
                                    <input type="text" class="form-control" v-model="category.category_status" placeholder="category_status" id="slug_url" aria-describedby="inputGroupPrepend" required="" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-5 sb">
                                          <button class="btn btn-primary" type="submit" >Submit</button>                                   
                                </div>                                                              
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
 import { mapState } from 'vuex';
 import Statistical from '../Tables/Statistical';
  export default {
    name: 'statistical',
    components: {
      Statistical
    },
    data() {
      return {
        checked: true,
      }
    },
    beforeCreate() {
         this.$store.dispatch('category/fetchOne', this.$route.params.id);
    },
    computed: {
            ...mapState('category', {
                category: 'category'
            }),
            // categorydad () {
            // return this.$store.state.category.categorydad;
            // },
        },
    // created: function()
    // {
    //     this.$store.dispatch('category/fetchdad');       
    // },
    methods: { 
        edit: function() {
            this.$store.dispatch('category/editCategory', this.category);
            this.$router.push({name: 'List Category'});
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