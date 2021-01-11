<?php

    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <!-- font load -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


            <link rel="stylesheet" href="style.css" type="text/css">
            <title>User Home | Recycle it</title>

        </head>

        <body>


            <div class="container" style="padding-top: 40px; text-align: center;">

                <div class="row">
                    <p id="top_name">Welcome <b style="color: green;"><?php echo $_SESSION['useremail'] ?></b></p>
                    <div class="col user" style="border-right: 1px solid #F0F0F0;text-align: left;">
                        
                        <?php
                            
                            $umail=$_SESSION['useremail'];
                            
                            try{
                                //database connection
                                $dbcon = new PDO("mysql:host=localhost:3306;dbname=recycleit;","root","");
                                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                
                                //echo "<h2>" . $umail . "</h2>";
                                
                                $sqlquery="SELECT * FROM customer WHERE email='$umail'";
                                
                                //echo "<h5>" . $sqlquery . "</h5>";
                                
                                try{
                                    
                                    $returnval=$dbcon->query($sqlquery);
                                    $data=$returnval->fetchAll();
                                    
                                    //echo "<h5>" . $returnval . "</h5>";
                                    
                                    foreach($data as $row){
                                    ?>
                                        <h1 style="text-align: center;">My Profile</h1>
                                        <div class="datashowdiv">
                                            <!-- block element b -->
                                            <p style="font-weight: 600;">Customer ID :  <span style="color: red;"><?php echo $row['customer_id'] ?></span></p>
                                            <p style="font-weight: 600;">Name :  <span class="stylespan"><?php echo $row['name'] ?></span></p>
                                            <p style="font-weight: 600;">Email :  <span class="stylespan"><?php echo $row['email'] ?></span></p>
                                            <p style="font-weight: 600;">Phone :  <span class="stylespan"><?php echo $row['phone_no'] ?></span></p>
                                        </div>
                                        
                                        <div class="datashowdiv">
                                            <h4 style="color: Green;"><strong>Address</strong></h4>
                                            <!-- in-line element b -->
                                            <b>House No :  <span class="stylespan"><?php echo $row['house_no'] ?></span></b>
                                            <b>Road No :  <span class="stylespan"><?php echo $row['road_no'] ?></span></b>
                                            <b>Area :  <span class="stylespan"><?php echo $row['area'] ?></span></b><br><br>

                                            <b>Post Code :  <span class="stylespan"><?php echo $row['post_code'] ?></span></b>
                                            <b>Thana :  <span class="stylespan"><?php echo $row['thana'] ?></span></b>
                                            <b>Post Office :  <span class="stylespan"><?php echo $row['post_office'] ?></span></b>
                                            <br><br>
                                            <button type="button" class="btn" id="updatebtn">Update Address</button>
                                        </div>
                                        
                                        <div class="datashowdiv">
                                            <p style="font-weight: 600;">Sold Amount :  <span class="stylespan"><?php echo $row['sold_amount'] ?></span>BDT</p>
                                        </div>
                                        
                                    <?php
                                    }
                                }
                                catch(PDOException $ex){
                                    ?>
                                    <h4 style="margin-bottom: 40px;">No Data Found</h4>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                <h4 style="margin-bottom: 40px;">No Data Found</h4>
                                <?php
                            }
            
                        ?>
                        
                        <div style="padding: 25px 0;">
                        <button type="button" class="btn" id="logoutbtn">Logout</button>
                        </div>
                        
                    </div>

                </div>

            </div>
            
            <script>
                
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click',processlogout);
                
                function processlogout(){
                    window.location.assign('logoutprocess.php');
                }
            
            </script>
            
            <script>
                
                var update=document.getElementById('updatebtn');
                update.addEventListener('click',processupdate);
                
                function processupdate(){
                    window.location.assign('userdatadupdate.php');
                }
                
            </script>


            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            
        </body>

        </html>
                
        <?php

    }

    else{
        ?>
        <script>
            window.location.assign('user_login.php')
        </script>
        <?php
    }


?>