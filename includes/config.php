<?php

$dbUser = 'root';
$dbPassword = '';
$dbName = 'phprest';

$db = new PDO('mysql:host=127.0.0.1;dbname=' . $dbName . ';charset=utf8', $dbUser, $dbPassword);

#Set some attributes
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

DEFINE('APP_NAME', 'PHP REST API');
