<?php
include_once('classes/todoController.php');
include_once('classes/todoView.php');

if (isset($_POST['submit_todo'])) {
    $todo = $_POST['todo'];

    $todoAdd = new TodoController();
    $todoAdd->addTodo($todo);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do app</title>
</head>

<body>
    <h1>To Do List</h1>
    <form action="" method="post">
        <input type="text" name="todo" placeholder="Enter your todo ...">
        <input type="submit" name="submit_todo" value="ADD">
    </form>

    <!-- show todos   -->
    <?php

    $todos = new TodoView();
    $allTodos = $todos->getTodos();
    foreach ($allTodos as $todo) {
        // print_r($todo); echo "<br>";
        // }

    ?>

        <h6><?php echo $todo['todoName']; ?></h6>

    <?php
    }
    ?>
</body>

</html>