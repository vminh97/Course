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
                    <h1>Add New</h1>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" @submit.prevent="add">
                            <div class="form-row">
                                <div class="col-lg-12">                               
                                    <div class="row">
                                       <div class="col-lg-8">
                                            <label class="form-control-label" for="validationCustom01" >Tiêu Đề Tin Tức</label>
                                             <b-form-textarea
                                                    id="textarea2"
                                                    v-model='newtoday.content_news'
                                                    rows="2"
                                                    max-rows="3"
                                            ></b-form-textarea>
                                       </div>
                                       <div class="col-lg-4">
                                             <label class="form-control-label" for="validationCustom01" >Danh Sách Sản Phẩm</label>
                                            <b-form-textarea
                                                    id="textarea3"
                                                    v-model='newtoday.category_id'
                                                    rows="2"
                                            ></b-form-textarea>
                                       </div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="col-lg-12">                               
                                    <div class="row">
                                       <div class="col-lg-2 offset-lg-2" >
                                            <label class="form-control-label" style="margin-top: 10px;" for="validationCustom01" >Trạng Thái Tin Tức</label>
                                       </div>
                                       <div class="col-lg-6">
                                            <b-form-select v-model="selected" :options="options"></b-form-select>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                       <div class="form-group">
                                            <label class="form-control-label akl" >Ngày Tin Tức</label>
                                            <b-form-datepicker
                                                id="datepicker-buttons1"
                                                today-button
                                                reset-button
                                                close-button
                                                locale="vi"
                                                v-model='newtoday.created_at'
                                            ></b-form-datepicker>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <label class="form-control-label" style="text-align:center" >Ngày Phát Hành</label>
                                        <b-row>
                                            <b-col lg="6">
                                                  <b-form-timepicker v-model="newtoday.deadline_date" locale="en"></b-form-timepicker>
                                            </b-col>
                                            <b-col lg="6">                                     
                                                    <b-form-datepicker
                                                            id="datepicker-buttons2"
                                                            today-button
                                                            reset-button
                                                            close-button
                                                            locale="vi"
                                                            v-model='newtoday.deadline_date'
                                                    ></b-form-datepicker>
                                            </b-col>
                                        </b-row>
                                    </div>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <label class="form-control-label" for="validationCustom01">Mô tả ngắn</label>
                                    <b-form-textarea
                                        id="textarea1"
                                        rows="3"
                                        max-rows="6"
                                        v-model='newtoday.description_news'
                                    ></b-form-textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <label class="form-control-label" for="validationCustom01" >Nội Dung</label>
                                    <ckeditor :config="editorConfig" :editor-url="editorUrl"  v-model='newtoday.title_news'    ></ckeditor>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3 offset-lg-5 sb">
                                          <button class="btn btn-primary" >Submit</button>                                   
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
        value:'',
        text:'',
        editorUrl: "https://cdn.ckeditor.com/4.14.1/full-all/ckeditor.js",
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
        selected:'',
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option'},
        ]
      }
    },
    beforeCreate() {
         this.$store.dispatch('newtoday/fetchOne', this.$route.params.id);
    },
    computed: {
            ...mapState('newtoday', {
                newtoday: 'newtoday'
            }),
        },
    methods: { 
            async add() {
                this.$store.dispatch('newtoday/add', {
                    title_news: this.title_news,
                    description_news: this.description_news,
                    content_news:this.content_news,
                    user_id:this.user_id,
                    status:this.status,
                    news_Date:this.news_Date,
                    news_image:this.news_image,
                    category_id:this.category_id

                });
                this.$router.push({name: 'List New'});
            }
    
    }
  }
</script>
<style lang="scss" scoped>
label.form-control-label.akl {
    margin-top: 17px;
}
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

</style>