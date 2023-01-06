<?php
// include('config.php');

// require  'vendor/autoload.php';

class DatabaseClass{	
	
    

    private $connection = null;

    private $dbhost = ""; // Ip Address of database if external connection.
    private $dbuser = ""; // Username for DB
    private $dbpass = ""; // Password for DB
    private $dbname = ""; // DB Name
    private $port = ""; // DB Name
    // this function is called everytime this class is instantiated		
    public function __construct(){

        try{

            $this->dbhost = "sql200.epizy.com"; // Ip Address of database if external connection.
            $this->dbuser = "epiz_32932003"; // Username for DB
            $this->dbpass = "Ef75oYN1ff"; // Password for DB
            $this->dbname = "epiz_32932003_courier_management"; // DB Name
            $this->port = "3306"; // DB Name

            $this->connection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname};port=$this->port", $this->dbuser, $this->dbpass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }			
        
    }
    
    // Insert a row/s in a Database Table
    public function Insert( $statement = "" , $parameters = [] ){
        try{
            
            $this->executeStatement( $statement , $parameters );
            return $this->connection->lastInsertId();
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }

    // Select a row/s in a Database Table
    public function Select( $statement = "" , $parameters = [] ){
        try{
            
            $stmt = $this->executeStatement( $statement , $parameters );
            return $stmt->fetchAll();
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
    
    // Update a row/s in a Database Table
    public function Update( $statement = "" , $parameters = [] ){
        try{
            
            $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }		
    
    // Remove a row/s in a Database Table
    public function Remove( $statement = "" , $parameters = [] ){
        try{
            
            $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }		
    
    // execute statement
    private function executeStatement( $statement = "" , $parameters = [] ){
        try{
        
            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }

 
    
}



?>