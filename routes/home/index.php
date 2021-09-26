<?php


use Middleware\homepage;



       
$app->get('/', function($request, $response, $name){
                            

         $page = new homepage();                  
         $page -> setTpl("home", [
            'message' => 'Hello World'
         ]);
         return $response;

});





?>