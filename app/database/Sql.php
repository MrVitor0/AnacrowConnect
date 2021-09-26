<?php


namespace Database;


class Sql extends \PDO{

    private $conn;


    const DBNAME = $_ENV['_DATABASE_NAME'];
    const HOST = $_ENV['_DATABASE_HOST'];
    const USERNAME = $_ENV['_DATABASE_USERNAME'];
    const PASSWORD = $_ENV['_DATABASE_PASSWORD'];


    
    

    public function __construct(){


        $this->conn = new \PDO(

            "mysql:dbname=".Sql::DBNAME.";host=".Sql::HOST,
            Sql::USERNAME,
            Sql::PASSWORD
    
        );
        

    }//end method





    public function setParam( $statement,$key, $value ){


        $statement->bindParam($key,$value);


    }//end method






    public function setParams( $statement, $parameters = array() ){



        foreach ($parameters as $key => $value) {
            # code...

            $this->setParam( $statement, $key, $value );
            

        }//end foreach


    }//end method







    public function QuerySQL( $rawQuery, $params = array()){


        $stmt = $this->conn->prepare( $rawQuery );

        
        $this->setParams( $stmt, $params );


        $stmt->execute();

        return $stmt;



    }//end method




    public function select( $rawQuery, $params = array() ){

        $stmt = $this->QuerySQL( $rawQuery, $params );

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }//end method






}//end Class




?>