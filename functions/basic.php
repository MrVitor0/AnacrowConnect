<?php

use Controller\Validate;


function FormatDate($date){

        return date('d/m/Y', strtotime($date));

    }


    function setHash($value){

        return Validate::setHash( $value );

    }

    function getHash($value){

        return Validate::getHash( $value );

    }



?>