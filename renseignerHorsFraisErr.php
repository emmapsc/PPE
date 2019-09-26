<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="./Vues/css/style.css" />
    <title>Renseigner Fiches</title>
    <header>
      <div class="tete">
        <a href="./index.php?Etat=menu"><img src ="./Vues/images/logo.jpg"></a>
      </div>
    </header>
    </meta>
  </head>
  <body>
    <div class="navigation">
      <div class="navigation-content">
          <a href="./index.php?Etat=vFiches"><input class="button-1" type="button" value= "Consulter fiches frais"/></a>
          <a href="./index.php?Etat=renseignerF"><input class="button-2" type="button" value="Renseigner fiches frais"/></a>
          <a href="./index.php?Etat=menu"><input class="button-2" type="button" value="Menu"/></a>
          <a href="./index.php?Etat=deconnexion"><input class="button-3" type="button" value="Déconnexion"/></a>
      </div>
    </div>
    <form class="Renseigner"method="post" action="./index.php?Etat=rensHF">
      <label for="Fiches">Quelles valeurs voulez vous entrer ?</label>
        
        <div>Date des frais</div><input type="date" name="date" placeholder="Champ à renseigner"required>
        <div>Type de frais</div><input type="text" name="libelle" placeholder="Champ à renseigner"required>
        <div>Montant des frais</div> <input type="text" name="montant" placeholder="Champ à renseigner"required>
      <br>
      </br>
      <input class="button-1" name='envoie' type="submit" value="Envoyer"/>
     <div>Les frais n'ont pas été ajouté</div>
    </form>
  </body>
</html>
