<?php

$server="localhost";
$username="root";
$password="";
$db="projetmed";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    echo "<script>alert('Connexion échouée.')</script>";
}
   

if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=($_POST['mdp']);
    $sql="SELECT * from administrateur where Username='".$username."' AND MotdePasse='".$password."' limit 1 ";

    $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    //echo"Connexion réuissie";
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username'];
        header("Location:index.php") ;  
}

else{
    echo"Connexion échouée";
    header("Location:../admin.html") ; 
}
}

?>