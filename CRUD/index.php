<?php
include_once('classes/todoController.php');
include_once('classes/todoView.php');


$isUpdate = $_GET['updateid'] ?? '';
$controller = new TodoController();

// updating 
if (isset($_GET['updateid'])) {   // once clicked update - I put the task name we want to edit into the input using value attribute 
    // $task_done = true;
    $updateid = $_GET['updateid'];
    $what_to_update_name = $controller->updateTodo($updateid); 
}


// inserting 
if (isset($_POST['submit_todo'])) {
    $new_task_name = $_POST['todo'];

    // normal inserting 
    if (!$isUpdate) {
        $controller->addTodo($new_task_name);
    }


    // inserting after updating
    else {
        // Now updating the DB
        $controller->updateTask($updateid, $new_task_name, 'no');
        header("Location: index.php"); // without this instruction I will be having the id of the previous edited task and it's causing issues 
        exit();
    }
}

// deleting 
if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $controller = new TodoController();
    $controller->deleteTodo($deleteid);
    header("Location: index.php");
    exit();
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
        <input type="text" name="todo" placeholder="Enter your todo ... " value="<?php echo  $what_to_update_name ?? '' ?>">
        <input type="submit" name="submit_todo" value="ADD">
    </form>

    <!-- show todos   -->
    <?php

    $todos = new todoView();
    $allTodos = $todos->getTodos();
    foreach ($allTodos as $todo) {
        if ($todo['completed'] != 'yes') {
    ?>
            <span>
                <b> <?php echo $todo['todoName']; ?></b>
                <a href="index.php?updateid=<?php echo $todo['id']; ?>">Update</a>
            </span>
            <span>
                <a href="index.php?deleteid=<?php echo $todo['id']; ?>">
                  <button> Delete</button> <br>
            </a>
            </span>

    <?php
        }
    }
    ?>
</body>

</html>