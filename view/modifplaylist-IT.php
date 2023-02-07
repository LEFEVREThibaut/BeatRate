<?php include_once("header-it.php"); ?>
<main>
  <a href="index.php?action=new_playlist">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 absolute ml-12 text-slate-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </a>
  <section>
    <h2 class="font-black text-3xl ml-48 mt-10">Ajouter des musiques</h2>
    <div class="ml-48 mt-6">
      <svg class="absolute z-50 top-64 w-7 stroke-gray-400 mx-2 my-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg>
      <input class="relative border border-[#FF742F] border-2 rounded-[5px] mt-7 py-2 px-12" type="text" placeholder="Recherchez une musique" id="cp">
    </div>
    <div class="drop-shadow-lg flex flex-col mb-8">
      <table class="mt-4 mx-auto p-10 w-3/4">
        <thead class="bg-white border-b">
          <tr>
            <th></th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Titre
            </th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Album
            </th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Artiste
            </th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Durée
            </th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Prix
            </th>
            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
              Ajouter
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < count($model); $i++) {
            $min = floor($model[$i]->milliseconds / 1000 / 60);
            $sec = $model[$i]->milliseconds / 1000 % 60;
            if ($i % 2) {
              echo '
                      <tr class="genre bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
              if (strlen($model[$i]->titre) > 40) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->titre = substr($model[$i]->titre, 0, 40) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->titre . "</td>";
              }
              if (strlen($model[$i]->nom_album) > 30) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->nom_album = substr($model[$i]->nom_album, 0, 30) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->nom_album . "</td>";
              }
              if (strlen($model[$i]->nom_artiste) > 40) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw] text-center'>" . $model[$i]->nom_artiste = substr($model[$i]->nom_artiste, 0, 40) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw] text-center'>" . $model[$i]->nom_artiste . "</td>";
              }
              echo '
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $model[$i]->prix . ' €</td>
              <td class=" pl-10 py-4 whitespace-nowrap">
                <form method="post" action="index.php?action=ajout-musique" value="add">
                    <input type="hidden" name="trackid" value=' . $model[$i]->ID . ' />
                    <input type="hidden" name="albumid" value=' . $rang . ' />
                    <button type="submit">
                      <svg class="w-7 stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                    </button>
                </form>
               </td>
              </tr>
        ';
            } else {
              echo '
                      <tr class="genre bg-gray-100 border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
              if (strlen($model[$i]->titre) > 40) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->titre = substr($model[$i]->titre, 0, 40) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->titre . "</td>";
              }
              if (strlen($model[$i]->nom_album) > 30) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->nom_album = substr($model[$i]->nom_album, 0, 30) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[$i]->nom_album . "</td>";
              }
              if (strlen($model[$i]->nom_artiste) > 40) {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw] text-center'>" . $model[$i]->nom_artiste = substr($model[$i]->nom_artiste, 0, 40) . "..." . "</td>";
              } else {
                echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw] text-center'>" . $model[$i]->nom_artiste . "</td>";
              }
              echo '
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $model[$i]->prix . ' €</td>
                      <td class=" pl-10 py-4 whitespace-nowrap">
                        <form method="post" action="index.php?action=ajout-musique&name=' . $rang . '" value="add">
                            <input type="hidden" name="trackid" value=' . $model[$i]->ID . ' />
                            <input type="hidden" name="albumid" value=' . $rang . ' />
                            <button type="submit">
                              <svg class="w-7 stroke-[#FF742F]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                              </svg>
                            </button>
                        </form>
                       </td>
                      </tr>
                ';
            }
          }
          ?>
        </tbody>
      </table>
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

  const searchInput = document.querySelector('#cp');
  const genres = document.querySelectorAll('.genre');
  cp.addEventListener('input', (e) => {
    genres.forEach(genre => {
      if (!genre.textContent.toLocaleLowerCase().includes(e.target.value.toLocaleLowerCase())) {
        genre.classList.add('hidden')
      } else {
        genre.classList.remove('hidden');
      }
    })
  })
</script>
<?php
include_once("footer-it.php");
?>