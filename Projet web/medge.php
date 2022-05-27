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
    

    
        $sql="SELECT *FROM medecinge";   
        
        $res=mysqli_query($db_handle, $sql);
        
        
        //var_dump($res);
         //affiche toute la table
        while($data=mysqli_fetch_assoc($res)){
            echo "<br> <h1>Informations Medecin: </h1><br>";
            echo "". $data["NomMedGe"]."";
            echo "<br> Medecin Generaliste ";
            echo "<br> Salle: ". $data["Bureau"]."<br>";
            echo "<br>Telephone:".$data["Tel"]."<br>";
            echo "<br> Email: ".$data["Email"]."<br>";
            echo '<form method="post" action="rdvmedge.php" >';
            echo '
            <a  title="Prendre RDV"> <button name="RDV" >
                        Prendre RDV
                    </button></a>';
            echo "   ";
            echo'<a href="" title="Emploi du temps"> <button id="button">
            Emploi du temps
        </button></a>';
            echo "   ";
            echo '<a href="" title="Communiquer"> <button id="button">
            Communiquer
        </button></a>';
            echo "   ";
           echo '<a href="" title="CV"> <button id="button">
           CV
       </button></a>';
           echo "<br><br>";
           echo '</form>';
            
        
        }
    
    
      
}else{
    echo"not connected to db";
}


?>