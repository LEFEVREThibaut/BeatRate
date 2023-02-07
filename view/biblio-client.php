<?php require_once("view/header-client.php"); ?>

<body>
  <main>
    <section>
      <h2 class="font-black text-3xl ml-48 mt-10">Vos titres</h2>

      <div class="flex flex-row gap-4 mt-8 ml-48">
        <div class="text-lg">Filtrer par</div>
        <div>
          <select id="rang" class="p-2 text-[#FF742F] rounded-[5px] drop-shadow-sm">
            <option value="1">Titre</option>
            <option value="3">Artiste</option>
            <option value="2">Album</option>
          </select>
        </div>
      </div>

      <div class="flex flex-col">

        <div class="overflow-hidden">
          <table id="tableau1" class="mt-4 mb-20 mx-auto p-10 w-3/4">
            <thead class="bg-white border-b">
              <tr>
                <th></th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Titre
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black max-w-[20vw]">
                  Artiste
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Album
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Durée
                </th>
              </tr>
            </thead>
            <tbody>

              <?php
              for ($i = 0; $i < count($model[0]); $i++) {
                $min = floor($model[0][$i]->Milliseconds / 1000 / 60);
                $sec = $model[0][$i]->Milliseconds / 1000 % 60;
                if ($i % 2) {
                  echo '
                      <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[0][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->titre = substr($model[0][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->titre . "</td>";
                  }
                  if (strlen($model[0][$i]->artiste) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->artiste = substr($model[0][$i]->artiste, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->artiste . "</td>";
                  }
                  if (strlen($model[0][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->nom_album = substr($model[0][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->nom_album . "</td>";
                  }
                  echo '
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                      </tr>
                ';
                } else {
                  echo '
                      <tr class="bg-gray-100 border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[0][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->titre = substr($model[0][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->titre . "</td>";
                  }
                  if (strlen($model[0][$i]->artiste) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->artiste = substr($model[0][$i]->artiste, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->artiste . "</td>";
                  }
                  if (strlen($model[0][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->nom_album = substr($model[0][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[0][$i]->nom_album . "</td>";
                  }
                  echo '
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                      </tr>
                ';
                }
              }
              ?>
            </tbody>
          </table>

          <table id="tableau2" class="mt-4 mb-20 mx-auto p-10 w-3/4">
            <thead class="bg-white border-b">
              <tr>
                <th></th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Titre
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black max-w-[20vw]">
                  Artiste
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Album
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Durée
                </th>
              </tr>
            </thead>
            <tbody>

              <?php
              for ($i = 0; $i < count($model[1]); $i++) {
                $min = floor($model[1][$i]->Milliseconds / 1000 / 60);
                $sec = $model[1][$i]->Milliseconds / 1000 % 60;

                if ($i % 2) {
                  echo '
                  <tr class="bg-white border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[1][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->titre = substr($model[1][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->titre . "</td>";
                  }
                  if (strlen($model[1][$i]->artiste) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->artiste = substr($model[1][$i]->artiste, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->artiste . "</td>";
                  }
                  if (strlen($model[1][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->nom_album = substr($model[1][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->nom_album . "</td>";
                  }
                  echo '
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                  </tr>
                ';
                } else {
                  echo '
                  <tr class="bg-gray-100 border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[1][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->titre = substr($model[1][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->titre . "</td>";
                  }
                  if (strlen($model[1][$i]->artiste) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->artiste = substr($model[1][$i]->artiste, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->artiste . "</td>";
                  }
                  if (strlen($model[1][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->nom_album = substr($model[1][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[1][$i]->nom_album . "</td>";
                  }
                  echo '
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                  </tr>
                ';
                }
              }
              ?>

            </tbody>
          </table>

          <table id="tableau3" class="mt-4 mb-20 mx-auto p-10 w-3/4">
            <thead class="bg-white border-b">
              <tr>
                <th></th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Titre
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black max-w-[20vw]">
                  Artiste
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Album
                </th>
                <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black">
                  Durée
                </th>
              </tr>
            </thead>
            <tbody>

              <?php
              for ($i = 0; $i < count($model[2]); $i++) {
                $min = floor($model[2][$i]->Milliseconds / 1000 / 60);
                $sec = $model[2][$i]->Milliseconds / 1000 % 60;
                if ($i % 2) {
                  echo '
                  <tr class="bg-white border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[2][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->titre = substr($model[2][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->titre . "</td>";
                  }
                  if (strlen($model[2][$i]->artiste) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->artiste = substr($model[2][$i]->artiste, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->artiste . "</td>";
                  }
                  if (strlen($model[2][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->nom_album = substr($model[2][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->nom_album . "</td>";
                  }
                  echo '
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                  </tr>
                ';
                } else {
                  echo '
                  <tr class="bg-gray-100 border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">' . ($i + 1) . '</td>
                ';
                  if (strlen($model[2][$i]->titre) > 40) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->titre = substr($model[2][$i]->titre, 0, 40) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->titre . "</td>";
                  }
                  if (strlen($model[2][$i]->artiste) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->artiste = substr($model[2][$i]->artiste, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->artiste . "</td>";
                  }
                  if (strlen($model[2][$i]->nom_album) > 30) {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->nom_album = substr($model[2][$i]->nom_album, 0, 30) . "..." . "</td>";
                  } else {
                    echo "<td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-[20vw]'>" . $model[2][$i]->nom_album . "</td>";
                  }
                  echo '
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">' . $min . " min " . $sec . " s" . '</td>
                  </tr>
                ';
                }
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

    window.addEventListener("DOMContentLoaded", (event) => {
      var select = document.getElementById('rang');
      var selectedValue = null;
      var tableau1 = document.getElementById("tableau1");
      var tableau2 = document.getElementById("tableau2");
      var tableau3 = document.getElementById("tableau3");
      tableau2.style.display = "none";
      tableau3.style.display = "none";
      select.addEventListener("change", function() {
        var tableau1 = document.getElementById("tableau1");
        var tableau2 = document.getElementById("tableau2");
        var tableau3 = document.getElementById("tableau3");
        selectedValue = this.value;
        if (selectedValue == 1) {
          tableau1.style.display = "";
          tableau2.style.display = "none";
          tableau3.style.display = "none";
        }
        if (selectedValue == 2) {
          tableau1.style.display = "none";
          tableau2.style.display = "";
          tableau3.style.display = "none";
        }
        if (selectedValue == 3) {
          tableau1.style.display = "none";
          tableau2.style.display = "none";
          tableau3.style.display = "";
        }
      });
    });
  </script>
  <?php require_once("footer.php") ?>