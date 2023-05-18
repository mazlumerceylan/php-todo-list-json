const { createApp } = Vue;

const app = createApp({
    data() {
        return {
          todos: [],
          newTodo: ''
        }
    },
    methods: {
      addTodo() {
          this.todos.push({ text: this.newTodo });
          this.newTodo = '';
      },
      deleteTodo(index) {
          this.todos.splice(index, 1);
      }
  }
  });

app.mount('#app');