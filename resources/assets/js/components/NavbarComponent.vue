<template>

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        <slot></slot>
        <span class="caret"></span>
    </a>
   
</template>

<script>
    export default {
        props:['userrank'],
        data(){
            return{
               rank:''
            }
        },
        created(){
            this.rank= this.userrank;
        }   
    }
</script>
