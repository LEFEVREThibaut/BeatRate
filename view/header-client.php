<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="pictures/beatratelogo.png">
    <?php
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "biblio-client") {
            echo '<title>Bibliothèque</title>';
        }
        if ($_GET["action"] == "catalogue") {
            echo '<title>Catalogue Artiste</title>';
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
        if ($_GET["action"] == "historique-achat") {
            echo '<title>Historique Achats</title>';
        }
        if ($_GET["action"] == "compte") {
            echo '<title>Informations compte</title>';
        }
        if ($_GET["action"] == "modif-compte") {
            echo '<title>Modification compte</title>';
        }
        if ($_GET["action"] == "modif-info-client") {
            echo '<title>Modification compte</title>';
        }
        if ($_GET["action"] == "deconnexion") {
            echo '<title>Déconnexion</title>';
        }
    }
    ?>
</head>

<body class="font-lato">
    <header class="w-full bg-white drop-shadow-lg">
        <nav class="grid grid-cols-2 justify-items-center items-center py-4">
            <div class="justify-self-start ml-14">
                <a class="grid grid-cols-2 items-center" href="index.php?action=catalogue">
                    <img class="h-24 justify-self-end" src="pictures/beatratelogo.png" alt="logo">
                    <h2 class="text-2xl font-bold justify-self-start" id="nom">Beat Rate</h2>
                </a>
            </div>
            <div>
                <ul class="grid grid-cols-4 justify-items-center items-center">
                    <?php
                    if (isset($_GET["action"])) {
                        if ($_GET["action"] == 'biblio-client' or !isset($_GET["action"])) {
                            echo ' <li class="w-40 mr-52 text-lg font-bold text-[#FF742F]"><a href="index.php?action=biblio-client" class="menu">Ma bibliothèque</a></li>';
                        } else {
                            echo ' <li class="w-40 mr-52 text-lg hover:text-[#FF742F]"><a href="index.php?action=biblio-client" class="menu">Ma bibliothèque</a></li>';
                        }
                        if ($_GET["action"] == 'catalogue' or $_GET["action"] == 'genre' or $_GET["action"] == 'infos-genre' or $_GET["action"] == 'infos-artiste' or $_GET["action"] == 'musique-artiste' or $_GET["action"] == 'playlist' or $_GET["action"] == 'infos-playlist') {
                            echo ' <li class="w-40 mr-16  text-lg font-bold text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        } else {
                            echo ' <li class="w-40 mr-16  text-lg hover:text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        }
                        if ($_GET["action"] == 'historique-achat') {
                            echo '<li><a href="index.php?action=historique-achat"><svg class="w-7 stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a></li>';
                        } else {
                            echo '<li><a href="index.php?action=historique-achat"><svg class="w-7 hover:stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </a></li>';
                        }
                        if ($_GET["action"] == 'compte' or $_GET["action"] == 'modif-compte' or $_GET["action"] == 'deconnexion' or $_GET["action"] = "modif-info-client") {
                            echo '<li id="profil"><svg class="w-7 stroke-[#FF742F] cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg></li>';
                        } else {
                            echo '<li id="profil"><svg class="w-7 hover:stroke-[#FF742F] cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg></li>';
                        }
                    } else {
                        echo ' <li class="w-40 mr-52 text-lg hover:text-[#FF742F]"><a href="index.php?action=biblio-client" class="menu">Ma bibliothèque</a></li>';
                        echo ' <li class="w-40 mr-16  text-lg font-bold text-[#FF742F]"><a href="index.php?action=catalogue" class="menu">Catalogue musical</a></li>';
                        echo '<li><a href="index.php?action=historique-achat"><svg class="w-7 hover:stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a></li>';
                        echo '<li id="profil"><svg class="w-7 hover:stroke-[#FF742F] cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <div class="max-w-fit absolute top-30 right-6 bg-white drop-shadow-lg px-2">
        <ul id="menu" class="hidden flex-col">
            <li class="py-1 hover:text-[#FF742F]"><a href="index.php?action=compte">Mon compte</a></li>
            <li class="py-1 hover:text-[#FF742F]"><a href="index.php?action=modif-compte">Modifier compte</a></li>
            <li class="py-1 hover:text-[#FF742F]"><a href="index.php?action=historique-achat">Historique achat</a></li>
            <li class="py-1 hover:text-[#FF742F]"><a href="index.php?action=deconnexion">Déconnexion</a></li>
        </ul>
    </div>