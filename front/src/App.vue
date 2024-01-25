<script >
import HelloWorld from './components/HelloWorld.vue'
import axios from 'axios';
export default{
data(){
  return{
    listaToDo:[]
  }
},
mounted() {


axios.get('http://localhost:8888/php-todo-list-json/back/')
     .then(res => {
      // DEBUG PER CONTROLLARE SE LA LISTA VIENE PASSATA CORRETTAMENTE
      console.log(res.data);
      this.listaToDo= res.data;
     }).catch(err => console.error(err));
}
}
</script>

<template>
  <ul>
    <li v-for="el in listaToDo">
    {{ el }}
    </li>
  </ul>
</template>

<style scoped>
</style>
