<?php
error_reporting(~E_DEPRECATED & ~E_NOTICE);

define('DBHOST', 'localhost');
define('DBUSER', 'mogita');
define('DBPASS', 'mogita');
define('DBNAME', 'koims');

$conn=new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
    
}
