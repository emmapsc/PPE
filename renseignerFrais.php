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
                <a href="./index.php?Etat=renseignerHF"><input class="button-2" type="button" value="Renseigner frais hors forfait "/></a>
                <a href="./index.php?Etat=menu"><input class="button-2" type="button" value="Menu"/></a>
                <a href="./index.php?Etat=deconnexion"><input class="button-3" type="button" value="Déconnexion"/></a>
            </div>
        </div>
        <form class="Renseigner"method="post" action="./index.php?Etat=rensF">
            <label for="Fiches">Quelles valeurs voulez vous entrer ?</label>
            <select name="fiches"id="fiches">
                <option value="KM">Nombre de kilomètres</option>
                <option value="ETP">Frais Etape</option>
                <option value="NUI">Nombre de nuits à l'hotel</option>
                <option value="REP">Nombre de repas au restaurant</option>
            </select>
            <input type="text" name="quantite" placeholder="Champ à renseigner"required>
            <br>
            </br>
            <input class="button-3" type="button" value="Envoyer"/>
        </form>
    </body>
</html>
