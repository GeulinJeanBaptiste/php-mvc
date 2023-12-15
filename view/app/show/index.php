<div class="card">
    <h1>Autheur: </h1>
    <h3>Titre: <?= $show->title ?></h3>
    <p>Commentaires:<br><?= $show->content ?></p>
    <p>Créer le: <?= $show->createdAt ?></p>
    <p>Modifier le: <?= $show->modifiedAt ?></p>
    <p><a href="<?= $view->path('delete', [$show->id]) ?> " class="btn">Supprimer</a></p>
    <p><a href="<?= $view->path('edit', [$show->id]) ?>" class="btn">Modifier</a></p>
</div>


<script>
    function changeCardStyle() {
        // Liste des couleurs possibles et de leurs box-shadows correspondants
        const styles = {
            red: {
                // borderColor: 'red',
                boxShadow: '0 0 8px red, inset 0 0 8px red, 0 0 16px red, inset 0 0 16px red, 0 0 32px red, inset 0 0 32px red'
            },
            black: {
                // borderColor: 'black',
                boxShadow: '0 0 8px black, inset 0 0 8px black, 0 0 16px black, inset 0 0 16px black, 0 0 32px black, inset 0 0 32px black'
            },
            yellow: {
                // borderColor: 'yellow',
                boxShadow: '0 0 8px yellow, inset 0 0 8px yellow, 0 0 16px yellow, inset 0 0 16px yellow, 0 0 32px yellow, inset 0 0 32px yellow'
            },
            green: {
                // borderColor: 'green',
                boxShadow: '0 0 8px green, inset 0 0 8px green, 0 0 16px green, inset 0 0 16px green, 0 0 32px green, inset 0 0 32px green'
            },
            fuchsia: {
                // borderColor: 'green',
                boxShadow: '0 0 8px fuchsia, inset 0 0 8px fuchsia, 0 0 16px fuchsia, inset 0 0 16px fuchsia, 0 0 32px fuchsia, inset 0 0 32px fuchsia'
            },
            orange: {
                // borderColor: 'green',
                boxShadow: '0 0 8px orange, inset 0 0 8px orange, 0 0 16px orange, inset 0 0 16px orange, 0 0 32px orange, inset 0 0 32px orange'
            },
            all: {
                // borderColor: 'green',
                boxShadow: '0 0 8px orange, inset 0 0 8px green, 0 0 16px yellow, inset 0 0 16px black, 0 0 32px fuchsia, inset 0 0 32px red'
            },

        };
        // Obtient tous les éléments avec la classe .card
        const cards = document.querySelectorAll('.card');

        // Change la couleur de bordure et le box-shadow avec une transition
        cards.forEach(card => {
            // Définit la transition
            card.style.transition = 'border-color 0.5s ease, box-shadow 0.5s ease';

            // Applique le nouveau style
            const randomStyleKey = Object.keys(styles)[Math.floor(Math.random() * Object.keys(styles).length)];
            const randomStyle = styles[randomStyleKey];
            card.style.borderColor = randomStyle.borderColor;
            card.style.boxShadow = randomStyle.boxShadow;
        });
    }

    // Appelle la fonction changeCardStyle toutes les 5 secondes
    setInterval(changeCardStyle, 10000);
</script>