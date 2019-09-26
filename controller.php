<?php 
        
require_once ("./Modele/modele.php");


function test_connexion(){
    $result=connexion();
    $db_password = $result['mdp'];

    if($db_password==$_POST['password']){
        session_start();
        $_SESSION['id'] = $result['id_Visiteur'];
        $connected = true;
        require ("./Vues/menu.php");   

    }
    else
    {
        require ("./Vues/connexionEchec.php");
    }
       
}



function test_renseignerFrais(){
        $fiche_success=renvoieF();
        if ($fiche_success == true) {
        require './Vues/renseignerFraistAjt.php';
         } 
    
        elseif ($fiche_success == false) {
        require './Vues/renseignerFraisErr.php';
      }
 }  


function test_renseignerFraisHF(){
    $fiche_success=renvoieHF();
        if ($fiche_success == true) {
        require './Vues/renseignerHorsFraisAjt.php';
         } 
    
        elseif ($fiche_success == false) {
        require './Vues/renseignerHorsFraisErr.php';
    }
}

function test_consulterFiches(){
    $resultat=consFiche();
    require './Vues/voirfiches.php';

}


function test_consulterFichesHF(){

    $resultat=consFicheHF();
    require './Vues/voirfiches.php';
}


function deconnexion(){

    // On démarre la session
    session_start ();

    // On détruit les variables de notre session
    session_unset ();

    // On détruit notre session
    session_destroy ();

     // Supression des cookies de connexion automatique
        setcookie('PHPSESSID', '',time() - 3600, '/');
        unset($_COOKIE['PHPSESSID']);


     // On redirige le visiteur vers la page d'accueil
    require('./Vues/connexion.php') ;
}


function renseignerHF(){
    require './Vues/renseignerHorsFrais.php';
}

function renseignerF(){
    require './Vues/renseignerFrais.php';
}
function vFiche(){
    require './Vues/voirFiches.php';
}
function menu(){
   require('./Vues/menu.php') ;
}

function Accueil(){
    require('./Vues/connexion.php') ;
}

?>