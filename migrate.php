<?php
require "./connection.php";

/* if there isnt flatlab database create it*/
$query = " CREATE DATABASE flatlab ; IF NOT EXISTS";
$connection->query($query);
echo "database created";

/* if there isnt users table create it*/
$newconnection = $connection = new PDO("mysql:host=localhost;dbname=flatlab", "root", "shahrokhgh8085");
$createTb = "CREATE TABLE IF NOT EXISTS users(id int NOT NULL  , 
username varchar(50) NOT NULL , 
userpassword varchar(80) NOT NULL , 
firstname varchar(50) NOT NULL , 
lastname varchar(50) NOT NULL)";
$newconnection->query($createTb);
echo "table created";
