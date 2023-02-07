    <?php
    require_once("view/header-client.php");
    require_once("view/left-nav.php");
    ?>

    <div class="col-span-4 px-8 mb-6">
        <section class="mt-10">
            <h2 class="font-bold text-4xl my-12">
                Informations du compte
            </h2>

            <h3 class="font-bold text-xl mb-4 text-[#FF742F]">
                Profil
            </h3>
            <div class="grid grid-rows-2">
                <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                    <p class="text-gray-400">Nom</p>
                    <p class="font-bold"><?= $model->LastName ?></p>
                </div>
                <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                    <p class="text-gray-400">Prenom</p>
                    <p class="font-bold"><?= $model->FirstName ?></p>
                </div>
            </div>

            <h3 class="font-bold text-xl my-4 text-[#FF742F]">
                Coordonnées
            </h3>
            <div class="grid grid-rows-4">
                <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                    <p class="text-gray-400">Adresse mail</p>
                    <p class="font-bold"><?= $model->Email ?></p>
                </div>
                <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                    <p class="text-gray-400">Password</p>
                    <p class="font-bold"><?= str_repeat("* ", strlen($model->Password)) ?></p>
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

            <h3 class="font-bold text-xl text-[#FF742F] my-4">
                Adresse
            </h3>
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
            <a class="text-black bg-[#FF742F]  px-5 py-3 rounded-[25px] font-bold hover:bg-white border border-[#FF742F] border-4 hover:text-[#FF742F]" href="index.php?action=modif-compte">Modifier le compte</a>
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

    <?php require_once("footer.php"); ?>