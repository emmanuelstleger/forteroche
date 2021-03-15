<?php $this->title="Nouvel article"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Ajouter un nouvel article</h2>
        </div>
    </div>
   <div class="row">
       <div class="col my-3">
           <?php include('form_article.php');?>
       </div>
   </div>
   <div class="row">
       <div class="col my-3">
           <a href="../public/index.php?route=administration">Retour à la page administration</a>
       </div>
   </div>
</div>
