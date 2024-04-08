import { createApp } from 'vue';
import Test from './components/Test.vue'; // Assuming Test.vue is your Vue component file

const app = createApp({});

app.component('Test', Test);

app.mount('#app');