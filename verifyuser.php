<?php

    
if(isset($_POST['uemail']) && isset($_POST['upass']) && !empty($_POST['uemail']) && !empty($_POST['upass'])){
    
    $var1=$_POST['uemail'];
    $var2=md5($_POST['upass']);
    
    try{
        
        //database connect
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=recycleit;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $sqlquery="SELECT * FROM customer WHERE email='$var1' AND password='$var2'";
        
        try{
            $returnvalue=$dbcon->query($sqlquery);
            if($returnvalue->rowCount()==1){
                session_start();
                
                $_SESSION['useremail']=$var1;
                
                ?>
                <script>window.location.assign('userhomepage.php')</script>
                <?php
            }
            
            else{
                ?>
                <script>window.location.assign('user_login.php')</script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
            <script>window.location.assign('user_login.php')</script>
            <?php
        }
        
    }
    catch(PDOException $ex){
        ?>
        <script>window.location.assign('user_login.php')</script>
        <?php
    }
    
}

else{
    ?>
    <script>window.location.assign('user_login.php')</script>
    <?php
}

?>