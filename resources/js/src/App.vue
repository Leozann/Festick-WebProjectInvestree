<template>
  <div class="app">
    <div class="main-container">
      <navbar-component :class="hideClass"></navbar-component>
      <router-view />
      <footer-component :class="hideClass"></footer-component>
    </div>
  </div>
</template>

<script>
import NavbarComponent from './components/NavbarComponent.vue';
import FooterComponent from './components/FooterComponent.vue';

import { mapState, mapMutations } from 'vuex';
export default {
  components: { NavbarComponent, FooterComponent },
  name: 'app',
  computed: {
    ...mapState([
      'hideClass',
      'user',
    ]),

  },
  methods: {
    async viewRouteManipulate() {
      try {
        const data = await Object.values(this.$route);
        const rootName = data[0]
        if (rootName == 'login_page' || rootName == 'register_page') {
          this.MANIPULATE_VIEW('hide')
        } else {
          this.MANIPULATE_VIEW('')
        }
      } catch (error) {
        console.log(error)
      }
    },
    ...mapMutations([
      'ADD_LINK',
      'CHANGE_DATA',
      'MANIPULATE_VIEW'
    ]),

  },
  created() {
    this.viewRouteManipulate()

  }
}
</script>

<style lang="scss">
body {
  background-color: #FBFBFB;
}

p {
  font-size: 16px;
  font-family: Roboto;
  color: #030303;
}

a {
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
h1>*,
h2>*,
h3>*,
h4>*,
h5>*,
h6>* {
  font-family: Roboto;
  color: #030303;
}

.color-mockup {
  background-color: #D9D9D9;
}

.bg-green {
  background-color: #3D8361;
}

.bg-darkgreen {
  background-color: #1C6758;
}

.bg-cream {
  background-color: #D6CDA4;
}

.heading01 {
  font-size: 20px;
  font-weight: 600;
  color: #030303;
  letter-spacing: 3px;
}

.heading02 {
  font-size: 18px;
  font-weight: 600;
  color: #030303;
  letter-spacing: 1.5px;
}

.main-container {
  width: 100%;
  height: 100%;
}

.hide {
  display: none !important;
}

.set-shadow {
  box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
}
</style>

