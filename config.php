<?php
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'us-cdbr-iron-east-04.cleardb.net');
define('DB_USERNAME', 'b630a07ef213aa');
define('DB_PASSWORD', '87ba03a0');
define('DB_DATABASE', 'heroku_32d1908bbbb8fa1');
define("BASE_URL", "https://www.yourwebsite.com/");
define("SITE_KEY", 'yourSecretKeyyx');

function getDB()
{
    $dbhost=DB_SERVER;
    $dbuser=DB_USERNAME;
    $dbpass=DB_PASSWORD;
    $dbname=DB_DATABASE;
    $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
    $dbConnection->exec("set names utf8");
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
}
    include('class/gcmClass.php');
    $gcmClass = new gcmClass();
?>