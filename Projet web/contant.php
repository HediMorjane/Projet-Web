<?php 

$conn=mysqli_connect('localhost', 'root','') or die(mysqli_error());// Connecter la bdd
$db_select=mysqli_select_db($conn,'projetweb') or die(mysqli_error());// selectionner la bdd

?>