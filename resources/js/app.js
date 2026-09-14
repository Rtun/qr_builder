import './bootstrap';
import '../css/sass/app.scss';

import { createApp } from 'vue';
import App from './components/App.vue'; // O './components/App.vue' según el casing de tu carpeta

// Instanciar la app con App.vue como componente raíz
const app = createApp(App);

app.mount('#app');