<?php

//check if all data given and not empty
if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['uphone']) && isset($_POST['upass']) && isset($_POST['uhouse']) && isset($_POST['uroad']) && isset($_POST['uarea']) && isset($_POST['upostcode']) && isset($_POST['uthana']) && isset($_POST['upostoff']) && !empty($_POST['uname']) && !empty($_POST['uemail']) && !empty($_POST['uphone']) && !empty($_POST['upass']) && !empty($_POST['uhouse']) && !empty($_POST['uroad']) && !empty($_POST['uarea']) && !empty($_POST['upostcode']) && !empty($_POST['uthana']) && !empty($_POST['upostoff'])){
    
    $var1=$_POST['uname'];
    $var2=$_POST['uemail'];
    $var3=$_POST['uphone'];
    $var4=md5($_POST['upass']);
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
        
        
        $query="INSERT INTO customer(name,email,phone_no,password,house_no,road_no,area,post_code,thana,post_office) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10')";
        
        try{
            //mysql query execution
            $dbcon->exec($query);
            
            ?>
            <script>window.location.assign('user_login.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
            <script>window.location.assign('user_registration.php')</script>
            <?php
        }
        
        
    }
    
    catch(PDOException $ex){
        ?>
        <script>window.location.assign('user_registration.php')</script>
        <?php
    }
    
}


else{
    ?>
    <script>window.location.assign('user_registration.php')</script>
    <?php
}



?>