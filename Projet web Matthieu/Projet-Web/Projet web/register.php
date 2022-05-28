
<?php

if(isset($_SESSION['ID'])){
    header['']
}
// Start Session
session_start();

// Creer une constante
define('SITEURL','http://localhost/Projet%20Web/');


$conn=mysqli_connect('localhost', 'root','') or die(mysqli_error());// Connecter la bdd
$db_select=mysqli_select_db($conn,'projetweb') or die(mysqli_error());// selectionner la bdd
if(!$conn){
    echo "<script>alert('Connexion échouée.')</script>";
}

if(isset($_POST['submit']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $email=$_POST['mail'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);
    $cv=$_POST['cv'];
    $carte=$_POST['carte'];
    if($password == $cpassword){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO client SET
        Nom='$nom', Prenom='$prenom',Adresse='$adresse',Mail='$email',
        Pass='$password',CarteVitale='$cv',Paiement='$carte'";

        //3.Executer la requete et sauvegarder les données
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($res == TRUE)
        {
            // Data Inserted
            //echo"Données inssérés";
            // CreateaSession Variable to Display Message
            $_SESSION["add"]="Client enregistré";
            // Redirect Page to Manage Admin
            header("location:".SITEURL.'register.html');
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

?>