<?php
// indiquer la page
$page = "casquettes";
//inclure le fichier commun contenant le code du haut de l'écran
include_once('commun/entete.inc.php');
// variable pour enlever la fausse erreur de variable $_
/** @var stdClass $_ */
?>
<main class="page-casquettes">
    <article class="amorce">
        <h1><?= $_->amorceH1 ?></h1>
    </article>
    <article class="principal"><?= $_->enConstruction ?></article>
</main>
<?php
//inclure le fichier commun contenant le code du bas de page
include_once('commun/p2p.inc.php');
?>