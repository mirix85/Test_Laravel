<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменение аватара пользователя</title>
</head>
<body>
    <form action="/edit_profile" method="post" enctype="multipart/form-data">
        @csrf
        <p>Ваше имя:</p>
        <input type="text" name="name">
        <p>Ваша фамилия:</p>
        <input type="text" name="surname">
        <p>Ваше отчество:</p>
        <input type="text" name="patronymic">
        <p>Дата рождения:</p>
        <input type="text" name="birthday">
        <p>Статус</p>
        <textarea cols="70" rows="10" name="status"></textarea>
        <p>Аватар:</p>
        <input type="file" name="image">
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
