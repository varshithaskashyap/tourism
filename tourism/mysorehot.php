                         
                         
<!DOCTYPE HTML>
<!--
    Road Trip by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
<center><h2>MYSURU  HOTELS LIST:</h2></center>

<center> <table border="5" cellpadding="40" style="margin-top: 100px"><tr>
    <th>name</th>
      </center>
        


            
            <?php
$con=mysqli_connect("localhost","root","","tourism");
if(!$con){
    echo"database connection failed";
}
$query="SELECT name FROM hotel WHERE city_id=2";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo"<tr>";
   echo"<td>".$row['name']."</td>";
    
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
    




