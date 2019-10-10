export const state = () => ({
    products:{}
  })
  
  export const mutations = {
    add (state, product) {
      state.products = {
        ...state.products,
        
      }
    },
    remove (state, { todo }) {
      state.list.splice(state.list.indexOf(todo), 1)
    },
    toggle (state, todo) {
      todo.done = !todo.done
    }
  }