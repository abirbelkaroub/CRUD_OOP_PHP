<?php 

    include_once('todoModel.php');

    class todoController extends TodoModel{

        public function addTodo($todo){
            return $this->addTodoDb($todo);
        }

    }
    
?> 