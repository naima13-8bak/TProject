<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
  

   $select = "SELECT * FROM admin WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
         $_SESSION['nom'] = $row['nom'];
         $_SESSION['prenom'] = $row['prenom'];
         $_SESSION['email'] = $row['email'];
         header('location:admin/admin_page.php');


   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/login.css"> 


</head>
<body >
   
 <form action="" method="post" class="box">
    <h1>Connectez-vous</h1> 
    <br>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <label style="margin-right:230px;;color:white;" for=""><b>E_mail</b></label>
      <input type="email" name="email" required placeholder="enter your email">
      <label style="margin-right:190px;;color:white;"><b> Mot de passe</b></label>
      <input type="password" name="password" required placeholder="enter your password">
     
      <input type="submit" name="submit" value="Connexion" class="form-btn" style="background-color: red;color:white;border:0px;font-size:20px;width:120px;">
   </form>
    <img src="ressources/images/img1.jpeg" alt="">
</body>
</html>
<style></style>