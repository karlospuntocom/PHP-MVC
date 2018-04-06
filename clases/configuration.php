<?php
$config = Config::singleton();
  //set connection mysql
  $config->set('dbtype', 'mysql');
  $config->set('dbport', '3306');
  $config->set('dbhost', 'localhost');
  $config->set('dbname', 'mydb');
  $config->set('dbuser', 'root');
  $config->set('dbpass', '');
  

?>
