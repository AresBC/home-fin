<?php declare(strict_types=1);

use Core\AssetLoader\AssetLoader;

$assetLoader = new AssetLoader()


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Finance</title>
    <?= $assetLoader->css('app') ?>
    <?= $assetLoader->js('app') ?>
</head>
<body>

<main>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Home Finance</h1>
            </div>
        </div>
        <div class="row">
            <div id="budget-table"></div>
        </div>
    </div>


</main>

</body>
</html>