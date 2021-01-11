<?php
    //delete session variable & go to signin page
    session_start();
    
    unset($_SESSION['useremail']);
    session_destroy();

    ?>
        <script>window.location.assign('userhomepage.php')</script>
    <?php
    
?>