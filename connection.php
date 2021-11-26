<?php 
/* connection to database and use it as require in all pages */
$connection = new PDO("mysql:host=localhost;dbname=flatlab" , "root" , "shahrokhgh8085");
$connection->setAttribute(pdo::ATTR_ERRMODE , pdo::ERRMODE_EXCEPTION);
session_start();


?>