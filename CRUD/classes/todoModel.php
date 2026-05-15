<?php

include('dbConnect.php');
class TodoModel extends DbConnect
{

    protected function addTodoDb($todo) // protected ( from DB )  
    {
        $date  = date('y-m-d H-m-sa');
        $sql   = 'INSERT INTO todos(todoName,createDate) value (?,?)';

        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$todo, $date]);

        return $result;
    }


    protected function getTodoDb()        
    {
        $sql = 'SELECT * FROM todos';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result= $stmt->fetchAll(); // try fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }
}
