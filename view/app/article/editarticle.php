<section>
    <h1>Modifier cette article.</h1>

    <form method="POST">
        <?= $formAddEdit->label('title') ?>
        <?= $formAddEdit->input('title', 'text', $articleEdit->title) ?>
        <?= $formAddEdit->error('title') ?>
        <div class="form-group">
            <?= $formAddEdit->label('content') ?>
            <?= $formAddEdit->textarea('content', $articleEdit->content) ?>
            <?= $formAddEdit->error('content') ?>
        </div>
        <?= $formAddEdit->submit('submitted', 'Modifier cette article') ?>
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