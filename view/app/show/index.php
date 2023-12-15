<h3 class="titleCard">Titre: <?= $show->title ?></h3>
<div class="card">
    <h1>Autheur: </h1>
    <p>Commentaires:<br><?= $show->content ?></p>
    <p>Créer le: <?= $show->createdAt ?></p>
    <p>Modifier le: <?= $show->modifiedAt ?></p>
    <div class="actions">
        <p><a href="<?= $view->path('delete', [$show->id]) ?> " class="btn">Supprimer</a></p>
        <p><a href="<?= $view->path('edit', [$show->id]) ?>" class="btn">Modifier</a></p>
    </div>
</div>