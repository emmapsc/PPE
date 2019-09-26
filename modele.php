<?php 
function bdd(){
         $bdd = new PDO("mysql:host=127.0.0.1;dbname=gsbv2;charset=utf8", "root", "");
return $bdd;
}

function connexion(){
    //Récupération des données du formulaire HTML envoyées par le client
    //qui se trouvent dans le tableau 'POST' en php
    $login = $_POST['login'];

    //Connexion à la base de données
    $bdd=bdd();

    //Récupération de l'utilisateur via son login
    $stmt = $bdd->prepare("SELECT * FROM visiteur WHERE login = ?");
    $stmt->bindValue(1, $login, PDO::PARAM_STR);

      //Execution de la requete
      try{
          $stmt->execute();
      }catch(PDOException $err){}

      /* Récupération du résultat de la requete */
      $connected = false;
      if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      //On récupère le mot de passe pour le comparé au mot de passe envoyé dans le formulaire
    	}
 return $result;
} 	

function renvoieF(){

	session_start();
  setlocale(LC_TIME, 'fr_FR');
    
    // Connexion a la BDD
    $bdd=bdd();

    //Création de la requete préparé
    $req = $bdd -> prepare(
      'INSERT INTO lignefraisforfait (id_Visiteur, mois, id_FraisForfait, quantité) 
       VALUES(:id_Visiteur,:mois, :id_FraisForfait,:quantite)
      ON DUPLICATE KEY UPDATE id_Visiteur = :id_Visiteur, mois = :mois, id_FraisForfait = :id_FraisForfait, quantité = :quantite;');

    
    // Test si les champs sont remplis et sélectionné

    if (isset($_POST['fiches']) && isset($_POST['quantite'])){
    //utilisation de la requete préparé
      	try{
      	 $req->execute(array(

           ':id_Visiteur' => $_SESSION['id'],
           ':mois' => date('F', time()),
           ':id_FraisForfait'=> $_POST['fiches'],
           ':quantite' => $_POST['quantite']
      	 ));
		 $fiche_success = true;
		 }catch(PDOException $error){
		   $fiche_success = false;
		}
	}
  return $fiche_success;
}

function renvoieHF(){

  session_start();
  setlocale(LC_TIME, 'fr_FR');
  //connexion a la bdd
    $bdd=bdd();

    //création de la requete préparé

   $req = $bdd -> prepare(
    'INSERT INTO lignefraishorsforfait (id_lignefraishorsforfait, id_Visiteur, mois,date_LigneFraisHorsForfait, libelle_LigneFraisHorsForfait, montant) 
     VALUES( null, :id_Visiteur, :mois,:date_LigneFraisHorsForfait, :libelle_LigneFraisHorsForfait, :montant)

     ON DUPLICATE KEY UPDATE id_Visiteur = :id_Visiteur, mois = :mois,date_LigneFraisHorsForfait=:date_LigneFraisHorsForfait, libelle_LigneFraisHorsForfait = :libelle_LigneFraisHorsForfait, montant=:montant');

   if (isset($_POST['date']) && isset($_POST['montant'])){

    try{
     $req->execute(array(
       ':id_Visiteur' => $_SESSION['id'],
       ':mois' => date('F', time()),
       ':date_LigneFraisHorsForfait' =>$_POST['date'],
       ':libelle_LigneFraisHorsForfait' => $_POST['libelle'],
       ':montant' => $_POST['montant']
       ));

      $fiche_success = true;
    
    }catch(PDOException $error){
      $fiche_success = false;
    }
  }
  return $fiche_success;
}

function consFiche(){
      $bdd=bdd();
       $query = "SELECT lignefraisforfait .* FROM `lignefraisforfait` where id_visiteur= :id_visiteur and mois=:mois;";

      $req = $bdd -> prepare($query);
      session_start();
     try{
     $req->execute(array(
       ':id_visiteur' => $_SESSION['id'],
       ':mois' => $_POST['mois']
       ));
    
    }catch(PDOException $error ){
      return false;
    }
      $resultat=$req->fetchAll();

   return $resultat;
}


function consFicheHF(){
      $bdd=bdd();
       $query = "SELECT lignefraishorsforfait .* FROM `lignefraishorsforfait` where id_visiteur= :id_visiteur and mois=:mois order by id_lignefraishorsforfait asc;";

      $req = $bdd -> prepare($query);
      session_start();
     try{
     $req->execute(array(
       ':id_visiteur' => $_SESSION['id'],
       ':mois' => $_POST['mois']
       ));
    
    }catch(PDOException $error ){
      return false;
    }
      $resultat=$req->fetchAll();

   return $resultat;
}
