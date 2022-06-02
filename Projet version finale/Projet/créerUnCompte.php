<?php session_start();  
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omnes santé|Online mediacal consultation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="CSS/carousel.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="logo">
      <img src="Images/Logo rectangle.png" alt="Image au pif" class="img-responsive"/>
    </div>
    <div class="container-fluid">
      <a class="navbar-brand " href="#">Omnes santé</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <!--Menu déroulant-->
          <li class="nav-item">
            <div class="dropdown text-end">
              <a href="#" class="nav-link d-block text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">Accueil</a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="index.html">Accueil</a></li>
              </ul>
            </div>
          </li>

          <!--Menu déroulant-->
          <li class="nav-item">
              <div class="dropdown text-end">
                <a href="#" class="nav-link d-block text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">Tout parcourir</a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="medge.php">Médecin généraliste</a></li>
                  <li><a class="dropdown-item" href="medecinSpe.html">médecin spécialiste</a></li>
                </ul>
              </div>
            </li>

          <!--Menu déroulant-->
          <li class="nav-item">
            <div class="dropdown text-end">
              <a href="#" class="nav-link d-block text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">Rendez vous</a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="rdv2.html">Prendre un rendez-vous</a></li>
                <li><a class="dropdown-item" href="afficherRDV.php">Afficher mes rendez-vous</a></li>
                <!--<li><a class="dropdown-item" href="#">Profile</a></li>-->
              </ul>
            </div>
          </li>

          <!--Menu déroulant-->
          <li class="nav-item">
            <div class="dropdown text-end">
              <a href="#" class="nav-link d-block text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">Votre compte</a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="créerUnCompte.php">Créer un compte</a></li>
                <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
                <li><a class="dropdown-item" href="admin.html">Admin</a></li>
                <li><a class="dropdown-item" href="connexionMed.php">Connexion médecin</a></li>
                  <?php if(isset($_REQUEST['logout'])){
                  unset($_SESSION['email']);
                  session_destroy();
                  echo "déconnexion réussie";
                  //header("Location:créerUnCompte.php") ;  
                  //exit();
                  }?>
              </ul>
            </div>
          </li>
        </ul>
        <form action="">
          <input type="search" id="search" name="search" placeholder="Rechercher">
          <button class="btn btn-outline-success" type="submit" onclick="ouvrirPage()">Chercher</button>
        </form>
        <script>
                function ouvrirPage() {
                    var a = document.getElementById("search").value;

                    if (a === "accueil") {
                        window.open("http://localhost/Proejt/Projet/index.html");
                    }

                    if (a === "compte") {
                        window.open("http://localhost/Proejt/Projet/cr%C3%A9erUnCompte.php");
                    }

                    if (a === "youtube") {
                        window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
                    }

                    if (a === "tout parcourir") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Oui") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Mad") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Mon") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Souriante") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Anne") {
                        window.open("http://localhost/Proejt/Projet/medge.php");
                    }

                    if (a === "Dr.Brian") {
                        window.open("http://localhost/Proejt/Projet/Andrologie.php");
                    }

                    if (a === "Dr.Canaille") {
                        window.open("http://localhost/Proejt/Projet/Cardiologie.php");
                    }

                    if (a === "Dr.Isa-Belle") {
                        window.open("http://localhost/Proejt/Projet/Dermatologie.php");
                    }

                    if (a === "Dr.Vincent") {
                        window.open("http://localhost/Proejt/Projet/Gastro.php");
                    }

                    if (a === "Dr.Bernadette") {
                        window.open("http://localhost/Proejt/Projet/Gyneco.php");
                    }

                    if (a === "Dr.Busy") {
                        window.open("http://localhost/Proejt/Projet/IST.php");
                    }
                    
                    if (a === "Dr.Masseur") {
                        window.open("http://localhost/Proejt/Projet/Ostheo.php");
                    }


                }
            </script>
      </div>
    </div>
  </nav>
