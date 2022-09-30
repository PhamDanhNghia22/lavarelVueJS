<template>
<div>
        <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProd" >
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="product.name" >
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="product.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
  </div></template>
 
<script>
    import Swal from 'sweetalert2/dist/sweetalert2.js'
    import 'sweetalert2/src/sweetalert2.scss';
    import axios from 'axios';
    export default {
        data(){
            return{
                product:{}
            }
        },
        methods:{
            addProd: function(){
                axios.post('http://localhost:8000/api/products',this.product)
                .then(()=>{
                    Swal.fire({
                            icon: 'success',
                            text: 'Them thanh cong'
                    }).then(response=>{
                        this.$router.push({
                            name:'',
                            detail:''
                        })
                    }).then(()=>{
                        window.location.assign('/');
                    })
                })
            }
        }

    }
</script>