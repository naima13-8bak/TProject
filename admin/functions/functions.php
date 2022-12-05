<?php
session_start();
// fonction pour établir la connection avec la base de données
function DBconnexion(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="scan";
  try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "Connected successfully";
  } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
}
// --------------------------------------------------------------------


// -------------------------------------------------------------------










    



// ---------------------------------------
// ------ admin-------------------------------
// -------------------------------------------------------------------

// afficher :
function getAllUsers(){      
  $conn = DBconnexion();

  $requet = "SELECT * from admin ";
  $result = $conn->query($requet);
  $users = $result->fetchAll();
  return $users;
}

//Modifier :
function editUser(){ 
  $conn = DBconnexion();
  $idu=$_POST['idUser'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
   $prenom=$_POST['prenom'];


  //creation de la requet :
 $requet = "UPDATE admin set nom='$nom', email='$email', prenom='$prenom', where id='$idu'";
 $result = $conn->query($requet);

    if($result){
     header('location:static/profile.php');
    }else{
         echo "Impossible de modifier votre compte";
    }
}

function getUtilisateurById(){
  $conn = DBconnexion();
  $id = $_SESSION['id'];
  $requet = "SELECT * FROM admin WHERE id=$id";
  $result = $conn->query($requet);
  $user= $result->fetch();
  return $user;
}
//edit image user :

function    editImgUser(){
  
  $conn = DBconnexion();
  $id= $_SESSION['id'];
   
      $image = $_POST["image"];
  

  $requet = "UPDATE admin SET image='$image' where id='$id'";
  $result = $conn->query($requet);

 
    }


