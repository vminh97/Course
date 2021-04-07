<template >
    <div class="ct">
        <div class="form1">
            <b-container fluid>
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
                                        <label for="">Ảnh Đại Diện Sản Phẩm</label>
                                        <img src="img/product/pr1.jpg" alt="">
                                    </b-col>
                                    <b-col lg="12">
                                        <b-form-file multiple
                                         :file-name-formatter="formatNames">
                                         </b-form-file>
                                    </b-col>
                                </b-row>                          
                            </b-col>
                            <b-col lg="6" >
                                <b-col lg="12">
                                    <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Name Category</label>
                                    <input type="text" class="form-control" id="nameproduct"  placeholder="Name Product" required="">
                                </b-col>
                                <b-col lg="12">
                                    <b-row>
                                        <b-col lg="6">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Good Code</label>
                                            <input type="text" class="form-control" id="goodcodes"  placeholder="" required="" disabled>
                                        </b-col>
                                        <b-col lg="6">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Slug URL</label>
                                            <input type="text" class="form-control" id="slug_url"  placeholder="" required="" disabled>
                                        </b-col>
                                    </b-row>                                  
                                </b-col>
                                <b-col lg="12">
                                    <b-row>
                                        <b-col lg="6">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Ngành Học Chính</label>
                                            <model-select :options="options2"
                                                v-model="item2"
                                                placeholder="Chọn">
                                            </model-select>
                                        </b-col>
                                        <b-col lg="6">
                                           <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Ngành Học Phụ</label>
                                            <model-select :options="options2"
                                                v-model="item2"
                                                placeholder="Chọn">
                                            </model-select>
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col lg="12">
                                    <b-row>
                                        <b-col lg="4">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Gía Bán Mong Muốn</label>
                                            <input type="text" class="form-control" id="nameproduct"   required="">
                                        </b-col>
                                        <b-col lg="4">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Gía Sau Thuế</label>
                                            <input type="text" class="form-control" id="nameproduct"   required="">
                                        </b-col>
                                        <b-col lg="4">
                                            <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Gía Bán Cuối Cùng</label>
                                            <input type="text" class="form-control" id="nameproduct"  required="">
                                        </b-col>
                                    </b-row>
                                </b-col>                                
                            </b-col>
                        </div>
                    </b-col>
                    <b-col lg="12">
                        <b-row>
                            <b-col lg="5">
                                  <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Nội Dung Khóa Học</label>
                                  <ckeditor v-model="editorData" :config="editorConfig" :editor-url="editorUrl" ></ckeditor>
                            </b-col>
                            <b-col lg="2">
                                <b-row>
                                    <div class="boo">
                                        <b-col lg="12">
                                        <b-form-checkbox
                                        id="checkbox-1"
                                        v-model="status1"
                                        name="checkbox-1"
                                        unchecked-value="not_accepted"
                                        >Hiển Thị Sản Phẩm</b-form-checkbox>                                      
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Hoàn Trả Sản Phẩm</b-form-checkbox>                           
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Chứng Chỉ Đi Kèm</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Thanh Toán Online</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Hiển Thị Đánh Gía</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Miễn Phí Vận Chuyển</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Giảm Giá Sản Phẩm</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            > Mã Giảm Giá Sản Phẩm</b-form-checkbox>
                                        </b-col>
                                        <b-col lg="12">
                                            <b-form-checkbox
                                            id="checkbox-1"
                                            v-model="status1"
                                            name="checkbox-1"
                                            unchecked-value="not_accepted"
                                            >Mã Kích Hoạt Sản Phẩm</b-form-checkbox>
                                        </b-col>
                                    </div>
                                </b-row>     
                            </b-col>
                            <b-col lg="5">
                                <b-row>
                                    <b-col lg="12">

                                    </b-col>
                                    <b-col lg="12">
                                        <b-row>
                                            <div class="bee">
                                                <b-col lg="12">
                                                    <b-row>
                                                        <b-col lg="6">
                                                             <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Từ</label><b-form-datepicker v-model="timestartrefund" locale="en"></b-form-datepicker>
                                                        </b-col>
                                                        <b-col lg="6">
                                                             <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Đến</label><b-form-datepicker v-model="timeendrefund" locale="en"></b-form-datepicker>
                                                        </b-col>
                                                    </b-row>
                                                </b-col>
                                                <b-col lg="12">
                                                     <b-form-select v-model="certificatelist" :options="options3"></b-form-select>
                                                </b-col>
                                            </div>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col lg="12">
                        <b-row> 
                            <b-col lg="4">
                                <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Từ Khóa</label>
                                <b-form-tags input-id="tags-basic" v-model="value1"></b-form-tags>
                            </b-col>
                            <b-col lg="4">
                                <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Hastang</label>
                                <b-form-tags input-id="tags-basic" v-model="value1"></b-form-tags>
                            </b-col>
                            <b-col lg="4">
                                <label class="form-control-label" for="validationCustom01" style="margin-top: 5%;">Sản Phẩm Tương Tự</label>
                                 <input type="text" class="form-control" id="nameproduct"  placeholder="Name Product" required="">
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>
<script>
 import { ModelSelect } from 'vue-search-select';
 import axios from 'axios';
  export default {
    name: 'statistical',
    components: {
      ModelSelect,
    },
    data() {
      return {
            certificatelist:'',
            timeendrefund:'',
            timestartrefund:'',
            item2: '',
            value1: ['apple', 'orange'],
            status1:'',
            options2: [
            { value: '1', text: 'Hà Nội' },
            { value: '2', text: 'Sài Gòn' },
            { value: '3', text: 'Hải Dương' },
            { value: '4', text: 'Nghệ An' },
            { value: '5', text: 'Hà Tĩnh' }
            ],
            options3: [
            ],
            editorUrl: "https://cdn.ckeditor.com/4.14.1/full-all/ckeditor.js",
            editorData: '',
            editorConfig: 
            {
                toolbarGroups : [
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                removeButtons: 'NewPage,Print,Save,Templates,Replace,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CreateDiv,Anchor,Flash,Smiley,PageBreak,ShowBlocks,About,Language,Iframe,Image',
            },
        }    
    },
    created: function()
    {
        
    },
    methods: {
        formatNames(files) {
        return files.length === 1 ? files[0].name : `${files.length} files selected`
      }
    },
    add() {
                this.$store.dispatch('product/addProduct', {
                    name: this.name,
                    price: this.price,
                });
                this.$router.push({name: 'productIndex'});
            }
  }

</script>
<style lang="scss" scoped>
.form1
{
    margin-top:100px;
   
}
.boo {
    margin-top: 57px;
    font-size: 35px;
}
.bee{
    margin-top: 57px;
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
.custom-file {
    margin-top: 15px;
    width: 86%;
}
</style>