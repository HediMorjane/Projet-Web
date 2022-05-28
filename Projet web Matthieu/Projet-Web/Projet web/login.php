<?php

$server="localhost";
$username="root";
$password="";
$db="projetweb";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    echo "<script>alert('Connexion échouée.')</script>";
}
   

if(isset($_POST['mail'])){
    $mail=$_POST['mail'];
    $password=md5($_POST['password']);
    $sql="SELECT * from client where Mail='".$mail."' AND Pass='".$password."' limit 1 ";

    $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    echo"Connexion réuissie";
         /*$row=mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username'];
        header("Location:welcome.php")*/
        exit();
}
else{
    header("Location:compte.html") ; 
}
}

?>