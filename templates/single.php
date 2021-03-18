<?php $this->title = "Article"; ?>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <h2><?=htmlspecialchars($article->getTitle());?></h2>
                    <p><?=html_entity_decode(htmlspecialchars($article->getContent()));?></p>
                    <p class="font-italic">Écrit par <?=htmlspecialchars($article->getAuthor());?></p>
                    <p class="font-italic">Publié le : <?=htmlspecialchars($article->getCreatedAt());?></p>
            </div>
        </div>
    </div>
</article>

<hr>

<!-- new article comment -->
<div class="container" id="comments">
    <div class="row">
        <div class="col-12">
            <h3 class="my-3">Ajouter un commentaire</h3>
            <?php include('form_comment.php'); ?>
            <hr>
        </div>

        <!-- list of all comments -->
        <div class="row">
            <div class="col">

                <h3 class="my-5">Commentaires</h3>
                <?php
                foreach($comments as $comment)
                {
                    ?>
                    <h4 class="text-primary"><?=htmlspecialchars($comment->getPseudo());?></h4>
                    <p><?=htmlspecialchars($comment->getContent());?></p>
                    <p class="font-italic">Posté le <?=htmlspecialchars($comment->getCreatedAt());?></p>
                    <?php
                    if($comment->isFlag()){
                        ?>
                        <p>Ce commentaire a déjà été signalé</p>
                        <?php
                    }else {
                        ?>
                        <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
                        <?php
                    }
                    ?>
                    <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
                    <br>
                    <?php
                }
                ?>
            </div>
    </div>
</div>

