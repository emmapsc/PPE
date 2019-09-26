<?php
  $onglet = "fiche_frais";
  if(isset($_GET["onglet"]))
    $onglet = $_GET["onglet"];
?>
<!DOCTYPE html>
<head>
  <script type="text/javascript" src="./Vues/js/script.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./Vues/css/style.css" />
  <title>Renseigner Fiches</title>
  <header>
    <div class="tete">
      <a href><img src ="./Vues/images/logo.jpg"></a>
    </div>
  </header>
</meta>
</head>
<body>
  <div class="navigation">
    <div class="navigation-content">
      <a href="./index.php?Etat=renseignerF"><input class="button-1" type="button" value= "Renseigner fiches frais"/></a>
      <a href="./index.php?Etat=renseignerHF"><input class="button-2" type="button" value="Renseigner frais hors forfait "/></a>
      <a href="./index.php?Etat=menu"><input class="button-2" type="button" value="Menu"/></a>
      <a href="./index.php??Etat=deconnexion"><input class="button-3" type="button" value="Déconnexion"/></a>
    </div>
  </div>
  <div class="tab">
    <div class="tab-header">
      <?php if($onglet === "fiche_frais"){?>
        <span class="tab-header-item selected">Fiche frais forfait</span>
        <span class="tab-header-item">Fiche frais hors forfait</span>
      <?php }?>


      <?php if($onglet === "fiche_hors_forfait"){?>
        <span class="tab-header-item">Fiche frais forfait</span>
        <span class="tab-header-item selected">Fiche frais hors forfait</span>
      <?php }?>
    </div>
    <div class="tab-body">
      <?php if($onglet === "fiche_frais"){?>
        <div class="tab-body-panel visible">
      <?php } else {?>
        <div class="tab-body-panel">
      <?php } ?>
        <form class="panel-content"method="post" action="./index.php?Etat=voirFiches&onglet=fiche_frais">
          <h3>Fiche frais</h3>
          <select name="mois">
            <option value="All">Tout</option>
            <option value="January">Janvier</option>
            <option value="February">Février</option>
            <option value="March">Mars</option>
            <option value="April">Avril</option>
            <option value="May">Mai</option>
            <option value="June">Juin</option>
            <option value="July">Juillet</option>
            <option value="August">Aout</option>
            <option value="September">Septembre</option>
            <option value="October">Octobre</option>
            <option value="November">Novembre</option>
            <option value="December">Décembre</option>
          </select>
          <input class="button-3" type="submit" value="Envoyer"/>
          <div>
            <table class="transparent-table">
              <thead>
                <tr>
                  <th>
                    Id Visiteur
                  </th>
                  <th>
                    Mois
                  </th>
                  <th>
                    Id frais forfait
                  </th>
                  <th>
                    Quantite
                  </th>

                </tr>
              </thead>
              <tbody>
                <?php
          if ($_GET["Etat"]=="voirFiches") {
                    foreach ($resultat as $result) {


                                           echo "<tr>";
                                           echo "<td>".$result['id_Visiteur']."</td>";
                                           echo "<td>".$result['mois']."</td>";
                                           echo "<td>".$result['id_FraisForfait']."</td>";
                                           echo "<td>".$result['quantité']."</td>";
                                           echo "</tr>";


                    }
                  }
                ?>

              </tbody>
            </table>
          </div>
        </form>
      </div>
      <?php if($onglet === "fiche_hors_forfait"){?>
        <div class="tab-body-panel visible">
      <?php } else {?>
        <div class="tab-body-panel">
      <?php } ?>
        <form class="panel-content"method="post" action="./index.php?Etat=voirFichesHF&onglet=fiche_hors_forfait">
          <h3>Fiche frais hors forfait</h3>
          <select name="mois">
            <option value="All">Tout</option>
            <option value="January">Janvier</option>
            <option value="February">Février</option>
            <option value="March">Mars</option>
            <option value="April">Avril</option>
            <option value="May">Mai</option>
            <option value="June">Juin</option>
            <option value="July">Juillet</option>
            <option value="August">Aout</option>
            <option value="September">Septembre</option>
            <option value="October">Octobre</option>
            <option value="November">Novembre</option>
            <option value="December">Décembre</option>
          </select>
          <input class="button-3" type="submit" value="Envoyer"/>
          <div>
            <table class="transparent-table">
              <thead>
                <tr>
                  <th>
                    Id
                  </th>
                  <th>
                    Id Visiteur
                  </th>
                  <th>
                    Mois
                  </th>
                  <th>
                    Libellé
                  </th>
                  <th>
                    Date
                  </th>
                  <th>
                    Montant
                  </th>
                </tr>
              </thead>
              <tbody>
               <?php

             if ($_GET["Etat"]=="voirFichesHF") {

                     foreach ($resultat as $result) {

                                        
                                                echo "<tr>";
                                                echo "<td>".$result['id_lignefraishorsforfait']."</td>";
                                                echo "<td>".$result['id_Visiteur']."</td>";
                                                echo "<td>".$result['mois']."</td>";
                                                echo "<td>".$result['libelle_LigneFraisHorsForfait']."</td>";
                                                echo "<td>".$result['date_LigneFraisHorsForfait']."</td>";
                                                echo "<td>".$result['montant']."</td>";
                                                echo "</tr>";
                    }
              }

              ?>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
</html>
