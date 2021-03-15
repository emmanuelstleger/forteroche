<?php $this->title = 'Administration'; ?>

<!-- alert message -->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Page administrateur</h2>
            <div class="bg-success text-center my-3">
                <?= $this->session->show('add_article'); ?>
                <?= $this->session->show('edit_article'); ?>
                <?= $this->session->show('delete_article'); ?>
                <?= $this->session->show('unflag_comment'); ?>
                <?= $this->session->show('delete_comment'); ?>
                <?= $this->session->show('delete_user'); ?>
            </div>
            <a class="btn btn-primary my-3" href="../public/index.php?route=addArticle">Nouvel article</a>
        </div>
    </div>
</div>

<!-- get the list of articles and create a new -->
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mb-3">Liste des articles</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Contenu</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($articles as $article)
                {
                    ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($article->getId()); ?></th>
                        <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                        <td><?= substr(htmlspecialchars($article->getContent()),0,70);?></td>
                        <td><?= htmlspecialchars($article->getAuthor()); ?></td>
                        <td><?= htmlspecialchars($article->getCreatedAt());?></td>
                        <td>
                            <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId();?>">Modifier</a>
                            <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId();?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- get the list of signaled comments, unsignal and delete -->

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-5 mb-3">Commentaires signalés</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($comments as $comment)
                {
                    ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($comment->getId()); ?></th>
                        <td><?= htmlspecialchars($comment->getPseudo()); ?></td>
                        <td><?= substr(htmlspecialchars($comment->getContent()),0,150);?></td>
                        <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                        <td>
                            <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId();?>">Désignaler</a>
                            <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId();?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- get the list of users and delete -->

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-5 mb-3">Liste des utilisateurs</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Date</th>
                        <th scope="col">Rôle</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user)
                {
                    ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($user->getId());?></th>
                        <td><?= htmlspecialchars($user->getPseudo());?></td>
                        <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                        <td><?= htmlspecialchars($user->getRole());?></td>
                        <td>
                            <?php
                            if($user->getRole() !='admin') {
                                ?>
                                <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId();?>">Supprimer</a>
                            <?php }
                            else {
                                ?>
                                Suppression impossible
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



