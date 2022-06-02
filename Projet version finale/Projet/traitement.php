<!--code que l'on a fait lors tp6  réadapté au projet -->
<?php
//connection

echo "Connection to DB";

$db="projetmed"; //name of DB

$site="localhost";//Name of the website
$db_id="root";//DB login id
$db_mdp= "";//DB password

//Connect
$db_handle=mysqli_connect($site,$db_id,$db_mdp);
//var_dump($db_handle);
//Access DB
$db_found=mysqli_select_db($db_handle,$db);

//var_dump($db_found);
if($db_found){
    echo "Connected to DB";

    if(isset($_POST["showall"]))
    {//reponse du bouton showall
        if(!empty($_POST["MedGe"]))
        {
            $MedGe=$_POST["MedGe"];
            $sql="SELECT DateRDV,Heure,NomMedGe,MailClient,Salle,NomMedSpe,TypeRDV FROM rendezvous WHERE NomMedGe='$MedGe'";   
        }
        if(!empty($_POST["MedSpe"]))
        {
            $MedSpe=$_POST["MedSpe"];
            $sql="SELECT DateRDV,Heure,NomMedGe,MailClient,Salle,NomMedSpe,TypeRDV FROM rendezvous WHERE NomMedSpe='$MedSpe'";
        }
        if(!empty($_POST["Client"]))
        {
            $client=$_POST["Client"];
            $sql="SELECT DateRDV,Heure,NomMedGe,MailClient,Salle,NomMedSpe,TypeRDV FROM rendezvous WHERE MailClient='$client'";
        }
        $res=mysqli_query($db_handle, $sql);
        
        
        //var_dump($res);
         //affiche toute la table
        while($data=mysqli_fetch_assoc($res)){
            echo "<br> Informations RDV: <br>";
            echo "MedGe:" . $data["NomMedGe"]."<br>";
            echo "MedSpe:" . $data["NomMedSpe"]."<br>";
            echo "Client:" . $data["MailClient"]."<br>";
            echo "TypeRDV:" . $data["TypeRDV"]."<br>";
            echo "Salle:" . $data["Salle"]."<br>";
            echo "Date:" . $data["DateRDV"]."<br>";
            echo "Heure:" . $data["Heure"]."<br>";
        
        }
    }
    if(isset($_POST["insert"]))
    {//reponse du bouton showall
        try{$MedGe=$_POST["MedGe"];
        $date=$_POST["Date"];
        $MedSpe=$_POST["MedSpe"];
        $client=$_POST["Client"];
        $heure=$_POST["Heure"];
        $salle=$_POST["Salle"];
        $typerdv=$_POST["TypeRDV"];
        
        $sql="INSERT INTO rendezvous (DateRDV,Heure,NomMedGe,MailClient,Salle,NomMedSpe,TypeRDV) VALUES ('$date','$heure','$MedGe','$client','$salle','$MedSpe','$typerdv')";
        $res=mysqli_query($db_handle,$sql);
        echo "<br>";
        echo 'valeurs rentrés dans BDD';
        }
        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }
    if(isset($_POST["delete"]))
    {//reponse du bouton showall
        try{ 
            if(!empty($_POST["MedGe"]))
            {
                $MedGe=$_POST["MedGe"];
                $sql="DELETE FROM rendezvous WHERE NomMedGe='$MedGe'";  
            }
            if(!empty($_POST["MedSpe"]))
            {
                $MedSpe=$_POST["MedSpe"];
                $sql="DELETE FROM rendezvous WHERE NomMedSpe='$MedSpe'";  
            }
            if(!empty($_POST["Client"]))
            {
                $client=$_POST["Client"];
                $sql="DELETE FROM rendezvous WHERE MailClient='$client'";  
            }
        $res=mysqli_query($db_handle,$sql);
        echo "<br>";
        echo 'valeur supprimé dans BDD';
        }
        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }
}else{
    echo"not connected to db";
}


?>