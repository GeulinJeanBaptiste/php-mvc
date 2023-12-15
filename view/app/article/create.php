<section>
    <h1>Ajouter un article.</h1>

    <form method="POST">
        <?= $formAdd->label('title') ?>
        <?= $formAdd->input('title') ?>
        <?= $formAdd->error('title') ?>
    </form>
    <form method="POST">
        <?= $formAdd->label('content') ?>
        <?= $formAdd->textarea('content') ?>
        <?= $formAdd->error('content') ?>
    </form>
    <form method="POST">
        <?= $formAdd->label('author') ?>
        <?= $formAdd->input('author') ?>
        <?= $formAdd->error('author') ?>
    </form>
    <form method="POST">
        <?= $formAdd->label('email') ?>
        <?= $formAdd->input('email') ?>
        <?= $formAdd->error('email') ?>
    </form>
    <form method="POST">
        <?= $formAdd->label('password') ?>
        <?= $formAdd->input('password') ?>
        <?= $formAdd->error('password') ?>
    </form>
    <form method="POST">
        <?= $formAdd->submit('', 'Ajouter un article') ?>
    </form>
</section>
<style>
    .form-control {
        display: flex;
        flex-direction: column;
        width: 300px;
        margin-bottom: 10px;
        margin-top: 10px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        color: #333;
        font-size: 16px;
        font-family: Arial, sans-serif;
        line-height: 1.5;
        box-sizing: border-box;
        transition: border-color 0.3s ease-in-out;
    }
</style>