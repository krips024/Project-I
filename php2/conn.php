<?php

$dsn='mysql:host=localhost;dbname=signup';

$name = 'root';
$password = '';


try{
    $db = new PDO($dsn, $name, $password);
    // echo 'connnetd';
}catch(Exception $e){
    echo $e->getMessage();
}