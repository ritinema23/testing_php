<?php
 $host="localhost";
 $user= "root";
 $password="";
 $db="demo";
mysql_connect($host,$user,$password);
 mysql_select_db($db);
  if(isset($_POST['username'])){
    $uname= $_POST['username'];
    $password=$_POST['password'];
    $sql= "select * from loginform where user='".$uname."'AND Pass='".$password."'
    limit 1";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1)
    {
    	echo "Login done";
    	exit();
    }
    else{
    	echo "LOgin failed";
    	exit();
    }
  }


?>


<!DOCtype.html>
<html>
	<head>
		<title>login page by prakhar</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="frm">
			<form action="#" method="POST">
				<p>
					<label>Username:</label>
					<input type="text" id="user" name="username"/>
				</p>
				<p>
					<label>Password:</label>
					<input type="password" id="pass" name="password"/>
				</p>
				<p>
					
					<input type="submit" id="btn" value="login"/>
				</p>
			
		</div>
	</body>
</html>



