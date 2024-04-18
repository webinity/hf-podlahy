import { createApp } from 'vue';
import Form from './components/Form.vue';
import Slider from './components/Swiper.vue';

const app = createApp({});

app.component('ContactForm', Form);
app.component('Slider', Slider);

app.mount('#app');

//basic js
//toggle navbar
const navbar = document.querySelector('nav')
const navbarContent = document.querySelector('.nav-content')
const open = document.querySelector('.open');
const close = document.querySelector('.close');

open.addEventListener('click', () => {
    navbar.classList.add('active');
    navbarContent.classList.add('active');
    close.style.display = 'flex'
    open.style.display = 'none'
});

close.addEventListener('click', () => {
    navbar.classList.remove('active');
    navbarContent.classList.remove('active');
    open.style.display = 'flex'
    close.style.display = 'none'
});

document.addEventListener("DOMContentLoaded", function() {
    const h1Element = document.querySelector("h1");
    h1Element.classList.add("loaded");
});