<?php

require_once("./Controller/controller.php");

if (isset($_GET["Etat"])) {
	//Connexion
    if ($_GET["Etat"]=="login") {
       test_connexion();
    }
    // test formulaire pour php
    if ($_GET["Etat"]=="rensF") {
       test_renseignerFrais();
    }
    // test formulaire pour php
    if ($_GET["Etat"]=="rensHF") {
 		test_renseignerFraisHF();
 	  }
    // test formulaire pour php
  	if ($_GET["Etat"]=="voirFiches") {
		test_consulterFiches();
	  }
    if ($_GET["Etat"]=="voirFichesHF") {
    test_consulterFichesHF();
    }
       
     // Lien pour les menus 
    if ($_GET["Etat"]=="renseignerF") {
       renseignerF();
    }
      if ($_GET["Etat"]=="vFiches") {
       vFiche();
    }
    // Lien pour les menus
  	if ($_GET["Etat"]=="renseignerHF") {
       renseignerHF();
    }
    // Liens pour les menus
  	if ($_GET["Etat"]=="menu") {
	   	menu();
	  } 	
	   // Liens pour les menus
    if ($_GET["Etat"]=="deconnexion") {
    	deconnexion();
    }
}
	 else{
	    Accueil();
    }   
?>