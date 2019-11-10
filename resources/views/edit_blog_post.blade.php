<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <form action="/blog" method="post">
        @csrf
        <p>Название статьи:</p>
        <input type="text" name="name"/>
        <p>Текст статьи:</p>
        <textarea name="text" cols="100" rows="10"></textarea>
        <br>
        <input type="submit" value="Опубликовать">
    </form>
</body>
</html>
