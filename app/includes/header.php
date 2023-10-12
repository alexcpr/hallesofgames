<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($page_title) ? $page_title . ' -' : ''; ?> Halles Of Games</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="./app/css/main.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="./" class="logo"><img src="./app/img/nav_logo.png" alt="Halles Of Games"></a>
            <div class="nav-links">
                <ul class="nav-menu">
                    <img class="hidden mobile-logo" src="./app/img/nav_logo.png" alt="Halles Of Games">
                    <li><a href="./#maps">Le lieu</a></li>
                    <li class="li-dropdown">
                        <ul class="nav-dropdown">
                            <li><a href="./#hiphop-dj-mc">Hiphop / Dj & MC</a></li>
                            <li><a href="./#breakdance">Breakdance</a></li>
                            <li><a href="./#graph">Graph</a></li>
                        </ul>
                        <a href="./#streetculture">Street Culture</a>
                    </li>
                    <li class="li-dropdown">
                        <ul class="nav-dropdown">
                            <li><a href="./#basket3x3">Basket 3X3</a></li>
                            <li><a href="./#skate-roller">Skate / Roller</a></li>
                            <li><a href="./#parkour">Parkour</a></li>
                        </ul>
                        <a href="./#urbansport">Urban Sport</a>
                    </li>
                    <li><a href="./boutiques.php">Boutiques</a></li>
                    <li><a href="./infos_pratiques.php">Infos Pratiques</a></li>
                    <li><a href="./programme.php">Programme</a></li>
                    <li><a href="./billetterie.php" class="navbar-btn">Entrée 2€ <i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars"></i>
        </nav>
    </header>
    <main id="wrapper">