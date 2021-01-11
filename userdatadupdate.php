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
                            
                        ?>
                        
                            <div class="datashowdiv" style="text-align: center;">
                               
                               <h3 style="margin-bottom: 40px;color: green;">Update Your Address</h3>
                                
                                <form action="updateuseraddress.php" method="POST">
                                    
                                    <input type="text" placeholder="House No." name="uhouse"><br>
                                    <input type="text" placeholder="Road No." name="uroad"><br>
                                    <input type="text" placeholder="Area" name="uarea"><br>
                                    <input type="text" placeholder="Post Code" name="upostcode"><br>
                                    <input type="text" placeholder="Thana" name="uthana"><br>
                                    <input type="text" placeholder="Post office" name="upostoff"><br>

                                    <button type="submit" class="btn" style="padding: 10px 82px;">Update Address</button>
                                    
                                </form>
                                
                            </div>
                        
                        <?php
            
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
?>