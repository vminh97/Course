<template >
  <div class="mind">
      <div class="container-fluid mt--7">
              <div class="row">
                  <div class="col">
                      <Statistical></Statistical>
                  </div>
              </div>
      </div>
      <div class="ct">
          <div class="form1">
                <b-container fluid>
                  <b-row class="box">
                    <form @submit.prevent="edit">
                          <b-col md="12" lg="12">
                              <h1>Edit Teacher</h1>
                          </b-col>
                          <b-col lg="12" md="12">
                              <b-col md="5" lg="5" offset="4">
                                <span v-html="teacher.image_teacher">                               
                                </span>
                              </b-col>                      
                          </b-col>
                          <b-col md="12" lg="12" >
                              <b-col md="5" lg="5" offset="4">
                                  <div class="c-field">
                                          <div
                                              :class="{'has-file': showRemovedBtn}"
                                              class="c-file-input js-file-input">
                                              <div class="c-file-input__indicator">
                                                  <span class="c-file-input__indicator__icon c-icon c-icon--attach"></span>
                                              </div>
                                              <label class="c-file-input__label js-file-input__label" for="inputfile">
                                                  <span>{{ theFileName }}</span>
                                                  <input
                                                  id="inputfile"
                                                  type="file" @change="fileChangeHandler"
                                                  name="attachment" class="c-file-input__field js-file-input__field">
                                              </label>
                                              <div @click.stop="clearFileHandler" class="c-file-input__remove js-file-input__remove">
                                                  <span class="c-file-input__remove__icon c-icon c-icon--remove-circle"></span>
                                              </div>
                                          </div>
                                  </div>
                                  <svg height="15" class="plus" viewBox="0 0 469.33333 469.33333" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m437.332031 192h-160v-160c0-17.664062-14.335937-32-32-32h-21.332031c-17.664062 0-32 14.335938-32 32v160h-160c-17.664062 0-32 14.335938-32 32v21.332031c0 17.664063 14.335938 32 32 32h160v160c0 17.664063 14.335938 32 32 32h21.332031c17.664063 0 32-14.335937 32-32v-160h160c17.664063 0 32-14.335937 32-32v-21.332031c0-17.664062-14.335937-32-32-32zm0 0"/></svg>
                              </b-col>                  
                          </b-col>
                          <b-col md="12" lg="12">
                              <b-container>
                                  <b-row>
                                      <b-col md="12" lg="12">
                                          <b-row>
                                              <b-col md="2"><label for="">Họ Tên</label></b-col>
                                              <b-col md="4"><input type="text" v-model="teacher.teacher_name"></b-col>
                                              <b-col md="2"><label for="">Email</label></b-col>
                                              <b-col md="4"><input type="text" v-model="teacher.email" ></b-col>
                                          </b-row>
                                      </b-col>
                                      <b-col md="12" lg="12">
                                          <b-row>
                                              <b-col md="2"><label for="">Giới Tính</label></b-col>
                                              <b-col md="4"><b-form-radio-group
                                                              v-model="selected1"
                                                              :options="options1"
                                                              class="mb-3"
                                                              value-field="value"
                                                              text-field="text">
                                                              </b-form-radio-group>
                                                  </b-col>
                                              <b-col md="2"><label for="example-datepicker">Birthday</label></b-col>
                                              <b-col md="4"><b-form-datepicker id="example-datepicker" v-model="teacher.birthday" class="mb-2"></b-form-datepicker></b-col>
                                          </b-row>
                                      </b-col>
                                      <b-col md="12" lg="12">
                                          <b-row>
                                              <b-col md="2"><label >Địa Chỉ</label></b-col>
                                              <b-col md="4"><input type="text"  v-model="teacher.address"></b-col>
                                              <b-col md="2"><label >Số Điện Thoại</label></b-col>
                                              <b-col md="4"><input type="text" v-model="teacher.phone" ></b-col>
                                          </b-row>
                                      </b-col>
                                      <b-col md="12" lg="12">
                                          <b-row>
                                              <b-col md="2"><label for="">Tỉnh/Thành Phố</label></b-col>
                                              <b-col md="4"><model-select :options="options2"
                                                              placeholder="Chọn"></model-select>
                                                  </b-col>
                                              <b-col md="2"><label for="">Quận/Huyện</label></b-col>
                                              <b-col md="4"><model-select :options="options3"
                                                          placeholder="Chọn"></model-select>
                                              </b-col>
                                          </b-row>
                                      </b-col>
                                  </b-row>
                              </b-container>               
                          </b-col>
                           <b-col md="12" lg="12">
                              <b-container>
                                  <b-row>
                                        <div class="col-lg-3 offset-lg-5 sb">
                                                  <button class="btn btn-primary" type="submit" >Submit</button>                                   
                                        </div> 
                                  </b-row>
                              </b-container>
                          </b-col>
                    </form>
                  </b-row>
              </b-container>
          </div>
      </div>
  </div>
