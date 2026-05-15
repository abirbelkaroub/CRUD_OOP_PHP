<?php
        include_once('todoModel.php');

        class TodoView extends TodoModel {
            public function getTodos(){
                return $this->getTodoDb();
            }
        }

?>