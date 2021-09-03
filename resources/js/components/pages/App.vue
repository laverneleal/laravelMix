<template>
  <v-app>
    <app-header></app-header>
    <app-drawer></app-drawer>
    <v-main>
      <router-view></router-view>
    </v-main>
    <app-footer></app-footer>
  </v-app>
</template>
<script>
import Header from "../modules/Header.vue";
import Drawer from "../modules/Drawer.vue";
import Footer from "../modules/Footer.vue";

export default {
  data() {
    return {
      // drawer: null,
    };
  },
  components: {
    "app-header": Header,
    "app-drawer": Drawer,
    "app-footer": Footer,
  },
};
</script>

