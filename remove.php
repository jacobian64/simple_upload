<?php  mysql_connect("localhost","jacobian","password");  
mysql_select_db("jacobian_database");  
$query = "DELETE FROM uploads where id=$id";  
$delete = MYSQL_QUERY($query);  
print "File ID $id has been removed from the database";  ?>
