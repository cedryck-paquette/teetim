<?php
// afficher les paramètres d'URL
// print_r($_GET);
// choix de langue (par défaut fr)
$langue = "fr";
// si l'utilisateur avait déjà choisi une langue
if (isset($_COOKIE['teetimLangue'])) {
    $langue = $_COOKIE['teetimLangue'];
}
// changer la langue au clic du bouton
if (isset($_GET['lan'])) {
    $langue = $_GET['lan'];

    // Mémoriser le choix dans un témoin HTTP
    setcookie('teetimLangue', $langue, time() + 365 * 24 * 60 * 60);
}

//Lire le fichier JSON contenant les textes
$textesJSON = file_get_contents('i18n/textes-' . $langue . '.json');

//Convertir la chaine JSON en structure PHP
$textes = json_decode($textesJSON);

//Créer quelques raccourcis pour les sections importantes de texte

//raccourci pour tous les textes du contenu spécifique à chaque page
$_ = $textes->$page;
// raccourci pour les textes de l'entete
$_ent = $textes->entete;
//raccourci pied de page
$_pp = $textes->pp;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <div class="conteneur">
        <header>
            <nav class="barre-haut">
                <a class="<?php if ($langue === 'fr') {
                                echo 'actif';
                            } else {
                                echo '';
                            } ?>" href="?lan=fr">fr</a>
                <a class="<?php if ($langue === 'en') {
                                echo 'actif';
                            } else {
                                echo '';
                            } ?>" href="?lan=en">en</a>
            </nav>
            <nav class="barre-logo">
                <label for="cc-btn-responsive" class="material-icons burger">menu</label>
                <a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>
                <a class="material-icons panier" href="panier.php">shopping_cart</a>
                <input class="recherche" type="search" name="motscles" placeholder="">
            </nav>
            <input type="checkbox" id="cc-btn-responsive">
            <nav class="principale">
                <label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
                <a href="teeshirts.php"><?= $_ent->navigationPrincipale->navTeeshirts; ?></a>
                <a href="casquettes.php"><?= $_ent->navigationPrincipale->navCasquettes; ?></a>
                <a href="hoodies.php"><?= $_ent->navigationPrincipale->navHoodies; ?></a>
                <span class="separateur"></span>
                <a href="aide.php"><?= $_ent->navigationPrincipale->navAide; ?></a>
                <a href="apropos.php"><?= $_ent->navigationPrincipale->navAPropos; ?></a>
            </nav>
        </header>