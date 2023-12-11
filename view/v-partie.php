 <link rel="stylesheet" href="src/includes/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

<body>
    <!-- Les questions -->
    <div class="alignement-carte">
        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>

        <a href="cartes-question-bouton">
            <img class="cartes-question" src="src/img/cartes/Carte_1.png">
        </a>
    </div>

    <div class="zone-tuiles">

        <div class="alignement-carte-joueur">
            <?php foreach ($tuilesSecondJoueur as $tuile) : ?>
                <img class="tuile" src="src/img/tuiles/<?php echo $tuile->getImage(); ?>" >
            <?php endforeach; ?>
        </div>

        <div class="zone-icon" onclick="afficherZoneTexte()">
            <img class="icon" src="src/img/icons/notebook.png" alt="Notebook Icon">
        </div>

        <div class="selection-cartes-adversaire">
            <div class="boutton-selection-cartes-adversaire">
                <img class="tuile-adversaire" src="src/img/tuiles/card_select_blank.png" onclick="changerImage(this)">
            </div>

            <div class="boutton-selection-cartes-adversaire">
                <img class="tuile-adversaire" src="src/img/tuiles/card_select_blank.png" onclick="changerImage(this)">
            </div>

            <div class="boutton-selection-cartes-adversaire">
                <img class="tuile-adversaire" src="src/img/tuiles/card_select_blank.png" onclick="changerImage(this)">
            </div>

            <div class="boutton-selection-cartes-adversaire">
                <img class="tuile-adversaire" src="src/img/tuiles/card_select_blank.png" onclick="changerImage(this)">
            </div>

            <div class="boutton-selection-cartes-adversaire">
                <img class="tuile-adversaire" src="src/img/tuiles/card_select_blank.png" onclick="changerImage(this)">
            </div>
        </div>
    </div>

    <div class="zone-reponse">
        <div class="question-joueur">
            <img class="icon-small" src="src/img/logo_human.png">
            <img class="cartes-question-choisie" src="src/img/cartes/Carte_1.png">
        </div>

        <div class="reponse-question">
            <p>Response : </p>
        </div>
    </div>

    <div class="modal" id="myModal" onclick="fermerZoneTexte()">
        <div class="textarea-container" onclick="event.stopPropagation();">
            <textarea rows="10" cols="30"></textarea>
        </div>
    </div>

    <script>
        function afficherZoneTexte() {
            var modal = document.getElementById("myModal");
            modal.style.display = "flex";
        }

        function fermerZoneTexte() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>

    <script>
        var images = [
            "src/img/tuiles/carte_gris_0.png",
            "src/img/tuiles/carte_gris_1.png",
            "src/img/tuiles/carte_gris_2.png",
            "src/img/tuiles/carte_gris_3.png",
            "src/img/tuiles/carte_gris_4.png",
            "src/img/tuiles/carte_gris_6.png",
            "src/img/tuiles/carte_gris_7.png",
            "src/img/tuiles/carte_gris_8.png",
            "src/img/tuiles/carte_gris_9.png",
            "src/img/tuiles/carte_noir_0.png",
            "src/img/tuiles/carte_noir_1.png",
            "src/img/tuiles/carte_noir_2.png",
            "src/img/tuiles/carte_noir_3.png",
            "src/img/tuiles/carte_noir_4.png",
            "src/img/tuiles/carte_noir_6.png",
            "src/img/tuiles/carte_noir_7.png",
            "src/img/tuiles/carte_noir_8.png",
            "src/img/tuiles/carte_noir_9.png",
            "src/img/tuiles/carte_vert_5.png",
        ];

        var indexImage = 0;

        function changerImage(element) {
            // Changer l'image suivante dans la liste
            if (indexImage < images.length - 1) {
                indexImage++;
            } else {
                indexImage = 0;
            }

            element.src = images[indexImage];
        }
    </script>




</body>