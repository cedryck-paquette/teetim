<?php
// indiquer la page
$page = "accueil";
//inclure le fichier commun contenant le code du haut de la page
include_once('commun/entete.inc.php');

//variables pour enlever la fausse erreur
/** @var stdClass $_ */
?>
<main class="page-accueil">
    <article class="amorce">
        <h1><?= $_->amorceH1; ?></h1>
        <h2><?= $_->amorceH2; ?></h2>
        <h4><?= $_->amorceH4; ?></h4>
    </article>
    <article class="principal">
        <p>
            <?= $_->para1; ?>
        </p>
        <p>

        </p>
    </article>
</main>
<?php
//inclure le fichier commun contenant le code du bas de page
include_once('commun/p2p.inc.php');
?>