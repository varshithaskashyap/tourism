<?php
ini_set('error_reporting', 0);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$city_id=$_GET['city_id'];
$name=$_GET['name'];


if(isset($city_id) && isset($name))
{
$sql = "insert into shop(city_id,name) values ('".$city_id."', '".$name."')";
echo  //$sql;
$result = mysqli_query($conn, $sql);

if($result>=1){
echo "Data saved successfully";
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
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
   
    	
            <header id="header">
	 
	 <h2><button><a href="afteradmin.html">menu</a></button></h2> 
</header>

        
            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">
  
<body style="background-color: pink">
<form method="get">
<h1>INSERT</h1><br>
    city_id: <input type="number" name="city_id" min="1" max="3"><br><br>
   name:<input type="text" name="name"><br>
  
   
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