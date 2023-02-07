<?php
include_once("header-client.php");
include_once("left-nav.php");
?>

<section class="col-span-4 px-8 mb-6">
  <h1 class="font-bold text-4xl my-12">
    Historique des achats
  </h1>
  <div class="drop-shadow-lg flex flex-col">
    <div class="overflow-x-auto">
      <div class="py-2 inline-block min-w-full">
        <div class="overflow-hidden">
          <table class="mt-4 mx-auto p-10 w-full">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black pl-2">
                  Date
                </th>
                <th scope="col" class="text-sm text-[#FF742F]  py-4 text-center font-black">
                  Titre
                </th>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black">
                  Artiste
                </th>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black">
                  Album
                </th>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black">
                  Durée
                </th>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black">
                  Prix unitaire
                </th>
                <th scope="col" class="text-sm text-[#FF742F] py-4 text-center font-black pr-2">
                  Quantité
                </th>
              </tr>
            </thead>
            <tbody>

              <?php

              for ($i = 0; $i < count($model[0]); $i++) {
                if ($i % 2) {
                  echo "<tr class=\"bg-gray-100 border-b\"><td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->InvoiceDate = substr($model[0][$i]->InvoiceDate, 0, 10) . "</td>";
                } else {
                  echo "<tr class=\"bg-white border-b\"><td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->InvoiceDate = substr($model[0][$i]->InvoiceDate, 0, 10) . "</td>";
                }
                if (strlen($model[0][$i]->titre) >= 20) {
                  echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->titre = substr($model[0][$i]->titre, 0, 20) . "..." . "</td>";
                } else {
                  echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->titre . "</td>";
                }
                echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->artiste . "</td>";
                echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->nom_album . "</td>";
                echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->Milliseconds . "</td>";
                echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->UnitPrice . "</td>";
                echo "<td class=\"py-6 whitespace-nowrap text-xs font-medium text-gray-900 text-center\">" . $model[0][$i]->Quantity . "</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
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

<?php require_once("footer.php"); ?>