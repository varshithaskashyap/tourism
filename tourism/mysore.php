                         
                         
<!DOCTYPE HTML>

<html>
    <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <h1></h1>
        <h1></h1>
        <header id="header">
                 <header id="header">
                
   <h2><button><a href="index.html">home page</a></button></h2> 
                
            </header>
                
                 </header>
            <section id="banner" class="bg-img" data-bg="banner3.jpg">
                <div class="inner"><header>
<center><h1>welcome to MYSURU:</h1></center>
<h3>Mysore (or Mysuru), a city in India's southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.</h3><center> <table border="5" cellpadding="40" style="margin-top: 100px"><tr><th>name</th>
        <th>time</th>
        <th>bus_dis</th>
        <th>hospital</th></center>
        


            
            <?php
$con=mysqli_connect("localhost","root","","tourism");
if(!$con){
    echo"database connection failed";
}
$query="SELECT spot,time,bus_dist,hospital FROM tour WHERE city_id=2";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo"<tr>";
   
    echo"<td>".$row['spot']."</td>";
    echo"<td>".$row['time']."</td>";
    echo"<td>".$row['bus_dist']."</td>";
    echo"<td>".$row['hospital']."</td>";
    echo"</tr>";
}

?>

   

                    </header>
                </div>
                
            </section>

        <!-- One -->
            

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
    




