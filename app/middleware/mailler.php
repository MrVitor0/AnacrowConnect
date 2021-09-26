<?php

       
        namespace Middleware;


        class mailler extends homepage{


            public function __construct( $opts = array(), $tpl_Dir = 'public/frontend/views'.DIRECTORY_SEPARATOR."email")
            {
                
                parent::__construct( $opts, $tpl_Dir ); //Chama a montagem Principal

            }




        }

      
        

?>