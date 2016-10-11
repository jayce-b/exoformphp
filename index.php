<?php
/*
 * Created by PhpStorm.
 * User: Jayce
 */
?>

<?php
/*
Sur le formulaire, il faut pouvoir entrer:
• nom (input)
• prénom (input)
• âge (input ou liste déroulante)
• sexe (bouton radio)
• ville (input)
• loisirs (boutons à cocher)
• envoyer un fichier
*/
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>exercice formulaire php</title>
</head>

<body>

<form action="traitement-php.php" method="post" enctype="multipart/form-data">

    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"/>

    </div>

    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"/>
    </div>

    <div>
        <label for="age">Âge :</label>
        <input type="text" name="age" id="age"/>
    </div>

    <div>
        <p>Genre :</p>
        <input type="radio" name="genre" value="féminin" id="féminin" />
        <label for="féminin">Fille</label>

        <input type="radio" name="genre" value="masculin" id="masculin" />
        <label for="masculin">Garçon</label>
    </div>

    <div>
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville">
    </div>

    <div>
        <p>Loisirs :</p>
        <input type="checkbox" name="chasse" value="chasse" id="chasse" title="chasse"/>
        <label for="loisirs">La chasse</label>

        <input type="checkbox" name="pêche" value="pêche" id="pêche" title="pêche"/>
        <label for="loisirs">La pêche</label>

        <input type="checkbox" name="tektonik" value="tektonik" id="tektonik" title="tektonik"/>
        <label for="loisirs">La tektonik</label>

        <input type="checkbox" name="broderie" value="broderie" id="broderie" title="broderie"/>
        <label for="loisirs">La broderie</label>
    </div>

    <div>
        <p>Formulaire d'envoi de fichier :</p>
            <input type="file" name="avatar" id="avatar"/>
            <label for="avatar">Fichier .png, .jpg, .jpeg, .gif | Max. 1Mo</label>
    </div>

    <div>
        <input type="submit" value="envoyer">
    </div>
</form>

</body>
</html>
