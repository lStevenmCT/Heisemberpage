<template>
  <div class="portfolio-page">
    <!-- <ul class="portfolio-cata">
      <li class="active"><a href="#">Spring / Summer 2019</a></li>
      <li><a href="#">Winter Collection</a></li>
      <li><a href="#">Cruise Collection</a></li>
      <li><a href="#">Men Collection</a></li>
    </ul> -->

    <img :src="imagen" alt="" class="portfolio-big-img" />
    <!-- Related portfolio slider -->
    <div class="portfolio-slider owl-carousel">
      <a
        v-on:click="onImageChange(portfolio.imagenes)"
        v-for="portfolio in portafolios"
        :key="portfolio.id"
        ><img :src="portfolio.imagenes" alt=""
      /></a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["portafolio"],
  data() {
    return {
      portafolios: [],
      imagen: null,
    };
  },
  setup() {},
  mounted() {
    this.portafolios = this.portafolio;
    console.log(this.portafolios);
    this.imagen = this.portafolios[0].imagenes;
  },
  methods: {
    onImageChange(data) {
     this.imagen = data;

    },
  },
};
</script>