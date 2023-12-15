<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Framework POO</title>
  <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>

<body>


  <header>
    <nav>
      <ul class="menu">
        <li><a href="<?= $view->path('home'); ?>">Home</a></li>
        <li><a href="<?= $view->path('articles'); ?>">Articles</a></li>
        <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
        <li><a href="<?= $view->path('single', array(12)); ?>">Single</a></li>
        <li><a href="<?= $view->path('single2', array(12, 'dedede')); ?>">Single2</a></li>
        <li><a href="<?= $view->path('about'); ?>">About</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <?= $content; ?>
  </div>

  <footer>

  </footer>

  <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>

</html>
<script>
  function changeCardStyle() {
    // Liste des couleurs possibles et de leurs box-shadows correspondants
    const styles = {
      red: {
        // borderColor: 'red',
        boxShadow: '0 0 8px red, inset 0 0 8px red, 0 0 16px red, inset 0 0 16px red, 0 0 32px red, inset 0 0 32px red'
      },
      white: {
        // borderColor: 'white',
        boxShadow: '0 0 8px white, inset 0 0 8px white, 0 0 16px white, inset 0 0 16px white, 0 0 32px white, inset 0 0 32px white'
      }

    };

    // Obtient tous les éléments avec la classe .card
    const cards = document.querySelectorAll('.menu');

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
  setInterval(changeCardStyle, 100);
</script>