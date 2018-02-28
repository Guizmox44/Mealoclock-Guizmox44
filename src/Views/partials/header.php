<header>
    <!-- Une barre de couleur rouge (dégradé) -->
    <div class="navbar m-0 p-0 fixed-top">
        <!-- Première ligne de menu -->
        <div class="d-flex justify-content-between w-100">
            <div class="box can-hover p-3">
                <i class="fas fa-bars"></i>
            </div>
            <div class="box box-search p-3">

                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
                </button> -->


                <div class="dropdown">
                    <!-- L'image de la loupe -->
                    <i class="fas fa-search"></i>
                    <!-- Le champs de recherche -->
                    <input
                        id="searchEvents"
                        type="text"
                        value=""
                        placeholder="Rechercher..."
                    >
                    <div class="dropdown-menu"></div>
                </div>


            </div>
            <div class="box p-3">
                <a href="#">
                    <img src="<?=$baseUrl?>/public/images/title.svg" alt="mealoclock">
                </a>
            </div>
            <div class="box can-hover p-3">
                <i class="fas fa-edit"></i>
                Inscription
            </div>
            <div class="box can-hover p-3">
                <i class="fas fa-sign-in-alt"></i>
                Connexion
            </div>
        </div>

        <!-- Deuxième ligne de menu -->
        <div class="subnav d-flex justify-content-between w-100">
            <div class="box p-3">Communautés</div>
            <div class="box p-3">Évènements</div>
            <div class="box p-3">Membres</div>
            <div class="box p-3">Twitter</div>
            <div class="box p-3">Facebook</div>
        </div>
    </div>
</header>
