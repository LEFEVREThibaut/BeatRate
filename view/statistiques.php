<?php
require_once('header-emp.php');
?>
<main>
  <section>
    <h2 class="font-black text-3xl ml-48 mt-10">Statistiques clients</h2>
    <div class="drop-shadow-lg flex flex-col mb-8">
      <div class="overflow-hidden">
        <table class="mt-4 mx-auto p-10 w-3/4">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Pays
              </th>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Nombre de clients
              </th>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Dépenses moyennes d'un client
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($i = 0; $i < count($model); $i++) {
              if ($i % 2) {
                echo "<tr class=\"bg-gray-100 border-b\">";
              } else {
                echo "<tr class=\"bg-white border-b\">";
              }
              echo " 
                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center\">" . $model[$i]->Country . "</td>
                <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model[$i]->nombre_client_pays . "</td>
                <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model[$i]->moyenne_achat . "</td>
                </tr>
              ";
            }

            ?>
          </tbody>
        </table>
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
<?php
require_once('footer-sales.php');
?>