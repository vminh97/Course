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
            <div class="row lx">
                <div class="col-sm-12 col-md-4 col-lg-4">
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
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div id="datatable-basic_filter" class="dataTables_filter">
                    <span class="fill1">
                        Search:
                    </span>  
                        <input type="search" class="form-control form-control-sm fill-table" placeholder="" aria-controls="datatable-basic">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <base-table class="table align-items-center table-flush"
                            tbody-classes="list"
                            :data="teachers">
                    <template slot="columns">
                    <th>Id</th>
                    <th>Name Teacher</th>
                    <th>Image Teacher</th>
                    <th>Active</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>status</th>
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
                        {{row.teacher_name}}
                    </td>
                    <td>
                        {{row.image_teacher}}
                    </td>
                    <td v-if="row.isactive = '1'" >
                        <badge class="badge-dot mr-4" >
                        <i :class="`bg-success`"></i>
                        </badge>
                    </td>
                        <td v-else>
                        <badge class="badge-dot mr-4" >
                        <i :class="`bg-danger`"></i>
                        </badge>
                    </td>
                    <td>
                        {{row.birthday}}
                    </td>
                    <td>
                        {{row.email}}
                    </td>
                    <td>
                        {{row.status}}
                    </td> 
                    <td class="text-right action" >
                        <a type="text" class="table-action" data-toggle="tooltip">
                            <router-link :to="{ name: 'Edit Teacher',params: {id:row.id}}" >
                                <i class="fas fa-user-edit"></i>
                            </router-link>
                        </a>
                        <a type="text" @click="deleteteacher(row.id)" class="table-action table-action-delete" data-toggle="tooltip">
                                <i class="fas fa-trash" ></i>   
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
        title: 'Teacher',
      }
    },
    computed: {
        teachers () {
            return this.$store.state.teacher.teachers;
        }
    },
    created: function()
    {
        this.$store.dispatch('teacher/fetch');
    },
    methods: {
        async deleteteacher($id) {
	            let result = confirm("Are you sure you want to delete this item?");
	            if (!result) {
                    return;
                }
                this.$store.dispatch('teacher/delete', $id);
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
   color:#007bff;
}
i.fas.fa-trash:hover{
    cursor: pointer;
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
