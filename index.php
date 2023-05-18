<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="app">
    <h1>Todo List</h1>
    <input type="text" v-model="newTodo" @keyup.enter="addTodo" placeholder="Cosa vuoi fare oggi?" />
    <ul>
      <li v-for="(todo, index) in todos" :key="index">
        {{ todo.text }}
        <button @click="deleteTodo(index)">Cancella</button>
      </li>
    </ul>       
  </div>
  
  
  <script src="main.js"></script>
</body>
</html>