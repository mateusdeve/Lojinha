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
                    <h1>Nome do produto</h1>
                    <h3 style="margin-top: 30px">Em estoque</h3>
                    <h3 style="margin-top: 30px">Valor: <span style="color: #525252"> R$ 9.999,00</span></h3>
                    <h3 style="margin-top: 30px">Sobre</h3>
                    <v-row style="margin-top: 80px">
                        <v-col
                        cols="9"
                        style="margin-top: 40px;"
                        >
                            <v-btn
                            color="cyan accent-2"
                            >
                                Adicionar ao carrinho
                            </v-btn>
                        </v-col>
                        <v-col
                        cols="3">
                        <div style="border: solid 1px; padding: 10px">
                            <h1>
                                <img style="width: 40px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMS45OTkgNTExLjk5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjk5OSA1MTEuOTk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjxnPjxnPgoJPGc+CgkJPHBhdGggZD0iTTIxNC42ODUsNDAyLjgyOGMtMjQuODI5LDAtNDUuMDI5LDIwLjItNDUuMDI5LDQ1LjAyOWMwLDI0LjgyOSwyMC4yLDQ1LjAyOSw0NS4wMjksNDUuMDI5czQ1LjAyOS0yMC4yLDQ1LjAyOS00NS4wMjkgICAgQzI1OS43MTMsNDIzLjAyOCwyMzkuNTEzLDQwMi44MjgsMjE0LjY4NSw0MDIuODI4eiBNMjE0LjY4NSw0NjcuNzQyYy0xMC45NjYsMC0xOS44ODctOC45MjItMTkuODg3LTE5Ljg4NyAgICBjMC0xMC45NjYsOC45MjItMTkuODg3LDE5Ljg4Ny0xOS44ODdzMTkuODg3LDguOTIyLDE5Ljg4NywxOS44ODdDMjM0LjU3Miw0NTguODIyLDIyNS42NSw0NjcuNzQyLDIxNC42ODUsNDY3Ljc0MnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6Izg2MDBFQyIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM3Mi42Myw0MDIuODI4Yy0yNC44MjksMC00NS4wMjksMjAuMi00NS4wMjksNDUuMDI5YzAsMjQuODI5LDIwLjIsNDUuMDI5LDQ1LjAyOSw0NS4wMjlzNDUuMDI5LTIwLjIsNDUuMDI5LTQ1LjAyOSAgICBDNDE3LjY1OCw0MjMuMDI4LDM5Ny40NTgsNDAyLjgyOCwzNzIuNjMsNDAyLjgyOHogTTM3Mi42Myw0NjcuNzQyYy0xMC45NjYsMC0xOS44ODctOC45MjItMTkuODg3LTE5Ljg4NyAgICBjMC0xMC45NjYsOC45MjItMTkuODg3LDE5Ljg4Ny0xOS44ODdjMTAuOTY2LDAsMTkuODg3LDguOTIyLDE5Ljg4NywxOS44ODdDMzkyLjUxNyw0NTguODIyLDM4My41OTUsNDY3Ljc0MiwzNzIuNjMsNDY3Ljc0MnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6Izg2MDBFQyIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM4My43MTYsMTY1Ljc1NUgyMDMuNTY3Yy02Ljk0MywwLTEyLjU3MSw1LjYyOC0xMi41NzEsMTIuNTcxYzAsNi45NDMsNS42MjksMTIuNTcxLDEyLjU3MSwxMi41NzFoMTgwLjE0OSAgICBjNi45NDMsMCwxMi41NzEtNS42MjgsMTIuNTcxLTEyLjU3MUMzOTYuMjg3LDE3MS4zODIsMzkwLjY1OSwxNjUuNzU1LDM4My43MTYsMTY1Ljc1NXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6Izg2MDBFQyIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjxnPgoJPGc+CgkJPHBhdGggZD0iTTM3My45MTEsMjMxLjAzNUgyMTMuMzczYy02Ljk0MywwLTEyLjU3MSw1LjYyOC0xMi41NzEsMTIuNTcxczUuNjI4LDEyLjU3MSwxMi41NzEsMTIuNTcxaDE2MC41MzcgICAgYzYuOTQzLDAsMTIuNTcxLTUuNjI4LDEyLjU3MS0xMi41NzFDMzg2LjQ4MSwyMzYuNjY0LDM4MC44NTMsMjMxLjAzNSwzNzMuOTExLDIzMS4wMzV6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiM4NjAwRUMiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MDYuMzQxLDEwOS43NDRjLTQuNzk0LTUuODg0LTExLjg5OC05LjI1OC0xOS40ODktOS4yNThIOTUuMjc4TDg3LjM3LDYyLjA5N2MtMS42NTEtOC4wMDgtNy4xMTMtMTQuNzMyLTE0LjYxNC0xNy45ODkgICAgbC01NS4xNzctMjMuOTVjLTYuMzctMi43NjctMTMuNzczLDAuMTU2LTE2LjUzNiw2LjUyNGMtMi43NjYsNi4zNywwLjE1NywxMy43NzQsNi41MjQsMTYuNTM3TDYyLjc0NSw2Ny4xN2w2MC44MjYsMjk1LjI2MSAgICBjMi4zOTYsMTEuNjI4LDEyLjc1MiwyMC4wNjgsMjQuNjI1LDIwLjA2OGgzMDEuMTY2YzYuOTQzLDAsMTIuNTcxLTUuNjI4LDEyLjU3MS0xMi41NzFjMC02Ljk0My01LjYyOC0xMi41NzEtMTIuNTcxLTEyLjU3MSAgICBIMTQ4LjE5N2wtNy4zOTktMzUuOTE2SDQ1MS42OWMxMS44NzIsMCwyMi4yMjktOC40NCwyNC42MjQtMjAuMDY4bDM1LjE2My0xNzAuNjc1ICAgIEM1MTMuMDA4LDEyMy4yNjYsNTExLjEzNiwxMTUuNjI3LDUwNi4zNDEsMTA5Ljc0NHogTTQ1MS42OSwyOTYuMzAxSDEzNS42MTlsLTM1LjE2MS0xNzAuNjc0bDM4Ni4zOTMsMC4wMDFMNDUxLjY5LDI5Ni4zMDF6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiM4NjAwRUMiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" />
                                <span> 0</span>
                            </h1>
                        </div>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>

import Menu from '@/components/Menu'

export default {
    data() {
        return {
            getId: {
                nId: "",
            },
        }
    },
    components: {
        Menu,
    },
    methods: {
        getProdutos(){
            axios
                .get('http://localhost:8000/api/produtos')
                .then(res => {
                    this.produtos = res.data.produtos;
                })
        },
        getId() {
            var query   =   location.search.slice(1);
            var partes  =   query.split('&');
            var data    =   {};
            partes.forEach(partes   =>  {
                var chaveValor  =   parte.split('=');
                var chaveValor  =   chaveValor[0];
                var valor       =   chaveValor[1];
                data[chave]     =   valor;
            });
            console.log(data);
        },

    },
}

</script>