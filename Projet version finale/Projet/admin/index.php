<link href="../CSS/style.css" rel="stylesheet" type="text/css" />




<html>
    <head>
         <title>Omnes santé accueil</title>
          <link rel="stylesheet"href="../CSS/admin.css">
    </head>


    <body>
         <!-- Début menu  -->
         <div class="menu text-center">
         <div class="wrapper">
         <ul>
         <li><a href="index.php"> Home </a></li>
          <li><a href="manage-med.php"> Médecin </a></li>
          <li><a href="manage-perso.php"> Personnel de santé </a></li>
          <li><a href="manage-info.php"> Informations laboratoire </a></li>
          <li><a href="manage-rdv.php"> Rendez-vous </a></li>
          </ul>
          </div>
         </div>
         <!-- Fin menu -->

         <!-- Élément principaux début -->
         <div class="main-content">
    <div class="wrapper">
            <h1> Ajouter un admin </h1>
            <br><br>
            <form action=""method="POST">
    <table class="tbl-30">
         <tr>
              <td>Nom d'utilisateur</td>
              <td>
             <input type="text" name="username"placeholder="Pseudo">
              </td>
            </tr>    
            <tr>
              <td>Mot de passe</td>
              <td>
                   <input type="password" name="password" placeholder="mot de passe">
              </td> 
            </tr>
            
         <tr>
    <td>
         <input type="submit"name="submit"value="Ajouter un admin" id="button">
    </td>
</tr>
        
</form>

<div>
<div>      
    </table>

    <div class="main-content">
    <div class="wrapper">
            <h1> Supprimer un admin </h1>
            <br><br>
            <form action=""method="POST">
    <table class="tbl-30">
         <tr>
              <td>Nom d'utilisateur</td>
              <td>
             <input type="text" name="username" placeholder="Entrer le nom de l'admin">
              </td>
            </tr>   
         <tr>
    <td>
         <input type="submit"name="submit2"value="Supprimer un admin" id="button">
    </td>
</tr>
        
</form>

<div>
<div>      
    </table>
         <!-- Élément principaux fin -->

         <!-- Footer début -->
         <div class="footer">
              <div class="wrapper">
              <p class="text-center">Retourner au menu principal</p>
              <a href="../index.html" title="Page d'accueil"> <button class="text-center"  id="button">
                                Accueil
                            </button> </a>
          </div>
         </div>
         <!-- Footer fin -->
    </body>
</html>

<?php

// Creer une constante
define('SITEURL','http://localhost/Projet%20Web/');


$conn=mysqli_connect('localhost', 'root','') or die(mysqli_error());// Connecter la bdd
$db_select=mysqli_select_db($conn,'projetmed') or die(mysqli_error());// selectionner la bdd
if(!$conn){
    echo "<script>alert('Connexion échouée.')</script>";
}

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO administrateur (Username, MotdePasse) values ('$username', '$password')";

        //3.Executer la requete et sauvegarder les données
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($res == TRUE)
        {
            // Data Inserted
            echo"Données inssérés";
            // CreateaSession Variable to Display Message
            //$_SESSION["add"]="Client enregistré";
            // Redirect Page to Manage Admin
            //header("location:".SITEURL.'register.html');
        }
        else
        {
            // FAiled to Insert Data
            echo"Erreur dans l'insertion des données";
            //$_SESSION['add']="Erreur dans l'enregistrement du client";
            // Redirect Page to Add Admin
            //header("location:".SITEURL.'register.html');
    }

}

if(isset($_POST['submit2']))
{
    $username=$_POST['username'];

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="DELETE FROM administrateur WHERE Username='$username' ";

        //3.Executer la requete et sauvegarder les données
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($res == TRUE)
        {
            // Data Inserted
            echo"Données effacées";
            // CreateaSession Variable to Display Message
            //$_SESSION["add"]="Client enregistré";
            // Redirect Page to Manage Admin
            //header("location:".SITEURL.'register.html');
        }
        else
        {
            // FAiled to Insert Data
            echo"Erreur dans l'insertion des données";
            //$_SESSION['add']="Erreur dans la suppression du médecin";
            // Redirect Page to Add Admin
            //header("location:".SITEURL.'register.html');
    }

}

?>