<?php

$page_title = 'Infos Pratiques';

require_once './app/includes/header.php';

?>

<section class="info-base" id="info-pratiques">
    <div class="info-header">
        <h1>Infos Pratiques</h1>
        <p><a href="#quand">Quand?</a> / <a href="#ou">Où?</a> / <a href="#tarifs">Tarifs?</a> / <a href="#comment">Comment venir?</a></p>
    </div>
    <section class="info" id="quand">
        <h1>Quand?</h1>
        <p>Les Halles Of Games se déroulent du 6 au 10 avril 2023 :</p>
        <div class="info-list">
            <p>19h00 - 22h00 Jeudi 6 avril</p>
            <p>10h00 - 22h00 Vendredi 7 avril</p>
            <p>10h00 - 22h00 Samedi 8 avril</p>
            <p>10h00 - 22h00 Dimanche 9 avril</p>
            <p>10h00 - 22h00 Lundi 10 avril</p>
        </div>
        <a class="btn-prog" href="./programme.php">Découvrir le programme</a>
    </section>
    <section class="info" id="ou">
        <h1>Où?</h1>
        <p>Les Halles Of Games ont lieu au <a href="./#halles">Phare Citadelle</a>, située 11 Rue de Nantes, 67000 Strasbourg</p>
        <iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1920&amp;height=650&amp;hl=fr&amp;q=11%20rue%20de%20Nantes%20Strasbourg+(Halles%20Of%20Games)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </section>
    <section class="info" id="tarifs">
        <h1>Tarifs?</h1>
        <p><span class="bold">Afin d’éviter la file d’attente à l’entrée, l’organisation vous recommande d’acheter vos billets en avance.</span></p>
        <p>
            L'achat des billets est possible <a href="./billetterie.php">en ligne via la billetterie</a> et sur place.
            <br>
            <em>(Entrée gratuite pour les enfants de moins de 6 ans accompagnés et sur présentation d’une carte d’identité.)</em>
        </p>
        <div class="info-list">
            <p>Pass 1 jour : <a href="./billetterie.php">2€</a></p>
            <p>Pass 4 jours + soirée d’ouverture (-40%) : <a href="./billetterie.php">6€</a></p>
            <p>Initiations : <a href="./billetterie.php">Gratuit</a></p>
            <p>Compétitions : <a href="./billetterie.php">40€/équipe</a></p>
        </div>
        <a class="btn-prog" href="./billetterie.php">Réserve ta place</a>
    </section>
    <section class="info" id="comment">
        <h1>Comment venir?</h1>
        <p>Les Halles Of Games vous conseille d’utiliser des moyens de transports écologiques, comme le Vélo, le Roller, le Skate, le Tram ou les Bus.</p>
        <p><span class="bold">En tram</span></p>
        <p>
            Tram ligne D (Ligne Kehl Rathaus/Port du Rhin) : Arrêt Citadelle
            <br>
            Un billet combiné spécial Halles Of Games sera disponible dans les distributeurs automatiques CTS.
        </p>
        <p><span class="bold">En voiture</span></p>
        <p>
            Par l’autoroute: INSTRUCTIONS ICI.
            <br>
            <br>
            Parking : Les parking du site étant d’une capacité très limitée, nous vous conseillons d’utiliser les Parkings Relais de la CTS.
            <br>
            <br>
            P+R Rotonde : 450 places / Parking + Tram : 4,60€
            <br>
            P+R Ducs d’Alsace : 600 places / Parking + Tram : 4,10€
        </p>
        <p><span class="bold">En vélo</span></p>
        <p>
            Les <a href="./#halles">Phare Citadelle</a> sont facilement accessible via les pistes cyclables.
            <br>
            Un parking à vélo sera spécialement installé pour le festival.
        </p>
    </section>
</section>

<?php

require_once './app/includes/footer.php';

?>