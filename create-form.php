<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание статьи</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1>Cоздание статьи</h1>
<form class="ml-3" action="/create.php" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3" style="width: 20%;">
        <label for="title">Введите название статьи</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Заголовок" aria-label="Title" aria-describedby="basic-addon1">
    </div>
    <div class="form-group mb-3 custom-file" style="width: 20%;">
        <input type="file" name="image" class="custom-file-input" id="image">
        <label class="custom-file-label" for="image">Выберите изображение</label>
    </div>
    <div class="form-group" style="width: 20%;">
        <label for="content">Введите текст</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
</form>
</body>
</html>
