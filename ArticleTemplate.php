<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $article->title; ?></title>
</head>
<body>
<h1><?php echo $article->title; ?></h1>
<p><?php echo $article->text; ?></p>
<br><br>
<a href="/index.php">Назад к списку новостей</a>
</body>
</html>