<html>
<head>
    <title>Магазин</title>
</head>
<body>
<nav>
    <?php require_once('utils/menu.php') ?>
    <ul>
        <?php
        foreach ($menu_arr as $key => $item) { ?>
            <li><a href="/<?= $key ?>.php"><?= $item ?></a></li>
        <?php } ?>
    </ul>
</nav>