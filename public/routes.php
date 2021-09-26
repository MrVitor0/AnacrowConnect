<?php
    use Slim\Factory\AppFactory;
    

    /**
    * loads .ENV in all application 
    * return string
    */
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '/config/.env');
    $dotenv->load();
   

    $app = AppFactory::create();

        /**
        * Function Routes
        * @require
        */
        require_once($_SERVER['DOCUMENT_ROOT'].'/functions/basic.php');
       
        /**
        * Admin Routes
        * @require
        */
        require_once($_SERVER['DOCUMENT_ROOT'].'/routes/admin/login.php');

        /**
         * Dashboard Routes
         * @require
         */
        require_once($_SERVER['DOCUMENT_ROOT'].'/routes/dashboard/login.php');

   
        /**
         * Home Routes
         * @require
         */
        require_once($_SERVER['DOCUMENT_ROOT'].'/routes/home/index.php');    
        
                   
        $app -> run();   
    ?>