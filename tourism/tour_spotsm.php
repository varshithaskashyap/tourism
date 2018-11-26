
<!DOCTYPE HTML>

<html>
    <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <!-- Header -->
            <header id="header">
                
                  <h1><button><a href="#menu"><span>lets go to website</span></a></button></h1>
                  <h2><button><a href="index.html">home page</a></button></h2> 
                  <h1></h1>
                <h1></h1>
                
            </header>



        <!-- Nav -->
        <nav id="menu">
                <ul class="links">
                    <li><a href="https://en.wikipedia.org/wiki/Mysore_Palace">mysore palace</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Mysore_Zoo">mysore zoo</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Chamundeshwari_Temple">chamundeshwari temple</a></li>
                </ul>
            </nav>
            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">
                
                        <h1>MYSURU</h1>
                        
                            <h2><table border="2" cellpadding="20" style="margin-top: 150px">
                                <tr>
                                    <h2><th>name</th>
                                    <th>time</th></h2>
          
            
            
    
            
            
    </tr></h2>
        <?php
                        $con=mysqli_connect("localhost","root","","tourism");
                        if(!$con){
                            echo"database connection failed";
                        }
                        $query="SELECT spot,time FROM tour WHERE city_id=2";
                        $result=mysqli_query($con,$query);
                        while($row=mysqli_fetch_array($result)){
                            echo"<tr>";
                            echo"<td>".$row['spot']."</td>";
                            echo"<td>".$row['time']."</td>";
                            
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
    





            
            
            
                    
            



         
            
</body>
</html>
