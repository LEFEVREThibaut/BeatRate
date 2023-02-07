<?php
if ($model->Title == "IT Manager" or $model->Title == "IT Staff") {
    include_once("header-it.php");
} else {
    include_once("header-emp.php");
}
?>

<main>
    <?php include_once("left-nav-employee.php"); ?>
    <div class="col-span-4 px-8 mb-6">
        <form class="mt-10" action="" method="">
            <section>
                <h1 class="font-bold text-4xl my-12">
                    Informations du compte
                </h1>
                <section>
                    <h2 class="font-bold text-xl mb-4 text-[#FF742F]">
                        Profil
                    </h2>
                    <div class="grid grid-rows-5">
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Nom</p>
                            <p class="font-bold"><?= $model->LastName ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Prenom</p>
                            <p class="font-bold"><?= $model->FirstName ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Titre</p>
                            <p class="font-bold"><?= $model->Title ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Date de naissance</p>
                            <p class="font-bold"><?= substr($model->BirthDate, 0, 10) ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Date d'embauche</p>
                            <p class="font-bold"><?= substr($model->HireDate, 0, 10) ?></p>
                        </div>

                    </div>
                </section>
                <section>
                    <h2 class="font-bold text-xl my-4 text-[#FF742F]">
                        Mot de passe
                    </h2>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <p class="text-gray-400">Mot de passe actuel</p>
                        <p class="font-bold"><?= str_repeat("* ", strlen($model->Password)) ?></p>
                    </div>
                </section>
                <section>
                    <h2 class="font-bold text-xl my-4 text-[#FF742F]">
                        Coordonnées
                    </h2>
                    <div class="grid grid-rows-3">
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Adresse mail</p>
                            <p class="font-bold"><?= $model->Email ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Fax</p>
                            <p class="font-bold"><?= $model->Fax ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Tel</p>
                            <p class="font-bold"><?= $model->Phone ?></p>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="font-bold text-xl text-[#FF742F] my-4">
                        Adresse
                    </h2>
                    <div class="grid grid-rows-6">
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Pays</p>
                            <p class="font-bold"><?= $model->Country ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Région</p>
                            <p class="font-bold"><?= $model->State ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Ville</p>
                            <p class="font-bold"><?= $model->City ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Adresse</p>
                            <p class="font-bold"><?= $model->Address ?></p>
                        </div>
                        <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                            <p class="text-gray-400">Code postal</p>
                            <p class="font-bold"><?= $model->PostalCode ?></p>
                        </div>
                    </div>
                </section>
                <a class="text-black bg-[#FF742F]  px-5 py-3 rounded-[25px] font-bold hover:bg-white border border-[#FF742F] border-4 hover:text-[#FF742F]" href="index.php?action=modif-compte-it">Modifier le compte</a>
            </section>
        </form>
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
if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {
    include_once("footer-it.php");
} else {
    include_once("footer-sales.php");
}
?>