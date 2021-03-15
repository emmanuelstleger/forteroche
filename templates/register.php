<?php $this->title = "Inscription"; ?>

<!-- register information -->

<div class="container">
    <div class="row">
        <div class="col my-3">
            <h2>Créez un compte</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="../public/index.php?route=register">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label><br>
                    <input class="form-control" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                    <div class="text-danger">
                        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label><br>
                    <input class="form-control" type="password" id="password" name="password"><br>
                    <div class="text-danger">
                        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                    </div>
                </div>
                <input type="submit" value="Inscription" id="submit" name="submit" class="btn btn-primary mb-3">
            </form>
        </div>
    </div>
</div>