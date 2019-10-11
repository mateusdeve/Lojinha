export const state = () => ({
    quantidade: 0,
    counter: 0
  })
  
  export const mutations = {
    increment (state, qtd) {
        console.log(qtd);
        state.quantidade  = qtd;   
    }
  }