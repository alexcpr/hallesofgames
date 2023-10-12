<?php

$page_title = 'Billetterie';

require_once './app/includes/header.php';

?>
<section class="billetterie" id="billetterie">
    <div class="billetterie-content">
        <h1>Billetterie</h1>
        <p>
            2€ par jour seulement !
            <br>
            C’est accessible à tout le monde et ça aide les associations.
        </p>
        <div class="info-list">
            <p>Pass 1 jour : <a href="./billetterie.php">2€</a></p>
            <p>Pass 4 jours + soirée d’ouverture (-40%) : <a href="./billetterie.php">6€</a></p>
            <p>Initiations : <a href="./billetterie.php">Gratuit</a></p>
            <p>Compétitions : <a href="./billetterie.php">40€/équipe</a></p>
        </div>
        <iframe id="haWidget" allowtransparency="true" scrolling="auto"
            src="https://www.helloasso.com/associations/street-k/evenements/halles-of-games/widget"
            style="width: 100%; height: 750px; border: none;"></iframe>
    </div>
</section>

<?php

require_once './app/includes/footer.php';

?>