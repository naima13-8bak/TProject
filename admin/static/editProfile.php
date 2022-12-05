
<?php 
require ("../functions/functions.php");
// if(!isset($_SESSION['name'])){
     
//   header("location:login.php");
// }

if(isset($_GET['id']) ){
$user = getUtilisateurById();
}

 if(isset($_POST['btn-edit'])){
    editUser();
 }
 
 ?>

<!DOCTYPE html>


<html>
  <head>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/desc.css">
     <?php 
        include "includes/head.html" ?>
  </head>

  <body style="background-color: #f5f5f9;overflow-x: hidden;">
   

   
      
    <div class="row">
    <div style="margin-top:150px" class="section-title">
          <h2>Paramètres du compte</h2>
          
       
    </div>
        <div class="col-md-12">

        <ul style="margin-left:76px;"  class="nav nav-pills flex-column flex-md-row mb-3">
                      <li class="nav-item">
                         <a style="background-color:#ce1212;" class="nav-link active" href="profile.php"><i class="bx bx-user me-1"></i> Profile</a>
                       </li>
                       
                       
                       
                   </ul>
            <div  style="background-color: white;border:none;width:1200px;margin-left:76px"  class="card mb-4">
                <h5 style="padding-top:20px;padding-left:20px;margin-bottom: 0;margin-right:1000px;background-color: transparent; border-bottom: 0 solid #d9dee3;"  class="card-header">
                    <b style="background:#ffe0db;color:#ce1212;font-size:18px;" >Modifier le profile</b> 
               </h5>               <hr>
               <div style="" class="card-body">
                    <form action="editProfile.php" method="POST">
                         <input type="hidden" name="idUser" value="<?php echo $user['id']; ?>">

                         
                         <div class="row">
                         <div class="mb-3 col-md-6">
                          <label class="form-label" for="basic-icon-default-fullname">Nom </label>
                          <div class="input-group input-group-merge">
                            <span style="background-color: white" id="basic-icon-default-fullname2" class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:#ce1212"><path d="M6 22h13a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h1zm6-17.001c1.647 0 3 1.351 3 3C15 9.647 13.647 11 12 11S9 9.647 9 7.999c0-1.649 1.353-3 3-3zM6 17.25c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5V18H6v-.75z"></path></svg>
                         </span>
                            <input
                              type="text"
                              class="form-control"
                              id="nom"
                              value="<?php echo $user['nom']; ?>"
                              name="nom"
                           
                            />
                          </div>
                        </div>

                        <!--  -->

                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="basic-icon-default-company">Prenom</label>
                          <div class="input-group input-group-merge">
                            <span style="background-color: white"  id="basic-icon-default-company2" class="input-group-text"
                              > <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:#ce1212"><path d="M6 22h13a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h1zm6-17.001c1.647 0 3 1.351 3 3C15 9.647 13.647 11 12 11S9 9.647 9 7.999c0-1.649 1.353-3 3-3zM6 17.25c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5V18H6v-.75z"></path></svg>
                             </span>
                            <input
                              type="text"
                              id="prenom"
                              class="form-control"
                              value="<?php echo $user['prenom']; ?>"
                              name="prenom"
                            />
                          </div>
                        </div>

                        <!--  -->

                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="basic-icon-default-company">email</label>
                          <div class="input-group input-group-merge">
                            <span style="background-color: white"  id="basic-icon-default-company2" class="input-group-text"
                              >  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #ce1212;transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg></span>

                            <input
                              type="text"
                              id="email"
                              class="form-control"
                              value="<?php echo $user['email']; ?>"
                              name="email"
                            />
                          </div>
                        </div>

                     <!--  -->

                     

                        
                    

          
</div>
<div class="mt-2">
                        <button style="background-color:#ce1212;border:0;" type="submit" name="btn-edit" class="btn btn-primary">Enregistrer</button>
                        <button  type="reset" class="btn btn-outline-secondary">Annuler</button>

                        </div>
                    </form>
                    </div>
                 
                 
                </div>
              </div>
            </div>
          </div>




  

  </body>
</html>
