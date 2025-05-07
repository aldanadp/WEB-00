<?php

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
}

function validateName($name){
    $name= strip_tags($name);
    $name= trim($name);
    $name= filter_var('$name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (strlen($name)>25){
        return false;
    }else {
        return $name;
    }
}

function validateEmail($email){
    $email= strip_tags($email);
    $email= filter_var('$email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("email no valido");
    }
    return $email;

    /* el mail pasa por striptags pasa por sanitizacion Y SI NO pasa por la validacionemail entonces DIE y si lo pasa entonces devuelve el mail*/
}

function validateTextArea($message){

    /* VER QUE VALIDACIONES TIENE UN TEXT AREA */

}

$name = validateName($name);
$email = validateEmail($email);
$message = validateTextArea($message);


/* IF EMPTY  $x IS MISSING HACERLO !!!!
// Si todo está bien, redirige a página de agradecimiento:
    header("Location: gracias.html");
    exit();
?>