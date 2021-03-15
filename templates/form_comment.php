<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>


<!-- form to add a comment -->

<div class="row">
    <div class="col">
        <form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
            <div class="form-group mt-3">
                <label for="pseudo">Pseudo</label><br>
                <input class="form-control" type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                <div class="text-danger">
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="content">Message</label><br>
                <textarea class="form-control"  id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
                <div class="text-danger">
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                </div>
            </div>
            <input type="submit" value="<?= $submit; ?>" id="submit" name="submit" class="btn btn-primary mb-3">
        </form>
    </div>
</div>

