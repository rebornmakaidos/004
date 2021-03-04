<?php 

$server = "sql201.epizy.com";
$username = "epiz_27995537";
$password = "FyYYDVz1wQ";
$dbname = "epiz_27995537_loginformdb";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}

/*
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);
*/

if(isset($_POST['usernameinput']))
{
    
    $uname=$_POST['usernameinput'];
    $pass=$_POST['passwordinput'];
    
    $sql="SELECT * FROM logincredentials WHERE USERNAMES ='".$uname."'AND PASSWORDS ='".$pass."'";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
</head>
<body>
	<div class="container">
	<img src="img/login.png"/>
		<form method="POST" action"#">
			<div class="form-input">
				<input type="text" name="usernameinput" placeholder="Enter User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="passwordinput" placeholder="Enter Password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>