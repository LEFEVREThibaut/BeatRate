<?php require_once("view/header-client.php");
require_once("view/left-nav.php"); ?>
<div class="col-span-4 px-8 mb-9">
    <form class="mt-10" method="post" action="index.php?action=modif-info-client">
        <section>
            <h1 class="font-bold text-4xl my-12">
                Modifier mon compte
            </h1>
            <section>
                <h2 class="font-bold text-xl mb-4 text-[#FF742F]">
                    Profil
                </h2>

                <div class="grid grid-rows-2">
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="nom">Nom <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="nom" value="<?= ($model->LastName) ?>">
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="prenom">Prenom <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="prenom" value="<?= ($model->FirstName) ?>" require>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="font-bold text-xl my-4 text-[#FF742F]">
                    Mot de passe
                </h2>
                <div class="grid grid-rows-3">
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="mail">Mot de passe actuel <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="password" name="actual-password" value="" require>
                    </div>
                    <?php
                    if (isset($erreur) and $erreur == "notright") {
                        echo '<div class="p-2 bg-[#de2323] w-fit h-fit rounded-lg ml-[38vw] mt-2">
                                <p class="text-white text-center ">Mot de passe incorrect</p>
                            </div>';
                    }
                    ?>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="password">Nouveau mot de passe</label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="password" name="new-password" value="" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="fax">Vérification nouveau mot de passe</label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="password" name="verif-password" value="" require>
                    </div>
                    <?php
                    if (isset($erreur) and $erreur == "notsame") {
                        echo '<div class="p-2 bg-[#de2323] w-fit h-fit rounded-lg ml-[38vw] mt-2">
                                <p class="text-white text-center ">Mot de passe non-identique</p>
                            </div>';
                    }
                    ?>
                </div>
            </section>
            <section>
                <h2 class="font-bold text-xl my-4 text-[#FF742F]">
                    Coordonnées
                </h2>


                <div class="grid grid-rows-4">
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="mail">Adresse mail <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="mail" value="<?= ($model->Email) ?>" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="fax">Fax</label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="fax" value="<?= ($model->Fax) ?>">
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="phone">Téléphone <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="phone" value="<?= $model->Phone ?>" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="phone">Entreprise</label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="entreprise" value="<?= $model->Company ?>">
                    </div>
                </div>
            </section>
            <section>
                <h2 class="font-bold text-xl text-[#FF742F] my-4">
                    Adresse
                </h2>
                <div class="grid grid-rows-6">
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="pays">Pays <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="pays" class="elem-form" value="<?= ($model->Country) ?>" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="region">Région</label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="region" class="elem-form" value="<?= ($model->State) ?>">
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="ville">Ville <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="ville" class="elem-form" value="<?= ($model->City) ?>" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="adresse">Adresse <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="adresse" class="elem-form" value="<?= ($model->Address) ?>" require>
                    </div>
                    <div class="grid grid-cols-2 border-b-gray-400 border-b py-4">
                        <label class="text-gray-400" for="cp">Code postal <span class="text-[#FF742F]">*</span></label>
                        <input class="border border-[#FF742F] border-2 rounded-[5px] py-1 pl-2" type="text" name="cp" class="elem-form" value="<?= ($model->PostalCode) ?>" require>
                    </div>
                </div>
            </section>
            <div>
                <button class="bg-[#FF742F] px-5 py-3 rounded-[25px] font-bold hover:bg-[#FF4500]">Enregistrer les modifications</button>
            </div>
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

<?php require_once("footer.php"); ?>