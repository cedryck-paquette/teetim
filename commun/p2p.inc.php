<footer>
    <h2>teeTIM</h2>
    <div class="contenu">
        <section class="achats">
            <h3><?= $_pp->achats->titre; ?></h3>
            <nav>
                <a href="faq.php" class="faq"><?= $_pp->achats->navFaq ?></a>
                <a href="livraison.php" class="livraison"><?= $_pp->achats->navLivraison ?></a>
                <a href="conditions.php" class="conditions"><?= $_pp->achats->navConditions ?></a>
                <a href="confidentialite.php" class="confidentialite"><?= $_pp->achats->navConfidentialite ?></a>
            </nav>
        </section>
        <section class="apropos">
            <h3><?= $_pp->aPropos->titre ?></h3>
            <nav>
                <a href="compagnie.php" class="faq"><?= $_pp->aPropos->navCompagnie ?></a>
                <a href="equipe.php" class="livraison"><?= $_pp->aPropos->navEquipe ?></a>
                <a href="emploi.php" class="conditions"><?= $_pp->aPropos->navEmploi ?></a>
            </nav>
        </section>
        <section class="coordonnees">
            <h3><?= $_pp->coordonnees->titre ?></h3>
            <nav>
                <span><?= $_pp->coordonnees->navTelephone ?> : <b>1 866 888 6666</b></span>
                <span><?= $_pp->coordonnees->navCourriel ?> : aide@teetim.ca</span>
            </nav>
        </section>
    </div>
    <p class="da">&copy; Tous droits réservés, teeTIM 2023-<?php echo date('Y'); ?></p>
</footer>
</div>
</body>

</html>