export const state = () => ({
    products: {},
    counter: 0
  })
  
  export const mutations = {
    increment (state, id) {
        console.log(id);
        state.products  = { ...state.products}   
    }
  }