<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="pictures/beatratelogo.png">
    <script src="https://cdn.tailwindcss.com"></script>

    <?php
    if(isset($_GET["action"])) {
        if ($_GET["action"] == "classement") {
            echo '<title>Classement genres</title>';
        }
        if ($_GET["action"] == "statistiques") {
            echo '<title>Statistiques clients</title>';
        }
        if ($_GET["action"] == "resume-achats") {
            echo '<title>Résumé achats</title>';
        }
        if ($_GET["action"] == "catalogue") {
            echo '<title>Catalogue Artistes</title>';
        }
        if ($_GET["action"] == "infos-artiste") {
            echo '<title>Album Artiste</title>';
        }
        if ($_GET["action"] == "musique-artiste") {
            echo '<title>Détail Album</title>';
        }
        if ($_GET["action"] == "genre") {
            echo '<title>Catalogue Genres</title>';
        }
        if ($_GET["action"] == "infos-genre") {
            echo '<title>Détails Genre</title>';
        }
        if ($_GET["action"] == "playlist") {
            echo '<title>Catalogue Playlists</title>';
        }
        if ($_GET["action"] == "infos-playlist") {
            echo '<title>Détails Playlist</title>';
        }
        if ($_GET["action"] == "compte-sales") {
            echo '<title>Informations compte</title>';
        }
        if ($_GET["action"] == "modif-compte-it") {
            echo '<title>Modification compte</title>';
        }
        if ($_GET["action"] == "modif-info-employee") {
            echo '<title>Modification compte</title>';
        }
        if ($_GET["action"] == "deconnexion") {
            echo '<title>Déconnexion</title>';
        }
    }
    else {
        echo '<title>Classement genres</title>';
    }
   
    ?>
</head>

<body class="font-lato">
    <header class="w-full bg-white drop-shadow-lg">
        <nav class="grid grid-cols-3 justify-items-center items-center py-4">
            <div class="grid grid-cols-2 items-center justify-self-start ml-14">
                <a href="index.php?action=classement"><img class="h-24 justify-self-end" src="pictures/beatratelogo.png" alt="logo"></a>
                <a href="index.php?action=classement">
                    <h2 class="text-2xl font-black justify-self-start" id="nom">Beat Rate</h2>
                </a>
            </div>
            <div class="ml-6 col-span-2">
                <ul class="grid grid-cols-5 justify-items-center items-center gap-5 w-full">
                    <?php
                    if (isset($_GET["action"])) {
                        if ($_GET["action"] == "classement") {
                            echo '<li class="pr-8 text-lg text-[#FF742F]"><a href="index.php?action=classement" class="menu">Classement genres</a></li>';
                        } else {
                            echo '<li class="pr-8 text-lg hover:text-[#FF742F]"><a href="index.php?action=classement" class="menu">Classement genres</a></li>';
                        }
                        if ($_GET["action"] == "statistiques") {
                            echo '<li class="px-4 text-lg text-[#FF742F]"><a href="index.php?action=statistiques" class="menu">Statistiques clients</a></li>';
                        } else {
                            echo '<li class="px-4 text-lg hover:text-[#FF742F]"><a href="index.php?action=statistiques" class="menu">Statistiques clients</a></li>';
                        }
                        if ($_GET["action"] == "resume-achats") {
                            echo '<li class="text-lg text-[#FF742F]"><a href="index.php?action=resume-achats" class="menu">Résumé achats</a></li>';
                        } else {
                            echo '<li class="text-lg hover:text-[#FF742F]"><a href="index.php?action=resume-achats" class="menu">Résumé achats</a></li>';
                        }
                        if ($_GET["action"] == "catalogue" or $_GET["action"] == "genre" or $_GET["action"] == "playlist" or $_GET["action"] == "infos-playlist" or $_GET["action"] == "infos-genre" or $_GET["action"] == "infos-artiste" or $_GET["action"] == "musique-artiste") {
                            echo '<li class="text-lg text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        } else {
                            echo '<li class="text-lg hover:text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        }
                        if ($_GET["action"] == 'compte-sales' or $_GET["action"] == 'modif-compte-it' or $_GET["action"] == 'deconnexion' or $_GET["action"] == "modif-info-employee") {
                            echo '
                            <li class="justify-self-start ml-14 cursor-pointer" id="profil"><svg class="w-7 stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                            </li> ';
                        } else {
                            echo '
                            <li class="justify-self-start ml-14 cursor-pointer" id="profil">
                                <svg class="w-7 hover:stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </li>';
                        }
                    } else {
                        echo '<li class="pr-8 text-lg text-[#FF742F]"><a href="index.php?action=classement" class="menu">Classement genres</a></li>';
                        echo '<li class="px-4 text-lg hover:text-[#FF742F]"><a href="index.php?action=statistiques" class="menu">Statistiques clients</a></li>';
                        echo '<li class="text-lg hover:text-[#FF742F]"><a href="index.php?action=resume-achats" class="menu">Résumé achats</a></li>';
                        echo '<li class="text-lg hover:text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        echo '
                            <li class="justify-self-start ml-14 cursor-pointer" id="profil">
                                <svg class="w-7 hover:stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </li>';
                    }
                    ?>


                </ul>
            </div>
        </nav>
    </header>
    <section class="max-w-fit absolute top-30 right-6 bg-white drop-shadow-lg px-2">
        <ul id="menu" class="hidden flex-col">
            <li class="py-1"><a href="index.php?action=compte-sales">Mon compte</a></li>
            <li class="py-1"><a href="index.php?action=modif-compte-it">Modifier compte</a></li>
            <li class="py-1"><a href="index.php?action=deconnexion">Déconnexion</a></li>
        </ul>
    </section>