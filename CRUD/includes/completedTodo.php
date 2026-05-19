<!-- <?php 


if (isset($_GET['updateid'])) {
    include_once('../classes/todoController.php');
    $updateid = $_GET['updateid'] ; 
    $update = new todoController(); 
    $updateTodo = $update->updateTodo($updateid) ; 

    if ($updateTodo){
        echo "updated successfully" ; 
    } else{
         echo "updating hasn't been succeded! somthing went wrong ";
    }
}
 -->


 