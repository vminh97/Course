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
                <b-row>
                    <b-col lg="12">
                        <div class="title">
                            <h1>Add Product</h1>
                        </div>
                    </b-col>
                    <b-col lg="12">
                        <div class="form-row">
                            <b-col lg="5">
                                <b-row>
                                    <b-col lg="12">
                                        <img src="" alt="">
                                    </b-col>
                                    <b-col lg="12">
                                        <b-form-file multiple
                                         :file-name-formatter="formatNames">
                                         </b-form-file>
                                    </b-col>
                                </b-row>                          
                            </b-col>
                            <b-col lg="6" offset-lg="1">
                                 <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Name Category</label>
                                 <input type="text" class="form-control" id="nameproduct"  placeholder="Name Product" required="">
                            </b-col>
                        </div>
                    </b-col>
                </b-row>
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
      }
    },
    created: function()
    {
        
    },
    methods: {
        formatNames(files) {
        return files.length === 1 ? files[0].name : `${files.length} files selected`
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