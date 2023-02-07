<?php
require_once('header-it.php');
?>
<main>
    <section>
        <?php
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "liste") {
                echo '
                    <ul class="mt-10 grid grid-cols-2 justify-items-center items-center border-b-2 border-b mx-20 mb-6">
                        <li class="text-xl font-bold mb-4"><a class="text-white bg-black  px-5 py-3 rounded-[25px] font-bold" href="index.php?action=liste">Clients</a></li>
                        <li class="text-xl font-bold mb-4"><a class="text-black bg-white px-5 py-3 rounded-[25px] font-bold hover:font-black" href="index.php?action=liste-emp">Employés</a></li>
                    </ul>
                ';
            } elseif ($_GET["action"] == "liste-emp") {
                echo '
                    <ul class="mt-10 grid grid-cols-2 justify-items-center items-center border-b-2 border-b mx-20 mb-6">
                        <li class="text-xl font-bold mb-4"><a class="text-black bg-white  px-5 py-3 rounded-[25px] font-bold hover:font-black" href="index.php?action=liste">Clients</a></li>
                        <li class="text-xl font-bold mb-4"><a class="text-white bg-black px-5 py-3 rounded-[25px] font-bold" href="index.php?action=liste-emp">Employés</a></li>
                    </ul>
                ';
            } else {
                echo '
                    <ul class="mt-10 grid grid-cols-2 justify-items-center items-center border-b-2 border-b mx-20 mb-6">
                        <li class="text-xl font-bold mb-4"><a class="text-white bg-black  px-5 py-3 rounded-[25px] font-bold" href="index.php?action=liste">Clients</a></li>
                        <li class="text-xl font-bold mb-4"><a class="text-black bg-white px-5 py-3 rounded-[25px] font-bold hover:font-black" href="index.php?action=liste-emp">Employés</a></li>
                    </ul>
                ';
            }
        } else {
            echo '
                <ul class="mt-10 grid grid-cols-2 justify-items-center items-center border-b-2 border-b mx-20 mb-6">
                    <li class="text-xl font-bold mb-4"><a class="text-white bg-black  px-5 py-3 rounded-[25px] font-bold" href="index.php?action=liste">Clients</a></li>
                    <li class="text-xl font-bold mb-4"><a class="text-black bg-white px-5 py-3 rounded-[25px] font-bold hover:font-black" href="index.php?action=liste-emp">Employés</a></li>
                </ul>
            ';
        }

        ?>

        <div class="ml-48 mt-6">
            <svg class="absolute z-50 top-64 w-7 stroke-gray-400 mx-2 my-2 -mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <?php
            if (isset($_GET["action"])) {
                if ($_GET["action"] == "liste") {
                    echo '
                        <input class="relative border border-[#FF742F] border-2 rounded-[5px] mt-3 py-2 px-12" type="text" placeholder="Recherchez un client" id="cp">
                    ';
                } elseif ($_GET["action"] == "liste-emp") {
                    echo '
                        <input class="relative border border-[#FF742F] border-2 rounded-[5px] mt-3 py-2 px-12" type="text" placeholder="Recherchez un employé" id="cp">
                    ';
                } else {
                    echo '
                        <input class="relative border border-[#FF742F] border-2 rounded-[5px] mt-3 py-2 px-12" type="text" placeholder="Recherchez un client" id="cp">
                    ';
                }
            } else {
                echo '
                    <input class="relative border border-[#FF742F] border-2 rounded-[5px] mt-3 py-2 px-12" type="text" placeholder="Recherchez un client" id="cp">
                ';
            }

            ?>
        </div>
        <div class="drop-shadow-lg flex flex-col mb-8">
            <div class="overflow-hidden">
                <table class="mt-4 mx-auto p-10 w-3/4">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                                Prénom Nom
                            </th>
                            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                                <?php
                                if (isset($_GET["action"])) {
                                    if ($_GET['action'] == "liste") {
                                        echo 'Entreprise';
                                    } else {
                                        echo 'Titre';
                                    }
                                } else {
                                    echo 'Titre';
                                }

                                ?>
                            </th>
                            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                                Pays
                            </th>
                            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                                Téléphone
                            </th>
                            <th scope="col" class="text-sm text-[#FF742F] px-6 py-4 text-left font-black text-center">
                                E-mail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($model as $value) {
                            if ($i % 2) {
                                echo "<tr class=\"ligne bg-gray-100 border-b\">";
                                $i++;
                            } else {
                                echo "<tr class=\"ligne bg-white border-b\">";
                                $i++;
                            }
                            echo "<td class=\"info px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center\">$value->FirstName $value->LastName</td>";
                            if (isset($_GET["action"])) {
                                if ($_GET['action'] == "liste") {
                                    if ($value->Company == null) {
                                        echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">/</td>";
                                    } else {
                                        echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Company</td>";
                                    }
                                } else {
                                    if ($value->Title == "") {
                                        echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">Customer</td>";
                                    } else {
                                        echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Title</td>";
                                    }
                                }
                            }
                            else {
                                if ($value->Company == null) {
                                    echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">/</td>";
                                } else {
                                    echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Company</td>";
                                }
                              
                            }

                            echo "<td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Country</td>
                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Phone</td>
                            <td class=\"text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center\">$value->Email</td></tr>";
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

    const searchInput = document.querySelector('#cp');
    const infos = document.querySelectorAll('.info');
    const ligne = document.querySelectorAll(".ligne");
    cp.addEventListener('input', (e) => {
        ligne.forEach(info => {
            if (!info.textContent.toLocaleLowerCase().includes(e.target.value.toLocaleLowerCase())) {
                info.classList.add('hidden')
            } else {
                info.classList.remove('hidden');
            }
        })
    })
</script>
<?php
include('footer-it.php');
?>