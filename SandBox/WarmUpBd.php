<?php


$dbConnector = null;
$usr = "snows-connector";
$dns = "mysql:host=localhost;dbname=snows";
$pwd = "jorginet1417";

try{
  $dbConnector = new PDO($dns);
  $i = 0;
}
catch (PDOExeprion $ex){
  print($ex);
}

