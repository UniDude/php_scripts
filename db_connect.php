<?php

//connection data
$username = "e.g UniDude";
$password = "password for UniDude";
$host_address = "localhost or whatever the address of your database is";

//connection to the database
$db_connect = mysql_connect($host_address, $username, $password)
  or die("Unable to connect to Database");

?>
