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
    <title>User Signup | Recycle it</title>
    
</head>

<body>


    <div class="container" style="padding-top: 40px; text-align: center;">

        <div class="row">
            <h1 id="top_name">User Registration</h1>
            <div class="col-lg-3"></div>
            <div class="col-lg-6 user">

                <form action="signup_user.php" method="POST">
                    <input type="text" placeholder="Name" name="uname"><br>
                    <input type="email" placeholder="Email Address" name="uemail"><br>
                    <input type="tel" placeholder="Phone Number" name="uphone"><br>
                    <input type="password" placeholder="Password" name="upass"><br>
                    <input type="text" placeholder="House No." name="uhouse"><br>
                    <input type="text" placeholder="Road No." name="uroad"><br>
                    <input type="text" placeholder="Area" name="uarea"><br>
                    <input type="text" placeholder="Post Code" name="upostcode"><br>
                    <input type="text" placeholder="Thana" name="uthana"><br>
                    <input type="text" placeholder="Post office" name="upostoff"><br>
                    
                    <button type="submit" class="btn">Register</button>
                </form>

            </div>
            <div class="col-lg-3"></div>

        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>