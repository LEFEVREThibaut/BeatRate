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

<section class="ml-10">
  <h3 class="font-black text-3xl  mt-10">RGPD</h3>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>1. Conditions générales d’utilisation du site et des services proposés.</b></h4>
    <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>
    <p>L’utilisation du site <a href="http://BeatRate.com">http://BeatRate.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://BeatRate.com">http://BeatRate.com</a> sont donc invités à les consulter de manière régulière.</p>
    <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href="http://BeatRate.com">http://BeatRate.com</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention. Le site web <a href="http://BeatRate.com">http://BeatRate.com</a> est mis à jour régulièrement par <a href="http://BeatRate.com">http://BeatRate.com</a> responsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>2. Description des services fournis.</b></h4>
    <p>Le site internet <a href="http://BeatRate.com">http://BeatRate.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société. <a href="http://BeatRate.com">http://BeatRate.com</a> s’efforce de fournir sur le site <a href="http://BeatRate.com">http://BeatRate.com </a> des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
    <p>Toutes les informations indiquées sur le site <a href="http://BeatRate.com">http://BeatRate.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://BeatRate.com">http://BeatRate.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>3. Limitations contractuelles sur les données techniques.</b></h4>
    <p> Le site utilise la technologie JavaScript. Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour Le site <a href="http://BeatRate.com"> http://BeatRate.com </a> est hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>
    <p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>
    <p><a href="http://BeatRate.com"> http://BeatRate.com </a> et l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>4. Propriété intellectuelle et contrefaçons.</b></h4>
    <p><a href="http://BeatRate.com"> http://BeatRate.com</a> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : <a href="http://BeatRate.com"> http://BeatRate.com </a></p>
    <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>6. Limitations de responsabilité.</b></h4>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> agit en tant qu’éditeur du site. <a href="http://BeatRate.com">http://BeatRate.com</a> est responsable de la qualité et de la véracité du Contenu qu’il publie.</p>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet <a href="http://BeatRate.com">http://BeatRate.com</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://BeatRate.com">http://BeatRate.com</a>. Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. <a href="http://BeatRate.com">http://BeatRate.com</a> se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, <a href="http://BeatRate.com">http://BeatRate.com</a> se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7. Gestion des données personnelles.</b></h4>
    <p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7.1 Responsables de la collecte des données personnelles</b></h4>
    <p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : <span></span><a href="http://BeatRate.com">http://BeatRate.com</a> est représenté par <span>Beat Rate</span>, son représentant légal </p>
    <p>En tant que responsable du traitement des données qu’il collecte, <a href="http://BeatRate.com">http://BeatRate.com</a> s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité. Chaque fois que <a href="http://BeatRate.com">http://BeatRate.com</a> traite des Données Personnelles, <a href="http://BeatRate.com">http://BeatRate.com</a> prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles <a href="http://BeatRate.com">http://BeatRate.com</a> les traite.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7.2 Finalité des données collectées</b></h4>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> est susceptible de traiter tout ou partie des données : </p>
    <ul>
      <li> pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc.</li>
      <li> pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé)</li>
      <li> pour améliorer la navigation sur le Site : données de connexion et d’utilisation</li>
      <li> pour mener des enquêtes de satisfaction facultatives sur <a href="http://BeatRate.com">http://BeatRate.com</a> : adresse email </li>
      <li> pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>
    </ul>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> ne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7.3 Droit d’accès, de rectification et d’opposition</b></h4>
    <p>Conformément à la réglementation européenne en vigueur, les Utilisateurs de <a href="http://BeatRate.com">http://BeatRate.com</a> disposent des droits suivants :</p>
    <ul>
      <li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite</li>
      <li>droit de retirer à tout moment un consentement (article 13-2c RGPD)</li>
      <li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)</li>
      <li>droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)</li>
      <li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)</li>
      <li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui <a href="http://BeatRate.com"> http://BeatRate.com </a> devra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</li>
    </ul>
    <p>Dès que <a href="http://BeatRate.com">http://BeatRate.com</a> a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part, <a href="http://BeatRate.com">http://BeatRate.com</a> s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>
    <p>Si l’Utilisateur souhaite savoir comment <a href="http://BeatRate.com">http://BeatRate.com</a> utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter <a href="http://BeatRate.com">http://BeatRate.com</a> par écrit à l’adresse suivante :</p>
    <p><span></span> - DPO, <span> </span><br><span>256 Rue de l'exode 50000 Saint-lô.</span></p>
    <p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que <a href="http://BeatRate.com">http://BeatRate.com</a> corrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport).</p>
    <p>Les demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à <a href="http://BeatRate.com">http://BeatRate.com</a> par la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de <a href="http://BeatRate.com">http://BeatRate.com</a> peuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7.4 Non-communication des données personnelles</b></h4>
    <p><a href="http://BeatRate.com">http://BeatRate.com</a> s’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant, <a href="http://BeatRate.com"> http://BeatRate.com</a> reste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’il présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>
    <p><a href="http://BeatRate.com"> http://BeatRate.com</a> s’engage à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance de <a href="http://BeatRate.com"> http://BeatRate.com </a>, celle-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs, <a href="http://BeatRate.com"> http://BeatRate.com</a> ne collecte aucune « données sensibles ».</p>
    <p>Les Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de <a href="http://BeatRate.com"> http://BeatRate.com</a> et des sous-traitants (prestataires de services), exclusivement afin de réaliser les finalités de la présente politique.</p>
    <p>Dans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les principales personnes susceptibles d’avoir accès aux données des Utilisateurs de <a href="http://BeatRate.com"> http://BeatRate.com</a> sont principalement les agents de notre service client.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>7.5 Types de données collectées</b></h4>
    <p>Concernant les utilisateurs d’un Site <a href="http://BeatRate.com"> http://BeatRate.com</a>,nous collectons les données suivantes qui sont indispensables au fonctionnement du service , et qui seront conservées pendant une période maximale de <span>Jusqu'à suppression du compte</span> mois après la fin de la relation contractuelle: <br><span>identité / numéro téléphone / mail / fax / adresse complète </span></p>
    <p><a href="http://BeatRate.com"> http://BeatRate.com </a> collecte également des informations qui améliorent l'expérience utilisateur et offre des astuces contextualisées: <br><span> aucune </span></p>
    <p> Ces données sont conservées pendant un maximum de <span>0</span> mois après la fin de la relation contractuelle.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>8. Notification d’incident.</b></h4>
    <p>Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
    <p>Aucune information personnelle de l'utilisateur du site <a href="http://BeatRate.com"> http://BeatRate.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de <a href="http://BeatRate.com"> http://BeatRate.com</a> et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://BeatRate.com"> http://BeatRate.com</a>.</p>
  </section>
  <section class="leading-8">
    <h4 class="my-6 text-xl text-[#FF742F]"><b>Sécurité</b></h4>
    <p>Pour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé, <a href="http://BeatRate.com"> http://BeatRate.com </a> utilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe.</p>
    <p>Lors du traitement des Données Personnelles, <a href="http://BeatRate.com"> http://BeatRate.com</a> prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>
    <section class="leading-8">
      <h4 class="my-6 text-xl text-[#FF742F]"><b>9. Liens hypertextes « cookies » et balises (“tags”) internet</b></h4>
      <p>Le site <a href="http://BeatRate.com">http://BeatRate.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de <a href="http://BeatRate.com">http://BeatRate.com</a>. Cependant, <a href="http://BeatRate.com"> http://BeatRate.com</a> n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
      <p>Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.</p>
    </section>
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