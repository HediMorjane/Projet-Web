
<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Omnés Santé <omnesante@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";    
$headers .= 'Content-Transfer-Encoding: 8bit';



//if(isset($_SESSION['ID'])){
   // header['']
//}
// Start Session
session_start();

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
    $prenom=$_POST['prenom'];
    $username=$_POST['username'];
    $spe=$_POST['spe'];
    $date=$_POST['date'];
    $heure=$_POST['heure'];
    $mail=$_POST['mail'];
    if($spe == 'Médecin généraliste'){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO rendezvous (DateRDV, Heure, NomMedGe, MailClient, Salle, NomMedSpe, TypeRDV) values ('$date', '$heure', 'nom', '$mail', '308', 'Null', 'Dermatologie')";


        //3.Executer la requete et sauvegarder les données
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($res == TRUE)
        {
            // Data Inserted
            echo"Données inssérés";
            // Envoi du mail
            mail($mail, "Confirmation de rendez-vous"," Bonjour $prenom $nom.
            Votre rendez-vous du $date à $heure h est confirmé !  ");
            
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
} else if($spe == 'Médecin spécialiste'){

    //2. Requete SQL Query pour sauvegarder les données dans la bdd
    $sql="INSERT INTO rendezvous (DateRDV, Heure, NomMedGe, MailClient, Salle, NomMedSpe, TypeRDV) values ('$date', '$heure', 'Null', '$mail', '308','nom', 'Dermatologie')";


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
}
?>