<?php require("./layout/header.php"); ?>
<h1 class="mt-2">Pokédex</h1>

<div class="d-flex justify-content-center gap-3">
    <?php

    function loadClass(string $class)
    {
        require("./models/$class.php");
    }

    spl_autoload_register("loadClass");

    $aquali = new Pokemon(3, 134, "Aquali", "https://www.pokepedia.fr/images/thumb/6/6b/Aquali-RFVF.png/500px-Aquali-RFVF.png", "Eau", "", "Timide");
    $voltali = new Pokemon(1, 135, "Voltali", "https://www.pokepedia.fr/images/thumb/8/89/Voltali-RFVF.png/500px-Voltali-RFVF.png", "Electrik", "", "Timide");
    $pyroli = new Pokemon(2, 136, "Pyroli", "https://www.pokepedia.fr/images/thumb/6/64/Pyroli-RFVF.png/500px-Pyroli-RFVF.png", "Feu", "", "Rigide");

    $pokemons = [$aquali, $voltali, $pyroli];

    foreach ($pokemons as $pokemon) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="<?= $pokemon->getName() ?>">
            <div class="card-body">
                <h5 class="card-title">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></h5>
                <p class="card-text">
                    <ul>
                        <li><?= $pokemon->getType1() ?></li>
                        <li><?= $pokemon->getType2() ?></li>
                    </ul>
                </p>
                <a href="#" class="btn btn-warning">Modifier</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </div>
        </div>

    <?php endforeach ?>
</div>

<?php require("./layout/footer.php"); ?>