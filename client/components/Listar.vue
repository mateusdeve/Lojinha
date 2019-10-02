<template>
    <div>
        <v-btn
        fab
        color="cyan accent-2"
        @click="dialog = !dialog"
        >
            <v-icon>mdi-plus</v-icon>
        </v-btn>
        <v-btn
        @click="mostrar()"
        color="pink"
        dark
        fab
        >
          <v-icon>mdi-mouse</v-icon>
        </v-btn>
        <v-btn
        color="black"
        dark
        fab
        >
            <v-icon>mdi-tennis</v-icon>
        </v-btn>
            <v-dialog v-model="dialog" max-width="500px">
                <v-card>
                    <v-card-text>
                        <h1 class="text-center pt-5">Make your registration</h1>
                        <v-text-field label="Name"></v-text-field>
                        <v-text-field label="Phone"></v-text-field>
                        <v-text-field label="Email"></v-text-field>
                    </v-card-text>
                    <v-card-actions>
                        <div class="flex-grow-1"></div>
                        <v-btn text color="primary" @click="cadastro()">Submit</v-btn>
                    </v-card-actions>
                </v-card>
        </v-dialog>
 
        <v-hover v-for="produto in produtos" v-slot:default="{ hover }">
        <v-card
          :elevation="hover ? 12 : 2"
          class="mx-auto"
          height="350"
          max-width="350"
        >
          <v-card-text class="my-4 text-center title">ID: {{ produto.id }} <br> Nome: {{ produto.nome }}</v-card-text>
        </v-card>
      </v-hover>
    </div>
</template>

<script>

import axios from 'axios'

export default {

  data () {
    return {
      msg: 'Produtos',
      produtos: [],
      dialog: false,
    }
  },

  methods: {
    mostrar() {
      this.getProdutos();
    },

    getProdutos() {

      if( !this.produtosIsEmpty ) {
        this.produtos = [];
        return;
      }
      axios
        .get('http://localhost:8000/api/produtos')
        .then(res => {
          this.produtos = res.data.produtos;
        })
        .catch(res => console.log(res))
    },

    cadastro(){
        axios.post('http://localhost:8000/api/store', {
            nome    : 'Mateus',
        })
    },
  },

  computed: {
    produtosIsEmpty() {
      return this.produtos.length === 0;
    }
  },
}
</script>

<style scoped>
    .v-btn {
        margin-left: 20px;
        margin-top: 20px;
    }
</style>