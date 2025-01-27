<?php include "../inc/dbinfo.inc"; ?>
<?php
// DB credentials.
define('DB_HOST','{{DB_HOST}}');
define('DB_USER','{{DB_USER}}');
define('DB_PASS','{{DB_PASS}}');
define('DB_NAME','{{DB_NAME}}');
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
