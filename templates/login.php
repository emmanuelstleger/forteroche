<?php $this->title = "Connexion"; ?>

<!-- login information -->

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Renseignez-vos identifiants de connexion</h2>
            <div class="text-danger">
                <?= $this->session->show('error_login'); ?>
                <?= $this->session->show('need_login'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="../public/index.php?route=login">
                <div class="form-group mt-3">
                    <label for="pseudo">Pseudo</label><br>
                    <input class="form-control"  type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Mot de passe</label><br>
                    <input class="form-control"  type="password" id="password" name="password"><br>
                </div>
                <input type="submit" value="Connexion" id="submit" name="submit" class="btn btn-primary mb-3">
            </form>
        </div>
    </div>
</div>