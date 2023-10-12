<?php

$page_title = 'Boutiques';

require_once './app/includes/header.php';

?>

<section class="info-base" id="boutiques">
    <div class="info-header">
        <h1>Boutiques</h1>
        <p><a href="#restauration">Restauration</a> / <a href="#friperie">Friperie</a> / <a
                href="#customsneakers">Customisation Sneakers</a></p>
    </div>
    <section class="info" id="restauration">
        <h1>Restauration</h1>
        <p>
            La restauration sera assuré par les <a href="./#halles">Phare Citadelle</a>.
        </p>
        <div id="slider">
            <div class="slides">
                <div class="slider">
                    <img src="./app/img/restauration_1.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/restauration_2.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/restauration_3.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/restauration_4.jpeg">
                </div>
            </div>
            <div class="switch">
                <ul>
                    <li>
                        <div class="on"></div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="info" id="friperie">
        <h1>Friperie</h1>
        <p>
            La friperie <a target="_blank" href="https://laconsignestore.fr/">La Consigne</a> sera présente sur place
            pour vous proposer une grande variété de produits de seconde main.
        </p>
        <div id="slider">
            <div class="slides">
                <div class="slider">
                    <img src="./app/img/friperie_1.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/friperie_2.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/friperie_3.jpeg">
                </div>
                <div class="slider">
                    <img src="./app/img/friperie_4.jpeg">
                </div>
            </div>
            <div class="switch">
                <ul>
                    <li>
                        <div class="on"></div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="info" id="customsneakers">
        <h1>Customisation sneakers</h1>
        <p>
            La boutique <a target="_blank" href="https://www.makeyourgrail.com/">Make Your Grail</a> sera présente sur
            place pour vous permettre de customisez vos sneakers.
        </p>
        <div id="slider">
            <div class="slides">
                <div class="slider">
                    <img src="./app/img/custom_1.jpg">
                </div>
                <div class="slider">
                    <img src="./app/img/custom_2.jpg">
                </div>
                <div class="slider">
                    <img src="./app/img/custom_3.jpg">
                </div>
                <div class="slider">
                    <img src="./app/img/custom_4.jpg">
                </div>
            </div>
            <div class="switch">
                <ul>
                    <li>
                        <div class="on"></div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
</section>

<?php

require_once './app/includes/footer.php';

?>