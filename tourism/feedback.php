<?php
ini_set('error_reporting', 0);
//require('database_class/config.inc.php');
//$db->connect();

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

// medicineName,ManufuctureDate,ExpiryDate,ddlType
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];


if(isset($name) && isset($email) && isset($message))
{
$sql = "insert into feedback(name,email,message) values ('".$name."', '".$email."','".$message."')";
echo  //$sql;
$result = mysqli_query($conn, $sql);

if($result>=1){
echo "feed back sent successfully";
}else {
	echo "feed back unsuccessfully";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <section id="banner" class="bg-img" data-bg="banner2.jpg">
<body>  <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
      </body>
   
    	
            <header id="header">
              <header id="header">
                  <h2><button><a href="index.html">home page</a></button></h2>
	 
	
</header>

        

            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">

  
<body style="background-color: pink">
<form method="get">
<h1>feed back</h1><br>
    
   name:<input type="text" name="name">
   email:<input type="email" name="email">
   message:<input type="text" name="message">
   
  <input type="submit" name="Submit">
<br><br>
</center>
</form>
  <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script></body>
</html>