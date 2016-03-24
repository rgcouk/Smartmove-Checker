<?php

include 'base.php';
include 'header.php';
include 'lessphp.inc.php';
include 'nav.php';

?>
<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
        if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
         {
        ?>
            <h1>Member Area</h1>
            <p>Thanks for logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
        <?php 
        }
        elseif(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username = mysql_real_escape_string($_POST['username']);
            $password = md5(mysql_real_escape_string($_POST['password']));
            
        }
        else
        {
            // display the login form
            // let the user access the main page
            echo '<h1>Sign Up</h1>';
        }
        ?>
        
        </div>
    </div>
</div>
<?php include 'footer.php';?>