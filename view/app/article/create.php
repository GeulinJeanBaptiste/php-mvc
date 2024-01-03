<section>
    <h1>Ajouter un article.</h1>

    <form method="POST">
        <?= $formAdd->label('title') ?>
        <?= $formAdd->input('title') ?>
        <?= $formAdd->error('title') ?>

        <?= $formAdd->label('content') ?>
        <?= $formAdd->textarea('content') ?>
        <?= $formAdd->error('content') ?>

        <?= $formAdd->select('author', $users, 'firstname') ?>

        <?= $formAdd->submit('submitted', 'Ajouter un article') ?>
    </form>
</section>
<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        margin-top: 1rem;
        width: 100%;
        max-width: 600px;
        margin-inline: auto;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        background-color: #f5f5f5;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    textarea[name=content] {
        resize: both;
        min-width: 400px;
        min-height: 200px;
        max-width: 500px;
        max-height: 200px;
    }
</style>