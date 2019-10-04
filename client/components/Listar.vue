<template>
    <div class="z-index">
        
          <v-dialog v-model="dialog" max-width="500px">
            <v-card>
                <v-card-text>
                    <h1 class="text-center pt-5">Make your registration</h1>
                    <v-text-field v-model="form.nome" label="Name"></v-text-field>
                    <v-text-field v-model="form.phone" label="Phone"></v-text-field>
                    <v-text-field v-model="form.email" label="Email"></v-text-field>
                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn text color="primary" @click="cadastro()">Submit</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <v-container>
          <v-btn
          fab
          color="cyan accent-2"
          @click="dialog = !dialog"
          >
            <v-icon>mdi-tennis</v-icon>
        </v-btn>
          <v-row>
            <v-col cols="12">
              <h1 class="text-center">Escolha um produto</h1>
            </v-col>

            <v-layout row wrap>
              <v-flex xs12 md3 lg4 v-for="produto in produtos" v-bind:key="produto.id">
                <v-hover v-slot:default="{ hover }">
          
                    <v-card
                      :elevation="hover ? 12 : 2"
                      class="mx-auto"
                      height="350"
                      max-width="350"
                    >
                      <v-card-text class="my-4 text-center title">ID: {{ produto.id }} <br> Nome: {{ produto.nome }}</v-card-text>
                      <v-layout fill-height column justify-center align-center>
                        <v-btn
                            style="margin:0"
                            color="deep-purple accent-4"
                          >
                          <nuxt-link style="text-decoration: none;" class="text-white" :to="{path: `produtos/carrinho?id=${produto.id}`, params: { id:produto.id } }">Ver detalhes</nuxt-link>
                          </v-btn>
                      </v-layout>
                    </v-card>
                </v-hover>
              </v-flex>
            </v-layout>
          </v-row>
        </v-container>
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
      form: {
        nome: "",
        phone: "",
        email: ""
      },
    }
  },

  mounted() {
    this.getProdutos();
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
        axios
          .post('http://localhost:8000/api/store', this.form)
          .then(res => {
            this.produtos = res.data.produtos;
            this.dialog = false;
          });
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
    .h-100 {
      height: 60%;
    }
    .text-white {
      color: #ffffff;
    }
    .text-center {
      text-align: center;
    }
</style>