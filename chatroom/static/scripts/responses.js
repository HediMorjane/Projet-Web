function getBotResponse(input) {
    //rock paper scissors
    if (input == "1") {
        return "Nous avons plusieurss médecins pour répondre a votre demande :</br>A. Mon Gars</br>B. Mon bo";
    } 
    else if (input == "2") {
        return "Nous avons differents services lequel souhaitez vous contacter :</br>C. Addictologie </br>D. Andrologie  </br>E. Cardiologie  </br>F. Dermatologie </br>G. Gastro-Hépato-Entérologie </br>H. Gynécologie </br>I. I.S.T. </br>J. Ostéopathie</br>(EXIT pour revenir au menu principal)";
    } 
    else if (input == "3") {
        return "Vous trouverez les services disponibles, et les règles avant, durant et après sur cet examen/dépistage. (EXIT pour revenir au menu principal) ";
    } 
    else if (input == "A") {
        return "FICHE TECHNIQUE MON GARS";
    }
    else if (input == "B") {
        return "FICHE TECHNIQUE MON BO";
    }
    else if (input == "C") {
        return "LISTE NUM MEDECINS ADDICTOLOGIE";
    }
    else if (input == "D") {
        return "FICHE TECNIQUE MON BO";
    }
    else if (input == "E") {
        return "FICHE TECHNQUE MON BO";
    }
    else if (input == "F") {
        return "FICHE TECHNIUE MON BO";
    }
    else if (input == "G") {
        return "FICHE TECHNIQE MON BO";
    }
    else if (input == "H") {
        return "FICHE TECHNIQUE ON BO";
    }
    else if (input == "I") {
        return "FICHE TECHNIQUE MN BO";
    }
    else if (input == "J") {
        return "FICHE TECHNIQUE MON O";
    }
    else if (input == "EXIT") {
        return "Hi, which service do you want to contact</br>1. Médecine générale</br>2. Médecins spécialiste</br>3. Laboratoire de biologie médicale";  
    }
    else {
        return "Je n'ai pas compris veuillez ressayer.(EXIT pour revenir au menu principal)";
    }
}
    