<template >
    <div class="ct">
        <div class="form1">
              <b-container fluid>
                <b-row class="box">
                    <b-col md="12" lg="12">
                        <h3>Add Teacher</h3>
                    </b-col>
                    <b-col lg="12" md="12">
                        <b-col md="5" lg="5" offset="4" style="padding-left: 110px;">
                           <b-avatar src="img/teacher/teacher_1.png" size="10rem"></b-avatar>
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
                                        <b-col md="4"><input type="text" name="" id=""></b-col>
                                        <b-col md="2"><label for="">Email</label></b-col>
                                        <b-col md="4"><input type="text" name="" id=""></b-col>
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
                                        <b-col md="4"><b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker></b-col>
                                    </b-row>
                                </b-col>
                                <b-col md="12" lg="12">
                                    <b-row>
                                        <b-col md="2"><label for="">Địa Chỉ</label></b-col>
                                        <b-col md="4"><input type="text" name="" id=""></b-col>
                                        <b-col md="2"><label for="example-datepicker">Số Điện Thoại</label></b-col>
                                        <b-col md="4"><input type="text" name="" id=""></b-col>
                                    </b-row>
                                </b-col>
                                <b-col md="12" lg="12">
                                    <b-row>
                                        <b-col md="2"><label for="">Tỉnh/Thành Phố</label></b-col>
                                        <b-col md="4"><model-select :options="options2"
                                                        v-model="item2"
                                                        placeholder="Chọn"></model-select>
                                            </b-col>
                                            <b-col md="2"><label for="">Quận/Huyện</label></b-col>
                                            <b-col md="4"><model-select :options="options2"
                                                        v-model="item2"
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
                                    <b-col md="2" lg="2"><label for="">Password</label></b-col>
                                    <b-col md="4" lg="4">
                                    <VuePassword
                                            v-model="user.password"
                                            :strength="score"
                                            @input="updateStrength"                                  
                                        />
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>
<script>
 import { ModelSelect } from 'vue-search-select'
import VuePassword from 'vue-password';
export default {
    props: {
        labelPlaceholder: {
        type: String,
        default:''
        },
    },
    components: {
      ModelSelect,
      VuePassword,
    },
    data() {
      return {
        user: {
            email: '',
            password: ''
            },
        user2: {
        email: '',
        password: ''
        },
        score:'',
        updateStrength:'1',
         score2:'',
        updateStrength2:'1',
        selected1: 'male',
        optionscb: [
          { text: 'Nhận email từ ban đào tạo khóa học Kyna.vn',value:'1'  },
          { text: 'Nhận email nhắc nhở có bài học mới',value:'2' },
        ],
        options2: [
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
    computed: {
    theFileName() {
      if ((this.files.length > 0) && 'name' in this.files[0]) {
        return this.files[0].name;
      }
      return this.labelPlaceholder;
      },
    },
    methods: {
      reset () {
        this.item = {}
      },
      selectFromParentComponent1 () {
        // select option from parent component
        this.item = this.options[0].value
      },
      reset2 () {
        this.item2 = ''
      },
      selectFromParentComponent2 () {
        // select option from parent component
        this.item2 = this.options2[0].value
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
    },

}
</script>
<style lang="scss" scoped>
input[type="text"]{
    width: 85%;
    border:1px solid rgba(34,36,38,.15);
    height: 37px;
    border-radius: 4px;
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

////
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
.box{
border: 1px solid rgba(34, 36, 38, 0.15);
    margin-top: 35px;
}
</style>