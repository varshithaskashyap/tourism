


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
$time=$_GET['time'];




//echo $adminusername;


if(isset($spot) && isset($time))
{

$sql = "UPDATE `tour` SET time = '$time' WHERE spot = '$spot'";

echo  //$sql;
$result = mysqli_query($conn, $sql);

if($result<=1){
echo "Data updated successfully";
}else {
	echo "Data saved unsuccessfully";
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
        <meta name="viewport" content="width=device-width, initial-scale=2" />
        <link rel="stylesheet" href="assets/css/main.css" />
   
    	<header id="header">
   
  <h2><button><a href="afteradmin.html">menu</a></button></h2>  


            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">

                    
<body style="background-color: pink">

<form method="get">
	<h1></h1>
<h1>UPDATE</h1><br>
	spot:<input type="text" name="spot">
   time:<input type="text" name="time">
   
   
   <input type="submit" name="Submit">
<br><br>
<h1></h1>
</center>
</form>
  <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script></body>
</html>

