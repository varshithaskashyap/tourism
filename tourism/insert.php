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
$spot=$_GET['spot'];
$time=$_GET['time'];
$bus_dist=$_GET['bus_dist'];
$hospital=$_GET['hospital'];
//echo $adminusername;

if(isset($city_id) && isset($spot) && isset($time) && isset($bus_dist) && isset($hospital))
{
$sql = "insert into tour(city_id,spot,time,bus_dist,hospital) values ('".$city_id."', '".$spot."','".$time."','".$bus_dist."','".$hospital."')";
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
   spot:<input type="text" name="spot"><br>
   time:<input type="text" name="time"><br> 
   bus_dist:<input type="text" name="bus_dist"><br>
   hospital:<input type="text" name="hospital"><br>
   
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