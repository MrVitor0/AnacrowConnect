<?php

        namespace Middleware;


        class admin extends homepage{


            public function __construct( $opts = array(), $tpl_Dir = 'public/frontend/views'.DIRECTORY_SEPARATOR."admin")
            {
                
                parent::__construct( $opts, $tpl_Dir ); //Chama a montagem Principal

            }




        }

      
        

?>