<template>
    <div class="customer" style="width=100%">
        <b-container>
            <b-col cols="12" md="12" lg="12">
                <b-row class="box">
                <b-col md="12" lg="12"  >
                    <p class="title-keyword">
                        Thông tin Cá Nhân
                    </p>
                </b-col>
                <b-col md="12" lg="12" >
                    <b-col md="5" lg="5" offset-lg="4" cols="4">
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
                                <img src="img/svg/plus.svg" class="plus" alt="">
                    </b-col>                  
                </b-col>
                <b-col md="12" lg="12">
                    <b-container>
                        <b-row>
                            <b-col md="12" lg="12" cols="12">
                            <b-row>
                                <b-col md="2" lg="2" cols="12"><label for="">Họ Tên</label></b-col>
                                <b-col md="4" lg="4">
                                  <div class="form-group"  :class="{ 'form-group--error': $v.customer_name.$error }">
                                        <input type="text" class="form-control" v-model.trim="$v.customer_name.$model" id="customer_name" style="width:100%!important"/>
                                        <div class="error" v-if="!$v.customer_name.required">Tên Đăng Nhập Không Được Để Trống!</div>
                                        <div class="error" v-if="!$v.customer_name.minLength">Tên Đăng Nhập Không Dưới {{$v.customer_name.$params.minLength.min}} Kí Tự</div> 
                                  </div>      
                                </b-col>                                     
                                <b-col md="2" lg="2" cols="12"><label for="">Email</label></b-col>
                                <b-col md="4" lg="4" cols="12">
                                  <div class="form-group"  :class="{ 'form-group--error': $v.email.$error }">
                                        <input type="text" class="form-control" v-model.trim="$v.email.$model" id="email" style="width:100%!important"/>
                                        <div class="error" v-if="!$v.email.email">Bạn không Nhập Đúng Định Dạng Email</div>
                                  </div>
                                </b-col>
                            </b-row>
                            </b-col>
                            <b-col md="12" lg="12" cols="12">
                              <b-row>
                                  <b-col md="2" lg="2" cols="12"><label for="">Giới Tính</label></b-col>
                                  <b-col md="4" lg="4" cols="12"><b-form-radio-group
                                                  v-model="selected1"
                                                  :options="options1"
                                                  class="mb-3"
                                                  value-field="value"
                                                  text-field="text">
                                                  </b-form-radio-group>
                                      </b-col>
                                  <b-col md="2" lg="2" cols="12"><label for="example-datepicker">Birthday</label></b-col>
                                  <b-col md="4" lg="4" cols="12"><b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker></b-col>
                              </b-row>
                            </b-col>
                            <b-col md="12" lg="12" cols="12">
                            <b-row>
                                <b-col md="2" lg="2" cols="12"><label for="">Địa Chỉ</label></b-col>
                                <b-col md="4" lg="4" cols="12">
                                  <div class="form-group"  :class="{ 'form-group--error': $v.address.$error }">
                                        <input type="text" class="form-control" v-model.trim="$v.address.$model" id="address" style="width:100%!important"/>
                                        <div class="error" v-if="!$v.address.required">Địa Chỉ Không Được Để Trống!</div>
                                  </div> 
                                </b-col>
                                <b-col md="2" lg="2" cols="12"><label for="example-datepicker">Số Điện Thoại</label></b-col>
                                <b-col md="4" lg="4" cols="12">
                                  <div class="form-group"  :class="{ 'form-group--error': $v.phone.$error }">
                                        <input type="text" class="form-control" v-model.trim="$v.phone.$model" id="phone" style="width:100%!important"/>
                                        <div class="error" v-if="!$v.phone.required">Số Điện Thoại Không Được Để Trống!</div>
                                        <div class="error" v-if="!$v.phone.integer">Số Điện Thoại Nhập Vào Phải Là Số Nguyên!</div>
                                  </div>
                                </b-col>
                            </b-row>
                            </b-col>
                            <b-col md="12" lg="12" cols="12">
                            <b-row>
                                <b-col md="2" lg="2" cols="12"><label for="">Tỉnh/Thành Phố</label></b-col>
                                <b-col md="4" lg="4" cols="12"><model-select :options="options2"
                                                v-model="item2"
                                                placeholder="Chọn"></model-select>
                                    </b-col>
                                    <b-col md="2" lg="2" cols="12" ><label for="">Quận/Huyện</label></b-col>
                                    <b-col md="4" lg="4" cols="12"><model-select :options="options2"
                                                v-model="item2"
                                                placeholder="Chọn"></model-select>
                                    </b-col>
                            </b-row>
                            </b-col>
                            <b-col md="12" lg="12" cols="12">
                                <b-col md="6" lg="6" cols="12">
                                    <b-form-checkbox-group
                                        v-model="selected"
                                        :options="optionscb"
                                        value-field="value"
                                        name="flavour-2a"
                                    ></b-form-checkbox-group>
                                </b-col>
                            </b-col>
                        </b-row>
                    </b-container>               
                </b-col>
                <b-col md="12" lg="12" cols="12">
                   <b-container>
                       <b-row>
                            <b-col md="2" lg="2" cols="12"><label for="">Password</label></b-col>
                            <b-col md="4" lg="4" cols="12" >
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
            </b-col>
        </b-container>
    </div>
</template>
<script>
import { required, minLength,email,sameAs,integer  } from 'vuelidate/lib/validators'
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
            password: ''
            },
        user2: {
            password: ''
            },
        customer_name:'',
        email:'',
        score:'',
        updateStrength:'1',
         score2:'',
        updateStrength2:'1',
        selected1: 'male',
        selected:['1','2'],
        options1: [
          { text: 'Nam' , value: 'male' },
          { text: 'Nữ', value: 'woman'  },
        ],
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
    validations: {
      customer_name: {
        required,
        minLength: minLength(8)
      },
      email: {
        email,
        required
      },
      address:{
        required
      },
      phone:{
        integer,
        required
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
.customer{
  background: white;
}

@media all and(max-width: 576px) { 
  .c-file-input.js-file-input[data-v-66da31d2] {
    margin-left: 0px!important;
  }
  svg.plus {
    left: 116px!important;
  }
  input[type="text"]{
    width: 100%;
  }
  .ui.fluid.search.selection.dropdown {
    width: 100%;
  }

}
// Medium devices (tablets, 768px and up)
@media all and (max-width: 768px) and (min-width:577px ) {
    
 }

// Large devices (desktops, 992px and up)
@media all and (max-width:992px ) and (min-width:769px ) { 

}

// Extra large devices (large desktops, 1200px and up)
@media all and (min-width:1200px ) { 
  
}

</style>