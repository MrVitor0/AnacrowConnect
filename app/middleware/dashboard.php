<?php

        namespace Middleware;

        class dashboard extends homepage{

            public function __construct( $opts = array(), $tpl_Dir = 'public/frontend/views'.DIRECTORY_SEPARATOR."client")
            {
                parent::__construct( $opts, $tpl_Dir ); //Chama a montagem Principal
            }

        }

      
        

?>