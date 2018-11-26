
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
                
   <h2><button><a href="index.html">home page</a></button></h2> 
                
            </header>
        

            <section id="banner" class="bg-img" data-bg="banner3.jpg">
                <div class="inner"><header>
                   
                       
                     <center><h2>welcome to MANGLORE:</h2></center>
    <h3>Mangalore (or Mangaluru) is an Arabian Sea port and a major commercial center in the Indian state of Karnataka. It's home to the Kadri Manjunath Temple, known for its bronze statues, and the 9th-century Mangaladevi Temple. Its Catholic sites include Milagres Church, dating to the 17th century, and St. Aloysious Chapel, which features interior paintings. Tannirbhavi Beach is popular for its sunset views.</h3><a href="#one" class="more">Learn More</a>
 <section> <center><table border="5" cellpadding="40" style="margin-top: 100px"><tr><th>name</th>
        <th>time</th>
        <th>bus_dis</th>
        <th>hospital</th></center></section>
        


            
            <?php
$con=mysqli_connect("localhost","root","","tourism");
if(!$con){
    echo"database connection failed";
}
$query="SELECT spot,time,bus_dist,hospital FROM tour WHERE city_id=3";
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
    












