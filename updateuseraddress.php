<?php

session_start();

$umail=$_SESSION['useremail'];

//check if all data given and not empty
if(isset($_POST['uhouse']) && isset($_POST['uroad']) && isset($_POST['uarea']) && isset($_POST['upostcode']) && isset($_POST['uthana']) && isset($_POST['upostoff']) && !empty($_POST['uhouse']) && !empty($_POST['uroad']) && !empty($_POST['uarea']) && !empty($_POST['upostcode']) && !empty($_POST['uthana']) && !empty($_POST['upostoff'])){
    
    $var5=$_POST['uhouse'];
    $var6=$_POST['uroad'];
    $var7=$_POST['uarea'];
    $var8=$_POST['upostcode'];
    $var9=$_POST['uthana'];
    $var10=$_POST['upostoff'];

    try{
        //database connect
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=recycleit;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $query="UPDATE customer SET house_no='$var5', road_no='$var6', area='$var7', post_code='$var8', thana='$var9', post_office='$var10' WHERE email='$umail'";
        
        try{
            //mysql query execution
            $dbcon->exec($query);
            
            ?>
            <script>window.location.assign('userhomepage.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
            <script>window.location.assign('userdataupdate.php')</script>
            <?php
        }
        
        
    }
    
    catch(PDOException $ex){
        ?>
        <script>window.location.assign('userdataupdate.php')</script>
        <?php
    }
    
}


else{
    ?>
    <script>window.location.assign('userdataupdate.php')</script>
    <?php
}



?>