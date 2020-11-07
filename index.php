<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'id15162090_cc');
define('DB_PASS', '51?]&sB/jey}|nkS');
define('DB_NAME', 'id15162090_db');

$dsn='mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4';

try {
    $pdo=new PDO($dsn, DB_USER, DB_PASS, array(PDO::ATTR_PERSISTENT=>true));
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo 'Connection Error: '.$e->getMessage();
    die();
}