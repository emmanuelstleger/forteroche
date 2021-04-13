<?php $this->title = 'Accueil'; ?>

<!-- Alert messages -->
<div class="container">
    <div class="row">
        <div class="col mx-auto my-3">
            <div class="bg-info text-center mb-5">
                <?= $this->session->show('add_comment'); ?>
                <?= $this->session->show('flag_comment'); ?>
                <?= $this->session->show('delete_comment'); ?>
                <?= $this->session->show('register'); ?>
                <?= $this->session->show('login'); ?>
                <?= $this->session->show('logout'); ?>
                <?= $this->session->show('delete_account'); ?>
            </div>
        </div>
    </div>
</div>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col mx-auto">
            <?php
            foreach ($articles as $article)
            {
                ?>
          <div class="post-preview">
              <h2 class="post-title"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a>
              </h2>
              <p class="post-subtitle"><?= nl2br(substr(htmlspecialchars(strip_tags($article->getContent())), 0, 150));?></p>
              <p class="font-italic">Écrit par <?= htmlspecialchars($article->getAuthor());?></p>
              <p class="font-italic">Publié le : <?= htmlspecialchars($article->getCreatedAt());?></p>
              <hr class="mb-5">
          </div>
                <?php
            }
            ?>
      </div>
    </div>
  </div>


