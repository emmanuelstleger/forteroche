<?php $this->title = 'Mon profil' ;?>

<!-- profile information -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Bienvenue sur votre profil <?= $this->session->get('pseudo'); ?></h2>
            <p>Vous êtes l'utilisateur numéro : <?= $this->session->get('id'); ?></p>
            <div class="bg-info text-center mb-3">
                <?= $this->session->show('update_password'); ?>
                <?= $this->session->show('not_admin'); ?>
            </div>
        </div>
        <div class="col-12">
            <h4>Voici les options qui s'offrent à vous :</h4>
            <ul>
                <li><a href="../public/index.php?route=updatePassword">Modifier mon mot de passe</a>
                <?php
                if ($this->session->get('role') === 'user') {
                    ?>
                    <li><a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
                <?php
                }
                ?>
                <li><a href="../public/index.php">Revenir à l'accueil</a>
            </ul>
        </div>
    </div>
</div>