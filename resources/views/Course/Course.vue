<template>
<div >
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <Statistical></Statistical>
            </div>
        </div>
    </div>
    <div>
        <div class="card shadow">
            <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="mb-0">
                    {{title}}
                </h3>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="dataTables_length" id="datatable-basic_length">
                    <span class="fill1">
                        Show 
                    </span>
                        <select name="datatable-basic_length" aria-controls="datatable-basic" class="form-control form-control-sm fill-table">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        </select>
                        <span >entries</span>        
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div id="datatable-basic_filter" class="dataTables_filter">
                    <span class="fill1">
                        Search:
                    </span>  
                        <input type="search" class="form-control form-control-sm fill-table" placeholder="" aria-controls="datatable-basic">
                    </div>
                </div>
                <div class="col text-right">
                  <base-button type="danger">                        
                    <router-link :to="{ name: 'Add Course' }" class='add'>
                        <i class="fas fa-user-edit mr-2"></i>
                        <span class="btn-inner--text">Add Category</span>
                    </router-link>
                  </base-button>
                </div>
            </div>
            <div class="table-responsive">
            <base-table class="table align-items-center table-flush"
                        :class="type === 'dark' ? 'table-dark': ''"
                        :thead-classes="type === 'dark' ? 'thead-dark': 'thead-light'"
                        tbody-classes="list"
                        :data="listProduct">
                <template slot="columns">
                    <th><b-form-checkbox
                    id="checkbox-1"
                    v-model="status1"
                    name="checkbox-1"
                    value="accepted"
                    unchecked-value="not_accepted"
                    ></b-form-checkbox></th>
                    <th>Goods_Code</th>
                    <th>product_image</th>
                    <th>Name</th>
                    <th>Name Category</th>
                    <th>price</th>
                    <th>status</th>
                    <th>Action</th>
                </template>
                <template slot-scope="{row}">
                <th scope="row">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <b-form-checkbox
                            id="checkbox-1"
                            name="checkbox-1"
                            v-model="status1"
                            value="accepted"
                            unchecked-value="not_accepted"
                            ></b-form-checkbox>
                        </div>
                    </div>
                </th>
                <td class="budget">
                    {{row.goods_code}}
                </td>
                <td>
                   <img src="" alt="">
                </td>
                <td>
                    {{row.name_product}}
                </td>
                <td>
                    {{row.Name}}
                </td>
                <td>
                    {{row.price}}
                </td>
                <td>
                    {{row.status}}
                </td>
                <td class="text-right action" >
                    <a type="text" @click="editProduct(row.id)" class="table-action" data-toggle="tooltip">
                         <router-link :to="{ name: 'Edit Product'}" >
                             <i class="fas fa-user-edit"></i>
                         </router-link>
                    </a>
                    <a type="text" @click="deleteProduct(row.id)" class="table-action table-action-delete" data-toggle="tooltip">
                        <router-link :to="{ name: 'Delete Product'}" >
                             <i class="fas fa-trash"></i>
                        </router-link>     
                    </a>
                </td>
                </template>

            </base-table>
            </div>
            <div class="card-footer d-flex justify-content-end">
                 <base-pagination></base-pagination>
            </div>
             
        </div>
    </div>
</div>

</template>
<script>
  import axios from 'axios';
  import Statistical from '../Tables/Statistical'
  export default {
    name: 'statistical',
    components: {
      Statistical
    },
    props: {
    },
    data() {
      return {
        listProduct: [],
        title: 'Product',
        type:'',
        status1:'',
      }
    },
    created: function()
    {
        this.getListProducts();
    },
    methods: {
        async getListProducts() {
            try {
                const response = await axios.get('/api/product/index');
                this.listProduct = response.data
            } catch (error) {
                this.error = error.response.data
            }           
        },
            async editProduct()
            {
                   try {
                        this.error = null
                        const id= this.$route.params.id;
                        const response = await axios.post('/api/product/update/'+id);
                        if(response.status === 200){
                          this.product = response.data;                                                 
                          console.log(this.category)
                        }
                    } catch (error) {
                        console.log(error);
                    }
            },
            async deleteProduct()
            {
                    try {
                        this.error = null
                        const id= this.$route.params.id;
                        const response = await axios.post('/api/product/destroy/'+id);
                        if(response.status === 200){
                          this.category = this.category.filter(id);                                               
                          console.log(this.category)
                        }
                    } catch (error) {
                        console.log(error);
                    }
            }
    }  
}
</script>
<style >
select.form-control.form-control-sm.fill-table {
    display: inline !important;
    width: 19% !important;
    margin-bottom: 5%;
}
input.form-control.form-control-sm.fill-table {
  display: inline !important;
  width: 50% !important;
  margin-bottom: 5%;
}
span.fill1{
  margin-left: 10%;
}
.col.text-right {
    margin-right: 40px;
}
th,td{
    text-align: center;
}
i.fas.fa-trash {
   margin-right: 30px;
}
a.add {
    color: white;
}
a.add:hover{
    text-decoration: none !important;
}
button.btn.btn-danger {
    margin-bottom: 20px;
}
</style>
