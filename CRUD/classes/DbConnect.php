<?php 
    class DbConnect{
        private $Dbservername     = 'localhost';
        private $Dbusername       = 'root' ; 
        private $Dbpassword       = '' ;
        private $Dbname           = 'test' ;

        private function pdoConnection(){
            $sqlConn    = 'mysql:host='.$this->Dbservername.';dbname='.$this->Dbname.';charset=utf8mb4'; 
            $conn       = new PDO($sqlConn,$this->Dbusername,$this->Dbpassword);

            try{
                return $conn ; 
            }catch(Exception $e){
                echo $e -> getMessage(); 
            }
        }

        protected function connect(){
            return $this->pdoConnection();
        }
    }
?>