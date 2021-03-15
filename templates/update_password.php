<?php $this->title = 'Modifier mon mot de passe'; ?>

<!-- password modification -->

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Mettez à jour votre mot de passe</h2>
            <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
            <form method="post" action="../public/index.php?route=updatePassword">
                <div class="form-group mt-3">
                    <label for="password">Mot de passe</label><br>
                    <input class="form-control" type="password" id="password" name="password"><br>
                </div>
                <input type="submit" value="Mettre à jour" id="submit" name="submit" class="btn btn-primary mb-3">
            </form>
        </div>
    </div>
</div>
