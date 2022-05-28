<!--code que l'on a fait lors tp6  réadapté au projet -->

<!DOCTYPE html>
<html>
  
   
    <head>
        <title> Prise RDV</title>
    </head>
    <body>

        <h1>Formulaire</h1>
        <form method="post" action="traitementrdvmedspe.php">
            <label>Saisir nom Medecin Spe: </label>
            <input type="text" name="MedSpe"> <br>
            <label>Nom: </label>
            <input type="text" name="Client"> <br>
            <label>Date:</label>
            <input type="text" name="Date"> <br>
            <label>Heure:</label>
            <input type="text" name="Heure"> <br>
            <label>Salle:</label>
            <input type="text" name="Salle"> <br>
            <label>Type rdv:</label>
            <input type="text" name="TypeRDV"> <br>
            
            <input type="submit" name="insert" value="Insert"><br>
           

        </form>
    </body>

</html>
