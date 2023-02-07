<?php
if ($_SESSION["connexion"] instanceof Customer) {
    include_once("header-client.php");
} elseif ($_SESSION["connexion"] instanceof Employee) {
    if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {
        include_once("header-it.php");
    } else {
        include_once("header-emp.php");
    }
}
?>
<main>
    <ul class="mt-10 grid grid-cols-3 items-center border-b-2 border-b mx-20 mb-6">
        <li class="justify-self-end text-xl font-bold mb-4"><a href="index.php?action=catalogue"><button class="text-black bg-white  px-5 py-3 rounded-[25px] font-bold hover:font-black">Artistes</button></a></li>
        <li class="justify-self-center text-xl font-bold mb-4"><a href="index.php?action=genre"><button class="text-black bg-white px-5 py-3 rounded-[25px] font-bold hover:font-black">Genres</button></a></li>
        <li class="justify-self-start text-xl font-bold mb-4"><a href="index.php?action=playlist"><button class="text-white bg-black px-5 py-3 rounded-[25px] font-bold">Playlists</button></a></li>
    </ul>
    <div class="ml-20">
        <svg class="absolute z-50 top-64 w-7 stroke-gray-400 mx-2 my-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input class=" relative border border-[#FF742F] border-2 rounded-[5px] mt-3 py-2 px-12" type="text" placeholder="Recherchez une playlist" id="cp">
    </div>

    <section class="grid grid-cols-5 grid-rows-2 mt-8 gap-y-6 items-center mx-14">
        <?php
        foreach ($model as $value) {
            echo "<div class=\"playlist grid grid-cols-1 gap-y-6 justify-items-center hover:scale-105\"><img class=\"h-44 w-56 opacity-90 rounded-[25px] drop-shadow-xl items-center\" src=\"pictures/Shiny_overlay.svg\" alt=\"cover musique\"></br><a href='index.php?action=infos-playlist&name=" . $value->PlaylistId . "' class='absolute items-center mt-20 text-lg text-white font-black max-w-[10vw] text-center'>";
            echo $value->nom_playlist;
            echo "</a></div>";
        }
        ?>
    </section>

    <script>
        var compteur = 0;
        var profil = document.getElementById("profil");
        var menu = document.getElementById("menu");
        profil.addEventListener("click", function() {
            compteur += 1;
            if (compteur % 2 == 0) {
                menu.classList.remove("flex");
                menu.classList.add("hidden");
            } else {
                menu.classList.remove("hidden");
                menu.classList.add("flex");
            }
        });

        const searchInput = document.querySelector('#cp');
        const genres = document.querySelectorAll('.playlist');
        cp.addEventListener('input', (e) => {
            genres.forEach(genre => {
                if (!genre.textContent.toLocaleLowerCase().includes(e.target.value.toLocaleLowerCase())) {
                    genre.classList.add('hidden')
                } else {
                    genre.classList.remove('hidden');
                }
            })
        })
    </script>

    <?php
    if ($_SESSION["connexion"] instanceof Customer) {
        include_once("footer.php");
    } elseif ($_SESSION["connexion"] instanceof Employee) {
        if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {
            include_once("footer-it.php");
        } else {
            include_once("footer-sales.php");
        }
    }
    ?>