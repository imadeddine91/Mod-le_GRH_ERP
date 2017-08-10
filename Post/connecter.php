<?php 
$username ="root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username,$password);

if(!$dbhandle){
    die('Not connected :'.  mysql_error());  
}


$selected = mysql_select_db("pfa_grh", $dbhandle);

if(!$selected){
    die('Base inaccessible :'.mysql_error());  
}

   



?>


