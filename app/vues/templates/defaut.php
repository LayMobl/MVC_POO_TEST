<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC POO</title>
    <base href="<?php echo \Noyau\Classes\App::getROOT(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="container">
<h1>MVC POO</h1>
<main class="row">
    <div class="col m8">
        <?php echo $content1; ?>
    </div>
    <aside class="col m4">
        <?php
        $ctrl = new \App\Controleurs\CategoriesControleur();
        $ctrl->indexAction();
        ?>
    </aside>
</main>

</body>
</html>
