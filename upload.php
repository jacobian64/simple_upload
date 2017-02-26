<?php  mysql_connect("server12.web-hosting.com","jacobian","password");  
mysql_select_db("jacobian_database");  
$data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));  
$result=MYSQL_QUERY("INSERT INTO uploads (description, data,filename,filesize,filetype) ". "VALUES ('$form_description','$data','$form_data_name','$form_data_size','$form_data_type')");  $id= mysql_insert_id(); 
 print "<p>File ID: <b>$id</b><br>";  
print "<p>File Name: <b>$form_data_name</b><br>";  
print "<p>File Size: <b>$form_data_size</b><br>";  
print "<p>File Type: <b>$form_data_type</b><p>";  
print "To upload another file <a href=http://localhost/upload> Click Here</a>";  ?>
