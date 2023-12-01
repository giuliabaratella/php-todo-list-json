<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To Do List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.min.js"
        integrity="sha512-b94Z6431JyXY14iSXwgzeZurHHRNkLt9d6bAHt7BZT38eqV+GyngIi/tVye4jBKPYQ2lBdRs0glww4fmpuLRwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Playpen+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="app" class="p-5">
        <div class="container">
            <header class="text-center py-5">
                <h1>To Do List</h1>
                <div class="d-flex justify-content-center column-gap-3 align-content-center align-items-center">
                    <input type="text" class="form-control w-75" v-model="newText" @keyup.enter="addTask">
                    <button class="btn text-uppercase fw-bold" @click="addTask">Add new task</button>
                </div>
            </header>
            <main class="pb-5">
                <div class="card">
                    <ul class="list-group">
                        <li v-for="(task,index) in todolist"
                            class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span class="todo-text">{{task.text}}</span>
                            <span class="todo-remove" @click="removeTask(index)">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>

                        </li>
                    </ul>
                </div>
                <!-- <div class="msg text-center py-5">Your list is empty!</div> -->
            </main>
        </div>

    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" type="module"></script>
</body>

</html>