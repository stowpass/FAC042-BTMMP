<?php
 
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'AGzzcso1$');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'db_locadora');
 
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
 
/**
 * Connect to MySQL and instantiate the PDO object.
 */
$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $pdoOptions //Options
);
 
//The PDO object can now be used to query MySQL.