<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $article->title; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1 style="text-align: center;"><?= $article->title; ?></h1>
<img src="/assets/images/news/<?= $article->image; ?>" alt="" width="50%" height="auto;" style="display: block; margin-right: auto; margin-left: auto; margin-top: 50px; margin-bottom: 50px;">
<p style="display: block; width: 80%; margin-left: auto; margin-right: auto; font-size: 20px;"><?= $article->content; ?></p>
<p>Автор: <?= $article->author; ?></p>
</body>
</html>