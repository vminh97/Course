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
                                <div class="col-lg-12  " >
                                    <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Tiêu Đề Tin Tức</label>
                                    <input type="text" class="form-control" id="content_news"  required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-1">
                                       <div class="form-group">
                                            <label class="form-control-label" for="validationCustomUsername">Ngày Tin Tức</label>
                                            <b-form-datepicker
                                                id="datepicker-buttons"
                                                today-button:true
                                                reset-button
                                                close-button
                                                locale="en"
                                            ></b-form-datepicker>
                                        </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="col-lg-12">
                                        <label class="form-control-label" style="margin-left: 80px;" for="validationCustomUsername">Display Category</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="custom-toggle"  
                                         :id="category.isDisplay"
                                         style=" margin-left: 110px;margin-top: 10px;">
                                            <input type="checkbox"  v-model="checked">
                                            <span class="custom-toggle-slider rounded-circle" style="border-radius: 10px!important" ></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <label class="form-control-label" for="validationCustomUsername">Category Status</label>
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
         this.$store.dispatch('new/fetchOne', this.$route.params.id);
    },
    computed: {
            ...mapState('new', {
                new: 'new'
            }),
        },
    created: function()
    {
        this.$store.dispatch('new/fetchdad');
    },
    methods: { 
        async edit(){
            this.$store.dispatch('new/edit', this.new);
            this.$router.push({name: 'List New'});
        },
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