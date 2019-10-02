<template>
  <v-layout>
    <v-layout class="background" justify-end align-end fill-height>
      <img src="../../assets/bg.png" class="img"/>
    </v-layout>
    <v-container
    fluid
    class="p-0 m-0">
      <Menu/>
      <btnList/>
    </v-container>
  </v-layout>
</template>

<script>

import axios from 'axios'
import Logo from '@/components/Logo'
import Menu from '@/components/Menu'
import btnList from '@/components/Listar'

export default {

  components: {
    Logo,
    Menu,
    btnList

  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  h1, h2 {
    font-weight: normal;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    display: inline-block;
    margin: 0 10px;
  }
  a {
    color: #42b983;
  }
  .p-0 {
    padding: 0px;
    margin:0px;
  }
  .background{
    position: fixed;
    width: 100%;
  }
  .img{
    padding: 20px;
  }
</style>
