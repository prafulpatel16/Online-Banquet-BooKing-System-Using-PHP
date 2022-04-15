<?php 
// DB credentials.
define('DB_HOST','10.161.112.5');
define('DB_USER','app01');
define('DB_PASS','admin');
define('DB_NAME','obbs');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
