<?php
    session_start();
    
    $dbhost = "localhost";
    $dbname = "users";
    $dbuser = "root";
    $dbpass = "root";
    
    mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
    mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>