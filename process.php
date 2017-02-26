<?  $name=$_POST['name'];  
$email=$_POST['email']; 
 $location=$_POST['location'];  
mysql_connect("localhost", "jacobian", "password") or die(mysql_error()); 
 mysql_select_db("jacobian_database") or die(mysql_error()); 
 mysql_query("INSERT INTO `data` VALUES ('$name', '$email', '$location')");  
Print "Your information has been successfully added to the database.";  ?>
