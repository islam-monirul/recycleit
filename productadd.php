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
    <title>Add Product | Recycle it</title>
    
</head>

<body>


    <div class="container" style="padding-top: 40px; text-align: center;">

        <div class="row">
            <h1 id="top_name">Add Product</h1>
            <div class="col-lg-3"></div>
            <div class="col-lg-6 user">

                <form action="addnewproduct.php" method="POST">
                    <input type="text" placeholder="Write Product Type" name="ptype"><br>
                    <input type="text" placeholder="Price" name="pprice"><br>
                    
                    <button type="submit" class="btn" style="padding: 10px 125px;">Add Product</button>
                </form>

            </div>
            <div class="col-lg-3"></div>

        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>