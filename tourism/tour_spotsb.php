
<!DOCTYPE HTML>

<html>
    <head>
        <title>tourism information</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        

        
            <header id="header">
                <h2><button><a href="index.html">home page</a></button></h2>
                <h1><button><a href="#menu"><span>lets go to website</span></a></button></h1>
                <h1></h1>
                <h1></h1>
                
            </header>



        <nav id="menu">
                <ul class="links">
                    <li><a href="https://www.karnataka.com/bangalore/bangalore-palace/.html">Banglore palace</a></li>
                    <li><a href="http://www.horticulture.kar.nic.in/lalbagh.htm">lalbagh</a></li>
                    <li><a href="http://www.horticulture.kar.nic.in/cubbon.htm">cubbon park</a></li>
                </ul>
            </nav>

            

        
            <section id="banner" class="bg-img" data-bg="banner5.jpg">
                <div class="inner">
                    <header>
                        <h1>BENGALURU</h1>
                        <h2><table border="2" cellpadding="20" style="margin-top: 150px">
                                <tr><th>name</th>
                                <th>time</th>
            
            
    </tr>
</h2>
                       
            
                        <?php
                        $con=mysqli_connect("localhost","root","","tourism");
                        if(!$con){
                            echo"database connection failed";
                        }
                        $query="SELECT spot,time FROM tour WHERE city_id=1";
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
