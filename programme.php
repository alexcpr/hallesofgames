<?php

$page_title = 'Programme';

require_once './app/includes/header.php';
require_once './app/includes/db.php';

?>

<section class="programme" id="programme">
    <div class="programme-header">
        <h1>
            Programme
        </h1>
        <p>
            Les Halles of Games aux Halles Citadelle
            <br>
            5 jours pour découvrir l’Urban Culture à Strasbourg.
        </p>
        <div class="legend-container">
            <div class="legend-item competition-icon">Compétition</div>
            <div class="legend-item exhibition-icon">Exhibition</div>
            <div class="legend-item initiation-icon">Initiation</div>
        </div>
    </div>
    <div class="schedules" data-controller="schedules">
        <div class="schedules__wrapper">
            <div class="schedules__filters">
                <div class="schedules__days">
                    <?php foreach ($days as $day) { ?>
                        <div class="checkbox checkbox-day">
                            <label class="checkbox__label">
                                <input type="radio" name="day" class="checkbox__field" value="<?= $day['codeDay']; ?>">
                                <span class="checkbox__button">
                                    <?= $day['label']; ?>
                                </span>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                <div class="schedules__types">
                    <?php foreach ($types as $type) { ?>
                        <div class="checkbox checkbox-type">
                            <label class="checkbox__label">
                                <input type="radio" name="type" class="checkbox__field" value="<?= $type['codeType']; ?>">
                                <span class="checkbox__button">
                                    <?= $type['label']; ?>
                                </span>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                <div class="schedules__events">
                    <?php foreach ($program as $day => $programs) { ?>
                        <div class="schedules__day" data-day="<?= $day; ?>">
                            <?php foreach ($programs as $program) { ?>
                                <article class="event" data-type="<?= $program['codeType']; ?>">
                                    <div class="event__link">
                                        <div class="event__inner">
                                            <div class="event__media">
                                                <?= $program['codeType'] === '*' || $program['icon'] === NULL ? '' : '<span class="icon-container ' . $program['icon'] . '-icon"><img src="./app/img/picto_' . $program['codeType'] . '.png"></span>' ?>
                                            </div>
                                            <div class="event__schedule">
                                                <?= $program['startTime'] . ' - ' . $program['endTime']; ?>
                                            </div>
                                            <div class="event__name">
                                                <h3 class="event__title">
                                                    <?= $program['label']; ?>
                                                </h3>
                                            </div>
                                            <!-- <div class="event__more">
                                                <a href="#">En savoir plus</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

require_once './app/includes/footer.php';

?>