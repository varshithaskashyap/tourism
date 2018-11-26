
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
                <div class="logo"><a href="index.html">Tourism information</a></div>
                 </header>
            <section id="banner" class="bg-img" data-bg="banner3.jpg">
                <div class="inner"><header>
                      
                     <center><h2>welcome to BENGALURU:</h2></center>
<h3>Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center of India's high-tech industry, the city is also known for its parks and nightlife. By Cubbon Park, Vidhana Soudha is a Neo-Dravidian legislative building. Former royal residences include 19th-century Bangalore Palace, modeled after England’s Windsor Castle, and Tipu Sultan’s Summer Palace, an 18th-century teak structure.</h3>

    
 <section> <center><table border="5" cellpadding="40" style="margin-top: 100px"><tr><th>name</th>
        <th>time</th>
        <th>bus_dis</th>
        <th>hospital</th></center></section>
        


            
            <?php
$con=mysqli_connect("localhost","root","","tourism");
if(!$con){
    echo"database connection failed";
}
$query="SELECT spot,time,bus_dist,hospital FROM tour WHERE city_id=1" ;
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
    







