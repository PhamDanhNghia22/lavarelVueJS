<template>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Detail</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="item in products" v-bind:key="item.id">
      <th scope="row">{{ item.id }}</th>
      <td>{{ item.name }}</td>
      <td>{{ item.detail }}</td>
      <td><router-link :to="{name: 'edit', params: {id: item.id} }" class="btn btn-outline-success">Edit</router-link></td>
      <td><button class="btn btn-outline-danger" @click="DeleteProd(item.id)" >Delete</button></td>

    </tr>
  </tbody>
</table>
</template>
 
<script>
    import Swal from 'sweetalert2/dist/sweetalert2.js'
    import 'sweetalert2/src/sweetalert2.scss'
    import axios from 'axios';
    import {onMounted, ref} from 'vue';
    export default {
        data(){
            return{
                products: [],
                // product:{
                //     id:'',
                //     name:'',
                //     detail:''
                // }
                product: {

                }       
            }
        },
        created(){
          axios.get('http://localhost:8000/api/products')
            .then(res=>{
              this.products = res.data.data;
              console.log(res.data);

          })
        },
        methods:{
          DeleteProd: function(id){
            // Swal.fire({
            //       icon: 'success',
            //       title: 'Xóa thành công'
            // })
            axios.delete(`http://localhost:8000/api/products/${id}`)
             .then(()=>{
                Swal.fire({
                  icon: 'success',
                  title: 'Xóa thành công'
                }).then(res=>{
                  this.products = res.data.data; 
                }).then(()=>{
                  window.location.reload();
                })
            })


          }
        }
    }
</script>