import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { library } from '@fortawesome/fontawesome-svg-core';
import { far } from '@fortawesome/free-regular-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { fas } from '@fortawesome/free-solid-svg-icons';

library.add(far,fas);

// Configura il componente globale FontAwesomeIcon
const app = createApp(App);
app.component('font-awesome-icon', FontAwesomeIcon);
app.mount('#app')
