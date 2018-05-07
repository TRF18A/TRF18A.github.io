<?php
echo "<br> Hello from sayHello service!!! <br><hr>";
$username = "foo";
$password = "bazfoobar";
$hostname = "<REPLACE WITH RDS ENDPOINT>";
$dbname = "mydb";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo "Connected to MySQL using username - $username, host - $hostname<br>";
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again.");
?>
