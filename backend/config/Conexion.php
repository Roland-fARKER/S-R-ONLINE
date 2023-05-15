<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

// Define database
define('dbhost', 'bote1w1g6p3k3vbbuhva-mysql.services.clever-cloud.com');
define('dbuser', 'uu84uwa4nw6umz2l');
define('dbpass', 'gB5B1yEkqfWymykRh7Vr');
define('dbname', 'bote1w1g6p3k3vbbuhva');

// Connecting database
try {
    $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $connect->query("set names utf8;");
    // $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    //$connect->setAttribute( PDO::ATTR_EMULATE_PREPARES, true );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
//---------------


?>

