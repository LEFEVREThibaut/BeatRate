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

<main class="mb-8 mx-8">
    <section class="ml-10">
        <h2 class="font-black text-3xl  mt-10">Mentions légales</h2>
        <section class="leading-8">
            <h3 class="my-6 text-xl text-[#FF742F]"><b>Définitions</b></h3>
            <p><b>Client : </b>tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.</p>
            <p><b>Prestations et Services : </b>http://BeatRate.com met à disposition des Clients :</p>
            <p><b>Contenu : </b>Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>
            <p><b>Informations clients : </b> Ci après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par http://BeatRate.com pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>
            <p><b>Utilisateur : </b>Internaute se connectant, utilisant le site susnommé.</p>
            <p><b>Informations personnelles : </b>« Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
            <p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>
        </section>
        <section class="leading-8">
            <h4 class="my-6 text-lg text-[#FF742F]"><b>1. Présentation du site internet.</b></h4>
            <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet http://BeatRate.com l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:</p>
            <p><strong>Propriétaire : </strong><span>SARL BeatRate - Capital social de 9999€ - Numéro de TVA: FR289472894629 - 256 Rue de l'exode 50000 Saint-lô</span><br><strong>Responsable publication : </strong><span>Beat Rate - 0666666666 </span><br>Le responsable publication est une personne physique ou une personne morale.<br><strong>Webmaster</strong>: <span>BeatRate - 0666666666</span><br><strong>Hébergeur : </strong><span>Unicaen-Esplanade de la paix 14000 Caen 0666666666</span><br><strong>Délégué à la protection des données : </strong><span> - contact@beatRate.com</span><br></p>
            <p>Les mentions légales sont conformes à <a href="europa.eu">RGPD</a></p>
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