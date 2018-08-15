<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
</head>
<body>
    <h1>PHP-2</h1>
    <h2>5 урок</h2>
    <h2>Модели данных и ООП</h2>
    <h4>Домашняя работа</h4>
    <h2>Новости</h2>

    <?php
    foreach ( $data as $article ) {
        ?>
        <a href="/article/?id=<?php echo $article->id; ?>"><h3><?php echo $article->header; ?></h3></a>
        <p><?php echo $article->text; ?></p>
        <p>(Автор: <?php echo $article->author->name ?? 'неизвестен'; ?>)</p>
        <hr>
    <?php } ?>

</body>
</html>