</template>
<script>
import { mapState } from 'vuex';
import Statistical from '../Tables/Statistical';
import { ModelSelect } from 'vue-search-select';
import VuePassword from 'vue-password';
export default {
    name: 'statistical',
    props: {
        labelPlaceholder: {
        type: String,
        default:''
        },
    },
    components: {
      ModelSelect,
      VuePassword,
      Statistical
    },
    data() {
      return {
        updateStrength:'1',
        selected1: 'male',
        options1: [
          { value: '1', text: 'Nam' },
          { value: '0', text: 'Nữ' },
        ],
        options2: [
          { value: '1', text: 'Hà Nội' },
          { value: '2', text: 'Sài Gòn' },
          { value: '3', text: 'Hải Dương' },
          { value: '4', text: 'Nghệ An' },
          { value: '5', text: 'Hà Tĩnh' }
        ],
        options3: [
          { value: '1', text: 'Hà Nội' },
          { value: '2', text: 'Sài Gòn' },
          { value: '3', text: 'Hải Dương' },
          { value: '4', text: 'Nghệ An' },
          { value: '5', text: 'Hà Tĩnh' }
        ],
        item2: '',
        value: '',
        files: [],
        showRemovedBtn: false,
      }
    },
    beforeCreate() {
         this.$store.dispatch('teacher/fetchOne', this.$route.params.id);
    },
    computed: {
        ...mapState('teacher', {
                teacher: 'teacher'
            }),
        theFileName() {
          if ((this.files.length > 0) && 'name' in this.files[0]) {
            return this.files[0].name;
          }
          return this.labelPlaceholder;
          },
    },
    methods: {
      async edit(){
            this.$store.dispatch('teacher/edit', this.teacher);
            this.$router.push({name: 'List Teacher'});
      },
       reset () {
        this.item = {}
      },
      selectFromParentComponent1 () {
        // select option from parent component
        this.item = this.options2[0].value
      },
      reset2 () {
        this.item2 = ''
      },
      selectFromParentComponent2 () {
        // select option from parent component
        this.item2 = this.options3[0].value
      },
      fileChangeHandler(e) {
      this.files = Array.from(e.target.files);
      this.showRemovedBtn = true;
        },
        clearFileHandler() {
        const el = this.$el.querySelector('.js-file-input__field');
        const wrapper = document.createElement('form');
        this.wrapInputAndReset(el, wrapper);
        },
        wrapInputAndReset(el, wrapper) {
        // wrap input with form tag
        el.parentNode.insertBefore(wrapper, el);
        wrapper.appendChild(el);

        // reset input with form.reset()
        wrapper.reset();

        // place childNodes in document fragment
        const docFrag = document.createDocumentFragment();
        while (wrapper.firstChild) {
            const child = wrapper.removeChild(wrapper.firstChild);
            docFrag.appendChild(child);
        }

        // replace wrapper with document fragment
        wrapper.parentNode.replaceChild(docFrag, wrapper);

        this.files = [];
        this.showRemovedBtn = false;
        },
    }


}
</script>
<style lang="scss" scoped>
input[type="text"]{
    width: 85%;
    border:1px solid rgba(34,36,38,.15);
    height: 37px;
    border-radius: 4px;
    padding-left: 10px;
    &:focus{
        border:1px solid rgb(132, 132, 253);
        outline:none; 
    }
}
div#example-datepicker__outer_{
    width: 85%;
}
.col-md-12 {
    margin-top: 15px;
}
.ui.fluid.search.selection.dropdown {
    width: 85%;
}
h3 {
    text-align: center;
}
.o-container {
  padding-top: 40px;
  padding-bottom: 40px;
}
.c-field__error {
  font-size: 12px;
  color: #d71149;
}
.c-file-input {
  position: relative;
  display: block;
  height: 36px;
  border: 1px dashed #ddd;
  background-color: #fff;
}
.c-file-input:invalid,
.c-field--error .c-file-input {
  background-color: #ffe6e9;
  border-color: #ff566a;
}
.c-file-input:invalid:focus,
.c-field--error .c-file-input:focus {
  background-color: #ffe6e9;
  border-color: #ff566a;
}
.c-file-input__label {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding-left: 36px;
  padding-right: 36px;
  line-height: 36px;
  color: #999;
  font-size: 12px;
  overflow: hidden;
  word-wrap: break-word;
  z-index: 1;
}
.c-file-input__field {
  position: absolute !important;
  height: 1px !important;
  width: 1px !important;
  padding: 0 !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  z-index: -1;
}
.c-file-input__field:focus {
  outline: none;
}
.c-file-input__indicator {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 36px;
  z-index: 2;
}
.c-file-input__indicator__icon {
  color: #bbb;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
       -o-transform: translate(0, -50%);
          transform: translate(0, -50%);
  left: 4px;
  font-size: 20px;
}
.has-file .c-file-input__indicator__icon {
  color: #d71149;
}
.c-file-input__remove {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: 36px;
  z-index: 2;
}
.has-file > .c-file-input__remove {
  display: block;
}
.c-file-input__remove__icon {
  position: absolute;
  top: 50%;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
       -o-transform: translate(0, -50%);
          transform: translate(0, -50%);
  left: 4px;
  font-size: 20px;
  color: #ff566a;
}
.c-file-input.js-file-input {
    height: 62px !important;
    margin-left: 69px !important;
    width: 220px;
}
svg.plus{
    position: absolute;
    top: 26px;
    left: 186px;
}
img {
  width: 30%;
  margin: auto;
  display: block;
  margin-bottom: 10px;
}
.mind {
    background: white;
}
.box{
border: 1px solid rgba(34, 36, 38, 0.15);
margin-top: 35px;
width: 80%;
margin-left: 10%;
  h1{
    margin-left: -30px;
  }
}
</style>