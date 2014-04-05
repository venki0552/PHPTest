<?php
        define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
        define('DB_USER','adminWIugTmz');
        define('DB_PASS','MXCtu7sHtApv');
        define('DB_BASE','phptest');
        define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
function mysqlConnector(){
    $dsn = 'mysql:dbname='.DB_BASE.';host='.DB_HOST.';port='.DB_PORT;
    $dbh = new PDO($dsn, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
         ?>
