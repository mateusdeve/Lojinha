import { assignmentPattern } from "@babel/types";

export const state = () => ({
  quantidade: 0,
  produto:    0,
})
  
export const mutations = {
  increment (state) {
      state.quantidade++;
  },

  decrement (state) {
    if(state.quantidade === 0) {
      return;
    }
    state.quantidade--;
  }
}