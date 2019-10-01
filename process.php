<?php
 $username= $_POST['user'];
 $password= $_POST['pass'];
 //to preventmsqlinjection
 $username= stripslashes($username);
 $password= stripslashes($password);
 $username= mysql_real_escape_string($username);
 $password= mysql_real_escape_string($password);
 //connect to the server and select database
mysql_connect("localhost", "root", "");
 mysql_select_db("login");
 //Query the database for the user
 $result=mysql_query("select * from users where username='$username' and password='$password'")
          or die("Failed to query database ".mysql_error());
 $row =mysql_fetch_array($result);
 if($row['username'] == $username && $row['password'] == $password){
 	echo "LOgin succssfull !!! Welcome".$row['username'];
 }
 else{
 	echo "failed to login";
 }
?>