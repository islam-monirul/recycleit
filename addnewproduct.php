<?php

//check if all data given and not empty
if(isset($_POST['ptype']) && isset($_POST['pprice']) && !empty($_POST['ptype']) && !empty($_POST['pprice'])){
    
    $var1=$_POST['ptype'];
    $var2=$_POST['pprice'];

    try{
        //database connect
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=recycleit;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $query="INSERT INTO product(type,price) VALUES('$var1','$var2')";
        
        try{
            //mysql query execution
            $dbcon->exec($query);
            
            ?>
            <script>window.location.assign('example.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
            <script>window.location.assign('productadd.php')</script>
            <?php
        }
        
        
    }
    
    catch(PDOException $ex){
        ?>
        <script>window.location.assign('productadd.php')</script>
        <?php
    }
    
}


else{
    ?>
    <script>window.location.assign('productadd.php')</script>
    <?php
}



?>