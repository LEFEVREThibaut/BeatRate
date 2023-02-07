<?php
require_once('header-emp.php')
?>
<main>
  <section>
    <h1 class="font-black text-3xl ml-48 mt-10">Classement genres</h1>
    <div class="drop-shadow-lg flex flex-col mb-8">
      <div class="overflow-hidden">
        <table class="mt-4 mx-auto p-10 w-3/4">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Position
              </th>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Genre
              </th>
              <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                Montant de vente
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
              echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center\">" . ($i + 1) . "</td>
                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model[$i]["genre"] . "</td>
                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model[$i]["montant_vente"] . "</td>
                            </tr>";
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