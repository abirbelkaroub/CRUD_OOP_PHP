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
        $result = $stmt->fetchAll(); // try fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

 


    protected function deleteDataDb($id)
    {
        $sql = "Delete FROM todos WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$id]);
        return $result;
    }

       protected function updateTodoDb($id)
    {
        $sql = "UPDATE todos SET completed='yes' WHERE id = ?";
        $sql2 = "SELECT todoName FROM todos WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt2 = $this->connect()->prepare($sql2);
        $stmt->execute([$id]);
        $result = $stmt2->execute([$id]);
        $result = $stmt2->fetch(PDO::FETCH_ASSOC);
        return $result['todoName'];
    }
    
    protected function updateTaskDb($id,$name,$updateTaskDb){
        $sql = "UPDATE todos
        SET todoName=?, createDate=?, completed=?
        WHERE id=? 
        " ;

        $stmt = $this->connect()->prepare($sql);
        $date  = date('y-m-d H-m-sa');
        $result = $stmt->execute([$name,$date,$updateTaskDb,$id]);
        return $result ; 
        
        } 
}
