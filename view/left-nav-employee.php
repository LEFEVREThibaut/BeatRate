<div class="grid grid-cols-5">
    <div>
        <div class="sidebar min-h-[100%] top-0 bottom-0 lg:left-0  max-w-fit overflow-y-auto text-center bg-gray-50">
            <div class="py-4 px-6">
                <img class="ml-16 h-28 py-2 px-2" src="./pictures/profil.png" alt="logo" id="logo">
                <h2>
            </div>
            <nav class="left-nav">
                <ul>
                    <?php
                    if ($_GET["action"] == "compte-sales") {
                        echo '
                            <li class="border-l-[#FF742F] border-y py-4 border-l-8">
                                <a class="flex items-center" href="index.php?action=compte-sales">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Informations du compte</h1>
                                </a>
                            </li>

                            <li class="border-b-gray-400 border-b py-4 hover:border-l-[#FF742F] border-l-8">
                                <a class="flex items-center" href="index.php?action=modif-compte-it">
                                    <svg class="w-5 ml-5 hover:text-orange-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Modifier mon compte</h1>
                                </a>
                            </li>
                            <li class="border-b-gray-400 border-b py-4 hover:border-l-[#FF742F] border-l-8">
                                <a href="index.php?action=deconnexion" class="flex items-center">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Se déconnecter</h1>
                                </a>
                            </li>
                        ';
                    } elseif ($_GET["action"] == "modif-compte-it" or $_GET["action"] == "modif-info-employee") {
                        echo '
                            <li class="hover:border-l-[#FF742F] border-y py-4 border-l-8">
                                <a class="flex items-center" href="index.php?action=compte-sales">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Informations du compte</h1>
                                </a>
                            </li>

                            <li class="border-b py-4 border-l-[#FF742F] border-l-8">
                                <a class="flex items-center" href="index.php?action=modif-compte-it">
                                    <svg class="w-5 ml-5 hover:text-orange-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Modifier mon compte</h1>
                                </a>
                            </li>
                            <li class="border-b-gray-400 border-b py-4 hover:border-l-[#FF742F] border-l-8">
                                <a href="index.php?action=deconnexion" class="flex items-center">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Se déconnecter</h1>
                                </a>
                            </li>
                        ';
                    } elseif ($_GET["action"] == "deconnexion") {
                        echo '
                            <li class="border-b-gray-400 hover:border-l-[#FF742F] border-y py-4 border-l-8">
                                <a class="flex items-center" href="index.php?action=compte-sales">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Informations du compte</h1>
                                </a>
                            </li>

                            <li class="border-b-gray-400 hover:border-l-[#FF742F] border-b py-4 border-l-8">
                                <a class="flex items-center" href="index.php?action=modif-compte-it">
                                    <svg class="w-5 ml-5 hover:text-orange-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Modifier mon compte</h1>
                                </a>
                            </li>
                            <li class="border-b py-4 border-l-[#FF742F] border-l-8">
                                <a href="index.php?action=deconnexion" class="flex items-center">
                                    <svg class="w-5 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    <h1 class="mx-6 my-4 text-xs font-bold uppercase tracking-widest">Se déconnecter</h1>
                                </a>
                            </li>
                        ';
                    }
                    ?>


                </ul>
            </nav>
        </div>
    </div>