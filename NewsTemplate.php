<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($news as $article) {?>
    <div class="article">
        <h3 class="title"><a href="/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h3>
        <div class="text"><?php echo $article->text; ?></div>
    </div>
<?php }?>
</body>
</html>
