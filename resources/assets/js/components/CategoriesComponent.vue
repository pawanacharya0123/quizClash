<template>
    <div>
        <li v-for="category in categories" v-bind:key="category.id">
            <a :href="'/gameplay/' +category.id" v-text="category.category" class="btn btn-outline-info btn-block"></a>   
        </li>
    </div>
</template>


<script>
    export default {
        
        props:['items'],

         data(){
            return{
                categories: ['']
            }
        },

        created(){
           return this.categories= this.items;
        }
    }
</script>

<style scoped>
  li{
      text-align: center;
      
  }
</style>
