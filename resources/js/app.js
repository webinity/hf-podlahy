import { createApp } from 'vue';
import Form from './components/Form.vue';
import Slider from './components/Swiper.vue';

const app = createApp({});

app.component('ContactForm', Form);
app.component('Slider', Slider);

app.mount('#app');