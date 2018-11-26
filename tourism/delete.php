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


$spot=$_GET['spot'];


if(isset($spot))
{
$sql = "DELETE FROM tour WHERE spot = '$spot'";
echo  //$sql;
$result = mysqli_query($conn, $sql);

if($result=1){
echo "Data deleted successfully";
}else {
	echo "Data deletion unsuccessfully";
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
   
    	<header id="header">
	 
	 <h1><button><a href="afteradmin.html">menu</a></button></h1> 

</header>


        
            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">

                    <header>
                        
<body style="background-color: pink">
<form method="get">
<h1>DELETE</h1><br>
   spot:<input type="text" name="spot"><br><br>
    
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