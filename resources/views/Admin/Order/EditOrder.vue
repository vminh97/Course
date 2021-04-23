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
                    <h1>Edit Order</h1>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" @submit.prevent="edit">
                            <div class="form-row" >
                                <div class="col-lg-4 " >
                                    <label class="form-control-label" >ID Order</label>
                                    <input type="text"  class="form-control" id="idorder" v-model="order.id" required="" disabled>
                                </div>
                                <div class="col-lg-4 " >
                                    <label class="form-control-label">Order Date</label>
                                    <input type="text"  class="form-control" id="orderdate" v-model="order.created_at"   required="" disabled>
                                </div>
                                <div class="col-lg-4" >
                                    <label class="form-control-label" >ID Customer</label>
                                    <input type="text"  class="form-control" id="idcustomer"  v-model="order.customer_code"  required="" disabled>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="col-lg-5" >
                                    <label class="form-control-label" >Name Customer</label>
                                    <input type="text"  class="form-control" id="namecustomer" v-model="order.customer_name" disabled>
                                </div>
                                <div class="col-lg-4" >
                                    <label class="form-control-label" >Email</label>
                                    <input type="text"  class="form-control" id="email"  v-model="order.customer_email" disabled>
                                </div>
                                <div class="col-lg-3" >
                                    <label class="form-control-label" >Phone</label>
                                    <input type="text"  class="form-control" id="phone" v-model="order.customer_phone"  disabled>
                                </div>
                            </div>
                            <div class="form-row" >
                                <div class="col-lg-4 " >
                                    <label class="form-control-label">Payment Method</label>
                                    <input type="text"  class="form-control" id="paymethod" v-model="order.payment_method"  required="" disabled>
                                </div>
                                <div class="col-lg-4 " >
                                    <label class="form-control-label">Order Status</label>
                                    <b-form-select v-model="selected" :options="options123"></b-form-select>
                                </div>
                                <div class="col-lg-4 " >
                                    <label class="form-control-label">Delivery Date</label>
                                    <b-form-datepicker id="example-datepicker" v-model="order.deliverydate" class="mb-2"></b-form-datepicker>
                                </div>
                            </div>
                            <div class="form-row gn">
                               <div class="col-lg-6 " >
                                   <p class="title-order">Địa Chỉ Giao Hàng</p>
                                </div>
                                <div class="col-lg-6 " >
                                   <p class="title-order">Chi Tiết Đơn Hàng</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Tên Người Nhận</label>
                                    <input type="text"  class="form-control" id="receivername" v-model="order.receiver_name"   required="" disabled>
                                </div>
                                <div class="col-lg-5 offset-lg-1" >
                                    <label class="form-control-label">Ngày Nhận Hàng Dự Kiến</label>
                                    <input type="text"  class="form-control" id="receiverdate" v-model="order.receiver_time"  required="" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Tỉnh</label>
                                    <input type="text"  class="form-control" id="provice" v-model="order.receiver_provice"  required="" disabled>
                                </div>
                               <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Thời Gian Giao Hàng</label>
                                    <input type="text"  class="form-control" id="timecount"  v-model="order.count_date" required="" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Thành Phố</label>
                                    <input type="text"  class="form-control" id="city" v-model="order.receiver_city"  required="" disabled>
                                </div>
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Phương Pháp Vận Chuyển</label>
                                    <input type="text"  class="form-control" id="shipmethod"  v-model="order.ship_method" required="" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Địa Chỉ</label>
                                    <input type="text"  class="form-control" id="address" v-model="order.address"  required="" disabled>
                                </div>
                                <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Người Vận Chuyển</label>
                                    <input type="text"  class="form-control" id="carrier"  v-model="order.shipper_on" required="" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                               <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Thông Tin Thêm</label>
                                    <input type="text"  class="form-control" id="paymethod"   required="" disabled>
                                </div>
                              <div class="col-lg-5 offset-lg-1 " >
                                    <label class="form-control-label">Ghi Chú</label>
                                    <input type="text"  class="form-control" id="paymethod" v-model="order.status"  required="" disabled>
                                </div>
                            </div>
                            <div class="form-row gn">
                               <div class="col-lg-12">
                                    <p class="title-order">Thông Tin Chi Tiết Sản Phẩm</p>
                               </div>
                            </div>
                            <div class="table-responsive">
                                <base-table class="table align-items-center table-flush"
                                            tbody-classes="list"
                                            :data="orderdetails">
                                    <template slot="columns">
                                    <th>Mã Sản Phẩm</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Tên Giảng Viên</th>
                                    <th>Tên Ngành Học</th>
                                    <th>Gía Tiền</th>
                                    <th>Giảm Giá</th>
                                    <th>Tiền Sau khi giảm giá</th>
                                    <th>Action</th>
                                    </template>
                                    <template slot-scope="{row}">
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{row.id}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{row.created_at}}
                                    </td>
                                    <td>
                                        {{row.status}}
                                    </td>
                                    <td>
                                        {{row.customer_name}}
                                    </td>
                                    <td>
                                        {{row.product_price}}
                                    </td>
                                    <td>
                                        {{row.sale_price}}
                                    </td>
                                    <td>
                                        {{row.product_price_sale}}
                                    </td>    
                                    <td>
                                        <a type="text" @click="delete(row.id)" class="table-action table-action-delete" data-toggle="tooltip">
                                                <i class="fas fa-trash" ></i>   
                                        </a>
                                    </td>
                                    </template>

                                </base-table>
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
        selected: null,
        options123: [
          { value: 'c', text: 'wait for payment confirmation' },
          { value: null, text: 'Wait for pay' },
          { value: 'b', text: 'waiting for shipping' },
          { value: 'd', text: 'shipped' },
        ]
      }
    },
    beforeCreate() {
         this.$store.dispatch('order/fetchOne', this.$route.params.id);
    },
    computed: {
            ...mapState('order', {
                order: 'order'
            }),
            orderdetails () {
            return this.$store.state.orderdetail.orderdetails;
            }
        },
    created: function()
    {
        this.$store.dispatch('orderdetail/fetch');
    },
    methods: { 
        async edit(){
            this.$store.dispatch('order/edit', this.order);
            this.$router.push({name: 'List Order'});
        },
        async delete(id) {
	            let result = confirm("Are you sure you want to delete this item?");
	            if (!result) {
                    return;
                }
                this.$store.dispatch('order/delete', id);
            }
    }
  }
</script>
<style lang="scss" scoped>
td {
    text-align: center;
}
p.title-order {
    font-size: 26px;
    font-weight: 900;
    text-align: center;
}
.gn{
    border-top: 1px solid #a8a8a8;
}
a.table-action.table-action-delete {
    margin-left: -41px;
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
input#email {
    margin-top: 5px;
}
input#phone {
    margin-top: 9px;
}
div#example-datepicker__outer_ {
     width: 100%!important; 
}
</style>