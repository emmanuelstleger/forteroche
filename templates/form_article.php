<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>

<!-- Article form for new article and to edit -->
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" action="../public/index.php?route=<?= $route; ?>">
                <div class="form-group mt-3">
                    <label for="title">Titre principal</label><br>
                    <input class="form-control" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
                    <?= isset($errors['title']) ? $errors['title'] : ''; ?>
                </div>
                <div class="form-group mt-3">
                    <label for="content">Contenu</label><br>
                    <textarea class="form-control" id="mytextarea" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
                    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                </div>
                <input type="submit" value="<?= $submit; ?>" id="submit" name="submit" class="btn btn-primary mb-3">
            </form>
        </div>
    </div>
</div>



