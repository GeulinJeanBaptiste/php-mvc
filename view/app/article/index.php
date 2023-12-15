<p><a href="<?= $view->path('create') ?>" class="btn">Ajouter un commentaire</a></p>
<div class="cards"> <?php foreach ($articles as $article) { ?>
        <article>
            <h3><a href="<?= $view->path('article', [$article->id]); ?>"><?= $article->title ?></a>
            </h3>
        </article>
        <div class="card">
            <p>Autheur:<?= $user->findById($article->author, 'id')->lastname; ?></p>
            <p>Nom:<?= $user->findById($article->author, 'id')->firstname; ?></p>
            <p>Email:<?= $user->findById($article->author, 'id')->email; ?></p>
            <p>Titre:<?= $article->title ?></p>
            <p>Commentaire:<br><?= $article->content ?></p>
        </div>
    <?php } ?>
</div>