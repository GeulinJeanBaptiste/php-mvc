<h3 class="titleCard">Titre: <?= $article['title'] ?></h3>
<div class="card">
    <h1>Autheur: </h1>
    <p>Commentaires:<br><?= $article['content'] ?></p>
    <p>Créer le: <?= $article['createdAt'] ?></p>
    <p>Modifier le: <?= $article['modifiedAt'] ?></p>
    <div class="actions">
        <p><a href="<?= $view->path('delete', [$article['id']]) ?> " class="btn">Supprimer</a></p>
        <p><a href="<?= $view->path('edit', [$article['id']]) ?>" class="btn">Modifier</a></p>
    </div>
</div>