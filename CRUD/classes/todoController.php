<?php 

    include_once('todoModel.php');

    class TodoController extends TodoModel{

        public function addTodo($todo){
            return $this->addTodoDb($todo);
        }

        public function updateTodo($id){
            return $this->updateTodoDb($id);
        }

        public function deleteTodo($id){
            return $this->deleteDataDb($id);
        }

        public function updateTask($id,$name,$updateTask){
            return $this->updateTaskDb($id,$name,$updateTask);
        }

    }
    
?> 