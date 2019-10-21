<template>
    <v-layout>
        <v-container
        fluid
        class="p-0 m-0"
        >
            <Menu/>
            <v-row>
                <v-col
                cols="1">

                </v-col>
            <v-col
            cols="12"
            md="5"
            class="image">
            <div >

            </div>
            </v-col>
            <v-col
            cols="12"
            md="5">
                <div style="padding:50px; margin-top:30px;">
                    <div class="text-center">
                        <h1>Login</h1>
                    </div>
                    <v-row>
                        <v-col
                        cols="1">
                            <v-btn icon class="mt-4">
                                <img style="width:20px" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIzOS43LDI2MC4yYzAuNSwwLDEsMCwxLjYsMGMwLjIsMCwwLjQsMCwwLjYsMGMwLjMsMCwwLjcsMCwxLDBjMjkuMy0wLjUsNTMtMTAuOCw3MC41LTMwLjUgICAgYzM4LjUtNDMuNCwzMi4xLTExNy44LDMxLjQtMTI0LjljLTIuNS01My4zLTI3LjctNzguOC00OC41LTkwLjdDMjgwLjgsNS4yLDI2Mi43LDAuNCwyNDIuNSwwaC0wLjdjLTAuMSwwLTAuMywwLTAuNCwwaC0wLjYgICAgYy0xMS4xLDAtMzIuOSwxLjgtNTMuOCwxMy43Yy0yMSwxMS45LTQ2LjYsMzcuNC00OS4xLDkxLjFjLTAuNyw3LjEtNy4xLDgxLjUsMzEuNCwxMjQuOUMxODYuNywyNDkuNCwyMTAuNCwyNTkuNywyMzkuNywyNjAuMnogICAgIE0xNjQuNiwxMDcuM2MwLTAuMywwLjEtMC42LDAuMS0wLjhjMy4zLTcxLjcsNTQuMi03OS40LDc2LTc5LjRoMC40YzAuMiwwLDAuNSwwLDAuOCwwYzI3LDAuNiw3Mi45LDExLjYsNzYsNzkuNCAgICBjMCwwLjMsMCwwLjYsMC4xLDAuOGMwLjEsMC43LDcuMSw2OC43LTI0LjcsMTA0LjVjLTEyLjYsMTQuMi0yOS40LDIxLjItNTEuNSwyMS40Yy0wLjIsMC0wLjMsMC0wLjUsMGwwLDBjLTAuMiwwLTAuMywwLTAuNSwwICAgIGMtMjItMC4yLTM4LjktNy4yLTUxLjQtMjEuNEMxNTcuNywxNzYuMiwxNjQuNSwxMDcuOSwxNjQuNiwxMDcuM3oiIGZpbGw9IiMwMDAwMDAiLz4KCQk8cGF0aCBkPSJNNDQ2LjgsMzgzLjZjMC0wLjEsMC0wLjIsMC0wLjNjMC0wLjgtMC4xLTEuNi0wLjEtMi41Yy0wLjYtMTkuOC0xLjktNjYuMS00NS4zLTgwLjljLTAuMy0wLjEtMC43LTAuMi0xLTAuMyAgICBjLTQ1LjEtMTEuNS04Mi42LTM3LjUtODMtMzcuOGMtNi4xLTQuMy0xNC41LTIuOC0xOC44LDMuM2MtNC4zLDYuMS0yLjgsMTQuNSwzLjMsMTguOGMxLjcsMS4yLDQxLjUsMjguOSw5MS4zLDQxLjcgICAgYzIzLjMsOC4zLDI1LjksMzMuMiwyNi42LDU2YzAsMC45LDAsMS43LDAuMSwyLjVjMC4xLDktMC41LDIyLjktMi4xLDMwLjljLTE2LjIsOS4yLTc5LjcsNDEtMTc2LjMsNDEgICAgYy05Ni4yLDAtMTYwLjEtMzEuOS0xNzYuNC00MS4xYy0xLjYtOC0yLjMtMjEuOS0yLjEtMzAuOWMwLTAuOCwwLjEtMS42LDAuMS0yLjVjMC43LTIyLjgsMy4zLTQ3LjcsMjYuNi01NiAgICBjNDkuOC0xMi44LDg5LjYtNDAuNiw5MS4zLTQxLjdjNi4xLTQuMyw3LjYtMTIuNywzLjMtMTguOGMtNC4zLTYuMS0xMi43LTcuNi0xOC44LTMuM2MtMC40LDAuMy0zNy43LDI2LjMtODMsMzcuOCAgICBjLTAuNCwwLjEtMC43LDAuMi0xLDAuM2MtNDMuNCwxNC45LTQ0LjcsNjEuMi00NS4zLDgwLjljMCwwLjksMCwxLjctMC4xLDIuNWMwLDAuMSwwLDAuMiwwLDAuM2MtMC4xLDUuMi0wLjIsMzEuOSw1LjEsNDUuMyAgICBjMSwyLjYsMi44LDQuOCw1LjIsNi4zYzMsMiw3NC45LDQ3LjgsMTk1LjIsNDcuOHMxOTIuMi00NS45LDE5NS4yLTQ3LjhjMi4zLTEuNSw0LjItMy43LDUuMi02LjMgICAgQzQ0Nyw0MTUuNSw0NDYuOSwzODguOCw0NDYuOCwzODMuNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            </v-btn>
                        </v-col>
                        <v-col
                        cols="11">
                            <v-text-field
                            v-model="form.email"
                            label="Email"
                            :rules="[rules.required]"
                            color="purple darken-2"
                            >
                            </v-text-field>
                        </v-col>
                        <v-col cols="1">
                            <v-btn
                            class="mt-4"
                            @click="show1 = !show1"
                            icon>
                                <img style="width:20px" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU5LjIgNTkuMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTkuMiA1OS4yOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNNTEuMDYyLDIxLjU2MWMtMTEuODg5LTExLjg4OS0zMS4yMzItMTEuODg5LTQzLjEyMSwwTDAsMjkuNTAxbDguMTM4LDguMTM4YzUuOTQ0LDUuOTQ0LDEzLjc1Miw4LjkxNywyMS41NjEsOC45MTcgICBzMTUuNjE2LTIuOTcyLDIxLjU2MS04LjkxN2w3Ljk0MS03Ljk0MUw1MS4wNjIsMjEuNTYxeiBNNDkuODQ1LDM2LjIyNWMtMTEuMTA5LDExLjEwOC0yOS4xODQsMTEuMTA4LTQwLjI5MywwbC02LjcyNC02LjcyNCAgIGw2LjUyNy02LjUyN2MxMS4xMDktMTEuMTA4LDI5LjE4NC0xMS4xMDgsNDAuMjkzLDBsNi43MjQsNi43MjRMNDkuODQ1LDM2LjIyNXoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik0yOC41NzIsMjEuNTdjLTMuODYsMC03LDMuMTQtNyw3YzAsMC41NTIsMC40NDgsMSwxLDFzMS0wLjQ0OCwxLTFjMC0yLjc1NywyLjI0My01LDUtNWMwLjU1MiwwLDEtMC40NDgsMS0xICAgUzI5LjEyNSwyMS41NywyOC41NzIsMjEuNTd6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8cGF0aCBkPSJNMjkuNTcyLDE2LjU3Yy03LjE2OCwwLTEzLDUuODMyLTEzLDEzczUuODMyLDEzLDEzLDEzczEzLTUuODMyLDEzLTEzUzM2Ljc0MSwxNi41NywyOS41NzIsMTYuNTd6IE0yOS41NzIsNDAuNTcgICBjLTYuMDY1LDAtMTEtNC45MzUtMTEtMTFzNC45MzUtMTEsMTEtMTFzMTEsNC45MzUsMTEsMTFTMzUuNjM4LDQwLjU3LDI5LjU3Miw0MC41N3oiIGZpbGw9IiMwMDAwMDAiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            </v-btn>
                        </v-col>
                        <v-col cols="11">
                            <v-text-field
                                color="purple darken-2"
                                v-model="form.password"
                                :rules="[rules.required]"
                                :type="show1 ? 'text' : 'password'"
                                label="Senha"
                            ></v-text-field>
                        </v-col>
                    </v-row>

                    <v-card-actions>
                        <v-row>
                            <v-col cols="12" class="text-center"> 
                                <v-btn
                                    dark
                                    color="cyan"
                                    @click="log()"
                                >
                                    Entrar
                                </v-btn>
                            </v-col>
                            <v-col cols="12">
                                <v-btn
                                    color="purple"
                                    text
                                >
                                    <a class="font">Cadastrar usuario</a>
                                </v-btn>
                            </v-col>
                            <v-col cols="12">
                                <v-btn
                                    color="purple"
                                    text
                                >
                                   <a class="font">Esqueci minha senha</a>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-card-actions>
                </div>
            </v-col>
            </v-row>
        </v-container>
    </v-layout>
</template>

<script>
import Menu from '@/components/Menu'
import axios from 'axios'

export default {
    components:{
        Menu,
    },
    data () {
      return {
        show1: false,
        show2: true,
        show3: false,
        show4: false,
        rules: {
          required: value => !!value || 'Required.',
        },
        form: {
            email:      "",
            password:   "",
        }

      }
    },

    methods: {

        log() {
            console.log("ok");
            axios
                .post('http://localhost:8000/api/login', this.form)
                .then(res   =>  {
                    console.log(res);
                });
        }
    },
    
}
</script>

<style scoped>

    .p-0 {
        padding: 0px;
        margin:0px;
    }
    .font{
        font-size: 12px;
    }
    .image{
        background-image: url('../../assets/login.png');
        background-size: cover;
    }

</style>