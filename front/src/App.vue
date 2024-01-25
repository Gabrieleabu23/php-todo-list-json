<script >
import HelloWorld from './components/HelloWorld.vue'
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css';
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
  <h1 class="text-center">PHP COMUNICA CON VITE</h1>
  <div class="container">
    <ol class="mt-4 ">
      <li v-for="el in listaToDo">
      <span :class="el.fatto ? 'text-decoration-line-through': ''">{{ el.name }}</span>
      </li>
    </ol>
  </div>
</template>

<style scoped>
</style>
