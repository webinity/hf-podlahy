<template>
  <swiper-container
    :slidesPerView="2"
    :spaceBetween="8"
    :navigation="{
      nextEl: '.btn-next',
      prevEl: '.btn-back'
    }"
    :pagination="{
      el: '.custom-pagination',
      type: 'bullets',
      clickable: true
    }"
    :modules="modules"
    :loop="true"
    :breakpoints="{
      '1200': {
        slidesPerView: 3,
        spaceBetween: 32,
      }
    }"
    class="swiper-container"
    @swiperprogress="onProgress"
    @swiperslidechange="onSlideChange"
  >
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_01.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_02.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_03.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_04.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_05.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_06.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_07.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_08.webp" alt="">
      </figure>
    </swiper-slide>
    <swiper-slide>
      <figure>
        <img src="assets/imgs/FH_09.webp" alt="">
      </figure>
    </swiper-slide>
  </swiper-container>
  <div class="btn-back">
    <figure>
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
    </figure>
  </div>
  <div class="btn-next">
    <figure>
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
    </figure>
  </div>
  <div class="custom-pagination"></div>
</template>

<script>
  import { register } from 'swiper/element/bundle';

  register();

  export default {
    setup() {
      const onProgress = (e) => {
        const [swiper, progress] = e.detail;
        console.log(progress)
      };

      const onSlideChange = (e) => {
        console.log('slide changed')
      }

      return {
        onProgress,
        onSlideChange,
      };
    }
  }
</script>
