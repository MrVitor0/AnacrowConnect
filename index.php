<?php
session_start();


//CHECK IF IS IN PRODUCTION MODE
if( !(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ){
    ob_start();
}

require_once("vendor/autoload.php");   

require_once('public/routes.php');