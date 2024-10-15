<?php

function emptyInput($input){
    if(empty($input)){
        return true;
    }
    return false;
}

function redirect($path){
    if($path){
        header("location:$path");
    }
}


function minInput($value){
    if(strlen($value) < 3) {
        return true;
    }
    return false;
}
function maxInput($value){
    if(strlen($value) > 20) {
        return true;
    }
    return false;
}

function validEmail($email) {
    if (!filter_var($email , FILTER_VALIDATE_EMAIL)){
        return true;
    } 
    return false;
}
?>