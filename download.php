<?php  mysql_connect("localhost","jacobian","password");  
mysql_select_db("jacobian_database");  
$query = "SELECT data,filetype FROM uploads where id=$id";  
$result = MYSQL_QUERY($query);  
$data = MYSQL_RESULT($result,0,"data");  
$type = MYSQL_RESULT($result,0,"filetype");  
Header( "Content-type: $type");  print $data;  ?>
