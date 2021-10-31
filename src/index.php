<!DOCTYPE html>
<html lang="en">
<head>
<title> members</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	
<h1> members names</h1>
	
  
	
<?php

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="secret";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="LocalServer";

if (strlen( $db_name ) === 0)
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass);
else 
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) 
	die("Connection failed: " . $conn->connect_error);


echo "<h3>members</h3>";

$sql = 'SELECT names FROM members ORDER BY ID';
   $retval = mysql_query( $sql, $conn );
	if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

	
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['names']}  <br> ".
         "EMP NAME : {$row['ID']} <br> ".
       } <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   mysql_close($conn);

?>
</div>
</body>
</html>
