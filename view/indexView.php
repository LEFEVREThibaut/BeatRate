<?php require_once("header-connexion.php") ?>

<head>
    <title>Connexion</title>
</head>
<main class="h-[80vh]">
    <img class="w-full h-[80vh] fixed -z-50" src="pictures/musicwave.svg" alt="logo" id="logo">
    <section class="mt-24">
        <form class="bg-white rounded-[10px] flex flex-col gap-5 mt-12 mx-auto p-10 max-w-[500px] w-[60%] drop-shadow-lg" method="post" action='index.php' value="connect">
            <h2 class="text-center text-black text-3xl font-extrabold">Connectez-vous</h2>
            <input type="hidden" name="action" value="connect" />
            <label class="text-black font-bold">Email</label>
            <svg class="absolute z-50 top-36 w-7 stroke-gray-400 mx-2 my-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <input class="relative border border-[#FF742F] border-2 mt-1 rounded-[5px] py-2 px-12" type="email" name="user" placeholder="Entrez votre email" required>
            <label class="text-black font-bold">Mot de passe</label>
            <svg class="absolute z-50 top-64 w-7 stroke-gray-400 mx-2 my-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <input class="relative border border-[#FF742F] border-2 mt-1 rounded-[5px] py-2 px-12" type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
            <button type="submit" class="text-lg mt-4 font-bold bg-[#FF742F] w-full text-gray-100 py-3 rounded-[10px] hover:bg-[#FF4500]
            transition-colors" id="button" value="Connexion">Se connecter</button>
            <?php
            if (isset($erreur) and $erreur = "badid") {
                echo '<div class="p-2 bg-[#de2323] w-fit rounded-lg mt-2">
                        <p class="text-white text-center ">Identifiants incorrect</p>
                    </div>';
            }
            ?>
        </form>

</main>
</body>

</html>