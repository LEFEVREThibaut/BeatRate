<?php
require_once('header-emp.php');
?>
<main>
    <section>
        <h2 class="font-black text-3xl ml-48 mt-10">Résumé achats</h2>

        <div class="flex flex-row gap-4 mt-8 ml-48">
            <div class="text-lg mt-1 font-bold">Choisir un Sales Support Agent</div>
            <div>
                <select class="py-2 px-4 text-[#FF742F] rounded-[5px] drop-shadow-sm ring-2 ring-[#FF742F]" onchange="catsel2(this)">
                    <?php
                    for ($i = 0; $i < count($model_emp); $i++) {
                        echo "<option value=\"" . $model_emp[$i]["EmployeeId"] . "\">" . $model_emp[$i]["FirstName"] . " " . $model_emp[$i]["LastName"] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <form class="mt-1.5 ml-10 flex flex-row gap-16" onchange="catsel()">
                <div>
                    <input value="1" name="checked" class="mt-1 w-4 h-4 accent-[#FF742F]" type="radio" id="pays" checked>
                    <label for="pays" class="ml-4 text-lg font-bold">Pays</label>
                </div>
                <div>
                    <input value="2" id="genre" name="checked" class="mt-1 w-4 h-4 accent-[#FF742F]" type="radio">
                    <label for="genre" class="ml-4 text-lg font-bold">Genre</label>
                </div>`
            </form>

        </div>
        <section id="3" style="display: block">
            <h2 class="text-center mt-8 mb-2">Jane Peacock</h2>
            <div class="drop-shadow-lg flex flex-col mb-8">
                <div class="py-2 inline-block min-w-full">
                    <div class="overflow-hidden">
                        <div id="tab1" style="display: block">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Pays
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_pays_3); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_3[$i]["Pays"] . "</td>
                                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_3[$i]["montant_vente"] . "</td>
                                            </tr>
                                        ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab2" style="display: none">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Genre
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_genre_3); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_3[$i]["genre"] . "</td>
                                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_3[$i]["montant_vente"] . "</td>
                                            </tr>
                                        ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="4" style="display: none">
            <h2 class="text-center mt-8 mb-2">Margaret Park</h2>
            <div class="drop-shadow-lg flex flex-col mb-8">
                <div class="py-2 inline-block min-w-full">
                    <div class="overflow-hidden">
                        <div id="tab3" style="display: block">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Pays
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_pays_4); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                          <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_4[$i]["Pays"] . "</td>
                          <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_4[$i]["montant_vente"] . "</td>
                          </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab4" style="display: none">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Genre
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_genre_4); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                              <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_4[$i]["genre"] . "</td>
                              <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_4[$i]["montant_vente"] . "</td>
                            </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="5" style="display: none">
            <h2 class="text-center mt-8 mb-2">Steve Johnson</h2>
            <div class="drop-shadow-lg flex flex-col mb-8">
                <div class="py-2 inline-block min-w-full">
                    <div class="overflow-hidden">
                        <div id="tab5" style="display: block">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Pays
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_pays_5); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                              <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_5[$i]["Pays"] . "</td>
                              <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_pays_5[$i]["montant_vente"] . "</td>
                              </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab6" style="display: none">
                            <table class="mt-4 mx-auto p-10 w-3/4">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Genre
                                        </th>
                                        <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-center font-black">
                                            Prix total
                                        </th>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($model_genre_5); $i++) {
                                        if ($i % 2) {
                                            echo "<tr class=\"bg-gray-100 border-b\">";
                                        } else {
                                            echo "<tr class=\"bg-white border-b\">";
                                        }
                                        echo "
                                    <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_5[$i]["genre"] . "</td>
                                    <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">" . $model_genre_5[$i]["montant_vente"] . "</td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

    function catsel() {

        var btn = document.getElementById("pays");
        let y = btn.checked;
        console.log(y);
        let tab1 = document.getElementById('tab1');
        let tab2 = document.getElementById('tab2');
        let tab3 = document.getElementById('tab3');
        let tab4 = document.getElementById('tab4');
        let tab5 = document.getElementById('tab5');
        let tab6 = document.getElementById('tab6');
        if (y == false) {
            tab1.style.display = "none";
            tab2.style.display = "block";
            tab3.style.display = "none";
            tab4.style.display = "block";
            tab5.style.display = "none";
            tab6.style.display = "block";

        } else if (y == true) {
            tab1.style.display = "block";
            tab2.style.display = "none";
            tab3.style.display = "block";
            tab4.style.display = "none";
            tab5.style.display = "block";
            tab6.style.display = "none";
        }
    }

    function catsel2(sel) {
        var opt = sel.getElementsByTagName("option");
        for (var i = 0; i < opt.length; i++) {
            var x = document.getElementById(opt[i].value);
            if (x) x.style.display = "none";
        }
        var cat = document.getElementById(sel.value);
        if (cat) cat.style.display = "block";
    }
</script>
<?php
require_once('footer-sales.php')
?>