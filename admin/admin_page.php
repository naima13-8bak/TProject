<?php
 session_start();

?>
<html>
    <head><title>Dashboard Admin</title></head>
    <body>
        <h1><?php

 echo "Admin ". $_SESSION['prenom'];
?></h1>
       
        <a href="../logout.php"> <button class="btn" style="background-color: black;color:white; border:0px; width:150px; height:50px;margin-top:30px;"><h2><b>Logout</b></h2></button></a>
       
    </body>
</html>