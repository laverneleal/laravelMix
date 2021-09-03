<template>
  <div>
    <v-app-bar dark app clipped-left>
      <v-app-bar-nav-icon @click="toggleDrawer"></v-app-bar-nav-icon>
    </v-app-bar>
  </div>
</template>
<script>
export default {
  methods: {
    toggleDrawer: function () {
      console.log(this.$store.state.drawer);
      this.$store.commit("toggleDrawer");
    },
  },
};
</script>
