<?php
ini_set('error_reporting', 0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$adminusername=$_POST['adminusername'];
$adminpassword=$_POST['adminpassword'];
//echo $adminusername;
if(isset($adminusername) && isset($adminpassword))
{
$sql = "SELECT * from  admin where  adminusername='".$adminusername."' and  adminpassword='".$adminpassword."'";
$result = mysqli_query($conn, $sql);
$adminCount = 0; 
$adminCount = mysqli_num_rows($result);
//echo $adminCount;
if($adminCount>=1){
//echo "Loggedin";
header('Location: afteradmin.html');
}else {
	echo "UserName and Password is incorrect";
	}
	
}
?>

<html>
<head>

<title>Admin Login</title></head>
<body>
	<body>  <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=0" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head></body><center>
    	</header>
    	     <header id="header">
            	
   <h2><button><a href="index.html">home page</a></button></h2> 
                
            </header>


        
            <section id="banner" class="bg-img" data-bg="banner1.jpg">
                <div class="inner">

                    <header>
<body style="background-color: crimson">
<form method="post">
<h1>Admin Login</h1><br>
<h1></h1>
<h1></h1>
   UserName:<input type="text" name="adminusername"><br><br>
   Password:<input type="password" name="adminpassword"><br><br>
   <input type="submit">
<br><br>
</center>
</form>
</body>
</html>