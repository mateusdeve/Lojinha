<template>
    <div>
        <Menu/>
        <v-container>
            <v-row>
                <v-col
                cols="12"
                style="height:50px;"
                >
                </v-col>
                <v-col
                cols="1"
                >
                </v-col>
                <v-col
                cols="5"
                >
                <v-hover v-slot:default="{ hover }">
                <v-card
                    :elevation="hover ? 12 : 2"
                    height="400"
                    max-width="400"
                >
                    <img src="../../assets/iphone.jpg" style="width:390px; margin-top: 30px;"/>
                </v-card>
                </v-hover>
                </v-col>
                <v-col
                cols="5"
                >
                    <h1>{{ produto.nome}}</h1>
                    <h3 v-if="produto.situacao" style="margin-top: 30px">Em estoque</h3>
                    <h3 v-else style="margin-top: 30px">Em falta</h3>
                    <h3 style="margin-top: 30px">Valor: R$ {{ produto.valor }} </h3>
                    <h3 style="margin-top: 30px">Descrição : {{ produto.sobre }}</h3>
                    <v-row >
                        <v-col
                        cols="9"
                        style="margin-top: 30px"
                        >
                            <v-btn 
                            text 
                            icon 
                            color="cyan"
                            @click="menos">
                                <img style="width:35px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiIgY2xhc3M9IiI+PGc+PHBhdGggZD0ibTI1NiA1MTJjLTE0MS4xNjQwNjIgMC0yNTYtMTE0LjgzNTkzOC0yNTYtMjU2czExNC44MzU5MzgtMjU2IDI1Ni0yNTYgMjU2IDExNC44MzU5MzggMjU2IDI1Ni0xMTQuODM1OTM4IDI1Ni0yNTYgMjU2em0wLTQ4MGMtMTIzLjUxOTUzMSAwLTIyNCAxMDAuNDgwNDY5LTIyNCAyMjRzMTAwLjQ4MDQ2OSAyMjQgMjI0IDIyNCAyMjQtMTAwLjQ4MDQ2OSAyMjQtMjI0LTEwMC40ODA0NjktMjI0LTIyNC0yMjR6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBGRkY4IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0zNjggMjcyaC0yMjRjLTguODMyMDMxIDAtMTYtNy4xNjc5NjktMTYtMTZzNy4xNjc5NjktMTYgMTYtMTZoMjI0YzguODMyMDMxIDAgMTYgNy4xNjc5NjkgMTYgMTZzLTcuMTY3OTY5IDE2LTE2IDE2em0wIDAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwRkZGOCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD48L2c+IDwvc3ZnPg==" />
                            </v-btn>
                            &nbsp; {{ quantidade }} &nbsp;
                            <v-btn 
                            text
                            icon
                            color="cyan"
                            @click="mais"
                            >
                                <img style="width:35px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDQwMCA0MDAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQwMCA0MDA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xOTkuOTk1LDBDODkuNzE2LDAsMCw4OS43MiwwLDIwMGMwLDExMC4yNzksODkuNzE2LDIwMCwxOTkuOTk1LDIwMEMzMTAuMjc3LDQwMCw0MDAsMzEwLjI3OSw0MDAsMjAwICAgIEM0MDAsODkuNzIsMzEwLjI3NywwLDE5OS45OTUsMHogTTE5OS45OTUsMzczLjc3QzEwNC4xODIsMzczLjc3LDI2LjIzLDI5NS44MTYsMjYuMjMsMjAwYzAtOTUuODE3LDc3Ljk1MS0xNzMuNzcsMTczLjc2NS0xNzMuNzcgICAgYzk1LjgxNywwLDE3My43NzIsNzcuOTUzLDE3My43NzIsMTczLjc3QzM3My43NjksMjk1LjgxNiwyOTUuODEyLDM3My43NywxOTkuOTk1LDM3My43N3oiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwRkZGOCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCQk8cGF0aCBkPSJNMjc5LjQ3OCwxODYuODg0aC02Ni4zNjNWMTIwLjUyYzAtNy4yNDMtNS44NzItMTMuMTE1LTEzLjExNS0xMy4xMTVzLTEzLjExNSw1Ljg3My0xMy4xMTUsMTMuMTE1djY2LjM2OGgtNjYuMzYxICAgIGMtNy4yNDIsMC0xMy4xMTUsNS44NzMtMTMuMTE1LDEzLjExNWMwLDcuMjQzLDUuODczLDEzLjExNSwxMy4xMTUsMTMuMTE1aDY2LjM1OHY2Ni4zNjJjMCw3LjI0Miw1Ljg3MiwxMy4xMTQsMTMuMTE1LDEzLjExNCAgICBjNy4yNDIsMCwxMy4xMTUtNS44NzIsMTMuMTE1LTEzLjExNHYtNjYuMzY1aDY2LjM2N2M3LjI0MSwwLDEzLjExNC01Ljg3MywxMy4xMTQtMTMuMTE1ICAgIEMyOTIuNTkzLDE5Mi43NTcsMjg2LjcyLDE4Ni44ODQsMjc5LjQ3OCwxODYuODg0eiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDBGRkY4IiBkYXRhLW9sZF9jb2xvcj0iIzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                            </v-btn>
                        </v-col>
                        <v-col cols="md-9">
                             <h2>Total R$ {{ valor }}</h2>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>

import Menu from '@/components/Menu'
import axios from 'axios'

export default {
    components: {
        Menu,
    },
    data() {
        return {
            produto: {},
        }
    },
    mounted() {
        axios
            .get(`http://localhost:8000/api/users/${this.$route.query.id}`)
            .then(res => {
                console.log(res.data.produtos);
                this.produto = res.data.produtos[0];
            })
            .catch(err => {
                console.log(err);
            })
    },
    methods: {

        mais(){
            this.$store.commit("produto/increment");
        },

        menos(){
            this.$store.commit("produto/decrement");
        },

    },
    computed: {

        produtosIsEmpty() {
            return !!this.produto;
        },

        quantidade: {
            get() {
                return this.$store.state.produto.quantidade;
            }
        },

        valor() {
            return this.produto.valor !== undefined
                ? this.$store.state.produto.quantidade * this.produto.valor
                : 0;
        }
  },
}

</script>