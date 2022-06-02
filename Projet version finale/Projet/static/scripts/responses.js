function getBotResponse(input) {
    //rock paper scissors
    if (input == "1") {
        return "Nous avons plusieurs médecins pour répondre a votre demande :</br>A. Dr.Mad</br>B. Dr.Mon</br>C. Dr.Souriante</br>D. Dr.PasTrèsDrole</br>E. Dr.Anne</br>F. Dr.LePatron";
    } 
    else if (input == "2") {
        return "Nous avons differents services lequel souhaitez vous contacter :</br>G. Addictologie </br>H. Andrologie  </br>I. Cardiologie  </br>J. Dermatologie </br>K. Gastro-Hépato-Entérologie </br>L. Gynécologie </br>M. I.S.T/M.S.T </br>N. Ostéopathie</br>(EXIT pour revenir au menu principal)";
    } 
    else if (input == "3") {
        return "Vous trouverez les services disponibles, et les règles avant, durant et après sur cet examen/dépistage. (EXIT pour revenir au menu principal) ";
    } 
    else if (input == "A") {
        return "Pour prendre rendez-vous avec le Dr.Mad allez dans la rubrique rendez-vous en haut de votre écran. ";
    }
    else if (input == "B") {
        return "Pour prendre rendez-vous avec le Dr.Mon allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "C") {
        return "Pour prendre rendez-vous avec le Dr.Souriante allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "D") {
        return "Pour prendre rendez-vous avec le Dr.PasTrèsDrole allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "E") {
        return "Pour prendre rendez-vous avec le Dr.Anne allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "F") {
        return "Pour prendre rendez-vous avec le Dr.LePatron allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "G") {
        return "Pour prendre rendez-vous avec le services d'addictologie allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "H") {
        return "Pour prendre rendez-vous avec le services d'andrologie allez dans la rubrique rendez-vous en haut de votre écran.</br></br>Le seul prérequis avant l’examen est l’abstinence de 2 à 4 jours.";
    }
    else if (input == "I") {
        return "Pour prendre rendez-vous avec le services de cardiologie allez dans la rubrique rendez-vous en haut de votre écran.</br></br>Avant l'examen il est préférable que vous ne soyez pas à jeun, mais évitez un repas trop copieux dans les 2 heures qui précèdent l'examen ; évitez également de fumer dans l'heure précédant le test d'effort (signalez au médecin si vous êtes fumeur), et choisissez des vêtements confortables.";
    }
    else if (input == "J") {
        return "Pour prendre rendez-vous avec le services Dermatologique allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "K") {
        return "Pour prendre rendez-vous avec le services Gastro-Hépato-Entérologie allez dans la rubrique rendez-vous en haut de votre écran.</br></br>Vous devez être strictement à jeun (sans boire, ni manger, ni fumer) durant les 6 heures qui précèdent l'examen";
    }
    else if (input == "L") {
        return "Pour prendre rendez-vous avec le services Gynécologie allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "M") {
        return "Pour prendre rendez-vous avec le services I.S.T/M.S.T allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "N") {
        return "Pour prendre rendez-vous avec le services Ostéopathie allez dans la rubrique rendez-vous en haut de votre écran.";
    }
    else if (input == "EXIT") {
        return "Bonjour, je suis Alina votre assistante virtuel.</br> Quels services vous intéresse ?</br>1. Médecine générale</br>2. Médecins spécialistes</br>3. Laboratoire de biologie médicale";  
    }
    else {
        return "Je n'ai pas compris veuillez ressayer.(EXIT pour revenir au menu principal)";
    }
}