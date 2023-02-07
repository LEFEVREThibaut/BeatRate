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
  <a href="index.php?action=playlist">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 absolute ml-12 text-slate-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </a>
  <section class=" grid grid-cols-3 mt-10 ml-8">
    <img class="h-44 justify-self-center" src="pictures/OrangeCD.png">
    <div class="self-center col-span-2">
      <div class="text-4xl font-bold text-[#FF742F] mr-52"><?= $vide->Name ?>
      </div>
    </div>
  </section>
  <h2 class="text-xl ml-[35vw] mb-[14vh] font-bold">Playlist Vide ...</h2>

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