 <link rel="stylesheet" href="src/includes/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

<body>
    <div class="alignement-carte">
        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/question_exemple.png">
        </a>
    </div>

    <!-- Affichage des tuiles du premier joueur -->
    <section>
        <h2>Tuiles du Premier Joueur</h2>
        <ul>

            <?php foreach ($tuilesPremierJoueur as $tuile) : ?>
                <li>
                    <img src="src/img/tuiles/<?php echo $tuile->getImage(); ?>">
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Affichage des tuiles du deuxième joueur -->
    <section>
        <h2>Tuiles du Deuxième Joueur</h2>
        <ul>
            <?php foreach ($tuilesSecondJoueur as $tuile) : ?>
                <li>
                    <img src="src/img/tuiles/<?php echo $tuile->getImage(); ?>" >
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>