</header>
<main>

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Créer mon compte</h2>
        <p class="lead">Saisissez vos informations pour continuer.</p>
      </div>
      <h2> 

      <?php if(!empty($_SESSION['email'])){?>
         <?php echo "Vous êtes déja connecté.e en tant que ";?>
          <?php echo $_SESSION['email'];?>
          <br>

          <form method='post' action="">
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="logout">Se déconnecter</button>
          </form>    

          <?php }?>

        <?php 
          if(empty($_SESSION['email'])){?>
            
           </h2>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Inscription</h4>
          <form class="needs-validation" method="POST" action="" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Dupont" value="" required>
                <div class="invalid-feedback">
                  Un nom de famille est nécessaire.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Jacques" value="" required>
                <div class="invalid-feedback">
                  Un prénom est nécessaire.
                </div>
              </div>
  
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="mail" placeholder="JacquesDupont@exemple.com" required>
                <div class="invalid-feedback">
                  Une adresse mail valide est nécessaire.
                </div>
              </div>

              <div class="col-12">
                <label for="MDP" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe" value="" required>
                <div class="invalid-feedback">
                  Un mot de passe est nécessaire.
                </div>
              </div>

              <div class="col-12">
                <label for="MDP" class="form-label">Confirmez votre mot de passe</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Mot de passe" value="" required>
                <div class="invalid-feedback">
                  Un mot de passe est nécessaire.
                </div>
              </div>
  
              <div class="col-12">
                <label for="address" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="37 Quai de Grenelle" required>
                <div class="invalid-feedback">
                  Une adresse valide est nécessaire.
                </div>
              </div>

              <div class="col-12">
                <label for="cv" class="form-label">Numéro de sécurité sociale</label>
                <input type="text" class="form-control" name="cv" placeholder="1325865478963" required>
                <div class="invalid-feedback">
                  Un numéro valide est nécessaire.
                </div>
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">Mode de paiement</label>
                <select name="carte" class="form-select" required>
                  <option>Choisir...</option>
                  <option value="Visa" >Visa</option>
                  <option value="Mastercard">Mastercard</option>
                  <option value="American express">American express</option>
                </select>
                <div class="invalid-feedback">
                  Veuillez sélectionner un moyen de paiement.
                </div>
              </div>
  
            <hr class="my-4">
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="conditionsUtilisation" required>
              <label class="form-check-label" for="conditionsUtilisation">J'accepte les conditions d'utilisation de Omnes Santé</label>
            </div>
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Se souvenir de mon identifiant</label>
            </div>
  
            
  
            <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Créer mon compte</button>
          </form>
        </div>
        <?php }?>
        
      </div>
    
  </div>

  <!-- FOOTER -->
  <!--Affichage logo réseaux-->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
    </symbol>
  </svg>
  <!--Affichage footer-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/lucasmenny/"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </footer>

</main>

<!--Sources-->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="validation info.js"></script>
<!--//////////////////////////////////////////////////////////////////-->


  </body>
</html>


<?php

//if(isset($_SESSION['ID'])){
   // header['']
//}

// Creer une constante
define('SITEURL','http://localhost/Projet%20Web/');


$conn=mysqli_connect('localhost', 'root','') or die(mysqli_error());// Connecter la bdd
$db_select=mysqli_select_db($conn,'projetmed') or die(mysqli_error());// selectionner la bdd
if(!$conn){
    echo "<script>alert('Connexion échouée.')</script>";
}

// logout
if(isset($_POST['logout'])){
  //unset($_SESSION['email']);
  //session_destroy();
  echo "salut";
  //header('Location: créerUnCompte.php');
  //header("Location:créerUnCompte.php") ;  
  //exit();
}


if(isset($_POST['submit']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['mail'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);
    $adresse=$_POST['adresse'];
    $cv=$_POST['cv'];
    $carte=$_POST['carte'];
    if($password == $cpassword){

        //2. Requete SQL Query pour sauvegarder les données dans la bdd
        $sql="INSERT INTO client SET
        Nom='$nom', Prenom='$prenom',Mail='$email',
        MotdePasse='$password',Adresse='$adresse',CarteVitale='$cv',CarteBanquaire='$carte'";

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