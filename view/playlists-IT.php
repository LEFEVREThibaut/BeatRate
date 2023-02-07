<?php include_once("header-it.php"); ?>

<main>
    <section>
        <h1 class="font-black text-4xl my-12 ml-24">
            Créer une nouvelle playlist
        </h1>
        <div class="grid grid-cols-2 w-full">
            <div class="bg-white rounded-[25px] drop-shadow-lg w-fit p-14 ml-24">
                <div class=" my-2">
                    <form method="post" action='index.php?action=ajout-playlist'>
                        <input id="ecrit" name="ecrit" class="border border-[#FF742F] border-2 rounded-[5px] py-2 pl-4 pr-32" type="text" placeholder="Nom de la playlist" id="cp" require>
                        <div class="flex flex-row gap-4 mt-6">
                            <button class=" text-white bg-[#FF742F] px-3 py-2 rounded-[10px] font-bold hover:bg-white border border-[#FF742F] border-4 hover:text-[#FF742F]">Créer la playlist</button>
                            <p id="anul" class=" ml-12 text-black px-3 py-2 font-bold hover:font-extrabold hover:cursor-pointer hover:underline">Annuler</p>
                        </div>
                    </form>
                </div>

            </div>
            <div>
                <img class="h-56" src="pictures/soundwave.svg" alt="soundwave">
            </div>
        </div>
    </section>
    <section>
        <h2 class="font-black text-4xl my-12 ml-24">
            Playlists existantes
        </h2>
        <section class="grid grid-cols-5 grid-rows-2 mt-8 gap-y-6 items-center mx-14">
            <?php
            foreach ($model as $value) {
                echo "<div class=\"grid grid-cols-1 gap-y-6 justify-items-center hover:scale-105\"><img class=\"h-44 w-56 opacity-90 rounded-[25px] drop-shadow-xl items-center\" src=\"pictures/Shiny_overlay.svg\" alt=\"cover musique\"></br><a href='index.php?action=ajout-in-playlist&name=" . $value->PlaylistId . "' class='absolute items-center mt-20 text-lg text-white font-black max-w-[10vw] text-center'>";
                echo $value->nom_playlist;
                echo "</a></div>";
            }
            ?>
        </section>
    </section>
</main>
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

    var ecrit = document.getElementById("ecrit");
    var annul = document.getElementById("anul");
    annul.addEventListener("click", function() {
        ecrit.value = "";
    })
</script>
<?php include_once("footer-it.php"); ?>