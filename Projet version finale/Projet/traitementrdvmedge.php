<!--code que l'on a fait lors tp6  réadapté au projet -->
<?php
//connection


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
    
    if(isset($_POST["insert"]))
    {//reponse du bouton showall
        try{$MedGe=$_POST["MedGe"];
        $date=$_POST["Date"];
        $client=$_POST["Client"];
        $heure=$_POST["Heure"];
        $salle=$_POST["Salle"];
        $typerdv=$_POST["TypeRDV"];
        
        $sql="INSERT INTO rendezvous (DateRDV,Heure,NomMedGe,MailClient,Salle,TypeRDV) VALUES ('$date','$heure','$MedGe','$client','$salle','$typerdv')";
        $res=mysqli_query($db_handle,$sql);
        echo "<br>";
        echo 'RDV pris';
        }
        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }
  
}else{
    echo"not connected to db";
}


?>