<script>

import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css';

export default{
data(){

  return{
    listaToDo:[],
    text:''
  }
},
methods:{
  addTask(){
    // VECCHIO METODO MA NON SULL ARRAY IN .JSON
    // this.listaToDo.splice(indice, 1);

    const params = {
                params: {

                    text: this.text
                }
            };
    axios.get('http://localhost:8888/php-todo-list-json/back/addTask.php',params)
     .then(res => {
      // DEBUG PER CONTROLLARE SE LA LISTA VIENE PASSATA CORRETTAMENTE
      console.log("lista aggiornata con +:",res.data);
      this.listaToDo= res.data;
     }).catch(err => console.error(err));
  },
  delTask(indice){
    // VECCHIO METODO MA NON SULL ARRAY IN .JSON
    // this.listaToDo.splice(indice, 1);

    const params = {
                params: {

                    index: indice
                }
            };
    axios.get('http://localhost:8888/php-todo-list-json/back/delTask.php',params)
     .then(res => {
      // DEBUG PER CONTROLLARE SE LA LISTA VIENE PASSATA CORRETTAMENTE
      console.log("lista aggiornata:",res.data);
      this.listaToDo= res.data;
     }).catch(err => console.error(err));
  }
  },
mounted() {

axios.get('http://localhost:8888/php-todo-list-json/back/index.php')
     .then(res => {
      // DEBUG PER CONTROLLARE SE LA LISTA VIENE PASSATA CORRETTAMENTE
      console.log("lista data:",res.data);
      this.listaToDo= res.data;
     }).catch(err => console.error(err));
}
}
</script>

<template>
  <h1 class="text-center">PHP COMUNICA CON VITE</h1>
  <div class="container">
    <ol class="mt-4">
      <li v-for="(el, i) in listaToDo" :key="i" class="mt-2">
        <span
          :class="el.fatto ? 'text-decoration-line-through' : ''"
          @click="el.fatto = !el.fatto"
          >{{ el.name }}</span
        >
        <a class="pulsante_del text-decoration-none ms-4" @click="delTask(i)"
          ><font-awesome-icon :icon="['fas', 'x']"
        /></a>
      </li>
    </ol>
    <input type="text" v-model="text">
    <button @click="addTask()">Aggiungi</button>
  </div>
</template>

<style scoped>
span,
a {
  cursor: pointer;
}

.pulsante_del {
  color: white;
  padding: 5px 10px;
  background-color: red;
}
</style>
