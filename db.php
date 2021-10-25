<?php
$server="localhost";
$user="root";
$password="kendoriddy1";
$database="stud_project";
$con=mysql_connect($server,$user,$password,$database);
mysql_select_db($database) or die("error in connection");


?>