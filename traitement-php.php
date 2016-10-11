<?php
/*
 * Created by PhpStorm.
 * User: Jayce
 */
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>exercice formulaire php</title>
</head>

<body>
<?php
//declaration de mes variables
$prenom = strip_tags($_POST['prenom']);
$nom = strip_tags($_POST['nom']);
$ville = strip_tags($_POST['ville']);
$age = (int)$_POST['age'];
$genre = $_POST['genre'];




//verification de chacune des variables avec une condition

//simple condition si case vide alors demander de la remplir sinon récapitulatif
if (empty($prenom)){
    echo '<p>Veuillez indiquer votre prénom SVP.</p>';
} else {
    echo '<p>Vous avez été enregistré sous le prénom : ' . $prenom . '.</p>';
}

//simple condition si case vide alors demander de la remplir sinon récapitulatif
if (empty($nom)){
    echo '<p>Veuillez indiguer votre nom SVP.</p>';
} else {
    echo '<p>Vous avez été enregistré sous le nom : ' . $nom . '.</p>';
}

//simple condition si case vide alors demander de la remplir sinon récapitulatif
if (empty($age)){
    echo '<p>Veuillez indiquer votre âge en numérique SVP.</p>';
} else {
    echo '<p> Vous avez ' . $age . ' ans.</p>';
}

//simple condition si case vide alors demander de la remplir sinon récapitulatif
if (empty($genre)){
    echo '<p> Veuillez indiquer votre genre SVP.</p>';
} else {
    echo '<p>Vous êtes de sexe ' . $genre . '.</p>';
}

//simple condition si case vide alors demander de la remplir sinon récapitulatif
if (empty($ville)){
    echo '<p>Veuillez indiquer votre ville SVP.</p>';
} else {
    echo '<p>Vous habitez à : ' . $ville . '.</p>';
}

//simple condition (prise en compte de toutes les cases à cocher pour qu'elle puisse être retournée)
// si case vide alors demander de la remplir sinon récapitulatif
if (empty($_POST['chasse'])&& empty($_POST['pêche'])&& empty($_POST['tektonik'])&& empty($_POST['broderie'])){
    echo '<p>Veuillez indiquer un loisir SVP.</p>';
} else {
    echo '<p>Vous kiffez la : <br>' . $_POST['chasse'] . ' <br>' . $_POST['pêche'] . ' <br>' . $_POST['tektonik'] . ' <br>' . $_POST['broderie'] . ' <br>' . ' et nous ne vous en voulons pas pour vos goûts bizarres.</p>';
}

if ($_FILES['avatar']['error'] > 0) $erreur = 'Erreur lors du transfert';

$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'psd' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['avatar']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) {
    echo "<p>L'extension de votre avatar est valide.</p>";
} else {
    echo "<p>Il semble que l'extension de votre avatar ne soit pas valide. Veuillez choisir un fichier en jpg, jpeg, gif ou png.</p>";
}
//TAILLE DU FICHIER - LE GROS MORCEAU
//déclaration de mes variables
$repertoireDestination = "uploads/";
$NomDuFichier = $_FILES["avatar"]["name"];
$taille_max    = 200000;
$taille_fichier = filesize($_FILES['avatar']['tmp_name']);

//condition si le fichier est trop lourd alors on prévient l'utilisateur sinon on lui confirme que c'est ok
if ($taille_fichier > $taille_max){
    echo "<p>Vous avez dépassé la taille de fichier autorisée. Veuillez choisir un fichier de 2Mo maximum ou payez nous un hébergement de ouf.</p>";
} else {
    echo "<p>Le poids de votre fichier est valide et ne dépasse pas 2Mo. Merci pour cette magnifique photo.";
}

?>

<div>
    <a href="index.php">Revenir sur l'index</a>
</div>


</body>
</html>