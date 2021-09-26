<?php

namespace Model;

use \Interface\Model;
use \Database\Sql;

    class Address extends Model
    {


        public function update(){


            $sql = new Sql();
          
            
            $query = "CALL sp_example_update(

             :example,
          
            );";

           $results = $sql->select($query, [

                ':example'=>$this->getexample(),
            
            ]);  
            

            if( count($results) > 0 ){

                $this -> setData( $results[0] );

            }//endif
            
        }//endmethod







        public function get($exemplo){




                $sql = new Sql();

                $query = "  
                
                    SELECT * FROM example a
                    ORDER BY a.dtregister DESC
                    LIMIT 1;

                ";

                $results = $sql -> select($query, [

                    ':example' => $exemplo

                ]);
          

                if (count($results) > 0 ) {
                    
                    $this->setData( $results[0] );
                    
                }

        }//END FUNCTION




    }//END CLASS



?>