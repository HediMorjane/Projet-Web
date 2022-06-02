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
            <h1> Ajouter un médecin </h1>
            <br><br>
            <form action=""method="POST">
    <table class="tbl-30">
         <tr>
              <td>Nom</td>
              <td>
             <input type="text"name="nom"placeholder="Dr.Oui">
              </td>
            </tr>
             <tr>
              <td>Photo</td>
              <td>
                   <input type="file"name="photo"placeholder="Télécharger une photo">
              </td> 
            </tr>
            <tr>
              <td>Bureau</td>
              <td>
                   <input type="text"name="bureau"placeholder="915">
              </td> 
            </tr>
            <tr>
            <tr>
              <td>Numéro de téléphone</td>
              <td>
                   <input type="text" name="numero"placeholder="+3388888888">
              </td> 
            </tr>
            <tr>
              <td>Adresse email</td>
              <td>
                   <input type="mail" name="email"placeholder="adresse@email.com">
              </td> 
            </tr>
            <tr>
              <td>CV</td>
              <td>
                   <input type="file" name="cv"placeholder="Télécharger le CV">
              </td> 
            </tr>
            <tr>
              <td>Mot de passe</td>
              <td>
                   <input type="password" name="password" placeholder="mot de passe">
              </td> 
            </tr>
              <td>
              <label for="spécialité">Spécialité</label>
              <select name="spe" >
                <option  value="">Choose...</option>
                <option value="Médecin spécialiste">Médecin spécialiste</option>
                <option value="Médecin généraliste">Médecin généraliste</option>
              </select>
              </td>
         </tr>
         <tr>
              <td>
              <label for="spécialité">Spécialité si médecin spécialiste</label>
              <select name="spe2" >
                <option  value="">Choose...</option>
                <option value="Addictologue">Addictologue</option>
                <option value="Andrologue">Andrologue</option>
                <option value="Cardiologue">Cardiologue</option>
                <option value="Dermathologue">Dermathologue</option>
                <option value="Hépato-Gastro-entérologue">Hépato-Gastro-entérologue</option>
                <option value="Gynécologue">Gynécologue</option>
                <option value="IST">IST</option>
                <option value="Ostéopathe">Ostéopathe</option>
              </select>
              </td>
         </tr>
         <tr>
    <td>
         <input type="submit"name="submit"value="Ajouter un médecin" id="button">
    </td>
</tr>
        
</form>

<div>
<div>      
    </table>

    <div class="main-content">
    <div class="wrapper">
            <h1> Supprimer un médecin </h1>
            <br><br>
            <form action=""method="POST">
    <table class="tbl-30">
         <tr>
              <td>Nom</td>
              <td>
             <input type="text"name="nom"placeholder="Entrer le nom du médecin">
              </td>
            </tr>
            <tr>
              <td>
              <label for="spécialité">Type</label>
              <select name="spe" >
                <option  value="">Choose...</option>
                <option value="Médecin spécialiste">Médecin spécialiste</option>
                <option value="Médecin généraliste">Médecin généraliste</option>
              </select>
              </td>
         </tr>
         
         <tr>
    <td>
         <input type="submit"name="submit2"value="Supprimer un médecin" id="button">
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
    $nom=$_POST['nom'];
    $photo=$_POST['photo'];
    $bureau=$_POST['bureau'];
    $num=$_POST['numero'];
    $mail=$_POST['email'];
    $cv=$_POST['cv'];
    $password=md5($_POST['password']);
    $spe=$_POST['spe'];
    $spe2=$_POST['spe2'];
    if($spe=='Médecin généraliste'){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO medecinge (NomMedGe,Photo, Bureau, Tel, Email, Cv, MotdePasse) values ('$nom', '$photo', '$bureau', '$num', '$mail', '$cv', '$password')";

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
            //echo"Erreur dans l'insertion des données";
            $_SESSION['add']="Erreur dans l'enregistrement du client";
            // Redirect Page to Add Admin
            header("location:".SITEURL.'register.html');
    }
}
else if($spe=='Médecin spécialiste'){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO medecinspe (NomMedSpe, Spe, Photo, Bureau,Cv, MotdePasse, Email, Tel) values ('$nom', '$spe2' , '$photo', '$bureau', '$cv', '$password', '$mail', '$num')";


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
            //echo"Erreur dans l'insertion des données";
            $_SESSION['add']="Erreur dans l'enregistrement du client";
            // Redirect Page to Add Admin
            header("location:".SITEURL.'register.html');
    }
}

}

if(isset($_POST['submit2']))
{
    $nom=$_POST['nom'];
    $spe=$_POST['spe'];
    if($spe=='Médecin spécialiste'){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="DELETE FROM medecinspe WHERE NomMedSpe='$nom' ";

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
else if($spe=='Médecin généraliste'){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="DELETE FROM medecinge WHERE NomMedGe='$nom'";

        //3.Executer la requete et sauvegarder les données
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($res == TRUE)
        {
            // Data Inserted
            echo"Données éffacées";
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

}

?>