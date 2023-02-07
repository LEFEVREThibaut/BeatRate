<?php
if ($_SESSION["connexion"] instanceof Customer) {
    include_once("header-client.php");
    include_once("left-nav.php");
} elseif ($_SESSION["connexion"] instanceof Employee) {
    if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {
        include_once("header-it.php");
        include_once("left-nav-employee.php");
    } else {
        include_once("header-emp.php");
        include_once("left-nav-employee.php");
    }
}
?>


<head>
    <title>Déconnexion</title>
</head>

<div class="col-span-4 px-8 mb-20">
    <section class="grid grid-cols-2">
        <div>
            <h2 class="font-bold text-4xl mt-12 mb-16">
                Vous partez déjà ...?
            </h2>
            <a class="text-black bg-[#FF742F] mb-6 px-5 py-3 rounded-[25px] font-bold hover:bg-white border border-[#FF742F] border-4 hover:text-[#FF742F]" href="index.php?action=deco">Se déconnecter</a>
            <?php
            if ($_SESSION["connexion"] instanceof Customer) {
                echo '<a class="text-black bg-white mb-6 px-5 py-3 rounded-[25px] font-bold hover:font-black ml-10" href="index.php?action=biblio-client">Annuler</a>';
            } elseif ($_SESSION["connexion"] instanceof Employee) {
                echo '<a class="text-black bg-white mb-6 px-5 py-3 rounded-[25px] font-bold hover:font-black ml-10" href="index.php?action=liste">Annuler</a>';
            }
            ?>
        </div>
        <div class="justify-self-start">
            <img class="h-80 mt-12" src="./pictures/sadgirl.jpg" alt="profil">
        </div>
    </section>
</div>
</div>
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