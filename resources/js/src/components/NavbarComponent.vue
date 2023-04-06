<template>
  <div class="navbar-section">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Festick</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-green" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-green" href="/ticket-menu">Tickets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-green" aria-current="page" href="/aboutus">About Us</a>
            </li>
          </ul>
          <form class="d-flex" role="search" id="searchBar">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div v-if="(user.User_name == null)">
            <div class="navbar-right">
              <a href="/login" class="btn btn-outline-success">Login</a>
              <a href="/register" class="btn btn-success">Register</a>
            </div>
          </div>
          <div v-else="(user.User_name.length > 0)" @click="popUpEvent">
            <div class="navbar-right user-profile">
              <div class="up-img">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" alt="">
              </div>
              <div class="up-name prevent-select">
                <p>Hello, {{ user.User_name }}</p>

              </div>
            </div>
            <div class="up-dropdown" :class="{ hide: isActive }">
              <div class="up-container">
                <p class="text-center mt-2 font-weight-bold">{{ user.User_name }}</p>
                <div class="up-image">
                  <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" alt="">
                </div>
                <ul class=" navbar-nav up-center">
                  <li class="nav-item">
                    <a class="nav-link nav-green" href="/myaccount">My Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-green" href="">Settings</a>
                  </li>
                </ul>
                <div class="up-footer up-center">
                  <button type="submit" class="btn btn-danger" @click="handleLogout">Logout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex';

export default {
  name: 'navbar-component',
  data() {
    return {
      isActive: true,
    }
  },
  computed: {
    ...mapState([
      'user', 'isLogin'
    ]),

  },
  methods: {
    popUpEvent(event) {
      if (this.isActive == false) {
        this.isActive = true
      } else {
        this.isActive = false
      }

    },
    ...mapMutations([
      'DELETE_USER',
      'MANIPULATE_VIEW'
    ]),

    handleLogout(event) {
      this.DELETE_USER()
      this.$router.push({ name: 'landing_page' })
    }

  }
}
</script>

<style lang="scss" scoped>
.navbar-section {
  width: 100%;

  .navbar {
    background-color: transparent !important;
  }
}

.navbar-brand {
  font-family: Rubik;
  font-size: 32px;
}

#searchBar {
  max-width: 650px;
  width: 600px;
  justify-content: flex-start !important;
}

.form-control {
  width: 250px !important;
  border-color: #1C6758;
}

.user-profile {
  position: relative;
  margin-right: 20px;
  width: 150px;
  height: 40px;
  border: 1px solid;
  border-radius: 6px;
  border-color: #1C6758;
  padding-left: 5px;
  padding-right: 5px;
  display: flex;
  align-items: center;
  cursor: pointer;

  .up-img {
    padding-right: 8px;

    img {
      width: 30px;
      height: 30px;
    }
  }

  .up-name {
    width: 100%;
    max-width: 90px;
    height: 100%;
    padding: 11px 0;

    p {
      font-size: 10px;
      color: #3D8361;
      font-weight: 700;
      max-width: 92px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
}

.up-dropdown {
  position: absolute;
  top: 10;
  right: 0;
  margin-right: 15px;
  width: 200px;
  height: 230px;
  background-color: #FBFBFB;
  border-radius: 10px;
  z-index: 3;
  box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
}

.nav-green:hover {
  color: #3D8361 !important;
}

.prevent-select {
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.up-container {
  padding: 10px;

  .up-image {
    width: 100%;
    display: flex;
    justify-content: center;

    img {
      width: 60px;
      height: 60px;
    }
  }

  .up-footer {
    margin-top: 10px;
  }
}

.up-center {
  display: flex;
  justify-content: space-evenly;
}
</style>
